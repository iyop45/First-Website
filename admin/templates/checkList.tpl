{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
		{$list}
		<form class="add-new-task" autocomplete="off">
			<input id="new-task" type="text" name="new-task" placeholder="Add a new item..." />
		</form>
		{literal}
			<script type="text/javascript">
			$(document).ready(function() {
				$('#new-task').bind("keypress", function(e) {
					 var code = (e.keyCode ? e.keyCode : e.which);
					 if (code == 13){
						e.preventDefault();
						var new_task = $('#new-task').val();
						if(new_task != ''){
							$.post('http://techberry.org/admin/process.add-checklist.php', { task: new_task, token : '{/literal}{$token}{literal}' }, function( data ) {
								$('#new-task').val('');
								$(data).appendTo('.task-list ul').hide().fadeIn();
								renderDeleteButtons();
								return false;
							});
							return false;
						}
						return false;
					}
				});
				$(".delete-button").click(function(e){
					var id = e.target.id;
					$.post('http://techberry.org/admin/process.remove-checklist.php', { id: id, token : '{/literal}{$token}{literal}' }, function( data ) {
						$("body").append(data);
						$('#' + id).parent().hide('slow', function(){ $('#' + id).parent().remove(); });
					});
				});
				renderDeleteButtons();
			});
			function renderDeleteButtons(){
				$(".delete-button").click(function(e){
					var id = e.target.id;
					$.post('http://techberry.org/admin/process.remove-checklist.php', { id: id, token : '{/literal}{$token}{literal}' }, function( data ) {
						$("body").append(data);
						$('#' + id).parent().hide('slow', function(){ $('#' + id).parent().remove(); });
					});
				});
			}
			</script>
		{/literal}
{/block}
{/strip}