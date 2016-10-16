{extends file='/home/content/99/11499199/html/templates/frame.tpl'}
{strip}
{block name=content}
	{if $content}
		<div id="notification_wrap">{$content}</div>
	{else}
		<script type="text/javascript">
			{literal}
			$(document).ready(function(){
				$.ajaxSetup({
					cache: false
				});
				{/literal}
					var ajax_load = '
						<div class="wrap">
							<div class="load">
								<img src="http://techberry.org/images/ajax_load.gif" width="32" height="32"/>
							</div>
							<div class="message">Opening...</div>
						</div>
					';
					var loadUrl = "http://techberry.org/class.get.user.notifications.php?token={$sentToken|escape:'url'}&wTitle={$withTitle}";
				{literal}
				$("#notification_wrap").html(ajax_load).load(loadUrl);
			});
			{/literal}
		</script>
		<div id="notification_wrap">
		</div>
	{/if}
{/block}
{/strip}