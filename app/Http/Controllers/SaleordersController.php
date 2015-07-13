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
use App\Saleorder;
use App\Address;
use App\SellPrice;
use Datatables;
use Illuminate\Http\Request;
use Session;
use DB;

class SaleordersController extends Controller {
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
		Session::forget('product_of_so'.session('current_saleorder'));
		Session::forget('current_saleorder');
		return redirect('saleorders');
	}

	public function anyCreate(Request $request)
	{
		$saleorder = new Saleorder;
		$saleorder->date = date("Y-m-d H:i:s");
		$saleorder->save();
		session(['current_saleorder' => $saleorder->id]);
		// $address = new Address;
		// $saleorder->date = date("Y-m-d H:i:s");
		// if($saleorder->save()){
		// 	session(['current_saleorder' => $saleorder->id]);
		// 	$address->module_id  = $saleorder['id'];
		// 	$address->module_type  = 'App\Saleorder';
		// 	$address->save();
		// 	$saleorder->address_id = $address->id;
		// 	$saleorder->save();
		// }	
		return redirect('saleorders');
	}

	public function anyDelete(Request $request)
	{
		$arr_return = array('status'=>'error');
		$id_saleorder = session('current_saleorder') !== null ? session('current_saleorder') : 0;
		if($id_saleorder){
			$saleorder = Saleorder::find($id_saleorder);
			if(!$saleorder->status){
				if($saleorder->delete()){
					// Address::where('module_id','=',$id_saleorder)->where('module_type','=','App\Saleorder')->delete();
					$list_mproduct = Mproduct::where('module_id','=',$id_saleorder)
									->where('module_type','=','App\Saleorder')
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

			Session::forget('current_saleorder');
		}else{
			$arr_return['message'] = 'Không tìm thấy hóa đơn';
		}
		return $arr_return;
	}


	public function getDeleteFromList(Request $request,$id=0)
	{
		$id_saleorder = $id;
		if($id_saleorder){
			$saleorder = Saleorder::find($id_saleorder);
			if(!$saleorder->status){
				if($saleorder->delete()){
					// Address::where('module_id','=',$id_saleorder)->where('module_type','=','App\Saleorder')->delete();
					$list_mproduct = Mproduct::where('module_id','=',$id_saleorder)
									->where('module_type','=','App\Saleorder')
									->lists('id');
					MProduct::whereIn('id',$list_mproduct)->delete();
				}
			}
		}
		return redirect('saleorders/list');
	}

	public function anyEntry(Request $request,$id=null)
	{
		\DB::enableQueryLog();
		if(isset($id) && $id!=null){
			$id_saleorder = $id;
			$saleorder = Saleorder::find($id_saleorder);
			if($saleorder != null){
				session(['current_saleorder' => $saleorder['id']]);
			}else{
				return redirect('saleorders');
			}
		}else{
			$id_saleorder = session('current_saleorder') !== null ? session('current_saleorder') : 0;
			if($id_saleorder){
				$saleorder = Saleorder::find($id_saleorder);
				session(['current_saleorder' => $saleorder['id']]);
			}else{
				$saleorder = Saleorder::get()->last();
				if($saleorder){
					session(['current_saleorder' => $saleorder['id']]);
				}else{
					$saleorder = new Saleorder;
					$saleorder->date = date("Y-m-d H:i:s");
					$saleorder->save();
					session(['current_saleorder' => $saleorder->id]);
				}
			}
		}
		$address = Address::where('module_id','=',$saleorder->id)
					->where('module_type','=','App\Saleorder')->first();
					
		$country_province = Province::addSelect('provinces.name as province_name')
						->where('provinces.id','=',$address->province_id)
						->addSelect('countries.name as country_name')
						->leftJoin('countries','countries.id','=','provinces.country_id')
						->first();
		$address = $address->toArray();
		$saleorder = $saleorder->toArray();
		$saleorder['province_name'] = isset($country_province->province_name)?$country_province->province_name:'';
		$saleorder['country_name'] = isset($country_province->country_name)?$country_province->country_name:'';
		// var_dump(DB::getQueryLog());
		// pr($saleorder);die;

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

		$arr_product = MProduct::where('module_type','=','App\Saleorder')
						->where('module_id','=',$saleorder['id'])
						->lists('product_id');

		Session::forget('product_of_so'.session('current_saleorder'));
		foreach ($arr_product as $key => $value) {
			Session::put('product_of_so'.session('current_saleorder').".".$value , $value);
		}

		$view_list_product = self::getListProduct();
		// $view_list_product = '';


		// pr($list_product);die;
		$this->layout->content=view('saleorder.entry',[	'distributes'=>$distributes,
										'users'=>$users,
										'countries'=>$countries,
										'saleorder'=>$saleorder,
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
		$id_saleorder = session('current_saleorder') !== null ? session('current_saleorder') : 0;
		if($id_saleorder){
			$saleorder = Saleorder::find($id_saleorder);
			session(['current_saleorder' => $saleorder['id']]);
			$time = date('H:i:s', strtotime($saleorder->date));
		}else{

			$saleorder = new Saleorder;
			$saleorder->save();
			session(['current_saleorder' => $saleorder->id]);
		}
		if($saleorder->status == 0){
			$saleorder->company_id = $request->has('company_id') ? $request->input('company_id') : 0;
			$saleorder->user_id = $request->has('user_id') ? $request->input('user_id') : 0;
			$saleorder->date = $request->has('date') ? date("Y-m-d H:i:s",strtotime($request->input('date').' '.$time)) : date("Y-m-d H:i:s");
			$saleorder->company_phone = $request->has('company_phone') ? $request->input('company_phone') : '';
			$saleorder->company_email = $request->has('company_email') ? $request->input('company_email') : '';
			$address_id = isset($saleorder->address_id) ? $saleorder->address_id : 0;

			$address = Address::where('module_id','=',$saleorder->id)
						->where('module_type','=','App\Saleorder')->first();

			$address->module_id  = $saleorder->id;
			$address->module_type  = 'App\Saleorder';
			$address->address  = $request->has('address') ? $request->input('address') : '';
			$address->town_city  = $request->has('town_city') ? $request->input('town_city') : '';
			$address->zip_postcode  = $request->has('zip_postcode') ? $request->input('zip_postcode') : '';
			$address->country_id  = $request->has('country_id') ? $request->input('country_id') : 0;
			$address->province_id  = $request->has('province_id') ? $request->input('province_id') : 0;
			$address->save();
			$saleorder->address_id = $address->id;
		}
		$old_status = $saleorder->status;
		$saleorder->status = $request->has('status')?1:0;
		$check_save_in_stock = true;
		if($saleorder->status){
			$arr_mproduct = Mproduct::select('m_products.id','quantity','specification','name','m_product_id')
							->where('module_id', '=', $saleorder->id)
							->where('module_type', '=', 'App\Saleorder')
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
			if($old_status != $saleorder->status){
				$arr_mproduct = Mproduct::select('m_products.id','quantity','specification','name','m_product_id')
								->where('module_id', '=', $saleorder->id)
								->where('module_type', '=', 'App\Saleorder')
								->leftJoin('products','products.id','=','m_products.product_id')
								->get()->toArray();
				foreach ($arr_mproduct as $key => $mproduct) {
					$mproduct_po = Mproduct::find($mproduct['m_product_id']);
					$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
					$product_stock->in_stock = $product_stock->in_stock + ($mproduct['quantity']*$mproduct['specification']);
					$product_stock->save();
				}
			}
		}

		if($check_save_in_stock){
			if($saleorder->save()){
				if($saleorder->status){
					foreach ($arr_mproduct as $key => $mproduct) {
						$mproduct_po = Mproduct::find($mproduct['m_product_id']);
						$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
						$product_stock->in_stock = $product_stock->in_stock -  ($mproduct['quantity']*$mproduct['specification']);
						$product_stock->save();
					}
				}
				Mproduct::where('module_id', '=', $saleorder->id)
						->where('module_type', '=', 'App\Saleorder')
						->update(['company_id' => $saleorder->company_id ]);
				$arr_return['status']= 'success';
			}else{
				$arr_return['message']= 'Saving fail !';
			}
		}
		return $arr_return;
	}

	public function anyListClear(Request $request)
	{
		Session::forget('sort_filter_saleorder');
		return redirect('saleorders/list');
	}

	public function anyList(Request $request)
	{
		\DB::enableQueryLog();
		if($request->has('input-sort')){
			$arr_sort = $request->input('input-sort');
			$arr_sort =(array) json_decode($arr_sort);
		}elseif( session('sort_filter_saleorder.arr_sort') !== null){
			$arr_sort = session('sort_filter_saleorder.arr_sort');
		}else{
			$arr_sort=array();
		}
		session('sort_filter_saleorder.arr_sort', $arr_sort);


		if($request->has('input-filter')){
			$arr_filter = $request->input('input-filter');
		}elseif( session('sort_filter_saleorder.arr_filter') !== null ){
			$arr_filter = session('sort_filter_saleorder.arr_filter');
		}else{
			$arr_filter=[
					'id'=>'',
					'company_id'=>'',
					'date'=>'',
					'status'=>''
				       ];
		}
		session(['sort_filter_saleorder.arr_sort'=>$arr_sort]);
		session(['sort_filter_saleorder.arr_filter'=> $arr_filter]);

		//Init array
		$distributes = array();
		$list_id = array();
		$list_date = array();
		$list_saleorder = array();

		//Get value array
		$distributes = Company::getDistributeList()->get()->toArray();
		$list_id = Saleorder::lists('id');
		$list_date = Saleorder::orderBy('date','desc')->lists('date');
		foreach ($list_date as $key => $value) {
			$list_date[$key] = date('d-m-Y',strtotime($value));
		}
		$list_date = array_unique($list_date);

		$list_saleorder = Saleorder::select('saleorders.*','suminvest.*')->with('company')
					->leftJoin(
							DB::raw(' (
									select module_id, module_type,sum(invest) as sum_invest 
									from m_products where module_type = "App\\\\Saleorder" group by  module_id 
								    ) as suminvest'), function($join){
								$join->on('saleorders.id', '=', 'module_id');
							}
						);
		foreach ($arr_sort as $key => $value) {
			if($key=='company_id'){
				$list_saleorder = $list_saleorder->leftJoin('companies','companies.id','=','saleorders.company_id')->orderBy('companies.name',$value);
			}else{
				$list_saleorder = $list_saleorder->orderBy($key,$value);
			}
		}
		if($arr_filter['id']!=''){
			$list_saleorder->where('id',$arr_filter['id']);
		}else{
			foreach ($arr_filter as $key => $value) {
				if($value!=''){
					if($key=='date'){
						$now = date("Y-m-d H:i:s",strtotime($arr_filter['date']));
						$tomorow = date("Y-m-d H:i:s",strtotime($arr_filter['date'])+86400);
						$list_saleorder->where('date','>=',$now)->where('date','<',$tomorow);
					}else{
						$list_saleorder->where($key,$value);
					}
				}
			}
		}
		if(!isset($arr_filter['status'])){
			$arr_filter['status'] = '';
		}
		$list_saleorder = $list_saleorder->paginate(20);

		// var_dump(DB::getQueryLog());die;
		$this->layout->content=view('saleorder.list', [
								'distributes'		=>	$distributes,
								'arr_sort' 		=> 	$arr_sort,
								'arr_filter' 		=> 	$arr_filter,
								'list_id' 		=>	$list_id,
								'list_date' 		=>	$list_date,
								'list_saleorder'	=>	$list_saleorder
							        ]);
	}

	public function postAddProductSession(Request $request){
		$arr_id = $request->has('id')?$request->input('id'):array();
		foreach ($arr_id as $key => $value) {
			Session::put('product_of_so'.session('current_saleorder').".".$value , $value);
		}
		return '';
	}

	public function postRemoveProductSession(Request $request){
		$arr_id = $request->has('id')?$request->input('id'):array();
		foreach ($arr_id as $key => $value) {
			Session::forget('product_of_so'.session('current_saleorder').".".$value);
		}
		return '';
	}

	public function anyAddProduct(Request $request){
		$arr_return = array(
			"status"=>'success'
		);
		$company_id = $request->has('company_id')?$request->input('company_id'):0;
		$module_id = session('current_saleorder');
		$module_type = 'App\Saleorder';
		$arr_product = session('product_of_so'.session('current_saleorder'));
		$arr_product_of_so = Mproduct::where('module_id','=',$module_id)
						->where('module_type','=',$module_type)
						->lists('product_id');


		foreach ($arr_product as $key => $product_id) {
			if(!in_array($product_id, $arr_product_of_so)){
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


		foreach ($arr_product_of_so as $key => $product_id) {
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
		$id = session('current_saleorder');
		//Init array
		$distributes = array();
		$oums = array();
		$list_product = array();

		//Get value
		$distributes = Company::getDistributeList()->with('address')->get()->toArray();
		$oums = Oum::get()->toArray();
		$list_product = MProduct::select('m_products.*','products.sku','products.name')->where('module_type','=','App\Saleorder')
						->where('module_id','=',$id)
						->leftJoin('products','products.id','=','m_products.product_id')
						->with('getsellprices')
						->get()->toArray();
		$saleorder = Saleorder::select('status')->where('id','=',$id)->first()->toArray();
		return view('saleorder.list-product',[	'distributes'=>$distributes,
							'oums'=>$oums,
							'list_product'=>$list_product,
							'saleorder'=>$saleorder
						]);
	}

	public function postUpdateMproduct(Request $request){
		$arr_return= array('status'=>'error','invest'=>0);
		$id = $request->has('id')?$request->input('id'):0;
		if($id){
			$mproduct = MProduct::find($id);
			$mproduct_po = Mproduct::find($mproduct->m_product_id);
			$mproduct->oum_id =  $request->has('oum_id')?$request->input('oum_id'):0;
			$mproduct->sell_price =  $request->has('sell_price')?$request->input('sell_price'):0;
			$mproduct->specification =  $request->has('specification')?$request->input('specification'):0;
			$old_quantity = $mproduct->quantity ;
			$mproduct->quantity =  $request->has('quantity')?$request->input('quantity'):0;
			$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
			$product_stock->in_stock = $product_stock->in_stock - ($mproduct->quantity - $old_quantity);
			$mproduct->amount = $mproduct->specification* $mproduct->quantity* $mproduct->sell_price;
			// if($product_stock->in_stock >=0){
				if( !$mproduct->status){
					if($mproduct->save()){
						$arr_return['status'] = 'success';
						$arr_return['amount'] = number_format( $mproduct->amount );
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
