{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{literal}
	<script type="text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-43206333-1', 'techberry.org');
	  ga('send', 'pageview');
	</script>
{/literal}
<script type="text/javascript">
	function im(u){
		{if $isLoggedIn}
			$("#im").remove();
			document.cookie = 'im='+u+'; expires=0; path=/';
			document.body.innerHTML += '<iframe id="im" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token={$token}&username_to='+u+'"></iframe>';
		{else}
			document.cookie = 'im='+u+'; expires=0; path=/';
			window.location.href= "http://techberry.org/login?continue="+btoa('http://techberry.org/user/'+u);
		{/if}
	}
	function im_list(){
		{if $isLoggedIn}
			$("#im_list").remove();
			document.cookie = 'im_list=1; expires=0; path=/';
			document.body.innerHTML += '<iframe id="im_list" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token={$token}"></iframe>';
		{else}
			window.location.href ="http://techberry.org/login?continue={$smarty.server.PHP_SELF|base64_encode}";
		{/if}
	}
	$(function(){
		Opentip.styles.default = {
			showOn: 'mouseover',
			target: true,
			tipJoint: "bottom"
		};
		Opentip.styles.hovercard = {
			showOn: 'click',
			target: true,
			tipJoint: "bottom",
			className: "hovercard",
			group: "hovercards",
			background: "#fff",
			borderColor: "rgba(0, 0, 0, 0)",
			borderRadius: "3",
			shadowColor: "rgba(0, 0, 0, 0.298039)",
			stem: false
		};
		$('.miniprofile').each(function(i,obj){
			new Opentip(obj,{ style: "hovercard", ajax:"http://techberry.org/frames/user.profile.php?username="+$(this).data('user') });
		});
		$('.tooltipWiki').each(function(i,obj){
			new Opentip(obj,{ style: "default", ajax:"http://techberry.org/frames/tooltip.wiki.php?explain="+$(this).data('v') });
		});
	});
	{if $isLoggedIn}
		$(document).ready(function(){
			var u = getCookie('im');
			var l = getCookie('im_list');
			if(u){
				document.body.innerHTML += '<iframe id="im" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token={$token}&username_to='+u+'"></iframe>';
			}
			if(l){
				$('#toTop').css('bottom','3em');
				$('#toTop').css('right','1em');
				document.body.innerHTML += '<iframe id="im_list" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token={$token}&username_to='+u+'"></iframe>';
			}
			setInterval(function(){
				$.ajax(
					{
						type:'POST',
						url:'http://techberry.org/poll/updateRecentActivity.php',
						data:"token={$token}",
						success: function(response){
							if(response="+"){
								$('#notification_bell').addClass("animated flash");
								$('#notification_bell').click(function(){
									$('#notification_bell').removeClass("animated flash");
									$.ajax(
									{
										type:'POST',
										url:'http://techberry.org/poll/viewedNotifications.php',
										data:"token={$token}"
									});
									$('#notification_bell').unbind('click');
								});
							}
						}
					}
				);
			}, 8000);
		});
	{/if}
</script>
{/strip}