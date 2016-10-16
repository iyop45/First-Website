<?php /* Smarty version Smarty-3.1.16, created on 2014-01-25 08:15:46
         compiled from "./templates/pages/common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103015920352e3cf81321f69-34443848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cda5173697d41993182f9b9f1cf225c0f104a86d' => 
    array (
      0 => './templates/pages/common.tpl',
      1 => 1390662942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103015920352e3cf81321f69-34443848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e3cf8141cd19_82834309',
  'variables' => 
  array (
    'darkColor' => 0,
    'lightColor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3cf8141cd19_82834309')) {function content_52e3cf8141cd19_82834309($_smarty_tpl) {?>.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
notification_box{
	color: #333;
	padding: 15px;
	color: #FFF;
	text-shadow: -1px -1px 0 rgba(0,0,0,.5);
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
error_notification{
	background:#c04848;
}
.#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
success_notification{
	background:rgba(65, 148, 18, 0.9);
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login{
	position: relative;
	height: 100%;
	float: right;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn{
	font: 16px Arial, Helvetica, sans-serif;
	text-shadow: 0 1px 0 rgba(0,0,0,.25);
	-webkit-appearance: none;
	font-weight: bold;
	float: right;
	right:2px;
	height: 25px;	
	margin: 10px 0 10px 10px;
	border-radius: 3px 3px 3px 3px;	
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
{
	font: 13px/18px <?php echo $_smarty_tpl->getConfigVariable('sff_head');?>
;
	font-size: <?php echo $_smarty_tpl->getConfigVariable('sf_midText');?>
;
	text-align: center;
	background-image: url('<?php echo $_smarty_tpl->getConfigVariable('si_banner');?>
');
	background-repeat: repeat;
	background-position: bottom center;
	height: 43px;
	line-height: 19px;
	padding-bottom: 6px;
	position: relative;
	background: #f1f1f1;
	z-index: 1001;
	border-bottom: 1px solid #e8e8e8;
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
{
	height: 100%;
	width: <?php echo $_smarty_tpl->getConfigVariable('ss_fullWidth');?>
;
	margin: 0 auto;
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
{
	position: relative;
	float: right;
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_anchor{
	float: left;
	margin-top: 10px;
	vertical-align: middle;
	margin-right: 5px;
	color: <?php echo $_smarty_tpl->getConfigVariable('sc_lightGrey');?>
;
	font-size: <?php echo $_smarty_tpl->getConfigVariable('sf_tinyText');?>
;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_avatar{
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	float: left;
	margin: 10px 5px 0 5px;
	background-image: linear-gradient(to bottom,#fcfcfc 0,#f8f8f8 100%);
	background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#fcfcfc),color-stop(100%,#f8f8f8));
	background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
	border: 1px solid #d3d3d3;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_flyout{
    background-color: <?php echo $_smarty_tpl->getConfigVariable('sc_white');?>
;
    background: rgba(255,255,255,0.98);
    border: 1px solid #c5c5c5;
    top: 45px;
    -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
    -webkit-border-radius: 3px;
    border: 1px solid rgba(100, 100, 100, .4);
    -webkit-background-clip: padding-box;
    position: absolute;
    width: 150px;
    text-overflow: ellipsis;
    right: 10px;
    width: 200px;
    z-index: 201;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo {
    position: relative;
    float: left;
    background: url("<?php echo $_smarty_tpl->getConfigVariable('si_logo');?>
") no-repeat;
    width: 160px;
    font-family: logo, sans-serif;
    height: 32px;
    margin: 6px 0 6px 16px;
    padding-top: 5px;
    color: #4B4545;
    font-size: 30px;
    font-weight: 600;
    text-shadow: 1px 1px white, -1px -1px #444;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
arrow{
    background-image: url('<?php echo $_smarty_tpl->getConfigVariable('si_arrow');?>
');
    background-repeat: no-repeat;
    background-size: auto;
    height: 11px;
    position: absolute;
    right: 35px;
    top: -11px;
    width: 20px;
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
banner{
    position: relative;
    height: 61px;
    width: 100%;
    color: <?php echo $_smarty_tpl->getConfigVariable('sc_white');?>
;
    z-index: 999;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav{
    background: <?php echo $_smarty_tpl->getConfigVariable('sc_lightBlack');?>
;
    height: 61px;
    border-bottom: .25em solid <?php echo $_smarty_tpl->tpl_vars['darkColor']->value;?>
;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
container{
    position: relative;
    width: <?php echo $_smarty_tpl->getConfigVariable('ss_largeWidth');?>
;
    margin: 0 auto;
    padding: 0;
    overflow:hidden;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav li{
    float: left;
    font-size: 1em;
    text-align: center;
    display: inline-block;
    color: <?php echo $_smarty_tpl->getConfigVariable('sc_lightGrey');?>
;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav li a{
    color: <?php echo $_smarty_tpl->getConfigVariable('sc_lightGrey');?>
;
    display: block;
    font-size: 1.125em;
    font-size: 20px;
    line-height: 59px;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav li a.active{
    background-color: <?php echo $_smarty_tpl->tpl_vars['lightColor']->value;?>
;
    border-bottom: 2px solid <?php echo $_smarty_tpl->tpl_vars['lightColor']->value;?>
;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav li a:hover{
    color:<?php echo $_smarty_tpl->getConfigVariable('sc_white');?>
;
    text-decoration:none;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap{
    position: relative;
    margin: 0 auto;
    bottom: 0px;
    width: <?php echo $_smarty_tpl->getConfigVariable('ss_fullWidth');?>
;
    height: 100%;
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page{
    position: relative;
    overflow-y: hidden;
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
bar{
    position: relative;
    margin: 10px 0;
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_form{
    position:relative;
    top:15px;
    float:left;
    margin-left:10px;
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_input{
    z-index: 3;
    border: 3px solid #dbdbdb;
    text-shadow: 0 0 1px #fff;
    width: inherit;
    height: 26px;
    margin: 0;
    width: 170px;
    right: 0;
    padding: 0 32px 0 6px;  
}
#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_submit{
    z-index: 3;
    background: url("http://techberry.org/images/search.png") no-repeat center center;
    top: 5px;
    position: absolute;
    cursor: pointer;
    right: 0px;
    display: block;
    color: #a6a7a8;
    width: 28px;
    height: 21px;
    font-size: 17px;
    line-height: 21px;
    text-align: center;
    font-weight: 400;
    border: 0;
    border-left: 1px dotted #a6a7a8;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent{
    width:600px !important;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms{
	width:360px !important;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent p, .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms p{
	border-bottom:none !important;
	font: 11px Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size:11px !important;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent .xt ul li p, .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms .xt ul li p{
	display:inline-block;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent .xt ul li p a, .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms .xt ul li p a{
    max-width:400px;
    overflow:hidden;
    text-overflow:ellipsis;
    display: block;
    font: 11px Arial, Helvetica, sans-serif;
    font-weight: bold;
    color:#000;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent .xt ul li p .r_b_us{
    display: inline-block !important;
    outline: none;
    text-align: left;    
    position: relative;
    right: 10px;    
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent .xt ul li p a:hover, .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms .xt ul li p a:hover{
    color: #494949;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent .xt ul li, .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms .xt ul li{
    color:#000;
    margin: 0px;
    height: 35px;
    padding: inherit;
    text-indent: inherit;
    border-bottom: 1px solid #ccc;
    font-size: 12px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    font-weight: bold;
    text-shadow: none;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box{
	box-shadow: 0px 1px 3px rgba(0,0,0,.3);
	float:left;
	width: 310px;
	margin: 0 5px;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .b_t{
	color: #fff;
	text-align: center;
	line-height: 40px;
	font-size: 18px;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .p1{
	background-color: #444449;
	border-bottom: 2px solid <?php echo $_smarty_tpl->tpl_vars['darkColor']->value;?>
;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .p2{
	background-color: #444449;  
	border-bottom: 2px solid <?php echo $_smarty_tpl->tpl_vars['darkColor']->value;?>
;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .p3{
	background-color: #444449;  border-bottom: 2px solid <?php echo $_smarty_tpl->tpl_vars['darkColor']->value;?>
;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .xt{
	background: #ebebf4;
	color: #000;
	text-shadow: 0 -1px 0 rgba(0,0,0,.15);
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .p4{
    background: #000;
    border-bottom: 0.55em solid #838383;
	text-align: left !important;
	line-height: 30px;
	font: bold 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	padding: 10px 15px;
}
.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .xt p{
	margin: 0px;
	padding: 10px 0px;
	text-indent: 15px;
	border-bottom: 1px solid #ccc;
	font-size:12px;
	text-overflow: ellipsis;
	overflow: hidden;
	white-space: nowrap; 
    font-weight:bold;
    text-shadow:none;
}<?php }} ?>
