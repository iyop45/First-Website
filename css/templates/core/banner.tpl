{strip}
.{#prefixGlobal#}{#subPrefixHeader#}_head_btn{
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
#{#prefixGlobal#}{#subPrefixHeader#}{
	font: 13px/18px {#sff_head#};
	font-size: {#sf_midText#};
	text-align: center;
	background-image: url('{#si_banner#}');
	background-repeat: repeat;
	background-position: bottom center;
	height: 43px;
	line-height: 19px;
	padding-bottom: 6px;
	background: #f1f1f1;
	z-index: 1001;
	border-bottom: 1px solid #e8e8e8;
	{if $fixedBanner}
		width:100%;
		position: fixed;
	{else}
		position: relative;
	{/if}
}
#{#prefixGlobal#}{#subPrefixHeader#}_{#subPrefixWrap#}{
	height: 100%;
	width: {#ss_fullWidth#};
	margin: 0 auto;
}
#{#prefixGlobal#}{#subPrefixUser#}{
	position: relative;
	float: right;
}
#{#prefixGlobal#}{#subPrefixUser#}_anchor{
	float: left;
	margin-top: 10px;
	vertical-align: middle;
	margin-right: 5px;
	color: {#sc_lightGrey#};
	font-size: {#sf_tinyText#};
}
.{#prefixGlobal#}{#subPrefixUser#}_avatar{
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
.{#prefixGlobal#}{#subPrefixUser#}_flyout{
	background-color: #fff;
	background: rgba(255,255,255,0.98);
	border: 1px solid #c5c5c5;
	top: 45px;
	-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
	-webkit-border-radius: 3px;
	border: 1px solid rgba(100, 100, 100, .4);
	-webkit-background-clip: padding-box;
	position: absolute;
	text-overflow: ellipsis;
	right: 10px;
	z-index: 201;
}
.{#prefixGlobal#}{#subPrefixUser#}_flyout .{#prefixGlobal#}{#subPrefixUser#}_box{
	border-bottom: 1px solid #F3F3F3;
	margin: 3px 3px 0;
	padding: 3px 4px;
	overflow: hidden;
}
.{#prefixGlobal#}logo {
	position: relative;
	float: left;
	background: url("{#si_logo#}") no-repeat;
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
.{#prefixGlobal#}arrow{
	background-image: url('{#si_arrow#}');
	background-repeat: no-repeat;
	background-size: auto;
	height: 11px;
	position: absolute;
	right: 35px;
	top: -11px;
	width: 20px;
}
#{#prefixGlobal#}banner{
	position: relative;
	height: 61px;
	width: 100%;
	z-index: 1;
	color: {#sc_white#};
	{if $fixedBanner}
		padding-top: 50px;
	{/if}
}
.{#prefixGlobal#}main-nav{
	background: {#sc_lightBlack#};
	height: 61px;
	border-bottom: .25em solid {$darkColor};
}
.{#prefixGlobal#}container{
	position: relative;
	width: {#ss_largeWidth#};
	margin: 0 auto;
	padding: 0;
	overflow:hidden;
}
.{#prefixGlobal#}main-nav li{
	float: left;
	font-size: 1em;
	text-align: center;
	display: inline-block;
	color: {#sc_lightGrey#};
}
.{#prefixGlobal#}main-nav li a{
	color: {#sc_lightGrey#};
	display: block;
	font-size: 1.125em;
	font-size: 20px;
	line-height: 59px;
}
.{#prefixGlobal#}main-nav li a.active{
	background-color: {$lightColor};
	border-bottom: 2px solid {$lightColor};
}
.{#prefixGlobal#}main-nav li a:hover{
	color:{#sc_white#};
	text-decoration:none;
}
.{#prefixGlobal#}notification{
	padding: .25em 0;
	height: 1.5em;
	border-bottom: .125em solid {#sc_darkGreen#};
	background-color: {#sc_lightGreen#};
	color: #fff;
	text-align: center;
}
.{#prefixGlobal#}{#subPrefixUser#}_notification {
	position: relative;
	height: 30px;
	width: 100%;
	color: #443838;
	background-color: {#sc_lightOrange#};
	border-bottom: .125em solid {#sc_darkOrange#};
	text-align: center;
	line-height: 30px;
}
{/strip}