<?php /* Smarty version Smarty-3.1.16, created on 2014-11-09 07:37:11
         compiled from "templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115343550352e1a148420639-65003508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c6baab8db5b147146df4d4d7f083fab98802ca' => 
    array (
      0 => 'templates/main.tpl',
      1 => 1415543735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115343550352e1a148420639-65003508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e1a1485b2568_32650585',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e1a1485b2568_32650585')) {function content_52e1a1485b2568_32650585($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("core/reset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/prettify.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/animate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/messenger.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/opentip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/feedback.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/reveal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/blankForms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/sceditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("core/zebra_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='index') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='about') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='products') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='support') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/support.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='tutorials') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/tutorials.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='forum') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/forum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='qa') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/qa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='news') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/news.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='account') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='code') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='profile') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='upload') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/upload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='admin') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='chat') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/chat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='rankings') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/rankings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value=='global'||$_smarty_tpl->tpl_vars['page']->value=='followersActivity') {?><?php echo $_smarty_tpl->getSubTemplate ("pages/followersActivity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php }} ?>
