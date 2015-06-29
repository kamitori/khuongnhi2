<?php
	$sum_amount = 0;
	$sum_amount_interest = 0;
?>
@foreach ($list_product as $product)
<tr data-id="{{$product['id']}}" id="row_product_{{$product['id']}}">
	<input type="hidden" id="id" value="{{$product['id']}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<td>{{$product['sku']}}</td>
	<td>{{$product['name']}}</td>
	<td>
		<select class="oum_id" name="oum_id" id="oum_id">
			@foreach($oums as $oum)
			<option value="{{$oum['id']}}"  {{$product['oum_id']==$oum['id']?'selected':''}}>
				{{$oum['name']}}
			</option>
		 	@endforeach
		</select>
	</td>
	<td>{{$product['specification']}}</td>
	<td><input type="text" id="quantity" name="quantity" value="{{$product['quantity']}}" data-type="quantity"></td>
	<td data-type="currency" class="amount">{{$product['amount']}}</td>
	<td data-type="currency" class="amount">{{$product['amount_interest']}}</td>
	<td><i class="fa fa-remove link" onclick="delete_product(this)"></i></td>
</tr>
<?php
	$sum_amount += $product['amount'];
	$sum_amount_interest += $product['amount_interest'];
 ?>
@endforeach
<tr class="sum">
	<td colspan="6">Tổng cộng</td>
	<td data-type="currency">{{$sum_amount}}</td>
	<td data-type="currency">{{$sum_amount_interest}}</td>
</tr>


<script>
	$(function(){
		$("[data-type=currency]").each(function(){
			value = $(this).text().replace(',','')
			while(value.indexOf(',')>0){
				value = value.replace(',','')
			}
			value = parseInt(value);
			value = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			$(this).text(value);
		})


		$("#list_product select, #list_product input").on('change',function(){
			var id = $(this).parent().parent().attr('data-id');
			var row = $("#row_product_"+id);
			data = {};
			data['id'] = row.find("#id").val();
			data['oum_id'] = row.find("#oum_id").val();
			data['sell_price'] = row.find("#sell_price").val();
			data['quantity'] = row.find("#quantity").val();
			$.ajax({
				url : "{{URL}}/saleorders/update-mproduct",
				type : "POST",
				data : data,
				success : function(data){
					if(data.status == 'success'){
						$("tr[data-id="+id+"]").find(".amount").text(data.amount);
						console.log($("#row_product_"+id).find(".amount"));
						toastr['success']('Saving success !');
					}else{
						toastr['error'](data.message);
						row.find("#oum_id").val(data['oum_id']);
						row.find("#sell_price").val(data['sell_price']);
						row.find("#quantity").val(data['quantity']);
					}

				}
			})
		})
	})
</script>