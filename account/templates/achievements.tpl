{extends file='/home/content/99/11499199/html/account/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=accountContent}
	{$reputationGraphScript}
	<div class="{#prefixAccount#}info_block" style="display:table">
		<h3>
		<p>
			Badges - <a href="http://techberry.org/help/badges/" class="default">view all</a>
		</p>
		</h3>
		<table class="{#prefixAccount#}edit">
			{foreach from=$badges item=badge}
				<tr>
					<td>
						<a href="http://techberry.org/help/badges/{$badge.urlName}" class="badge">
							<span class="badge{$badge.value}"></span>
							&nbsp;{$badge.name}
						</a>
					</td>
					<td>
						<!--<span class="item-multiplier">x234</span>-->
					</td>
				</tr>
			{foreachelse}
				<div style="font-weight:bold;font-size:12px;line-height:15px;margin-top:15px;">You have yet to earn any badges</div>
			{/foreach}
		</table>
	</div>
	<div class="{#prefixAccount#}info_block" style="display:table">
		<h3>
		<p>
			Privileges - <a href="http://techberry.org/help/privileges/" class="default">view all</a>
		</p>
		</h3>
		<table class="{#prefixAccount#}edit">
			{foreach from=$privileges item=privilege}
				<tr>
					<td>
						<a class="default" href="http://techberry.org/help/privileges/{$privilege.action}">
							{$privilege.name}
						</a>
					</td>
				</tr>
			{foreachelse}
				<div style="font-weight:bold;font-size:12px;line-height:15px;margin-top:15px;">You have yet to earn any privileges</div>
			{/foreach}
		</table>
	</div>
{/block}
{/strip}