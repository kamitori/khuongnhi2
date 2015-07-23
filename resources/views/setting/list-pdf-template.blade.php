<div class="row">
	<div class="span6 quarter1">
		<div class="widget widget-2 widget-white">
			<div class="widget-head">
				<span class="heading">
					Template PDF
				</span>
			</div>
			<div class="widget-body">
				<div class="dd" id="list_menu">
					<ol class="dd-list">
						@foreach($pdf_templates as $pdf)
							<li class="dd-item dd3-item">
								<div class="dd3-content" onclick="pdf_detail(this)" data-id="{{$pdf['id']}}" data-name="{{$pdf['name']}}">
									{{$pdf['name']}}
								</div>
							</li>
						@endforeach
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="span6 quarter3">
		<div class="widget widget-2 widget-white">
			<div class="widget-head">
				<span class="heading">
					<span id="module_name"></span>
				</span>
			</div>
			<div class="widget-body center" id="pdf_content">
				<input type="hidden" value="" id="id_template">
				<textarea id="edit_pdf"></textarea>
				<br/>
				<div class="center">
					<button class="btn btn-primary" onclick="save_template()">Lưu</button>
					<button class="btn btn-primary" onclick="print_template()">In Thử</button>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css" media="screen">
	#cke_edit_pdf{
		margin : auto;
	}
</style>
<script>	
	var token = '{{ csrf_token() }}';
</script>
<script src="{{URL}}/scripts/ckeditor/ckeditor.js"></script>
<script>
	$(function(){
		CKEDITOR.basePath = '{{URL}}/scripts/ckeditor/';
		CKEDITOR.replace('edit_pdf', {
			"filebrowserImageUploadUrl": "scripts/ckeditor/plugins/imgupload/imgupload.php"
		});
	})
	

	function pdf_detail(obj){
		$("#module_name").text($(obj).attr('data-name'));
		$("#id_template").val($(obj).attr('data-id'));
		$.ajax({
			url : '{{URL}}/settings/get-template/'+$(obj).attr('data-id'),
			type : 'GET',
			success: function(data){
				CKEDITOR.instances['edit_pdf'].setData(data)
			}
		});
	}

	function save_template(){
		var template = CKEDITOR.instances['edit_pdf'].getData();
		var id = $("#id_template").val()?$("#id_template").val():0;
		console.log(id);
		$.ajax({
			url : '{{URL}}/settings/save-template',
			type : 'POST',
			data : {
				'id' : id,
				'template' : template
			},
			success: function(data){
				if(data.status == 'success'){
					toastr['success']('Save success');
				}else{
					toastr['error'](data.message);
				}
			}
		});
	}

	function print_template(){
		event.preventDefault();
		var id = $("#id_template").val()?$("#id_template").val():0;
		var name = $("#module_name").text()?$("#module_name").text():'';
		$.ajax({
			url : '{{URL}}/exports/print-test',
			type : 'POST',
			data:{
				'id' : id,
				'name' : name
			},
			success: function(data){
				if(data.status == 'success'){
					window.open(data.link,'_blank');
				}else{
					toastr['error'](data.message);
				}
			}
		});
	}
</script>
