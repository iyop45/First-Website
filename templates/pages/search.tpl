{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name='content'}
	<!--<form id="{#prefixGlobal#}search_form" style="top:0px" action="http://techberry.org/search/" method="get">
		<input type="text" name="query" id="{#prefixGlobal#}search_input" size="40" value="{$query}" action="include/js_suggest/suggest.php" columns="2" autocomplete="off" delay="1500"/>
		<input id="{#prefixGlobal#}search_submit" style="top:3px;height:26px" type="submit" value=""/>
		<input type="hidden" name="search" value="1"> 
	</form>-->
	<script>
	  {literal}
	  (function() {
		var cx = '010847070576185715249:2nyivikkprw';
		var gcse = document.createElement('script');
		gcse.type = 'text/javascript';
		gcse.async = true;
		gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
			'//www.google.com/cse/cse.js?cx=' + cx;
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(gcse, s);
	  })();
	  {/literal}
	</script>
	<gcse:search></gcse:search>
	<gcse:searchresults></gcse:searchresults>
{/block}
{/strip}