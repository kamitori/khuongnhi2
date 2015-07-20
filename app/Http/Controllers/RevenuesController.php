<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;
use App\Product;
use App\MProduct;
use App\User;
use App\ReceiptMonth;
use App\Saleorder;
use App\ReturnSaleorder;
use App\ReturnPurchaseorder;
use App\RevenueOther;
use Datatables;
use Illuminate\Http\Request;
use Session;
use DB;

class RevenuesController extends Controller {

	public function getIndex(){
		$min_year = ReceiptMonth::min('year');
		$tong_thu = ReceiptMonth::where('type_receipt','=','customer')->sum('sum_amount');
		$tong_chi = ReceiptMonth::where('type_receipt','=','distribute')->sum('sum_amount');
		$chi_khac = RevenueOther::sum('sum_amount');
		$current_year = date('Y');
		$list_chart = self::getListRevenue($current_year);
		$this->layout->content = view('revenue.index',[
							"tong_thu"	=>	$tong_thu,
							"tong_chi"	=>	$tong_chi,
							"chi_khac"	=>	$chi_khac,
							"list_chart"	=>	$list_chart,
							"min_year"	=>	$min_year,
							"current_year"	=>	$current_year
						]);
	}

	public function getListRevenue($year){
		$arr_return = array();
		for($i=1;$i<13;$i++){
			$month=$i;
			$begin = date('Y-m-d H:i:s',strtotime('1'.'-'.$month.'-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1'.'-'.($month+1).'-'.$year));
			$arr_return['tong_thu'][$i] = array();
			$arr_return['tong_thu'][$i]['x'] = $i;
			$arr_return['tong_chi'][$i]['x'] = $i;
			$arr_return['chi_khac'][$i]['x'] = $i;

			$arr_return['tong_thu'][$i]['y'] = ReceiptMonth::where('type_receipt','=','customer')
								->where('year','=',$year)
								->where('month','=',$i)
								->sum('sum_amount');
			$arr_return['tong_chi'][$i]['y'] = ReceiptMonth::where('type_receipt','=','distribute')
								->where('year','=',$year)
								->where('month','=',$i)
								->sum('sum_amount');
			$arr_return['chi_khac'][$i]['y'] = RevenueOther::where('date','>=',$begin)
								->where('date','<',$end)
								->sum('sum_amount');
		}
		$arr_return['tong_thu'] = array_values($arr_return['tong_thu']);
		$arr_return['tong_chi'] = array_values($arr_return['tong_chi']);
		$arr_return['chi_khac'] = array_values($arr_return['chi_khac']);
		return $arr_return ;
	}

	public function getCustomer(){
		$customers = Company::getCustomerList()->get()->toArray();
		$this->layout->content = view('revenue.revenue-customer',[
							'customers'	=>	$customers,
						]);
	}


	public function postListRevenueCustomer(Request $request){
		$list_order = array();
		$company_id = $request->has('company_id')?$request->input('company_id'):0;
		$month = $request->has('month')?$request->input('month'):0;
		$year = $request->has('year')?$request->input('year'):0;
		if($month!='all'){
			$begin = date('Y-m-d H:i:s',strtotime('1'.'-'.$month.'-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1'.'-'.($month+1).'-'.$year));
		}else{
			$begin = date('Y-m-d H:i:s',strtotime('1-1-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1-1-'.($year+1)));
		}
		$key_order = 1;
		$list_so = Saleorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('company_id','=',$company_id)
					->get()->toArray();
		foreach ($list_so as $key => $value) {
			$list_order[$key_order]['id'] = $value['id'];
			$list_order[$key_order]['date'] =  $value['date'];
			$list_order[$key_order]['sum_amount'] =  $value['sum_amount'];
			$list_order[$key_order]['sum_invest'] =  $value['sum_invest'];
			$list_order[$key_order]['khoang_giam'] =  0;
			$list_order[$key_order]['lai_thuc'] =  $list_order[$key_order]['sum_amount'] - $list_order[$key_order]['sum_invest'];
			$list_order[$key_order]['loi_nhuan'] = $list_order[$key_order]['lai_thuc'] - $list_order[$key_order]['khoang_giam'];
			$list_order[$key_order]['updated_at'] = $value['updated_at'];
			$key_order++;
		}
		$list_rso = ReturnSaleorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('company_id','=',$company_id)
					->get()->toArray();
		foreach ($list_rso as $key => $value) {
			$list_order[$key_order]['id'] = $value['id'];
			$list_order[$key_order]['date'] =  $value['date'];
			$list_order[$key_order]['sum_amount'] =  -$value['sum_amount'];
			$list_order[$key_order]['sum_invest'] =  -$value['sum_invest'];
			$list_order[$key_order]['khoang_giam'] =  - (abs($list_order[$key_order]['sum_amount']) - abs($list_order[$key_order]['sum_invest']));
			$list_order[$key_order]['lai_thuc'] =  0;
			$list_order[$key_order]['loi_nhuan'] = $list_order[$key_order]['lai_thuc'] + $list_order[$key_order]['khoang_giam'];
			$list_order[$key_order]['updated_at'] = $value['updated_at'];
			$key_order++;
		}
		$date = array();
		foreach ($list_order as $key => $value) {
			$date[$key] = $value['date'];
		}
		array_multisort($date,SORT_ASC,$list_order);
		return view('revenue.list-revenue-customer',[
				'list_order' => $list_order
			]);
	}

	public function getUser(){
		$users = User::get()->toArray();
		$this->layout->content = view('revenue.revenue-user',[
							'users'	=>	$users,
						]);
	}

	public function postListRevenueUser(Request $request){
		$list_order = array();
		$user_id = $request->has('user_id')?$request->input('user_id'):0;
		$month = $request->has('month')?$request->input('month'):0;
		$year = $request->has('year')?$request->input('year'):0;
		if($month!='all'){
			$begin = date('Y-m-d H:i:s',strtotime('1'.'-'.$month.'-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1'.'-'.($month+1).'-'.$year));
		}else{
			$begin = date('Y-m-d H:i:s',strtotime('1-1-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1-1-'.($year+1)));
		}
		$key_order = 1;
		$list_so = Saleorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('user_id','=',$user_id)
					->get()->toArray();
		foreach ($list_so as $key => $value) {
			$list_order[$key_order]['id'] = $value['id'];
			$list_order[$key_order]['date'] =  $value['date'];
			$list_order[$key_order]['sum_amount'] =  $value['sum_amount'];
			$list_order[$key_order]['sum_invest'] =  $value['sum_invest'];
			$list_order[$key_order]['khoang_giam'] =  0;
			$list_order[$key_order]['lai_thuc'] =  $list_order[$key_order]['sum_amount'] - $list_order[$key_order]['sum_invest'];
			$list_order[$key_order]['loi_nhuan'] = $list_order[$key_order]['lai_thuc'] - $list_order[$key_order]['khoang_giam'];
			$list_order[$key_order]['updated_at'] = $value['updated_at'];
			$key_order++;
		}

		$list_rso = ReturnSaleorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('user_id','=',$user_id)
					->get()->toArray();
		foreach ($list_rso as $key => $value) {
			$list_order[$key_order]['id'] = $value['id'];
			$list_order[$key_order]['date'] =  $value['date'];
			$list_order[$key_order]['sum_amount'] =  -$value['sum_amount'];
			$list_order[$key_order]['sum_invest'] =  -$value['sum_invest'];
			$list_order[$key_order]['khoang_giam'] =  - (abs($list_order[$key_order]['sum_amount']) - abs($list_order[$key_order]['sum_invest']));
			$list_order[$key_order]['lai_thuc'] =  0;
			$list_order[$key_order]['loi_nhuan'] = $list_order[$key_order]['lai_thuc'] + $list_order[$key_order]['khoang_giam'];
			$list_order[$key_order]['updated_at'] = $value['updated_at'];
			$key_order++;
		}
		$date = array();
		foreach ($list_order as $key => $value) {
			$date[$key] = $value['date'];
		}
		array_multisort($date,SORT_ASC,$list_order);
		return view('revenue.list-revenue-customer',[
				'list_order' => $list_order
			]);
	}

	public function getProduct(){
		$min_year = ReceiptMonth::min('year');

		$arr_month_year = ReceiptMonth::select('year','month')
						->groupBy('year','month')
						->where('type_receipt','=','customer')
						->orderBy('year','DESC')
						->orderBy('month','DESC')
						->get()->toArray();

		$this->layout->content = view('revenue.revenue-product',[	
							'arr_month_year' 	=> 	$arr_month_year,
							'min_year'		=>	$min_year
						]);
	}

	public function postListRevenueProduct(Request $request){
		DB::enableQueryLog();
		$list_order = array();
		$month = $request->has('month')?$request->input('month'):0;
		$year = $request->has('year')?$request->input('year'):0;
		if($month!='all'){
			$begin = date('Y-m-d H:i:s',strtotime('1'.'-'.$month.'-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1'.'-'.($month+1).'-'.$year));
		}else{
			$begin = date('Y-m-d H:i:s',strtotime('1-1-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1-1-'.($year+1)));
		}
		$key_order = 1;
		$arr_product = array();
		$list_so = Mproduct::select('m_products.*','products.name','products.id','saleorders.date')
					->addSelect(DB::raw(' sum(amount) as sum_amount , sum(invest) as sum_invest'))
					->leftJoin('products','products.id','=','m_products.product_id')
					->leftJoin('saleorders',function($join){
						$join->on('saleorders.id','=','m_products.module_id')
							->where('module_type','=','App\Saleorder');
					})
					->where('saleorders.date','>=',$begin)
					->where('saleorders.date','<',$end)
					->where('saleorders.status','=',1)
					->groupBy('product_id')
					->get()->toArray();
		foreach ($list_so as $key => $value) {
			$list_order[$key_order]['id'] = $value['id'];
			$list_order[$key_order]['name'] = $value['name'];
			$list_order[$key_order]['date'] =  $value['date'];
			$list_order[$key_order]['sum_amount'] =  $value['sum_amount'];
			$list_order[$key_order]['sum_invest'] =  $value['sum_invest'];
			$list_order[$key_order]['khoang_giam'] =  0;
			$list_order[$key_order]['lai_thuc'] =  $list_order[$key_order]['sum_amount'] - $list_order[$key_order]['sum_invest'];
			$list_order[$key_order]['loi_nhuan'] = $list_order[$key_order]['lai_thuc'] - $list_order[$key_order]['khoang_giam'];
			$list_order[$key_order]['updated_at'] = $value['updated_at'];
			$arr_product[$key_order] = $value['id'];
			$key_order++;
		}
		$list_rso = Mproduct::select('m_products.*','products.name','products.id','return_saleorders.date')
					->addSelect(DB::raw(' sum(amount) as sum_amount , sum(invest) as sum_invest'))
					->leftJoin('products','products.id','=','m_products.product_id')
					->leftJoin('return_saleorders',function($join){
						$join->on('return_saleorders.id','=','m_products.module_id')
							->where('module_type','=','App\ReturnSaleorder');
					})
					->where('return_saleorders.date','>=',$begin)
					->where('return_saleorders.date','<',$end)
					->where('return_saleorders.status','=',1)
					->groupBy('product_id')
					->get()->toArray();
		foreach ($list_rso as $key => $value) {
			$check_in_array = array_search($value['id'], $arr_product);
			if($check_in_array){
				$list_order[$check_in_array]['sum_amount'] -=  $value['sum_amount'];
				$list_order[$check_in_array]['sum_invest'] -=  $value['sum_invest'];
				$list_order[$check_in_array]['khoang_giam'] -=  (abs($value['sum_amount']) - abs($value['sum_invest']));
				$list_order[$check_in_array]['loi_nhuan'] = $list_order[$check_in_array]['lai_thuc'] + $list_order[$check_in_array]['khoang_giam'];
			}else{
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['name'] = $value['name'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  -$value['sum_amount'];
				$list_order[$key_order]['sum_invest'] =  -$value['sum_invest'];
				$list_order[$key_order]['khoang_giam'] =  - (abs($list_order[$key_order]['sum_amount']) - abs($list_order[$key_order]['sum_invest']));
				$list_order[$key_order]['lai_thuc'] =  0;
				$list_order[$key_order]['loi_nhuan'] = $list_order[$key_order]['lai_thuc'] + $list_order[$key_order]['khoang_giam'];
				$list_order[$key_order]['updated_at'] = $value['updated_at'];
				$key_order++;
			}
			
		}
		$date = array();
		foreach ($list_order as $key => $value) {
			$date[$key] = $value['date'];
		}
		array_multisort($date,SORT_ASC,$list_order);
		return view('revenue.list-revenue-product',[
				'list_order' => $list_order
			]);
	}

	public function getMonth(){
		$min_year = ReceiptMonth::min('year');

		$arr_month_year = ReceiptMonth::select('year','month')
						->groupBy('year','month')
						->where('type_receipt','=','customer')
						->orderBy('year','DESC')
						->orderBy('month','DESC')
						->get()->toArray();

		$this->layout->content = view('revenue.revenue-month',[	
							'arr_month_year' 	=> 	$arr_month_year,
							'min_year'		=>	$min_year
						]);
	}

	public function postListRevenueMonth(Request $request){
		DB::enableQueryLog();
		$list_order = array();

		$month = $request->has('month')?$request->input('month'):0;
		$year = $request->has('year')?$request->input('year'):0;
		if($month!='all'){
			$begin = date('Y-m-d H:i:s',strtotime('1'.'-'.$month.'-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1'.'-'.($month+1).'-'.$year));
		}else{
			$begin = date('Y-m-d H:i:s',strtotime('1-1-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1-1-'.($year+1)));
		}
		$key_order = 1;
		$arr_company = array();
		$list_so = Saleorder::select('saleorders.*','companies.name','companies.id')
					->where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->leftJoin('companies','companies.id','=','saleorders.company_id')
					->addSelect(DB::raw('sum(sum_amount) as sum_amount , sum(sum_invest) as sum_invest'))
					->groupBy('company_id')
					->get()->toArray();
		foreach ($list_so as $key => $value) {
			$list_order[$key_order]['id'] = $value['id'];
			$list_order[$key_order]['name'] = $value['name'];
			$list_order[$key_order]['date'] =  $value['date'];
			$list_order[$key_order]['sum_amount'] =  $value['sum_amount'];
			$list_order[$key_order]['sum_invest'] =  $value['sum_invest'];
			$list_order[$key_order]['khoang_giam'] =  0;
			$list_order[$key_order]['lai_thuc'] =  $list_order[$key_order]['sum_amount'] - $list_order[$key_order]['sum_invest'];
			$list_order[$key_order]['loi_nhuan'] = $list_order[$key_order]['lai_thuc'] - $list_order[$key_order]['khoang_giam'];
			$list_order[$key_order]['updated_at'] = $value['updated_at'];
			$arr_product[$key_order] = $value['id'];
			$key_order++;
		}
		$list_rso = ReturnSaleorder::select('return_saleorders.*','companies.name','companies.id')
					->where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->leftJoin('companies','companies.id','=','return_saleorders.company_id')
					->addSelect(DB::raw('sum(sum_amount) as sum_amount , sum(sum_invest) as sum_invest'))
					->groupBy('company_id')
					->get()->toArray();
		foreach ($list_rso as $key => $value) {
			$check_in_array = array_search($value['id'], $arr_product);
			if($check_in_array){
				$list_order[$check_in_array]['sum_amount'] -=  $value['sum_amount'];
				$list_order[$check_in_array]['sum_invest'] -=  $value['sum_invest'];
				$list_order[$check_in_array]['khoang_giam'] -=  (abs($value['sum_amount']) - abs($value['sum_invest']));
				$list_order[$check_in_array]['loi_nhuan'] = $list_order[$check_in_array]['lai_thuc'] + $list_order[$check_in_array]['khoang_giam'];
			}else{
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['name'] = $value['name'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  -$value['sum_amount'];
				$list_order[$key_order]['sum_invest'] =  -$value['sum_invest'];
				$list_order[$key_order]['khoang_giam'] =  - (abs($list_order[$key_order]['sum_amount']) - abs($list_order[$key_order]['sum_invest']));
				$list_order[$key_order]['lai_thuc'] =  0;
				$list_order[$key_order]['loi_nhuan'] = $list_order[$key_order]['lai_thuc'] + $list_order[$key_order]['khoang_giam'];
				$list_order[$key_order]['updated_at'] = $value['updated_at'];
				$key_order++;
			}
		}

		$date = array();
		foreach ($list_order as $key => $value) {
			$date[$key] = $value['date'];
		}
		array_multisort($date,SORT_ASC,$list_order);
		return view('revenue.list-revenue-month',[
				'list_order' => $list_order
			]);
	}

	public function getYear(){
		$min_year = ReceiptMonth::min('year');


		$this->layout->content = view('revenue.revenue-year',[	
							'min_year'		=>	$min_year
						]);
	}

	public function postListRevenueYear(Request $request){
		DB::enableQueryLog();
		$list_order = array();
		$year = $request->has('year')?$request->input('year'):0;
		$begin = date('Y-m-d H:i:s',strtotime('1-1-'.$year));
		$end = date('Y-m-d H:i:s',strtotime('1-1-'.($year+1)));
		$key_order = 1;
		$arr_company = array();
		$list_so = Saleorder::select('saleorders.*','companies.name','companies.id')
					->where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->leftJoin('companies','companies.id','=','saleorders.company_id')
					->addSelect(DB::raw('sum(sum_amount) as sum_amount , sum(sum_invest) as sum_invest'))
					->groupBy('company_id')
					->get()->toArray();
		foreach ($list_so as $key => $value) {
			$list_order[$key_order]['id'] = $value['id'];
			$list_order[$key_order]['name'] = $value['name'];
			$list_order[$key_order]['date'] =  $value['date'];
			$list_order[$key_order]['sum_amount'] =  $value['sum_amount'];
			$list_order[$key_order]['sum_invest'] =  $value['sum_invest'];
			$list_order[$key_order]['khoang_giam'] =  0;
			$list_order[$key_order]['lai_thuc'] =  $list_order[$key_order]['sum_amount'] - $list_order[$key_order]['sum_invest'];
			$list_order[$key_order]['loi_nhuan'] = $list_order[$key_order]['lai_thuc'] - $list_order[$key_order]['khoang_giam'];
			$list_order[$key_order]['updated_at'] = $value['updated_at'];
			$arr_product[$key_order] = $value['id'];
			$key_order++;
		}
		$list_rso = ReturnSaleorder::select('return_saleorders.*','companies.name','companies.id')
					->where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->leftJoin('companies','companies.id','=','return_saleorders.company_id')
					->addSelect(DB::raw('sum(sum_amount) as sum_amount , sum(sum_invest) as sum_invest'))
					->groupBy('company_id')
					->get()->toArray();
		foreach ($list_rso as $key => $value) {
			$check_in_array = array_search($value['id'], $arr_product);
			if($check_in_array){
				$list_order[$check_in_array]['sum_amount'] -=  $value['sum_amount'];
				$list_order[$check_in_array]['sum_invest'] -=  $value['sum_invest'];
				$list_order[$check_in_array]['khoang_giam'] -=  (abs($value['sum_amount']) - abs($value['sum_invest']));
				$list_order[$check_in_array]['loi_nhuan'] = $list_order[$check_in_array]['lai_thuc'] + $list_order[$check_in_array]['khoang_giam'];
			}else{
				$list_order[$key_order]['id'] = $value['id'];
				$list_order[$key_order]['name'] = $value['name'];
				$list_order[$key_order]['date'] =  $value['date'];
				$list_order[$key_order]['sum_amount'] =  -$value['sum_amount'];
				$list_order[$key_order]['sum_invest'] =  -$value['sum_invest'];
				$list_order[$key_order]['khoang_giam'] =  - (abs($list_order[$key_order]['sum_amount']) - abs($list_order[$key_order]['sum_invest']));
				$list_order[$key_order]['lai_thuc'] =  0;
				$list_order[$key_order]['loi_nhuan'] = $list_order[$key_order]['lai_thuc'] + $list_order[$key_order]['khoang_giam'];
				$list_order[$key_order]['updated_at'] = $value['updated_at'];
				$key_order++;
			}
		}

		$date = array();
		foreach ($list_order as $key => $value) {
			$date[$key] = $value['date'];
		}
		array_multisort($date,SORT_ASC,$list_order);
		return view('revenue.list-revenue-year',[
				'list_order' => $list_order
			]);
	}

	public function getOther(){
		$min_date = RevenueOther::min('date');
		if($min_date)
			$min_year = date('Y',strtotime($min_date));
		else
			$min_year = date('Y');
		$arr_month_year = RevenueOther::select(DB::raw('YEAR(date) as year, MONTH(date) as month'))
						->groupBy('year','month')
						->orderBy('year','DESC')
						->orderBy('month','DESC')
						->get()->toArray();
		$users = User::get()->toArray();
		$this->layout->content = view('revenue.revenue-other',[	
							'arr_month_year' 	=> 	$arr_month_year,
							'min_year'		=>	$min_year,
							'users'			=>	$users
						]);
	}

	public function postListRevenueOther(Request $request)
	{
		$list_order = array();
		$month = $request->has('month')?$request->input('month'):0;
		$year = $request->has('year')?$request->input('year'):0;
		if($month!='all'){
			$begin = date('Y-m-d H:i:s',strtotime('1'.'-'.$month.'-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1'.'-'.($month+1).'-'.$year));
		}else{
			$begin = date('Y-m-d H:i:s',strtotime('1-1-'.$year));
			$end = date('Y-m-d H:i:s',strtotime('1-1-'.($year+1)));
		}
		$list_order = RevenueOther::select('revenue_others.*','users.name')
					->where('date','>=',$begin)
					->where('date','<',$end)
					->leftJoin('users','users.id','=','revenue_others.user_id')
					->orderBy('date')
					->get()->toArray();
		foreach ($list_order as $key => $value) {
			$list_order[$key]['date'] = date('d-m-Y',strtotime($value['date']));
		}		
		return view('revenue.list-revenue-other',[
				'list_order' => $list_order
			]);
	}

	public function postSaveOther(Request $request){
		$time =date('H:i:s', time());
		$arr_return = array('status' => 'error');
		$id = $request->has('id')?$request->input('id'):0;
		if($id){
			$other = RevenueOther::find($id);
		}else{
			$other = new RevenueOther;
		}

		$other->user_id = $request->has('user_id')?$request->input('user_id'):0;
		$other->sum_amount = $request->has('sum_amount')?$request->input('sum_amount'):0;
		$other->date = $request->has('date') ? date("Y-m-d H:i:s",strtotime($request->input('date').' '.$time)) : date("Y-m-d H:i:s");
		$other->ly_do = $request->has('ly_do')?$request->input('ly_do'):'';
		if($other->save()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message'] = 'Saving fail';
		}
		return $arr_return;
	}

	public function postDeleteOther(Request $request){
		$arr_return = array('status' => 'error');
		$id = $request->has('id')?$request->input('id'):0;
		if($id){
			$other = RevenueOther::find($id);
			if($other->delete()){
				$arr_return['status'] = 'success';
			}else{
				$arr_return['message'] = 'Deleting fail';
			}
		}else{
			$arr_return['message'] = 'Not found';
		}
		return $arr_return;
	}
}