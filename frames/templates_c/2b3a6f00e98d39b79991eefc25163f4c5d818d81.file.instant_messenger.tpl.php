<?php /* Smarty version Smarty-3.1.16, created on 2014-09-11 09:14:18
         compiled from "/home/content/99/11499199/html/frames/templates/instant_messenger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:968135515532c9ab9de1843-24380567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b3a6f00e98d39b79991eefc25163f4c5d818d81' => 
    array (
      0 => '/home/content/99/11499199/html/frames/templates/instant_messenger.tpl',
      1 => 1404576625,
      2 => 'file',
    ),
    'ea541626e7e48b7e5c9159b25f043426db9b3a75' => 
    array (
      0 => '/home/content/99/11499199/html/templates/frame.tpl',
      1 => 1410452054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '968135515532c9ab9de1843-24380567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532c9ab9f2a659_60786447',
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
<?php if ($_valid && !is_callable('content_532c9ab9f2a659_60786447')) {function content_532c9ab9f2a659_60786447($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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

<body>
	<div class="im_bar">
		<div class="im_toggle_bar" onclick="parent.toggle_im();">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sentUsername']->value, ENT_QUOTES, 'UTF-8', true);?>

		</div>
		<div id="im_actions">
			<div id="im_following" onclick="parent.im_list();">
				Following
			</div>
			<div id="im_close" onclick="parent.remove_im();">
				Close
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
		<div id="im_wrap"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
	<?php } else { ?>
		<script type="text/javascript">
			
			$(document).ready(function(){
				$.ajaxSetup({
					cache: false
				});
			
					var ajax_load = "<div class='wrap im_content'><div class='load'><img src='http://techberry.org/images/ajax_load.gif' width='32' height='32'/></div><div class='message'>Opening...</div></div>";
					var loadUrl = "http://techberry.org/class.get.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['sentToken']->value;?>
&username_to=<?php echo $_smarty_tpl->tpl_vars['sentUsername']->value;?>
";
			
				$("#im_wrap").html(ajax_load).load(loadUrl);
			});
			
		</script>
		<div id="im_wrap">
		</div>
	<?php }?>
</body>
<?php }} ?>
