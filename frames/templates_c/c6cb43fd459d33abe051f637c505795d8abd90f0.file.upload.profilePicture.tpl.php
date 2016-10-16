<?php /* Smarty version Smarty-3.1.16, created on 2014-11-29 10:42:48
         compiled from "/home/content/99/11499199/html/frames/templates/upload.profilePicture.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1205948308547a05988ac1e9-58551591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6cb43fd459d33abe051f637c505795d8abd90f0' => 
    array (
      0 => '/home/content/99/11499199/html/frames/templates/upload.profilePicture.tpl',
      1 => 1408488051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1205948308547a05988ac1e9-58551591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'styles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_547a05989099b6_33860500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547a05989099b6_33860500')) {function content_547a05989099b6_33860500($_smarty_tpl) {?>
	<div id="upload-profile-picture-handle" style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['bar'];?>
">
		<span style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['title'];?>
">Upload Profile Picture</span>
		<button style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['close'];?>
" onclick="exitUploadProfilePicture()">&#10006;</button>
	</div>
	<div style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['content'];?>
">
		<p class="color-red" style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['error'];?>
">This feature is disabled during beta</p>
	</div>
<?php }} ?>
