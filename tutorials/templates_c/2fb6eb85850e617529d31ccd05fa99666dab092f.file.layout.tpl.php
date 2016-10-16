<?php /* Smarty version Smarty-3.1.16, created on 2014-12-19 21:12:06
         compiled from "/home/content/99/11499199/html/tutorials/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163852008753f6191bbdfcf0-23219817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fb6eb85850e617529d31ccd05fa99666dab092f' => 
    array (
      0 => '/home/content/99/11499199/html/tutorials/layout.tpl',
      1 => 1412022883,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163852008753f6191bbdfcf0-23219817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53f6191c1df850_04293523',
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
<?php if ($_valid && !is_callable('content_53f6191c1df850_04293523')) {function content_53f6191c1df850_04293523($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
page" style="height:100%"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
fullBlock"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
title_block"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
title">Tutorials</div><a style="float:left" class="flatBlue <?php if ($_smarty_tpl->tpl_vars['isPending']->value) {?>strikethrough<?php }?>" href="#">Edit chapter</a><a style="float:left" class="flatRed <?php if ($_smarty_tpl->tpl_vars['isPending']->value) {?>strikethrough<?php }?>" href="#">Request removal</a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
directory_link"><?php if ($_smarty_tpl->tpl_vars['isPending']->value) {?><a href="http://techberry.org/tutorials/">Root</a> / <a href="http://techberry.org/tutorials/g=<?php echo $_smarty_tpl->tpl_vars['tut']->value['group_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tut']->value['groupTitleLink'];?>
"><?php echo $_smarty_tpl->tpl_vars['tut']->value['title'];?>
</a> / <a href="http://techberry.org/tutorials/c=<?php echo $_smarty_tpl->tpl_vars['tut']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tut']->value['titleLink'];?>
"><?php echo $_smarty_tpl->tpl_vars['tut']->value['title'];?>
</a><?php } else { ?><a href="http://techberry.org/tutorials/">Root</a> / <a href="http://techberry.org/tutorials/g=<?php echo $_smarty_tpl->tpl_vars['tut']->value['group_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['groupTitleLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['groupTitle']->value;?>
</a> / <a href="http://techberry.org/tutorials/c=<?php echo $_smarty_tpl->tpl_vars['tut']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tut']->value['titleLink'];?>
"><?php echo $_smarty_tpl->tpl_vars['tut']->value['title'];?>
</a><?php }?></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
content"><?php if (!$_smarty_tpl->tpl_vars['isPending']->value) {?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
block" style="text-align:left;padding:0 !important"><h4 class="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
title"><?php echo $_smarty_tpl->tpl_vars['groupTitle']->value;?>
: <?php echo ucfirst($_smarty_tpl->tpl_vars['tut']->value['title']);?>
</h4><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<br><br><div class="chapter"><?php if ($_smarty_tpl->tpl_vars['tut']->value['previous_id']!=0) {?><div class="prev"><a class="default" style="font-weight:bolder" href="http://techberry.org/tutorials/c=<?php echo $_smarty_tpl->tpl_vars['tut']->value['previous_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tut']->value['previousTitleLink'];?>
">&#171; Previous tut</a></div><?php }?><?php if ($_smarty_tpl->tpl_vars['tut']->value['next_id']!=0) {?><div class="next"><a class="default" style="font-weight:bolder" href="http://techberry.org/tutorials/c=<?php echo $_smarty_tpl->tpl_vars['tut']->value['next_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tut']->value['nextTitleLink'];?>
">Next tut &#187;</a></div><?php }?></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
comment_box" style="float:left;width:600px"><form action=""><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
comment_holder"><textarea placeholder="Enter your comment..." class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
comment_textarea"></textarea></div><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
comment_buttons"><input type="submit" value="Submit" class="blue"></div></form></div></div><?php } else { ?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
center_message <?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
page_message">This tutorial page is <a href="#" class="default">pending</a> and so contributions or edits can't be made</div><?php }?></div></div></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
