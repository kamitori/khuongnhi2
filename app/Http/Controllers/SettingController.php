<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Menu;
use App\Oum;
use App\CompanyType;
use App\ProductType;
use App\Province;
use App\Country;
use App\UserType;
use App\PdfTemplate;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Requests\Admin\UserEditRequest;
use App\Http\Requests\Admin\DeleteRequest;
use Datatables;


class SettingController extends Controller {

	protected $layout = 'setting.setting';
	/*
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function getIndex()
	{
		// Show the page

	}

	public function anyManageUserSettings(Request $request)
	{
		return view('setting.manage-user',[]);
	}

	public function anyUserSettings(Request $request)
	{
		$users = User::select('users.*','user_types.name as type_name','user_types.id as type_id')->leftJoin('user_types',function($join){
			$join->on("users.user_type_id","=","user_types.id");
		});
		$users = $users->paginate(5);
		$user_types = UserType::get()->toArray();

		$view = view('setting.list-user',['user_types' => $user_types,'users'=>$users]);
		if( $request->ajax() ) {
			return $view;
		} else {
			$this->layout->content = $view;
		}
	}

	public function anyMenuSettings()
	{
		   $menus = Menu::getMenu();
		return view('setting.list-menu',["menus"=>$menus]);
	}

	public function anyOtherSettings()
	{
		return view('setting.list-other',[]);
	}
	// OUM Module
	public function anyOumSettings()
	{
		$oums = Oum::orderBy('name')->get();
		return view('setting.list-oum',["oums"=>$oums]);
	}

	public function postUpdateOum(Request $request)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$id = $request->has('id')?$request->input('id'):0;
		$name =$request->has('name')? $request->input('name') : '';
		if( $id ) {
			$oum = Oum::find($id);
		} else {
			$oum = new Oum;
		}
		$oum->name = $name;
		if($oum -> save()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message']= "Saving fail";
		}
		return $arr_return;
	}

	 public function getDeleteOum($id)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$oum = Oum::find($id);
		if($oum->delete()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message']= "Delete fail";
		}
		return $arr_return;
	}
//=========================================================
	// CompanyType Module
	public function anyCompanytypeSettings()
	{
		$companytypes = CompanyType::orderBy('name')->get();
		return view('setting.list-companytype',["companytypes"=>$companytypes]);
	}

	public function postUpdateCompanytype(Request $request)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$id = $request->has('id')?$request->input('id'):0;
		$name =$request->has('name')? $request->input('name') : '';
		if( $id ) {
			$companytype = CompanyType::find($id);
		} else {
			$companytype = new CompanyType;
		}
		$companytype->name = $name;
		if($companytype -> save()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message']= "Saving fail";
		}
		return $arr_return;
	}

	 public function getDeleteCompanytype($id)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$companytype = CompanyType::find($id);
		if($companytype->delete()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message']= "Delete fail";
		}
		return $arr_return;
	}

//=========================================================
// ProductType Module
	public function anyProducttypeSettings()
	{
		$producttypes = ProductType::orderBy('name')->get();
		return view('setting.list-productType',["producttypes"=>$producttypes]);
	}

	public function postUpdateProducttype(Request $request)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$id = $request->has('id')?$request->input('id'):0;
		$name =$request->has('name')? $request->input('name') : '';
		if( $id ) {
			$producttype = ProductType::find($id);
		} else {
			$producttype = new ProductType;
		}
		$producttype->name = $name;
		if($producttype -> save()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message']= "Saving fail";
		}
		return $arr_return;
	}

	public function getDeleteProducttype($id)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$producttype = ProductType::find($id);
		if($producttype->delete()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message']= "Delete fail";
		}
		return $arr_return;
	}

//=========================================================
	public function getCreate()
	{

		return View('setting.create-edit-user');
	}


	public function postCreate(UserRequest $request)
	{
		$user = new User();
		$user->name = $request->name;
		$user->username = $request->username;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->confirmed = $request->confirmed;
		$user->save();
	}

/*    public function postCreateCountry(Request $request, $id)
    {
        $arr_return = array();
        $province = new Province();
        $name = 'unidentified';
        $country_id = $id;
        if($province->save){
            $arr_return['status'] = 'success';
        }else{
            $arr_return['message'] = 'Saving fail';
        }
        return $arr_return;
    }*/

    public function getListProvince(Request $request, $country_id)
    {
        $provinces = Province::getProvinceByCountry($country_id);
        $countries = Country::getCountry();
        return view('setting.list-province',["provinces"=>$provinces,"countries" => $countries]);
        /*$html='<ul>';
            foreach($provinces as $key => $province){
                $html.= '<li>';
                    $html.=$province['name'];
                $html.='</li>';
            }
        $html.='</ul>';
        return $html;*/
    }

    public function postUpdateProvince(Request $request)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$id = $request->has('id')?$request->input('id'):0;
		$name =$request->has('name')? $request->input('name') : '';
		$country_id = $request->has('country_id') ? $request->input('country_id') : '';
		if( $id ) {
			$province = Province::find($id);
		} else {
			$province = new Province;
		}
		$province->name = $name;
		$province->country_id = $country_id;
		if($province -> save()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message']= "Saving fail";
		}
		return $arr_return;
	}

	public function getDeleteProvince($id)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$province = Province::find($id);
		if($province->delete()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message']= "Delete fail";
		}
		return $arr_return;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param $user
	 * @return Response
	 */
	public function postUpdateUser(Request $request)
	{
		$arr_return = array(
								"status"=>"error"
							);
		$id = $request->has('id')?$request->input('id'):0;
		$password = $request->has('password')? $request->input('password') : '';
		$passwordConfirmation = $request->has('password_confirmation')? $request->input('password_confirmation') : '';
		$email = $request->has('email')? $request->input('email') : '';
		$name =$request->has('name')? $request->input('name') : '';
		$confirmed = $request->has('confirmed')? 1 : 0;
		$type_id = $request->has('type_id')?$request->input('type_id'):0;
		if( $id ) {
			$user = User::find($id);
		} else {
			$user = new User;
		}
		if (!empty($password)) {
				if ($password === $passwordConfirmation) {
					$user ->password = bcrypt($password);
				}else{
					$arr_return['message']= "Password comfirm wrong";
				}
			}
		$user->name = $name;
		$user->confirmed = $confirmed;
		$user->email = $email;
		$user->user_type_id = $type_id;
		if($user -> save()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message']= "Saving fail";
		}
		return $arr_return;
	}

	public function getDeleteUser($id)
	{
		$arr_return = array(
								"status"=>"error"
							);
		$user = User::find($id);
		if($user->delete()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message']= "Delete fail";
		}
		return $arr_return;
	}

	public function anyProvinceSettings()
	{
		$countries = Country::getCountry();
		return View('setting.list-province-country',["countries" => $countries]);
	}

	public function postCreateCountry(Request $request)
	{
		$arr_return = array();
		$country = new Country();
		$name = $request->has('name') ? $request->input('name') : '';
		$country->name = $name;
		if($country->save()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message'] = 'Saving fail';
		}
		return $arr_return;
	}


	public function postUpdateMenu(Request $request)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$id = $request->has('id')?$request->input('id') : 0;

		if($id){
			$menu = Menu::find($id);
		}else{
			$menu = new Menu;
		}

		$menu->name = $request->has('name')?$request->input('name'):'';
		$menu->link = $request->has('link')?$request->input('link'):'';
		$menu->parent_id = $request->has('parent_id')?$request->input('parent_id'):'';
		$menu->icon_class = $request->has('icon_class')?$request->input('icon_class'):'';
		$menu->order_no = $request->has('order_no')?$request->input('order_no'):0;
		if($menu->save()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message'] = 'Saving fail';
		}
		return $arr_return;

	}

	public function postUpdateOrderMenu(Request $request)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$data = $request->has('data')?$request->input('data') : array();
		pr($data);
		$order = 1;
		$check=true;
		foreach ($data as $key => $value) {
			$menu = Menu::find($value['id']);
			$menu->order_no = $order;
			echo $order;
			$check = $check && $menu->save();
			if(isset($value['children'])){
				foreach ($value['children'] as $key2 => $value2) {
					$menu = Menu::find($value2['id']);
													$menu->parent_id = $value['id'];
					$menu->order_no = $order;
					$order++;
					$check = $check && $menu->save();
				}
			}
		}

		if($check){
			$arr_return = array(
				"status"=>"success"
			);
		}else{
			$arr_return = array(
				"status"=>"Error update order"
			);
		}
		return $arr_return;
	}

	public function postDeleteMenu(Request $request)
	{
		$arr_return = array(
			"status"=>"error"
		);
		$id = $request->has('id')?$request->input('id') : 0;
		$menu = Menu::find($id);
		if($menu){
			if($menu->delete()){
				$arr_return['status'] = 'success';
			}else{
				$arr_return['message'] = 'Saving fail';
			}
		}else{
			$arr_return['message'] = 'Menu not found';
		}
		return $arr_return;
	}
    public function postCreateProvince(Request $request)
    {
        $arr_return = array();
        $province = new Province();
        $name = $request->has('name') ? $request->input('name') : '';
        $country_id = $request->has('popup_country') ? $request->input('popup_country') : '';
        $province->name = $name;
        $province->country_id = $country_id;
        if($province->save()){
            $arr_return['status'] = 'success';
        }else{
            $arr_return['message'] = 'Saving fail';
        }
        return $arr_return;
    }

   public function postMenuInfo(Request $request)
   {
		$arr_return = array();
		$id = $request->has('id')?$request->input('id') : 0;
		if($id){
				$menu = Menu::find($id);
				$arr_return = $menu;
		}
		return $arr_return;
   }

   public function anyUserTypeSettings()
   {
   		$usertypes = UserType::orderBy('name')->get();
   		return view('setting.list-user-type',["usertypes" => $usertypes]);
   }

   public function postUpdateUserTypeSettings(Request $request)
   {
   		$arr_return = array("status" => "error");
   		$id= $request->has('id')?$request->input('id'):0;
   		$name = $request->has('name')?$request->input('name'):'';
   		if($id){
   			$usertype = UserType::find($id);
   		}else{
   			$usertype = new UserType;
   		}
   		$usertype->name = $name;
   		if($usertype->save()){
   			$arr_return['status'] = 'success';
   		}else{
   			$arr_return['message'] = 'saving fail';
   		}
   		return $arr_return;
   }

   public function anyDeleteUserType($id)
   {
   		$arr_return = array('status' => 'error');
   		$usertype = UserType::find($id);
   		if($usertype->delete()){
   			$arr_return['status'] = 'success';
   		}else{
   			$arr_return['message'] = 'Delete fail';
   		}
   		return $arr_return;
   }


   // ========== PDF Setting ===========
   public function anyPdfSettings(){
   	$pdf_templates = PdfTemplate::orderBy('name')->get()->toArray();
   	return view('setting.list-pdf-template',["pdf_templates" => $pdf_templates]);
   }

   public function getGetTemplate($id){
   	$pdf = PdfTemplate::find($id);
   	if($pdf)
   		return $pdf;
   	else
   		return array();
   }
   public function anySaveTemplate(Request $request){
   	$arr_return = array('status' => 'error');
   	$id = $request->has('id')?$request->input('id'):0;
   	$pdf = PdfTemplate::find($id);
   	if($pdf){
   		$pdf->template = $request->has('template')?$request->input('template'):'';
   		$pdf->oriental = $request->has('oriental')?$request->input('oriental'):'';
   		if($pdf->save()){
   			$arr_return['status'] = 'success';
   		}else{
   			$arr_return['message'] = 'Saving fail';
   		}
   	}
   	else
   		$arr_return['message'] = 'Not found';
   	return $arr_return;
   }
   // =============================

}
