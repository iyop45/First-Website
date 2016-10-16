<?php /* Smarty version Smarty-3.1.16, created on 2014-04-05 14:49:47
         compiled from "/home/content/99/11499199/html/forum/templates/view.categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92026182053296044488f63-07474484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60053bd598c7a6f5c44b19a83d5583dec98f11e0' => 
    array (
      0 => '/home/content/99/11499199/html/forum/templates/view.categories.tpl',
      1 => 1395827982,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1396729675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92026182053296044488f63-07474484',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532960447318d9_41555771',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'token' => 1,
    'startOfBody' => 0,
    'announcements' => 0,
    'announcement' => 0,
    'newBadgeMessage' => 0,
    'isLoggedIn' => 0,
    'userBanner' => 1,
    'url' => 0,
    'loginError' => 0,
    'ROOTURL' => 0,
    'privilege' => 0,
    'username' => 1,
    'avatar' => 1,
    'numberOfNotifications' => 1,
    'n' => 1,
    'bannerLinksEnabled' => 0,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532960447318d9_41555771')) {function content_532960447318d9_41555771($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

	<script type="text/javascript">
		function im(u){
			$("#im").remove();
			document.body.innerHTML += '<iframe id="im" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';
		}
		$(function(){
			Opentip.styles.miniprofile = {
				showOn: 'mouseover',
				target: true,
				tipJoint: "bottom"
			};
			$('.miniprofile').each(function(i,obj){
				new Opentip(obj,{ style: "miniprofile", ajax:"http://techberry.org/frames/user.profile.php?username="+$(this).data('user') });
			});
		});
	</script>
</head>
<body><?php echo $_smarty_tpl->tpl_vars['startOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['announcements']->value) {?><?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
?><div class="global_notification"><p><span><?php echo $_smarty_tpl->tpl_vars['announcement']->value;?>
</span><span onclick="var x=this.parentNode.parentNode;x.parentNode.removeChild(x);document.cookie='sa=1';" class="removeNtf uOnHover">remove</span></p></div><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['newBadgeMessage']->value) {?><div class="success_notification"><p><span><?php echo $_smarty_tpl->tpl_vars['newBadgeMessage']->value;?>
</span></p></div><?php }?><noscript><div id="noscript"><p><span>We strongly recommend that you enable javascript</span></p></div></noscript><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
bg"></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value==false) {?><?php if ($_smarty_tpl->tpl_vars['userBanner']->value=='loginError') {?><form accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo base64_encode($_smarty_tpl->tpl_vars['url']->value);?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><div id="login_error" class="error"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</div><?php } else { ?><a href="http://techberry.org/login.php?ref=1" onclick="ShowLogin(this); return false;" rel="nofollow"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Sign in</button></a><form style="visibility:hidden" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo base64_encode($_smarty_tpl->tpl_vars['url']->value);?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="<?php echo $_smarty_tpl->tpl_vars['ROOTURL']->value;?>
register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/process.logout.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Logout</button></a><?php if ($_smarty_tpl->tpl_vars['privilege']->value>1) {?><a href="http://techberry.org/admin/"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn red">Admin</button></a><?php }?><div id="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_header_block"><a class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_link" href="http://techberry.org/account/" style="margin-top:13px"><?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
</a><a class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false"><span id="notification_bell"></span></a><span style="height:25px" class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_avatar"><img src="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->tpl_vars[\'avatar\']->value;?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_flyout" style="display:none"><?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'numberOfNotifications\']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>0) {?>/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php  $_smarty_tpl->tpl_vars[\'n\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'n\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'userBanner\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'n\']->key => $_smarty_tpl->tpl_vars[\'n\']->value) {
$_smarty_tpl->tpl_vars[\'n\']->_loop = true;
?>/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php if ($_smarty_tpl->tpl_vars[\'n\']->value[2]==1) {?>/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/message.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px"><a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
:</a> <?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[1];?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
 </div></div></div><?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'n\']->value[2]==2) {?>/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Sent request to: <a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
</a></div></div></div><?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'n\']->value[2]==3) {?>/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Contact request: <a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
</a></div></div></div><?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php }?>/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php } ?>/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php } else { ?>/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
<div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php echo $_smarty_tpl->tpl_vars[\'token\']->value;?>
/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
" src="about:blank"></iframe></div><?php echo '/*%%SmartyNocache:92026182053296044488f63-07474484%%*/<?php }?>/*/%%SmartyNocache:92026182053296044488f63-07474484%%*/';?>
</div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><?php if ($_smarty_tpl->tpl_vars['bannerLinksEnabled']->value==true) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['customBanner']->value) {?><?php echo $_smarty_tpl->tpl_vars['customBanner']->value;?>
<?php }?><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>style="padding-top:20px"<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><ul><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
title">Forums</div><a style="float:left" class="flatBlue <?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_createCategory']) {?>strikethrough<?php }?>" href="http://techberry.org/forum/create/c/" <?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_createCategory']) {?>onclick="q(); return false;"<?php }?>>Submit a category</a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
directory_link"><a href="http://techberry.org/forum/">Root</a></div></li><?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['category']->value['pending']==1&&$_smarty_tpl->tpl_vars['pendingTitle']->value==1) {?><?php $_smarty_tpl->tpl_vars["pendingTitle"] = new Smarty_variable(0, null, 0);?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list">Pending Categories</li><?php }?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list"><a href="http://techberry.org/forum/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['titleLink'];?>
"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_bubble" style="background-color:<?php echo $_smarty_tpl->tpl_vars['category']->value['color'];?>
"><img data-ot="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_icon" src="<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"/></div></a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_info"><a class="light" href="http://techberry.org/forum/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['titleLink'];?>
"><h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2></a><p class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_stats"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_value"><?php echo $_smarty_tpl->tpl_vars['category']->value['views'];?>
</span>Views</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_value"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['category']->value['topics'])===null||$tmp==='' ? 0 : $tmp);?>
</span>Topics</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_value"><?php echo $_smarty_tpl->tpl_vars['category']->value['date'];?>
</span>Age</div><?php if ($_smarty_tpl->tpl_vars['category']->value['pending']==1) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_meter" title="<?php echo $_smarty_tpl->tpl_vars['category']->value['commits'];?>
 committed ( <?php echo $_smarty_tpl->tpl_vars['category']->value['meterWidth'];?>
% )"><div class="meter"><span style="width:<?php echo $_smarty_tpl->tpl_vars['category']->value['meterWidth'];?>
%"></span></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a href="http://techberry.org/forum/commit/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" class="flatBlue" <?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_commitCategory']) {?>onclick="q(); return false;"<?php }?>>Commit</a></div><?php } else { ?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a href="http://techberry.org/forum/flag/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" class="flatRed" <?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_flagCategory']) {?>onclick="q(); return false;"<?php }?>>Flag</a></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a href="http://techberry.org/forum/edit/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/" class="flatBlue">Edit category</a></div><?php }?></div></li><?php } ?></ul></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
</div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>alertify.log("<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
","<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
");<?php } ?></script><?php }?></body><?php }} ?>
