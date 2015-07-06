<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;
use App\Purchaseorder;
use App\Paid;
use App\User;
use App\ReturnPurchaseorder;
use Illuminate\Http\Request;

class ReceiptsController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	public function getIndex(){
		self::getDistribute();
	}
	public function getDistribute()
	{
		$distributes = array();
		$user = array();


		$distributes = Company::getDistributeList()->get()->toArray();
		$users = User::get()->toArray();
		$this->layout->content = view('receipt.customer',[
							'distributes'	=>	$distributes,
							'users'		=>	$users
								]);
	}

	public function postListReceiptDistribute(Request $request)
	{
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
		
		$list_po = Purchaseorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('company_id','=',$company_id)
					->get()->toArray();
		$key_order = 1;
		foreach ($list_po as $key => $value) {
			$list_order[$key_order]['id'] = $value['id'];
			$list_order[$key_order]['date'] =  $value['date'];
			$list_order[$key_order]['sum_amount'] =  $value['sum_amount'];
			$list_order[$key_order]['paid'] =  0;
			$list_order[$key_order]['no_cu'] =  0;
			$list_order[$key_order]['con_lai'] =  0;
			$list_order[$key_order]['hinh_thuc'] =  'Đơn hàng mua';
			$key_order++;
		}
		$list_rpo = ReturnPurchaseorder::where('date','>=',$begin)
					->where('date','<',$end)
					->where('status','=',1)
					->where('company_id','=',$company_id)
					->get()->toArray();
		foreach ($list_rpo as $key => $value) {
			$list_order[$key_order]['id'] = $value['id'];
			$list_order[$key_order]['date'] =  $value['date'];
			$list_order[$key_order]['sum_amount'] =  -$value['sum_amount'];
			$list_order[$key_order]['paid'] =  0;
			$list_order[$key_order]['no_cu'] =  0;
			$list_order[$key_order]['con_lai'] =  0;
			$list_order[$key_order]['hinh_thuc'] =  'Trả hàng mua';
			$key_order++;
		}

		$list_paid = Paid::where('date','>=',$begin)
					->where('date','<',$end)
					->where('company_id','=',$company_id)
					->where('type_paid','=','distribute')
					->get()->toArray();
		foreach ($list_paid as $key => $value) {
			$list_order[$key_order]['id'] = $value['id'];
			$list_order[$key_order]['date'] =  $value['date'];
			$list_order[$key_order]['sum_amount'] =  0;
			$list_order[$key_order]['paid'] =  $value['sum_paid'];
			$list_order[$key_order]['no_cu'] =  0;
			$list_order[$key_order]['con_lai'] =  0;
			$list_order[$key_order]['hinh_thuc'] =  $value['hinh_thuc'];
			$list_order[$key_order]['company_id'] =  $value['company_id'];
			$list_order[$key_order]['user_id'] =  $value['user_id'];
			$key_order++;
		}
		$date = array();
		foreach ($list_order as $key => $value) {
			$date[$key] = $value['date'];
		}
		array_multisort($date,SORT_ASC,$list_order);
		foreach ($list_order as $key => $value) {
			if($key==0){
				$list_order[$key]['no_cu']=0;
			}else{
				$list_order[$key]['no_cu']=$list_order[$key-1]['con_lai'];
			}
			$list_order[$key]['con_lai']=$list_order[$key]['sum_amount'] - $list_order[$key]['paid'] + $list_order[$key]['no_cu'];
		}
		return view('receipt.list-receipt-distribute',[
					'list_order' =>$list_order
			]);
	}

	public function postSavePaid(Request $request)
	{
		$time =date('H:i:s', time());
		$arr_return = array('status' => 'error');
		$id = $request->has('id')?$request->input('id'):0;
		if($id){
			$paid = Paid::find($id);
		}else{
			$paid = new Paid;
		}
		$paid->company_id = $request->has('company_id')?$request->input('company_id'):0;
		$paid->user_id = $request->has('user_id')?$request->input('user_id'):0;
		$paid->sum_paid = $request->has('sum_paid')?$request->input('sum_paid'):0;
		$paid->type_paid = $request->has('type_paid')?$request->input('type_paid'):'';
		$paid->date = $request->has('date') ? date("Y-m-d H:i:s",strtotime($request->input('date').' '.$time)) : date("Y-m-d H:i:s");
		$paid->hinh_thuc = $request->has('hinh_thuc')?$request->input('hinh_thuc'):'';
		if($paid->save()){
			$arr_return['status'] = 'success';
		}else{
			$arr_return['message'] = 'Saving fail';
		}
		return $arr_return;
	}

	public function postDeletePaid(Request $request)
	{
		$arr_return = array('status' => 'error');
		$id = $request->has('id')?$request->input('id'):0;
		if($id){
			$paid = Paid::find($id);
			if($paid->delete()){
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