<div class="heading-buttons main-left">
	<div class="buttons pull-left">
		<a href="{{URL}}/companies/create" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Thêm</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-list-alt"></i> Chi tiết</a>
		<a href="" class="btn btn-small btn-primary btn-icon "><i class="fa fa-cogs"></i> Mục lục</a>
	</div>
	<div class="buttons pull-right">
		<div class="pagination pagination-small pull-right" style="margin: -15px 20px 5px 20px;">
			<?php echo $list_product->render(); ?>
		</div>
	</div>
</div>
<form action="{{URL}}/companies/list" method="POST" accept-charset="utf-8" id="form-list">

<input type="hidden" id="input-sort" name="input-sort">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="table table-bordered table-condensed table-striped table-primary table-vertical-center table-list-view">
	<thead>
		<tr class="small">
			<th style="width: 4%" data-column="id" {{ isset($arr_sort['id'])?'data-sort='.$arr_sort['id']:'' }}>STT</th>
			<th style="width: 18%" data-column="name" {{ isset($arr_sort['name'])?'data-sort='.$arr_sort['name']:'' }}>Tên công ty</th>
			<th style="width: 7%" data-column="phone" {{ isset($arr_sort['phone'])?'data-sort='.$arr_sort['phone']:'' }}>SDT</th>
			<th style="width: 17%" data-column="oum_id" {{ isset($arr_sort['oum_id'])?'data-sort='.$arr_sort['oum_id']:'' }}>Địa chỉ</th>
			<th style="width: 7%" data-column="specification" {{ isset($arr_sort['specification'])?'data-sort='.$arr_sort['specification']:'' }}>Tỉnh thành</th>
			<th style="width: 7%" data-column="in_stock" {{ isset($arr_sort['in_stock'])?'data-sort='.$arr_sort['in_stock']:'' }}>Thành phố</th>
			<th style="width: 3%" class="no-sort">&nbsp;</th>
		</tr>
		<tr class="sort">
			<th style="width: 4%"></th>
			<th style="width: 8%">
				<select name="input-filter[name]" id="name" data-type="select2">
					<option value="">&nbsp;</option>
					@foreach($list_all_companies as $name)
						<option value="{{$name['name']}}" {{$arr_filter['name']==$name['name']?'selected':''}}>{{$name['name']}}</option>
					@endforeach
				</select>
			</th>
			<th style="width:18%"></th>
			<th style="width:7%"></th>
			<th style="width: 17%">
				<select name="input-filter[province_id]" id="province_id" data-type="select2">
					<option value="">&nbsp;</option>
					@foreach($list_provinces as $provinces)
						<option value="{{$provinces['id']}}" {{$arr_filter['province_id']==$provinces['id']?'selected':''}}>{{$provinces['name']}}</option>
					@endforeach
				</select>
			</th>
			<th style="width: 7%"></th>
			<th style="width: 3%">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($list_product as $key => $product)
		<tr class="selectable" data-id="{{$product['id']}}">
			<td>{{($product['id'])}}</td>
			<td>{{$product['name']}}</td>
			<td>{{$product['phone']}}</td>
			<td>{{$product['address']}}</td>
			<td>{{$product['province_name']}}</td>
			<td>{{$product['town_city']}}</td>
			<td>
				<a href="{{URL}}/companies/delete-from-list/{{$product['id']}}">
					<i class="fa fa-remove" data-id="{{$product['id']}}"></i>
				</a>
			</td>
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
			window.location = '{{URL}}/companies/entry/'+id;
		})
	})
</script>