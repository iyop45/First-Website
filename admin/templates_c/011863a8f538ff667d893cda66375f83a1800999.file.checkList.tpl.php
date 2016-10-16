<?php /* Smarty version Smarty-3.1.16, created on 2015-01-21 08:59:02
         compiled from "/home/content/99/11499199/html/admin/templates/checkList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1373488469543ebe49a5ab14-00237182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '011863a8f538ff667d893cda66375f83a1800999' => 
    array (
      0 => '/home/content/99/11499199/html/admin/templates/checkList.tpl',
      1 => 1413402761,
      2 => 'file',
    ),
    '7b1a3e0977a1e7782f33c6eec28b802a3633dba0' => 
    array (
      0 => '/home/content/99/11499199/html/admin/layout.tpl',
      1 => 1416665682,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1373488469543ebe49a5ab14-00237182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_543ebe49c20295_00463886',
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
<?php if ($_valid && !is_callable('content_543ebe49c20295_00463886')) {function content_543ebe49c20295_00463886($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
page" style="height:100%"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
inline"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
side_bar"><ul id="<?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
side_main_list"><h3>--- Root ---</h3><a href="http://techberry.org/admin/account" id="account_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminAccountTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Accounts</li></a><a href="http://techberry.org/admin/maintenance" id="maintenance_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminMaintenanceTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Maintenance</li></a><a href="http://techberry.org/admin/sessions_debug" id="sessions_debug_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminSessionsDebugTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Sessions debug</li></a><a href="http://techberry.org/admin/sql-queries" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['sqlQueriesTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">SQL Queries</li></a><a href="http://techberry.org/admin/db-mapper" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['dbMapperTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">DB Mapper</li></a><a href="http://techberry.org/admin/links" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['linksTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">+Links</li></a><hr><h3>--- Admin ---</h3><a href="http://techberry.org/admin/checklist" id="checklist_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminCheckListTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Check List</li></a><a href="http://techberry.org/admin/users" id="users_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminUsersTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Users</li></a><a href="http://techberry.org/admin/statistics" id="statistics_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminStatisticsTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Statistics</li></a><a href="http://techberry.org/admin/bugs" id="bug_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminBugsTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Bugs</li></a><hr><h3>--- Moderation ---</h3><a href="http://techberry.org/admin/announcements" id="announcements_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminAnnouncementsTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Announcements</li></a><a href="http://techberry.org/admin/forum" id="forum_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminForumTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Forum</li></a><a href="http://techberry.org/admin/logs" id="forum_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminLogsTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Logs</li></a></ul></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
side_content"><?php echo $_smarty_tpl->tpl_vars['list']->value;?>
<form class="add-new-task" autocomplete="off"><input id="new-task" type="text" name="new-task" placeholder="Add a new item..." /></form><script type="text/javascript">$(document).ready(function() {$('#new-task').bind("keypress", function(e) {var code = (e.keyCode ? e.keyCode : e.which);if (code == 13){e.preventDefault();var new_task = $('#new-task').val();if(new_task != ''){$.post('http://techberry.org/admin/process.add-checklist.php', { task: new_task, token : '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
' }, function( data ) {$('#new-task').val('');$(data).appendTo('.task-list ul').hide().fadeIn();renderDeleteButtons();return false;});return false;}return false;}});$(".delete-button").click(function(e){var id = e.target.id;$.post('http://techberry.org/admin/process.remove-checklist.php', { id: id, token : '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
' }, function( data ) {$("body").append(data);$('#' + id).parent().hide('slow', function(){ $('#' + id).parent().remove(); });});});renderDeleteButtons();});function renderDeleteButtons(){$(".delete-button").click(function(e){var id = e.target.id;$.post('http://techberry.org/admin/process.remove-checklist.php', { id: id, token : '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
' }, function( data ) {$("body").append(data);$('#' + id).parent().hide('slow', function(){ $('#' + id).parent().remove(); });});});}</script></div></div></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
