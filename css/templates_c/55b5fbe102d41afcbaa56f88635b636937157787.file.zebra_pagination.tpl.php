<?php /* Smarty version Smarty-3.1.16, created on 2014-11-11 15:51:36
         compiled from "./templates/core/zebra_pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2012429560545f7c178ed6b4-76696937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b5fbe102d41afcbaa56f88635b636937157787' => 
    array (
      0 => './templates/core/zebra_pagination.tpl',
      1 => 1415746291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2012429560545f7c178ed6b4-76696937',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_545f7c17939994_04682752',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545f7c17939994_04682752')) {function content_545f7c17939994_04682752($_smarty_tpl) {?>/* ATTRIBUTES FOR THE CONTAINER (THIS HOW WE CENTER EVERYTHING)----------------------------------------------------------------------------------------------------------------------*/.Zebra_Pagination                       { clear: both; width: 100%; overflow: hidden; margin-top:10px }.Zebra_Pagination ul                    { position: relative; left: 50%; list-style-type: none; margin: 0; padding: 0; float: left }.Zebra_Pagination li                    { position: relative; float: left; right: 50% }/* COMMON ATTRIBUTES FOR ALL THE LINKS----------------------------------------------------------------------------------------------------------------------*/.Zebra_Pagination a                     { padding: 4px; border: 1px solid #AAA; color: #333; text-decoration: none; margin: 0 2px; display: block; float: left; }.Zebra_Pagination a:hover               { text-decoration:underline; color: #222 }/* "NEXT PAGE" AND "PREVIOUS PAGE" LINKS----------------------------------------------------------------------------------------------------------------------*/.Zebra_Pagination a.navigation          { font-family: arial; font-size: 12px; border: 1px solid transparent; overflow: hidden; background-repeat: no-repeat }.Zebra_Pagination a.previous            { background-image: url(larrow.png); background-position: left center; padding-left: 25px }.Zebra_Pagination a.next                { background-image: url(rarrow.png); background-position: right center; padding-right: 25px }.Zebra_Pagination a.disabled            { filter: alpha(opacity=20); -khtml-opacity: 0.2; -moz-opacity: 0.2; opacity: 0.2 }.Zebra_Pagination a.disabled:hover      { text-decoration:none; background-color: inherit; color: inherit }/* hack for transparent borders in IE6 */*html .Zebra_Pagination a.navigation    { border-color: #000001; filter: chroma(color=#000001) }/* CURRENT PAGE----------------------------------------------------------------------------------------------------------------------*/.Zebra_Pagination a.current,.Zebra_Pagination a.current:hover       { background: #699; border-color: #699; color: #FFF }/* THE "..." SEPARATOR----------------------------------------------------------------------------------------------------------------------*/.Zebra_Pagination span                  { color: #666; margin-right: 2px; display: block; float: left; padding: 8px 4px }<?php }} ?>
