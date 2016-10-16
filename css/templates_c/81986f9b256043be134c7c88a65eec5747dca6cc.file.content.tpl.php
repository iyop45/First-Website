<?php /* Smarty version Smarty-3.1.16, created on 2014-10-18 04:15:26
         compiled from "./templates/core/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93291400852e40653170ae1-67508527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81986f9b256043be134c7c88a65eec5747dca6cc' => 
    array (
      0 => './templates/core/content.tpl',
      1 => 1413630780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93291400852e40653170ae1-67508527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e40653200a21_03732061',
  'variables' => 
  array (
    'darkColor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e40653200a21_03732061')) {function content_52e40653200a21_03732061($_smarty_tpl) {?>.reputationLink{color:#81BEF7;}a.light{color: #859ce6;}a.light:hover{color: #2445ae;}a.blackButton,input.blackButton,button.blackButton{padding: 0.3em 0.6em;box-shadow: 0 2px 1px rgba(0, 0, 0, 0.3),0 1px 0 rgba(255, 255, 255, 0.4) inset;background-color: #333;color: #fff;border: 1px solid #000!important;border-radius: 3px;text-decoration: none;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 130%;font-weight: bold;border: 1px solid #888;margin: 3px 0;}a.flatBlue,input.flatBlue,button.flatBlue{color: #fff;background-color: transparent;line-height: normal;padding: .8em 1em .8em 1em;display: block;background-color:#9cc;font-weight:700;}a.flatBlue:hover,input.flatBlue:hover,button.flatBlue:hover{background-color: #699;}a.flatRed,input.flatRed,button.flatRed{color: #fff;line-height: normal;padding: .8em 1em .8em 1em;display: block;background-color: #c99;font-weight:700;}a.flatRed:hover,input.flatRed:hover,button.flatRed:hover{background-color: #966;}a.flatLocked,input.flatLocked,button.flatLocked{background-color: #979797;color: #fff;cursor:pointer;line-height: normal;padding: .8em 1em .8em 1em;padding-left: 45px;display: block;background-image: url('http://techberry.org/images/lock.png');background-position: 10px;background-size: 25px 25px;background-repeat: no-repeat;font-weight: 700;}#im{position: fixed;z-index: 9999;bottom: 0px;overflow: hidden;right: 325px;height: 300px;background-color:#e5e5e5;box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);}#im_list{position: fixed;z-index: 9999;bottom: 0px;overflow: hidden;right: 20px;height: 300px;background-color:#e5e5e5;box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);}div.meter{height: 20px;position: relative;background: #555;padding: 10px;}div.meter span{display: block;height: 100%;background-color: rgb(43,194,83);position: relative;overflow: hidden;}div.meter span:hover{background-color: rgb(22, 243, 80);}.offline, .false{background: #c99 !important;}.online, .true{background: #9c9 !important;}.badge{text-decoration: none;white-space: nowrap;color: #fff;background-color: #444449;border: 1px solid #444449;padding: 0px 6px 0px 3px;color: #fff!important;text-decoration: none;line-height: 24px;display: inline-block;font-size:13px;font-weight:500;}.badge:hover{border: 1px solid #555;background-color: #555;text-decoration: none;}.badge1{background-color:#cd7f32;}.badge2{background-color:silver;}.badge3{background-color:gold;}.badge1, .badge2, .badge3 {display: inline-block;overflow: hidden;line-height: inherit;width: 6px;height: 6px;margin: 0 0 0 3px;vertical-align: middle;background-repeat: no-repeat;overflow: hidden;border-radius: 4px;}.item-multiplier{margin: 0 4px;color: #888;font-size: 11px;font-family: Arial,Helvetica,sans-serif;}.terms{color: #777;font-size: 11px;width: 300px;float: left;margin: 0 0 5px 25%;position: relative;left: 15px;height: 30px;}.global_notification{padding: .25em 0;height: 30px;line-height:30px;border-bottom: .125em solid #696;background-color: #9c9;color: #fff;text-align: center;}.success_notification{padding: .25em 0;height: 30px;line-height:30px;border-bottom: .125em solid #F39200;background-color: #F3B200;color: #fff;text-align: center;}.uOnHover:hover{text-decoration:underline;}span.removeNtf{position: absolute;right: 10px;cursor:pointer;}#colorPicker{margin: 12px 0;float:left;}#colorPicker .red{background-color:#c99;}#colorPicker .green{background-color:#9c9;}#colorPicker .blue{background-color:#9cc;}#colorPicker .yellow{background-color:#CC9;}#colorPicker .purple{background-color:#99c;}#colorPicker li{width: 15px;height: 15px;margin: 0 3px 0 0;border: 1px solid rgb(103,153,11);cursor: pointer;float: left;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
notification_box{color: #333;padding: 15px;color: #FFF;text-shadow: -1px -1px 0 rgba(0,0,0,.5);}#notification_bell{position: relative;line-height: 16px;-webkit-appearance: none;width: 25px;height: 25px;float: left;opacity:0.35;transition: opacity .4s ease-in-out;-moz-transition: opacity .4s ease-in-out;-webkit-transition: opacity .4s ease-in-out;background: url('http://techberry.org/images/notification_bell.png');background-repeat: no-repeat;background-size: 100% 100%;-webkit-animation-duration: 2s;-webkit-animation-delay: 2s;-webkit-animation-iteration-count:20;-moz-animation-duration: 2s;-moz-animation-delay: 2s;-moz-animation-iteration-count:20;-o-animation-duration: 2s;-o-animation-delay: 2s;-o-animation-iteration-count:20;}#notification_bell:hover{opacity:1;}#notification_overlay{position:fixed;width:100%;height:100%;opacity:0.4;z-index:200;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
error_notification{background:#c04848;}.#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
success_notification{background:rgba(65, 148, 18, 0.9);}#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login{position: relative;height: 100%;float: right;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap{position: relative;margin: 0 auto;bottom: 0px;width: <?php echo $_smarty_tpl->getConfigVariable('ss_fullWidth');?>
;height: 100%;}#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page{position: relative;overflow-y: hidden;}#<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
bar{position: relative;margin: 10px 0;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_form{position:relative;top:15px;float:left;margin-left:10px;}#q, #<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_input{z-index: 3;border: 3px solid #dbdbdb;text-shadow: 0 0 1px #fff;width: inherit;height: 26px;margin: 0;width: 170px;right: 0;padding: 0 32px 0 6px;}#sa, #<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_submit{z-index: 3;background: url("http://techberry.org/images/search.png") no-repeat center center;top: 5px;position: absolute;cursor: pointer;right: 0px;display: block;color: #a6a7a8;width: 28px;height: 21px;font-size: 17px;line-height: 21px;text-align: center;font-weight: 400;border: 0;border-left: 1px dotted #a6a7a8;}.gs-snippet{padding-left:8px;padding-right:8px;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent{width:600px !important;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms{width:360px !important;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent p, .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms p{border-bottom:none !important;font: 11px Arial, Helvetica, sans-serif;font-weight: bold;font-size:11px !important;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent .xt ul li p, .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms .xt ul li p{display:inline-block;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent .xt ul li p a, .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms .xt ul li p a{max-width:400px;overflow:hidden;text-overflow:ellipsis;display: block;font: 11px Arial, Helvetica, sans-serif;font-weight: bold;color:#000;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent .xt ul li p .r_b_us{display: inline-block !important;outline: none;text-align: left;position: relative;right: 10px;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent .xt ul li p a:hover, .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms .xt ul li p a:hover{color: #494949;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_recent .xt ul li, .<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
m_platforms .xt ul li{color:#000;margin: 0px;height: 35px;padding: inherit;text-indent: inherit;border-bottom: 1px solid #ccc;font-size: 12px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;font-weight: bold;text-shadow: none;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box{box-shadow: 0px 1px 3px rgba(0,0,0,.3);float:left;width: 310px;margin: 0 5px;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .b_t{color: #fff;text-align: center;line-height: 40px;font-size: 18px;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .p1{background-color: #444449;border-bottom: 2px solid <?php echo $_smarty_tpl->tpl_vars['darkColor']->value;?>
;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .p2{background-color: #444449;border-bottom: 2px solid <?php echo $_smarty_tpl->tpl_vars['darkColor']->value;?>
;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .p3{background-color: #444449;  border-bottom: 2px solid <?php echo $_smarty_tpl->tpl_vars['darkColor']->value;?>
;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .xt{background: #ebebf4;color: #000;text-shadow: 0 -1px 0 rgba(0,0,0,.15);}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .p4{background: #000;border-bottom: 0.55em solid #838383;text-align: left !important;line-height: 30px;font: bold 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;padding: 10px 15px;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
box .xt p{margin: 0px;padding: 10px 0px;text-indent: 15px;border-bottom: 1px solid #ccc;font-size:12px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;font-weight:bold;text-shadow:none;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comment_box{background-color: #fff;border: 1px solid #e5e5e5;border-bottom: 1px solid #eee;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comment_holder{padding: 18px 22px 10px 22px;}textarea.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comment_textarea{background-color: #fff;border: 1px solid #e5e5e5;box-sizing: border-box;margin: 2px 0px;color: #222;display: inline-block;font-family: arial;max-width:100%;font-size: 13px;padding: 5px 2px 2px 5px;vertical-align: top;width: 100%;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;-webkit-border-radius: 1px;-webkit-appearance: none;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comment_buttons{background-color: #f5f5f5;padding: 2px 5px 8px 2px;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comment_buttons input{margin: 8px 0 0 18px;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comments .comment_wrap{overflow:hidden;margin:20px 0;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comments .comment_avatar{float:left;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comments .comment_content_wrap{font-size: 14px;color: #444;line-height: 1.4;font-weight: bolder;padding-left:15px;overflow:hidden;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comments .comment_content_child{float:left;text-align:left;text-overflow:hidden;}.<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comments p{font-weight:bold;padding-left: 20px;font-size:16px;overflow: hidden;}<?php }} ?>
