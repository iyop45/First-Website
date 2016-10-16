{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
		<h3 style="color:#C74A4A">Log in as..</h3>
		<form id="force-login-form" action="http://techberry.org/admin/process.force-login.php" method="POST" class="add-new-task" autocomplete="off">
			<input id="force-login-input" type="text" name="username" placeholder="Username" />
			<input type="hidden" name="token" value="{$token}" />
			<input type="submit" value="Log in" class="orange-flat-button force-login-button"/>
		</form>
		<hr>
		<h3 style="color:#C74A4A">Change user group</h3>
		<form class="add-new-task" autocomplete="off">
			<input id="new-task" type="text" name="new-task" placeholder="Username" />
			<input id="new-task" type="text" name="new-task" placeholder="Group" />
			<input type="submit" value="Change" class="orange-flat-button"/>
		</form>
{/block}
{/strip}