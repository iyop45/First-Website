{strip}
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Down for maintenance - TechBerry</title>
	<style type="text/css">
		#center{
			margin: 0;
			z-index: -1;
			width: 100%;
			height: 30px;
		}
		#image{
			position: relative;
			height: 256px;
			width: 256px;
		}
		#message{
			position:relative;
			width:400px;
			color: #636468;
			font-family: 'Segoe UI', Arial, Sans-Serif;
			font-size: 16px;
			margin: 10px 0;
			padding-right: 20px;
			font-weight: 700;
			line-height: 1.6;
		}
		#nameLogo{
			position: absolute;
			top: 8px;
			right: 12px;
			background: url("http://techberry.org/images/logo12.png") no-repeat;
			width: 120px;
			height: 35px;
		}
	</style>
</head>
<body style="margin-top:20px">
	<div id="center">
		<center>
			<div id="image">
				<img src="{$image|default:'http://techberry.org/images/logo1.png'}" width="256px" height="256px"/>
			</div>
			<div id="message">
				<p>{$message|default:'The website is currently down for maintenance. Please come back later for more info.'}</p>
			</div>
		</center>
		<div id="nameLogo"></div>
	</div>
</body>
{/strip}