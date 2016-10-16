<?php /* Smarty version Smarty-3.1.16, created on 2014-04-09 05:36:40
         compiled from "./templates/core/banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155775766352e40653087966-08571882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '359228d2e660db2ca969c026976deb088999c3f3' => 
    array (
      0 => './templates/core/banner.tpl',
      1 => 1397046988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155775766352e40653087966-08571882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e40653137c72_75677083',
  'variables' => 
  array (
    'fixedBanner' => 0,
    'darkColor' => 0,
    'lightColor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e40653137c72_75677083')) {function content_52e40653137c72_75677083($_smarty_tpl) {?>.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn{font: 16px Arial, Helvetica, sans-serif;text-shadow: 0 1px 0 rgba(0,0,0,.25);-webkit-appearance: none;font-weight: bold;float: right;right:2px;height: 25px;margin: 10px 0 10px 10px;border-radius: 3px 3px 3px 3px;}#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
{font: 13px/18px <?php echo $_smarty_tpl->getConfigVariable('sff_head');?>
;font-size: <?php echo $_smarty_tpl->getConfigVariable('sf_midText');?>
;text-align: center;background-image: url('<?php echo $_smarty_tpl->getConfigVariable('si_banner');?>
');background-repeat: repeat;background-position: bottom center;height: 43px;line-height: 19px;padding-bottom: 6px;background: #f1f1f1;z-index: 1001;border-bottom: 1px solid #e8e8e8;<?php if ($_smarty_tpl->tpl_vars['fixedBanner']->value) {?>width:100%;position: fixed;<?php } else { ?>position: relative;<?php }?>}#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
{height: 100%;width: <?php echo $_smarty_tpl->getConfigVariable('ss_fullWidth');?>
;margin: 0 auto;}#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
{position: relative;float: right;}#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_anchor{float: left;margin-top: 10px;vertical-align: middle;margin-right: 5px;color: <?php echo $_smarty_tpl->getConfigVariable('sc_lightGrey');?>
;font-size: <?php echo $_smarty_tpl->getConfigVariable('sf_tinyText');?>
;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_avatar{-moz-border-radius: 2px;-webkit-border-radius: 2px;border-radius: 2px;float: left;margin: 10px 5px 0 5px;background-image: linear-gradient(to bottom,#fcfcfc 0,#f8f8f8 100%);background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#fcfcfc),color-stop(100%,#f8f8f8));background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);border: 1px solid #d3d3d3;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_flyout{background-color: #fff;background: rgba(255,255,255,0.98);border: 1px solid #c5c5c5;top: 45px;-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);-webkit-border-radius: 3px;border: 1px solid rgba(100, 100, 100, .4);-webkit-background-clip: padding-box;position: absolute;text-overflow: ellipsis;right: 10px;z-index: 201;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_flyout .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_box{border-bottom: 1px solid #F3F3F3;margin: 3px 3px 0;padding: 3px 4px;overflow: hidden;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo {position: relative;float: left;background: url("<?php echo $_smarty_tpl->getConfigVariable('si_logo');?>
") no-repeat;width: 160px;font-family: logo, sans-serif;height: 32px;margin: 6px 0 6px 16px;padding-top: 5px;color: #4B4545;font-size: 30px;font-weight: 600;text-shadow: 1px 1px white, -1px -1px #444;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
arrow{background-image: url('<?php echo $_smarty_tpl->getConfigVariable('si_arrow');?>
');background-repeat: no-repeat;background-size: auto;height: 11px;position: absolute;right: 35px;top: -11px;width: 20px;}#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
banner{position: relative;height: 61px;width: 100%;z-index: 1;color: <?php echo $_smarty_tpl->getConfigVariable('sc_white');?>
;<?php if ($_smarty_tpl->tpl_vars['fixedBanner']->value) {?>padding-top: 50px;<?php }?>}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav{background: <?php echo $_smarty_tpl->getConfigVariable('sc_lightBlack');?>
;height: 61px;border-bottom: .25em solid <?php echo $_smarty_tpl->tpl_vars['darkColor']->value;?>
;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
container{position: relative;width: <?php echo $_smarty_tpl->getConfigVariable('ss_largeWidth');?>
;margin: 0 auto;padding: 0;overflow:hidden;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav li{float: left;font-size: 1em;text-align: center;display: inline-block;color: <?php echo $_smarty_tpl->getConfigVariable('sc_lightGrey');?>
;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav li a{color: <?php echo $_smarty_tpl->getConfigVariable('sc_lightGrey');?>
;display: block;font-size: 1.125em;font-size: 20px;line-height: 59px;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav li a.active{background-color: <?php echo $_smarty_tpl->tpl_vars['lightColor']->value;?>
;border-bottom: 2px solid <?php echo $_smarty_tpl->tpl_vars['lightColor']->value;?>
;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav li a:hover{color:<?php echo $_smarty_tpl->getConfigVariable('sc_white');?>
;text-decoration:none;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
notification{padding: .25em 0;height: 1.5em;border-bottom: .125em solid <?php echo $_smarty_tpl->getConfigVariable('sc_darkGreen');?>
;background-color: <?php echo $_smarty_tpl->getConfigVariable('sc_lightGreen');?>
;color: #fff;text-align: center;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_notification {position: relative;height: 30px;width: 100%;color: #443838;background-color: <?php echo $_smarty_tpl->getConfigVariable('sc_lightOrange');?>
;border-bottom: .125em solid <?php echo $_smarty_tpl->getConfigVariable('sc_darkOrange');?>
;text-align: center;line-height: 30px;}<?php }} ?>
