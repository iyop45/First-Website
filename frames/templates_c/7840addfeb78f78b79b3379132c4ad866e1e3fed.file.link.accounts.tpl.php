<?php /* Smarty version Smarty-3.1.16, created on 2014-12-03 15:55:10
         compiled from "/home/content/99/11499199/html/frames/templates/link.accounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2110597292547f94a3065742-69851044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7840addfeb78f78b79b3379132c4ad866e1e3fed' => 
    array (
      0 => '/home/content/99/11499199/html/frames/templates/link.accounts.tpl',
      1 => 1417647307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2110597292547f94a3065742-69851044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_547f94a30d1086_73325165',
  'variables' => 
  array (
    'styles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f94a30d1086_73325165')) {function content_547f94a30d1086_73325165($_smarty_tpl) {?>
	<div id="link-accounts-handle" style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['bar'];?>
">
		<span style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['title'];?>
">Link Accounts</span>
		<button style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['close'];?>
" onclick="exitLinkAccounts()">&#10006;</button>
	</div>
	<div style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['content'];?>
">
		<p class="color-red" style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['error'];?>
">This feature is disabled during beta</p>
	</div>
<?php }} ?>
