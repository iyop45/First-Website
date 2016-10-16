<?php /* Smarty version Smarty-3.1.16, created on 2014-12-16 01:27:34
         compiled from "/home/content/99/11499199/html/about/templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121364793353ad528c035de2-67732708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a203c788e63f4fe7df1877876ebe6408eb348a4' => 
    array (
      0 => '/home/content/99/11499199/html/about/templates/about.tpl',
      1 => 1414772037,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121364793353ad528c035de2-67732708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53ad528c30b410_59509891',
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
<?php if ($_valid && !is_callable('content_53ad528c30b410_59509891')) {function content_53ad528c30b410_59509891($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
page" style="height:100%"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
content_block"><h2 class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
title">Welcome to TechBerry</h2><img class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
logo" src="http://techberry.org/images/logo1.png"><p class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
large"><b>TechBerry</b> is a growing community website for programmers and technology enthusiasts alike. You'll find useful social platforms to expand your knowledge whilst learning in a community with a shared passion for computing.</p><p class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
large"><i>Though we offer a lot more than most other websites.</i></p><hr class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
hr"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
stats_wrapper"><ul class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
stats"><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
first"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
number"><?php echo $_smarty_tpl->tpl_vars['numberOfMembers']->value;?>
</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
description">Members</div></li><li><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
number">0</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
description">Uploads</div></li><li><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
number" data-ot="Forum and wall posts ( not topics, replies etc )"><?php echo $_smarty_tpl->tpl_vars['numberOfPosts']->value;?>
</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
description" data-ot="Forum and wall posts ( not topics, replies etc )">Posts</div></li><li><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
number"><?php echo $_smarty_tpl->tpl_vars['numberOfTutorials']->value;?>
</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
description">Tutorials</div></li><li><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
number"><?php echo $_smarty_tpl->tpl_vars['numberOfComments']->value;?>
</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
description">Comments</div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
last"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
number"><?php echo $_smarty_tpl->tpl_vars['numberOfAnswers']->value;?>
</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
description">Answers</div></li></ul></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
brief"><h3 class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
h3">What makes us different?</h3><p class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
large">The main aspect that singles us out from other websites is that every platform available is built from scratch or with minimal contributions from external resources. This means new ideas can easily be implemented and bugs will be quickly fixed.</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
info"><ul><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
info_item"><b class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
label">Founded</b><b class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
value">June 2014</b></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
info_item"><b class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
label">Host</b><b class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
value">GoDaddy</b></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
info_item"><b class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
label">Contact</b><b class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
value"><a class="default" href="http://techberry.org/help/contact/">Here</a></b></li></ul></div></div><hr class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
hr"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
content_block"><h2 class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
title">So what are you waiting for?</h2><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
button_wrapper"><a class="blackButton" href="http://techberry.org/register.php">Sign up now!</a></div></div></div></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
