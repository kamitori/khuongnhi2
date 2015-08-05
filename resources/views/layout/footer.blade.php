<!--  Footer -->
<div id="footer" class="hide">
	<div class="wrap">
		<div class="span3 pull-left">
			@if(isset($arr_create))
			<ul>
				<li>Thêm: {{date('d/m/Y',strtotime($arr_create['created_at']))}}</li>
				<li>{{date('H:i',strtotime($arr_create['created_at']))}}</li>
				<li>bởi: {{$arr_create['name']}}</li>
			</ul>
			@endif
		</div>
		<div class="span3 pull-left">
			@if(isset($arr_update))
			<ul>
				<li>Sửa: {{date('d/m/Y',strtotime($arr_update['updated_at']))}}</li>
				<li>{{date('H:i',strtotime($arr_update['updated_at']))}}</li>
				<li>bởi: {{$arr_update['name']}}</li>
			</ul>
			@endif
		</div>
		<div class="span6 pull-right">
			<ul>
				<li><a href="{{URL}}">Trang chủ</a></li>
				<li><a href="{{URL}}/settings">Bảng điều khiển</a></li>
				<li><a href="#">{{\Auth::user()->name}}</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- End footer -->