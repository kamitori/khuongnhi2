<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\MProduct;
use App\ProductStock;
use App\Company;
use App\Oum;
use App\SellPrice;
use App\ProductType;
use App\Purchaseorder;
use App\ReturnPurchaseorder;
use App\ReturnSaleorder;
use Datatables;
use Illuminate\Http\Request;
use Session;
use DB;

class ProductsController extends Controller {

	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function getIndex(Request $request){
		self::anyEntry($request);
	}
	public function anyEntry(Request $request,$id=null)
	{
		if(isset($id) && $id!=null){
			$id_product = $id;
			$product = Product::find($id_product)->toArray();
			session(['current_product' => $product['id']]);
		}else{
			$id_product = session('current_product') !== null ? session('current_product') : 0;
			if($id_product){
				$product = Product::find($id_product)->toArray();
				session(['current_product' => $product['id']]);
			}else{
				$product = Product::get()->last();
				if($product){
					$product= $product->toArray();
					session(['current_product' => $product['id']]);
				}else{
					$product = new Product;
					$product->save();
					session(['current_product' => $product->id]);
				}
			}
		}



		//Init array
		$distributes = array();
		$oums = array();
		$producttypes = array();
		$list_instock = array();


		//Get value array
		$distributes = Company::getDistributeList()->get()->toArray();
		$oums = Oum::orderBy('name')->get()->toArray();
		$producttypes = ProductType::get()->toArray();
		if($product['check_in_stock']){
			$list_instock = MProduct::select('m_products.*','product_stocks.in_stock')
						->with('company')->with('oum')
						->where('m_products.product_id','=',session('current_product'))
						->where('module_type','=','in_stock')
						->leftJoin('product_stocks','product_stocks.m_product_id','=','m_products.id')
						->get()->toArray();
		}
		$view_list_po = self::getListPo();

		$this->layout->content=view('product.entry', ['distributes'=>$distributes,
								'oums'=>$oums,
								'producttypes'=>$producttypes,
								'product' => $product,
								'view_list_po'	=> $view_list_po,
								'list_instock' => $list_instock
							        ]);
	}

	public function anyCreate(Request $request)
	{
		$product = new Product;
		if($product->save()){
			session(['current_product' => $product->id]);
		}
		return redirect('products');
	}

	public function anyDelete(Request $request)
	{
		$arr_return = [
			'status'		=>	'error'
		];
		$id_product = session('current_product') !== null ? session('current_product') : 0;
		if($id_product){

			$product = MProduct::where('product_id','=',$id_product)
						->leftJoin('purchaseorders',function($join){
							$join->on('m_products.module_id','=','purchaseorders.id')
								->where('module_type','=','App\Purchaseorder');
						})->first();
			if($product){
				$arr_return['message'] = 'Sản phẩm đã được tạo hóa đơn.<br/> Xin vui lòng xóa hết hóa đơn để có thể xóa sản phẩm.';
			}else{
				$product = Product::find($id_product);
				if($product->delete()){
					MProduct::where('product_id','=',$id_product)->delete();
					SellPrice::where('product_id','=',$id_product)->delete();
					ProductStock::where('product_id','=',$id_product)->delete();
				}
				Session::forget('current_product');
				$arr_return['status'] = 'success';
			}


		}else{
			$arr_return['message'] = 'Không tìm thấy sản phẩm';
		}
		return $arr_return;

	}
	public function getClear(Request $request)
	{
		Session::forget('current_product');
		return redirect('products');
	}

	public function postUpdate(Request $request)
	{
		$arr_return = array(
					'status' => 'error'
				);
		$id_product = session('current_product') !== null ? session('current_product') : 0;
		if($id_product){
			$product = Product::find($id_product);
			session(['current_product' => $product['id']]);
		}else{
			$product = new Product;
			$product->save();
			session(['current_product' => $product->id]);
		}

		if($product->status == 0){
			$product->name = $request->has('name') ? $request->input('name') : '';
			$product->sku = $request->has('sku') ? $request->input('sku') : '';
			$product->product_type = $request->has('product_type') ? $request->input('product_type') : 0;
		}
		$product->status = $request->has('status')?1:0;
		if($product->save()){
			$arr_return['status']= 'success';
			$arr_return['name']= $product->name;
		}else{
			$arr_return['message']= 'Saving fail !';
		}
		return $arr_return;
	}

	public function postSaveSellPrice(Request $request)
	{
		$arr_return = array(
					'status' => 'error'
		);
		$id = $request->has('id')?$request->input('id'):0;
		if($id){
			$sell_price = SellPrice::find($id);
		}else{
			$sell_price = new SellPrice;
		}
		$sell_price->m_product_id = $request->has('product_id')?$request->input('product_id'):0;
		$sell_price->product_id = session('current_product');
		$sell_price->name =  $request->has('name')?$request->input('name'):'';
		$sell_price->price =  $request->has('price') ? intval(str_replace(",","",$request->input('price'))) : 0;
		if($sell_price->save()){
			$arr_return['status']= 'success';
		}else{
			$arr_return['message']= 'Saving fail !';
		}
		return $arr_return;
	}

	public function getListSellPrice(Request $request)
	{
		$mproduct_id =  $request->has('mproduct_id')?$request->input('mproduct_id'):0;
		$list_price = array();
		$view_list_price ='';
		$list_price = SellPrice::where('m_product_id','=',$mproduct_id)->get()->toArray();
		$view_list_price = view('product.list-sellprice',['list_price' => $list_price]);
		return $view_list_price;
	}

	public function postDeleteSellPrice(Request $request)
	{
		$arr_return = array(
					'status' => 'error'
		);
		$id = $request->has('id')?$request->input('id'):0;
		$sell_price = SellPrice::find($id);
		if($sell_price->delete()){
			$arr_return['status']= 'success';
		}else{
			$arr_return['message']= 'Saving fail !';
		}
		return $arr_return;
	}

	public function anyList(Request $request)
	{
		\DB::enableQueryLog();
		if($request->has('input-sort')){
			$arr_sort = $request->input('input-sort');
			$arr_sort =(array) json_decode($arr_sort);
		}elseif( session('sort_filter_product.arr_sort') !== null){
			$arr_sort = session('sort_filter_product.arr_sort');
		}else{
			$arr_sort=array();
		}
		session('sort_filter_product.arr_sort', $arr_sort);


		if($request->has('input-filter')){
			$arr_filter = $request->input('input-filter');
		}elseif( session('sort_filter_product.arr_filter') !== null ){
			$arr_filter = session('sort_filter_product.arr_filter');
		}else{
			$arr_filter=[
					'sku'=>'',
					'like_name'=>'',
					'name'=>'',
					'company_id'=>'',
					'oum_id'=>'',
					'status'=>''
				       ];
		}
		session(['sort_filter_product.arr_sort'=>$arr_sort]);
		session(['sort_filter_product.arr_filter'=> $arr_filter]);

		//Init array
		$distributes = array();
		$oums = array();
		$producttypes = array();
		$list_sku = array();

		//Get value array
		$distributes = Company::getDistributeList()->get()->toArray();
		$oums = Oum::orderBy('name')->get()->toArray();
		$producttypes = ProductType::get()->toArray();
		$list_all_product = Product::select('sku','name')->get()->toArray();

		$list_product = MProduct::select(
					'products.id',
					'products.name',
					'products.sku',
					'm_products.product_id',
					'm_products.oum_id',
					'm_products.specification',
					'm_products.origin_price',
					'm_products.invest',
					'product_stocks.in_stock',
					'companies.name as company_name',
					'oums.name as oum_name',
					'm_products.module_id'
		                                )
					->addSelect(DB::raw('product_stocks.in_stock/m_products.specification as real_in_stock'))
					->leftJoin('oums','oums.id','=','m_products.oum_id')
					->leftJoin('products','products.id','=','m_products.product_id')
					->leftJoin('purchaseorders',function($join){
						$join->on('purchaseorders.id','=','m_products.module_id')
						->where('purchaseorders.status','=',1);
					})
					->where(function ($query){
						$query->where('purchaseorders.status', '=', 1)
							->orWhere('m_products.module_type', '=', 'in_stock');
					})
					->leftJoin('companies','companies.id','=','m_products.company_id')
					->leftJoin('product_stocks','m_products.id','=','product_stocks.m_product_id');

		foreach ($arr_filter as $key => $value) {
			if($value!=''){
				if($arr_filter['sku']!=''){
					$list_product->where('products.sku',$arr_filter['sku']);
				}elseif($key == 'like_name'){
					$list_product->where('products.name','LIKE',"%".$arr_filter['like_name']."%");
					$arr_filter['name']='';
				}elseif($key == 'name' && $arr_filter['name']!=''){
					$list_product->where('products.name',$arr_filter['name']);
				}elseif($key == 'company_id'){
					$list_product->where('m_products.company_id',$arr_filter['company_id']);
				}elseif($key == 'status'){
					$list_product->where('products.status',$arr_filter['status']);
				}elseif($key == 'oum_id'){
					$list_product->where('m_products.oum_id',$arr_filter['oum_id']);
				}else{
					$a=1;
				}

			}
		}
		$sum_invest =  $list_product->sum('invest');
		foreach ($arr_sort as $key => $value) {
			if($key=='company_id'){
				$list_product = $list_product->orderBy('companies.name',$value);
			}elseif($key=='oum_id'){
				$list_product = $list_product->leftJoin('oums','oums.id','=','m_products.oum_id')->orderBy('oums.name',$value);
			}elseif($key=='id'){
				$list_product = $list_product->orderBy('products.id',$value);
			}elseif($key=='specification'){
				$list_product = $list_product->orderBy('m_products.specification',$value);
			}elseif($key=='in_stock'){
				$list_product = $list_product->orderBy('real_in_stock',$value);
			}else{
				$list_product = $list_product->orderBy($key,$value);
			}
		}
		$list_product = $list_product->orderBy('products.id','asc');
		if(!isset($arr_filter['status'])){
			$arr_filter['status'] = '';
		}
		
		$list_product = $list_product->paginate(100);
		// pr(DB::getQueryLog());die;
		// pr($list_product->toArray());die;

		$this->layout->content=view('product.list', [
								'distributes'		=>$distributes,
								'oums'			=>$oums,
								'producttypes'		=>$producttypes,
								'list_product'		=> $list_product,
								'list_all_product'	=>$list_all_product,
								'arr_sort' 		=> $arr_sort,
								'arr_filter' 		=> $arr_filter,
								'sum_invest'		=>$sum_invest
							        ]);
	}

	public function getDeleteFromList(Request $request,$id=0)
	{
		$id_product = $id;
		if($id_product){
			$product = Product::find($id_product);
			$product->delete();
			SellPrice::where('product_id','=',$id_product)->delete();
			Session::forget('current_product');
		}
		return redirect('products/list');
	}

	public function anyListClear(Request $request)
	{
		Session::forget('sort_filter_product');
		return redirect('products/list');
	}

	public function anyListPopup(Request $request,$module=null)
	{
		\DB::enableQueryLog();
		if($request->has('input-sort')){
			$arr_sort = $request->input('input-sort');
			$arr_sort =(array) json_decode($arr_sort);
		}else{
			$arr_sort=array();
		}



		if($request->has('input-filter')){
			$arr_filter = $request->input('input-filter');
		}else{
			$arr_filter=[
					'sku'=>'',
					'name'=>'',
					'product_type'=>'',
					'status'=>''
				       ];
		}

		//Init array
		$producttypes = array();
		$list_sku = array();

		//Get value array
		$producttypes = ProductType::get()->toArray();
		$list_all_product = Product::select('sku','name')->get()->toArray();

		$list_product = Product::select('products.*')->with('type');

		foreach ($arr_sort as $key => $value) {
			if($key=='id'){
				$list_product = $list_product->orderBy('products.id',$value);
			}else{
				$list_product = $list_product->orderBy($key,$value);
			}
		}
		if(count($arr_sort)==0){
			$list_product = $list_product->orderBy('products.id','asc');
		}

		foreach ($arr_filter as $key => $value) {
			if($value!=''){
				if($arr_filter['sku']!=''){
					$list_product->where('products.sku',$arr_filter['sku']);
				}elseif($arr_filter['name']!=''){
					$list_product->where('products.name',$arr_filter['name']);
				}elseif($key == 'status'){
					$list_product->where('products.status',$arr_filter['status']);
				}else{
					$list_product->where($key,$value);
				}

			}
		}
		if(!isset($arr_filter['status'])){
			$arr_filter['status'] = '';
		}


		$list_product = $list_product->groupBy('products.id')->paginate(50);
		// echo $module;die;
		return view('popup.choose_product_'.$module, [
								'producttypes'=>$producttypes,
								'list_product' => $list_product,
								'list_all_product'=>$list_all_product,
								'arr_sort' => $arr_sort,
								'arr_filter' => $arr_filter,
							        ]);
		die;
	}

	public function getListPo()
	{
		$id_product = session('current_product') !== null ? session('current_product') : 0;
		$list_po = Purchaseorder::select('purchaseorders.date','purchaseorders.id','m_products.quantity','m_products.specification','oums.name as oum_name','companies.name as company_name','m_products.id as product_id','product_stocks.in_stock')
			->leftJoin('m_products',function($join){
				$join->on('m_products.module_id','=','purchaseorders.id')
					->where('module_type','=','App\Purchaseorder');
			})
			->leftJoin('products','m_products.product_id','=','products.id')
			->leftJoin('companies','m_products.company_id','=','companies.id')
			->leftJoin('oums','m_products.oum_id','=','oums.id')
			->leftJoin('product_stocks','product_stocks.m_product_id','=','m_products.id')
			->where('products.id','=',$id_product)
			->where('purchaseorders.status','=',1)
			->orderBy('date','desc')
			->get()->toArray();
		$product = Product::find($id_product)->toArray();
		return view('product.list-po',[
				'list_po'		=>	$list_po ,
				'product'	=>	$product
			]);
	}

	public function postSaveInstock(Request $request)
	{
		$instock  = $request->has('instock') ? $request->input('instock') : '';
		$instock = json_decode($instock);
		$product_id = session('current_product') !== null ? session('current_product') : 0;
		$check = true;
		foreach ($instock as $key => $value) {
			$mproduct = new MProduct;
				$mproduct->product_id	=	$product_id;
				$mproduct->module_id	= 	0;
				$mproduct->company_id	= 	$value->company_id;
				$mproduct->module_type	=	'in_stock';
				$mproduct->specification	=	$value->specification;
				$mproduct->oum_id		=	$value->oum_id;
				$mproduct->origin_price	=	$value->origin_price;
				$mproduct->quantity		=	$value->quantity;
				$mproduct->invest		=	intval($value->origin_price)*intval($value->quantity)*intval($value->specification);
				$check = $check && $mproduct->save();
				$product_stock = new ProductStock;
				$product_stock->in_stock = $mproduct->quantity*$value->specification;
				$product_stock->m_product_id = $mproduct->id;
				$product_stock->product_id = $product_id;
				$check = $check && $product_stock->save();
		}
		$check = $check && Product::where('id','=',$product_id)->update(['check_in_stock'=>1]);
		if($check){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['status'] = 'error';
			$arr_return['message'] = 'Error Saving';
		}
		return $arr_return;
	}

	public function anyListPopupSo(Request $request)
	{
		if($request->has('input-sort')){
			$arr_sort = $request->input('input-sort');
			$arr_sort = (array)json_decode($arr_sort);
		}else{
			$arr_sort = array();
		}

		if($request->has('input-filter')){
			$arr_filter = $request->input('input-filter');
		}else{
			$arr_filter =[
						'sku' => '',
						'name' => '',
						'company_id' => '',
						'oum_id' => '',
						];
		}
		session(['sort_filter_product_so.arr_sort' => $arr_sort]);
		session(['sort_filter_product_so.arr_filter'=> $arr_filter]);

		$distributes = array();
		$oums = array();
		$list_sku = array();

		$distributes = Company::getDistributeList()->get()->toArray();
		$oums = Oum::get()->toArray();
		$list_all_product = Product::select('sku','name')->get()->toArray();

		$list_product = MProduct::select(
					'm_products.id',
					'products.name',
					'products.sku',
					'm_products.product_id',
					'm_products.oum_id',
					'm_products.specification',
					'm_products.origin_price',
					'm_products.invest',
					'product_stocks.in_stock',
					'companies.name as company_name',
					'oums.name as oum_name',
					'm_products.module_id'
		                                )
					->addSelect(DB::raw('product_stocks.in_stock/m_products.specification as real_in_stock'))
					->leftJoin('oums','oums.id','=','m_products.oum_id')
					->leftJoin('products','products.id','=','m_products.product_id')
					->leftJoin('purchaseorders',function($join){
						$join->on('purchaseorders.id','=','m_products.module_id')
						->where('purchaseorders.status','=',1);
					})
					->where(function ($query){
						$query->where('purchaseorders.status', '=', 1)
							->orWhere('m_products.module_type', '=', 'in_stock');
					})
					->where('product_stocks.in_stock','>',0)
					->leftJoin('companies','companies.id','=','m_products.company_id')
					->leftJoin('product_stocks','m_products.id','=','product_stocks.m_product_id');

		foreach ($arr_filter as $key => $value) {
			if($value!=''){
				if($arr_filter['sku']!=''){
					$list_product->where('products.sku',$arr_filter['sku']);
				}elseif($key == 'like_name'){
					$list_product->where('products.name','LIKE',"%".$arr_filter['like_name']."%");
					$arr_filter['name']='';
				}elseif($key == 'name' && $arr_filter['name']!=''){
					$list_product->where('products.name',$arr_filter['name']);
				}elseif($key == 'company_id'){
					$list_product->where('m_products.company_id',$arr_filter['company_id']);
				}elseif($key == 'status'){
					$list_product->where('products.status',$arr_filter['status']);
				}elseif($key == 'oum_id'){
					$list_product->where('m_products.oum_id',$arr_filter['oum_id']);
				}else{
					$a=1;
				}

			}
		}
		$sum_invest =  $list_product->sum('invest');
		foreach ($arr_sort as $key => $value) {
			if($key=='company_id'){
				$list_product = $list_product->orderBy('companies.name',$value);
			}elseif($key=='oum_id'){
				$list_product = $list_product->leftJoin('oums','oums.id','=','m_products.oum_id')->orderBy('oums.name',$value);
			}elseif($key=='id'){
				$list_product = $list_product->orderBy('products.id',$value);
			}elseif($key=='specification'){
				$list_product = $list_product->orderBy('m_products.specification',$value);
			}elseif($key=='in_stock'){
				$list_product = $list_product->orderBy('real_in_stock',$value);
			}else{
				$list_product = $list_product->orderBy($key,$value);
			}
		}
		$list_product = $list_product->orderBy('products.id','asc');
		if(!isset($arr_filter['status'])){
			$arr_filter['status'] = '';
		}
		
		$list_product = $list_product->paginate(20);

		return view('popup.choose_product_so', [
								'distributes'		=>$distributes,
								'oums'			=>$oums,
								'list_product'		=> $list_product,
								'list_all_product'	=>$list_all_product,
								'arr_sort' 		=> $arr_sort,
								'arr_filter' 		=> $arr_filter,
							        ]);
	}

	public function anyListPopupRpo(Request $request)
	{
		if($request->has('input-sort')){
			$arr_sort = $request->input('input-sort');
			$arr_sort = (array)json_decode($arr_sort);
		}else{
			$arr_sort = array();
		}

		if($request->has('input-filter')){
			$arr_filter = $request->input('input-filter');
		}else{
			$arr_filter =[
						'sku' => '',
						'name' => '',
						'company_id' => '',
						'oum_id' => '',
						];
		}
		session(['sort_filter_product_rpo.arr_sort' => $arr_sort]);
		session(['sort_filter_product_rpo.arr_filter'=> $arr_filter]);

		$distributes = array();
		$oums = array();
		$list_sku = array();

		$distributes = Company::getDistributeList()->get()->toArray();
		$oums = Oum::get()->toArray();
		$list_all_product = Product::select('sku','name')->get()->toArray();

		$current_rpo = ReturnPurchaseorder::find(session('current_returnpurchaseorder'));

		$list_product = MProduct::select('products.name',
		                                'products.sku',
		                                'm_products.id',
		                                'm_products.oum_id',
		                                'm_products.specification',
		                                'product_stocks.in_stock',
		                                'companies.name as company_name',
		                                'm_products.module_id'
		                                )
					->with('oum')
					->leftJoin('products','products.id','=','m_products.product_id')
					->leftJoin('purchaseorders',function($join){
						$join->on('purchaseorders.id','=','m_products.module_id')
						->where('purchaseorders.status','=',1);
					})
					->where('purchaseorders.status','=',1)
					->leftJoin('companies','companies.id','=','m_products.company_id')
					->leftJoin('product_stocks','m_products.id','=','product_stocks.m_product_id')
					->where('m_products.company_id','=',$current_rpo->company_id);
		if(count($arr_sort)==0){
			$list_product = $list_product->orderBy('products.id','asc');
		}

			foreach ($arr_filter as $key => $value) {
				if($value!=''){
					if($arr_filter['sku']!=''){
						$list_product->where('products.sku',$arr_filter['sku']);
					}elseif($arr_filter['name']!=''){
						$list_product->where('products.name',$arr_filter['name']);
					}elseif($key == 'company_id'){
						$list_product->where('m_products.company_id',$arr_filter['company_id']);
					}elseif($key == 'oum_id'){
						$list_product->where('products.oum_id',$arr_filter['oum_id']);
					}else{
						$list_product->where($key,$value);
					}

				}
			}
		$list_product = $list_product->paginate(20);
		return view('popup.choose_product_rpo', [
								'distributes'		=>$distributes,
								'oums'			=>$oums,
								'list_product'		=> $list_product,
								'list_all_product'	=>$list_all_product,
								'arr_sort' 		=> $arr_sort,
								'arr_filter' 		=> $arr_filter
							        ]);
	}


	public function anyListPopupRso(Request $request)
	{
		if($request->has('input-sort')){
			$arr_sort = $request->input('input-sort');
			$arr_sort = (array)json_decode($arr_sort);
		}else{
			$arr_sort = array();
		}

		if($request->has('input-filter')){
			$arr_filter = $request->input('input-filter');
		}else{
			$arr_filter =[
						'sku' => '',
						'name' => '',
						'company_id' => '',
						'oum_id' => '',
						];
		}
		session(['sort_filter_product_rso.arr_sort' => $arr_sort]);
		session(['sort_filter_product_rso.arr_filter'=> $arr_filter]);

		$distributes = array();
		$oums = array();
		$list_sku = array();

		$distributes = Company::getDistributeList()->get()->toArray();
		$oums = Oum::get()->toArray();
		$list_all_product = Product::select('sku','name')->get()->toArray();

		$current_rpo = ReturnSaleorder::find(session('current_returnsaleorder'));

		$list_product = MProduct::select('products.name',
		                                'products.sku',
		                                'm_products.id',
		                                'm_products.oum_id',
		                                'm_products.specification',
		                                'm_products.quantity',
		                                'companies.name as company_name',
		                                'm_products.module_id'
		                                )
					->with('oum')
					->leftJoin('products','products.id','=','m_products.product_id')
					->leftJoin('saleorders',function($join){
						$join->on('saleorders.id','=','m_products.module_id')
						->where('saleorders.status','=',1);
					})
					->where('saleorders.status','=',1)
					->leftJoin('companies','companies.id','=','m_products.company_id')
					->where('m_products.company_id','=',$current_rpo->company_id);
		if(count($arr_sort)==0){
			$list_product = $list_product->orderBy('products.id','asc');
		}

			foreach ($arr_filter as $key => $value) {
				if($value!=''){
					if($arr_filter['sku']!=''){
						$list_product->where('products.sku',$arr_filter['sku']);
					}elseif($arr_filter['name']!=''){
						$list_product->where('products.name',$arr_filter['name']);
					}elseif($key == 'company_id'){
						$list_product->where('m_products.company_id',$arr_filter['company_id']);
					}elseif($key == 'oum_id'){
						$list_product->where('products.oum_id',$arr_filter['oum_id']);
					}else{
						$list_product->where($key,$value);
					}

				}
			}
		$list_product = $list_product->paginate(20);
		return view('popup.choose_product_rso', [
								'distributes'		=>$distributes,
								'oums'			=>$oums,
								'list_product'		=> $list_product,
								'list_all_product'	=>$list_all_product,
								'arr_sort' 		=> $arr_sort,
								'arr_filter' 		=> $arr_filter
							        ]);
	}
}