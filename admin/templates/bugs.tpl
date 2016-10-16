{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
	<style type="text/css">
		#bugList { height:600px; overflow-y:scroll; }
		#bugList ul { overflow:hidden;list-style:none; text-align:center; border-top:1px solid #eee; border-bottom:1px solid #eee; padding:10px 0; }
		#bugList ul li { text-align:left;float:left;clear:left; padding:0 10px;margin-top:10px }
	</style>
	<div id="bugList">
		<a href="http://techberry.org/admin/process.smartyDebugging.php?token={$token}">
			<input type="submit" value="{if $debugging eq 1}Disable smarty debugging{else}Enable smarty debugging{/if}" class="sun-flower-button">
		</a>
		<ul>
			{foreach from=$bugs item=bug}
				<li>
					<div style="width:800px;overflow-x:hidden">
						{$bug.description|escape:'htmlall'|default:'No description given'} 
					</div>
					<br>
					<a href="http://www.techberry.org/images/bugs/{$bug.fileName}.png"
						target="_blank" class="default">image</a>
						&nbsp;-&nbsp;
					<a href="http://techberry.org/admin/process.remove-bugReport.php?id={$bug.id}&token={$token}" class="default">remove</a>
					<hr>
				</li>
			{/foreach}
		</ul>
	</div>
{/block}
{/strip}