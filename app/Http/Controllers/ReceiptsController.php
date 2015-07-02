<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;
use Datatables;
use Illuminate\Http\Request;
use Session;
use DB;
class ReceiptsController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	public function getDistribute()
	{
		$distributes = array();

		$distributes = Company::getDistributeList()->get()->toArray();

		$this->layout->content = view('receipt.customer',[
							'distributes'	=>	$distributes
								]);
	}

	public function postListReceiptDistribute(Request $request)
	{
		$company_id = $request->has('company_id')?$request->input('company_id'):0;
		
	}
}