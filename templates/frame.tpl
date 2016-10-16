{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{$docType}
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	{$startOfHead}
	{if $inlineScript}
		<script type="text/javascript">
			{$inlineScript}
		</script>
	{/if}
	{if $inlineCSS}
		{strip}
		<style type="text/css">
			{$inlineCSS}
		</style>
		{/strip}
	{/if}
	{$endOfHead}
</head>
{nocache}
{strip}
	<body>
		{block name=content}Blank frame{/block}
	</body>
{/strip}
{/nocache}