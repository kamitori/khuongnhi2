<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductType;
use App\MProduct;
use App\Company;
use App\Country;
use App\Province;
use App\User;
use App\Oum;
use App\ProductStock;
use App\Purchaseorder;
use App\ReturnPurchaseorder;
use App\Paid;
use App\ReceiptMonth;
use App\Address;
use App\SellPrice;
use Datatables;
use Illuminate\Http\Request;
use Session;
use DB;

class PurchaseordersController extends Controller {
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
		Session::forget('product_of_po'.session('current_purchaseorder'));
		Session::forget('current_purchaseorder');
		return redirect('purchaseorders');
	}

	public function anyCreate(Request $request)
	{
		$purchaseorder = new Purchaseorder;
		$purchaseorder->date = date("Y-m-d H:i:s");
		$purchaseorder->save();
		session(['current_purchaseorder' => $purchaseorder->id]);
		// $address = new Address;
		// $purchaseorder->date = date("Y-m-d H:i:s");
		// if($purchaseorder->save()){
		// 	session(['current_purchaseorder' => $purchaseorder->id]);
		// 	$address->module_id  = $purchaseorder['id'];
		// 	$address->module_type  = 'App\Purchaseorder';
		// 	$address->save();
		// 	$purchaseorder->address_id = $address->id;
		// 	$purchaseorder->save();
		// }	
		return redirect('purchaseorders');
	}

	public function anyDelete(Request $request)
	{
		$arr_return = array('status'=>'error');
		$id_purchaseorder = session('current_purchaseorder') !== null ? session('current_purchaseorder') : 0;
		if($id_purchaseorder){
			$purchaseorder = Purchaseorder::find($id_purchaseorder);
			if(!$purchaseorder->status){
				if($purchaseorder->delete()){
					// Address::where('module_id','=',$id_purchaseorder)->where('module_type','=','App\Purchaseorder')->delete();
					$list_mproduct = Mproduct::where('module_id','=',$id_purchaseorder)
									->where('module_type','=','App\Purchaseorder')
									->lists('id');
					MProduct::whereIn('id',$list_mproduct)->delete();
					SellPrice::whereIn('m_product_id',$list_mproduct)->delete();
					ProductStock::whereIn('m_product_id',$list_mproduct)->delete();
					$arr_return['status'] = 'success';
				}else{
					$arr_return['message'] = 'Delete fail !';
				}
			}else{
				header('Content-Type: text/html; charset=utf-8');
				echo  'Không thể xóa hóa đơn đã hoàn thành';die;
			}

			Session::forget('current_purchaseorder');
		}else{
			$arr_return['message'] = 'Không tìm thấy hóa đơn';
		}
		return $arr_return;
	}

	public function getDeleteFromList(Request $request,$id=0)
	{
		$id_purchaseorder = $id;
		if($id_purchaseorder){
			$purchaseorder = Purchaseorder::find($id_purchaseorder);
			if(!$purchaseorder->status){
				if($purchaseorder->delete()){
					// Address::where('module_id','=',$id_purchaseorder)->where('module_type','=','App\Purchaseorder')->delete();
					$list_mproduct = Mproduct::where('module_id','=',$id_purchaseorder)
									->where('module_type','=','App\Purchaseorder')
									->lists('id');
					MProduct::whereIn('id',$list_mproduct)->delete();
					SellPrice::whereIn('m_product_id',$list_mproduct)->delete();
					ProductStock::whereIn('m_product_id',$list_mproduct)->delete();

				}
			}
		}
		return redirect('purchaseorders/list');
	}

	public function anyEntry(Request $request,$id=null)
	{
		\DB::enableQueryLog();
		if(isset($id) && $id!=null){
			$id_purchaseorder = $id;
			$purchaseorder = Purchaseorder::find($id_purchaseorder);
			if($purchaseorder != null){
				session(['current_purchaseorder' => $purchaseorder['id']]);
			}else{
				return redirect('purchaseorders');
			}
		}else{
			$id_purchaseorder = session('current_purchaseorder') !== null ? session('current_purchaseorder') : 0;
			if($id_purchaseorder){
				$purchaseorder = Purchaseorder::find($id_purchaseorder);
				session(['current_purchaseorder' => $purchaseorder['id']]);
			}else{
				$purchaseorder = Purchaseorder::get()->last();
				if($purchaseorder){
					session(['current_purchaseorder' => $purchaseorder['id']]);
				}else{
					$purchaseorder = new Purchaseorder;
					$purchaseorder->date = date("Y-m-d H:i:s");
					$purchaseorder->save();
					session(['current_purchaseorder' => $purchaseorder->id]);
				}
			}
		}

		$address = Address::where('module_id','=',$purchaseorder->id)
					->where('module_type','=','App\Purchaseorder')->first();
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
		// var_dump(DB::getQueryLog());
		// pr($purchaseorder);die;
		$address = $address->toArray();
		$purchaseorder = $purchaseorder->toArray();
		//Init array
		$distributes = array();
		$oums = array();
		$users = array();
		$countries = array();
		$list_product = array();
		$producttypes = array();

		//Get value array
		$distributes = Company::getDistributeList()->with('address')->get()->toArray();
		$oums = Oum::get()->toArray();
		$users = User::get();
		$countries = Country::with('provinces')->get()->toArray();
		$producttypes = ProductType::get()->toArray();

		$arr_product = MProduct::where('module_type','=','App\Purchaseorder')
						->where('module_id','=',$purchaseorder['id'])
						->lists('product_id');
		Session::forget('product_of_po'.session('current_purchaseorder'));
		foreach ($arr_product as $key => $value) {
			Session::put('product_of_po'.session('current_purchaseorder').".".$value , $value);
		}

		$view_list_product = self::getListProduct();
		// $view_list_product = '';


		// pr($list_product);die;
		$this->layout->content=view('purchaseorder.entry',[	'distributes'=>$distributes,
										'users'=>$users,
										'countries'=>$countries,
										'purchaseorder'=>$purchaseorder,
										'address'=>$address,
										'oums'=>$oums,
										'producttypes'=>$producttypes,
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
		$id_purchaseorder = session('current_purchaseorder') !== null ? session('current_purchaseorder') : 0;
		if($id_purchaseorder){
			$purchaseorder = Purchaseorder::find($id_purchaseorder);
			session(['current_purchaseorder' => $purchaseorder['id']]);
			$time = date('H:i:s', strtotime($purchaseorder->date));
		}else{

			$purchaseorder = new Purchaseorder;
			$purchaseorder->save();
			session(['current_purchaseorder' => $purchaseorder->id]);
		}
		if($purchaseorder->status == 0){
			$purchaseorder->company_id = $request->has('company_id') ? $request->input('company_id') : 0;
			$purchaseorder->user_id = $request->has('user_id') ? $request->input('user_id') : 0;
			$purchaseorder->date = $request->has('date') ? date("Y-m-d H:i:s",strtotime($request->input('date').' '.$time)) : date("Y-m-d H:i:s");
			$purchaseorder->company_phone = $request->has('company_phone') ? $request->input('company_phone') : '';
			$purchaseorder->company_email = $request->has('company_email') ? $request->input('company_email') : '';

			$address = Address::where('module_id','=',$purchaseorder->id)
						->where('module_type','=','App\Purchaseorder')->first();

			$address->module_id  = $purchaseorder->id;
			$address->module_type  = 'App\Purchaseorder';
			$address->address  = $request->has('address') ? $request->input('address') : '';
			$address->town_city  = $request->has('town_city') ? $request->input('town_city') : '';
			$address->zip_postcode  = $request->has('zip_postcode') ? $request->input('zip_postcode') : '';
			$address->country_id  = $request->has('country_id') ? $request->input('country_id') : 0;
			$address->province_id  = $request->has('province_id') ? $request->input('province_id') : 0;
			$address->save();
			$purchaseorder->address_id = $address->id;
		}else{
			$purchaseorder->sum_amount = 0;
			$purchaseorder->sum_invest = 0;
		}
		$old_status = $purchaseorder->status;
		$purchaseorder->status = $request->has('status')?1:0;
		$check_save_in_stock = true;
		if($purchaseorder->status){
			$arr_mproduct = Mproduct::select('m_products.id','quantity','specification','name','invest')
							->where('module_id', '=', $purchaseorder->id)
							->where('module_type', '=', 'App\Purchaseorder')
							->leftJoin('products','products.id','=','m_products.product_id')
							->get()->toArray();
			foreach ($arr_mproduct as $key => $mproduct) {
				$purchaseorder->sum_amount = $purchaseorder->sum_amount + $mproduct['invest'];
				$product_stock = ProductStock::where('m_product_id','=',$mproduct['id'])->first();
				$product_stock->in_stock = $product_stock->in_stock +  ($mproduct['quantity']*$mproduct['specification']);
				if($product_stock->in_stock < 0){
					$check_save_in_stock = false;
					$arr_return['message'] .= 'Số lượng sản phẩm '.$mproduct['name'].' nhập vào thấp hơn số lượng đã bán ra<br/><br/>';
				}
			}
		}else{
			if($old_status != $purchaseorder->status){
				$arr_mproduct = Mproduct::select('m_products.id','quantity','specification','name')
								->where('module_id', '=', $purchaseorder->id)
								->where('module_type', '=', 'App\Purchaseorder')
								->leftJoin('products','products.id','=','m_products.product_id')
								->get()->toArray();
				foreach ($arr_mproduct as $key => $mproduct) {
					$product_stock = ProductStock::where('m_product_id','=',$mproduct['id'])->first();
					$product_stock->in_stock = $product_stock->in_stock - ($mproduct['quantity']*$mproduct['specification']);
					$product_stock->save();
				}
			}
		}

		if($check_save_in_stock){
			if($purchaseorder->save()){
				if($purchaseorder->status){
					foreach ($arr_mproduct as $key => $mproduct) {
						$product_stock = ProductStock::where('m_product_id','=',$mproduct['id'])->first();
						$product_stock->in_stock = $product_stock->in_stock +  ($mproduct['quantity']*$mproduct['specification']);
						$product_stock->save();
					}
				}
				Mproduct::where('module_id', '=', $purchaseorder->id)
						->where('module_type', '=', 'App\Purchaseorder')
						->update(['company_id' => $purchaseorder->company_id ]);
				$arr_return['status']= 'success';
			}else{
				$arr_return['message']= 'Saving fail !';
			}
		}
		return $arr_return;
	}

	public function anyListClear(Request $request)
	{
		Session::forget('sort_filter_purchaseorder');
		return redirect('purchaseorders/list');
	}

	public function anyList(Request $request)
	{
		\DB::enableQueryLog();
		if($request->has('input-sort')){
			$arr_sort = $request->input('input-sort');
			$arr_sort =(array) json_decode($arr_sort);
		}elseif( session('sort_filter_purchaseorder.arr_sort') !== null){
			$arr_sort = session('sort_filter_purchaseorder.arr_sort');
		}else{
			$arr_sort=array();
		}
		session('sort_filter_purchaseorder.arr_sort', $arr_sort);


		if($request->has('input-filter')){
			$arr_filter = $request->input('input-filter');
		}elseif( session('sort_filter_purchaseorder.arr_filter') !== null ){
			$arr_filter = session('sort_filter_purchaseorder.arr_filter');
		}else{
			$arr_filter=[
					'id'=>'',
					'company_id'=>'',
					'date'=>'',
					'status'=>''
				       ];
		}
		session(['sort_filter_purchaseorder.arr_sort'=>$arr_sort]);
		session(['sort_filter_purchaseorder.arr_filter'=> $arr_filter]);

		//Init array
		$distributes = array();
		$list_id = array();
		$list_date = array();
		$list_purchaseorder = array();

		//Get value array
		$distributes = Company::getDistributeList()->get()->toArray();
		$list_id = Purchaseorder::lists('id');
		$list_date = Purchaseorder::orderBy('date','desc')->lists('date');
		foreach ($list_date as $key => $value) {
			$list_date[$key] = date('d-m-Y',strtotime($value));
		}
		$list_date = array_unique($list_date);

		$list_purchaseorder = Purchaseorder::select('purchaseorders.*','suminvest.*','companies.name as company_name')->with('company')
					->leftJoin(
							DB::raw(' (
									select module_id, module_type,sum(invest) as sum_invest 
									from m_products where module_type = "App\\\\Purchaseorder" group by  module_id 
								    ) as suminvest'), function($join){
								$join->on('purchaseorders.id', '=', 'module_id');
							}
						)->leftJoin('companies','companies.id','=','purchaseorders.company_id');
		foreach ($arr_sort as $key => $value) {
			if($key=='company_id'){
				$list_purchaseorder = $list_purchaseorder->orderBy('companies.name',$value);
			}else{
				$list_purchaseorder = $list_purchaseorder->orderBy($key,$value);
			}
		}
		if($arr_filter['id']!=''){
			$list_purchaseorder->where('id',$arr_filter['id']);
		}else{
			foreach ($arr_filter as $key => $value) {
				if($value!=''){
					if($key=='date'){
						$now = date("Y-m-d H:i:s",strtotime($arr_filter['date']));
						$tomorow = date("Y-m-d H:i:s",strtotime($arr_filter['date'])+86400);
						$list_purchaseorder->where('date','>=',$now)->where('date','<',$tomorow);
					}else{
						$list_purchaseorder->where($key,$value);
					}
				}
			}
		}
		if(!isset($arr_filter['status'])){
			$arr_filter['status'] = '';
		}
		$list_purchaseorder = $list_purchaseorder->paginate(20);
		foreach($list_purchaseorder as $key => $rpo){
			$list_purchaseorder[$key]['date'] = date('d-m-Y',strtotime($rpo['date']));
		}
		\Cache::put('list_purchaseorder'.\Auth::user()->id, $list_purchaseorder, 30);

		// var_dump(DB::getQueryLog());die;
		$this->layout->content=view('purchaseorder.list', [
								'distributes'		=>	$distributes,
								'arr_sort' 		=> 	$arr_sort,
								'arr_filter' 		=> 	$arr_filter,
								'list_id' 		=>	$list_id,
								'list_date' 		=>	$list_date,
								'list_purchaseorder'	=>	$list_purchaseorder
							        ]);
	}

	public function postAddProductSession(Request $request){
		$arr_id = $request->has('id')?$request->input('id'):array();
		foreach ($arr_id as $key => $value) {
			Session::put('product_of_po'.session('current_purchaseorder').".".$value , $value);
		}
		return '';
	}

	public function postRemoveProductSession(Request $request){
		$arr_id = $request->has('id')?$request->input('id'):array();
		foreach ($arr_id as $key => $value) {
			Session::forget('product_of_po'.session('current_purchaseorder').".".$value);
		}
		return '';
	}

	public function anyAddProduct(Request $request){
		$arr_return = array(
			"status"=>'success'
		);
		$id = $request->has('id')?$request->input('id'):0;
		$module_id = session('current_purchaseorder');
		$module_type = 'App\Purchaseorder';
		$arr_product = session('product_of_po'.session('current_purchaseorder'));
		$arr_product_of_po = Mproduct::where('module_id','=',$module_id)
						->where('module_type','=',$module_type)
						->lists('product_id');


		foreach ($arr_product as $key => $product_id) {
			if(!in_array($product_id, $arr_product_of_po)){
				$product = Product::find($product_id);
				$mproduct = new MProduct;
				$mproduct->product_id	=	$product_id;
				$mproduct->module_id	= 	$module_id;
				$mproduct->id	= 	$id;
				$mproduct->module_type	=	$module_type;
				$mproduct->specification	=	0;
				$mproduct->oum_id		=	0;
				$mproduct->origin_price	=	0;
				$mproduct->save();
				$last_sellprice = SellPrice::where('product_id','=',$product_id)->orderBy('m_product_id','desc')->first();
				if($last_sellprice){
					$arr_sellprice = SellPrice::where('m_product_id','=',$last_sellprice->m_product_id)->get()->toArray();
					foreach ($arr_sellprice as $key => $value) {
						$sellprice = new SellPrice;
						$sellprice->name = $value['name'];
						$sellprice->price = $value['price'];
						$sellprice->m_product_id = $mproduct->id;
						$sellprice->product_id = $value['product_id'];
						$sellprice->save();
					}
				}
				$product = Product::find($product_id);
				if(!$product->check_in_stock){
					$product->check_in_stock = 1;
					$product->save();
				}
			}
		}


		foreach ($arr_product_of_po as $key => $product_id) {
			if(!in_array($product_id, $arr_product)){
				$mproduct = MProduct::where('module_id','=',$module_id)
						->where('module_type','=',$module_type)
						->where('product_id','=',$product_id)->first()->toArray();

				$id_product = $mproduct['product_id'];
				$quantity = $mproduct['quantity'];
				$check = MProduct::where('module_id','=',$module_id)
						->where('module_type','=',$module_type)
						->where('product_id','=',$product_id)->delete();
				if($check){
					$product_stock = ProductStock::where($m_product_id,'=',$mproduct['id'])->delete();
				}
			}
		}
		return $arr_return;
	}

	public function getListProduct(){
		$id = session('current_purchaseorder');
		//Init array
		$distributes = array();
		$oums = array();
		$list_product = array();

		//Get value
		$distributes = Company::getDistributeList()->with('address')->get()->toArray();
		$oums = Oum::get()->toArray();
		$list_product = MProduct::select('m_products.*','products.sku','products.name')->where('module_type','=','App\Purchaseorder')
						->where('module_id','=',$id)
						->leftJoin('products','products.id','=','m_products.product_id')
						->addSelect('oums.name as oum_name')
						->leftJoin('oums','oums.id','=','m_products.oum_id')
						->get()->toArray();
		$purchaseorder = Purchaseorder::select('status')->where('id','=',$id)->first()->toArray();

		\Cache::put('list_product_po'.\Auth::user()->id, $list_product, 30);
		return view('purchaseorder.list-product',[	'distributes'=>$distributes,
							'oums'=>$oums,
							'list_product'=>$list_product,
							'purchaseorder'=>$purchaseorder
						]);
	}

	public function postUpdateMproduct(Request $request){
		$arr_return= array('status'=>'error','invest'=>0);
		$id = $request->has('id')?$request->input('id'):0;
		if($id){
			$mproduct = MProduct::find($id);
			$mproduct->oum_id =  $request->has('oum_id')?$request->input('oum_id'):0;
			$mproduct->origin_price =  $request->has('origin_price')?$request->input('origin_price'):0;
			$mproduct->specification =  $request->has('specification')?$request->input('specification'):0;
			$old_quantity = $mproduct->quantity ;
			$mproduct->quantity =  $request->has('quantity')?$request->input('quantity'):0;
			$product_stock = ProductStock::where('m_product_id','=',$mproduct->id)->first();
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
			// pr($mproduct);
			// die;
			$id_product = $mproduct->product_id;
			$quantity = $mproduct->quantity;
			$check  = MProduct::where('id','=',$id)->delete();
			if($check){
				$arr_return['status'] = 'success';
			}else{
				$arr_return['message'] = 'Saving fail !';
			}
		}
		return $arr_return;
	}

	public function anyExportPdf(){
		$id_template = 4;
		$arr_print = 	[
				'arr_list' =>	[
						'arr_key' => 	[
								'sku',
								'name',
								'oum_name',
								'specification',
								'quantity',
								'origin_price',
								'invest'
								],
						'arr_head' => 	[
								['text'=>'Mã','class'=>''],
								['text'=>'Tên sản phẩm','class'=>''],
								['text'=>'Đơn vị','class'=>''],
								['text'=>'Quy cách','class'=>''],
								['text'=>'Số lượng','class'=>''],
								['text'=>'Đơn giá','class'=>'money'],
								['text'=>'Thành tiền','class'=>'money']
								],
						'arr_body'=>[],
						'arr_sum'=>[]
						],
				'arr_data'=>	[
							'id'=>session('current_purchaseorder')
						]
				];	
		if (\Cache::has('list_product_po'.\Auth::user()->id)){
			$po = Purchaseorder::select('purchaseorders.*','companies.name')->where('purchaseorders.id','=',session('current_purchaseorder'))
							->leftJoin('companies','companies.id','=','purchaseorders.company_id')->get()->first();
			$month = intval(date('m',strtotime($po->date)));
			$year = intval(date('Y',strtotime($po->date)));
			$begin = date('Y-m-d H:i:s',strtotime('1'.'-'.$month.'-'.$year));
			$end = $po->date;
			$list_order = array();
			$key_order = 1;
			$arr_print['arr_data']['date'] = date('d-m-Y',strtotime($po->date));
			$arr_print['arr_data']['company_name'] = $po->name;
			$arr_print['arr_data']['phone'] = $po->company_phone;
			$arr_print['arr_data']['address'] = '';
			$arr_dress = Address::select('addresses.*','provinces.name as province_name')
						->where('addresses.id','=',$po->address_id)
						->leftJoin('provinces','provinces.id','=','addresses.province_id')
						->get()->first();
			$arr_print['arr_data']['address'] .= $arr_dress->address?$arr_dress->address.', ':'';
			$arr_print['arr_data']['address'] .= $arr_dress->town_city?$arr_dress->town_city.', ':'';
			$arr_print['arr_data']['address'] .= $arr_dress->province_name?$arr_dress->province_name:'';

			$receipt_month_prev = ReceiptMonth::where('type_receipt','=','customer')
								->where('company_id','=',$po->company_id)
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
			
			$list_po = Purchaseorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('company_id','=',$po->company_id)
					->get()->toArray();
			foreach ($list_po as $key => $value) {
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  $value['sum_amount'];
				$key_order++;
			}
			$list_rpo = ReturnPurchaseorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('company_id','=',$po->company_id)
					->get()->toArray();

			foreach ($list_rpo as $key => $value) {
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  -$value['sum_amount'];
				$key_order++;
			}

			$list_paid = Paid::where('date','>=',$begin)
						->where('date','<',$end)
						->where('company_id','=',$po->company_id)
						->where('type_paid','=','distribute')
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

			$arr_cache = \Cache::get('list_product_po'.\Auth::user()->id);
			$sum_invest = 0;
			foreach ($arr_cache as $key => $value) {
				$sum_invest += $value['invest'];
			}
			$arr_print['arr_data']['toa_moi'] = $sum_invest;
			$arr_print['arr_data']['tong_cong'] = $arr_print['arr_data']['no_cu'] + $arr_print['arr_data']['toa_moi'];

			$arr_print['arr_data']['no_cu'] = number_format($arr_print['arr_data']['no_cu']);
			$arr_print['arr_data']['toa_moi'] = number_format($arr_print['arr_data']['toa_moi']);
			$arr_print['arr_data']['tong_cong'] = number_format($arr_print['arr_data']['tong_cong']);
			$arr_print['arr_list']['arr_sum'] = [
				['value'=>'Tổng cộng:','colspan'=>'6'],
				['value'=>$sum_invest]
			];
			$arr_print['arr_list']['arr_body'] = $arr_cache;
			$link = ExportsController::getCreatePrintPdf($arr_print,$id_template,'phieu_tra_hang_so_'.$po->id,'potrait');
			return redirect($link);
		}
		die;
	}

	public function anyExportPdfList(){
		$id_template = 9;
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
		if (\Cache::has('list_purchaseorder'.\Auth::user()->id)){
			$arr_cache = \Cache::get('list_purchaseorder'.\Auth::user()->id);
			$total_sum_amount = 0;
			foreach ($arr_cache as $key => $value) {
				$total_sum_amount += $value['sum_amount'];
				
				if($value['status']){
					$arr_cache[$key]['status'] = 'Hoàn thành';
				}else{
					$arr_cache[$key]['status'] = 'Mới';
				}
			}
			$arr_print['arr_list']['arr_sum'] = [
				['value'=>'Tổng cộng:','colspan'=>'4'],
				['value'=>$total_sum_amount],
			];
			$arr_print['arr_list']['arr_body'] = $arr_cache;
			$link = ExportsController::getCreatePrintPdf($arr_print,$id_template,'danh_sach_tra_hang_ncc','potrait');
			return redirect($link);
		}
		die;
	}
}
