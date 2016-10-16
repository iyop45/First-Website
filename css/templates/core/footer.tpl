{strip}
#{#prefixGlobal#}{#subPrefixFooter#}_{#subPrefixWrap#}{
	background-color: {#sc_lightBlack#};
	border-top: .25em solid {$lightColor};
	margin-top: 15px;
}
#{#prefixGlobal#}{#subPrefixFooter#}{
	padding: 15px 50px;
	text-align: center;
	font-family: arial;
	font-size: {#sf_tinyText#};
	color: {#sc_lightGrey#};
}
.{#prefixGlobal#}{#subPrefixFooter#}_top{
	position: relative;
	margin: 0 auto;
	height: 50px;
	display: inline-block;
}
.{#prefixGlobal#}{#subPrefixFooter#}_segment{
	margin: 10px 0;
	padding: 0 25px;
	font-size: 11px;
}
#{#prefixGlobal#}{#subPrefixFooter#} a{
	text-decoration: none;
	color: {#sc_lightGrey#};
}
#{#prefixGlobal#}{#subPrefixFooter#} a:hover{
	color: {#sc_darkGrey#};
}
.{#prefixGlobal#}{#subPrefixFooter#}_logo{
	position: relative;
	float: left;
	background: url("{#si_footerLogo#}") no-repeat;
	width: 120px;
	font-family: logo, sans-serif;
	height: 32px;
	margin: 6px 0 6px 6px;
	padding-top: 5px;
	color: #4B4545;
	font-size: 30px;
	font-weight: 600;
	text-shadow: 1px 1px white, -1px -1px #444;
}
ul.{#prefixGlobal#}{#subPrefixFooter#}_links{
	position: relative;
	float: left;
	margin: 16px 0;
	list-style: none;
}
ul.{#prefixGlobal#}{#subPrefixFooter#}_links li{
	border-left: 1px solid #797c80;
	display: inline;
	padding: 0 20px;
}
{/strip}