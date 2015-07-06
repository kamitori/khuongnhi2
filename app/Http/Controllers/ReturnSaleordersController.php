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
use App\ReturnSaleorder;
use App\Address;
use App\SellPrice;
use Datatables;
use Illuminate\Http\Request;
use Session;
use DB;

class ReturnSaleordersController extends Controller {
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
		Session::forget('product_of_rso'.session('current_returnsaleorder'));
		Session::forget('current_returnsaleorder');
		return redirect('returnsaleorders');
	}

	public function anyCreate(Request $request)
	{
		$returnsaleorder = new ReturnSaleorder;
		$returnsaleorder->save();
		session(['current_returnsaleorder' => $returnsaleorder->id]);
		// $address = new Address;
		// $returnsaleorder->date = date("Y-m-d H:i:s");
		// if($returnsaleorder->save()){
		// 	session(['current_returnsaleorder' => $returnsaleorder->id]);
		// 	$address->module_id  = $returnsaleorder['id'];
		// 	$address->module_type  = 'App\ReturnSaleorder';
		// 	$address->save();
		// 	$returnsaleorder->address_id = $address->id;
		// 	$returnsaleorder->save();
		// }	
		return redirect('returnsaleorders');
	}

	public function anyDelete(Request $request)
	{
		$arr_return = array('status'=>'error');
		$id_returnsaleorder = session('current_returnsaleorder') !== null ? session('current_returnsaleorder') : 0;
		if($id_returnsaleorder){
			$returnsaleorder = ReturnSaleorder::find($id_returnsaleorder);
			if(!$returnsaleorder->status){
				if($returnsaleorder->delete()){
					// Address::where('module_id','=',$id_returnsaleorder)->where('module_type','=','App\ReturnSaleorder')->delete();
					$list_mproduct = Mproduct::where('module_id','=',$id_returnsaleorder)
									->where('module_type','=','App\ReturnSaleorder')
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

			Session::forget('current_returnsaleorder');
		}else{
			$arr_return['message'] = 'Không tìm thấy hóa đơn';
		}
		return $arr_return;
	}


	public function getDeleteFromList(Request $request,$id=0)
	{
		$id_returnsaleorder = $id;
		if($id_returnsaleorder){
			$returnsaleorder = ReturnSaleorder::find($id_returnsaleorder);
			if(!$returnsaleorder->status){
				if($returnsaleorder->delete()){
					// Address::where('module_id','=',$id_returnsaleorder)->where('module_type','=','App\ReturnSaleorder')->delete();
					$list_mproduct = Mproduct::where('module_id','=',$id_returnsaleorder)
									->where('module_type','=','App\ReturnSaleorder')
									->lists('id');
					MProduct::whereIn('id',$list_mproduct)->delete();
				}
			}
		}
		return redirect('returnsaleorders/list');
	}

	public function anyEntry(Request $request,$id=null)
	{
		\DB::enableQueryLog();
		if(isset($id) && $id!=null){
			$id_return_saleorder = $id;
			$returnsaleorder = ReturnSaleorder::find($id_return_saleorder);
			if($returnsaleorder != null){
				session(['current_returnsaleorder' => $returnsaleorder['id']]);
			}else{
				return redirect('returnsaleorders');
			}
		}else{
			$id_return_saleorder = session('current_returnsaleorder') !== null ? session('current_returnsaleorder') : 0;
			if($id_return_saleorder){
				$returnsaleorder = ReturnSaleorder::find($id_return_saleorder);
				session(['current_returnsaleorder' => $returnsaleorder['id']]);
			}else{
				$returnsaleorder = ReturnSaleorder::get()->last();
				if($returnsaleorder){
					session(['current_returnsaleorder' => $returnsaleorder['id']]);
				}else{
					$returnsaleorder = new ReturnSaleorder;
					$returnsaleorder->date = date("Y-m-d H:i:s");
					$returnsaleorder->save();
					session(['current_returnsaleorder' => $returnsaleorder->id]);
				}
			}
		}
		$address = Address::where('module_id','=',$purchaseorder->id)
					->where('module_type','=','App\ReturnSaleorder')->first();
					
		$country_province = Province::addSelect('provinces.name as province_name')
						->where('provinces.id','=',$address->province_id)
						->addSelect('countries.name as country_name')
						->leftJoin('countries','countries.id','=','provinces.country_id')
						->first();
		$address = $address->toArray();
		$returnsaleorder = $returnsaleorder->toArray();
		$returnsaleorder['province_name'] = isset($country_province->province_name)?$country_province->province_name:'';
		$returnsaleorder['country_name'] = isset($country_province->country_name)?$country_province->country_name:'';
		// var_dump(DB::getQueryLog());
		// pr($returnsaleorder);die;

		//Init array
		$distributes = array();
		$oums = array();
		$users = array();
		$countries = array();
		$list_product = array();

		//Get value array
		$distributes = Company::getCustomerList()->with('address')->get()->toArray();
		$oums = Oum::get()->toArray();
		$users = User::get();
		$countries = Country::with('provinces')->get()->toArray();

		$arr_product = MProduct::where('module_type','=','App\ReturnSaleorder')
						->where('module_id','=',$returnsaleorder['id'])
						->lists('product_id');

		Session::forget('product_of_rso'.session('current_returnsaleorder'));
		foreach ($arr_product as $key => $value) {
			Session::put('product_of_rso'.session('current_returnsaleorder').".".$value , $value);
		}

		$view_list_product = self::getListProduct();
		// $view_list_product = '';


		// pr($list_product);die;
		$this->layout->content=view('returnsaleorder.entry',[	'distributes'=>$distributes,
										'users'=>$users,
										'countries'=>$countries,
										'returnsaleorder'=>$returnsaleorder,
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
		$id_return_saleorder = session('current_returnsaleorder') !== null ? session('current_returnsaleorder') : 0;
		if($id_return_saleorder){
			$returnsaleorder = ReturnSaleorder::find($id_return_saleorder);
			session(['current_returnsaleorder' => $returnsaleorder['id']]);
			$time = date('H:i:s', strtotime($returnsaleorder->date));
		}else{

			$returnsaleorder = new ReturnSaleorder;
			$returnsaleorder->save();
			session(['current_returnsaleorder' => $returnsaleorder->id]);
		}
	if($returnsaleorder->status == 0){
		$returnsaleorder->company_id = $request->has('company_id') ? $request->input('company_id') : 0;
		$returnsaleorder->user_id = $request->has('user_id') ? $request->input('user_id') : 0;
		$returnsaleorder->date = $request->has('date') ? date("Y-m-d H:i:s",strtotime($request->input('date').' '.$time)) : date("Y-m-d H:i:s");
		$returnsaleorder->company_phone = $request->has('company_phone') ? $request->input('company_phone') : '';
		$returnsaleorder->company_email = $request->has('company_email') ? $request->input('company_email') : '';
		$address_id = isset($returnsaleorder->address_id) ? $returnsaleorder->address_id : 0;

		if($returnsaleorder['address_id']==0){
			$address = new Address;
			
		}else{
			$address = Address::find($address_id);
		}

		$address->module_id  = $returnsaleorder->id;
		$address->module_type  = 'App\ReturnSaleorder';
		$address->address  = $request->has('address') ? $request->input('address') : '';
		$address->town_city  = $request->has('town_city') ? $request->input('town_city') : '';
		$address->zip_postcode  = $request->has('zip_postcode') ? $request->input('zip_postcode') : '';
		$address->country_id  = $request->has('country_id') ? $request->input('country_id') : 0;
		$address->province_id  = $request->has('province_id') ? $request->input('province_id') : 0;
		$address->save();
		$returnsaleorder->address_id = $address->id;
	}
		$returnsaleorder->status = $request->has('status')?1:0;
		$check_save_in_stock = true;
		if($returnsaleorder->status){
			$arr_mproduct = Mproduct::select('m_products.id','quantity','specification','name','m_product_id')
							->where('module_id', '=', $returnsaleorder->id)
							->where('module_type', '=', 'App\ReturnSaleorder')
							->leftJoin('products','products.id','=','m_products.product_id')
							->get()->toArray();
			foreach ($arr_mproduct as $key => $mproduct) {
				$mproduct_po = Mproduct::find($mproduct['m_product_id']);
				$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
				$product_stock->in_stock = $product_stock->in_stock + ($mproduct['quantity']*$mproduct['specification']);
				if($product_stock->in_stock < 0){
					$check_save_in_stock = false;
					$arr_return['message'] .= 'Số lượng sản phẩm '.$mproduct['name'].' nhập vào lớn hơn số lượng đã nhập<br/><br/>';
				}
			}
		}else{
			$arr_mproduct = Mproduct::select('m_products.id','quantity','specification','name','m_product_id')
							->where('module_id', '=', $returnsaleorder->id)
							->where('module_type', '=', 'App\ReturnSaleorder')
							->leftJoin('products','products.id','=','m_products.product_id')
							->get()->toArray();
			foreach ($arr_mproduct as $key => $mproduct) {
				$mproduct_po = Mproduct::find($mproduct['m_product_id']);
				$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
				$product_stock->in_stock = $product_stock->in_stock - ($mproduct['quantity']*$mproduct['specification']);
				$product_stock->save();
			}
		}

		if($check_save_in_stock){
			if($returnsaleorder->save()){
				if($returnsaleorder->status){
					foreach ($arr_mproduct as $key => $mproduct) {
						$mproduct_po = Mproduct::find($mproduct['m_product_id']);
						$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
						$product_stock->in_stock = $product_stock->in_stock +  ($mproduct['quantity']*$mproduct['specification']);
						$product_stock->save();
					}
				}
				Mproduct::where('module_id', '=', $returnsaleorder->id)
						->where('module_type', '=', 'App\ReturnSaleorder')
						->update(['company_id' => $returnsaleorder->company_id ]);
				$arr_return['status']= 'success';
			}else{
				$arr_return['message']= 'Saving fail !';
			}
		}
		return $arr_return;
	}

	public function anyListClear(Request $request)
	{
		Session::forget('sort_filter_returnsaleorder');
		return redirect('returnsaleorders/list');
	}

	public function anyList(Request $request)
	{
		\DB::enableQueryLog();
		if($request->has('input-sort')){
			$arr_sort = $request->input('input-sort');
			$arr_sort =(array) json_decode($arr_sort);
		}elseif( session('sort_filter_returnsaleorder.arr_sort') !== null){
			$arr_sort = session('sort_filter_returnsaleorder.arr_sort');
		}else{
			$arr_sort=array();
		}
		session('sort_filter_returnsaleorder.arr_sort', $arr_sort);


		if($request->has('input-filter')){
			$arr_filter = $request->input('input-filter');
		}elseif( session('sort_filter_returnsaleorder.arr_filter') !== null ){
			$arr_filter = session('sort_filter_returnsaleorder.arr_filter');
		}else{
			$arr_filter=[
					'id'=>'',
					'company_id'=>'',
					'date'=>'',
					'status'=>''
				       ];
		}
		session(['sort_filter_returnsaleorder.arr_sort'=>$arr_sort]);
		session(['sort_filter_returnsaleorder.arr_filter'=> $arr_filter]);

		//Init array
		$distributes = array();
		$list_id = array();
		$list_date = array();
		$list_returnsaleorder = array();

		//Get value array
		$distributes = Company::getCustomerList()->get()->toArray();
		$list_id = ReturnSaleorder::lists('id');
		$list_date = ReturnSaleorder::orderBy('date','desc')->lists('date');
		foreach ($list_date as $key => $value) {
			$list_date[$key] = date('d-m-Y',strtotime($value));
		}
		$list_date = array_unique($list_date);

		$list_returnsaleorder = ReturnSaleorder::select('return_saleorders.*','suminvest.*')->with('company')
					->leftJoin(
							DB::raw(' (
									select module_id, module_type,sum(invest) as sum_invest 
									from m_products where module_type = "App\\\\ReturnSaleorder" group by  module_id 
								    ) as suminvest'), function($join){
								$join->on('return_saleorders.id', '=', 'module_id');
							}
						);
		foreach ($arr_sort as $key => $value) {
			if($key=='company_id'){
				$list_returnsaleorder = $list_returnsaleorder->leftJoin('companies','companies.id','=','return_saleorders.company_id')->orderBy('companies.name',$value);
			}else{
				$list_returnsaleorder = $list_returnsaleorder->orderBy($key,$value);
			}
		}
		if($arr_filter['id']!=''){
			$list_returnsaleorder->where('id',$arr_filter['id']);
		}else{
			foreach ($arr_filter as $key => $value) {
				if($value!=''){
					if($key=='date'){
						$now = date("Y-m-d H:i:s",strtotime($arr_filter['date']));
						$tomorow = date("Y-m-d H:i:s",strtotime($arr_filter['date'])+86400);
						$list_returnsaleorder->where('date','>=',$now)->where('date','<',$tomorow);
					}else{
						$list_returnsaleorder->where($key,$value);
					}
				}
			}
		}
		if(!isset($arr_filter['status'])){
			$arr_filter['status'] = '';
		}
		$list_returnsaleorder = $list_returnsaleorder->paginate(20);

		// var_dump(DB::getQueryLog());die;
		$this->layout->content=view('returnsaleorder.list', [
								'distributes'		=>	$distributes,
								'arr_sort' 		=> 	$arr_sort,
								'arr_filter' 		=> 	$arr_filter,
								'list_id' 		=>	$list_id,
								'list_date' 		=>	$list_date,
								'list_returnsaleorder'	=>	$list_returnsaleorder
							        ]);
	}

	public function postAddProductSession(Request $request){
		$arr_id = $request->has('id')?$request->input('id'):array();
		foreach ($arr_id as $key => $value) {
			Session::put('product_of_rso'.session('current_returnsaleorder').".".$value , $value);
		}
		return '';
	}

	public function postRemoveProductSession(Request $request){
		$arr_id = $request->has('id')?$request->input('id'):array();
		foreach ($arr_id as $key => $value) {
			Session::forget('product_of_rso'.session('current_returnsaleorder').".".$value);
		}
		return '';
	}

	public function anyAddProduct(Request $request){
		$arr_return = array(
			"status"=>'success'
		);
		$company_id = $request->has('company_id')?$request->input('company_id'):0;
		$module_id = session('current_returnsaleorder');
		$module_type = 'App\ReturnSaleorder';
		$arr_product = session('product_of_rso'.session('current_returnsaleorder'));
		$arr_product_of_rso = Mproduct::where('module_id','=',$module_id)
						->where('module_type','=',$module_type)
						->lists('product_id');


		foreach ($arr_product as $key => $product_id) {
			if(!in_array($product_id, $arr_product_of_rso)){
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


		foreach ($arr_product_of_rso as $key => $product_id) {
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
		$id = session('current_returnsaleorder');
		//Init array
		$distributes = array();
		$oums = array();
		$list_product = array();

		//Get value
		$distributes = Company::getCustomerList()->with('address')->get()->toArray();
		$oums = Oum::get()->toArray();
		$list_product = MProduct::select('m_products.*','products.sku','products.name')->where('module_type','=','App\ReturnSaleorder')
						->where('module_id','=',$id)
						->leftJoin('products','products.id','=','m_products.product_id')
						->get()->toArray();
		$returnsaleorder = ReturnSaleorder::select('status')->where('id','=',$id)->first()->toArray();
		return view('returnsaleorder.list-product',[	'distributes'=>$distributes,
							'oums'=>$oums,
							'list_product'=>$list_product,
							'returnsaleorder'=>$returnsaleorder
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
			$product_stock->in_stock = $product_stock->in_stock + ($mproduct->quantity - $old_quantity);
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
				$product->in_stock = $product->in_stock - $quantity*$specification;
				$product->save();
				$arr_return['status'] = 'success';
			}else{
				$arr_return['message'] = 'Saving fail !';
			}
		}
		return $arr_return;
	}
}
