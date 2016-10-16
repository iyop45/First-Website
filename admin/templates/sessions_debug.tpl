{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
	<pre style="width:800px;height:580px;overflow-x:hidden;overflow-y:scroll;font-size:12px;margin-bottom:15px">{$sessions_debug}</pre>
{/block}
{/strip}