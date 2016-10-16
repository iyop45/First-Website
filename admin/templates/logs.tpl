{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
	<div style="width:800px;height:500px;overflow-x:hidden;overflow-y:scroll;font-size:12px;margin-bottom:15px">
		{$logs}
	</div>
	<a href="http://techberry.org/admin/process.delete-logs.php?token={$token}" onclick="alert('not implemented yet'); return false;"><input type="submit" value="Delete logs" class="sun-flower-button"></a>
{/block}
{/strip}