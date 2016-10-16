<?php /* Smarty version Smarty-3.1.16, created on 2014-12-15 10:44:35
         compiled from "/home/content/99/11499199/html/forum/templates/view.categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178562031653294c86237f50-15516412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60053bd598c7a6f5c44b19a83d5583dec98f11e0' => 
    array (
      0 => '/home/content/99/11499199/html/forum/templates/view.categories.tpl',
      1 => 1418058370,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178562031653294c86237f50-15516412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53294c86660167_94951975',
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
<?php if ($_valid && !is_callable('content_53294c86660167_94951975')) {function content_53294c86660167_94951975($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
page" style="height:100%"><ul id="contentList"><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
title">Forums</div><a style="float:left" class="<?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_createCategory']) {?>flatLocked strikethrough tooltipWiki pointsNeeded"data-action="forum_createCategory"data-v="forum:category:submit:lackPrivilege"<?php } else { ?>flatBlue"href="http://techberry.org/forum/create/c/"<?php }?>>Submit a category</a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
directory_link"><a href="http://techberry.org/forum/">Root</a></div></li><?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['category']->value['pending']==1&&$_smarty_tpl->tpl_vars['pendingTitle']->value==1) {?><?php $_smarty_tpl->tpl_vars["pendingTitle"] = new Smarty_variable(0, null, 0);?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list">Pending Categories</li><?php }?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list<?php if ($_smarty_tpl->tpl_vars['category']->value['flagCount']>$_smarty_tpl->tpl_vars['settings']->value['CategoryFlagCountForUnpopular']) {?> unpopular<?php }?>"><a href="http://techberry.org/forum/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['titleLink'];?>
"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_bubble" style="background-color:<?php echo $_smarty_tpl->tpl_vars['category']->value['color'];?>
"><img class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_icon" src="<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"/></div></a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_info"><a class="light" href="http://techberry.org/forum/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['titleLink'];?>
"><h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2></a><p class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_description shortened more"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_stats"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_value tooltipWiki help" data-v="forum:category:viewCount"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['category']->value['views'])===null||$tmp==='' ? 0 : $tmp);?>
</span>Views</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_value"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['category']->value['topics'])===null||$tmp==='' ? 0 : $tmp);?>
</span>Topics</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box"><span datetime="<?php echo $_smarty_tpl->tpl_vars['category']->value['date'];?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_value tiny age"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['category']->value['friendlyDate'])===null||$tmp==='' ? 'NaN' : $tmp);?>
</span>Age</div><?php if ($_smarty_tpl->tpl_vars['category']->value['pending']==1) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_meter" data-ot="<?php echo $_smarty_tpl->tpl_vars['category']->value['commits'];?>
 committed ( <?php echo $_smarty_tpl->tpl_vars['category']->value['meterWidth'];?>
% )"><div class="meter"><span style="width:<?php echo $_smarty_tpl->tpl_vars['category']->value['meterWidth'];?>
%"></span></div></div><?php if (!$_smarty_tpl->tpl_vars['category']->value['hasCommitted']==1) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a href="http://techberry.org/forum/commit/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"class="<?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_commitCategory']) {?>flatLocked strikethrough tooltipWiki pointsNeeded"data-action="forum_commitCategory"data-v="forum:category:commit:lackPrivilege"style="padding-left:35px !important"<?php } else { ?>flatBlue"<?php }?>><?php if ($_SESSION['group_id']>=6) {?>Activate<?php } else { ?>Commit<?php }?></a></div><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['category']->value['isLocked']==1) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a href="#" data-ot="This category is permanently locked" data-action="unlock" class="flatLocked pointsNeeded">Locked</a></div><?php } else { ?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a class="<?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_flagCategory']) {?>flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_flagCategory" data-v="forum:category:flag:lackPrivilege"<?php } else { ?>flatRed" href="http://techberry.org/forum/flag/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"<?php }?>><?php if ($_SESSION['group_id']>=6) {?>Remove<?php } else { ?>Flag<?php }?></a></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a href="http://techberry.org/forum/edit/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/" class="flatBlue">Edit</a></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list_box_action"><a class="<?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_lockCategory']) {?>flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_lockCategory" data-v="forum:category:lock:lackPrivilege"<?php } else { ?>flatBlue"href="http://techberry.org/forum/lock/c=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"<?php }?>>Lock</a></div><?php }?><?php }?></div></li><?php } ?></ul><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
<?php if ($_smarty_tpl->tpl_vars['withShowMoreButton']->value==1&&false) {?><div role="button" data-from="<?php echo $_smarty_tpl->tpl_vars['settings']->value['CategoryResultsPerLoad'];?>
" data-first="1" data-info="forum-category" class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
loadMore loadMore">Show more</div><?php }?></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
