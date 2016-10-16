<?php /* Smarty version Smarty-3.1.16, created on 2014-11-13 10:33:54
         compiled from "/home/content/99/11499199/html/frames/templates/report.bug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33646760253ceae9e934766-70071178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82d7ad432804c2ae272744d85d0ddbf2bd8b0697' => 
    array (
      0 => '/home/content/99/11499199/html/frames/templates/report.bug.tpl',
      1 => 1415900030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33646760253ceae9e934766-70071178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53ceae9e9d84c0_30220856',
  'variables' => 
  array (
    'styles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ceae9e9d84c0_30220856')) {function content_53ceae9e9d84c0_30220856($_smarty_tpl) {?>
	<div id="bug-report-handle" style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['bar'];?>
">
		<span style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['title'];?>
">Bug Report</span>
		<button style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['close'];?>
" onclick="exitBugReport()">&#10006;</button>
	</div>
	<div style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['content'];?>
">
		<p class="color-red" style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['error'];?>
">Image uploading is currently disabled</p>
		<form id="bug-report-form" method="post" action="http://techberry.org/process.bugReport.php"  enctype="multipart/form-data">
			<textarea id="bug-report-description" style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['textarea'];?>
" placeholder="Please describe the problem with as much detail as possible..."></textarea>
			<input class="blue" style="<?php echo $_smarty_tpl->tpl_vars['styles']->value['submit'];?>
" type="submit" value="Submit"/>
		</form>
	</div>
	<script type="text/javascript">
		
			$(document).ready(function() {
				$("#bug-report-form").submit(function(e) {
					e.preventDefault();
					
					$("body").htmlfeedback("upload", {
						data: {
							"description": $('#bug-report-description').val()
						},
						url: $(this).prop("action"),
					});
					
					$("body").htmlfeedback("reset");
					exitBugReport();
					setTimeout(
					 function() 
					 {
						$("body").htmlfeedback("hide");
					 }, 2000);
					 createAlert('success','Thank you for helping us resolve these bugs :)');
				});
			});
		
	</script>
<?php }} ?>
