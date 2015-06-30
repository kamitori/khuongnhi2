<?php 
	$sum_invest = 0;
?>
@foreach ($list_product as $product)
<tr data-id="{{$product['id']}}" id="row_product_{{$product['id']}}">
	<input type="hidden" id="id" value="{{$product['id']}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<td>{{$product['sku']}}</td>
	<td>{{$product['name']}}</td>
	<td>
		@if($returnpurchaseorder['status'])
			
			@foreach($oums as $oum)
				{{$product['oum_id']==$oum['id']?$oum['name']:''}}
		 	@endforeach
		 	
		@else
		<select class="oum_id" name="oum_id" id="oum_id">
			@foreach($oums as $oum)
			<option value="{{$oum['id']}}"  {{$product['oum_id']==$oum['id']?'selected':''}}>
				{{$oum['name']}}
			</option>
		 	@endforeach
		</select>
		@endif
	</td>
	<td>
		@if($returnpurchaseorder['status'])
		{{$product['specification']}}
		@else
		<input type="text" id="specification" name="specification" value="{{$product['specification']}}" data-type="quantity">
		@endif
	</td>
	<td data-type="currency" id="origin_price">
			{{$product['origin_price']}}
	</td>
	<td>
		@if($returnpurchaseorder['status'])
		{{$product['quantity']}}
		@else
		<input type="text" id="quantity" name="quantity" value="{{$product['quantity']}}" data-type="quantity">
		@endif
	</td>
	<td data-type="currency" class="invest">{{$product['invest']}}</td>
	@if(!$returnpurchaseorder['status'])
	<td><i class="fa fa-remove link" onclick="delete_product(this)"></i></td>
	@endif
</tr>
<?php $sum_invest+= $product['invest'];?>
@endforeach
@if(count($list_product))
<tr class="sum">
	<td colspan="6">Tổng tiền: </td>
	<td data-type="currency" class="right" id="sum_invest">{{$sum_invest}}</td>
	@if(!$returnpurchaseorder['status'])
	<td></td>
	@endif
</tr>
@endif
<script>

	$(function(){
		datatype_currency();
		datatype_number();

		
		$("#list_product select, #list_product input").on('change',function(e){
			e.preventDefault();
			var id = $(this).parent().parent().attr('data-id');
			var row = $("#row_product_"+id);
			data = {};
			data['id'] = row.find("#id").val();
			data['oum_id'] = row.find("#oum_id").val();
			origin_price = row.find("#origin_price").text();
			while(origin_price.indexOf(',')>0){
				origin_price = origin_price.replace(',','')
			}
			data['origin_price'] = origin_price;
			data['specification'] = row.find("#specification").val();
			data['quantity'] = row.find("#quantity").val();
			$.ajax({
				url : "{{URL}}/returnpurchaseorders/update-mproduct",
				type : "POST",
				data : data,
				success : function(data){
					if(data.status == 'success'){
						$("tr[data-id="+id+"]").find(".invest").text(data.invest);
						console.log($("#row_product_"+id).find(".invest"));
						toastr['success']('Saving success !');
						sum_invest();
					}else{
						toastr['error'](data.message);
					}
					
				}
			})
		})
	})
</script>