<?php /* Smarty version Smarty-3.1.16, created on 2014-08-25 07:21:04
         compiled from "/home/content/99/11499199/html/templates/core/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:385991371536e9e056c9858-12869801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5dbed8cad242fd15e23598935aea94b2c20f6b' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/header.tpl',
      1 => 1408650399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385991371536e9e056c9858-12869801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_536e9e057361c8_82792630',
  'variables' => 
  array (
    'contentType' => 0,
    'charset' => 0,
    'metaTitle' => 0,
    'favicon' => 0,
    'metaDescription' => 0,
    'inlineCSS' => 0,
    'javaScriptLinks' => 0,
    'link' => 0,
    'cssLinks' => 0,
    'inlineScript' => 0,
    'toTopButton' => 0,
    'CSSPage' => 0,
    'CSSTheme' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536e9e057361c8_82792630')) {function content_536e9e057361c8_82792630($_smarty_tpl) {?><meta http-equiv="Content-Type" content="<?php echo $_smarty_tpl->tpl_vars['contentType']->value;?>
; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" /><title><?php ob_start();?><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['metaTitle']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo (($tmp = @$_tmp1)===null||$tmp==='' ? "TechBerry" : $tmp);?>
 - TechBerry</title><link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon"/><meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metaDescription']->value;?>
"><script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script><script src="http://techberry.org/js/main.js"></script><script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/messenger/1.4.0/js/messenger.min.js"></script><script type="text/javascript">
function readCookie(a){a+="=";for(var b=document.cookie.split(/;\s*/),c=b.length-1;c>=0;c--)if(!b[c].indexOf(a))return b[c].replace(a,"")}1==readCookie("invert")&&function(){var a="html {-webkit-filter: invert(100%);-moz-filter: invert(100%);-o-filter: invert(100%);-ms-filter: invert(100%); }",b=document.getElementsByTagName("head")[0],c=document.createElement("style");if(window.counter){if(window.counter++,0==window.counter%2)var a="html {-webkit-filter: invert(0%); -moz-filter:    invert(0%); -o-filter: invert(0%); -ms-filter: invert(0%); }"}else window.counter=1;c.type="text/css",c.styleSheet?c.styleSheet.cssText=a:c.appendChild(document.createTextNode(a)),b.appendChild(c)}();
</script><?php if ($_smarty_tpl->tpl_vars['inlineCSS']->value) {?><style type="text/css"><?php echo $_smarty_tpl->tpl_vars['inlineCSS']->value;?>
</style>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javaScriptLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"></script>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cssLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" type="text/css" media="all">
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['inlineScript']->value) {?>
	<script type="text/javascript">
		<?php echo $_smarty_tpl->tpl_vars['inlineScript']->value;?>

	</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?>
	
	<script type="text/javascript">
$(document).ready(function(){$("#toTop").hide();$(function(){$(window).scroll(function(){if($(this).scrollTop()>100)$("#toTop").fadeIn();else $("#toTop").fadeOut()});$("#toTop").click(function(){$("body,html").animate({scrollTop:0},800);return false})})});
Messenger.options = {extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-left',theme: 'flat'}
	</script>
	
<?php }?>
<link rel="stylesheet" href="http://techberry.org/css/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['CSSPage']->value)===null||$tmp==='' ? 'global' : $tmp);?>
/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['CSSTheme']->value)===null||$tmp==='' ? 'purple' : $tmp);?>
/main.css" type="text/css" media="all">

<?php }} ?>
