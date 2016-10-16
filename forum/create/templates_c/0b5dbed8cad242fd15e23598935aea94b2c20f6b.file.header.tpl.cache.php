<?php /* Smarty version Smarty-3.1.16, created on 2014-07-08 11:47:11
         compiled from "/home/content/99/11499199/html/templates/core/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1525917829532961bf3598b5-43679174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5dbed8cad242fd15e23598935aea94b2c20f6b' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/header.tpl',
      1 => 1404158428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1525917829532961bf3598b5-43679174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532961bf3b2313_59863332',
  'variables' => 
  array (
    'contentType' => 1,
    'charset' => 1,
    'metaTitle' => 1,
    'favicon' => 1,
    'metaDescription' => 1,
    'inlineCSS' => 1,
    'javaScriptLinks' => 1,
    'link' => 1,
    'cssLinks' => 1,
    'inlineScript' => 1,
    'toTopButton' => 1,
    'CSSPage' => 1,
    'CSSTheme' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532961bf3b2313_59863332')) {function content_532961bf3b2313_59863332($_smarty_tpl) {?><meta http-equiv="Content-Type" content="<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php echo $_smarty_tpl->tpl_vars[\'contentType\']->value;?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
; charset=<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php echo $_smarty_tpl->tpl_vars[\'charset\']->value;?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
" /><title><?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php ob_start();?><?php echo preg_replace(\'!<[^>]*?>!\', \' \', $_smarty_tpl->tpl_vars[\'metaTitle\']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo (($tmp = @$_tmp1)===null||$tmp===\'\' ? "TechBerry" : $tmp);?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
 - TechBerry</title><link rel="icon" href="<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php echo $_smarty_tpl->tpl_vars[\'favicon\']->value;?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
" type="image/x-icon"/><meta name="description" content="<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php echo $_smarty_tpl->tpl_vars[\'metaDescription\']->value;?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
"><script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script><script src="http://techberry.org/js/main.js"></script><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/messenger/1.4.0/js/messenger.min.js"></script><script type="text/javascript">
function readCookie(a){a+="=";for(var b=document.cookie.split(/;\s*/),c=b.length-1;c>=0;c--)if(!b[c].indexOf(a))return b[c].replace(a,"")}1==readCookie("invert")&&function(){var a="html {-webkit-filter: invert(100%);-moz-filter: invert(100%);-o-filter: invert(100%);-ms-filter: invert(100%); }",b=document.getElementsByTagName("head")[0],c=document.createElement("style");if(window.counter){if(window.counter++,0==window.counter%2)var a="html {-webkit-filter: invert(0%); -moz-filter:    invert(0%); -o-filter: invert(0%); -ms-filter: invert(0%); }"}else window.counter=1;c.type="text/css",c.styleSheet?c.styleSheet.cssText=a:c.appendChild(document.createTextNode(a)),b.appendChild(c)}();
</script><?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php if ($_smarty_tpl->tpl_vars[\'inlineCSS\']->value) {?>/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
<style type="text/css"><?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php echo $_smarty_tpl->tpl_vars[\'inlineCSS\']->value;?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
</style>
<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php }?>/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>

<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php  $_smarty_tpl->tpl_vars[\'link\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'link\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'javaScriptLinks\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'link\']->key => $_smarty_tpl->tpl_vars[\'link\']->value) {
$_smarty_tpl->tpl_vars[\'link\']->_loop = true;
?>/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>

	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php echo $_smarty_tpl->tpl_vars[\'link\']->value;?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
"></script>
<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php } ?>/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>

<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php  $_smarty_tpl->tpl_vars[\'link\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'link\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cssLinks\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'link\']->key => $_smarty_tpl->tpl_vars[\'link\']->value) {
$_smarty_tpl->tpl_vars[\'link\']->_loop = true;
?>/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>

	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php echo $_smarty_tpl->tpl_vars[\'link\']->value;?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
" type="text/css" media="all">
<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php } ?>/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>

<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php if ($_smarty_tpl->tpl_vars[\'inlineScript\']->value) {?>/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>

	<script type="text/javascript">
		<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php echo $_smarty_tpl->tpl_vars[\'inlineScript\']->value;?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>

	</script>
<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php }?>/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>

<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php if ($_smarty_tpl->tpl_vars[\'toTopButton\']->value) {?>/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>

	
	<script type="text/javascript">
$(document).ready(function(){$("#toTop").hide();$(function(){$(window).scroll(function(){if($(this).scrollTop()>100)$("#toTop").fadeIn();else $("#toTop").fadeOut()});$("#toTop").click(function(){$("body,html").animate({scrollTop:0},800);return false})})});
Messenger.options = {extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-left',theme: 'flat'}
	</script>
	
<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php }?>/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>

<link rel="stylesheet" href="http://techberry.org/css/<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'CSSPage\']->value)===null||$tmp===\'\' ? \'global\' : $tmp);?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
/<?php echo '/*%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'CSSTheme\']->value)===null||$tmp===\'\' ? \'purple\' : $tmp);?>
/*/%%SmartyNocache:1525917829532961bf3598b5-43679174%%*/';?>
/main.css" type="text/css" media="all">

<?php }} ?>
