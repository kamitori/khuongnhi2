<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\PdfTemplate;
use Session;
use Storage;
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
			$cmd = public_path().'\\phantomjs\\phantomjs '. public_path().'\\phantomjs\\rasterize.js http://khuongnhi2.com/exports/try/'.$id.'?phantomjs='.md5('phantomjs').' '.public_path().'\\upload\\'.$name.'.pdf 740px*1100px 0.96';
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

	public static function getCreatePrintPdf($arr_print,$id_template,$name,$orential='potrait'){
		$pdf = PdfTemplate::find($id_template)->toArray();
		$arr_body = $arr_print['arr_list']['arr_body'];
		$arr_sum = $arr_print['arr_list']['arr_sum'];
		$arr_head = $arr_print['arr_list']['arr_head'];
		$arr_key = $arr_print['arr_list']['arr_key'];
		$arr_data = $arr_print['arr_data'];
		if(count($arr_body)){
			$table_list = 	'<table class="table_list">
						<thead>
							<tr>';
			foreach ($arr_head as $key => $value) {
				$table_list.='<th class="'.$value['class'].'">'.$value['text'].'</th>';
			}
			$table_list .='			</tr>
						</thead>
						<tbody>';
			foreach ($arr_body as $key => $value) {
				$table_list.='		<tr>';
				foreach ($arr_key as $key1 => $value1) {
					$table_list.='		<td class="'.$arr_head[$key1]['class'].'">'.$value[$value1].'</td>';
				}
				$table_list.='		</tr>';
			}
			$table_list.='			<tr class="sum">';
			foreach ($arr_sum as $key => $value) {
				if($key==0){
					$table_list.='		<td colspan="'.$value['colspan'].'">'.$value['value'].'</td>';
				}else{
					$table_list.='		<td class="money">'.$value['value'].'</td>';
				}
			}
			$table_list.='			</tr>';
			$table_list.= '		</tbody>
					</table>';
			$pdf = str_replace('{{$table_list}}',$table_list,$pdf);
			foreach ($arr_data as $key => $value) {
				$pdf['template'] = str_replace('{{'.$key.'}}',$value,$pdf);
			}
			
		}else{
			$pdf = str_replace('{{$table_list}}',$this->table_list,$pdf);
		}
		$content =  view('export.index',[
						'content'=>$pdf['template'],
						'orential'=>$orential
					])->render();
		$time = time();
		$file_name = md5($time).'.html';
		file_put_contents(public_path().'\\cache\\'.$file_name, $content);
		if($orential=='potrait')
			$cmd = public_path().'\\phantomjs\\phantomjs '. public_path().'\\phantomjs\\rasterize.js '.URL.'/cache/'.$file_name.' '.public_path().'\\upload\\'.$name.'_'.$time.'.pdf 740px*1100px 0.96';
		else
			$cmd = public_path().'\\phantomjs\\phantomjs '. public_path().'\\phantomjs\\rasterize.js '.URL.'/cache/'.$file_name.' '.public_path().'\\upload\\'.$name.'_'.$time.'.pdf 1100px*740px 0.96';
		if(exec($cmd)){
			echo URL.'/cache/'.$file_name.'<br/>';
			return   URL.'/upload/'.$name.'_'.$time.'.pdf';
		}
	}
}