<?php /* Smarty version Smarty-3.1.16, created on 2014-07-08 11:47:11
         compiled from "/home/content/99/11499199/html/templates/core/banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158220450532961bf3d6141-04197240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac453fae009a29cf1a7e9aace4c394d86fa3be19' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/banner.tpl',
      1 => 1404596129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158220450532961bf3d6141-04197240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532961bf42c1b2_51131505',
  'variables' => 
  array (
    'announcements' => 0,
    'announcement' => 0,
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
<?php if ($_valid && !is_callable('content_532961bf42c1b2_51131505')) {function content_532961bf42c1b2_51131505($_smarty_tpl) {?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
banner"><?php if ($_smarty_tpl->tpl_vars['announcements']->value) {?><?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
?><div class="global_notification"><p><span><?php echo $_smarty_tpl->tpl_vars['announcement']->value;?>
</span><span onclick="var x=this.parentNode.parentNode;x.parentNode.removeChild(x);document.cookie='sa=1';" class="removeNtf uOnHover">remove</span></p></div><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['newBadgeMessage']->value) {?><div class="success_notification"><p><span><?php echo $_smarty_tpl->tpl_vars['newBadgeMessage']->value;?>
</span></p></div><?php }?><noscript><div id="noscript"><p><span>We strongly recommend that you enable javascript</span></p></div></noscript><?php if ($_smarty_tpl->tpl_vars['bannerLinksEnabled']->value==true) {?><nav class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav sans-serif"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
container"><ul><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/" rel="home" class="<?php if ($_smarty_tpl->tpl_vars['homeTab']->value) {?>active<?php } else { ?>default<?php }?>">Home</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/platforms/" class="<?php if ($_smarty_tpl->tpl_vars['platformsTab']->value) {?>active<?php } else { ?>default<?php }?>">Platforms</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/forum/" class="<?php if ($_smarty_tpl->tpl_vars['forumTab']->value) {?>active<?php } else { ?>default<?php }?>">Forums</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/rankings/" rel="me" class="<?php if ($_smarty_tpl->tpl_vars['usersTab']->value) {?>active<?php } else { ?>default<?php }?>">Users</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/support/" rel="me" class="<?php if ($_smarty_tpl->tpl_vars['supportTab']->value) {?>active<?php } else { ?>default<?php }?>">Support</a></li><?php if ($_smarty_tpl->tpl_vars['searchBarEnabled']->value) {?><form action="http://techberry.org/search/" method="GET" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_form"><input id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_input" name="query" placeholder="search" type="text"><input id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_submit" type="submit" value=""><input type="hidden" value="1" name="search"/></form><?php }?></ul></div></nav><?php }?></div><?php }} ?>
