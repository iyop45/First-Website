{extends file='/home/content/99/11499199/html/templates/frame.tpl'}
{block name=content}
	<div class="im_bar">
		<div class="im_toggle_bar" onclick="parent.toggle_im();">
			{$sentUsername|escape:'html'}
		</div>
		<div id="im_actions">
			<div id="im_following" onclick="parent.im_list();">
				Following
			</div>
			<div id="im_close" onclick="parent.remove_im();">
				Close
			</div>
		</div>
	</div>
	{if $content}
		<div id="im_wrap">{$content}</div>
	{else}
		<script type="text/javascript">
			{literal}
			$(document).ready(function(){
				$.ajaxSetup({
					cache: false
				});
			{/literal}
					var ajax_load = "<div class='wrap im_content'><div class='load'><img src='http://techberry.org/images/ajax_load.gif' width='32' height='32'/></div><div class='message'>Opening...</div></div>";
					var loadUrl = "http://techberry.org/class.get.instant_messenger.php?token={$sentToken}&username_to={$sentUsername}";
			{literal}
				$("#im_wrap").html(ajax_load).load(loadUrl);
			});
			{/literal}
		</script>
		<div id="im_wrap">
		</div>
	{/if}
{/block}