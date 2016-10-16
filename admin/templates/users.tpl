{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
		<h3 style="color:#C74A4A">Send reputation</h3>
		<form action="http://techberry.org/admin/process.send-reputation.php" method="post" class="add-new-task" autocomplete="off">
			<input type="text" name="username" placeholder="Username" />
			<input type="text" name="reputation" placeholder="Reputation" />
			<input type="hidden" name="token" value="{$token}" />
			<input type="submit" value="Send" class="orange-flat-button"/>
		</form>
		<hr>
		<h3 style="color:#C74A4A">Grant Privilege</h3>
		<form class="add-new-task" autocomplete="off">
			<input id="new-task" type="text" name="new-task" placeholder="Username" />
			<input id="new-task" type="text" name="new-task" placeholder="Privilege" />
			<input type="submit" value="Grant" class="orange-flat-button"/>
		</form>
{/block}
{/strip}