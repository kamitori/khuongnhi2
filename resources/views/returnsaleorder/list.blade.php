<div class="heading-buttons main-left">
	<div class="buttons pull-left">
		<a href="{{URL}}/returnsaleorders/create" class="btn btn-small btn-primary btn-icon "><i class="fa fa-plus"></i> Thêm</a>
		<a href="{{URL}}/returnsaleorders/entry" class="btn btn-small btn-primary btn-icon "><i class="fa fa-list-alt"></i> Chi tiết</a>
		<a href="javascript:window.open('{{URL}}/returnsaleorders/export-pdf-list','_blank');" class="btn btn-small btn-primary btn-icon "><i class="fa fa-print"></i> Xuất PDF</a>
	</div>
	<div class="buttons pull-right">

		<div class="pagination pagination-small pull-right" style="margin: -15px 20px 5px 20px;">
			<?php  echo $list_returnsaleorder->render(); ?>
		</div>
	</div>
</div>

<form action="{{URL}}/returnsaleorders/list" method="POST" accept-charset="utf-8" id="form-list">

<input type="hidden" id="input-sort" name="input-sort">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="table table-bordered table-condensed table-striped table-primary table-vertical-center table-list-view">
	<thead>
		<tr class="small">
			<th style="width: 10%" data-column="id" {{ isset($arr_sort['id'])?'data-sort='.$arr_sort['id']:'' }}>Mã hóa đơn</th>
			<th style="width: 39%" data-column="company_id" {{ isset($arr_sort['company_id'])?'data-sort='.$arr_sort['company_id']:'' }}>Nhà cung cấp</th>
			<th style="width: 13%" data-column="date" {{ isset($arr_sort['date'])?'data-sort='.$arr_sort['date']:'' }}>Ngày đặt hàng</th>
			<th style="width: 20%" data-column="sum_invest" {{ isset($arr_sort['sum_invest'])?'data-sort='.$arr_sort['sum_invest']:'' }}>Tổng tiền trả hàng</th>
			<th style="width: 13%" data-column="status" {{ isset($arr_sort['status'])?'data-sort='.$arr_sort['status']:'' }}>Tình trạng</th>
			<th style="width: 5%" class="no-sort">&nbsp;</th>
		</tr>
		<tr class="sort">
			<th>
				<select name="input-filter[id]" id="id" data-type="select2">
					<option value="">&nbsp;</option>
					@foreach($list_id as $value)
						<option value="{{$value}}" {{$arr_filter['id']==$value?'selected':''}}>{{$value}}</option>
					@endforeach
				</select>
			</th>
			<th>
				<select name="input-filter[company_id]" id="company_id" data-type="select2">
					<option value="">&nbsp;</option>
					@foreach($distributes as $company)
						<option value="{{$company['id']}}" {{$arr_filter['company_id']==$company['id']?'selected':''}}>{{$company['name']}}</option>
					@endforeach
				</select>
			</th>
			<th>
				<select name="input-filter[date]" id="date" data-type="select2">
					<option value="">&nbsp;</option>
					@foreach($list_date as $value)
						<option value="{{$value}}" {{$arr_filter['date']==$value?'selected':''}}>{{$value}}</option>
					@endforeach
				</select>
			</th>
			<th></th>
			<th>
				<select name="input-filter[status]" id="status">
					<option value="">&nbsp;</option>
					<option value="0" {{$arr_filter['status']=='0'?'selected':''}}>Mới</option>
					<option value="1" {{$arr_filter['status']=='1'?'selected':''}}>Hoàn thành</option>
				</select>
			</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($list_returnsaleorder as $key => $rso)
		<tr class="selectable" data-id="{{$rso['id']}}">
			<td>{{($rso['id'])}}</td>
			<td>{{$rso['company']['name']}}</td>
			<td>{{date('d-m-Y',strtotime($rso['date']))}}</td>
			<td data-type="currency">{{$rso['sum_invest']!=null?$rso['sum_invest']:0}}</td>
			<td>{{$rso['status']==1?'Hoàn thành':'Mới'}}</td>
			<td>
				<a href="{{URL}}/returnsaleorders/delete-from-list/{{$rso['id']}}">
					<i class="fa fa-remove" data-id="{{$rso['id']}}"></i>
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
			window.location = '{{URL}}/returnsaleorders/entry/'+id;
		})
	})
</script>