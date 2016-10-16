{strip}
	.{#prefixAccount#}inline{
		overflow:hidden;
		font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
	}
	.{#prefixAccount#}inline h3{
		color: #4AA02C;
		font-size: 25px;
	}
	#{#prefixAccount#}side_content{
		float: left;
		min-height: 600px;
		padding: 30px;
		margin-left:300px;
	}
	
	#{#prefixAccount#}side_bar{
		position:absolute;
		width: 200px;
		float:left;
		height: 100%;
		min-height: 600px;
		max-width:300px;
		background-color: #F1F1F1;
		padding: 30px;
		overflow:hidden;
		border-right: 1px solid #e8e8e8;
	}
	#{#prefixAccount#}side_main_list{
		margin-top:0;
	}
	#{#prefixAccount#}side_main_list a li{
		line-height: 30px;
		font-size: 25px;
		padding: 8px;
		color: #666;
	}
	.{#prefixAccount#}tab_default:hover{
		background-color: #9C9C9C;
		color: #F1F1F1 !important;
	}
	.{#prefixAccount#}tab_active{
		background-color: {$lightColor};
		color: #F1F1F1 !important;
	}
	.{#prefixAccount#}tab_active:hover{
		background-color: #9C9C9C;
		color: #F1F1F1;
	}
	.{#prefixAccount#}avatar{
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
	.{#prefixAccount#}info_block{
		height: 80px;
		min-width: 100px;
	}
	.{#prefixAccount#}name{
		font-weight: bold;
		color: #AAAAAA;
		margin: 4px;
	}
	.{#prefixAccount#}name_link{
		color: #859ce6;
	}
	.{#prefixAccount#}name_link:hover{
		text-decoration:underline;
	}
	.{#prefixAccount#}avatar_list_item{
		background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
		border: 1px solid #d3d3d3;
		border-collapse: separate;
		overflow: hidden;
	}
	.{#prefixAccount#}tip{
		font-size: 13px;
		margin-left: 40px;
		line-height: 20px;
		margin-bottom: 10px;
	}
	.{#prefixAccount#}notice_text{
		border-bottom: 1px solid #F3F3F3;
		margin: 3px 3px 0;
		padding: 3px 4px;
		overflow: hidden;
	}
	.{#prefixAccount#}notice_box{
		overflow: hidden;
		font-size: 12px;
		color: #888;
	}
	.{#prefixAccount#}label{
		float:left;
		font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
		font-size: 12px;
		color: #888;
		vertical-align: middle;
	}
	table.{#prefixAccount#}edit, table.{#prefixAccount#}followers{
		float:left;
		margin:20px;
		font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
		font-size: 12px;
		color: #888;
	}
	.table.{#prefixAccount#}followers{
		max-width:500px;
	}
	.{#prefixAccount#}follower_online_status{
		position: absolute;
		top: 5px;
		right: 5px;
		width: 5px;
		border-radius: 2px;
		height: 5px;
	}
	table.{#prefixAccount#}edit tr td{
		padding:5px;
	}
	table.{#prefixAccount#}followers tr{
		position: relative;
		width: 215px;
		padding: 5px;
		margin: 0px 5px 10px 5px;
		float: left;
		overflow: hidden;
		background: white;
		border-bottom: 1px solid #ccc;
		border-right: 1px solid #ccc;
		border-top: 1px solid #ddd;
		border-left: 1px solid #ddd;
		-moz-box-shadow: 0px 1px 3px #dddddd;
		-webkit-box-shadow: 0px 1px 3px #dddddd;
		box-shadow: 0px 1px 3px #dddddd;
		-moz-border-radius: 0px;
		-webkit-border-radius: 0px;
		border-radius: 0px;
		color: #444444;
	}
	.{#prefixAccount#}check{
		margin: 0 auto;
		width: 20px;
		display: block;
	}
	.{#prefixAccount#}nav_link{
		text-decoration: none;
		color: #707070;
		display: block;
		padding: 2px 8px;
		margin: 0 8px;
		float: left;
	}
	.{#prefixAccount#}nav_link:hover{
		background-color: #dfdfdf;
	}
	.{#prefixAccount#}nav_current{
		color: #fff!important;
		background-color: #bbb;
		display: block;
		padding: 2px 8px;
		margin: 0 8px;
		float: left;
	}
{/strip}