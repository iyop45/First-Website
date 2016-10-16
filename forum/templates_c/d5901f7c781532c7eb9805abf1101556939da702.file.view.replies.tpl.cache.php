<?php /* Smarty version Smarty-3.1.16, created on 2014-04-05 14:44:33
         compiled from "/home/content/99/11499199/html/forum/templates/view.replies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1098978106532963831c1a54-11058523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5901f7c781532c7eb9805abf1101556939da702' => 
    array (
      0 => '/home/content/99/11499199/html/forum/templates/view.replies.tpl',
      1 => 1396733884,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1396729675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1098978106532963831c1a54-11058523',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532963834da676_79594007',
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
<?php if ($_valid && !is_callable('content_532963834da676_79594007')) {function content_532963834da676_79594007($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
_head_btn red">Admin</button></a><?php }?><div id="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_header_block"><a class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_link" href="http://techberry.org/account/" style="margin-top:13px"><?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
</a><a class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false"><span id="notification_bell"></span></a><span style="height:25px" class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_avatar"><img src="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->tpl_vars[\'avatar\']->value;?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_flyout" style="display:none"><?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'numberOfNotifications\']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>0) {?>/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php  $_smarty_tpl->tpl_vars[\'n\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'n\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'userBanner\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'n\']->key => $_smarty_tpl->tpl_vars[\'n\']->value) {
$_smarty_tpl->tpl_vars[\'n\']->_loop = true;
?>/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php if ($_smarty_tpl->tpl_vars[\'n\']->value[2]==1) {?>/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/message.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px"><a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
:</a> <?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[1];?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
 </div></div></div><?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'n\']->value[2]==2) {?>/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Sent request to: <a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
</a></div></div></div><?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'n\']->value[2]==3) {?>/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Contact request: <a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
</a></div></div></div><?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php }?>/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php } ?>/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php } else { ?>/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
<div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php echo $_smarty_tpl->tpl_vars[\'token\']->value;?>
/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
" src="about:blank"></iframe></div><?php echo '/*%%SmartyNocache:1098978106532963831c1a54-11058523%%*/<?php }?>/*/%%SmartyNocache:1098978106532963831c1a54-11058523%%*/';?>
</div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><?php if ($_smarty_tpl->tpl_vars['bannerLinksEnabled']->value==true) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['customBanner']->value) {?><?php echo $_smarty_tpl->tpl_vars['customBanner']->value;?>
<?php }?><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>style="padding-top:20px"<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><ul><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
title">Forums</div><a style="float:left" class="flatBlue <?php if (!$_smarty_tpl->tpl_vars['postExists']->value||!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_createReply']) {?>strikethrough<?php }?>" href="http://techberry.org/forum/create/r=<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
/">Create a reply</a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
directory_link"><a href="http://techberry.org/forum/">Root</a><?php if ($_smarty_tpl->tpl_vars['postExists']->value) {?> / <a href="http://techberry.org/forum/c=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryTitleLink']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</a> / <a href="http://techberry.org/forum/t=<?php echo $_smarty_tpl->tpl_vars['topic_id']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topicTitleLink']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topicTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</a> / <a href="http://techberry.org/forum/p=<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['postTitleLink']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['postTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?></div></li><li><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
new_event" style="display:none" class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
info_message"></div></li><?php if ($_smarty_tpl->tpl_vars['postExists']->value) {?><?php  $_smarty_tpl->tpl_vars['reply'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reply']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['replies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['reply']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->key => $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->_loop = true;
 $_smarty_tpl->tpl_vars['reply']->index++;
 $_smarty_tpl->tpl_vars['reply']->first = $_smarty_tpl->tpl_vars['reply']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['r']['first'] = $_smarty_tpl->tpl_vars['reply']->first;
?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list <?php if ($_smarty_tpl->tpl_vars['reply']->value['flagCount']>0&&$_smarty_tpl->tpl_vars['reply']->value['isPost']==0) {?>unpopular<?php }?>"><ul class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
side_list"><li><a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
/"><div data-user="<?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_bubble miniprofile" style="background-color:<?php echo $_smarty_tpl->tpl_vars['reply']->value['color'];?>
"><img class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_icon" src="<?php echo $_smarty_tpl->tpl_vars['reply']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reply']->value['title'];?>
"/></div></a></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
side_list_actions"><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['r']['first']) {?><a class="flatBlue" href="http://techberry.org/forum/edit/p=<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
/">Edit</a><a class="flatRed" href="http://techberry.org/forum/flag/p=<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_flagPost']) {?>onclick="q(); return false;"<?php }?>>Flag</a><?php } else { ?><a class="flatBlue" href="http://techberry.org/forum/edit/r=<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
/">Edit</a><a class="flatRed" href="http://techberry.org/forum/flag/r=<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_flagReply']) {?>onclick="q(); return false;"<?php }?>>Flag</a><?php }?></li></ul><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
reply_content"><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['r']['first']) {?><a class="light" href="http://techberry.org/forum/p=<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['postTitleLink']->value, ENT_QUOTES, 'UTF-8', true);?>
"><h2><?php echo htmlspecialchars(ucfirst($_smarty_tpl->tpl_vars['postTitle']->value), ENT_QUOTES, 'UTF-8', true);?>
</h2></a><?php }?><p class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_description"><?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>
</p></div></li><?php } ?><?php } else { ?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
center_message">This post does not exist :(</li><?php }?></ul></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
</div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>alertify.log("<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
","<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
");<?php } ?></script><?php }?></body><?php }} ?>
