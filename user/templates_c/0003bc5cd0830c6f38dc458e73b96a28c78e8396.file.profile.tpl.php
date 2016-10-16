<?php /* Smarty version Smarty-3.1.16, created on 2015-03-21 08:55:05
         compiled from "/home/content/99/11499199/html/user/templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168344555153f67034ee4e87-80828916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0003bc5cd0830c6f38dc458e73b96a28c78e8396' => 
    array (
      0 => '/home/content/99/11499199/html/user/templates/profile.tpl',
      1 => 1426952209,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168344555153f67034ee4e87-80828916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53f670353bab48_27147760',
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
<?php if ($_valid && !is_callable('content_53f670353bab48_27147760')) {function content_53f670353bab48_27147760($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
page" style="height:100%"><div id="profileWrap"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
header" style="<?php if ($_smarty_tpl->tpl_vars['profileImage']->value) {?>background-image:url(<?php echo $_smarty_tpl->tpl_vars['profileImage']->value;?>
);background-size: 100% 100%<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['cover']) {?>background:url('<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['cover'];?>
');background-size: 100% 100%;<?php } else { ?>background-color:<?php echo $_smarty_tpl->tpl_vars['randomColor']->value;?>
<?php }?><?php }?>"><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['is_bot']==0&&$_smarty_tpl->tpl_vars['userInfo']->value['id']!=$_smarty_tpl->tpl_vars['userid']->value) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
button <?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
header_action tooltipWiki" data-v="general:action:sendMessage:im"  onclick="im('<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
'); return false;">Send message</div><?php }?><?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value&&$_smarty_tpl->tpl_vars['userInfo']->value['id']!=$_smarty_tpl->tpl_vars['userid']->value) {?><?php if ($_smarty_tpl->tpl_vars['isFollowing']->value==1) {?><div id="<?php echo $_smarty_tpl->tpl_vars['followStringID']->value;?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
button <?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
header_action tooltipWiki" onclick="unfollow('<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['followStringID']->value;?>
')" data-v="general:action:unfollow">Unfollow</div><?php } else { ?><div id="<?php echo $_smarty_tpl->tpl_vars['followStringID']->value;?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
button <?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
header_action tooltipWiki" onclick="follow('<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['followStringID']->value;?>
')" data-v="general:action:follow">Follow</div><?php }?><?php }?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
user_avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['avatar'];?>
" width="120"></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
user_head_info"><h1><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
</h1><div><a href="http://techberry.org/help/groups/<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['group_name'];?>
" class="light tooltipWiki" data-v="user:group:<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['group_name'];?>
" style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['group_name'];?>
</a></div><div style="margin-top:10px"><span class="badge3"></span><span class="item-multiplier" style="color:#fff;font-size:16px"><?php echo $_smarty_tpl->tpl_vars['badgeCount']->value['bronze_count'];?>
</span><span class="badge2"></span><span class="item-multiplier" style="color:#fff;font-size:16px"><?php echo $_smarty_tpl->tpl_vars['badgeCount']->value['silver_count'];?>
</span><span class="badge1"></span><span class="item-multiplier" style="color:#fff;font-size:16px"><?php echo $_smarty_tpl->tpl_vars['badgeCount']->value['gold_count'];?>
</span></div></div><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['id']==$_SESSION['user_id']) {?><a href="#channelArt" onclick="uploadChannelArt(); return false;" class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
editCoverButton blue">+ Add channel art </a><?php }?></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
main_content"><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['is_bot']==0) {?><h2>Wall posts<?php if ($_smarty_tpl->tpl_vars['userInfo']->value['id']==$_SESSION['user_id']) {?><a href="#linkAccounts" onclick="linkAccounts(); return false;" class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
editLinkedAccountsButton red">+ Link Accounts </a><?php }?></h2><?php }?><ul id="contentList" class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
feed"><?php  $_smarty_tpl->tpl_vars['wallPost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wallPost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wallPosts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wallPost']->key => $_smarty_tpl->tpl_vars['wallPost']->value) {
$_smarty_tpl->tpl_vars['wallPost']->_loop = true;
?><li><a href="http://techberry.org/user/<?php echo $_smarty_tpl->tpl_vars['wallPost']->value['username'];?>
/"><div data-user="<?php echo $_smarty_tpl->tpl_vars['wallPost']->value['username'];?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
avatar_bubble_list miniprofile"><img class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
avatar_image_list" src="<?php echo $_smarty_tpl->tpl_vars['wallPost']->value['avatar'];?>
"/></div></a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
post_content"><?php echo $_smarty_tpl->tpl_vars['wallPost']->value['post'];?>
</div></li><?php } ?></ul><?php if (count($_smarty_tpl->tpl_vars['wallPosts']->value)==20) {?><div role="button" data-from="20" data-info="user-posts_<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['id'];?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
loadMore tooltipWiki loadMore" data-v="user:profile:loadMore">Show more</div><?php }?><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['is_bot']==0) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
comment_box" style="float:left;width:680px"><form action="http://techberry.org/process.wallpost.php" method="post"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
comment_holder"><textarea id="comment_textarea" onclick="$(this).animate({height:100},200)" name="wallpost" placeholder="Enter your comment..." class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
comment_textarea"><?php if ($_smarty_tpl->tpl_vars['failedWallPostContent']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['failedWallPostContent']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea></div><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><input type="hidden" name="username_to" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
comment_buttons"><input type="submit" value="Submit" class="blue"></div></form></div><?php }?></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
side_content"><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['is_bot']==0) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
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
</span></li></ul></div></div><?php }?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block_inner"><h2>Followers</h2><ul class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
avatar_list"><?php  $_smarty_tpl->tpl_vars['follower'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['follower']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['followers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['follower']->key => $_smarty_tpl->tpl_vars['follower']->value) {
$_smarty_tpl->tpl_vars['follower']->_loop = true;
?><li><a href="http://techberry.org/user/<?php echo $_smarty_tpl->tpl_vars['follower']->value['username'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['follower']->value['avatar'];?>
" data-user="<?php echo $_smarty_tpl->tpl_vars['follower']->value['username'];?>
" class="miniprofile" alt="Profile image for <?php echo $_smarty_tpl->tpl_vars['follower']->value['username'];?>
" width="43" height="43"></a></li><?php }
if (!$_smarty_tpl->tpl_vars['follower']->_loop) {
?><span style="font-weight:bold;font-size:12px;line-height:15px;margin:15px;">Followers list is empty</span><?php } ?></ul></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block_inner"><h2>Following</h2><ul class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
avatar_list"><?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['following']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?><li><a href="http://techberry.org/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" data-user="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" class="miniprofile" alt="Profile image for <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" width="43" height="43"></a></li><?php }
if (!$_smarty_tpl->tpl_vars['user']->_loop) {
?><span style="font-weight:bold;font-size:12px;line-height:15px;margin:15px;">Following list is empty</span><?php } ?></ul></div></div><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['is_bot']==0) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
block_inner"><h2>Badges</h2><ul><?php  $_smarty_tpl->tpl_vars['badge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['badge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['badges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['badge']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["badgeLoop"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['badge']->key => $_smarty_tpl->tpl_vars['badge']->value) {
$_smarty_tpl->tpl_vars['badge']->_loop = true;
 $_smarty_tpl->tpl_vars['badge']->iteration++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["badgeLoop"]['iteration']++;
?><?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['badgeLoop']['iteration'])) {?><li><?php }?><a href="http://techberry.org/help/badges/<?php echo $_smarty_tpl->tpl_vars['badge']->value['urlName'];?>
" style="margin:5px" class="badge"><span class="badge<?php echo $_smarty_tpl->tpl_vars['badge']->value['value'];?>
"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['badge']->value['name'];?>
</a></li><?php if (!($_smarty_tpl->tpl_vars['badge']->iteration % 2)) {?></li><?php }?><?php }
if (!$_smarty_tpl->tpl_vars['badge']->_loop) {
?><span style="font-weight:bold;font-size:12px;line-height:15px">No badges unlocked</span><?php } ?></ul></div></div><?php }?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProfile');?>
scrollAd" style="margin-top:18px"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- userpage --><ins class="adsbygoogle"style="display:inline-block;width:300px;height:250px"data-ad-client="ca-pub-3344062671978465"data-ad-slot="3035776837"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div></div></div><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['is_bot']==0) {?><script type="text/javascript">$(document).mouseup(function(event){var target = $("#comment_textarea");if(!target.is(event.target) && !$("button").is(event.target) && target.is(":visible")){$("#comment_textarea").animate({height:40},200);}else{return false;}});</script><?php }?><script src="http://techberry.org/js/youtube.js"></script></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
