<?php /* Smarty version Smarty-3.1.16, created on 2014-01-25 06:57:52
         compiled from "./templates/pages/global.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88057634252e1a14875b388-48326055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b47f3906997b1bc103751513c05a795041dcb187' => 
    array (
      0 => './templates/pages/global.tpl',
      1 => 1390658238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88057634252e1a14875b388-48326055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e1a1487a8f11_49487465',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e1a1487a8f11_49487465')) {function content_52e1a1487a8f11_49487465($_smarty_tpl) {?>body{
    overflow-y:scroll;
    min-width:960px;
    margin:0;    
    background: #fff;
}
input{
    font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
}
html, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-weight: inherit;
	font-style: inherit;
	font-size: 100%;
	font-family: inherit;
	vertical-align: baseline;
}
html,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td { margin:0; padding:0; border:0; outline:0; font-weight:inherit; font-style:inherit; font-size:100%; font-family:inherit; vertical-align:baseline; }
:focus { outline:0; }
a:active { outline:none; }
table { border-collapse:separate; border-spacing:0; }
caption,th,td { text-align:left; font-weight:normal; }
blockquote:before,blockquote:after,q:before,q:after { content:""; }
blockquote,q { quotes:"" ""; }
strong{
    color: #000000;
	font-weight:700;
}
a{
	text-decoration:none;
}
sub{
    vertical-align: sub;
    font-size: smaller;
}
sup{
    vertical-align: super;
    font-size: smaller;
}
.confirm{
    background-color: #6891e7;
    border-color: #3f76b7;
	position: relative;
	display: inline block;
	color: #EEE;
	cursor: pointer;
	outline: none;
	font-weight: bold;
    -webkit-appearance: none;
	background-image: -moz-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: -ms-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: -o-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#5384be),color-stop(100%,#3f76b7));
	background-image: -webkit-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: linear-gradient(to bottom,#5384be 0,#3f76b7 100%);    
}
button.confirm,button.logout,button.blue{
	background-color: #6891e7;
	border-color: #3f76b7;
	position: relative;
	display: inline block;
	color: #EEE;
	cursor: pointer;
	outline: none;
	font-weight: bold;
    -webkit-appearance: none;
	background-image: -moz-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: -ms-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: -o-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#5384be),color-stop(100%,#3f76b7));
	background-image: -webkit-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: linear-gradient(to bottom,#5384be 0,#3f76b7 100%);
}
button.decline,button.admin,button.red{
    background-color: #E76868;
    border-color: #B73F3F;
    position: relative;
    display: inline block;
    color: #EEE;
    cursor: pointer;
    outline: none;
    font-weight: bold;
    -webkit-appearance: none;
    background-image: -moz-linear-gradient(top,#5384be 0,#3f76b7 100%);
    background-image: -ms-linear-gradient(top,#5384be 0,#3f76b7 100%);
    background-image: -o-linear-gradient(top,#5384be 0,#3f76b7 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#BE5353),color-stop(100%,#B73F3F));
    background-image: -webkit-linear-gradient(top,#BE5353 0,#B73F3F 100%);
    background-image: linear-gradient(to bottom,#BE5353 0,#B73F3F 100%);
}

.inline{
    height: auto;
    width: 200px;
    font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
}
.inline h3{
    color: #4AA02C;
    font-size: 25px;
}
.check{
    width: 80px;
    height: 26px;
    background: #666;
    float: right;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    position: relative;
    -webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
    -moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
    box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
}
.check label{
    display: block;
    width: 34px;
    height: 20px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    -webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    -o-transition: all .4s ease;
    -ms-transition: all .4s ease;
    transition: all .4s ease;
    cursor: pointer;
    position: absolute;
    top: 3px;
    left: 3px;
    z-index: 1;
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
    background: #fcfff4;
    background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
}
#side_bar{
    width: 200px;
    height: 100%;
    position: absolute;
    background-color: #F1F1F1;
    padding: 20px 20px 0 20px;
}
#side_main_list{
    margin-top: 40px;
}
#side_main_list li{
    line-height: 30px;
    font-size: 25px;
    padding: 8px;
}
#side_main_list a li{
    color: #666;
}
#side_main_list .active{
    background-color: #8cbe29;
    color: #F1F1F1;
}
#side_content{
    float: left;
    min-height: 600px;
    padding: 30px;
    margin-left: 240px;
}
#acc_info{
    height: 80px;
    min-width: 100px;
}
.avatar{
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
.break{
    margin: 15px 0;
}
.break p{
    white-space: nowrap;
}
.name{
    font-weight: bold;
    color: #AAAAAA;
    margin: 4px;
}
.grey{
    background-color: #ccc;
    color: #000000;
}
button.red, input.red{
    background-color: #E76868;
    border-color: #B73F3F;
    position: relative;
    display: inline block;
    color: #EEE;
    cursor: pointer;
    outline: none;
    font-weight: bold;
    -webkit-appearance: none;
    background-image: -moz-linear-gradient(top,#5384be 0,#3f76b7 100%);
    background-image: -ms-linear-gradient(top,#5384be 0,#3f76b7 100%);
    background-image: -o-linear-gradient(top,#5384be 0,#3f76b7 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#BE5353),color-stop(100%,#B73F3F));
    background-image: -webkit-linear-gradient(top,#BE5353 0,#B73F3F 100%);
    background-image: linear-gradient(to bottom,#BE5353 0,#B73F3F 100%);
}
#pagnation{
    margin-top:6px;
}
#pagnation .paginate{
    display: inline-block;
    padding: 0px 9px;
    margin-right: 4px;
    border-radius: 3px;
    border: solid 1px #c0c0c0;
    background: #e9e9e9;
    box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
    font-size: .875em;
    font-weight: bold;
    text-decoration: none;
    color: #717171;
    text-shadow: 0px 1px 0px rgba(255,255,255, 1);
}
#pagnation a.paginate:hover{
    background: #fefefe;
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FEFEFE), to(#f0f0f0));
    background: -moz-linear-gradient(0% 0% 270deg,#FEFEFE, #f0f0f0);
}
#pagnation .paginate.active {
    border: none;
    background: #616161;
    box-shadow: inset 0px 0px 8px rgba(0,0,0, .5), 0px 1px 0px rgba(255,255,255, .8);
    color: #f0f0f0;
    text-shadow: 0px 0px 3px rgba(0,0,0, .5);
}
<?php }} ?>
