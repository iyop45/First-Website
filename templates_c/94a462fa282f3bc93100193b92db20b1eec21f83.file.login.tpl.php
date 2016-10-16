<?php /* Smarty version Smarty-3.1.16, created on 2014-01-30 06:39:21
         compiled from "templates/pages/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111150998652ea56094bd063-52818761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94a462fa282f3bc93100193b92db20b1eec21f83' => 
    array (
      0 => 'templates/pages/login.tpl',
      1 => 1391088263,
      2 => 'file',
    ),
    '88c052349ecda74de9274e0d034a7fb9820719fa' => 
    array (
      0 => '/home/content/99/11499199/html/templates/blankLayout.tpl',
      1 => 1391009678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111150998652ea56094bd063-52818761',
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
    'topBarLink' => 0,
    'topLinkText' => 0,
    'privilege' => 0,
    'username' => 0,
    'numberOfNotifications' => 0,
    'avatar' => 0,
    'userBanner' => 0,
    'n' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'enableFooter' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ea56095dc2b3_11580661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea56095dc2b3_11580661')) {function content_52ea56095dc2b3_11580661($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

</head>

<body><div id="notification"><p> You've just earnt a new badge! view your <a href="http://techberry.org/account.php?v=achievements">profile</a><span onclick="var x=this.parentNode.parentNode;x.parentNode.removeChild(x)" class="removeNtf uOnHover">remove</span></p></div><?php echo $_smarty_tpl->tpl_vars['startOfBody']->value;?>
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
" style="float:right" rel="nofollow" class="sign_up"><span class="spr_slct"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['topLinkText']->value)===null||$tmp==='' ? 'Home' : $tmp);?>
</span></a><?php } else { ?><a href="http://techberry.org/logout.php"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Logout</button></a><?php if ($_smarty_tpl->tpl_vars['privilege']->value>1) {?><a href="http://techberry.org/admin/"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn red">Admin</button></a><?php }?><div id="me"><a class="anchor" href="http://techberry.org/account.php" style="margin-top:13px"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><a class="anchor" href="http://techberry.org/account.php?v=notifications" onclick="notifications(); return false"><span class="indent notif_box"><span style="position:relative;top:3px"><?php echo $_smarty_tpl->tpl_vars['numberOfNotifications']->value;?>
</span></span></a><span style="height:25px" class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" width="25px" height="25px"></span><div id="notifications" class="flyout" style="display:none"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['numberOfNotifications']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>0) {?><?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userBanner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['n']->value[2]==1) {?><div class="noticeBox"><div class="noticeText"><a href="#" class="siteLinkFavicon" style="margin-top:0px;"><img src="http://techberry.org/images/message.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px"><a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="script_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
:</a> <?php echo $_smarty_tpl->tpl_vars['n']->value[1];?>
 </div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['n']->value[2]==2) {?><div class="noticeBox"><div class="noticeText"><a href="#" class="siteLinkFavicon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Sent request to: <a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="script_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
</a></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['n']->value[2]==3) {?><div class="noticeBox"><div class="noticeText"><a href="#" class="siteLinkFavicon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Contact request: <a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="script_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
</a></div></div></div><?php }?><?php } ?><?php } else { ?><div id="">No new notifications</div><?php }?><div class="arr"></div></div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><div style="<?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>padding-top:20px<?php }?>"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
overlay2" onclick="close_bar(this);" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap<?php }?>"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><div class="inner"><div class="form_box"><div class="headerInner"><h2> TechBerry Login </h2></div><div class="formInner"><div id="log_wrap"><h3 id="msg" class="s_note s_subtitle"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['formMessage']->value)===null||$tmp==='' ? 'Sign in to your TechBerry account' : $tmp);?>
</h3><form class="box_form" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form"><div class="label"><label for="email"><strong>Email</strong></label><input type="text" name="email" maxlength="50"></div><div class="label"><label for="password"><strong>Password</strong></label><input type="password" name="password" maxlength="50"></div><div id="err" class="error"><ul id="err_l"><<?php ?>?php if(isset($_GET['error'])){ echo "Wrong password or non-existing account."; }else{ if(isset($_GET['v'])){ echo "You must log in to continue."; } } ?<?php ?>></ul></div><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['continue']->value;?>
" name="continue"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><input class="flatOrange" type="submit" value="Login" onclick="validate(this.form, this.form.password)"></form></div></div></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['enableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>alertify.log("<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
","<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
",0);<?php } ?></script><?php }?></body>
<?php }} ?>
