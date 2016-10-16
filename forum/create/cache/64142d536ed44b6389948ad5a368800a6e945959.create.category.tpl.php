<?php /*%%SmartyHeaderCode:899027404532961bf153da0-40548331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64142d536ed44b6389948ad5a368800a6e945959' => 
    array (
      0 => '/home/content/99/11499199/html/forum/templates/create.category.tpl',
      1 => 1400057568,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1406054555,
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
      1 => 1406324761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '899027404532961bf153da0-40548331',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d55a46cd8373_54944818',
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
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d55a46cd8373_54944818')) {function content_53d55a46cd8373_54944818($_smarty_tpl) {?><!doctype html>
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
	<script type="text/javascript">function im(u){window.location.href= "http://techberry.org/login.php?continue=26e7fd427d39135389ac7f81615fc0cd";}function im_list(){window.location.href ="http://techberry.org/login.php?continue=26e7fd427d39135389ac7f81615fc0cd";}function renderDynamicTips(){Opentip.styles.default = {showOn: 'mouseover',target: true,tipJoint: "bottom"};Opentip.styles.hovercard = {showOn: 'click',target: true,tipJoint: "bottom",className: "hovercard",group: "hovercards",background: "#fff",borderColor: "rgba(0, 0, 0, 0)",borderRadius: "3",shadowColor: "rgba(0, 0, 0, 0.298039)",stem: false,showEffect: 'blindDown',hideTriggers:[document,document],hideOn:['keydown','click']};$('.miniprofile').each(function(i,obj){new Opentip(obj,{ style: "hovercard", ajax:"http://techberry.org/frames/user.profile.php?username="+$(this).data('user') });});$('.tooltipWiki').each(function(i,obj){new Opentip(obj,{ style: "default", ajax:"http://techberry.org/frames/tooltip.wiki.php?explain="+$(this).data('v') });});}$(function (){renderDynamicTips();});</script>
</head>
<body><div id="m_bg"></div><div id="g_h"><div id="g_h_w"><a href="http://techberry.org/login.php?ref=1" onclick="ShowLogin(this); return false;" rel="nofollow"><button class="g_h_head_btn blue">Sign in</button></a><form style="visibility:hidden" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="g_login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="aHR0cDovL3RlY2hiZXJyeS5vcmcvZm9ydW0vY3JlYXRlLw==" name="continue"/><input type="hidden" value="58f5ae1fc697fa9bd0be74cfd2a07b4a1aa4de2f" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><a href="http://techberry.org/"><div class="g_logo"></div></a></div></div><div id="g_banner"><noscript><div id="noscript"><p><span>We strongly recommend that you enable javascript</span></p></div></noscript><nav class="g_main-nav sans-serif"><div class="g_container"><ul><li style="width:15%"><a href="http://techberry.org/" rel="home" class="default">Home</a></li><li style="width:15%"><a href="http://techberry.org/platforms/" class="default">Platforms</a></li><li style="width:15%"><a href="http://techberry.org/forum/" class="active">Forums</a></li><li style="width:15%"><a href="http://techberry.org/rankings/" rel="me" class="default">Users</a></li><li style="width:15%"><a href="http://techberry.org/support/" rel="me" class="default">Support</a></li><form action="http://techberry.org/search/" method="GET" id="g_search_form"><input id="g_search_input" name="query" placeholder="search" type="text"><input id="g_search_submit" type="submit" value=""><input type="hidden" value="1" name="search"/></form></ul></div></nav></div><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div style="padding-top:20px"><div class="g_wrap"><div id="g_page" style="height:100%"><ul><li class="f_list" style="margin-bottom:20px"><div class="f_title">Forums</div><a style="float:left" class="flatLocked strikethrough tooltipWiki" onclick="q(); return false;" data-v="forum:category:create:lackPrivilege" href="#">Submit</a><a style="float:left" class="flatRed" href="javascript:history.back()">Cancel</a><div class="f_directory_link"><a href="http://techberry.org/forum/">Root</a></div>( Creating a category )</li><li><div class="f_create_content"><div class="f_info_message">You have insufficient privileges to create a category</div><div id="f_new_event" style="display:none" class="f_info_message"></div><form name="submit_new_category_form" method="post" action="http://techberry.org/forum/create/submit/c/"><input name="title" type="text" class="input_text" placeholder="Title"/><textarea name="content" class="textarea" placeholder="Description"></textarea><input type="hidden" name="token" value="58f5ae1fc697fa9bd0be74cfd2a07b4a1aa4de2f"/></form></div></li></ul></div></div><div id="g_f_w"><div id="g_f"><div class="g_f_top"><div class="g_f_logo"></div><!--<div style="float:left;margin:12px 0"><a name="freelancer_Hireme" user_id="10522598" size="small" annotation="inline" title="Hire me! on Freelancer.com" href="https://www.freelancer.co.uk/users/10522598.html">MySQL Developer</a></div><script type="text/javascript">(function() {var po = document.createElement("script");po.type = "text/javascript";po.async = true;po.src = ("https:" == document.location.protocol ? "https" : "http") + "://www.freelancer.co.uk/js/hireme/widget.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(po, s);})();</script>--><ul class="g_f_links"><li><a href="http://techberry.org/help/sitemap/">Site Map</a></li><li><a href="http://techberry.org/about/">About Us</a></li><li><a href="http://techberry.org/help/contact/" rel="nofollow">Contact Us</a></li></ul><ul id="colorPicker"><a href="http://techberry.org/changeTheme.php?v=red"><li class="red"></li></a><a href="http://techberry.org/changeTheme.php?v=green"><li class="green"></li></a><a href="http://techberry.org/changeTheme.php?v=blue"><li class="blue"></li></a><a href="http://techberry.org/changeTheme.php?v=yellow"><li class="yellow"></li></a><a href="http://techberry.org/changeTheme.php?v=purple"><li class="purple"></li></a></ul></div><img onclick="javascript:location.href='http://techberry.org/invert.php?token=58f5ae1fc697fa9bd0be74cfd2a07b4a1aa4de2f'" width="34" height="89" src="http://techberry.org/images/lever_up.png" onmouseover="this.src = 'http://techberry.org/images/lever_hit.png'" onmouseout="this.src = 'http://techberry.org/images/lever_up.png'" style="float:left;margin-right:50px;cursor:pointer"><p class="g_f_segment">Access tools and platforms for basic programming through to maintaining large applications and programs. We strive to make a strong and collaborative community of active and willing programmers of experience within all areas of computing. I am always looking to add new features that will open up programming to more people and make learning a new language easy.</p><p class="g_f_segment">TechBerry &#174; 2013. All rights reserved. <a href="http://techberry.org/help/terms/" target="_blank" rel="nofollow">Terms and Conditions of Use</a> - <a href="http://techberry.org/help/privacy/" target="_blank" rel="nofollow">Privacy Policy</a> - <a href="#" rel="nofollow" onclick="reportBug(); return false;">Report a bug</a></p></div></div></div></div><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><script type="text/javascript">$(".shortened").shorten(),function(){$(function(){return $(".age.now").attr("datetime",new Date),$(".age.default").age(),$(".age.tiny").age({style:"tiny"}),$(".age.expired").age({expired:"expired"}),$(".age.pending").age({pending:"pending"})})}.call(this);</script><script type="text/javascript">
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
				
				$.ajax({
					type: "POST",
					url: "http://techberry.org/frames/report.bug.php",
					data: {
						'token' : '{$token}'
					},
					dataType: "text",
					success: function(d){
						$(document.body).append('<div id="bug-report">'+d+'</div>');
					},
					error: function(){
						Messenger().post({
							message: "Unable to load bug report form",
							type: 'error',
							hideAfter: 10,
							hideOnNavigate: true
						});
						$("body").htmlfeedback("hide");
						$("#bug-report").remove();
					}
				});
				
				$("#bug-report").draggable();
			}
			
			function exitBugReport(){
				$("body").htmlfeedback("hide");
				$( "#bug-report" ).remove();
			}
			</script></body><?php }} ?>
