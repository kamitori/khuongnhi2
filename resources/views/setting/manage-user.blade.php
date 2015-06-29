<div class="row">
	<div class="span6 quarter1">
		<div class="widget widget-2 widget-white">
			<div class="widget-head">
				<span class="heading">
					USER
				</span>
			</div>
			<div class="widget-body">
				<div class="dd" id="list_menu">
					<ol class="dd-list">
						<li class="dd-item dd3-item">
							<div class="dd3-content" onclick="other_settings_list('user-settings','User','user')">
								Danh sách tài khooản
							</div>
						</li>
						<li class="dd-item dd3-item">
							<div class="dd3-content" onclick="other_settings_list('user-type-settings','User type','user_type')">
								Loại tài khoản
							</div>
						</li>
						<li class="dd-item dd3-item">
							<div class="dd3-content" onclick="other_settings_list('permision-settings','Permision','permision')">
								Phần quyền
							</div>
						</li>
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
					<a href="#" id="module_popup"><i class="fa fa-plus"></i></a>
				</span>
			</div>
			<div class="widget-body" id="other_content">
			</div>
		</div>
	</div>
</div>

<script>
	function other_settings_list(setting_function_name, name,module){
		$("#module_name").text(name);
		$("#module_popup").attr("onclick","create_"+module+"()")
		$.ajax({
			url: "<?php echo URL; ?>/settings/" + setting_function_name,
			type:"GET",
			// timeout: 15000,
			success: function(html){
				$("div#other_content").html(html);
			}
		});
	}
</script>