@foreach($list_po as $po)
	<tr>
		<td  class="center" >{{ date('d-m-Y',strtotime($po['date'])) }}</td>
		<td  class="center" >{{ $po['id'] }}</td>
		<td  class="center" >{{ $po['company_name'] }}</td>
		<td  class="center" >{{ $po['oum_name'] }}</td>
		<td  class="center" >{{ $po['specification'] }}</td>
		<td  class="center" >{{ $po['quantity'] }}</td>
		<?php
			$tonkho = floor($po['in_stock']/$po['specification']);
			$view_tonkho = $tonkho.' '.$po['oum_name'];
			if($po['in_stock']%$po['specification'] && $po['specification']!=1){
				$sodu = $po['in_stock']%$po['specification'];
				$view_tonkho .= ' + '.$sodu.' '.'cái';
			}
		?>
		<td  class="center" >{{ $view_tonkho }}</td>
		@if(!$product['status'])
		<td  class="center" >
			<button class="btn btn-primary" type="button" onclick="popup_sellprice({{$po['product_id']}})" title="Thêm giá cho sản phẩm" >
				<i class="fa fa-usd"></i>
				Giá bán
			</button>
		</td>
		@endif
	</tr>
@endforeach