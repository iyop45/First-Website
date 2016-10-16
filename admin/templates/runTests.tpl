{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=content}
	<style type="text/css">
		#__{$textareaID}
		{literal}
		{
			width: 956px;
			margin: 0px;
			padding:10px;
			color: rgb(52, 213, 52);
			background-color: black;
			overflow-y:hidden;
		}
		{/literal}
	</style>
	<input type="text" id="__{$textareaID}" placeholder="Enter a command..."></textarea>
{/block}
{/strip}