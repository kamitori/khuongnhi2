<div class="heading-buttons main-left">
	<div class="buttons pull-left">
		<a href="{{URL}}/saleorders/create" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Thêm</a>
		<button href="javascript:void()" class="btn btn-small btn-primary btn-icon " id="delete_saleorder"><i class="fa fa-remove"></i> Xóa</button>
		<a href="{{URL}}/saleorders/list" class="btn btn-small btn-primary btn-icon "><i class="fa fa-search"></i> Tìm kiếm</a>
		<a href="{{URL}}/saleorders/list" class="btn btn-small btn-primary btn-icon "><i class="fa fa-list"></i> Danh sách</a>
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
				<h4 id="product_name">&nbsp;Hóa đơn bán hàng số {{$saleorder['id']}}</h4>
			</a>
		</div>
		<div id="collapse1" class="accordion-body in collapse" style="height: auto;">
			<div class="accordion-inner">
				<form method="post" accept-charset="utf-8" id="form_entry">
					<div class="row-fluid form_detail">
						<div class="span4">
							<div class="control-group">
								<label class="control-label">STT</label>
								<div class="controls">
									<input type="text" name="stt" value="{{$saleorder['id']}}" readonly="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Công ty</label>
								<div class="controls">
									<select name="company_id" id="company_id" data-type="select2">
										@foreach($distributes as $distribute)
										<option value="{{$distribute['id']}}"
									{{isset($saleorder['company_id']) && ($saleorder['company_id'] == $distribute['id'])?'selected':''}}
										 data-company="{{json_encode($distribute)}}">
											{{$distribute['name']}}
										</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Liên hệ</label>
								<div class="controls">
									<select name="user_id" id="user_id" data-type="select2">
										@foreach($users as $user)
										<option value="{{$user['id']}}"
									{{isset($saleorder['user_id'] ) && ($saleorder['user_id'] == $user['id'])?'selected':''}}
										>
											{{$user['name']}}
										</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="control-group" style="  margin-top: -5px;">
								<label class="control-label" style="vertical-align: bottom;">Ngày</label>
								<div class="controls">
									<div class="input-append">
										<input type="text" id="date" name="date" class="datepicker" value="{{ date('d-m-Y',strtotime($saleorder['date']) ) }}" readonly="">
										<span class="add-on"><i class="fa fa-calendar"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="control-group">
								<label class="control-label">Điện thoại</label>
								<div class="controls">
									<input type="text" name="company_phone" value="{{isset($purchaseorder['company_phone'])?$purchaseorder['company_phone']:''}}" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Email</label>
								<div class="controls">
									<input type="text" name="company_email" value="{{isset($purchaseorder['company_email'])?$purchaseorder['company_email']:''}}" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Địa chỉ</label>
								<div class="controls">
									<input type="text" name="address" value="{{isset($address['address'])?$address['address']:''}}" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Quận/Huyện</label>
								<div class="controls">
									<input type="text" name="town_city" value="{{isset($address['town_city'])?$address['town_city']:''}}" >
								</div>
							</div>

						</div>
						<div class="span4">
							<div class="control-group">
								<label class="control-label">Tỉnh thành</label>
								<div class="controls">
									<select name="province_id" id="province_id">
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Quốc gia</label>
								<div class="controls">
									<select name="country_id" id="country_id">
										@foreach($countries as $country)
										<option value="{{$country['id']}}" data-province='{{json_encode($country['provinces'])}}'
										{{isset($address['country_id']) && ($address['country_id']==$country['id'])?'selected':''}}>
											{{$country['name']}}
										</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Mã vùng</label>
								<div class="controls">
									<input type="text" name="zip_postcode" maxlength="15" value="{{ isset($address['zip_postcode'])?$address['zip_postcode']:'' }}">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" style="vertical-align: bottom; margin-bottom:5px;">Trạng thái</label>
								<div class="controls">
									<div class="toggle-button" data-togglebutton-width="221" data-togglebutton-label-enabled="Hoàn thành" data-togglebutton-label-disabled="Mới" data-togglebutton-height="25" data-togglebutton-font-lineheight="25px" >
										<input type="checkbox" name="status" {{isset($saleorder['status']) && ($saleorder['status']==1)?'checked':''}}>
									</div>
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
							<button class="btn btn-primary btn-small btn-icon"  onclick="popup_product();"><i class="fa fa-plus"></i>Thêm sản phẩm</button>
							<button class="btn btn-primary btn-small btn-icon"><i class="fa fa-print"></i>Xuất PDF</button>
						</div>
					</div>
					<table class="table table-bordered table-condensed table-striped table-primary table-vertical-center table-list-edit">
						<thead>
							<tr>
								<th style="width:7%">Mã</th>
								<th style="width:29%">Tên sản phẩm</th>
								<th style="width:8%">ĐV tính</th>
								<th style="width:7%">Quy cách</th>
								<th style="width:13%">Đơn giá</th>
								<th style="width:7%">Số lượng</th>
								<th style="width:13%" class="right">Thành tiền</th>
								<th style="width:3%">&nbsp;</th>
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

			$("#form_entry input,#form_entry select").on("change",function(){
				var data = $("#form_entry").serialize();
				$.ajax({
					url: '{{URL}}/saleorders/update',
					type:'POST',
					data: data,
					success:function(data){
						if(data.status=='success'){
							if(data.name != '')
								$("#product_name").text(data.name);
							toastr['success']('Saving success !');
						}else{
							toastr['error'](data.message);
						}
					}
				})
			})
			$("#delete_saleorder").on("click",function(){
				confirms('Xóa hóa đơn này ?', function(){
					window.location = '{{URL}}/saleorders/delete';
				});
			});



		}) // End Jquery

		function popup_product(){
			$.ajax({
				url : '{{URL}}/products/list-popup-so',
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
				url : '{{URL}}/saleorders/add-product',
				type : 'POST',
				data:{
					company_id : $("#company_id").val()
				},
				success : function(data){
					if(data.status=='success'){
						toastr['success']('Add success');
						$.ajax({
							url : '{{URL}}/saleorders/list-product',
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
				url : '{{URL}}/saleorders/delete-product',
				type : 'POST',
				data : {
					'id' : id
				},
				success : function(data){
					if(data.status=='success'){
						toastr['success']('Delete success');
						$.ajax({
							url : '{{URL}}/saleorders/list-product',
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

	</script>
@stop