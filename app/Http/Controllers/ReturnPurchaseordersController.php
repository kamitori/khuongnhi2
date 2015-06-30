<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\MProduct;
use App\Company;
use App\Country;
use App\Province;
use App\User;
use App\Oum;
use App\ProductStock;
use App\ReturnPurchaseorder;
use App\Address;
use App\SellPrice;
use Datatables;
use Illuminate\Http\Request;
use Session;
use DB;

class ReturnPurchaseordersController extends Controller {
	/**
	* Show the profile for the given user.
	*
	* @param  int  $id
	* @return Response
	*/
	
	public function getIndex(Request $request){
		self::anyEntry($request);
	}

	public function anyClear(Request $request){
		Session::forget('product_of_rpo'.session('current_returnpurchaseorder'));
		Session::forget('current_returnpurchaseorder');
		return redirect('returnpurchaseorders');
	}

	public function anyCreate(Request $request)
	{
		$returnpurchaseorder = new ReturnPurchaseorder;
		$address = new Address;
		$returnpurchaseorder->date = date("Y-m-d H:i:s");
		if($returnpurchaseorder->save()){
			session(['current_returnpurchaseorder' => $returnpurchaseorder->id]);
			$address->module_id  = $returnpurchaseorder['id'];
			$address->module_type  = 'App\ReturnPurchaseorder';
			$address->save();
			$returnpurchaseorder->address_id = $address->id;
			$returnpurchaseorder->save();
		}	
		return redirect('returnpurchaseorders');
	}

	public function anyDelete(Request $request)
	{
		$arr_return = array('status'=>'error');
		$id_returnpurchaseorder = session('current_returnpurchaseorder') !== null ? session('current_returnpurchaseorder') : 0;
		if($id_returnpurchaseorder){
			$returnpurchaseorder = ReturnPurchaseorder::find($id_returnpurchaseorder);
			if(!$returnpurchaseorder->status){
				if($returnpurchaseorder->delete()){
					Address::where('module_id','=',$id_returnpurchaseorder)->where('module_type','=','App\ReturnPurchaseorder')->delete();
					$list_mproduct = Mproduct::where('module_id','=',$id_returnpurchaseorder)
									->where('module_type','=','App\ReturnPurchaseorder')
									->lists('id');
					MProduct::whereIn('id',$list_mproduct)->delete();
					$arr_return['status'] = 'success';
				}else{
					$arr_return['message'] = 'Delete fail !';
				}
			}else{
				header('Content-Type: text/html; charset=utf-8');
				echo  'Không thể xóa hóa đơn đã hoàn thành';die;
			}

			Session::forget('current_returnpurchaseorder');
		}else{
			$arr_return['message'] = 'Không tìm thấy hóa đơn';
		}
		return $arr_return;
	}


	public function getDeleteFromList(Request $request,$id=0)
	{
		$id_returnpurchaseorder = $id;
		if($id_returnpurchaseorder){
			$returnpurchaseorder = ReturnPurchaseorder::find($id_returnpurchaseorder);
			if(!$returnpurchaseorder->status){
				if($returnpurchaseorder->delete()){
					Address::where('module_id','=',$id_returnpurchaseorder)->where('module_type','=','App\ReturnPurchaseorder')->delete();
					$list_mproduct = Mproduct::where('module_id','=',$id_returnpurchaseorder)
									->where('module_type','=','App\ReturnPurchaseorder')
									->lists('id');
					MProduct::whereIn('id',$list_mproduct)->delete();
				}
			}
		}
		return redirect('returnpurchaseorders/list');
	}

	public function anyEntry(Request $request,$id=null)
	{
		\DB::enableQueryLog();
		if(isset($id) && $id!=null){
			$id_return_purchaseorder = $id;
			$returnpurchaseorder = ReturnPurchaseorder::find($id_return_purchaseorder);
			if($returnpurchaseorder != null){
				session(['current_returnpurchaseorder' => $returnpurchaseorder['id']]);
			}else{
				return redirect('returnpurchaseorders');
			}
		}else{
			$id_return_purchaseorder = session('current_returnpurchaseorder') !== null ? session('current_returnpurchaseorder') : 0;
			if($id_return_purchaseorder){
				$returnpurchaseorder = ReturnPurchaseorder::find($id_return_purchaseorder);
				session(['current_returnpurchaseorder' => $returnpurchaseorder['id']]);
			}else{
				$returnpurchaseorder = ReturnPurchaseorder::get()->last();
				if($returnpurchaseorder){
					session(['current_returnpurchaseorder' => $returnpurchaseorder['id']]);
				}else{
					$returnpurchaseorder = new ReturnPurchaseorder;
					$returnpurchaseorder->date = date("Y-m-d H:i:s");
					$returnpurchaseorder->save();
					session(['current_returnpurchaseorder' => $returnpurchaseorder->id]);
				}
			}
		}
		if(!isset($returnpurchaseorder['address_id']) || $returnpurchaseorder['address_id']==0){
			$address = new Address;
			$address->module_id  = $returnpurchaseorder->id;
			$address->module_type  = 'App\ReturnPurchaseorder';
			$address->save();
			$returnpurchaseorder->address_id = $address->id;
			$returnpurchaseorder->save();
		}else{
			$address = Address::find($returnpurchaseorder->address_id);
		}
		$country_province = Province::addSelect('provinces.name as province_name')
						->where('provinces.id','=',$address->province_id)
						->addSelect('countries.name as country_name')
						->leftJoin('countries','countries.id','=','provinces.country_id')
						->first();
		$address = $address->toArray();
		$returnpurchaseorder = $returnpurchaseorder->toArray();
		$returnpurchaseorder['province_name'] = isset($country_province->province_name)?$country_province->province_name:'';
		$returnpurchaseorder['country_name'] = isset($country_province->country_name)?$country_province->country_name:'';
		// var_dump(DB::getQueryLog());
		// pr($returnpurchaseorder);die;

		//Init array
		$distributes = array();
		$oums = array();
		$users = array();
		$countries = array();
		$list_product = array();

		//Get value array
		$distributes = Company::getDistributeList()->with('address')->get()->toArray();
		$oums = Oum::get()->toArray();
		$users = User::get();
		$countries = Country::with('provinces')->get()->toArray();

		$arr_product = MProduct::where('module_type','=','App\ReturnPurchaseorder')
						->where('module_id','=',$returnpurchaseorder['id'])
						->lists('product_id');

		Session::forget('product_of_rpo'.session('current_returnpurchaseorder'));
		foreach ($arr_product as $key => $value) {
			Session::put('product_of_rpo'.session('current_returnpurchaseorder').".".$value , $value);
		}

		$view_list_product = self::getListProduct();
		// $view_list_product = '';


		// pr($list_product);die;
		$this->layout->content=view('returnpurchaseorder.entry',[	'distributes'=>$distributes,
										'users'=>$users,
										'countries'=>$countries,
										'returnpurchaseorder'=>$returnpurchaseorder,
										'address'=>$address,
										'oums'=>$oums,
										'view_list_product'=>$view_list_product
									]);
	}

	public function postUpdate(Request $request)
	{
		$arr_return = array(
					'status' => 'error',
					'message'=>''
				);
		$time =date('H:i:s', time());
		$id_return_purchaseorder = session('current_returnpurchaseorder') !== null ? session('current_returnpurchaseorder') : 0;
		if($id_return_purchaseorder){
			$returnpurchaseorder = ReturnPurchaseorder::find($id_return_purchaseorder);
			session(['current_returnpurchaseorder' => $returnpurchaseorder['id']]);
			$time = date('H:i:s', strtotime($returnpurchaseorder->date));
		}else{

			$returnpurchaseorder = new ReturnPurchaseorder;
			$returnpurchaseorder->save();
			session(['current_returnpurchaseorder' => $returnpurchaseorder->id]);
		}
	if($returnpurchaseorder->status == 0){
		$returnpurchaseorder->company_id = $request->has('company_id') ? $request->input('company_id') : 0;
		$returnpurchaseorder->user_id = $request->has('user_id') ? $request->input('user_id') : 0;
		$returnpurchaseorder->date = $request->has('date') ? date("Y-m-d H:i:s",strtotime($request->input('date').' '.$time)) : date("Y-m-d H:i:s");
		$returnpurchaseorder->company_phone = $request->has('company_phone') ? $request->input('company_phone') : '';
		$returnpurchaseorder->company_email = $request->has('company_email') ? $request->input('company_email') : '';
		$address_id = isset($returnpurchaseorder->address_id) ? $returnpurchaseorder->address_id : 0;

		if($returnpurchaseorder['address_id']==0){
			$address = new Address;
			
		}else{
			$address = Address::find($address_id);
		}

		$address->module_id  = $returnpurchaseorder->id;
		$address->module_type  = 'App\ReturnPurchaseorder';
		$address->address  = $request->has('address') ? $request->input('address') : '';
		$address->town_city  = $request->has('town_city') ? $request->input('town_city') : '';
		$address->zip_postcode  = $request->has('zip_postcode') ? $request->input('zip_postcode') : '';
		$address->country_id  = $request->has('country_id') ? $request->input('country_id') : 0;
		$address->province_id  = $request->has('province_id') ? $request->input('province_id') : 0;
		$address->save();
		$returnpurchaseorder->address_id = $address->id;
	}
		$returnpurchaseorder->status = $request->has('status')?1:0;
		$check_save_in_stock = true;
		if($returnpurchaseorder->status){
			$arr_mproduct = Mproduct::select('m_products.id','quantity','specification','name','m_product_id')
							->where('module_id', '=', $returnpurchaseorder->id)
							->where('module_type', '=', 'App\ReturnPurchaseorder')
							->leftJoin('products','products.id','=','m_products.product_id')
							->get()->toArray();
			foreach ($arr_mproduct as $key => $mproduct) {
				$mproduct_po = Mproduct::find($mproduct['m_product_id']);
				$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
				$product_stock->in_stock = $product_stock->in_stock -  ($mproduct['quantity']*$mproduct['specification']);
				if($product_stock->in_stock < 0){
					$check_save_in_stock = false;
					$arr_return['message'] .= 'Số lượng sản phẩm '.$mproduct['name'].' nhập vào lớn hơn số lượng đã nhập<br/><br/>';
				}
			}
		}else{
			$arr_mproduct = Mproduct::select('m_products.id','quantity','specification','name','m_product_id')
							->where('module_id', '=', $returnpurchaseorder->id)
							->where('module_type', '=', 'App\ReturnPurchaseorder')
							->leftJoin('products','products.id','=','m_products.product_id')
							->get()->toArray();
			foreach ($arr_mproduct as $key => $mproduct) {
				$mproduct_po = Mproduct::find($mproduct['m_product_id']);
				$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
				$product_stock->in_stock = $product_stock->in_stock + ($mproduct['quantity']*$mproduct['specification']);
				$product_stock->save();
			}
		}

		if($check_save_in_stock){
			if($returnpurchaseorder->save()){
				if($returnpurchaseorder->status){
					foreach ($arr_mproduct as $key => $mproduct) {
						$mproduct_po = Mproduct::find($mproduct['m_product_id']);
						$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
						$product_stock->in_stock = $product_stock->in_stock -  ($mproduct['quantity']*$mproduct['specification']);
						$product_stock->save();
					}
				}
				Mproduct::where('module_id', '=', $returnpurchaseorder->id)
						->where('module_type', '=', 'App\ReturnPurchaseorder')
						->update(['company_id' => $returnpurchaseorder->company_id ]);
				$arr_return['status']= 'success';
			}else{
				$arr_return['message']= 'Saving fail !';
			}
		}
		return $arr_return;
	}

	public function anyListClear(Request $request)
	{
		Session::forget('sort_filter_returnpurchaseorder');
		return redirect('returnpurchaseorders/list');
	}

	public function anyList(Request $request)
	{
		\DB::enableQueryLog();
		if($request->has('input-sort')){
			$arr_sort = $request->input('input-sort');
			$arr_sort =(array) json_decode($arr_sort);
		}elseif( session('sort_filter_returnpurchaseorder.arr_sort') !== null){
			$arr_sort = session('sort_filter_returnpurchaseorder.arr_sort');
		}else{
			$arr_sort=array();
		}
		session('sort_filter_returnpurchaseorder.arr_sort', $arr_sort);


		if($request->has('input-filter')){
			$arr_filter = $request->input('input-filter');
		}elseif( session('sort_filter_returnpurchaseorder.arr_filter') !== null ){
			$arr_filter = session('sort_filter_returnpurchaseorder.arr_filter');
		}else{
			$arr_filter=[
					'id'=>'',
					'company_id'=>'',
					'date'=>'',
					'status'=>''
				       ];
		}
		session(['sort_filter_returnpurchaseorder.arr_sort'=>$arr_sort]);
		session(['sort_filter_returnpurchaseorder.arr_filter'=> $arr_filter]);

		//Init array
		$distributes = array();
		$list_id = array();
		$list_date = array();
		$list_returnpurchaseorder = array();

		//Get value array
		$distributes = Company::getDistributeList()->get()->toArray();
		$list_id = ReturnPurchaseorder::lists('id');
		$list_date = ReturnPurchaseorder::orderBy('date','desc')->lists('date');
		foreach ($list_date as $key => $value) {
			$list_date[$key] = date('d-m-Y',strtotime($value));
		}
		$list_date = array_unique($list_date);

		$list_returnpurchaseorder = ReturnPurchaseorder::select('return_purchaseorders.*','suminvest.*')->with('company')
					->leftJoin(
							DB::raw(' (
									select module_id, module_type,sum(invest) as sum_invest 
									from m_products where module_type = "App\\\\ReturnPurchaseorder" group by  module_id 
								    ) as suminvest'), function($join){
								$join->on('return_purchaseorders.id', '=', 'module_id');
							}
						);
		foreach ($arr_sort as $key => $value) {
			if($key=='company_id'){
				$list_returnpurchaseorder = $list_returnpurchaseorder->leftJoin('companies','companies.id','=','return_purchaseorders.company_id')->orderBy('companies.name',$value);
			}else{
				$list_returnpurchaseorder = $list_returnpurchaseorder->orderBy($key,$value);
			}
		}
		if($arr_filter['id']!=''){
			$list_returnpurchaseorder->where('id',$arr_filter['id']);
		}else{
			foreach ($arr_filter as $key => $value) {
				if($value!=''){
					if($key=='date'){
						$now = date("Y-m-d H:i:s",strtotime($arr_filter['date']));
						$tomorow = date("Y-m-d H:i:s",strtotime($arr_filter['date'])+86400);
						$list_returnpurchaseorder->where('date','>=',$now)->where('date','<',$tomorow);
					}else{
						$list_returnpurchaseorder->where($key,$value);
					}
				}
			}
		}
		if(!isset($arr_filter['status'])){
			$arr_filter['status'] = '';
		}
		$list_returnpurchaseorder = $list_returnpurchaseorder->paginate(20);

		// var_dump(DB::getQueryLog());die;
		$this->layout->content=view('returnpurchaseorder.list', [
								'distributes'		=>	$distributes,
								'arr_sort' 		=> 	$arr_sort,
								'arr_filter' 		=> 	$arr_filter,
								'list_id' 		=>	$list_id,
								'list_date' 		=>	$list_date,
								'list_returnpurchaseorder'	=>	$list_returnpurchaseorder
							        ]);
	}

	public function postAddProductSession(Request $request){
		$arr_id = $request->has('id')?$request->input('id'):array();
		foreach ($arr_id as $key => $value) {
			Session::put('product_of_rpo'.session('current_returnpurchaseorder').".".$value , $value);
		}
		return '';
	}

	public function postRemoveProductSession(Request $request){
		$arr_id = $request->has('id')?$request->input('id'):array();
		foreach ($arr_id as $key => $value) {
			Session::forget('product_of_rpo'.session('current_returnpurchaseorder').".".$value);
		}
		return '';
	}

	public function anyAddProduct(Request $request){
		$arr_return = array(
			"status"=>'success'
		);
		$company_id = $request->has('company_id')?$request->input('company_id'):0;
		$module_id = session('current_returnpurchaseorder');
		$module_type = 'App\ReturnPurchaseorder';
		$arr_product = session('product_of_rpo'.session('current_returnpurchaseorder'));
		$arr_product_of_rpo = Mproduct::where('module_id','=',$module_id)
						->where('module_type','=',$module_type)
						->lists('product_id');


		foreach ($arr_product as $key => $product_id) {
			if(!in_array($product_id, $arr_product_of_rpo)){
				$product = MProduct::find($product_id);
				$mproduct = new MProduct;
				$mproduct->product_id	=	$product->product_id;
				$mproduct->m_product_id	=	$product->id;
				$mproduct->module_id	= 	$module_id;
				$mproduct->company_id	= 	$product->company_id;
				$mproduct->module_type	=	$module_type;
				$mproduct->specification	=	$product->specification;
				$mproduct->oum_id		=	$product->oum_id;
				$mproduct->origin_price	=	$product->origin_price;
				$mproduct->save();
			}
		}


		foreach ($arr_product_of_rpo as $key => $product_id) {
			if(!in_array($product_id, $arr_product)){
				$mproduct = MProduct::where('module_id','=',$module_id)
						->where('module_type','=',$module_type)
						->where('product_id','=',$product_id)->first()->toArray();

				$id_product = $mproduct['product_id'];
				$quantity = $mproduct['quantity'];
				$check = MProduct::where('module_id','=',$module_id)
						->where('module_type','=',$module_type)
						->where('product_id','=',$product_id)->delete();
			}
		}
		return $arr_return;
	}

	public function getListProduct(){
		$id = session('current_returnpurchaseorder');
		//Init array
		$distributes = array();
		$oums = array();
		$list_product = array();

		//Get value
		$distributes = Company::getDistributeList()->with('address')->get()->toArray();
		$oums = Oum::get()->toArray();
		$list_product = MProduct::select('m_products.*','products.sku','products.name')->where('module_type','=','App\ReturnPurchaseorder')
						->where('module_id','=',$id)
						->leftJoin('products','products.id','=','m_products.product_id')
						->get()->toArray();
		$returnpurchaseorder = ReturnPurchaseorder::select('status')->where('id','=',$id)->first()->toArray();
		return view('returnpurchaseorder.list-product',[	'distributes'=>$distributes,
							'oums'=>$oums,
							'list_product'=>$list_product,
							'returnpurchaseorder'=>$returnpurchaseorder
						]);
	}

	public function postUpdateMproduct(Request $request){
		$arr_return= array('status'=>'error','invest'=>0);
		$id = $request->has('id')?$request->input('id'):0;
		if($id){
			$mproduct = MProduct::find($id);
			$mproduct_po = Mproduct::find($mproduct->m_product_id);
			$mproduct->oum_id =  $request->has('oum_id')?$request->input('oum_id'):0;
			$mproduct->origin_price =  $request->has('origin_price')?$request->input('origin_price'):0;
			$mproduct->specification =  $request->has('specification')?$request->input('specification'):0;
			$old_quantity = $mproduct->quantity ;
			$mproduct->quantity =  $request->has('quantity')?$request->input('quantity'):0;
			$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
			$product_stock->in_stock = $product_stock->in_stock - ($mproduct->quantity - $old_quantity);
			$mproduct->invest = $mproduct->specification* $mproduct->quantity* $mproduct->origin_price;
			// if($product_stock->in_stock >=0){
				if( !$mproduct->status){
					if($mproduct->save()){
						$arr_return['status'] = 'success';
						$arr_return['invest'] = number_format( $mproduct->invest );
					}else{
						$arr_return['message'] = 'Saving fail !';
					}
				}else{
					$arr_return['message'] = 'Đơn hàng đã hoàn thành không thể cập nhật';
				}
			// }else{
			// 	$arr_return['message'] = 'Số lượng nhập thấp hơn số lượng đã bán';
			// }
		}
		return $arr_return;
	}

	public function postDeleteProduct(Request $request){
		$arr_return= array('status'=>'error');
		$id = $request->has('id')?$request->input('id'):0;
		if($id){
			$mproduct = MProduct::find($id);
			$id_product = $mproduct->m_product_id;
			$quantity = $mproduct->quantity;
			$specification = $mproduct->specification;
			$check  = MProduct::where('id','=',$id)->delete();
			if($check){
				$product = ProductStock::find($id_product);
				$product->in_stock = $product->in_stock + $quantity*$specification;
				$product->save();
				$arr_return['status'] = 'success';
			}else{
				$arr_return['message'] = 'Saving fail !';
			}
		}
		return $arr_return;
	}
}
