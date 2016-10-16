<?php /* Smarty version Smarty-3.1.16, created on 2014-02-27 16:00:50
         compiled from "templates/pages/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:566589295530fc3a217d5e4-35894077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7adb6050dd6442a92e05b3979a451b71f373b668' => 
    array (
      0 => 'templates/pages/index.tpl',
      1 => 1393506902,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1393236550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '566589295530fc3a217d5e4-35894077',
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
    'userBanner' => 0,
    'url' => 0,
    'token' => 0,
    'loginError' => 0,
    'privilege' => 0,
    'username' => 0,
    'numberOfNotifications' => 0,
    'avatar' => 0,
    'n' => 0,
    'bannerLinksEnabled' => 0,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530fc3a23afae3_35617374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530fc3a23afae3_35617374')) {function content_530fc3a23afae3_35617374($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/logout.php"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Logout</button></a><?php if ($_smarty_tpl->tpl_vars['privilege']->value>1) {?><a href="http://techberry.org/admin/"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn red">Admin</button></a><?php }?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_header_block"><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account.php" style="margin-top:13px"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account.php?v=notifications" onclick="notifications(); return false"><span class="indent notif_box"><span style="position:relative;top:3px"><?php echo $_smarty_tpl->tpl_vars['numberOfNotifications']->value;?>
</span></span></a><span style="height:25px" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_flyout" style="display:none"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['numberOfNotifications']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>0) {?><?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userBanner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['n']->value[2]==1) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_box"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_text"><a href="#" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/message.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px"><a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_clean_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
:</a> <?php echo $_smarty_tpl->tpl_vars['n']->value[1];?>
 </div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['n']->value[2]==2) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_box"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_text"><a href="#" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Sent request to: <a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_clean_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
</a></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['n']->value[2]==3) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_box"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_text"><a href="#" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Contact request: <a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_clean_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
</a></div></div></div><?php }?><?php } ?><?php } else { ?><div id="">No new notifications</div><?php }?><div class="arr"></div></div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><?php if ($_smarty_tpl->tpl_vars['bannerLinksEnabled']->value==true) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['customBanner']->value) {?><?php echo $_smarty_tpl->tpl_vars['customBanner']->value;?>
<?php }?><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>style="padding-top:20px"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
overlay2" onclick="close_bar(this);" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
bar" style="overflow:auto;margin-bottom:40px; !important"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
collumn <?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
ind_reg <?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
register"><h1 id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
">Register for Free</h1><h3 id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
msg"></h3><form accept-charset="UTF-8" action="process.register.php" method="post" name="login_form" class="box_form"><div class="label"><input type="text" name="email" maxlength="50" placeholder="Email"/></div><div class="label"><input type="text" name="username" maxlength="50" placeholder="Username"/></div><div class="label"><input type="password" name="password" maxlength="50" placeholder="Password"/></div><div class="label"><input type="password" name="vpassword" maxlength="50" placeholder="Confirm Password"/></div><div class="label"><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
</div><div id="err" class="error" style="margin:0 0 10px 0; !important"><ul id="err_l"></ul></div><p class="terms">By clicking Sign Up, you agree to our <a href="http://techberry.org/help/terms/" target="_blank" rel="nofollow">Terms</a> and that you have read our <a href="http://techberry.org/help/privacy/" target="_blank" rel="nofollow">Privacy Policy</a>.</p><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/><input class="flatGreen" type="submit" style="margin-bottom:15px" value="Sign Up!" onclick="validate(this.form, this.form.password); return false"/></form></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
player"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
_snippet"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
snippet"><p>TechBerry is a site for technology enthusiasts. You can access free tools and guides or collaborate with users in the community.&nbsp;&nbsp;<a class="default" href="http://techberry.org/about/">Find out more!</a></p></div></div><iframe src="//player.vimeo.com/video/73569274" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
section"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
box"><div class="b_t p1">Services</div><div class="xt"><p>The latest news for upcoming technology!</p><p>Sandbox for web development and scripting</p><p>Dedicated forums for a variety of languages</p></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
box"><div class="b_t p2">Our community</div><div class="xt"><p>Unlock badges and reputation points</p><p>Private and secure messaging systems</p><p>Strong community of enthusiastic programmers</p></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
box"><div class="b_t p3">Why join?</div><div class="xt"><p>Be involved in technology discussions</p><p>Stay up-to-date with news and events</p><p>No advertising or annoying pop-ups</p><p>Registration is free and always will be</p></div></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>alertify.log("<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
","<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
",0);<?php } ?></script><?php }?></body>
<?php }} ?>
