{strip}
	.{#prefixNews#}news_resets{
		font-family: "Open Sans","Tahoma","Verdana","Arial", sans-serif;
		font-size: 14px;
		font-weight: 400;
		line-height: 1.7;
		color: #7E7E7E;
	}
	.{#prefixNews#}side_bar{
		width: 220px;
		overflow: hidden;
	}
	.{#prefixNews#}main_article{
		overflow: hidden;
		position: relative;
		float:left;
		z-index: 1;
		margin-right:30px;
		margin-bottom: 10px;
	}
	.{#prefixNews#}side_bar_container ul li .{#prefixNews#}right h5{
		font-family: 'PT Sans', "Tahoma","Verdana","Arial", sans-serif;
		font-size: 14px;
		font-weight: 700;
		line-height: 1.2;
		color: #3A3A3A;
	}
	.{#prefixNews#}side_bar_container{
		overflow:hidden;
		border-bottom: 1px solid #F2F2F2;
	}
	.{#prefixNews#}side_bar_container ul li .{#prefixNews#}right h5 a{
		color:#3A3A3A;
	}
	.{#prefixNews#}side_bar_container ul li .{#prefixNews#}right h5 a:hover{
		color:#999;
	}
	.{#prefixNews#}side_bar_container ul li .{#prefixNews#}thumbnail{
		width: 70px;
		float: left;
		margin-right: 15px;
	}
	.{#prefixNews#}side_bar_container ul li .{#prefixNews#}popularity{
		float:left;
		margin-top:5px;
	}
	.{#prefixNews#}side_bar_container ul li:hover .{#prefixNews#}popularity{
		opacity:1;
	}
	.{#prefixNews#}popularity{
		width:76px;
		margin:0 auto;
		height:6px;
		position:relative;
		opacity:.5;
		rgba(215, 218, 217, 0.95);
	}
	.{#prefixNews#}popularity div{
		background-repeat: no-repeat;
		background-position: left top;
		background: #2BBFF6;
		height: 6px;
		position: relative;
		background-image: linear-gradient(-45deg,rgba(255,255,255,.2) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.2) 50%,rgba(255,255,255,.2) 75%,transparent 75%,transparent);
		text-align: left;
		background-size: 10px 10px;
		opacity: .5;
	}
	.{#prefixNews#}main_article_image{
		width: 720px;
		display: block;
	}
	.{#prefixNews#}side_bar_tabs{
		overflow:hidden;
	}
	.{#prefixNews#}side_bar_tabs ul li{
		border-bottom:2px solid {$lightColor};
		padding: 6px 0;
		float: left;
		width: 96px;
		margin-right: 5px;
		text-align: center;
		position: relative;
		margin-bottom:10px;
	}
	.{#prefixNews#}side_bar_container ul li{
		overflow:hidden;
		margin-bottom:10px;
	}
	.{#prefixNews#}main_article_title h3 a{
		color: #FFFFFF;
	}
	.{#prefixNews#}main_article_info{
		bottom: 40px;
		color: #FFFFFF;
		position: absolute;
		left: 0px;
	}
	.{#prefixNews#}main_article_info h3{
		background: rgba(0, 0, 0, 0.75);
		line-height: 22px;
		padding: 12px 15px;
		display: inline-block;
		position: relative;
		font-size: 20px;
		font-weight: 700;
		text-transform: uppercase;
		margin-bottom: 0;
	}
	.{#prefixNews#}main_article_readmore{
		float:left;
		overflow:hidden;
		background: {$lightColor};
	}
	.{#prefixNews#}main_article_readmore span h5 a{
		color: #FFFFFF;
	}
	.{#prefixNews#}main_article_snippet{
		background: rgba(0, 0, 0, 0.65);
		font-weight: 600;
		width: 400px;
		color: #C9C9C9;
		padding: 15px;
		margin-bottom: 5px;
	}
	.{#prefixNews#}plus{
		float: left;
		width: 36px;
		height: 36px;
		background-image: url('http://techberry.org/images/icon-plus.png');
		background-repeat: no-repeat;
		background-position: center center;
		padding-top: 6px;
		cursor:pointer;
	}
	.{#prefixNews#}plus:hover + .{#prefixNews#}main_bg{
		background: {$darkColor};
	}
	.{#prefixNews#}main_bg{
		display: block;
		color: #FFFFFF;
		float: left;
		padding: 9px 10px 9px 0;
		text-transform: uppercase;
		background: {$lightColor};
	}
	.{#prefixNews#}main_bg:hover{
		background: {$darkColor};
	}
	.{#prefixNews#}main_article_readmore:hover{
		background: {$darkColor};
	}
	.{#prefixNews#}main_bg a{
		color: #FFFFFF;
	}
	.{#prefixNews#}article_actions{
		background-color: #303030;
		padding: 6px;
		padding-bottom: 10px;
		height: 17px;
	}
	.{#prefixNews#}article_date{
		float:right;
		color:#fff;
		font-weight:bold;
	}
	.{#prefixNews#}love{
		background-image: url('http://techberry.org/images/love.gif');
		background-repeat: no-repeat;
		-webkit-transition: background-image 0.2s ease-in-out;
		-moz-transition: background-image 0.2s ease-in-out;
		-ms-transition: background-image 0.2s ease-in-out;
		-o-transition: background-image 0.2s ease-in-out;
		transition: background-image 0.2s ease-in-out;
		padding-left: 35px;
		cursor: pointer;
		width: 60px;
		color:#fff;
		font-weight:bold;
	}
	.{#prefixNews#}love:hover{
		background-image: url('http://techberry.org/images/love_hover.gif');
		background-repeat: no-repeat;
	}
	.{#prefixNews#}avatar_bubble_list{
		color: #fff;
		text-align: center;
		float: left;
		line-height: 1.3;
		border-width: 0;
		width: 60px;
		height: 60px;
		position: relative;
		margin-bottom: 10px;
		padding: 8px;
		border: 1px solid #C9C9C9;
	}
	.{#prefixNews#}avatar_bubble_list:hover{
		box-shadow: 2px 2px 4px rgba(0,0,0,0.1);
		-webkit-box-shadow: 2px 2px 4px rgba(0,0,0,0.1);
		-moz-box-shadow: 2px 2px 4px rgba(0,0,0,0.1);
	}
	.{#prefixNews#}avatar_bubble_list .{#prefixNews#}avatar_image_list{
		width: 42px;
		height: 42px;
		margin-top: 10px;
	}
	.{#prefixNews#}comment_actions{
		line-height:20px;
		margin-right:20px;
		text-align:right;
		color:#aaa;
	}
	.{#prefixNews#}loadMore{
		border: 1px solid;
		border-color: #d3d3d3;
		width: 200px;
		outline: 0;
		border-width: 1px 1px 1px 1px;
		box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
		font-weight: bold;
		background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
		background-color: rgba(0,0,0,.2);
		background-clip: padding-box;
		margin: 0 auto;
		-webkit-border-radius: 3px;
		padding: 20px;
		min-width: 400px;
		cursor: pointer;
		border-radius: 3px;
		text-align: center;
		font-size: 12px;
		color: #333;
		margin-top: 10px;
		line-height: 1.4;
	}
	.{#prefixNews#}loadMore:hover{
		background-color: #f0f0f0;
		background-image: -webkit-linear-gradient(bottom,#f0f0f0 0,#f8f8f8 100%);
		background-image: linear-gradient(bottom,#f0f0f0 0,#f8f8f8 100%);
		border-color: #c6c6c6;
		text-decoration: none;
	}
{/strip}