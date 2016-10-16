<?php /* Smarty version Smarty-3.1.16, created on 2015-03-21 08:49:34
         compiled from "/home/content/99/11499199/html/templates/pages/followersActivity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188337656953ae888c2cc581-23825450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '335dc19be326285962f4a78556f4b18a8668186e' => 
    array (
      0 => '/home/content/99/11499199/html/templates/pages/followersActivity.tpl',
      1 => 1426952145,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188337656953ae888c2cc581-23825450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53ae888c5cd992_61077156',
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
<?php if ($_valid && !is_callable('content_53ae888c5cd992_61077156')) {function content_53ae888c5cd992_61077156($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
page" style="height:100%"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixFollowersActivity');?>
main_content"><?php if ($_smarty_tpl->tpl_vars['emptyActivity']->value) {?><div style="text-align:center;margin:20px 0;font-family: arial"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAACNwAAAjcB9wZEwgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAASQSURBVFiFxdd7rNdzGAfw1ydFN4zIREjmD6ZZK/fEErZGcok2t7nOppHNnVYk9+byBzqROzNzidzGInLL0NwWCROG3JtyOT7+eJ7yczrnOCcz3+237/fz+Tyf53k/9+dXaq3+z6frf8G0lDIKwzEAm2EJbqi1zlmNuNa6xj/sh5kY1GL/N7yFZ/AYFuJXDFuNx78QfnwKasZSDG44qzgT5+Jq7I73cHdLPl3W0MSTMQOPYhCW4ZlSytAGsgH4HT9iHD7DqJa8OgWglNK1lDITE9GEQ2ut72BPYYWnSym7JvkT6Jn7f2Ax1iuldF8jAKWUdTEbx2JKrfWkWmtzKaVnajkcn+Mp/IL+WIS+eBX7JKvOAyilbIq5yWR8rfXC3B+C91PwFgniI5QG4QXDcAuW11q//xvzDgTbdvgktRrbsD8OP2NOnn+NbbAhXsMKjMbJKXwhPuhUFmAHfJcmHpF7XTBVRPq0XG+GT1PrjbE+XhJZcgQOxpd4tsMAsElqtirFsC5mYTmOToD98mwQfsArIvh6p9uacaLImAc7BEAEysup+ZDc2xpvp7+nN9BOw075PTK1noW10AvPprV+xrSOArgntdwr13vjG3/l8jBMyLPemI/9c31cCmzKAOwpKmLFg+jSLgBMSi0OzPVRuZ6HobhE5P0oXJsx0Bcv4Ii8c14KvEP0mx4iPStuawTRUvi49NlRuT5NFJH5yeh47IibcCDGitrQNzV9AKfk3asatF4n3fpE7t24GgDskmYfn+sJSfwytsfl6dcLMAT34RjsgQXplrVwLy5Ny1yXPJ7KeOjR4I6RqwBgS5EmE3O9c5r9EZENV4iIvwbdcL0IuCdxhqj7C3AW1sZDCaQ7xohMmpegeuFxHNMI4GYNEZoC7xX5PiwFXJ/mv1nkeRPOx4tJt14CfgSbpmvmYSP0w4fo1tEsuAX98/syHCLy/NZ01WxslRZ5HB8koG6Ygo/TNTNFcdoXS1uV1QaA28VA0acBxARsKwaMO0WrXZH+bM73oyIYDxWl+QBMzrNFrclqqxl9JXJ4cill/VrrOenbC3AqBov2ejpOSfcQ0T4Hz2GEGEYW4fnkufrThgVGixGqf7qjV+6PEfk+W0Ndx26p5XARFwsxEH3wtMiuhzvjgo2S4Z4iAO9E9zwbLIbMRgA7JP0ZoggdlhYamlb5A00ddkGtdaloRFeKbngN7iml9Ki1vo77W1xZlu9dRb84HONFLB0p3LmkNVntDSTvCjc0pTZ3YFZOQFLjlc9P+V4g2u/FYg6YjhPy7M3OAlgszD9JlNi5whUPiwb0UwPtSgt8IubFqaIo9cEGefZGq1LamQdGp5Y7i2I0X1TF/UVlu6kF/W+peVdsLorQTqIct1oD2ktDeCff00WeXywieoGokl+0oF8mav1FtdYlolmdLYL29baE/JMLVuBukf/dcJfI8YGtAPhWjGa9SykzRDFqFoHZJoB/mgnnCje09hvZgnas+PfzfZ4vz/VDGNCWjJKXW31KKf1wkJh0NxRNaLEYOJ+rtTa3cW8d/FrbY76StgM0/+nzJ9nxzk3jhq/+AAAAAElFTkSuQmCC91e40862a0f6a0df0ce7b28840850ffd"/><h3 style="font-weight: bold;font-size: 18px;margin: 8px 0 8px 0">This is your dashboard.</h3><p style="color:#666;margin-bottom:8px">When you follow some users, their latest posts will show up here!</p><a href="http://techberry.org/rankings/topFollowed"><button class="red">Get started!</button></a></div><?php } else { ?><h3 class="<?php echo $_smarty_tpl->getConfigVariable('prefixFollowersActivity');?>
title">Followers activity</h3><ul id="contentList" class="<?php echo $_smarty_tpl->getConfigVariable('prefixFollowersActivity');?>
feed"><?php  $_smarty_tpl->tpl_vars['activity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activity']->key => $_smarty_tpl->tpl_vars['activity']->value) {
$_smarty_tpl->tpl_vars['activity']->_loop = true;
?><li><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixFollowersActivity');?>
activityBar"><p><?php echo $_smarty_tpl->tpl_vars['activity']->value['titleContent'];?>
<span class="<?php echo $_smarty_tpl->getConfigVariable('prefixFollowersActivity');?>
timeSince"><?php echo $_smarty_tpl->tpl_vars['activity']->value['timeSince'];?>
 ago</span></p></div><a href="http://techberry.org/user/<?php echo $_smarty_tpl->tpl_vars['activity']->value['username'];?>
/"><div data-user="<?php echo $_smarty_tpl->tpl_vars['activity']->value['username'];?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixFollowersActivity');?>
avatar_bubble_list miniprofile"><img class="<?php echo $_smarty_tpl->getConfigVariable('prefixFollowersActivity');?>
avatar_image_list" src="<?php echo $_smarty_tpl->tpl_vars['activity']->value['avatar'];?>
"/></div></a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixFollowersActivity');?>
post_content"><p><?php echo $_smarty_tpl->tpl_vars['activity']->value['content'];?>
</p></div></li><?php } ?></ul><?php if ($_smarty_tpl->tpl_vars['showMoreButton']->value) {?><div role="button" data-from="20" data-info="followers-activity" class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
loadMore tooltipWiki loadMore" data-v="user:profile:loadMore">Show more</div><?php }?></div><?php }?><script src="http://techberry.org/js/youtube.js"></script></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
