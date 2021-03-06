{strip}
body{
	overflow-y:scroll;
	overflow-x:hidden;
	min-width:960px;
	margin:0;
	background: #fff;
}
input{
	font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
}
b{
	font-weight:700;
}
a{
	cursor:pointer !important;
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
.groupBadge{
	margin-bottom: 10px;
	background-color: dodgerblue;
	font-family: helvetica, arial, verdana, 'ms sans serif', sans-serif;
	text-decoration: none!important;
	color: white !important;
	border-radius: 45px;
	-moz-border-radius: 45px;
	font-size: 0.8em;
	font-weight: bold;
	padding: 2px 6px;
	cursor:pointer;
}
.groupBadge:hover{
	box-shadow: 0px 4px 5px 0px #CCC;
}
.generalBadge{
	margin-bottom: 10px;
	background-color: rgb(75, 75, 75);
	font-family: helvetica, arial, verdana, 'ms sans serif', sans-serif;
	text-decoration: none!important;
	color: white !important;
	border-radius: 45px;
	-moz-border-radius: 45px;
	font-size: 0.8em;
	font-weight: bold;
	padding: 2px 6px;
	cursor:pointer;
}
.generalBadge:hover{
	box-shadow: 0px 4px 5px 0px #CCC;
	text-decoration:none !important;
}
.spoiler {
	background-color: rgba(35,172,27,0.72);
	display: inline-block;
	border-radius: 5px;
	cursor: pointer;
	color: white;
	margin-bottom: 0.8em;
	padding: 5px;
	-webkit-box-shadow: 0 0 1px 1px  #3D4B3F;
	box-shadow: 0 0 1px 1px #3D4B3F;
}
.spoiler-active {
	background-color: transparent;
	color:black;
}
.lightPadding{
	padding:10px !important;
}
.lightMargin{
	margin:10px !important;
}
code{
	background-color:#A5A5A5;
}
hr.small{
	border-top:none;
	border-bottom: 1px solid #aaa;
}
hr.medium{
	border-top:none;
	border-bottom: 2px solid #aaa;
}
hr.medium-dotted{
	border-top:none;
	border-bottom: 2px dotted #DDF;
}
hr{
	border: 2px solid #ccc;
}
.break {
	margin: 15px 0;
}
.strikethrough, .strike-through{
	text-decoration: line-through;
}
.important, .color-red{
	color: #C60B46;
}
#sceditor{
	border:3px solid #dbdbdb;
	border-radius:0;
}
.endOfTheLine{
	text-align:center;
	margin-top:5px;
	color: #353535;
	font: bold 1.9em Arial,Helvetica,Sans-serif;
	line-height: 26px;
	font-size: 22px;
	white-space: nowrap;
}
/** Fifth Design Pagination (dark) **/
.paginate.pag {
  font-size: 1.4em;
  padding: 9px 8px;
  background: #444449;
  overflow: hidden;
}

.paginate.pag li { font-weight: bold; }

.paginate.pag li a {
  display: block;
  float: left;
  color: #444449;
  text-decoration: none;
  padding: 9px 12px;
  margin-right: 6px;
  background: #fff;
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  transition: all 0.3s linear;
}
.paginate.pag li a:hover {
  background: #f1f1f1;
}
.paginate.pag li a:active {
  -webkit-box-shadow: 1px 1px 3px -1px rgba(0,0,0, .55);
  -moz-box-shadow: 1px 1px 3px -1px rgba(0,0,0, .55);
  box-shadow: 1px 1px 3px -1px rgba(0,0,0, .55);
}

.paginate.pag li.navpage a {
  padding: 9px 13px;
  background: #fff;
}
.paginate.pag li.navpage a:hover {
  background: #f1f1f1;
}

.paginate.pag li.current { }
.paginate.pag li.single, .paginate.pag li.current {
  display: block;
  float: left;
  padding: 9px 12px;
  margin-right: 6px;
  color: #fff;
}
ins{
	color: green;
	background: #dfd;
	text-decoration: none;
}
del{
	color: red;
	background: #fdd;
	text-decoration: none;
}
a.default{
	color: #859ce6;
}
a.default:hover{
	color: #2445ae;
}
blockquote {
  background: #f9f9f9;
  border-left: 10px solid #ccc;
  margin: 1.5em 10px;
  padding: 0.5em 10px;
  quotes: "\201C""\201D""\2018""\2019";
}
blockquote:before {
  color: #ccc;
  content: open-quote;
  font-size: 4em;
  line-height: 0.1em;
  margin-right: 0.25em;
  vertical-align: -0.4em;
}
blockquote p {
  display: inline;
}
.label{
	font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
	font-size: 12px;
	color: #888;
	vertical-align: middle;
}
.help{
	cursor:help;
}
.sans-serif{
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
}
.next{
	float:right;
}
.prev{
	float:left;
}
.style-hovercard{
	box-shadow: rgba(0, 0, 0, 0.298039) 0px 4px 16px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 2px 8px rgba(0,0,0,0.2);
	box-shadow: 0 2px 8px rgba(0,0,0,0.2);
	-webkit-transition: opacity .13s linear;
	transition: opacity .13s linear;
	background-color: #fff;
	border: 1px solid #c8c8c8;
	color: #999;
	font-family: arial,sans-serif;
	overflow: hidden;
}
#bug-report{
	position:fixed;
	min-width:150px;
	min-height:150px;
	z-index:5000;
	top:50%;
	left:50%;
	margin-left:-50px;
	margin-top:-50px;
	background-color: white;
	border: 1px solid;
	border-color: #bbb #bbb #a8a8a8;
	-webkit-box-shadow: 0 4px 16px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 4px 16px rgba(0,0,0,0.2);
	box-shadow: 0 4px 16px rgba(0,0,0,0.2);
	font-family: Arial,sans-serif;
	max-width: 450px;
}
.ajax-frame{
	position:fixed;
	min-width:150px;
	min-height:150px;
	z-index:5000;
	top:50%;
	left:50%;
	margin-left:-50px;
	margin-top:-50px;
	background-color: white;
	border: 1px solid;
	border-color: #bbb #bbb #a8a8a8;
	-webkit-box-shadow: 0 4px 16px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 4px 16px rgba(0,0,0,0.2);
	box-shadow: 0 4px 16px rgba(0,0,0,0.2);
	font-family: Arial,sans-serif;
	max-width: 450px;
}
.body-arrow{
	position: absolute;
	top: -22px;
	right: 32px;
	left: auto;
	bottom: auto;
	width: 0;
	height: 0;
	vertical-align: top;
	background: none repeat scroll 0 0 transparent;
	border: 12px solid transparent;
	border-bottom-color: #e5e5e5;
}
.light_tag{
	position: absolute;
	top: 5px;
	right: 5px;
	z-index: 3;
}
.light_tag .language{
	border: solid 1px #F1F1F1;
	background: #fff;
	display: inline-block;
	height: 22px;
	padding: 0 6px;
	line-height: 22px;
	position: relative;
	float: left;
	text-align: center;
	font-size: 12px;
	color: #777;
	border-radius: 1px;
}
.side_page_overlay{
	float: left;
	width: 50%;
	height: 100%;
	position: absolute;
}
table.reference{
	font-size: 14px;
}
table.reference tbody{
	display: table-row-group;
	vertical-align: middle;
	border-color: inherit;
}
table.reference tr:nth-child(odd){
	background-color: #F6F4F0;
}
table.reference tr:nth-child(even){
	background-color: #ffffff;
}
input.h_input{
	border: 1px solid #A9A9A9;
	/*border-radius: 3px 3px 3px 3px;*/
	color: #555555;
	height: 25px;
	line-height: 25px;
	margin: 10px 0 10px 10px;
	padding: 0 26px 0 5px;
	position: relative;
	float: left;
	width: 155px;
}
table.reference th{
	color: #ffffff;
	background-color: #555555;
	border: 1px solid #555555;
	padding: 3px;
	vertical-align: top;
	text-align: left;
	font-weight:bolder;
}
table.reference td{
	border: 1px solid #d4d4d4;
	padding: 5px;
	padding-top: 7px;
	padding-bottom: 7px;
	vertical-align: top;
}
input.h_login{
	background-color: #222222;
	border: 0 none;
	/*border-radius: 3px 3px 3px 3px;*/
	color: #EEEEEE;
	cursor: pointer;
	-webkit-appearance: none;
	color: #EEE;
	cursor: pointer;
	outline: none;
	font-weight: bold;
	height: 25px;
	margin: 10px 0 10px 10px;
	outline: medium none;
	position: relative;
	float: left;
	width: 80px;
	font-size: 0.8em;
}
a.h_sign-up{
	text-decoration: none !important;
	background-color: #335181 !important;
	color: #EEEEEE !important;
	font-weight: bold;
	height: 25px;
	margin: 10px 0 10px 10px;
	outline: medium none;
	position: relative;
	float: left;
	width: 80px;
	font-size: 0.8em;
	border: 0 none;
	/*border-radius: 3px 3px 3px 3px;*/
}
a.h_sign-up span{
	position: relative;
	top: 3px;
}
#login_error{
	position:relative;
	float:right;
	margin:14px 0;
	font-size:10px;
}
.unpopular{
	opacity:0.35;
	transition: opacity .4s ease-in-out;
	-moz-transition: opacity .4s ease-in-out;
	-webkit-transition: opacity .4s ease-in-out;
}
.unpopular:hover{
	opacity:1;
}
#noscript{
	font-family: sans-serif;
	top: 0px;
	left: 0px;
	width: 100%;
	z-index: 101;
	text-align: center;
	font-weight: bold;
	font-size: 14px;
	color: #fff;
	background-color: #AE0000;
	padding: 5px 0px 5px 0px;
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
button.confirm,button.logout,button.blue,input.blue,a.blue{
	text-align: center;
	cursor: default;
	color: buttontext;
	padding: 2px 6px 3px;
	border: 2px outset buttonface;
	height: 2.55em;
	padding: 0 .9em;
	border-width: 1px;
	border-style: solid;
	outline: 0;
	font-weight: bold;
	font-size: 11px;
	white-space: nowrap;
	word-wrap: normal;
	vertical-align: middle;
	cursor: pointer;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	color: #FFFFFF;
	background-color: #6891e7;
	border-color: #3f76b7;
	text-shadow: 0 1px 0 rgba(0,0,0,.25);
	filter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#ff5384be,EndColorStr=#ff3f76b7);
	background-image: -moz-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: -ms-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: -o-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#5384be),color-stop(100%,#3f76b7));
	background-image: -webkit-linear-gradient(top,#5384be 0,#3f76b7 100%);
	background-image: linear-gradient(to bottom,#5384be 0,#3f76b7 100%);
}
button.decline,button.admin,button.red,input.red,a.red{
	font: 16px Arial, Helvetica, sans-serif;
	background-color: #E76868;
	border-color: #B73F3F;
	position: relative;
	display: inline block;
	color: #EEE;
	cursor: pointer;
	outline: none;
	font-weight: bold;
	text-align: center;
	cursor: default;
	color: buttontext;
	padding: 2px 6px 3px;
	border: 2px outset buttonface;
	height: 2.55em;
	padding: 0 .9em;
	border-width: 1px;
	border-style: solid;
	outline: 0;
	font-weight: bold;
	font-size: 11px;
	white-space: nowrap;
	word-wrap: normal;
	vertical-align: middle;
	cursor: pointer;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	color: #FFFFFF;
	border-color: #b01d1d;
	text-shadow: 0 1px 0 rgba(0,0,0,.25);
	filter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#ff5384be,EndColorStr=#ff3f76b7);
	background: #941919;
	background-image: -moz-linear-gradient(top,#b91f1f 0,#b01d1d 100%);
	background-image: -ms-linear-gradient(top,#b91f1f 0,#b01d1d 100%);
	background-image: -o-linear-gradient(top,#b91f1f 0,#b01d1d 100%);
	background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#b91f1f),color-stop(100%,#b01d1d));
	background-image: -webkit-linear-gradient(top,#b91f1f 0,#b01d1d 100%);
	background-image: linear-gradient(to bottom,#b91f1f 0,#b01d1d 100%);
}
input.flatGreen,button.flatGreen{
	-webkit-appearance:none;
	cursor: pointer;
	display: inline-block;
	letter-spacing: 1px;
	position: relative;
	min-width: 200px;
	border:0;
	margin-left: 25%;
	left: 15px;
	height: 40px;
	background: #70ac00;
	border-bottom: 3px solid #5a8c00;
	color: #fff;
	cursor: pointer;
	font-size: 14px;
	line-height: 14px;
	padding: 12px 23px 9px;
	text-align: center;
}
input.flatGreen:hover,button.flatGreen:hover{
	background:#97c534;
	border-color:#78aa17
}
input.flatOrange:hover,button.flatOrange:hover{
	background:#ffa133;
	border-color:#ff7e12
}
input.flatGrey,button.flatGrey,a.flatGrey{
	background-color: #ccc;
	color: #000000;
	padding: 6px;
	font-size: 11px;
	font-weight: 700;
}
input.flatGrey:hover,button.flatGrey:hover,a.flatGrey:hover{
	background-color: #F1F1F1;
	color: #000000;
}
input.flatOrange,button.flatOrange{
	-webkit-appearance:none;
	cursor: pointer;
	display: inline-block;
	letter-spacing: 1px;
	position: relative;
	min-width: 200px;
	border:0;
	margin-left: 25%;
	left: 15px;
	height: 40px;
	background: #ff8400;
	border-bottom: 3px solid #f06d00;
	color: #fff;
	cursor: pointer;
	font-size: 14px;
	line-height: 14px;
	padding: 12px 23px 9px;
	text-align: center;
}
input.flatInput{
	border: 3px solid #dbdbdb;
	padding: 5px;
	color: #777;
	line-height: 14px;
	-moz-transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
	-webkit-transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
	-o-transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
	transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
}
select.flatSelect{
	border: 3px solid #dbdbdb;
	padding: 5px;
	color: #777;
	line-height: 14px;
	-moz-transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
	-webkit-transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
	-o-transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
	transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
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
#toTop{
	display: none;
	text-decoration: none;
	position: fixed;
	bottom: .75em;
	right: .75em;
	overflow: hidden;
	width: 43px;
	height: 43px;
	border: none;
	z-index: 100;
}
.notif_box {
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	width: 25px;
	height: 25px;
	float: left;
}
.indent{
	position: relative;
	line-height: 16px;
	-webkit-appearance: none;
	font-size: 10px;
	font-weight: bold;
	color: #333;
	text-shadow: 0 1px 0 rgba(255,255,255,.5);
	border: 1px solid #d3d3d3;
	background-color: #f8f8f8;
	background-image: -moz-linear-gradient(top,#f8f8f8 0,#eee 100%);
	background-image: -ms-linear-gradient(top,#f8f8f8 0,#eee 100%);
	background-image: -o-linear-gradient(top,#f8f8f8 0,#eee 100%);
	background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#f8f8f8),color-stop(100%,#eee));
	background-image: -webkit-linear-gradient(top,#f8f8f8 0,#eee 100%);
	background-image: linear-gradient(to bottom,#f8f8f8 0,#eee 100%);
}
.isBot{
	border-radius:5px;
	margin:3px;
	background-color:#ccc;
	color:white;
	padding:3px;
}
.ellipsis{
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
	text-align: left;
}
.reputationLink{
	color:#81BEF7;
}
a.light{
	color: #859ce6;
}
a.light:hover{
	color: #2445ae;
}
a.blackButton,input.blackButton,button.blackButton{
	padding: 0.3em 0.6em;
	box-shadow: 0 2px 1px rgba(0, 0, 0, 0.3),0 1px 0 rgba(255, 255, 255, 0.4) inset;
	background-color: #333;
	color: #fff;
	border: 1px solid #000!important;
	border-radius: 3px;
	text-decoration: none;
	font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
	font-size: 130%;
	font-weight: bold;
	border: 1px solid #888;
	margin: 3px 0;
}
a.flatBlue,input.flatBlue,button.flatBlue{
	color: #fff;
	background-color: transparent;
	line-height: normal;
	padding: .8em 1em .8em 1em;
	display: block;
	background-color:#9cc;
	font-weight:700;
}
a.flatBlue:hover,input.flatBlue:hover,button.flatBlue:hover{
	background-color: #699;
}
a.flatRed,input.flatRed,button.flatRed{
	color: #fff;
	line-height: normal;
	padding: .8em 1em .8em 1em;
	display: block;
	background-color: #c99;
	font-weight:700;
}
a.flatRed:hover,input.flatRed:hover,button.flatRed:hover{
	background-color: #966;
}
a.flatLocked,input.flatLocked,button.flatLocked{
	background-color: #979797;
	color: #fff;
	cursor:pointer;
	line-height: normal;
	padding: .8em 1em .8em 1em;
	padding-left: 45px;
	display: block;
	background-image: url('http://techberry.org/images/lock.png');
	background-position: 10px;
	background-size: 25px 25px;
	background-repeat: no-repeat;
	font-weight: 700;
}
#im{
	position: fixed;
	z-index: 9999;
	bottom: 0px;
	overflow: hidden;
	right: 325px;
	height: 300px;
	background-color:#e5e5e5;
	box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
}
#im_list{
	position: fixed;
	z-index: 9999;
	bottom: 0px;
	overflow: hidden;
	right: 20px;
	height: 300px;
	background-color:#e5e5e5;
	box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
}
div.meter{
	height: 20px;
	position: relative;
	background: #555;
	padding: 10px;
}
div.meter span{
	display: block;
	height: 100%;
	background-color: rgb(43,194,83);
	position: relative;
	overflow: hidden;
}
div.meter span:hover{
	background-color: rgb(22, 243, 80);
}
.offline, .false{
	background: #c99 !important;
}
.online, .true{
	background: #9c9 !important;
}
.badge{
	text-decoration: none;
	white-space: nowrap;
	color: #fff;
	background-color: #444449;
	border: 1px solid #444449;
	padding: 0px 6px 0px 3px;
	color: #fff!important;
	text-decoration: none;
	line-height: 24px;
	display: inline-block;
	font-size:13px;
	font-weight:500;
}
.badge:hover{
	border: 1px solid #555;
	background-color: #555;
	text-decoration: none;
}
.badge1{
	background-color:#cd7f32;
}
.badge2{
	background-color:silver;
}
.badge3{
	background-color:gold;
}
.badge1, .badge2, .badge3 {
	display: inline-block;
	overflow: hidden;
	line-height: inherit;
	width: 6px;
	height: 6px;
	margin: 0 0 0 3px;
	vertical-align: middle;
	background-repeat: no-repeat;
	overflow: hidden;
	border-radius: 4px;
}
.item-multiplier{
	margin: 0 4px;
	color: #888;
	font-size: 11px;
	font-family: Arial,Helvetica,sans-serif;
}
.terms{
	color: #777;
	font-size: 11px;
	width: 300px;
	float: left;
	margin: 0 0 5px 25%;
	position: relative;
	left: 15px;
	height: 30px;
}
.global_notification{
	padding: .25em 0;
	height: 30px;
	line-height:30px;
	border-bottom: .125em solid #696;
	background-color: #9c9;
	color: #fff;
	text-align: center;
}
.success_notification{
	padding: .25em 0;
	height: 30px;
	line-height:30px;
	border-bottom: .125em solid #F39200;
	background-color: #F3B200;
	color: #fff;
	text-align: center;
}
.uOnHover:hover{
	text-decoration:underline;
}
span.removeNtf{
	position: absolute;
	right: 10px;
	cursor:pointer;
}
#colorPicker{
	margin: 12px 0;
	float:left;
}

#colorPicker .red{
	background-color:#c99;
}
#colorPicker .green{
	background-color:#9c9;
}
#colorPicker .blue{
	background-color:#9cc;
}
#colorPicker .yellow{
	background-color:#CC9;
}
#colorPicker .purple{
	background-color:#99c;
}

#colorPicker li{
	width: 15px;
	height: 15px;
	margin: 0 3px 0 0;
	border: 1px solid rgb(103,153,11);
	cursor: pointer;
	float: left;
}

.{#prefixGlobal#}notification_box{
	color: #333;
	padding: 15px;
	color: #FFF;
	text-shadow: -1px -1px 0 rgba(0,0,0,.5);
}
#notification_bell{
	position: relative;
	line-height: 16px;
	-webkit-appearance: none;
	width: 25px;
	height: 25px;
	float: left;
	opacity:0.35;
	transition: opacity .4s ease-in-out;
	-moz-transition: opacity .4s ease-in-out;
	-webkit-transition: opacity .4s ease-in-out;
	background: url('http://techberry.org/images/notification_bell.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	-webkit-animation-duration: 2s;
	-webkit-animation-delay: 2s;
	-webkit-animation-iteration-count:20;
	-moz-animation-duration: 2s;
	-moz-animation-delay: 2s;
	-moz-animation-iteration-count:20;
	-o-animation-duration: 2s;
	-o-animation-delay: 2s;
	-o-animation-iteration-count:20;
}
#notification_bell:hover{
	opacity:1;
}
#notification_overlay{
	position:fixed;
	width:100%;
	height:100%;
	opacity:0.4;
	z-index:200;
}
{/strip}