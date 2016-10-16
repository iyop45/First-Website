{extends file='/home/content/99/11499199/html/templates/frame.tpl'}
{block name=content}
	<div class="im_bar">
		<div class="im_toggle_bar" onclick="parent.toggle_im_friends_list();" style="color:rgb(105, 219, 105)">
			Online following
		</div>
		<div id="im_close" onclick="parent.remove_im_friends_list();">
			Close
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
					var loadUrl = "http://techberry.org/class.get.online_following.php?token={$sentToken}";
			{literal}
				$("#im_wrap").html(ajax_load).load(loadUrl);
			});
			{/literal}
		</script>
		<div id="im_wrap">
		</div>
	{/if}
{/block}