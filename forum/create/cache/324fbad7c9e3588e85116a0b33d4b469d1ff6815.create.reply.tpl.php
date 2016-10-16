<?php /*%%SmartyHeaderCode:12313679605330391b956434-36172716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '324fbad7c9e3588e85116a0b33d4b469d1ff6815' => 
    array (
      0 => '/home/content/99/11499199/html/forum/templates/create.reply.tpl',
      1 => 1393708217,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1405382658,
      2 => 'file',
    ),
    '75b19db522df5c605312c386535bfde906373629' => 
    array (
      0 => '/home/content/99/11499199/html/templates/config/css.prefix.conf',
      1 => 1403948323,
      2 => 'file',
    ),
    '0b5dbed8cad242fd15e23598935aea94b2c20f6b' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/header.tpl',
      1 => 1404158428,
      2 => 'file',
    ),
    'ac453fae009a29cf1a7e9aace4c394d86fa3be19' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/banner.tpl',
      1 => 1404596129,
      2 => 'file',
    ),
    'e16a1ee9d5bae846a905efbcaa4e8c0f243f7b2e' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/footer.tpl',
      1 => 1404864081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12313679605330391b956434-36172716',
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53c6cd462b5a27_00220219',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'isLoggedIn' => 0,
    'token' => 1,
    'startOfBody' => 0,
    'loginError' => 0,
    'url' => 0,
    'username' => 1,
    'avatar' => 1,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'disableFooter' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => true,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c6cd462b5a27_00220219')) {function content_53c6cd462b5a27_00220219($_smarty_tpl) {?><!doctype html>
<!--
 _________  _______   ________  ___  ___  ________  _______   ________  ________      ___    ___     
|\___   ___\\  ___ \ |\   ____\|\  \|\  \|\   __  \|\  ___ \ |\   __  \|\   __  \    |\  \  /  /|    
\|___ \  \_\ \   __/|\ \  \___|\ \  \\\  \ \  \|\ /\ \   __/|\ \  \|\  \ \  \|\  \   \ \  \/  / /    
     \ \  \ \ \  \_|/_\ \  \    \ \   __  \ \   __  \ \  \_|/_\ \   _  _\ \   _  _\   \ \    / /     
      \ \  \ \ \  \_|\ \ \  \____\ \  \ \  \ \  \|\  \ \  \_|\ \ \  \\  \\ \  \\  \|   \/  /  /      
       \ \__\ \ \_______\ \_______\ \__\ \__\ \_______\ \_______\ \__\\ _\\ \__\\ _\ __/  / /        
        \|__|  \|_______|\|_______|\|__|\|__|\|_______|\|_______|\|__|\|__|\|__|\|__|\___/ /         
                                                                                    \|___|/        
-->
<head>
	
	<meta http-equiv="Content-Type" content="<?php echo $_smarty_tpl->tpl_vars['contentType']->value;?>
; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" /><title><?php ob_start();?><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['metaTitle']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo (($tmp = @$_tmp1)===null||$tmp==='' ? "TechBerry" : $tmp);?>
 - TechBerry</title><link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon"/><meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metaDescription']->value;?>
"><script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script><script src="http://techberry.org/js/main.js"></script><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/messenger/1.4.0/js/messenger.min.js"></script><script type="text/javascript">
function readCookie(a){a+="=";for(var b=document.cookie.split(/;\s*/),c=b.length-1;c>=0;c--)if(!b[c].indexOf(a))return b[c].replace(a,"")}1==readCookie("invert")&&function(){var a="html {-webkit-filter: invert(100%);-moz-filter: invert(100%);-o-filter: invert(100%);-ms-filter: invert(100%); }",b=document.getElementsByTagName("head")[0],c=document.createElement("style");if(window.counter){if(window.counter++,0==window.counter%2)var a="html {-webkit-filter: invert(0%); -moz-filter:    invert(0%); -o-filter: invert(0%); -ms-filter: invert(0%); }"}else window.counter=1;c.type="text/css",c.styleSheet?c.styleSheet.cssText=a:c.appendChild(document.createTextNode(a)),b.appendChild(c)}();
</script><?php if ($_smarty_tpl->tpl_vars['inlineCSS']->value) {?><style type="text/css"><?php echo $_smarty_tpl->tpl_vars['inlineCSS']->value;?>
</style>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javaScriptLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"></script>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cssLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" type="text/css" media="all">
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['inlineScript']->value) {?>
	<script type="text/javascript">
		<?php echo $_smarty_tpl->tpl_vars['inlineScript']->value;?>

	</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?>
	
	<script type="text/javascript">
$(document).ready(function(){$("#toTop").hide();$(function(){$(window).scroll(function(){if($(this).scrollTop()>100)$("#toTop").fadeIn();else $("#toTop").fadeOut()});$("#toTop").click(function(){$("body,html").animate({scrollTop:0},800);return false})})});
Messenger.options = {extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-left',theme: 'flat'}
	</script>
	
<?php }?>
<link rel="stylesheet" href="http://techberry.org/css/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['CSSPage']->value)===null||$tmp==='' ? 'global' : $tmp);?>
/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['CSSTheme']->value)===null||$tmp==='' ? 'purple' : $tmp);?>
/main.css" type="text/css" media="all">


	
	
		<script type="text/javascript">
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-43206333-1', 'techberry.org');
		  ga('send', 'pageview');
		</script>
	<script type="text/javascript">function im(u){$("#im").remove();document.cookie = 'im='+u+'; expires=0; path=/';document.body.innerHTML += '<iframe id="im" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=adee98dad5c5775f32abef2f132c7694&username_to='+u+'"></iframe>';}function im_list(){$("#im_list").remove();document.cookie = 'im_list=1; expires=0; path=/';document.body.innerHTML += '<iframe id="im_list" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=adee98dad5c5775f32abef2f132c7694"></iframe>';}function renderDynamicTips(){Opentip.styles.default = {showOn: 'mouseover',target: true,tipJoint: "bottom"};Opentip.styles.hovercard = {showOn: 'click',target: true,tipJoint: "bottom",className: "hovercard",group: "hovercards",background: "#fff",borderColor: "rgba(0, 0, 0, 0)",borderRadius: "3",shadowColor: "rgba(0, 0, 0, 0.298039)",stem: false,showEffect: 'blindDown',hideTriggers:[document,document],hideOn:['keydown','click']};$('.miniprofile').each(function(i,obj){new Opentip(obj,{ style: "hovercard", ajax:"http://techberry.org/frames/user.profile.php?username="+$(this).data('user') });});$('.tooltipWiki').each(function(i,obj){new Opentip(obj,{ style: "default", ajax:"http://techberry.org/frames/tooltip.wiki.php?explain="+$(this).data('v') });});}$(function (){renderDynamicTips();});function checkAuth(){var logged = (function(){var isLogged = null;$.ajax({'async': false,'global': false,'url': 'http://techberry.org/loginStatus?token=adee98dad5c5775f32abef2f132c7694','success': function(resp) {isLogged = (resp === "1");}});return isLogged;})();return logged;}$(document).ready(function(){var u = getCookie('im');var l = getCookie('im_list');if(u){document.body.innerHTML += '<iframe id="im" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=adee98dad5c5775f32abef2f132c7694&username_to='+u+'"></iframe>';}if(l){$('#toTop').css('bottom','3em');$('#toTop').css('right','1em');document.body.innerHTML += '<iframe id="im_list" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=adee98dad5c5775f32abef2f132c7694&username_to='+u+'"></iframe>';}setInterval(function(){$.ajax({type:'POST',url:'http://techberry.org/poll/updateRecentActivity.php',data:"token=adee98dad5c5775f32abef2f132c7694"});}, 45000);});</script>
</head>
<body><div id="m_bg"></div><div id="g_h"><div id="g_h_w"><a href="http://techberry.org/process.logout.php?token=adee98dad5c5775f32abef2f132c7694"><button class="g_h_head_btn blue">Logout</button></a><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_header_block"><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/" style="margin-top:13px"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false"><span id="notification_bell"></span></a><span style="height:25px" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_flyout" style="display:none"><div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" src="about:blank"></iframe></div></div></div><a href="http://techberry.org/"><div class="g_logo"></div></a></div></div><div id="g_banner"><noscript><div id="noscript"><p><span>We strongly recommend that you enable javascript</span></p></div></noscript><nav class="g_main-nav sans-serif"><div class="g_container"><ul><li style="width:15%"><a href="http://techberry.org/" rel="home" class="default">Home</a></li><li style="width:15%"><a href="http://techberry.org/platforms/" class="default">Platforms</a></li><li style="width:15%"><a href="http://techberry.org/forum/" class="active">Forums</a></li><li style="width:15%"><a href="http://techberry.org/rankings/" rel="me" class="default">Users</a></li><li style="width:15%"><a href="http://techberry.org/support/" rel="me" class="default">Support</a></li><form action="http://techberry.org/search/" method="GET" id="g_search_form"><input id="g_search_input" name="query" placeholder="search" type="text"><input id="g_search_submit" type="submit" value=""><input type="hidden" value="1" name="search"/></form></ul></div></nav></div><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div style="padding-top:20px"><div class="g_wrap"><div id="g_page" style="height:100%"><ul><li class="f_list" style="margin-bottom:20px"><div class="f_title">Forums</div><a style="float:left" class="flatBlue strikethrough" href="#" onclick="q(); return false;">Submit</a><a style="float:left" class="flatRed" href="javascript:history.back()">Cancel</a><div class="f_directory_link"><a href="http://techberry.org/forum/">Root</a> / <a href="http://techberry.org/forum/c=4/this-is-a-test-category-title">this is a test category title</a> / <a href="http://techberry.org/forum/t=3/this-is-a-testtopic-title">this is a testtopic title</a> / <a href="http://techberry.org/forum/p=8/vcbsgdhsghsgh">vcbsgdhsghsgh</a></div>( Creating a reply )</li><li><div class="f_create_content"><div id="f_new_event" style="display:none" class="f_info_message"></div><form name="submit_new_reply_form" method="post" action="http://techberry.org/forum/create/submit/r=8/"><textarea name="content" class="textarea" placeholder="Content"></textarea><input type="hidden" name="token" value="adee98dad5c5775f32abef2f132c7694"/></form></div></li></ul></div></div><div id="g_f_w"><div id="g_f"><div class="g_f_top"><div class="g_f_logo"></div><!--<div style="float:left;margin:12px 0"><a name="freelancer_Hireme" user_id="10522598" size="small" annotation="inline" title="Hire me! on Freelancer.com" href="https://www.freelancer.co.uk/users/10522598.html">MySQL Developer</a></div><script type="text/javascript">(function() {var po = document.createElement("script");po.type = "text/javascript";po.async = true;po.src = ("https:" == document.location.protocol ? "https" : "http") + "://www.freelancer.co.uk/js/hireme/widget.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(po, s);})();</script>--><ul class="g_f_links"><li><a href="http://techberry.org/help/sitemap/">Site Map</a></li><li><a href="http://techberry.org/about/">About Us</a></li><li><a href="http://techberry.org/statistics/">Statistics</a></li><li><a href="http://techberry.org/help/contact/" rel="nofollow">Contact Us</a></li></ul><ul id="colorPicker"><a href="http://techberry.org/changeTheme.php?v=red"><li class="red"></li></a><a href="http://techberry.org/changeTheme.php?v=green"><li class="green"></li></a><a href="http://techberry.org/changeTheme.php?v=blue"><li class="blue"></li></a><a href="http://techberry.org/changeTheme.php?v=yellow"><li class="yellow"></li></a><a href="http://techberry.org/changeTheme.php?v=purple"><li class="purple"></li></a></ul></div><img onclick="javascript:location.href='http://techberry.org/invert.php?token=adee98dad5c5775f32abef2f132c7694'" width="34" height="89" src="http://techberry.org/images/lever_up.png" onmouseover="this.src = 'http://techberry.org/images/lever_hit.png'" onmouseout="this.src = 'http://techberry.org/images/lever_up.png'" style="float:left;margin-right:50px;cursor:pointer"><p class="g_f_segment">Access tools and platforms for basic programming through to maintaining large applications and programs. We strive to make a strong and collaborative community of active and willing programmers of experience within all areas of computing. I am always looking to add new features that will open up programming to more people and make learning a new language easy.</p><p class="g_f_segment">TechBerry &#174; 2013. All rights reserved. <a href="http://techberry.org/help/terms/" target="_blank" rel="nofollow">Terms and Conditions of Use</a> - <a href="http://techberry.org/help/privacy/" target="_blank" rel="nofollow">Privacy Policy</a> - <a href="#" rel="nofollow" onclick="reportBug(); return false;">Report a bug</a></p></div></div></div></div><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><script type="text/javascript">$(".shortened").shorten(),function(){$(function(){return $(".age.now").attr("datetime",new Date),$(".age.default").age(),$(".age.tiny").age({style:"tiny"}),$(".age.expired").age({expired:"expired"}),$(".age.pending").age({pending:"pending"})})}.call(this);</script><script type="text/javascript">
			$(document).ready(function () {
				$(".loadMore").click(function () {
					var t = this;
					$.get("http://techberry.org/ajax/loadMore.php?info="+$(t).attr('data-info')+"&from="+$(t).attr('data-from'), function (a){
						if(a=='false'){
							$("#contentList").append('<h2 style="text-align:center;margin-top:5px">End of the line</h2>');
							$(t).remove();
						}else{
							$(t).attr("data-from", parseInt($(t).attr("data-from"))+parseInt(20))
							$("#contentList").append(a);
						}
					})
				}), $(".pointsNeeded").click(function (a) {
					var b = $(this).attr("data-action");
					$.get("http://techberry.org/ajax/actions.php?name=" + b, function (a) {
						createAlert("log", "Requires " + a + " points"), $(this).attr("onclick", "createAlert('log','Requires " + a + " points')")
					}), a.preventDefault()
				})
			});
			function reportBug(){
				// Initialize
				$("body").htmlfeedback();
				
				// Show HTMLFeedback immediatly
				$("body").htmlfeedback("show");
				
				$(document.body).append('<div id="draggable"><p onclick="exitBugReport()">test</p></div>');
				$('#draggable').css('position', 'fixed');
				$('#draggable').css('width', '150px');
				$('#draggable').css('height', '150px');
				$('#draggable').css('z-index', '5000');
				$('#draggable').css('top', '50%');
				$('#draggable').css('left', '50%');
				$('#draggable').css('margin-left', '-50px');
				$('#draggable').css('margin-top', '-50px');
				$('#draggable').css('background-color', 'red');
				$( "#draggable" ).draggable();
			}
			
			function exitBugReport(){
				$("body").htmlfeedback("hide");
				$( "#draggable" ).remove();
			}
			</script></body><?php }} ?>
