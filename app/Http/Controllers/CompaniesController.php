<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Company;
use App\Address;
use App\Province;
use App\CompanyType;
use App\Country;
use App\Oum;
use App\ProductType;
use App\Product;
use Datatables;
use Illuminate\Http\Request;
use Session;

class CompaniesController extends Controller{
	//protected $layout = 'layout.index';

	public function getIndex(Request $request)
	{
		 self::anyEntry($request);
	}

	public function anyEntry(Request $request)
	{
		$company_id = session('current_company') !== null ? session('current_company') : 0;
		$address_id = session('current_address') !== null ? session('current_address') : 0;
		if($company_id){
			$company = Company::find($company_id)->toArray();
			$address = Address::getAddressByCompanyId($company_id);
			session(["current_company" => $company['id'],"current_address" => $address['id']]);
		}else{
			$company = Company::get()->last();
			$address = Address::getAddressByCompanyId($company_id);

			if($company){
				$company = $company->toArray();
				//$address = $address->toArray();
				session(["current_company" => $company['id'],"current_address" => $address['id']]);
			}else{
				$company = new Company;
				$company->save();
				$address = new Address;
				$address->save();
				session(['current_company' => $company->id,'current_address' => $address->id]);
			}
		}
		$provinces = array();
		$countries = array();
		$company_type = array();

		$provinces = Province::get()->toArray();
		$countries = Country::get()->toArray();
		$company_type = CompanyType::get()->toArray();



		$this->layout->content = view('company.entry',[
		                              'company' 	=> $company,
		                              'address'		=> $address,
		                              'provinces' 	=> $provinces,
		                              'countries'	=> $countries,
		                              'company_type'=> $company_type
		                              ]);
	}

	public function anyCreate(Request $request)
	{
		$company = new Company;
		if($company->save()){
			session(['current_company' => $company->id]);
		}
		$address = new Address;
		$address->module_id =  $company->id;
		$address->module_name = "companies";
		if($address->save()){
			session(['current_address' => $address->id]);
		}
		return redirect('companies');
	}

	public function anyUpdate(Request $request)
	{
		$arr_return = array('status' => 'error');
		$company_id = session('current_company') !== null ? session('current_company') : 0;
		$address_id = session('current_address') !== null ? session('current_address') : 0;
		if($company_id ){
			$company = Company::find($company_id);
			$address = Address::getAddressByCompanyId($company_id);
			session(['current_company' => $company['id'],'current_address' => $address['id']]);
		}else{
			$company = Company::get()->last();
			//$address = Address::get()->last();
			if($company && $address){
				session(['current_company' => $company->id,'current_address' => $address->id]);
			}else{
				$company = new Company;
				$company->save();
				$address = new Address;
				$address->save();
				session(['current_company' => $company->id,'current_address' => $address->id]);
			}
		}

		$company->name = $request->has('company_name') ? $request->input('company_name') : '';
		$company->phone = $request->has('company_phone') ? $request->input('company_phone') : '';
		$company->fax = $request->has('company_fax') ? $request->input('company_fax') : '';
		$company->email = $request->has('company_email') ? $request->input('company_email') : '';
		$company->web = $request->has('company_web') ? $request->input('company_web') : '';
		$company->is_customer = $request->has('is_customer') ? 1:0 ;
		$company->is_distribute = $request->has('is_distribute') ? 1:0;


		$address->address = $request->has('company_address') ? $request->input('company_address') : '';
		$address->town_city = $request->has('company_town_city') ? $request->input('company_town_city') : '';
		$address->province_id = $request->has('company_province_state') ? $request->input('company_province_state') : 0;
		$address->country_id = $request->has('company_country') ? $request->input('company_country') : 0;

		if($company->save()){
			$arr_return['status'] = 'success';
			$arr_return['name'] = $company->name;
		}else{
			$arr_return['message'] = 'Saving fail';
		}
		if($address->save()){
			$arr_return['status'] = 'success';
			$arr_return['name'] = $address->name;
		}else{
			$arr_return['message'] = 'Saving fail';
		}
		return $arr_return;
	}

	public function anyDelete(Request $request)
	{
		$company_id = session('current_company') !== null ? session('current_company') : 0;
		if($company_id){
			$company = Company::find($company_id);
			$company->delete();
			Session::forget('current_company');
		}
		return redirect('companies');
	}

	public function anyList(Request $request)
	{
		// if($request->has('input-sort')){
		// 	$arr_sort = $request->input('input-sort');
		// 	$arr_sort =(array) json_decode($arr_sort);
		// }elseif( session('sort_filter_product.arr_sort') !== null){
		// 	$arr_sort = session('sort_filter_product.arr_sort');
		// }else{
			$arr_sort=array();
		// }
		session('sort_filter_company.arr_sort', $arr_sort);


		if($request->has('input-filter')){
			$arr_filter = $request->input('input-filter');
		}elseif( session('sort_filter_company.arr_filter') !== null ){
			$arr_filter = session('sort_filter_company.arr_filter');
		}else{
			$arr_filter=[
					'name'=>'',
					'province_id' => ''
				       ];
		}
		session(['sort_filter_company.arr_sort'=>$arr_sort]);
		session(['sort_filter_company.arr_filter'=> $arr_filter]);

		//Init array
		$list_provinces = Province::get()->toArray();
		//Get value array
		$list_all_companies = Company::select('id','name')->get()->toArray();

		$list_product = Company::select('companies.*','addresses.*')->leftJoin('addresses', function($join){
										$join->on("companies.id","=","addresses.module_id")->where('module_type','=','App\Company');
									});
		$list_product->addSelect('provinces.name as province_name')->leftJoin('provinces', function($join){
										$join->on("addresses.province_id","=","provinces.id");
									});
		foreach ($arr_sort as $key => $value) {
			$list_product->orderBy($key, $value);
		}
		if($arr_filter['name']!=''){
			$list_product->where('companies.name', $arr_filter['name']);
		}else{
			foreach ($arr_filter as $key => $value) {
				if($value!=''){
					$list_product->where($key,$value);
				}
			}
		}
		$list_product = $list_product->paginate(20);
		/*if( !$list_product->isEmpty() ) {
			$list_product = $list_product->toArray();
		} else {
			$list_product = [];
		}*/
		$this->layout->content=view('company.list', [
								'list_product' => $list_product,
								'list_all_companies'=>$list_all_companies,
								'arr_sort' => $arr_sort,
								'arr_filter' => $arr_filter,
								'list_provinces' => $list_provinces
							        ]);
	}

	public function anyListClear(Request $request)
	{
		Session::forget('sort_filter_company');
		return redirect('companies/list');
	}

}