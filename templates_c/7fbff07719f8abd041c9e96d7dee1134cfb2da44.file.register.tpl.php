<?php /* Smarty version Smarty-3.1.16, created on 2015-03-24 05:37:38
         compiled from "templates/pages/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94571220053a825ca1f3290-44450473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fbff07719f8abd041c9e96d7dee1134cfb2da44' => 
    array (
      0 => 'templates/pages/register.tpl',
      1 => 1410266034,
      2 => 'file',
    ),
    '88c052349ecda74de9274e0d034a7fb9820719fa' => 
    array (
      0 => '/home/content/99/11499199/html/templates/blankLayout.tpl',
      1 => 1426952902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94571220053a825ca1f3290-44450473',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a825ca310337_73831523',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'startOfBody' => 0,
    'announcements' => 0,
    'announcement' => 0,
    'isLoggedIn' => 0,
    'topBarLink' => 0,
    'topLinkColor' => 0,
    'topLinkText' => 0,
    'token' => 0,
    'group_id' => 0,
    'username' => 0,
    'reputation' => 0,
    'hasNotifications' => 0,
    'avatar' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'enableFooter' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a825ca310337_73831523')) {function content_53a825ca310337_73831523($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/head_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<body><?php echo $_smarty_tpl->tpl_vars['startOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['announcements']->value) {?><?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
?><div id="beta_header"><p><span class="blurb"><?php echo $_smarty_tpl->tpl_vars['announcement']->value;?>
</span><span onclick="var x=this.parentNode.parentNode;x.parentNode.removeChild(x)" class="removeNtf uOnHover">remove</span></p></div><?php } ?><?php }?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
bg"></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value==false) {?><a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['topBarLink']->value)===null||$tmp==='' ? 'http://techberry.org/' : $tmp);?>
" style="float:right" rel="nofollow" class="sign_up"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn <?php echo (($tmp = @$_smarty_tpl->tpl_vars['topLinkColor']->value)===null||$tmp==='' ? 'blue' : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['topLinkText']->value)===null||$tmp==='' ? 'Home' : $tmp);?>
</button></a><?php } else { ?><a href="http://techberry.org/process.logout.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Logout</button></a><?php if ($_smarty_tpl->tpl_vars['group_id']->value>4) {?><a href="http://techberry.org/admin/"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn red">admin</button></a><?php }?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_header_block"><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/" style="margin-top:13px"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_reputation">[ <a href="http://techberry.org/help/privileges/" data-ot="Reputation level" class="reputationLink"><?php echo $_smarty_tpl->tpl_vars['reputation']->value;?>
</a> ]</span><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false"><span id="notification_bell" <?php if ($_smarty_tpl->tpl_vars['hasNotifications']->value==1) {?>class="animated flash" onclick="$.get('http://techberry.org/poll/viewedNotifications.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
'); $(this).removeClass();"<?php }?>></span></a><span style="height:25px" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_flyout" style="display:none"><div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" src="about:blank"></iframe></div></div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><div style="<?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>padding-top:20px<?php }?>"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
overlay2" onclick="close_bar(this);" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap<?php }?>"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><div class="inner"><div class="form_box"><div class="headerInner"><h2> TechBerry Registration </h2></div><div class="formInner"><div id="reg_wrap"><h3 id="msg" class="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
note s_subtitle"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['formMessage']->value)===null||$tmp==='' ? 'Create a new TechBerry account' : $tmp);?>
</h3><form accept-charset="UTF-8" action="process.register.php" method="post" name="login_form" class="box_form"><div class="label"><label for="email"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
note">Email</span></label><input type="text" name="email" maxlength="50"></div><div class="label"><label for="username"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
note">Username</span></label><input type="text" name="username" maxlength="50"></div><div class="label"><label for="password"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
note">Password</span></label><input type="password" name="password" maxlength="50"></div><div class="label"><label for="vpassword"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
note">Re-enter Password</span></label><input type="password" name="vpassword" maxlength="50"></div><div class="label" style="height:auto !important;overflow:hidden;margin-left:25%;padding-left:15px"><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
</div><div class="error"><ul id="error_list" class="<?php echo $_smarty_tpl->getConfigVariable('prefixBlankForms');?>
error_list"></ul></div><p class="terms">By clicking Sign Up, you agree to our <a href="http://techberry.org/help/terms/" target="_blank" rel="nofollow">Terms</a> and that you have read our <a href="http://techberry.org/help/privacy/" target="_blank" rel="nofollow">Privacy Policy</a>.</p><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/><input class="flatGreen" type="submit" value="Sign Up" onclick="validate(this.form, this.form.password); return false"></form></div></div></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['enableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body>
<?php }} ?>
