{strip}
{nocache}
<meta http-equiv="Content-Type" content="{$contentType}; charset={$charset}" />
<title>{{$metaTitle|strip_tags}|default:"TechBerry"} - TechBerry</title>
<link rel="icon" href="{$favicon}" type="image/x-icon"/>
<meta name="description" content="{$metaDescription}">
<link rel="stylesheet" href="http://techberry.org/css/{$CSSPage|default:'global'}/{$CSSTheme|default:'purple'}/main.css" type="text/css" media="all">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="http://techberry.org/js/main.js"></script>
	<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/messenger/1.4.0/js/messenger.min.js"></script>
<script type="text/javascript">
{literal}
function readCookie(a){a+="=";for(var b=document.cookie.split(/;\s*/),c=b.length-1;c>=0;c--)if(!b[c].indexOf(a))return b[c].replace(a,"")}1==readCookie("invert")&&function(){var a="html {-webkit-filter: invert(100%);-moz-filter: invert(100%);-o-filter: invert(100%);-ms-filter: invert(100%); }",b=document.getElementsByTagName("head")[0],c=document.createElement("style");if(window.counter){if(window.counter++,0==window.counter%2)var a="html {-webkit-filter: invert(0%); -moz-filter:    invert(0%); -o-filter: invert(0%); -ms-filter: invert(0%); }"}else window.counter=1;c.type="text/css",c.styleSheet?c.styleSheet.cssText=a:c.appendChild(document.createTextNode(a)),b.appendChild(c)}();
{/literal}
</script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
{literal}
	<script type="text/javascript">stLight.options({publisher: "7f57ce5c-7b18-4122-b39b-6a20d31d2e71", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
{/literal}
{if $inlineCSS}
	{strip}
	<style type="text/css">
		{$inlineCSS}
	</style>
	{/strip}
{/if}
{foreach from=$javaScriptLinks item=link}
	<script type="text/javascript" src="{$link}"></script>
{/foreach}
{foreach from=$cssLinks item=link}
	<link rel="stylesheet" href="{$link}" type="text/css" media="all">
{/foreach}
{if $inlineScript}
	<script type="text/javascript">
		{$inlineScript}
	</script>
{/if}
{if $showLockedButtons eq 0}
	<style type="text/css">
		a.flatLocked,input.flatLocked,button.flatLocked{
			display:none !important;
		}
	</style>
{/if}
{if $toTopButton}
	{literal}
	<script type="text/javascript">
$(document).ready(function(){$("#toTop").hide();$(function(){$(window).scroll(function(){if($(this).scrollTop()>100)$("#toTop").fadeIn();else $("#toTop").fadeOut()});$("#toTop").click(function(){$("body,html").animate({scrollTop:0},800);return false})})});
Messenger.options = {extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-left',theme: 'flat'}
	</script>
	{/literal}
{/if}
{/nocache}
{/strip}