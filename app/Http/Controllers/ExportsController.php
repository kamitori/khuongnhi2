<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\PdfTemplate;
use Session;
use DB;

class ExportsController extends Controller {
	protected $layout = 'export.index';
	protected $table_list = '<table class="table_list">
					<thead>
						<tr>
							<th>Mã</th>
							<th>Tên</th>
							<th class="money">Đơn giá</th>
							<th>Số lượng</th>
							<th class="money">Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>A1234</td>
							<td>Quần áo trẻ em</td>
							<td  class="money">50000</td>
							<td>10</td>
							<td  class="money">500000</td>
						</tr>
						<tr>
							<td>A6789</td>
							<td>Đồ dùng trẻ em</td>
							<td  class="money">150000</td>
							<td>10</td>
							<td  class="money">1500000</td>
						</tr>
					</tbody>
				</table>';
	public function __construct()
	{
		date_default_timezone_set('Asia/Ho_Chi_Minh');
	}
	public function getIndex(Request $request){
		
	}

	public function getTry($id=0){
		if($id){
			$date_print = date('d-m-Y');
			$pdf = PdfTemplate::find($id)->toArray();
			$pdf = str_replace('{{$table_list}}',$this->table_list,$pdf);
			$pdf = str_replace('{{$date_print}}',$date_print,$pdf);
			$this->layout->content = $pdf['template'];
		}else{
			$this->layout->content =  "<h1>Not found template</h1>";
		}
	}

	public function postPrintTest(Request $request){
		$arr_return = array('status'=>'error');
		$id = $request->has('id')?$request->input('id'):0;
		$name = $request->has('name')?$request->input('name'):0;
		$name = Str::slug($name,'_');
		if($id){
			$cmd = public_path().'/phantomjs/phantomjs '. public_path().'/phantomjs/rasterize.js http://khuongnhi2.com/exports/try/'.$id.'?phantomjs='.md5('phantomjs').' '.public_path().'/upload/'.$name.'.pdf 780px*1100px';
			if(exec($cmd)){
				$arr_return['status'] = 'success';
				$arr_return['link'] = URL.'/upload/'.$name.'.pdf';
			}else{
				$arr_return['message'] = 'Error print';
			}
		}else{
			$arr_return['message'] = 'Not found';
		}
		return $arr_return;
	}
}