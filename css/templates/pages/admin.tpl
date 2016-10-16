{strip}
	.{#prefixAdmin#}inline{
		overflow:hidden;
		font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
		background: #f1f1f1;
	}
	.{#prefixAdmin#}inline h3{
		color: #EEEEEE;
		text-align: center;
		font-size: 25px;
		margin-bottom: 10px;
	}
	#{#prefixAdmin#}side_content{
		float: left;
		min-height: 600px;
		padding: 30px;
	}
	
	#{#prefixAdmin#}side_bar{
		font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
		width: 200px;
		float:left;
		height: 100%;
		min-height: 600px;
		background-color: #444449;
		padding: 30px;
		overflow:hidden;
		border-right: 1px solid #e8e8e8;
	}
	#{#prefixAdmin#}side_main_list{
		margin-top:0;
	}
	#{#prefixAdmin#}side_main_list a:hover{
		text-decoration:none !important;
	}
	#{#prefixAdmin#}side_main_list a li{
		line-height: 30px;
		font-size: 25px;
		padding: 8px;
		color: #F1F1F1;
	}
	.{#prefixAdmin#}tab_default{
		color: #F1F1F1;
	}
	.{#prefixAdmin#}tab_default:hover{
		background-color: #9C9C9C;
		color: #F1F1F1 !important;
	}
	.{#prefixAdmin#}tab_active{
		background-color: {$lightColor};
		color: #F1F1F1 !important;
	}
	.{#prefixAdmin#}tab_active:hover{
		background-color: #9C9C9C;
		color: #F1F1F1;
	}
	.{#prefixAdmin#}avatar{
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
	.{#prefixAdmin#}info_block{
		height: 80px;
		min-width: 100px;
	}
	.{#prefixAdmin#}name{
		font-weight: bold;
		color: #AAAAAA;
		margin: 4px;
	}
	.{#prefixAdmin#}name_link{
		color: #859ce6;
	}
	.{#prefixAdmin#}name_link:hover{
		text-decoration:underline;
	}
	.{#prefixAdmin#}avatar_list_item{
		-moz-box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		-webkit-box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		filter: filter: progid:DXImageTransform.Microsoft.Shadow(direction=135,strength=3, color=#808080);
		border-collapse: separate;
		overflow: hidden;
	}
	.{#prefixAdmin#}tip{
		font-size: 13px;
		margin-left: 40px;
		line-height: 20px;
		margin-bottom: 10px;
	}
	.{#prefixAdmin#}notice_text{
		border-bottom: 1px solid #F3F3F3;
		margin: 3px 3px 0;
		padding: 3px 4px;
		overflow: hidden;
	}
	.{#prefixAdmin#}notice_box{
		overflow: hidden;
		font-size: 12px;
		color: #888;
	}
	.{#prefixAdmin#}label{
		float:left;
		font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
		font-size: 12px;
		color: #888;
		vertical-align: middle;
	}
	table.{#prefixAdmin#}edit{
		float:left;
		margin:20px;
		font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
		font-size: 12px;
		color: #888;
	}
	table.{#prefixAdmin#}edit tr td{
		padding:5px;
	}
	.{#prefixAdmin#}check{
		margin: 0 auto;
		width: 20px;
		display: block;
	}
	.{#prefixAdmin#}nav_link{
		text-decoration: none;
		color: #707070;
		display: block;
		padding: 2px 8px;
		margin: 0 8px;
		float: left;
	}
	.{#prefixAdmin#}nav_link:hover{
		background-color: #dfdfdf;
	}
	.{#prefixAdmin#}nav_current{
		color: #fff!important;
		background-color: #bbb;
		display: block;
		padding: 2px 8px;
		margin: 0 8px;
		float: left;
	}
{/strip}