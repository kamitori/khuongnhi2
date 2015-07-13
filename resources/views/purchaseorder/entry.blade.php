<div class="heading-buttons main-left">
	<div class="buttons pull-left">
		<a href="{{URL}}/purchaseorders/create" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Thêm</a>
		@if(!$purchaseorder['status'])
		<button href="javascript:void()" class="btn btn-small btn-primary btn-icon " id="delete_purchaseorder"><i class="fa fa-remove"></i> Xóa</button>
		@endif
		<a href="{{URL}}/purchaseorders/list" class="btn btn-small btn-primary btn-icon "><i class="fa fa-search"></i> Tìm kiếm</a>
		<a href="{{URL}}/purchaseorders/list" class="btn btn-small btn-primary btn-icon "><i class="fa fa-list"></i> Danh sách</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-cogs"></i> Mục lục</a>
	</div>
	<div class="buttons pull-right">
		
	</div>
</div>
<!-- Entry -->
<div class="accordion" id="accordion2" style="margin-bottom: 0;">
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
				<h4 id="product_name">&nbsp;Hóa đơn mua hàng số {{$purchaseorder['id']}}</h4>
			</a>
		</div>
		<div id="collapse1" class="accordion-body in collapse" style="height: auto;">
			<div class="accordion-inner">
				<form method="post" accept-charset="utf-8" id="form_entry">
					<div class="row-fluid form_detail">
						<div class="span4">
							<div class="control-group">
								<label class="control-label">STT:</label>
								<div class="controls">
									@if($purchaseorder['status'])
									<span>{{$purchaseorder['id']}}</span>
									@else
									<input type="text" name="stt" value="{{$purchaseorder['id']}}" readonly="">
									@endif
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Công ty:</label>
								<div class="controls">
									@if($purchaseorder['status'])
									<span>
										@foreach($distributes as $distribute)
											{{ isset($purchaseorder['company_id']) && ($purchaseorder['company_id'] == $distribute['id'])?$distribute['name']:'' }}
										@endforeach
									</span>
									@else
									<select name="company_id" id="company_id" data-type="select2">
										@foreach($distributes as $distribute)
										<option value="{{$distribute['id']}}" 
									{{isset($purchaseorder['company_id']) && ($purchaseorder['company_id'] == $distribute['id'])?'selected':''}}
										 data-company="{{json_encode($distribute)}}">
											{{$distribute['name']}}
										</option>
										@endforeach
									</select>
									@endif
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Liên hệ:</label>
								<div class="controls">
									@if($purchaseorder['status'])
									<span>
										@foreach($users as $user)
											{{isset($purchaseorder['user_id']) && ($purchaseorder['user_id'] == $user['id'])?$user['name']:''}}
										@endforeach
									</span>
									@else
									<select name="user_id" id="user_id" data-type="select2">
										@foreach($users as $user)
										<option value="{{$user['id']}}"
									{{isset($purchaseorder['user_id']) && ($purchaseorder['user_id'] == $user['id'])?'selected':''}}
										>
											{{$user['name']}}
										</option>
										@endforeach
									</select>
									@endif
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Ngày:</label>
								<div class="controls">
									@if($purchaseorder['status'])
										<span>{{ date('d-m-Y',strtotime($purchaseorder['date']) ) }}</span>
									@else
									<input type="text" id="date" name="date" class="datepicker" value="{{ date('d-m-Y',strtotime($purchaseorder['date']) ) }}" readonly="" style="background-color: #fff;">
									@endif
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="control-group">
								<label class="control-label">Điện thoại:</label>
								<div class="controls">
									@if($purchaseorder['status'])
										<span>{{isset($purchaseorder['company_phone'])?$purchaseorder['company_phone']:''}}</span>
									@else
									<input type="text" name="company_phone" value="{{isset($purchaseorder['company_phone'])?$purchaseorder['company_phone']:''}}" >
									@endif
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Email:</label>
								<div class="controls">
									@if($purchaseorder['status'])
										<span>{{isset($purchaseorder['company_email'])?$purchaseorder['company_email']:''}}</span>
									@else
									<input type="text" name="company_email" value="{{isset($purchaseorder['company_email'])?$purchaseorder['company_email']:''}}" >
									@endif
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Địa chỉ:</label>
								<div class="controls">
									@if($purchaseorder['status'])
										<span>{{isset($address['address'])?$address['address']:''}}</span>
									@else
									<input type="text" name="address" value="{{isset($address['address'])?$address['address']:''}}" >
									@endif
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Quận/Huyện:</label>
								<div class="controls">
									@if($purchaseorder['status'])
										<span>{{isset($address['town_city'])?$address['town_city']:''}}</span>
									@else
									<input type="text" name="town_city" value="{{isset($address['town_city'])?$address['town_city']:''}}" >
									@endif
								</div>
							</div>
							
						</div>
						<div class="span4">
							<div class="control-group">
								<label class="control-label">Tỉnh thành:</label>
								<div class="controls">
									@if($purchaseorder['status'])
										<span>{{isset($purchaseorder['province_name'])?$purchaseorder['province_name']:''}}</span>
									@else
									<select name="province_id" id="province_id">
									</select>
									@endif
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Quốc gia:</label>
								<div class="controls">
									@if($purchaseorder['status'])
										<span>{{isset($purchaseorder['country_name'])?$purchaseorder['country_name']:''}}</span>
									@else
									<select name="country_id" id="country_id">
										@foreach($countries as $country)
										<option value="{{$country['id']}}" data-province='{{json_encode($country['provinces'])}}' 
										{{isset($address['country_id']) && ($address['country_id']==$country['id'])?'selected':''}}>
											{{$country['name']}}
										</option>
										@endforeach
									</select>
									@endif
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Mã vùng:</label>
								<div class="controls">
									@if($purchaseorder['status'])
										<span>{{ isset($address['zip_postcode'])?$address['zip_postcode']:'' }}</span>
									@else
									<input type="text" name="zip_postcode" maxlength="15" value="{{ isset($address['zip_postcode'])?$address['zip_postcode']:'' }}">
									@endif
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="vertical-align: bottom; margin-bottom:5px;">Trạng thái:</label>
								<div class="controls">
									<input type="checkbox" name="status" {{isset($purchaseorder['status']) && ($purchaseorder['status']==1)?'checked':''}}  data-toggle="toggle" data-onstyle="primary" data-on="Hoàn thành" data-off="Mới" data-height="15" data-width="140">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> 
<!-- End Entry -->

<!-- Sub Entry -->
<div class="widget widget-2 widget-tabs">
	<div class="widget-head">
		<ul>
			<li class="active">
				<a href="#stockTab" data-toggle="tab">
					<h4>Danh sách sản phẩm</h4>
				</a>
			</li>
		</ul>
	</div>
	<div class="widget-body">
		<div class="tab-content">
			<div class="tab-pane active" id="stockTab">
				<div class="block row">
					<div class="heading-buttons main-left">
						<div class="buttons pull-left">
							@if(!$purchaseorder['status'])
							<button class="btn btn-primary btn-small btn-icon"  onclick="popup_product();"><i class="fa fa-plus"></i>Thêm sản phẩm</button>
							@endif
							<button class="btn btn-primary btn-small btn-icon"><i class="fa fa-print"></i>Xuất PDF</button>
						</div>
					</div>
					<table class="table table-bordered table-condensed table-striped table-primary table-vertical-center table-list-edit">
						<thead>
							<tr>
								<th style="width:7%">Mã</th>
								<th style="width:35%">Tên sản phẩm</th>
								<th style="width:8%">ĐV tính</th>
								<th style="width:7%">Quy cách</th>
								<th style="width:13%">Đơn giá</th>
								<th style="width:7%">Số lượng</th>
								<th style="width:20%" class="right">Thành tiền</th>
								@if(!$purchaseorder['status'])
								<th style="width:3%">&nbsp;</th>
								@endif
							</tr>
						</thead>
						<tbody id="list_product">
							<?php echo $view_list_product; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Sub Entry -->

@section('otherPage')
<div id="modal_add_product" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- dialog header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h5>&nbsp;</h5>
			</div>
			<!-- dialog body -->
			<div class="modal-body">
				<div class=" block row" id="list_product_popup">
					
				</div>
			</div>
			<!-- dialog buttons -->
			<div class="modal-footer">
				<button href="#" class="btn btn-primary" onclick="add_product()">Chọn sản phẩm</button>
				<button href="#" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Đóng</button>
			</div>
		</div>
	</div>
</div>
@stop


<style type="text/css" media="screen">
	#modal_add_product.modal.fade.in{
		width: 80%;
		left: 28%;
	}
</style>

@section('pageJS')
	<script>
		$(function(){
			$("#modal_add_product").modal({
				"backdrop":true,
				"show":false,
				"container":"body"
			});
			$("#country_id").on('change',function(){
				// alert(123);
				var provinces = $("#country_id option[value="+$("#country_id").val()+"]").attr('data-province');
				provinces = JSON.parse(provinces);
				var options = '';
				$.each(provinces,function(key,value){
					options+='<option value="'+value.id+'" ';
					if(value.id == {{isset($address['province_id'])?$address['province_id']:0}}){
						options+=' selected ';
					}
					options+='>'
					options+=value.name;
					options+='</option>';
				})
				$("#province_id").html(options).select2({width:'84%'});
			})
			

			$("#company_id").on("change",function(e){
				var company = $("#company_id option[value="+$(this).val()+"]").attr('data-company');
				company = JSON.parse(company);
				e.preventDefault();
				$("[name=company_phone]").val( company.phone );
				$("[name=company_email]").val( company.email );
				$("[name=address]").val( company.address[0].address );
				$("[name=town_city]").val( company.address[0].town_city );
				$("[name=country_id]").val( company.address[0].country_id );
				$("#country_id").trigger("change");
				$("#province_id").val(  company.address[0].province_id );
				$("#province_id").trigger("change");
				$("[name=zip_postcode]").val( company.address[0].zip_postcode );
			})

			$("#country_id").trigger('change');

			$("#form_entry input,#form_entry select").on("change",function(e){
				var name = $(this).attr('name');
				e.preventDefault();
				var data = $("#form_entry").serialize();
				$.ajax({
					url: '{{URL}}/purchaseorders/update',
					type:'POST',
					data: data,
					success:function(data){
						if(data.status=='success'){
							if(data.name != '')
								$("#product_name").text(data.name);
							toastr['success']('Saving success !');
							if(name == 'status')
								window.location.reload();
						}else{
							if(name == 'status'){
								$('input[name=status]').data("bs.toggle").off(true);
							}
							toastr['error'](data.message);
						}
					}
				})
			})
			$("#delete_purchaseorder").on("click",function(){
				confirms('Xóa hóa đơn này ?', function(){
					$.ajax({
						url : '{{URL}}/purchaseorders/delete',
						type : 'GET',
						success : function(data){
							if(data.status == 'success'){
								toastr['success']('Delete success');
								window.location = '{{URL}}/purchaseorders';
							}else{
								toastr['success'](data.message);
							}
						}
					})
					
				});
			});

			

		}) // End Jquery

		function popup_product(){
			$.ajax({
				url : '{{URL}}/products/list-popup/po',
				type : 'GET',
				success : function(html){
					$("#list_product_popup").html(html);
					$("#modal_add_product").modal("show");
					$('#modal_add_product').on('shown',function(){
						$("#form-list select[data-type=select2]").each(function(key,element){
							$(element).select2();
						});
					})
				}
			});
		}

		function add_product(){
			$.ajax({
				url : '{{URL}}/purchaseorders/add-product',
				type : 'POST',
				data:{
					company_id : $("#company_id").val()
				},
				success : function(data){
					if(data.status=='success'){
						toastr['success']('Add success');
						$.ajax({
							url : '{{URL}}/purchaseorders/list-product',
							type :'GET',
							success:function(html){
								$("#list_product").html(html);
								$("#modal_add_product").modal('hide');
								$(window).trigger('resize');
							}
						})
						
					}else{
						toastr['error'](data.message);
					}
				}
			});
		}

		function delete_product(obj){
			var id = $(obj).parent().parent().attr('data-id');
			$.ajax({
				url : '{{URL}}/purchaseorders/delete-product',
				type : 'POST',
				data : {
					'id' : id
				},
				success : function(data){
					if(data.status=='success'){
						toastr['success']('Delete success');
						$.ajax({
							url : '{{URL}}/purchaseorders/list-product',
							type :'GET',
							success:function(html){
								$("#list_product").html(html);
								$("#modal_add_product").modal('hide');
								$(window).trigger('resize');
								sum_invest();
							}
						})
					}else{
						toastr['error'](data.message);
					}
				}
			});
		}

		function sum_invest(){
			var sum_invest =0;
			$(".invest").each(function(){
				var value = $(this).text();
				while(value.indexOf(',')>0){
					value = value.replace(',','');
				}
				value = parseFloat(value);
				sum_invest += value;
			})
			sum_invest = sum_invest.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			$("#sum_invest").text(sum_invest);
		}

	</script>
@stop