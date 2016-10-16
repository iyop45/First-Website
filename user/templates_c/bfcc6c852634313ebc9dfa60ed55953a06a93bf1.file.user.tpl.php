<?php /* Smarty version Smarty-3.1.16, created on 2014-02-11 15:15:07
         compiled from "/home/content/99/11499199/html/templates/pages/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185789981152faa0ebf22078-71742113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfcc6c852634313ebc9dfa60ed55953a06a93bf1' => 
    array (
      0 => '/home/content/99/11499199/html/templates/pages/user.tpl',
      1 => 1392147428,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1391884429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185789981152faa0ebf22078-71742113',
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
  'unifunc' => 'content_52faa0ec2c3fd3_91602320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52faa0ec2c3fd3_91602320')) {function content_52faa0ec2c3fd3_91602320($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
</span><span onclick="var x=this.parentNode.parentNode;x.parentNode.removeChild(x);document.cookie='sa=1';" class="removeNtf uOnHover">remove</span></p></div><?php } ?><?php }?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
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
<?php }?><div style="<?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>padding-top:20px<?php }?>"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
overlay2" onclick="close_bar(this);" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap<?php }?>"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><div id="profileWrap"><div id="dim_overlay" style="display:none;"><div id="sole_box"><div id="sole_box_content"><h2 class="conf_dialog">Send reputation points<a href="http://techberry.org/users/admin"><div class="remove" style="display:block"></div></a></h2><div class="conf_info"><ul><li><form action="http://techberry.org/profile/send.php" method="post"><label for="rep" style="margin-right:10px">How many reputation points?</label><select name="rep" id="rep_sum"><option value="0"> 0 </option></select><input type="hidden" name="user" value="YWRtaW4="></form></li><li style="margin-top:20px;text-align:right;"><input type="submit" style="line-height:18px;align:center;cursor:pointer;padding:5px;" value="Send" class="indent"></li></ul></div></div></div></div><div id="page-header" class="user main "><div id="user-image" class="img has-art"><img src="http://techberry.org/avatar/6bc8d.jpg" width="120"><i class="icon icon-info-white-active"></i></div><div class="inner "><h1 title="admin">admin</h1><div class="byline">764k</div><div class="byline"><span class="badge3"></span><span class="item-multiplier">233</span><span class="badge2"></span><span class="item-multiplier">233</span><span class="badge1"></span><span class="item-multiplier">233</span></div><ul class="stat-summary"><li><a href="http://techberry.org/users/admin/posts"><span class="num">94</span><span class="label">Posts</span></a></li><li><a href="http://techberry.org/users/admin/comments"><span class="num">0</span><span class="label">Comments</span></a></li><li><a href="http://techberry.org/users/admin/uploads"><span class="num">24</span><span class="label">Uploads</span></a></li><li><a href="http://techberry.org/users/admin/downvotes"><span class="num">1</span><span class="label">DownVotes</span></a></li><li><a href="http://techberry.org/users/admin/upvotes"><span class="num">5</span><span class="label">UpVotes</span></a></li><li><a href="http://techberry.org/users/admin/questions"><span class="num">0</span><span class="label">Questions</span></a></li><li class="end"><a href="http://techberry.org/users/admin/answers"><span class="num">0</span><span class="label">Answers</span></a></li></ul></div></div><div id="column1"><h2 class="rec_title">Wall posts</h2><ul class="profile_feed listfix"><li><div class="avatar_says"><a href="http://techberry.org/users/admin"><img src="http://techberry.org/avatar/6bc8d.jpg" alt="Profile image" width="43" height="43"></a></div><div class="content inline_comments_wrapper clearfix"><p class="status_update"></p></div></li><li><div class="avatar_says"><a href="http://techberry.org/users/ProjectX"><img src="http://techberry.org/avatar/a7164.jpg" alt="Profile image" width="43" height="43"></a></div><div class="content inline_comments_wrapper clearfix"><p class="status_update">Thank you for the welcome.</p></div></li><li><div class="avatar_says"><a href="http://techberry.org/users/admin"><img src="http://techberry.org/avatar/6bc8d.jpg" alt="Profile image" width="43" height="43"></a></div><div class="content inline_comments_wrapper clearfix"><p class="status_update">ttest</p></div></li><li><div class="avatar_says"><a href="http://techberry.org/users/Genesis"><img src="http://techberry.org/avatar/efc50..jpg" alt="Profile image" width="43" height="43"></a></div><div class="content inline_comments_wrapper clearfix"><p class="status_update">Users should be able to edit their topics :)</p></div></li><li><div class="avatar_says"><a href="http://techberry.org/users/Genesis"><img src="http://techberry.org/avatar/efc50..jpg" alt="Profile image" width="43" height="43"></a></div><div class="content inline_comments_wrapper clearfix"><p class="status_update">I can help you out with the site mate.</p></div></li></ul></div><div id="column2"><div class="sidemod"><div class="inner"><h2 class="titlea">General info</h2><ul><li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="tlabel">Gender</span><span style="font-weight:bold;font-size:12px">M</span></li><li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="tlabel">Birthday</span><span style="font-weight:bold;font-size:12px">2004-04-05</span></li><li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="tlabel">Homepage</span><span style="font-weight:bold;font-size:12px">www.google.com</span></li><li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="tlabel">Interests</span><span style="font-weight:bold;font-size:12px">Programming </span></li><li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="tlabel">Occupation</span><span style="font-weight:bold;font-size:12px">Student</span></li></ul></div></div><div class="sidemod"><div class="inner"><h2 class="titlea">Friends <span class="num">(3)</span></h2><ul class="user_list five clearfix"><li class="tooltip_container"><a href="http://techberry.org/users/Genesis/"><img class="avatara" src="http://techberry.org/avatar/efc50..jpg" alt="Profile image for Genesis"></a></li><li class="tooltip_container"><a href="http://techberry.org/users/Artificial/"><img class="avatara" src="http://techberry.org/avatar/fd7b0.jpg" alt="Profile image for Artificial"></a></li><li class="tooltip_container"><a href="http://techberry.org/users/ProjectX/"><img class="avatara" src="http://techberry.org/avatar/a7164.jpg" alt="Profile image for ProjectX"></a></li></ul></div></div><div class="sidemod"><div class="inner"><h2 class="titlea">Badges <span class="num">(8)</span></h2><ul><li><a href="#" style="margin:5px" class="badge"><span class="badge1"></span>&nbsp;Newbie</a><a href="#" style="margin:5px" class="badge"><span class="badge3"></span>&nbsp;Administrator</a></li><li><a href="#" style="margin:5px" class="badge"><span class="badge3"></span>&nbsp;Moderator</a><a href="#" style="margin:5px" class="badge"><span class="badge2"></span>&nbsp;MVC</a></li></ul></div></div></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>alertify.log("<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
","<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
",0);<?php } ?></script><?php }?></body>
<?php }} ?>
