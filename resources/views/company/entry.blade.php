<div class="heading-buttons main-left">
	<div class="buttons pull-left">
		<a href="{{URL}}/companies/create" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Thêm</a>
		<button href="javascript:void()" class="btn btn-small btn-primary btn-icon " id="delete_comapny"><i class="fa fa-remove"></i> Xóa</button>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-search"></i> Tìm kiếm</a>
	</div>
	<div class="buttons pull-right">
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-list-alt"></i> Chi tiết</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-list"></i> Danh sách</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-cogs"></i> Mục lục</a>
	</div>
</div>

<div class="accordion" id="accordion2" style="margin-bottom: 0;">
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
				<h4 id="company_label">{{$company['name'] != '' ? $company['name'] : 'Cong ty moi'}}</h4>
			</a>
		</div>
		<div id="collapse1" class="accordion-body in collapse" style="height: auto;">
			<div class="accordion-inner">
				<form  method="post" accept-charset="utf-8" id="form_entry">
					<div class="row-fluid form_detail">
						<div class="span4">
							<div class="control-group">
								<label class="control-label">STT</label>
								<div class="controls">
									<input id="no" name="no" type="text" value="{{$company['id']}}">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Tên công ty</label>
								<div class="controls">
									<input id="company_name" name="company_name" type="text" value="{{$company['name']}}">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Loại hình</label>
								<div class="controls">
									<select name="company_type" id="company_type">
										@foreach($company_type as $type)
										<option value="{{$type['id']}}" {{$type['id'] == $company['company_type_id'] ? 'selected':''}}>{{$type['name']}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Loại</label>
								<div class="controls widget-body list fluid">
									<label class="checkbox inline" style="  width: 35%;">
										<div class="checker" id="uniform-undefined">
											<span class="checked"><input style="width: 35%" name="is_customer" type="checkbox" class="checkbox" value="1" {{$company['is_customer'] == 1 ? 'checked':''}} ></span>
										</div>
										Khách hàng
									</label>
									<label class="checkbox inline" style="  width: 35%;">
										<div class="checker" id="uniform-undefined">
											<span class="checked"><input style="width: 35%" name="is_distribute" type="checkbox" class="checkbox" value="1" {{$company['is_distribute'] == 1 ? 'checked':''}} ></span>
										</div>
										Nhà cung cấp
									</label>
								</div>
							</div>


						</div>
						<div class="span4">
							<div class="control-group">
								<label class="control-label">Địa chỉ chính</label>
								<div class="controls">
									<input id="company_address" name="company_address" type="text" value="{{$address['address']}}">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Quận huyện</label>
								<div class="controls">
									<input id="company_town_city" name="company_town_city"  type="text" value="{{$address['town_city']}}">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Tỉnh thành</label>
								<div class="controls">
									<select name="company_province_state" id="company_province_state" data-type="select2">
										@foreach($provinces as $province)
										<option value="{{$province['id']}}" {{$province['id'] == $address['province_id'] ? 'selected' : ''}}>{{$province['name']}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Quốc gia</label>
								<div class="controls">
									<select name="company_country" id="company_country">
										@foreach($countries as $country)
										<option value="{{$country['id']}}" {{$country['id'] == $address['country_id'] ? 'selected' :''}}>{{$country['name']}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="control-group">
								<label class="control-label">Fax</label>
								<div class="controls">
									<input id="company_fax" name="company_fax" type="text" value="{{$company['fax']}}">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Email</label>
								<div class="controls">
									<input id="company_email" name="company_email" type="text" value="{{$company['email']}}">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Web</label>
								<div class="controls">
									<input id="company_web" name="company_web" type="text" value="{{$company['web']}}" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Điện thoại</label>
								<div class="controls">
									<input id="company_phone" name="company_phone" type="text" value="{{$company['phone']}}">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

	$("#form_entry input, #form_entry select").on("change",function(){
		var data = $("#form_entry").serialize();
		$.ajax({
			url:"{{URL}}/companies/update",
			type:"POST",
			data:data,
			success:function(data){
				if(data.status == 'success'){
					if(data.comapny_name != '')
						$("#company_label").text(data.comapny_name);
					toastr['success']('Saving success');
				}else{
					toastr['error'](data.message);
				}
			}
		})
	})

	$("#delete_comapny").on("click",function(){
		confirms('Xóa công ty này ?', function(){
			window.location = '{{URL}}/companies/delete';
		});
	});
</script>