<div class="block" style="height: 100%;position:static;">
	<div class="span9">
		<div class="row-fluid pages">
			<ul>
				<li class="span3 primary">
					<i class="fa fa-file-text-o"></i>
					<strong>Đơn hàng</strong>
					<strong>2</strong>
				</li>
				<li class="span3 primary">
					<i class="fa fa-undo"></i>
					<strong>Đại lý trả</strong>
					<strong>2</strong>
				</li>
				<li class="span3 primary">
					<i class="fa fa-file-text-o"></i>
					<strong>Mua hàng</strong>
					<strong>2</strong>
				</li>
				<li class="span3 primary">
					<i class="fa fa-undo"></i>
					<strong>Trả NCC</strong>
					<strong>2</strong>
				</li>
			</ul>
		</div>
		<div class="accordion" id="accordion2" style="margin-bottom: 0;">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle">
						<strong style="font-size:125%;">Doanh số trong tuần</strong>
					</a>
				</div>
				<div id="collapse1" class="accordion-body in collapse" style="height: auto;">
					<div class="accordion-inner">
						<div id="chartContainer" style="height: 300px; width:100%;">
		    				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="span3">
		<div class="relativeWrap">
			<div class="widget widget-2 widget-body-white">
				<div class="widget-head">
					<h4 class="heading"><i class="fi fi-023" style="width:30px;"></i> Thống kê</h4>
				</div>
				<div class="widget-body list">
					<ul>
						<li><span class="count">350,254</span> <strong>Tổng sản phẩm</strong></li>
						<li><span class="count">120,103</span> Visitors</li>
						<li><span class="count">5,156,392</span> Pageviews</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

@section('pageJS')
<script src="{{URL}}/scripts/canvasjs/canvasjs.min.js" type="text/javascript"></script>
<script>

	$(function(){
		
		var chart  = new CanvasJS.Chart("chartContainer",
		{
			title:{
				//text: "Doanh số trong tuần"
			},
			theme: "theme2",
			axisY :{
				includeZero: true,
				valueFormatString: "#,###"
			},
			axisX: {
				valueFormatString: "DD/MM",
				interval: 1,
				intervalType: "day"
			},
			data:[
				{
					type: "line",
					markerSize: 15,
					yValueFormatString: "#,###",
					dataPoints: [
						{ x: get_week(new Date(),6), y: 135200000},
						{ x: get_week(new Date(),5), y: 51400000},
						{ x: get_week(new Date(),4), y: 12100000},
						{ x: get_week(new Date(),3), y: 216300000},
						{ x: get_week(new Date(),2), y: 95000000},
						{ x: get_week(new Date(),1), y: 120100000},
						{ x: get_week(new Date(),0), y: 8600000},  
					]
				}
			]

		});

		chart.render();
		
		$("a.canvasjs-chart-credit").remove();

	});

	function get_week(d,off){
		var d = new Date(d);
		var day = d.getDate();
		var month = d.getMonth();
		var year = d.getFullYear();
		return new Date(year,month,day-off);
	}
</script>
@stop