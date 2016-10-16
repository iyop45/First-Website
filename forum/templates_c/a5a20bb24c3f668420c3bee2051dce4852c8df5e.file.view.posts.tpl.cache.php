<?php /* Smarty version Smarty-3.1.16, created on 2014-03-19 02:29:37
         compiled from "/home/content/99/11499199/html/forum/templates/view.posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129666943253296381520064-67275150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5a20bb24c3f668420c3bee2051dce4852c8df5e' => 
    array (
      0 => '/home/content/99/11499199/html/forum/templates/view.posts.tpl',
      1 => 1394301178,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1395220739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129666943253296381520064-67275150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'startOfBody' => 0,
    'announcements' => 0,
    'announcement' => 0,
    'isLoggedIn' => 0,
    'userBanner' => 1,
    'url' => 0,
    'token' => 1,
    'loginError' => 0,
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
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53296381942656_18982030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53296381942656_18982030')) {function content_53296381942656_18982030($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

</head>
<body><?php echo $_smarty_tpl->tpl_vars['startOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['announcements']->value) {?><?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
?><div class="global_notification"><p><span><?php echo $_smarty_tpl->tpl_vars['announcement']->value;?>
</span><span onclick="var x=this.parentNode.parentNode;x.parentNode.removeChild(x);document.cookie='sa=1';" class="removeNtf uOnHover">remove</span></p></div><?php } ?><?php }?><noscript><div id="noscript"><p><span>We strongly recommend that you enable javascript</span></p></div></noscript><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
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
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/logout.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Logout</button></a><?php if ($_smarty_tpl->tpl_vars['privilege']->value>1) {?><a href="http://techberry.org/admin/"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn red">Admin</button></a><?php }?><div id="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_header_block"><a class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_link" href="http://techberry.org/account.php" style="margin-top:13px"><?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
</a><a class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_link" href="http://techberry.org/account.php?v=notifications" onclick="notifications(); return false"><span id="notification_bell"></span></a><span style="height:25px" class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_avatar"><img src="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->tpl_vars[\'avatar\']->value;?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_flyout" style="display:none"><?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'numberOfNotifications\']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>0) {?>/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php  $_smarty_tpl->tpl_vars[\'n\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'n\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'userBanner\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'n\']->key => $_smarty_tpl->tpl_vars[\'n\']->value) {
$_smarty_tpl->tpl_vars[\'n\']->_loop = true;
?>/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php if ($_smarty_tpl->tpl_vars[\'n\']->value[2]==1) {?>/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/message.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px"><a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
:</a> <?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[1];?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
 </div></div></div><?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'n\']->value[2]==2) {?>/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Sent request to: <a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
</a></div></div></div><?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'n\']->value[2]==3) {?>/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Contact request: <a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
</a></div></div></div><?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php }?>/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php } ?>/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php } else { ?>/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
<div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php echo $_smarty_tpl->tpl_vars[\'token\']->value;?>
/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
" src="about:blank"></iframe></div><?php echo '/*%%SmartyNocache:129666943253296381520064-67275150%%*/<?php }?>/*/%%SmartyNocache:129666943253296381520064-67275150%%*/';?>
</div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><?php if ($_smarty_tpl->tpl_vars['bannerLinksEnabled']->value==true) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['customBanner']->value) {?><?php echo $_smarty_tpl->tpl_vars['customBanner']->value;?>
<?php }?><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>style="padding-top:20px"<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><ul><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
title">Forums</div><a style="float:left" class="flatBlue <?php if ($_smarty_tpl->tpl_vars['isPending']->value||!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_createPost']) {?>strikethrough<?php }?>" href="http://techberry.org/forum/create/p=<?php if ($_smarty_tpl->tpl_vars['isPending']->value) {?><?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['topic_id']->value;?>
<?php }?>/">Create a post</a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
directory_link"><?php if ($_smarty_tpl->tpl_vars['isPending']->value) {?><a href="http://techberry.org/forum/">Root</a><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value['categoryTitle'], ENT_QUOTES, 'UTF-8', true)) {?> / <a href="http://techberry.org/forum/c=<?php echo $_smarty_tpl->tpl_vars['topic']->value['category_id'];?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value['categoryTitleLink'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value['categoryTitle'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value['title'], ENT_QUOTES, 'UTF-8', true)) {?> / <a href="http://techberry.org/forum/t=<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value['titleLink'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?><?php } else { ?><a href="http://techberry.org/forum/">Root</a> / <a href="http://techberry.org/forum/c=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryTitleLink']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</a> / <a href="http://techberry.org/forum/t=<?php echo $_smarty_tpl->tpl_vars['topic_id']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topicTitleLink']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topicTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?></div></li><?php if (!$_smarty_tpl->tpl_vars['isPending']->value&&$_smarty_tpl->tpl_vars['hasTopics']->value==1) {?><?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list <?php if ($_smarty_tpl->tpl_vars['post']->value['flagCount']>0) {?>unpopular<?php }?>"><a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
/"><div data-ot="<?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_bubble" style="background-color:<?php echo $_smarty_tpl->tpl_vars['post']->value['color'];?>
"><img class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_icon" src="<?php echo $_smarty_tpl->tpl_vars['post']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
"/></div></a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_info"><a class="light" href="http://techberry.org/forum/p=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['postTitleLink'];?>
"><h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2></a><p class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
...</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_stats"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_value"><?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>
</span>Views</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_value"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value['replyCount'])===null||$tmp==='' ? 0 : $tmp);?>
</span>Replies</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_value"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</span>Age</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a href="http://techberry.org/forum/flag/p=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" class="flatRed" <?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_flagPost']) {?>onclick="q(); return false;"<?php }?>>Flag</a></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a href="http://techberry.org/forum/create/r=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
/" class="flatBlue">Reply</a></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a href="http://techberry.org/forum/edit/p=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
/" class="flatBlue">Edit</a></div></div></li><?php } ?><?php } else { ?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
center_message">This topic is <a href="#" class="default" data-ot="Committing to this topic will help make it active">pending</a> and so posts can't be suggested or altered</li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
center_message">OR</li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
center_message">This post simply doesn't exist</li><?php }?></ul></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
</div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>alertify.log("<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
","<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
",0);<?php } ?></script><?php }?></body><?php }} ?>
