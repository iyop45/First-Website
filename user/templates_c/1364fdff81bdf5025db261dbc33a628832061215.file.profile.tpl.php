<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 04:40:56
         compiled from "/home/content/99/11499199/html/templates/pages/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13131414553219948010617-45928452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1364fdff81bdf5025db261dbc33a628832061215' => 
    array (
      0 => '/home/content/99/11499199/html/templates/pages/profile.tpl',
      1 => 1393606931,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1394480347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13131414553219948010617-45928452',
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
    'avatar' => 0,
    'numberOfNotifications' => 0,
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
  'unifunc' => 'content_53219948303cc8_48238502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219948303cc8_48238502')) {function content_53219948303cc8_48238502($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/logout.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
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
_link" href="http://techberry.org/account.php?v=notifications" onclick="notifications(); return false"><span id="notification_bell"></span></a><span style="height:25px" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
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
</a></div></div></div><?php }?><?php } ?><?php } else { ?><div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" src="about:blank"></iframe></div><?php }?></div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><?php if ($_smarty_tpl->tpl_vars['bannerLinksEnabled']->value==true) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['customBanner']->value) {?><?php echo $_smarty_tpl->tpl_vars['customBanner']->value;?>
<?php }?><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>style="padding-top:20px"<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><div id="profileWrap"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
header"><div data-ot="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
" id="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
user_avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['avatar'];?>
" width="120"></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
user_head_info"><h1><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
</h1><div><a href="#" class="default" data-ot="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
 is in the <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['group_name'];?>
 group" style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['group_name'];?>
</a></div><div style="margin-top:10px"><span class="badge3"></span><span class="item-multiplier"><?php echo $_smarty_tpl->tpl_vars['badgeCount']->value['bronze_count'];?>
</span><span class="badge2"></span><span class="item-multiplier"><?php echo $_smarty_tpl->tpl_vars['badgeCount']->value['silver_count'];?>
</span><span class="badge1"></span><span class="item-multiplier"><?php echo $_smarty_tpl->tpl_vars['badgeCount']->value['gold_count'];?>
</span></div></div></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
main_content"><h2>Wall posts</h2><ul class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
feed"><?php echo print_r($_smarty_tpl->tpl_vars['wallPosts']->value);?>
<?php  $_smarty_tpl->tpl_vars["wallPost"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["wallPost"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wallPosts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["wallPost"]->key => $_smarty_tpl->tpl_vars["wallPost"]->value) {
$_smarty_tpl->tpl_vars["wallPost"]->_loop = true;
?><li><a href="#"><div data-ot="<?php echo $_smarty_tpl->tpl_vars['wallPost']->value['username'];?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
avatar_bubble_list"><img class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
avatar_image_list" src="<?php echo $_smarty_tpl->tpl_vars['wallPost']->value['avatar'];?>
"/></div></a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
post_content"><p><?php echo $_smarty_tpl->tpl_vars['wallPost']->value['post'];?>
</p></div></li><?php } ?></ul><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
comment_box" style="float:left;width:530px"><form action=""><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
comment_holder"><textarea placeholder="Enter your comment..." class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
comment_textarea"></textarea></div><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
comment_buttons"><input type="submit" value="Submit" class="blue"></div></form></div></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
side_content"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block_inner"><h2>General info</h2><ul><li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
info_label">Gender</span><span style="font-weight:bold;font-size:12px;line-height:15px"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['gender'];?>
</span></li><li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
info_label">Birthday</span><span style="font-weight:bold;font-size:12px;line-height:15px"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['birth_date'];?>
</span></li><li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
info_label">Homepage</span><span style="font-weight:bold;font-size:12px;line-height:15px"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['homepage'];?>
</span></li><li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
info_label">Interests</span><span style="font-weight:bold;font-size:12px;line-height:15px"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['interests'];?>
</span></li><li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
info_label">Occupation</span><span style="font-weight:bold;font-size:12px;line-height:15px"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['occupation'];?>
</span></li></ul></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block_inner"><h2>Friends</h2><ul class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
avatar_list"><li><a href="http://techberry.org/users/Genesis/"><img src="http://techberry.org/avatar/efc50..jpg" alt="Profile image for Genesis"></a></li><li><a href="http://techberry.org/users/Artificial/"><img src="http://techberry.org/avatar/fd7b0.jpg" alt="Profile image for Artificial"></a></li><li><a href="http://techberry.org/users/ProjectX/"><img src="http://techberry.org/avatar/a7164.jpg" alt="Profile image for ProjectX"></a></li></ul></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block_inner"><h2>Badges</h2><ul><?php  $_smarty_tpl->tpl_vars["badge"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["badge"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['badges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["badge"]->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["badgeLoop"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["badge"]->key => $_smarty_tpl->tpl_vars["badge"]->value) {
$_smarty_tpl->tpl_vars["badge"]->_loop = true;
 $_smarty_tpl->tpl_vars["badge"]->iteration++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["badgeLoop"]['iteration']++;
?><?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['badgeLoop']['iteration'])) {?><li><?php }?><a href="#" style="margin:5px" class="badge"><span class="badge<?php echo $_smarty_tpl->tpl_vars['badge']->value['value'];?>
"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['badge']->value['name'];?>
</a></li><?php if (!($_smarty_tpl->tpl_vars['badge']->iteration % 2)) {?></li><?php }?><?php } ?></ul></div></div></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>alertify.log("<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
","<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
",0);<?php } ?></script><?php }?></body>
<?php }} ?>
