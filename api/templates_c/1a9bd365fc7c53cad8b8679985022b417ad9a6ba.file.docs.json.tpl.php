<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 06:32:04
         compiled from "templates/docs.json.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156188411252fd246f115989-92999054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a9bd365fc7c53cad8b8679985022b417ad9a6ba' => 
    array (
      0 => 'templates/docs.json.tpl',
      1 => 1393594303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156188411252fd246f115989-92999054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fd246f135330_79508691',
  'variables' => 
  array (
    'apiVersion' => 0,
    'basePath' => 0,
    'apiRoutes' => 0,
    'route' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fd246f135330_79508691')) {function content_52fd246f135330_79508691($_smarty_tpl) {?>{
	"apiVersion": "<?php echo $_smarty_tpl->tpl_vars['apiVersion']->value;?>
",
	"swaggerVersion": "1.0",
	"basePath": "<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
",
	"apis": [
		<?php  $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['route']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apiRoutes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['route']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['route']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['route']->key => $_smarty_tpl->tpl_vars['route']->value) {
$_smarty_tpl->tpl_vars['route']->_loop = true;
 $_smarty_tpl->tpl_vars['route']->iteration++;
 $_smarty_tpl->tpl_vars['route']->last = $_smarty_tpl->tpl_vars['route']->iteration === $_smarty_tpl->tpl_vars['route']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['r']['last'] = $_smarty_tpl->tpl_vars['route']->last;
?>
			{
				"path": "http://techberry.org/api/routes/<?php echo $_smarty_tpl->tpl_vars['route']->value['name'];?>
.php",
				"description": "<?php echo $_smarty_tpl->tpl_vars['route']->value['description'];?>
"
			}<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['r']['last']) {?>,<?php }?>
		<?php } ?>
	],
	"info":{
		"title":"TechBerry API Documentation",
		"description":"For developers who want to manipulate and interact with our services"
	}
}<?php }} ?>
