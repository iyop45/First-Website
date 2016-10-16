<?php /* Smarty version Smarty-3.1.16, created on 2014-08-19 15:39:00
         compiled from "/home/content/99/11499199/html/frames/templates/upload.channelArt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111670284353f3cfdfd44561-12378462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '809fc100be5b0067eea6d4027044257e31831341' => 
    array (
      0 => '/home/content/99/11499199/html/frames/templates/upload.channelArt.tpl',
      1 => 1408487807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111670284353f3cfdfd44561-12378462',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53f3cfdfd89542_06679162',
  'variables' => 
  array (
    'styles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f3cfdfd89542_06679162')) {function content_53f3cfdfd89542_06679162($_smarty_tpl) {?>
	<div id="upload-channel-art-handle" style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['bar'];?>
">
		<span style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['title'];?>
">Upload Channel Art</span>
		<button style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['close'];?>
" onclick="exitUploadChannelArt()">&#10006;</button>
	</div>
	<div style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['content'];?>
">
		<p class="color-red" style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['error'];?>
">This feature is disabled during beta</p>
	</div>
<?php }} ?>
