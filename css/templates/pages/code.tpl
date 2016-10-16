{strip}
#{#prefixCode#}header{
	width: 100%;
	height: 32px;
	background: none repeat scroll 0 0 #F1F1F1;
	border-bottom: 1px solid #E8E8E8;
	padding: 0 0 6px;
	position: relative;
}
.{#prefixCode#}center{
	height: 100%;
	position: relative;
	width: 80%;
	margin: 0 auto;
	padding-top: 3px;
}
#{#prefixCode#}logo{
	position: relative;
	float: left;
	margin-right: 90px;
	width: 150px;
	height: 100%;
	margin-top:4px;
	background: url("http://techberry.org/images/logo.png") no-repeat;
}
#{#prefixCode#}interface{
	position: relative;
	float: left;
	height: 100%;
	width: auto;
}
.{#prefixCode#}icon{
	height: 25px;
	position: relative;
	float: left;
	margin-right: 10px;
	cursor: pointer;
	padding:5px;
}
.{#prefixCode#}icon:hover{
	background:#dddddd;
}
.{#prefixCode#}icon span{
	padding: 0;
	position: relative;
	margin-left: 5px;
	margin-right: 5px;
	bottom: 8px;
	font-family: "Helvetica Neue","HelveticaNeue",Helvetica,Arial,sans-serif;
	color: #444;
	font-weight:bold;
}
.{#prefixCode#}icon img{
	height: 25px;
	width: 25px;
}
#{#prefixCode#}settings{
	position: absolute;
	right: 50%;
	width: 130px;
	height: 50px;
	z-index: 200;
	background: #f5f5f5;
	padding: 15px;
	-webkit-border-bottom-left-radius: 6px;
	-webkit-border-bottom-right-radius: 6px;
	-moz-border-radius-bottomleft: 6px;
	-moz-border-radius-bottomright: 6px;
	border-bottom-right-radius: 6px;
	border-bottom-left-radius: 6px;
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2), 0 0 0 #000000 inset;
}
.{#prefixCode#}center{
	height: 100%;
	position: relative;
	width: 80%;
	margin: 0 auto;
	padding-top: 3px;
}
#slideshow{
	height: 50px;
	position: relative;
	width: 100px;
}
#slideshow ul{
	height: 50px;
	list-style: none outside none;
	overflow: hidden;
	position: absolute;
	width: 100px;
}
#slideshow ul li:first-child{
	display: block;
	z-index: 1000;
}
#slideshow ul li{
	position: absolute;
	display: none;
	z-index: 10;
}
#slideshow ul li canvas{
	display:none;
}
#slideshow ul li img{
	cursor: pointer;
}
#slideshow .arrow{
	height: 15px;
	width: 15px;
	position: absolute;
	top: 50%;
	margin-top: -10px;
	cursor: pointer;
	z-index: 5000;
}
#slideshow .previous{
	background: url("http://techberry.org/code/images/arrow_left.png") no-repeat scroll 0 0 / 100% 100% transparent;
	left: -20px;
}
#slideshow .next{
	background: url("http://techberry.org/code/images/arrow_right.png") no-repeat scroll 0 0 / 100% 100% transparent;
	right: -20px;
}
#{#prefixCode#}overlay{
	position: absolute;
	z-index: 60;
	display: none;
	top: 43px;
	height: 100%;
	width: 100%;
}
#{#prefixCode#}overlay:hover .light_tag{
	display:none;
}
.{#prefixCode#}dashboard_list{
	margin:20px 50px;
}
.{#prefixCode#}dashboard_list_item{
	margin-bottom: 20px;
	position: relative;
}
.{#prefixCode#}dashboard_list_title{
	font-size: 14px;
	font-weight: 700;
	margin-bottom:10px;
}
.{#prefixCode#}dashboard_list_title a{
	color: #262B33;
}
.{#prefixCode#}dashboard_list_title a:hover{
	text-decoration:underline;
}
.{#prefixCode#}dashboard_list_preview{
	background: #3a474f;
	color: #fff;
	border-radius: 2px;
	overflow: hidden;
	padding: 10px;
	font-size: 11px;
	font-family: "Monaco", sans-serif;
}
{/strip}