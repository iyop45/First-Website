<?php /* Smarty version Smarty-3.1.16, created on 2014-04-11 07:41:20
         compiled from "/home/content/99/11499199/html/templates/pages/thanks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30223923353416b2dd0aa55-02371030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe6ac74cb0774127ba2ce399b769d232e99b9ada' => 
    array (
      0 => '/home/content/99/11499199/html/templates/pages/thanks.tpl',
      1 => 1396875682,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1397160402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30223923353416b2dd0aa55-02371030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53416b2e0edf80_64741484',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'token' => 0,
    'isLoggedIn' => 0,
    'startOfBody' => 0,
    'userBanner' => 0,
    'url' => 0,
    'loginError' => 0,
    'ROOTURL' => 0,
    'privilege' => 0,
    'username' => 0,
    'avatar' => 0,
    'numberOfNotifications' => 0,
    'n' => 0,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'disableFooter' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53416b2e0edf80_64741484')) {function content_53416b2e0edf80_64741484($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

	<script type="text/javascript">function im(u){$("#im").remove();document.body.innerHTML += '<iframe id="im" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';}$(function(){Opentip.styles.miniprofile = {showOn: 'mouseover',target: true,tipJoint: "bottom"};$('.miniprofile').each(function(i,obj){new Opentip(obj,{ style: "miniprofile", ajax:"http://techberry.org/frames/user.profile.php?username="+$(this).data('user') });});});<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$(document).ready(function(){var u = getCookie('im');if(u){document.body.innerHTML += '<iframe id="im" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';}setInterval(function(){$.ajax({type:'POST',url:'http://techberry.org/poll/updateRecentActivity.php',data:"token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"});}, 45000);});<?php }?></script>
</head>
<body><?php echo $_smarty_tpl->tpl_vars['startOfBody']->value;?>
<div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
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
" name="token"/><a href="<?php echo $_smarty_tpl->tpl_vars['ROOTURL']->value;?>
register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/process.logout.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Logout</button></a><?php if ($_smarty_tpl->tpl_vars['privilege']->value>1) {?><a href="http://techberry.org/admin/"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn red">Admin</button></a><?php }?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_header_block"><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/" style="margin-top:13px"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false"><span id="notification_bell"></span></a><span style="height:25px" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
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
logo"></div></a></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['customBanner']->value) {?><?php echo $_smarty_tpl->tpl_vars['customBanner']->value;?>
<?php }?><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>style="padding-top:20px"<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><h1 class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
title">Thank you!</h1><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
sub_title">Without these resources building this website of been a lot harder.</div><ul class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
list"><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="https://www.logicaltrainers.com/gallery/jquery-logo.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://jquery.com/" class="default">JQuery</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="https://jquery.org/license/">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://www.smarty.net/images/logo.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://www.smarty.net/" class="default">Smarty</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="https://www.gnu.org/licenses/lgpl.html">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://i.gyazo.com/7416a97e5b3341eb1dfa34f49b1d6f73.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://fabien-d.github.io/alertify.js/" class="default">Alertify</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="http://opensource.org/licenses/MIT">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://www.opentip.org/images/logo.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://www.opentip.org/" class="default">Opentip</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="http://opensource.org/licenses/MIT">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://codemirror.net/doc/logo.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://codemirror.net/" class="default">CodeMirror</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="http://codemirror.net/LICENSE">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://i.gyazo.com/728b7617068ea532d60013115914b9c4.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://www.slimframework.com/" class="default">Slim</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="http://www.slimframework.com/license">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://i.gyazo.com/529d0639eb866f43591a5fcc91f35e97.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://swagger.wordnik.com/" class="default">Swagger UI</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="https://github.com/wordnik/swagger-ui/blob/master/LICENSE">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://jbbcode.com/public/images/logo.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://jbbcode.com/" class="default">JBBCode</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="https://github.com/jbowens/jBBCode">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://www.verot.net/tpl/aqueous_light/img/logo.gif" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://www.verot.net/php_class_upload.htm" class="default">Uploader class</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="http://www.verot.net/download/gpl.txt">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://i.gyazo.com/46871894ae97a780b8999360073766d8.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="https://developers.google.com/closure/compiler/" class="default">Closure compiler</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="http://www.apache.org/licenses/LICENSE-2.0">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://www.sphider.eu/title.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://www.sphider.eu/" class="default">Sphider</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="http://www.gnu.org/licenses/gpl.html">License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://www.chiliscripts.com/wp-content/themes/chiliscripts/images/CS-logo.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="http://www.chiliscripts.com/scripts/chilistats/" class="default">ChiliStats</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default strikethrough" href="#">No License</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
item"><img src="http://i.gyazo.com/ae5f2d23fc48bdc8242d097145414a98.png" class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
image"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
message"><a href="https://code.google.com/p/google-code-prettify/" class="default">Prettify</a>: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna arcu, imperdiet et blandit consectetur, malesuada sagittis nunc. Donec vitae erat libero. Praesent in sapien sapien.<a class="<?php echo $_smarty_tpl->getConfigVariable('prefixThanks');?>
license default" href="http://www.apache.org/licenses/LICENSE-2.0">License</a></div></li></ul></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>alertify.log("<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
","<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
");<?php } ?></script><?php }?></body><?php }} ?>
