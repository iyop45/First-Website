{strip}
	#{#prefixRanking#}search_input{
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
	table.{#prefixRanking#}users{
		margin:20px;
		font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;
		font-size: 12px;
		color: #888;
		width:750px;
		margin: 0 auto;
	}
	.{#prefixRanking#}user_online_status{
		position: absolute;
		top: 5px;
		right: 5px;
		width: 5px;
		border-radius: 2px;
		height: 5px;
	}
	.{#prefixRanking#}isBot{
		position: absolute;
		top: 5px;
		right: 5px;
		display:none;
	}
	table.{#prefixRanking#}users tr:hover .{#prefixRanking#}isBot{
		display:block;
	}
	table.{#prefixRanking#}users tr{
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
	.{#prefixRanking#}avatar{
		background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
		border: 1px solid #d3d3d3;
		border-collapse: separate;
		overflow: hidden;
	}
	#{#prefixRanking#}actions{
		width:750px;
		margin: 0 auto;
		overflow:hidden;
	}
	#{#prefixRanking#}actions input{
		margin-left:5px;
	}
	#{#prefixRanking#}action_sort{
		overflow: hidden;
		float: right;
		margin-right:40px;
	}
	#{#prefixRanking#}action_sort a{
		font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
		border: 1px solid #ccc;
		color: #808185;
		display: block;
		float: right;
		height: 26px;
		font-size: 20px;
		line-height: 26px;
		margin-right: 5px;
		padding: 2px 4px 4px;
		text-decoration: none;
	}
	#{#prefixRanking#}action_sort a:hover{
		background-color: #808185;
		border: 1px solid #808185;
		color: #fff;
	}
	#{#prefixRanking#}action_sort a.here{
		background-color: #808185;
		border: 1px solid #808185;
		color: #fff;
	}
	.{#prefixRanking#}empty{
		text-align: center;
		margin: 10px 0;
		color: #808185;
		font-weight: bold;
		font-size: 20px;
	}
{/strip}