<div class="heading-buttons main-left">
	<div class="buttons pull-left">
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Công nợ tháng KH</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Công nợ năm KH</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Công nợ NCC</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Công nợ tháng NCC</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Công nợ năm NCC</a>
	</div>
	<div class="buttons pull-right">
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Thêm thanh toán</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-list-alt"></i> Xuất PDF</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-list"></i> Xuất Excel</a>
	</div>
</div>

<div class="block" style="height: 100%;">
	<div class="span3 bs-docs-sidebar">
		<div class="accordion" id="accordion2" style="margin-bottom: 0;">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle">
						<strong>Danh sách khách hàng</strong>
					</a>
				</div>
				<div id="collapse1" class="accordion-body in collapse" style="height: auto;">
					<div class="accordion-inner" style="padding:0;">
						<ul class="nav bs-docs-sidenav affix-top left-list">
							@foreach($distributes as $company)
								<li data-id="{{$company['id']}}">
									<span  class='company'>{{$company['name']}}</span>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="span9" id="content_setting">
		<div class="accordion" id="accordion2" style="margin-bottom: 0;">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle">
						<strong>
							Công nợ khách hàng <span id="company_name">ABC </span>
						</strong>
					</a>
				</div>
				<div id="collapse1" class="accordion-body in collapse" style="height: auto;">
					<div class="accordion-inner">
						<table class="table table-bordered table-condensed table-striped table-primary table-vertical-center">
							<thead>
								<tr class="small">
									<th class="center">Ngày</th>
									<th class="center">Tổng tiền toa</th>
									<th class="center">Tiền thanh toán</th>
									<th class="center">Nợ cũ</th>
									<th class="center">Còn lại</th>
									<th class="center">Hình thức TT</th>
								</tr>
							</thead>
							<tbody id="list-receipt">
								<tr>
									<td>Lorem ipsum dolor.</td>
									<td  class="right">Repellat incidunt, quos?</td>
									<td  class="right">Explicabo fuga, enim.</td>
									<td  class="right">Consequatur, dolor, tempore.</td>
									<td  class="right">Nam, quaerat, tenetur.</td>
									<td>Veritatis, praesentium laborum.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@section('pageJS')
<script>
	$(".left-list li").on('click',function(){
		$("#company_name").text($(this).find(".company").text());
	})
</script>
@stop