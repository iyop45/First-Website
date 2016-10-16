<?php /* Smarty version Smarty-3.1.16, created on 2014-12-16 01:27:34
         compiled from "/home/content/99/11499199/html/templates/head_js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:643073241548fecf6d52d62-10813302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f33c80ab595420f3fcf884425081220e875f19be' => 
    array (
      0 => '/home/content/99/11499199/html/templates/head_js.tpl',
      1 => 1418665389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643073241548fecf6d52d62-10813302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isLoggedIn' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548fecf6dd2b82_16972883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fecf6dd2b82_16972883')) {function content_548fecf6dd2b82_16972883($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

	<script type="text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-43206333-1', 'techberry.org');
	  ga('send', 'pageview');
	</script>
<script type="text/javascript">function im(u){<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$("#im").remove();document.cookie = 'im='+u+'; expires=0; path=/';document.body.innerHTML += '<iframe id="im" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';<?php } else { ?>document.cookie = 'im='+u+'; expires=0; path=/';window.location.href= "http://techberry.org/login?continue="+btoa('http://techberry.org/user/'+u);<?php }?>}function im_list(){<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$("#im_list").remove();document.cookie = 'im_list=1; expires=0; path=/';document.body.innerHTML += '<iframe id="im_list" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"></iframe>';<?php } else { ?>window.location.href ="http://techberry.org/login?continue=<?php echo base64_encode($_SERVER['PHP_SELF']);?>
";<?php }?>}$(function(){Opentip.styles.default = {showOn: 'mouseover',target: true,tipJoint: "bottom"};Opentip.styles.hovercard = {showOn: 'click',target: true,tipJoint: "bottom",className: "hovercard",group: "hovercards",background: "#fff",borderColor: "rgba(0, 0, 0, 0)",borderRadius: "3",shadowColor: "rgba(0, 0, 0, 0.298039)",stem: false};$('.miniprofile').each(function(i,obj){new Opentip(obj,{ style: "hovercard", ajax:"http://techberry.org/frames/user.profile.php?username="+$(this).data('user') });});$('.tooltipWiki').each(function(i,obj){new Opentip(obj,{ style: "default", ajax:"http://techberry.org/frames/tooltip.wiki.php?explain="+$(this).data('v') });});});<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$(document).ready(function(){var u = getCookie('im');var l = getCookie('im_list');if(u){document.body.innerHTML += '<iframe id="im" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';}if(l){$('#toTop').css('bottom','3em');$('#toTop').css('right','1em');document.body.innerHTML += '<iframe id="im_list" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';}setInterval(function(){$.ajax({type:'POST',url:'http://techberry.org/poll/updateRecentActivity.php',data:"token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",success: function(response){if(response="+"){$('#notification_bell').addClass("animated flash");$('#notification_bell').click(function(){$('#notification_bell').removeClass("animated flash");$.ajax({type:'POST',url:'http://techberry.org/poll/viewedNotifications.php',data:"token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"});$('#notification_bell').unbind('click');});}}});}, 8000);});<?php }?></script><?php }} ?>
