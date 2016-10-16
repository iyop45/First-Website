{strip}
.{#prefixGlobal#}error_notification{
	background:#c04848;
}
.#{#prefixGlobal#}success_notification{
	background:rgba(65, 148, 18, 0.9);
}
#{#prefixGlobal#}login{
	position: relative;
	height: 100%;
	float: right;
}
.{#prefixGlobal#}wrap{
	position: relative;
	margin: 0 auto;
	bottom: 0px;
	width: {#ss_fullWidth#};
	height: 100%;
}
#{#prefixGlobal#}page{
	position: relative;
	overflow-y: hidden;
}
#{#prefixGlobal#}bar{
	position: relative;
	margin: 10px 0;
}
.{#prefixGlobal#}search_form{
	position:relative;
	top:15px;
	float:left;
	margin-left:10px;
}
#q, #{#prefixGlobal#}search_input{
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
#sa, #{#prefixGlobal#}search_submit{
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
.gs-snippet{
	padding-left:8px;
	padding-right:8px;
}
.{#prefixGlobal#}m_recent{
	width:600px !important;
}
.{#prefixGlobal#}m_platforms{
	width:360px !important;
}
.{#prefixGlobal#}m_recent p, .{#prefixGlobal#}m_platforms p{
	border-bottom:none !important;
	font: 11px Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size:11px !important;
}
.{#prefixGlobal#}m_recent .xt ul li p, .{#prefixGlobal#}m_platforms .xt ul li p{
	display:inline-block;
}
.{#prefixGlobal#}m_recent .xt ul li p a, .{#prefixGlobal#}m_platforms .xt ul li p a{
	max-width:400px;
	overflow:hidden;
	text-overflow:ellipsis;
	display: block;
	font: 11px Arial, Helvetica, sans-serif;
	font-weight: bold;
	color:#000;
}
.{#prefixGlobal#}m_recent .xt ul li p .r_b_us{
	display: inline-block !important;
	outline: none;
	text-align: left;
	position: relative;
	right: 10px;
}
.{#prefixGlobal#}m_recent .xt ul li p a:hover, .{#prefixGlobal#}m_platforms .xt ul li p a:hover{
	color: #494949;
}
.{#prefixGlobal#}m_recent .xt ul li, .{#prefixGlobal#}m_platforms .xt ul li{
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
.{#prefixGlobal#}box{
	box-shadow: 0px 1px 3px rgba(0,0,0,.3);
	float:left;
	width: 310px;
	margin: 0 5px;
}
.{#prefixGlobal#}box .b_t{
	color: #fff;
	text-align: center;
	line-height: 40px;
	font-size: 18px;
}
.{#prefixGlobal#}box .p1{
	background-color: #444449;
	border-bottom: 2px solid {$darkColor};
}
.{#prefixGlobal#}box .p2{
	background-color: #444449;  
	border-bottom: 2px solid {$darkColor};
}
.{#prefixGlobal#}box .p3{
	background-color: #444449;  border-bottom: 2px solid {$darkColor};
}
.{#prefixGlobal#}box .xt{
	background: #ebebf4;
	color: #000;
	text-shadow: 0 -1px 0 rgba(0,0,0,.15);
}
.{#prefixGlobal#}box .p4{
	background: #000;
	border-bottom: 0.55em solid #838383;
	text-align: left !important;
	line-height: 30px;
	font: bold 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	padding: 10px 15px;
}
.{#prefixGlobal#}box .xt p{
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
}
.{#prefixGlobal#}comment_box{
	background-color: #fff;
	border: 1px solid #e5e5e5;
	border-bottom: 1px solid #eee;
}
.{#prefixGlobal#}comment_holder{
	padding: 18px 22px 10px 22px;
}
textarea.{#prefixGlobal#}comment_textarea{
	background-color: #fff;
	border: 1px solid #e5e5e5;
	box-sizing: border-box;
	margin: 2px 0px;
	color: #222;
	display: inline-block;
	font-family: arial;
	max-width:100%;
	font-size: 13px;
	padding: 5px 2px 2px 5px;
	vertical-align: top;
	width: 100%;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-webkit-border-radius: 1px;
	-webkit-appearance: none;
}
.{#prefixGlobal#}comment_buttons{
	background-color: #f5f5f5;
	padding: 2px 5px 8px 2px;
}
.{#prefixGlobal#}comment_buttons input{
	margin: 8px 0 0 18px;
}
.{#prefixGlobal#}comments .comment_wrap{
	overflow:hidden;
	margin:20px 0;
}
.{#prefixGlobal#}comments .comment_avatar{
	float:left;
}
.{#prefixGlobal#}comments .comment_content_wrap{
	font-size: 14px;
	color: #444;
	line-height: 1.4;
	font-weight: bolder;
	padding-left:15px;
	overflow:hidden;
}
.{#prefixGlobal#}comments .comment_content_child{
	float:left;
	text-align:left;
	text-overflow:hidden;
}
.{#prefixGlobal#}comments p{
	font-weight:bold;
	padding-left: 20px;
	font-size:16px;
	overflow: hidden;
}
/* user styles */
#{#prefixGlobal#}{#subPrefixUser#}_header_block{
	position: relative;
	float: right;
}
#{#prefixGlobal#}{#subPrefixUser#}_header_block .{#prefixGlobal#}{#subPrefixUser#}_link{
	float: left;
	margin-top: 10px;
	vertical-align: middle;
	margin-right: 5px;
	color: #666;
	font-size: 11px;
	text-decoration: none;
}
.{#prefixGlobal#}{#subPrefixUser#}_reputation{
	float: left;
	margin-top: 13px;
	vertical-align: middle;
	margin-right: 5px;
	color: #666;
	font-size: 11px;
}
.{#prefixGlobal#}{#subPrefixUser#}_reputation:hover a{
	text-decoration:underline;
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
.{#prefixGlobal#}{#subPrefixUser#}_box .{#prefixGlobal#}{#subPrefixUser#}_text{
	float: left;
	font-size: 12px;
	color: #888;
}
.{#prefixGlobal#}{#subPrefixUser#}_text .{#prefixGlobal#}{#subPrefixUser#}_sideIcon{
	display: block;
	float: left;
	text-decoration: none;
	margin-right: 5px;
	max-width: 100px;
}
.{#prefixGlobal#}{#subPrefixUser#}_clean_link{
	color: #859ce6;
}
{/strip}