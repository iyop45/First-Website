<?php /* Smarty version Smarty-3.1.16, created on 2014-02-06 07:49:44
         compiled from "/home/content/99/11499199/html/tuts/templates/view.chapters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27143951752f3a108985cb4-75163568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46e2c44357c66ce3506c958c882cff57f0bb462c' => 
    array (
      0 => '/home/content/99/11499199/html/tuts/templates/view.chapters.tpl',
      1 => 1391693748,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1391079845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27143951752f3a108985cb4-75163568',
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
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f3a108b7adc3_25650248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f3a108b7adc3_25650248')) {function content_52f3a108b7adc3_25650248($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
"><?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value==false) {?><?php if ($_smarty_tpl->tpl_vars['userBanner']->value=='loginError') {?><form accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input type="text" name="email" id="username" maxlength="50"/><input type="password" name="password" id="password" maxlength="50"/><input type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="sign_up"><span class="spr_slct">Sign Up</span></a></form><div id="login_error" class="error"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</div><?php } else { ?><a href="http://techberry.org/login.php?ref=1" onclick="ShowLogin(this); return false;" rel="nofollow"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Sign in</button></a><form style="visibility:hidden" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input type="text" name="email" id="username" maxlength="50"/><input type="password" name="password" id="password" maxlength="50"/><input type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="sign_up"><span class="spr_slct">Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/logout.php"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
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
logo"></div></a></div></div><?php if ($_smarty_tpl->tpl_vars['bannerLinksEnabled']->value==true) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><div style="<?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>padding-top:20px<?php }?>"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
overlay2" onclick="close_bar(this);" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap<?php }?>"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><ul><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
title">Tutorials</div><a style="float:left" class="flatBlue" href="#">Submit a chapter</a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
directory_link"><a href="http://techberry.org/tuts/">Root</a> / <a href="http://techberry.org/tuts/g=<?php echo $_smarty_tpl->tpl_vars['group_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['groupTitleLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['groupTitle']->value;?>
</a></div></li><?php  $_smarty_tpl->tpl_vars['chapter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chapter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chapter']->key => $_smarty_tpl->tpl_vars['chapter']->value) {
$_smarty_tpl->tpl_vars['chapter']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['chapter']->value['pending']==1&&$_smarty_tpl->tpl_vars['pendingTitle']->value==1) {?><?php $_smarty_tpl->tpl_vars["pendingTitle"] = new Smarty_variable(0, null, 0);?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list">Pending chapters</li><?php }?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list"><a href="http://techberry.org/tuts/g=<?php echo $_smarty_tpl->tpl_vars['chapter']->value['groupName'];?>
/<?php echo $_smarty_tpl->tpl_vars['chapter']->value['chapter_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['chapter']->value['titleLink'];?>
"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_bubble" style="background-color:<?php echo $_smarty_tpl->tpl_vars['chapter']->value['groupColor'];?>
"><img class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_icon" src="<?php echo $_smarty_tpl->tpl_vars['chapter']->value['groupIcon'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['chapter']->value['groupName'];?>
"/></div></a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_info"><a class="light" href="http://techberry.org/tuts/c=<?php echo $_smarty_tpl->tpl_vars['chapter']->value['chapter_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['chapter']->value['titleLink'];?>
"><h2><?php echo $_smarty_tpl->tpl_vars['chapter']->value['title'];?>
</h2></a><p class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_description"><?php echo $_smarty_tpl->tpl_vars['chapter']->value['description'];?>
</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_stats"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_value"><?php echo $_smarty_tpl->tpl_vars['chapter']->value['views'];?>
</span>Views</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_value"><?php echo $_smarty_tpl->tpl_vars['chapter']->value['date'];?>
</span>Age</div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_box"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_value"><?php echo $_smarty_tpl->tpl_vars['chapter']->value['chapter_id'];?>
</span>Chapter</div><?php if ($_smarty_tpl->tpl_vars['chapter']->value['pending']==1) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_box_meter" title="<?php echo $_smarty_tpl->tpl_vars['chapter']->value['commits'];?>
 committed ( <?php echo $_smarty_tpl->tpl_vars['chapter']->value['meterWidth'];?>
% )"><div class="meter"><span style="width:<?php echo $_smarty_tpl->tpl_vars['chapter']->value['meterWidth'];?>
%"></span></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_box_action"><a href="http://techberry.org/tuts/commit.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&group_id=<?php echo $_smarty_tpl->tpl_vars['chapter']->value['group_id'];?>
&chapter_id=<?php echo $_smarty_tpl->tpl_vars['chapter']->value['chapter_id'];?>
" class="flatBlue">Commit</a></div><?php } else { ?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_box_action"><a href="#" class="flatRed">Request removal</a></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixTutorials');?>
list_box_action"><a href="#" class="flatBlue">Edit chapter</a></div><?php }?></div></li><?php } ?></ul></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>alertify.log("<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
","<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
",0);<?php } ?></script><?php }?></body>
<?php }} ?>
