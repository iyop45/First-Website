{extends file='/home/content/99/11499199/html/account/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=accountContent}
<h3>
<p>
	Your settings
</p>
</h3>
{if $settings}
<form action="http://techberry.org/account/process.settings.php" method="POST">
	<table class="{#prefixAccount#}edit">
		<tr>
			<td>
				<input value="1" {if $settings.disabledAPIAccess eq 1}checked{/if} class="{#prefixAccount#}check" id="settings_api" name="settings_api" type="checkbox"/>
			</td>
			<td>
				<label for="settings_api">Disable public API access to account details</label>
			</td>
		</tr>
		<tr>
			<td>
				<input value="1" {if $settings.subscribedToNewsletter eq 1}checked{/if} class="{#prefixAccount#}check" id="settings_newsletter" name="settings_newsletter" type="checkbox">
			</td>
			<td>
				<label for="settings_newsletter">Unsubscribe from the techberry newsletter</label>
			</td>
		</tr>
		<tr>
			<td>
				<input value="1" {if $settings.emailNotifications eq 1}checked{/if} class="{#prefixAccount#}check" id="settings_emails" name="settings_emails" type="checkbox"/>
			</td>
			<td>
				<label for="settings_emails">Recieve email notifications and updates</label>
			</td>
		</tr>
		<tr>
			<td>
				<input value="1" {if $settings.showLockedButtons eq 1}checked{/if} class="{#prefixAccount#}check" id="settings_lockedButtons" name="settings_lockedButtons" type="checkbox"/>
			</td>
			<td>
				<label for="settings_lockedButtons">Show locked buttons</label>
			</td>
		</tr>
		<tr>
			<td>
				<input name="token" type="hidden" value="{$token}"/>
				<input class="blue" type="submit" name="save" value="save">
			</td>
		</tr>
	</table>
</form>
{/if}
{/block}
{/strip}