<?php /* Smarty version Smarty-3.1.16, created on 2014-12-15 21:38:19
         compiled from "/home/content/99/11499199/html/forum/templates/edit.topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1080893258532961b1b58806-80428854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc6c93996f817541a692e18976833b5752f9551e' => 
    array (
      0 => '/home/content/99/11499199/html/forum/templates/edit.topic.tpl',
      1 => 1413592048,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1080893258532961b1b58806-80428854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532961b1de4eb5_08672729',
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
<?php if ($_valid && !is_callable('content_532961b1de4eb5_08672729')) {function content_532961b1de4eb5_08672729($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
page" style="height:100%"><script type="text/javascript">function viewEdit(id){window.location.replace("http://techberry.org/forum/edit/t=<?php echo $_smarty_tpl->tpl_vars['topic_id']->value;?>
/"+id);}</script><ul><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list" style="margin-bottom:20px"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
title">Forums</div><a style="float:left" class="<?php if ($_smarty_tpl->tpl_vars['show_edit']->value) {?>strikethrough flatLocked tooltipWiki" data-v="forum:topic:edit:cannotSave"<?php } else { ?>flatBlue" onclick="document.submit_edit_topic_form.submit();"<?php }?> href="#">Save edit</a><a style="float:left" class="flatRed" href="javascript:history.back()">Cancel</a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
directory_link"><a href="http://techberry.org/forum/">Root</a> / <a href="http://techberry.org/forum/c=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoryTitleLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['categoryTitle']->value;?>
</a> / <a href="http://techberry.org/forum/t=<?php echo $_smarty_tpl->tpl_vars['topic_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['topicTitleLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['originalTopicTitle']->value;?>
</a></div></li><li><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
edit_content"><?php if (count($_smarty_tpl->tpl_vars['edits']->value)>4) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
info_message">We're not currently accepting any more edits as the <a href="#" class="default tooltipWiki" data-v="forum:topic:edit:queue">queue</a> is full. Check back soon.</div><?php }?><?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_editTopic']) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
info_message">As you're <a href="http://techberry.org/help/groups/new" data-v="user:new" class="default tooltipWiki">new</a> your edits will be placed in a queue until reviewed by a <a href="http://techberry.org/help/groups/moderator" data-v="user:moderator" class="default tooltipWiki">moderator</a></div><?php }?><select onchange="viewEdit(this.value)"><option value="" <?php if (!$_smarty_tpl->tpl_vars['show_edit']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['topicUsername']->value;?>
 ( <?php echo $_smarty_tpl->tpl_vars['topicDate']->value;?>
 ago) </option><?php if (!empty($_smarty_tpl->tpl_vars['edits']->value)) {?><?php  $_smarty_tpl->tpl_vars['edit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['edits']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edit']->key => $_smarty_tpl->tpl_vars['edit']->value) {
$_smarty_tpl->tpl_vars['edit']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['link_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['show_edit']->value&&$_smarty_tpl->tpl_vars['edit']->value['select']==1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['edit']->value['username'];?>
 ( <?php echo $_smarty_tpl->tpl_vars['edit']->value['date'];?>
 ago ) <?php echo $_smarty_tpl->tpl_vars['edit']->value['reason'];?>
</option><?php } ?><?php }?></select><?php if ($_smarty_tpl->tpl_vars['show_edit']->value) {?><div class="input_text" contenteditable="true"><?php echo $_smarty_tpl->tpl_vars['topicTitle']->value;?>
</div><div class="textarea" contenteditable="true"><?php echo $_smarty_tpl->tpl_vars['topicDescription']->value;?>
</div><?php } else { ?><form name="submit_edit_topic_form" method="post" action="http://techberry.org/forum/edit/submit/t=<?php echo $_smarty_tpl->tpl_vars['topic_id']->value;?>
/"><input name="title" type="text" class="input_text" placeholder="Title" value="<?php echo $_smarty_tpl->tpl_vars['topicTitle']->value;?>
"/><textarea name="content" class="textarea" placeholder="Content"><?php echo $_smarty_tpl->tpl_vars['topicDescription']->value;?>
</textarea><input name="reason" type="text" class="input_text" placeholder="Reason" maxlength="200"/><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/></form><?php }?></div><?php if ($_smarty_tpl->tpl_vars['show_edit']->value) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
edit_actions" style="float:left;font-weight:bolder"><ul><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
edit_button"><a href="http://techberry.org/forum/edit/publish/t=<?php echo $_smarty_tpl->tpl_vars['edit_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" class="<?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_commitTopicEdit']) {?>strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_editTopic" data-v="forum:topic:edit:commit:lackPrivilege"<?php } else { ?>flatBlue"<?php }?>>Publish</a></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
edit_button"><a href="http://techberry.org/forum/edit/remove/t=<?php echo $_smarty_tpl->tpl_vars['edit_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" class="<?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_editCategory']) {?>strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_editTopic" data-v="forum:topic:edit:lackPrivilege"<?php } else { ?>flatRed"<?php }?>>Remove</a></li></ul></div><?php }?></li></ul></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
