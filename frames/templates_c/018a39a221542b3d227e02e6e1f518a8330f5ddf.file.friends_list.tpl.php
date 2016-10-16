<?php /* Smarty version Smarty-3.1.16, created on 2014-04-16 05:16:05
         compiled from "/home/content/99/11499199/html/frames/templates/friends_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262430749534e72d70c0c43-39039979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '018a39a221542b3d227e02e6e1f518a8330f5ddf' => 
    array (
      0 => '/home/content/99/11499199/html/frames/templates/friends_list.tpl',
      1 => 1397650543,
      2 => 'file',
    ),
    'ea541626e7e48b7e5c9159b25f043426db9b3a75' => 
    array (
      0 => '/home/content/99/11499199/html/templates/frame.tpl',
      1 => 1393759588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262430749534e72d70c0c43-39039979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534e72d71ff4b3_06834651',
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
<?php if ($_valid && !is_callable('content_534e72d71ff4b3_06834651')) {function content_534e72d71ff4b3_06834651($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
		<div class="im_toggle_bar" onclick="parent.toggle_im_friends_list();" style="color:rgb(105, 219, 105)">
			Online friends
		</div>
		<div id="im_close" onclick="parent.remove_im_friends_list();">
			Close
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
					var loadUrl = "http://techberry.org/class.get.online_friends.php?token=<?php echo $_smarty_tpl->tpl_vars['sentToken']->value;?>
";
			
				$("#im_wrap").html(ajax_load).load(loadUrl);
			});
			
		</script>
		<div id="im_wrap">
		</div>
	<?php }?>
</body>
<?php }} ?>
