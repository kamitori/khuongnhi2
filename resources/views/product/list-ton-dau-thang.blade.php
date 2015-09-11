<?php 
	$user = Auth::user();
?>
<div class="heading-buttons main-left">
	<div class="buttons pull-left">
		<a href="{{URL}}/products/create" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Thêm</a>
		<a href="{{URL}}/products/entry" class="btn btn-small btn-primary btn-icon "><i class="fa fa-list-alt"></i> Chi tiết</a>
		<a href="javascript:window.open('{{URL}}/products/export-pdf','_blank');" class="btn btn-small btn-primary btn-icon "><i class="fa fa-print"></i> Xuất PDF</a>
		<a href="javascript:window.open('{{URL}}/products/export-excel','_blank');" class="btn btn-small btn-primary btn-icon "><i class="fa fa-print"></i> Xuất Excel</a>
		<a href="{{URL}}/products/list" class="btn btn-small btn-primary btn-icon "><i class="fa fa-list"></i> Danh sách</a>
		@if($user->can("view-history"))
		<a href="{{URL}}/products/log" class="btn btn-small btn-primary btn-icon "><i class="fa fa-clock-o"></i> Lịch sử</a>
		@endif
	</div>
	<div class="buttons pull-right">

		<div class="pagination pagination-small pull-right" style="margin: -15px 20px 5px 20px;">
			<?php echo $list_product->render(); ?>
		</div>
	</div>
</div>
<form action="{{URL}}/products/ton-dau-thang" method="POST" accept-charset="utf-8" id="form-list">

<input type="hidden" id="input-sort" name="input-sort">
<input type="hidden" id="like_name" name="input-filter[like_name]">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="table table-bordered table-condensed table-striped table-primary table-vertical-center table-list-view">
	<thead>
		<tr class="small">
			<th style="width: 10%" data-column="id" {{ isset($arr_sort['id'])?'data-sort='.$arr_sort['id']:'' }}>Mã</th>
			<th style="width: 15%" data-column="sku" {{ isset($arr_sort['sku'])?'data-sort='.$arr_sort['sku']:'' }}>SKU</th>
			<th style="width: 45%" data-column="name" {{ isset($arr_sort['name'])?'data-sort='.$arr_sort['name']:'' }}>Tên sản phẩm</th>
			<th style="width: 15%" class="no-sort">Tháng</th>
			<th style="width: 15%" data-column="quantity" {{ isset($arr_sort['quantity'])?'data-sort='.$arr_sort['quantity']:'' }}>Tồn kho</th>
		</tr>
		<tr class="sort">
			<th style="width: 10%">
			</th>
			<th style="width: 15%">
				<select name="input-filter[sku]" id="sku" data-type="select2">
					<option value="">&nbsp;</option>
					@foreach($list_all_product as $sku)
						<option value="{{$sku['sku']}}" {{$arr_filter['sku']==$sku['sku']?'selected':''}}>{{$sku['sku']}}</option>
					@endforeach
				</select>
			</th>
			<th style="width:45%">
				<select name="input-filter[name]" id="name" data-type="select2">
					<option value="">&nbsp;</option>
					@foreach($list_all_product as $name)
						<option value="{{$name['name']}}" {{$arr_filter['name']==$name['name']?'selected':''}}>{{$name['name']}}</option>
					@endforeach
				</select>
			</th>
			<th style="width: 15%">
				<select name="input-filter[month]" id="month" data-type="select2">
					@foreach($list_month as $value)
					<option value="{{$value['month']}}-{{$value['year']}}" {{$arr_filter['month']==($value['month'].'-'.$value['year'])?'selected':''}}>Tháng {{$value['month']}}-{{$value['year']}}</option>
					@endforeach
				</select>
			</th>
			<th style="width: 15%"></th>
		</tr>
	</thead>
	<tbody>
		@foreach ($list_product as $key => $product)
		<tr class="selectable" data-id="{{$product['id']}}">
			<td>{{($product['id'])}}</td>
			<td>{{$product['sku']}}</td>
			<td><a href="{{URL}}/products/{{$product['id']}}">{{$product['name']}}</a></td>
			<td>Tháng {{$product['month']}}-{{$product['year']}}</td>
			<td>{{$product['quantity']}} cái</td>
		</tr>
		@endforeach
	</tbody>
</table>
</form>
<script>
	$(function(){
		$('.table-list-view thead tr:first-child th:not(.no-sort)').on('click',function(){
			var column = $(this).attr('data-column');
			var sort = $(this).attr('data-sort');
			if(sort==undefined){
				sort='asc'
				$(this).attr('data-sort',sort);
			}else{
				if(sort=='asc'){
					sort='desc';
					$(this).attr('data-sort',sort);
				}else{
					$(this).removeAttr('data-sort');
				}
			}
			var data_sort={};
			$('.table-list-view thead tr:first-child th:not(.no-sort)').each(function(key,element){
				if($(element).attr('data-sort') != undefined){
					data_sort[ $(element).attr('data-column') ] =  $(element).attr('data-sort');
				}
				
			});
			$("#input-sort").val( JSON.stringify(data_sort) );
			$('#form-list').submit();
		})

		$('.table-list-view thead tr:nth-child(2) th:not(.no-sort)').on('change',function(){
			$('#form-list').submit();
		});

		$('.table-list-view tbody tr').on("click",function(){
			var id = $(this).attr('data-id');
			window.location = '{{URL}}/products/entry/'+id;
		})

		var create = 1;
		$("#name").on('select2:open',function(e){
			if(create){
				$("#select2-name-results").parent().prev().find('input').val($("#like_name").val());
				$("#select2-name-results").parent().prev().find('input').css('width','80%').css('float','left');
				$("#select2-name-results").parent().prev().append('<button style="  margin-left: 3px;  margin-bottom: 2px; line-height: 14px;" id="search_by_name" onclick="search_list_by_name(this)"><i class="fa fa-search"></i></button >')
				create =0;
			}
		});
	})

	function search_list_by_name(obj){
		$("#like_name").val($(obj).prev().val());
		$('#form-list').submit();
	}
</script>