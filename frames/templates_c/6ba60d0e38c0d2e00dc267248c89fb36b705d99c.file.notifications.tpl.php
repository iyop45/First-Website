<?php /* Smarty version Smarty-3.1.16, created on 2014-09-12 13:47:52
         compiled from "/home/content/99/11499199/html/frames/templates/notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:883148526530fc7fd33bf06-71680798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ba60d0e38c0d2e00dc267248c89fb36b705d99c' => 
    array (
      0 => '/home/content/99/11499199/html/frames/templates/notifications.tpl',
      1 => 1410554870,
      2 => 'file',
    ),
    'ea541626e7e48b7e5c9159b25f043426db9b3a75' => 
    array (
      0 => '/home/content/99/11499199/html/templates/frame.tpl',
      1 => 1410452054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '883148526530fc7fd33bf06-71680798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530fc7fd5b6792_69886179',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'inlineScript' => 0,
    'inlineCSS' => 0,
    'endOfHead' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530fc7fd5b6792_69886179')) {function content_530fc7fd5b6792_69886179($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['inlineScript']->value) {?>
		<script type="text/javascript">
			<?php echo $_smarty_tpl->tpl_vars['inlineScript']->value;?>

		</script>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['inlineCSS']->value) {?>
		<style type="text/css"><?php echo $_smarty_tpl->tpl_vars['inlineCSS']->value;?>
</style>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

</head>

<body><?php if ($_smarty_tpl->tpl_vars['content']->value) {?><div id="notification_wrap"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div><?php } else { ?><script type="text/javascript">$(document).ready(function(){$.ajaxSetup({cache: false});var ajax_load = '<div class="wrap"><div class="load"><img src="http://techberry.org/images/ajax_load.gif" width="32" height="32"/></div><div class="message">Opening...</div></div>';var loadUrl = "http://techberry.org/class.get.user.notifications.php?token=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sentToken']->value);?>
&wTitle=<?php echo $_smarty_tpl->tpl_vars['withTitle']->value;?>
";$("#notification_wrap").html(ajax_load).load(loadUrl);});</script><div id="notification_wrap"></div><?php }?></body>
<?php }} ?>
