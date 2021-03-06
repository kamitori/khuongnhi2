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
use App\ReceiptMonth;
use App\Saleorder;
use App\Paid;
use App\Log;
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
		$saleorder->created_by = \Auth::user()->id;
		if($saleorder->save()){
			Log::create_log(\Auth::user()->id,'App\Saleorder','Tạo mới đơn hàng số '.$saleorder->id);
			session(['current_saleorder' => $saleorder->id]);
		}
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
					Log::create_log(\Auth::user()->id,'App\Saleorder','Xóa đơn hàng số '.$saleorder->id);
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
					Log::create_log(\Auth::user()->id,'App\Saleorder','Xóa đơn hàng số '.$saleorder->id);
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
					$saleorder->created_by = \Auth::user()->id;
					$saleorder->save();
					Log::create_log(\Auth::user()->id,'App\Saleorder','Tạo mới đơn hàng số '.$saleorder->id);
					session(['current_saleorder' => $saleorder->id]);
				}
			}
		}
		$address = Address::where('module_id','=',$saleorder->id)
					->where('module_type','=','App\Saleorder')->first();
		$address_province = isset($address->province_id)?$address->province_id:0;
		$country_province = Province::addSelect('provinces.name as province_name')
						->where('provinces.id','=',$address_province)
						->addSelect('countries.name as country_name')
						->leftJoin('countries','countries.id','=','provinces.country_id')
						->first();
		if($country_province){
			$country_province->toArray();
			$purchaseorder['province_name'] = $country_province['province_name'];
			$purchaseorder['country_name'] = $country_province['country_name'];
		}else{
			$purchaseorder['province_name'] = '';
			$purchaseorder['country_name'] = '';
		}
		if($address){
			$address = $address->toArray();
		}else{
			$address = array();
		}
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
		$distributes = Company::getCustomerList()->with('address')->get()->toArray();
		$oums = Oum::orderBy('name')->get()->toArray();
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
		
		$arr_create = Saleorder::select('users.name','saleorders.created_at')
					->leftJoin('users','users.id','=','saleorders.created_by')
					->where('saleorders.id','=',$saleorder['id'])
					->get()->first()->toArray();

		$arr_update = Saleorder::select('users.name','saleorders.updated_at')
					->leftJoin('users','users.id','=','saleorders.updated_by')
					->where('saleorders.id','=',$saleorder['id'])
					->get()->first()->toArray();
		$this->layout->arr_create = $arr_create;
		$this->layout->arr_update = $arr_update;


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
			$saleorder->date = date("Y-m-d H:i:s");
			$saleorder->created_by = \Auth::user()->id;
			$saleorder->save();
			Log::create_log(\Auth::user()->id,'App\Saleorder','Tạo mới đơn hàng số '.$saleorder->id);
			session(['current_saleorder' => $saleorder->id]);
		}
		$log = '';
		if($saleorder->status == 0){
			$address = Address::where('module_id','=',$saleorder->id)
						->where('module_type','=','App\Saleorder')->first();
			if(!$address){
				$address = new Address;
			}

			if($request->has('company_id')  && $saleorder->company_id != $request->input('company_id')){
				$old = Company::find($saleorder->company_id);
				if(!$old){
					$old = (object) ['name'=>''];
				}
				$new = Company::find($request->input('company_id'));
				$log .= 'công ty từ "'.$old->name.'" thành "'.$new->name.'" ';
			}
			if($saleorder->company_id == $request->input('company_id')){

				if($request->has('user_id')  && $saleorder->user_id != $request->input('user_id')){
					$old = User::find($saleorder->user_id);
					if(!$old){
						$old = (object) ['name'=>''];
					}
					$new = User::find($request->input('user_id'));
					$log .= 'người liên hệ từ "'.$old->name.'" thành "'.$new->name.'" ';
				}

				$old_date=date("Y-m-d",strtotime($saleorder->date));
				$new_date = date("Y-m-d",strtotime($request->input('date')));
				if($request->has('date')  && $old_date != $new_date){
					$log .= 'ngày từ "'.$old_date.'" thành "'.$new_date.'" ';
				}

				if($request->has('company_phone')  && $saleorder->company_phone != $request->input('company_phone')){
					$log .= 'số điện thoại từ "'.$saleorder->company_phone.'" thành "'.$request->input('company_phone').'" ';
				}

				if($request->has('company_email')  && $saleorder->company_email != $request->input('company_email')){
					$log .= 'email từ "'.$saleorder->company_email.'" thành "'.$request->input('company_email').'" ';
				}
				if($request->has('address')  && $address->address != $request->input('address')){
					$log .= 'địa chỉ từ "'.$address->address.'" thành "'.$request->input('address').'" ';
				}
				if($request->has('town_city')  && $address->town_city != $request->input('town_city')){
					$log .= 'quận huyện từ "'.$address->town_city.'" thành "'.$request->input('town_city').'" ';
				}

				if($request->has('province_id')  && $address->province_id != $request->input('province_id')){
					$old = Province::find($address->province_id);
					$new = Province::find($request->input('province_id'));
					if(!$old){
						$old = (object) ['name'=>''];
					}
					$log .= 'tỉnh thành từ "'.$old->name.'" thành "'.$new->name.'" ';
				}
				if($request->has('country_id')  && $address->country_id != $request->input('country_id')){
					$old = Country::find($address->country_id);
					$new = Country::find($request->input('country_id'));
					if(!$old){
						$old = (object) ['name'=>''];
					}
					$log .= 'quốc gia từ "'.$old->name.'" thành "'.$new->name.'" ';
				}
			}
			$saleorder->company_id = $request->has('company_id') ? $request->input('company_id') : 0;
			$saleorder->user_id = $request->has('user_id') ? $request->input('user_id') : 0;
			$saleorder->date = $request->has('date') ? date("Y-m-d H:i:s",strtotime($request->input('date').' '.$time)) : date("Y-m-d H:i:s");
			$saleorder->company_phone = $request->has('company_phone') ? $request->input('company_phone') : '';
			$saleorder->company_email = $request->has('company_email') ? $request->input('company_email') : '';
			$address_id = isset($saleorder->address_id) ? $saleorder->address_id : 0;

			$address->module_id  = $saleorder->id;
			$address->module_type  = 'App\\Saleorder';
			$address->address  = $request->has('address') ? $request->input('address') : '';
			$address->town_city  = $request->has('town_city') ? $request->input('town_city') : '';
			$address->zip_postcode  = $request->has('zip_postcode') ? $request->input('zip_postcode') : '';
			$address->country_id  = $request->has('country_id') ? $request->input('country_id') : 0;
			$address->province_id  = $request->has('province_id') ? $request->input('province_id') : 0;
			$address->save();
			$saleorder->address_id = $address->id;
		}else{
			$saleorder->sum_amount = 0;
			$saleorder->sum_invest = 0;
		}
		$old_status = $saleorder->status;
		if($saleorder->status != $request->has('status')){
			$log .= 'trạng thái từ "'.($saleorder->status?'Hoàn thành':'Mới').'" thành "'.($request->has('status')?'Hoàn thành':'Mới').'" ';
		}
		$saleorder->status = $request->has('status')?1:0;
		$check_save_in_stock = true;
		if($saleorder->status){
			$arr_mproduct = Mproduct::select('m_products.id','quantity','specification','name','m_product_id','amount','invest')
							->where('module_id', '=', $saleorder->id)
							->where('module_type', '=', 'App\Saleorder')
							->leftJoin('products','products.id','=','m_products.product_id')
							->get()->toArray();
			foreach ($arr_mproduct as $key => $mproduct) {
				$saleorder->sum_amount = $saleorder->sum_amount + $mproduct['amount'];
				$saleorder->sum_invest = $saleorder->sum_invest + $mproduct['invest'];
				$mproduct_po = Mproduct::find($mproduct['m_product_id']);
				$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
				$product_stock->in_stock = $product_stock->in_stock -  ($mproduct['quantity']*$mproduct['specification']);
				if($product_stock->in_stock < 0){
					$check_save_in_stock = false;
					$arr_return['message'] .= 'Số lượng sản phẩm '.$mproduct['name'].' mua  lớn hơn số lượng đã nhập<br/><br/>';
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
			$saleorder->updated_by = \Auth::user()->id;
			if($saleorder->save()){
				Log::create_log(\Auth::user()->id,'App\Saleorder','Cập nhật '.$log.' đơn hàng số '.$saleorder->id);
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
		$distributes = Company::getCustomerList()->get()->toArray();
		$list_id = Saleorder::lists('id');
		$list_date = Saleorder::orderBy('date','desc')->lists('date');
		foreach ($list_date as $key => $value) {
			$list_date[$key] = date('d-m-Y',strtotime($value));
		}
		$list_date = array_unique($list_date);

		$list_saleorder = Saleorder::select('saleorders.*','suminvest.*','companies.name as company_name')->with('company')
					->leftJoin(
							DB::raw(' (
									select module_id, module_type,sum(invest) as sum_invest 
									from m_products where module_type = "App\\\\Saleorder" group by  module_id 
								    ) as suminvest'), function($join){
								$join->on('saleorders.id', '=', 'module_id');
							}
						)->leftJoin('companies','companies.id','=','saleorders.company_id');

		foreach ($arr_sort as $key => $value) {
			if($key=='company_id'){
				$list_saleorder = $list_saleorder->orderBy('companies.name',$value);
			}else{
				$list_saleorder = $list_saleorder->orderBy($key,$value);
			}
		}
		if($arr_filter['id']!=''){
			$list_saleorder->where('saleorders.id',$arr_filter['id']);
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
		if(!count($arr_sort)){
			$list_saleorder = $list_saleorder->orderBy('saleorders.id','desc');
		}
		if(!isset($arr_filter['status'])){
			$arr_filter['status'] = '';
		}

		$list_saleorder = $list_saleorder->paginate(20);
		foreach($list_saleorder as $key => $so){
			$list_saleorder[$key]['date'] = date('d-m-Y',strtotime($so['date']));
		}
		\Cache::put('list_saleorder'.\Auth::user()->id, $list_saleorder, 30);
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

	public function anyAddProductQuick(Request $request){
		$arr_return = array(
			"status"=>'success'
		);
		$m_product_id = $request->has('m_product_id')?$request->input('m_product_id'):0;
		$company_id = $request->has('company_id')?$request->input('company_id'):0;
		$module_id = session('current_saleorder');
		$module_type = 'App\Saleorder';
		$arr_product = session('product_of_so'.session('current_saleorder'));

		$arr_product_of_so = Mproduct::where('module_id','=',$module_id)
						->where('module_type','=',$module_type)
						->lists('m_product_id');
		$log = "";
		if(!in_array($m_product_id, $arr_product_of_so)){
			$product = MProduct::find($m_product_id);
			$mproduct = new MProduct;
			$mproduct->product_id		=	$product->product_id;
			$mproduct->m_product_id	=	$product->id;
			$mproduct->module_id		= 	$module_id;
			$mproduct->company_id	= 	$company_id;
			$mproduct->module_type	=	$module_type;
			$mproduct->specification	=	$product->specification;
			$mproduct->oum_id		=	$product->oum_id;
			$mproduct->origin_price	=	$product->origin_price;
			$mproduct->save();
			MProduct::where('id',$mproduct->id)->update(['order'=>$mproduct->id]);
			$product = Product::find($mproduct->product_id);
			$log .= "Thêm sản phẩm ".$product->sku;
		}
		Log::create_log(\Auth::user()->id,'App\Saleorder',$log.' vào đơn hàng số '.session('current_saleorder'));
		self::getListProduct();
		return $arr_return;
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
						->lists('m_product_id');

		$log = "";
		foreach ($arr_product as $key => $product_id) {
			if(!in_array($product_id, $arr_product_of_so)){
				$product = MProduct::find($product_id);
				$mproduct = new MProduct;
				$mproduct->product_id		=	$product->product_id;
				$mproduct->m_product_id	=	$product->id;
				$mproduct->module_id		= 	$module_id;
				$mproduct->company_id	= 	$company_id;
				$mproduct->module_type	=	$module_type;
				$mproduct->specification	=	$product->specification;
				$mproduct->oum_id		=	$product->oum_id;
				$mproduct->origin_price	=	$product->origin_price;
				$mproduct->save();
				MProduct::where('id',$mproduct->id)->update(['order'=>$mproduct->id]);
				$product = Product::find($mproduct->product_id);
				if($log==""){
					$log .= "Thêm sản phẩm ".$product->sku;
				}else{
					$log .= ", ".$product->sku;
				}
			}
		}

		$log_delete = "";
		foreach ($arr_product_of_so as $key => $product_id) {
			if(!in_array($product_id, $arr_product)){
				$mproduct = MProduct::where('module_id','=',$module_id)
						->where('module_type','=',$module_type)
						->where('product_id','=',$product_id)->first();
				if($mproduct){
					$mproduct->toArray();
					$id_product = $mproduct['product_id'];
					$quantity = $mproduct['quantity'];
					$check = MProduct::where('module_id','=',$module_id)
							->where('module_type','=',$module_type)
							->where('product_id','=',$product_id)->delete();
					$product = Product::find($mproduct['product_id']);
					if($log==""){
						$log .= "xóa sản phẩm ".$product->sku;
					}else{
						$log .= ", ".$product->sku;
					}
				}
			}
		}
		if($log_delete !="")
			Log::create_log(\Auth::user()->id,'App\Saleorder',$log.' và .'.$log_delete.' đơn hàng đại lý trả số '.session('current_saleorder'));
		else
			Log::create_log(\Auth::user()->id,'App\Saleorder',$log.'vào đơn hàng số '.session('current_saleorder'));
		$saleorder = Saleorder::find(session('current_saleorder'));
		$saleorder->updated_by = \Auth::user()->id;
		$saleorder->save();
		self::getListProduct();
		return $arr_return;
	}


	public function getListProduct(){
		$id = session('current_saleorder');
		$saleorder = Saleorder::select('status','company_id')->where('id','=',$id)->first()->toArray();
		//Init array
		$distributes = array();
		$oums = array();
		$list_product = array();

		//Get value
		$distributes = Company::getDistributeList()->with('address')->get()->toArray();
		$oums = Oum::orderBy('name')->get()->toArray();
		$list_product = MProduct::select('m_products.*','products.sku','products.name')->where('module_type','=','App\Saleorder')
						->where('module_id','=',$id)
						->where('company_id','=',$saleorder['company_id'])
						->leftJoin('products','products.id','=','m_products.product_id')
						->addSelect('oums.name as oum_name')
						->leftJoin('oums','oums.id','=','m_products.oum_id')
						->with('getsellprices')
						->orderBy('order','asc')
						->get()->toArray();
		\Cache::put('list_product_so'.\Auth::user()->id, $list_product, 30);
		return view('saleorder.list-product',[	'distributes'=>$distributes,
							'oums'=>$oums,
							'list_product'=>$list_product,
							'saleorder'=>$saleorder
						]);
	}

	public function postUpdateMproduct(Request $request){
		$arr_return= array('status'=>'error','invest'=>0);
		$id = $request->has('id')?$request->input('id'):0;
		$log="";
		if($id){
			$mproduct = MProduct::find($id);
			$mproduct_po = Mproduct::find($mproduct->m_product_id);
			if($request->has('oum_id')  && $mproduct->oum_id != $request->input('oum_id')){
				$old = Oum::find($mproduct->oum_id);
				$new = Oum::find($request->input('oum_id'));
				if($old){
					$log .= 'đơn vị từ "'.$old->name.'" thành "'.$new->name.'" ';
				}else{
					$log .= 'đơn vị từ " " thành "'.$new->name.'" ';
				}
			}
			if($request->has('sell_price')  && $mproduct->sell_price != $request->input('sell_price')){
				$log .= 'giá bán từ "'.$mproduct->sell_price.'" thành "'.$request->input('sell_price').'" ';
			}
			if($request->has('specification')  && $mproduct->specification != $request->input('specification')){
				$log .= 'quy cách từ "'.$mproduct->specification.'" thành "'.$request->input('specification').'" ';
			}
			if($request->has('quantity')  && $mproduct->quantity != $request->input('quantity')){
				$log .= 'số lượng từ "'.$mproduct->quantity.'" thành "'.$request->input('quantity').'" ';
			}
			$mproduct->oum_id =  $request->has('oum_id')?$request->input('oum_id'):0;
			$mproduct->sell_price =  $request->has('sell_price')?$request->input('sell_price'):0;
			$mproduct->specification =  $request->has('specification')?$request->input('specification'):0;
			$old_quantity = $mproduct->quantity ;
			$mproduct->quantity =  $request->has('quantity')?$request->input('quantity'):0;
			$product_stock = ProductStock::where('m_product_id','=',$mproduct_po->id)->first();
			$ton_kho = $product_stock->in_stock;
			$product_stock->in_stock = $product_stock->in_stock - ($mproduct->quantity*$mproduct->specification);
			$mproduct->origin_price = $mproduct_po->origin_price;
			$mproduct->amount = $mproduct->specification* $mproduct->quantity* $mproduct->sell_price;
			$mproduct->invest = $mproduct->specification* $mproduct->quantity* $mproduct->origin_price;
			if($product_stock->in_stock >=0){
				if( !$mproduct->status){
					if($mproduct->save()){
						$product = Product::find($mproduct->product_id);
						Log::create_log(\Auth::user()->id,'App\Saleorder','cập nhật '.$log.' sản phẩm '.$product->sku.' đơn hàng số '.session('current_saleorder'));
						$arr_return['status'] = 'success';
						$arr_return['amount'] = number_format( $mproduct->amount );
					}else{
						$arr_return['message'] = 'Saving fail !';
					}
				}else{
					$arr_return['message'] = 'Đơn hàng đã hoàn thành không thể cập nhật';
				}
			}else{
				$arr_return['message'] = 'Số lượng mua lớn hơn số lượng tồn kho <br/> Số lượng tồn kho còn '.$ton_kho.' cái';
			}
		}//Init array
		$list_product = array();

		//Get value
		$saleorder = Saleorder::find(session('current_saleorder'));
		$list_product = MProduct::select('m_products.*','products.sku','products.name')->where('module_type','=','App\Saleorder')
						->where('module_id','=',$id)
						->where('company_id','=',$saleorder['company_id'])
						->leftJoin('products','products.id','=','m_products.product_id')
						->addSelect('oums.name as oum_name')
						->leftJoin('oums','oums.id','=','m_products.oum_id')
						->with('getsellprices')
						->get()->toArray();
		\Cache::put('list_product_so'.\Auth::user()->id, $list_product, 30);
		self::getListProduct();
		$saleorder->updated_by = \Auth::user()->id;
		$saleorder->save();
		return $arr_return;
	}

	public function postDeleteProduct(Request $request){
		$arr_return= array('status'=>'error');
		$id = $request->has('id')?$request->input('id'):0;
		if($id){
			$mproduct = MProduct::find($id);
			if($mproduct){
				$id_product = $mproduct->m_product_id;
				$quantity = $mproduct->quantity;
				$specification = $mproduct->specification;
				$check  = MProduct::where('id','=',$id)->delete();
				if($check){
					$product = Product::find($mproduct->product_id);
					Log::create_log(\Auth::user()->id,'App\Saleorder','Xóa sản phẩm '.$product->sku.' đơn hàng số '.session('current_saleorder'));
					$arr_return['status'] = 'success';
				}else{
					$arr_return['message'] = 'Saving fail !';
				}
			}
		}
		$saleorder = Saleorder::find(session('current_saleorder'));
		$saleorder->updated_by = \Auth::user()->id;
		$saleorder->save();
		self::getListProduct();
		return $arr_return;
	}

	public function anyExportPdf(){
		$id_template = 5;
		$arr_print = 	[
				'arr_list' =>	[
						'arr_key' => 	[
								'sku',
								'name',
								'oum_name',
								'specification',
								'quantity',
								'sell_price',
								'amount'
								],
						'arr_head' => 	[
								['text'=>'Mã','class'=>''],
								['text'=>'Tên sản phẩm','class'=>''],
								['text'=>'Đơn vị','class'=>'center'],
								['text'=>'Quy cách','class'=>'center'],
								['text'=>'Số lượng','class'=>'center'],
								['text'=>'Đơn giá','class'=>'money'],
								['text'=>'Thành tiền','class'=>'money']
								],
						'arr_body'=>[],
						'arr_sum'=>[]
						],
				'arr_data'=>	[
							'id'=>session('current_saleorder')
						]
				];	
		if (\Cache::has('list_product_so'.\Auth::user()->id)){
			$so = Saleorder::select('saleorders.*','companies.name')
							->where('saleorders.id','=',session('current_saleorder'))
							->leftJoin('companies','companies.id','=','saleorders.company_id')->get()->first();
			$month = intval(date('m',strtotime($so->date)));
			$year = intval(date('Y',strtotime($so->date)));
			$begin = date('Y-m-d H:i:s',strtotime('1'.'-'.$month.'-'.$year));
			$end = $so->date;
			$list_order = array();
			$key_order = 1;
			$arr_print['arr_data']['date'] = date('d-m-Y',strtotime($so->date));
			$arr_print['arr_data']['company_name'] = $so->name;
			$arr_print['arr_data']['phone'] = $so->company_phone;
			$arr_print['arr_data']['address'] = '';
			$arr_dress = Address::select('addresses.*','provinces.name as province_name')
						->where('addresses.id','=',$so->address_id)
						->leftJoin('provinces','provinces.id','=','addresses.province_id')
						->get()->first();
			$arr_print['arr_data']['address'] .= $arr_dress->address?$arr_dress->address.', ':'';
			$arr_print['arr_data']['address'] .= $arr_dress->town_city?$arr_dress->town_city.', ':'';
			$arr_print['arr_data']['address'] .= $arr_dress->province_name?$arr_dress->province_name:'';

			$receipt_month_prev = ReceiptMonth::where('type_receipt','=','customer')
								->where('company_id','=',$so->company_id)
								->where(function($query) use ($month,$year){
									$query->where(function($query2) use ($month,$year){
										$query2->where('month','<',$month)
											->where('year','=',$year);
									})->orWhere(function($query2) use ($month,$year){
										$query2->where('year','<',$year);
									});
								})
								->orderBy('year','desc')
								->orderBy('month','desc')
								->limit(1);
			$receipt_month_prev = $receipt_month_prev->first();
			if($receipt_month_prev){
				$arr_print['arr_data']['no_cu'] = $receipt_month_prev->con_lai;
			}else{
				$arr_print['arr_data']['no_cu'] = 0;
			}

			$list_po = Saleorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('company_id','=',$so->company_id)
					->get()->toArray();
			foreach ($list_po as $key => $value) {
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  $value['sum_amount'];
				$key_order++;
			}
			$list_so = ReturnSaleorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('company_id','=',$so->company_id)
					->get()->toArray();

			foreach ($list_so as $key => $value) {
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  -$value['sum_amount'];
				$key_order++;
			}

			$list_paid = Paid::where('date','>=',$begin)
						->where('date','<',$end)
						->where('company_id','=',$so->company_id)
						->where('type_paid','=','customer')
						->get()->toArray();
			
			foreach ($list_paid as $key => $value) {
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  -$value['sum_paid'];
				$key_order++;
			}

			$date = array();
			foreach ($list_order as $key => $value) {
				$date[$key] = $value['date'];
			}
			array_multisort($date,SORT_ASC,$list_order);
			foreach ($list_order as $key => $value) {
				$arr_print['arr_data']['no_cu']+=$value['sum_amount'];
			}

			$arr_cache = \Cache::get('list_product_so'.\Auth::user()->id);
			$sum_amount = 0;
			$arr_check_idproduct = array();
			$arr_check_mproduct = array();

			foreach ($arr_cache as $key => $value) {
				if(!in_array($value['product_id'],$arr_check_idproduct)){
					$arr_check_idproduct[] = $value['product_id'];
					$arr_check_mproduct[$value['product_id']][]=$value;
					$arr_cache_tmp[$value['product_id']]=$value;
				}else{
					foreach ($arr_check_mproduct[$value['product_id']] as $key2 => $m_product) {
						if($value['oum_id']==$m_product['oum_id'] && $value['specification']==$m_product['specification'] && $value['sell_price']==$m_product['sell_price']){
							$arr_check_mproduct[$value['product_id']][$key2]['quantity']+= $value['quantity'];
						}else{
							$arr_check_mproduct[$value['product_id']][]=$value;
						}
					}
				}
			}
			$arr_cache = array();
			foreach ($arr_check_mproduct as $key => $value) {
				foreach ($value as $key2 => $value2) {
					$arr_cache[] = $value2;
				}
			}
			foreach ($arr_cache as $key => $value) {
				$sum_amount += $value['sell_price']*$value['quantity']*$value['specification'];
			}
			$arr_print['arr_data']['toa_moi'] = $sum_amount;
			if($so->status==0){
				$arr_print['arr_data']['no_cu'] = 0;
			}
			$arr_print['arr_data']['tong_cong'] = $arr_print['arr_data']['no_cu'] + $arr_print['arr_data']['toa_moi'];

			$arr_print['arr_data']['no_cu'] = number_format($arr_print['arr_data']['no_cu']);
			$arr_print['arr_data']['toa_moi'] = number_format($arr_print['arr_data']['toa_moi']);
			$arr_print['arr_data']['tong_cong'] = number_format($arr_print['arr_data']['tong_cong']);
			$arr_print['arr_list']['arr_sum'][] = [
				['value'=>'Tổng cộng:','colspan'=>'6'],
				['value'=>$sum_amount]
			];
			$arr_print['arr_list']['arr_body'] = $arr_cache;
			$link = ExportsController::getCreatePrintPdf($arr_print,$id_template,'don_hang_so_'.$so->id,'potrait');
			Log::create_log(\Auth::user()->id,'App\Saleorder','In đơn hàng số '.session('current_saleorder'));
			return redirect($link);
		}
		die;
	}

	public function anyExportPdfList(){
		$id_template = 8;
		$arr_print = 	[
				'arr_list' =>	[
						'arr_key' => 	[
								'id',
								'company_name',
								'date',
								'status',
								'sum_amount'
								],
						'arr_head' => 	[
								['text'=>'Mã HĐ','class'=>''],
								['text'=>'Nhà cung cấp','class'=>''],
								['text'=>'Ngày trả hàng','class'=>''],
								['text'=>'Tình trạng','class'=>''],
								['text'=>'Tổng tiền','class'=>'money']
								],
						'arr_body'=>[],
						'arr_sum'=>[]
						],
				'arr_data'=>	[

						]
				];	
		if (\Cache::has('list_saleorder'.\Auth::user()->id)){
			$arr_cache = \Cache::get('list_saleorder'.\Auth::user()->id);
			$total_sum_amount = 0;
			foreach ($arr_cache as $key => $value) {
				$total_sum_amount += $value['sum_amount'];
				
				if($value['status']){
					$arr_cache[$key]['status'] = 'Hoàn thành';
				}else{
					$arr_cache[$key]['status'] = 'Mới';
				}
			}
			$arr_print['arr_list']['arr_sum'][] = [
				['value'=>'Tổng cộng:','colspan'=>'4'],
				['value'=>$total_sum_amount],
			];
			$arr_print['arr_list']['arr_body'] = $arr_cache;
			$link = ExportsController::getCreatePrintPdf($arr_print,$id_template,'danh_sach_don_hang','potrait');
			return redirect($link);
		}
		die;
	}

	public function anyLog(){
		$list_log = Log::select('logs.*','users.name')
				->where('module_type','=','App\Saleorder')
				->leftJoin('users','users.id','=','logs.user_id')
				->orderBy('id','desc')
				->paginate(50);

		$this->layout->content=view('log.log', ['list_log'=>$list_log]);
	}

	public function anyUpdateOrder(Request $request){
		$arr_return = ['status'=>'error'];
		$arr_order = $request->has('arr_order')?$request->input('arr_order'):array();
		$check = true;
		foreach ($arr_order as $key => $value) {
			if($check){
				$tmp = Mproduct::where('id','=',$value)->update(['order'=>$key]);
				$check = $check && $tmp;
			}
		}
		if($check){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message'] = 'Save error';
		}
		return $arr_return;
	}

	public function anyExportExcel(){
		$id_template = 5;
		$arr_print = 	[
				'arr_list' =>	[
						'arr_key' => 	[
								'sku',
								'name',
								'oum_name',
								'specification',
								'quantity',
								'sell_price',
								'amount'
								],
						'arr_head' => 	[
								['text'=>'STT','class'=>''],
								['text'=>'Mã','class'=>''],
								['text'=>'Tên sản phẩm','class'=>''],
								['text'=>'Đơn vị','class'=>'center'],
								['text'=>'Quy cách','class'=>'center'],
								['text'=>'Số lượng','class'=>'center'],
								['text'=>'Đơn giá','class'=>'money'],
								['text'=>'Thành tiền','class'=>'money']
								],
						'arr_body'=>[],
						'arr_sum'=>[]
						],
				'arr_data'=>	[
							'id'=>session('current_saleorder')
						]
				];	
		if (\Cache::has('list_product_so'.\Auth::user()->id)){
			$so = Saleorder::select('saleorders.*','companies.name')
							->where('saleorders.id','=',session('current_saleorder'))
							->leftJoin('companies','companies.id','=','saleorders.company_id')->get()->first();
			$month = intval(date('m',strtotime($so->date)));
			$year = intval(date('Y',strtotime($so->date)));
			$begin = date('Y-m-d H:i:s',strtotime('1'.'-'.$month.'-'.$year));
			$end = $so->date;
			$list_order = array();
			$key_order = 1;
			$arr_print['arr_data']['date'] = date('d-m-Y',strtotime($so->date));
			$arr_print['arr_data']['company_name'] = $so->name;
			$arr_print['arr_data']['phone'] = $so->company_phone;
			$arr_print['arr_data']['address'] = '';
			$arr_dress = Address::select('addresses.*','provinces.name as province_name')
						->where('addresses.id','=',$so->address_id)
						->leftJoin('provinces','provinces.id','=','addresses.province_id')
						->get()->first();
			$arr_print['arr_data']['address'] .= $arr_dress->address?$arr_dress->address.', ':'';
			$arr_print['arr_data']['address'] .= $arr_dress->town_city?$arr_dress->town_city.', ':'';
			$arr_print['arr_data']['address'] .= $arr_dress->province_name?$arr_dress->province_name:'';

			$receipt_month_prev = ReceiptMonth::where('type_receipt','=','customer')
								->where('company_id','=',$so->company_id)
								->where(function($query) use ($month,$year){
									$query->where(function($query2) use ($month,$year){
										$query2->where('month','<',$month)
											->where('year','=',$year);
									})->orWhere(function($query2) use ($month,$year){
										$query2->where('year','<',$year);
									});
								})
								->orderBy('year','desc')
								->orderBy('month','desc')
								->limit(1);
			$receipt_month_prev = $receipt_month_prev->first();
			if($receipt_month_prev){
				$arr_print['arr_data']['no_cu'] = $receipt_month_prev->con_lai;
			}else{
				$arr_print['arr_data']['no_cu'] = 0;
			}

			$list_po = Saleorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('company_id','=',$so->company_id)
					->get()->toArray();
			foreach ($list_po as $key => $value) {
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  $value['sum_amount'];
				$key_order++;
			}
			$list_so = ReturnSaleorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('company_id','=',$so->company_id)
					->get()->toArray();

			foreach ($list_so as $key => $value) {
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  -$value['sum_amount'];
				$key_order++;
			}

			$list_paid = Paid::where('date','>=',$begin)
						->where('date','<',$end)
						->where('company_id','=',$so->company_id)
						->where('type_paid','=','customer')
						->get()->toArray();
			
			foreach ($list_paid as $key => $value) {
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  -$value['sum_paid'];
				$key_order++;
			}

			$date = array();
			foreach ($list_order as $key => $value) {
				$date[$key] = $value['date'];
			}
			array_multisort($date,SORT_ASC,$list_order);
			foreach ($list_order as $key => $value) {
				$arr_print['arr_data']['no_cu']+=$value['sum_amount'];
			}

			$arr_cache = \Cache::get('list_product_so'.\Auth::user()->id);
			$sum_amount = 0;
			$arr_check_idproduct = array();
			$arr_check_mproduct = array();

			foreach ($arr_cache as $key => $value) {
				if(!in_array($value['product_id'],$arr_check_idproduct)){
					$arr_check_idproduct[] = $value['product_id'];
					$arr_check_mproduct[$value['product_id']][]=$value;
					$arr_cache_tmp[$value['product_id']]=$value;
				}else{
					foreach ($arr_check_mproduct[$value['product_id']] as $key2 => $m_product) {
						if($value['oum_id']==$m_product['oum_id'] && $value['specification']==$m_product['specification'] && $value['sell_price']==$m_product['sell_price']){
							$arr_check_mproduct[$value['product_id']][$key2]['quantity']+= $value['quantity'];
							$arr_check_mproduct[$value['product_id']][$key2]['amount']+= $value['amount'];
						}else{
							$arr_check_mproduct[$value['product_id']][]=$value;
						}
					}
				}
			}
			$arr_cache = array();
			foreach ($arr_check_mproduct as $key => $value) {
				foreach ($value as $key2 => $value2) {
					$arr_cache[] = $value2;
				}
			}
			$index=2;
			foreach ($arr_cache as $key => $value) {
				$sum_amount += $value['sell_price']*$value['quantity']*$value['specification'];
				$arr_cache[$key]['amount'] = '=E'.$index.'*F'.$index."*G".$index;
				$index++;
			}
			$arr_print['arr_data']['toa_moi'] = $sum_amount;
			if($so->status==0){
				$arr_print['arr_data']['no_cu'] = 0;
			}
			$arr_print['arr_data']['tong_cong'] = $arr_print['arr_data']['no_cu'] + $arr_print['arr_data']['toa_moi'];

			$arr_print['arr_data']['no_cu'] = number_format($arr_print['arr_data']['no_cu']);
			$arr_print['arr_data']['toa_moi'] = number_format($arr_print['arr_data']['toa_moi']);
			$arr_print['arr_data']['tong_cong'] = number_format($arr_print['arr_data']['tong_cong']);
			$arr_print['arr_list']['arr_sum'][] = [
				['value'=>'Tổng cộng:','colspan'=>'6'],
				['value'=>$sum_amount]
			];
			$arr_print['arr_list']['arr_body'] = $arr_cache;

			$link = ExportsController::getCreatePrintExcel($arr_print,$id_template,'don_hang_so_'.$so->id);

			Log::create_log(\Auth::user()->id,'App\Saleorder','In đơn hàng số '.session('current_saleorder'));
			return redirect($link);
		}
		die;
	}
}
