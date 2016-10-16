<?php /* Smarty version Smarty-3.1.16, created on 2014-12-10 08:45:49
         compiled from "/home/content/99/11499199/html/templates/core/banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125094277053f6191c63d995-17975350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac453fae009a29cf1a7e9aace4c394d86fa3be19' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/banner.tpl',
      1 => 1418089255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125094277053f6191c63d995-17975350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53f6191c6d8748_37886424',
  'variables' => 
  array (
    'announcements' => 0,
    'announcement' => 0,
    'noAnnouncements' => 0,
    'newBadgeMessage' => 0,
    'bannerLinksEnabled' => 0,
    'bannerLinkWidth' => 0,
    'homeTab' => 0,
    'platformsTab' => 0,
    'forumTab' => 0,
    'usersTab' => 0,
    'supportTab' => 0,
    'searchBarEnabled' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f6191c6d8748_37886424')) {function content_53f6191c6d8748_37886424($_smarty_tpl) {?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
banner"><?php if ($_smarty_tpl->tpl_vars['announcements']->value) {?><?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
?><!-- Loop, despite only one announcement being rendered per page --><?php if ($_smarty_tpl->tpl_vars['announcement']->value['id']!=0&&$_smarty_tpl->tpl_vars['announcement']->value['id']!=null&&$_COOKIE['removeAnnouncement']!=$_smarty_tpl->tpl_vars['announcement']->value['id']&&!isset($_smarty_tpl->tpl_vars['noAnnouncements']->value)) {?><div id="announcement_<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
" class="global_notification"><p><span><?php echo $_smarty_tpl->tpl_vars['announcement']->value['content'];?>
</span><span onclick="removeAnnouncement(<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
)" class="removeNtf uOnHover">remove</span></p></div><?php }?><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['newBadgeMessage']->value) {?><!-- disabled for now due to padding and name issue --><div class="success_notification"><p><span><?php echo $_smarty_tpl->tpl_vars['newBadgeMessage']->value;?>
</span></p></div><?php }?><noscript><div id="noscript"><p><span>We strongly recommend that you enable javascript</span></p></div></noscript><?php if ($_smarty_tpl->tpl_vars['bannerLinksEnabled']->value==true) {?><nav class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav sans-serif"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
container"><ul><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/" rel="home" class="<?php if ($_smarty_tpl->tpl_vars['homeTab']->value) {?>active<?php } else { ?>default<?php }?>">Home</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/platforms/" class="<?php if ($_smarty_tpl->tpl_vars['platformsTab']->value) {?>active<?php } else { ?>default<?php }?>">Platforms</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/forum/" class="<?php if ($_smarty_tpl->tpl_vars['forumTab']->value) {?>active<?php } else { ?>default<?php }?>">Forums</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/rankings/" rel="me" class="<?php if ($_smarty_tpl->tpl_vars['usersTab']->value) {?>active<?php } else { ?>default<?php }?>">Users</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/support/" rel="me" class="<?php if ($_smarty_tpl->tpl_vars['supportTab']->value) {?>active<?php } else { ?>default<?php }?>">Support</a></li><?php if ($_smarty_tpl->tpl_vars['searchBarEnabled']->value) {?><script>(function() {var cx = '010847070576185715249:2nyivikkprw';var gcse = document.createElement('script');gcse.type = 'text/javascript';gcse.async = true;gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +'//www.google.com/cse/cse.js?cx=' + cx;var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(gcse, s);})();</script><form id="searchbox_010847070576185715249:2nyivikkprw" action="http://techberry.org/search/" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_form"><input id="q" name="q" placeholder="search" type="text"><input id="sa" type="submit" value=""></form><?php }?></ul></div></nav><?php }?></div><?php }} ?>
