<?php /* Smarty version Smarty-3.1.16, created on 2014-12-15 15:05:30
         compiled from "/home/content/99/11499199/html/templates/pages/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:567486408533938f5b67fe0-92329395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '933d763a17ff7d2c50bc63d945dbd97401fbe13d' => 
    array (
      0 => '/home/content/99/11499199/html/templates/pages/index.tpl',
      1 => 1406763864,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567486408533938f5b67fe0-92329395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533938f5d509e4_46516155',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'startOfBody' => 0,
    'isLoggedIn' => 0,
    'loginError' => 0,
    'url' => 0,
    'token' => 0,
    'group_id' => 0,
    'username' => 0,
    'reputation' => 0,
    'avatar' => 0,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'pagePadding' => 0,
    'withSidePadding' => 0,
    'disableFooter' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533938f5d509e4_46516155')) {function content_533938f5d509e4_46516155($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/head_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body><?php echo $_smarty_tpl->tpl_vars['startOfBody']->value;?>
<div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
bg"></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value==false) {?><?php if ($_smarty_tpl->tpl_vars['loginError']->value) {?><form accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo base64_encode($_smarty_tpl->tpl_vars['url']->value);?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><div id="login_error" class="color-red"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</div><?php } else { ?><a href="http://techberry.org/login?ref=1" onclick="ShowLogin(this); return false;" rel="nofollow"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Sign in</button></a><form style="visibility:hidden" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo base64_encode($_smarty_tpl->tpl_vars['url']->value);?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/process.logout.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
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
_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false"><span id="notification_bell"></span></a><span style="height:25px" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_flyout" style="display:none"><div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" src="about:blank"></iframe></div></div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['customBanner']->value) {?><?php echo $_smarty_tpl->tpl_vars['customBanner']->value;?>
<?php }?><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>id="paddedBody" style="padding-top:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagePadding']->value)===null||$tmp==='' ? '20' : $tmp);?>
px"<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
bar" style="overflow:auto;margin-bottom:40px; !important"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
collumn <?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
ind_reg <?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
register"><h1 id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
">Register for Free</h1><h3 id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
msg"></h3><form accept-charset="UTF-8" action="process.register.php" method="post" name="login_form" class="box_form"><div class="label"><input type="text" name="email" maxlength="50" data-v="form:username" placeholder="Email"/></div><div class="label"><input type="text" name="username" maxlength="50" data-v="form:username" placeholder="Username"/></div><div class="label"><input type="password" name="password" maxlength="50" data-v="form:password" placeholder="Password"/></div><div class="label"><input type="password" name="vpassword" maxlength="50" data-v="form:verifyPassword" placeholder="Confirm Password"/></div><div class="label"><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
</div><div id="err" class="color-red" style="margin:0 0 10px 0; !important;font-size: 12px;"><ul id="err_l" style="float:left;margin-bottom:5px;"></ul></div><p class="terms">By clicking Sign Up, you agree to our <a href="http://techberry.org/help/terms/" target="_blank" rel="nofollow">Terms</a> and that you have read our <a href="http://techberry.org/help/privacy/" target="_blank" rel="nofollow">Privacy Policy</a>.</p><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/><input class="flatGreen" type="submit" style="margin-bottom:15px" value="Sign Up!" onclick="validate(this.form, this.form.password); return false"/></form></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
player"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
_snippet"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
snippet"><p>TechBerry is a site for technology enthusiasts. You can access free tools and guides or collaborate with users in the community.&nbsp;&nbsp;<a class="default" href="http://techberry.org/about/">Find out more!</a></p></div></div><video id="lctDWnttYEE" class="sublime" width="500" height="281" data-uid="lctDWnttYEE" data-youtube-id="lctDWnttYEE" preload="none"></video><!--<iframe src="//player.vimeo.com/video/73569274" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--></div></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
section"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
box"><div class="b_t p1">Services</div><div class="xt"><p>The latest news for upcoming technology!</p><p>Sandbox for web development and scripting</p><p>Dedicated forums for a variety of languages</p></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
box"><div class="b_t p2">Our community</div><div class="xt"><p>Unlock badges and reputation points</p><p>Private and secure messaging systems</p><p>Strong community of enthusiastic programmers</p></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixIndex');?>
box"><div class="b_t p3">Why join?</div><div class="xt"><p>Be involved in technology discussions</p><p>Stay up-to-date with news and events</p><p>No advertising or annoying pop-ups</p><p>Registration is free and always will be</p></div></div></div><script type="text/javascript">function error(a, b, c) {document.getElementById("i_msg").innerHTML = "There has been an error with your form in the following fields:", b.style.borderColor = "rgb(170, 34, 34)", b.className = "tooltipWiki";var d = document.createElement("li"),e = document.getElementById("err_l");d.appendChild(document.createTextNode(a)), e.appendChild(d);Opentip.findElements();renderDynamicTips();}function validate(a, b) {document.getElementById("err_l").innerHTML = "", b.style.borderColor = "#bdc7d8", a.username.style.borderColor = "#bdc7d8", a.email.style.borderColor = "#bdc7d8", a.vpassword.style.borderColor = "#bdc7d8";var c = 0;if (("" == a.username.value || a.username.value.match(/^.*?(?=[\^#%&$\*:<>\?\/\{\|\}_-]).*$/) || a.username.value.length < 2 || a.username.value.length > 15) && (error("This username is invalid", a.username, "username"), c++), null == a.email.value.match(/(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) && error("This is an invalid email address", a.email, "email"), (b.value.length < 8 || b.value.length > 40) && (error("Password must be between 8 and 40 characters", a.password, null), c++), b.value != a.vpassword.value && (error("Passwords do not match!", a.vpassword, null), c++), c > 0) return !1;var d = document.createElement("input");a.appendChild(d), d.name = "p", d.type = "hidden", d.value = b.value, b.value = "", a.submit()}</script></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
