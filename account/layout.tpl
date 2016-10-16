{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div class="{#prefixAccount#}inline">
		<div id="{#prefixAccount#}side_bar">
			<ul id="{#prefixAccount#}side_main_list">
				<a href="http://techberry.org/account/" id="account_link" class="side_anchor">
					<li class="{if $accountAccountTab}{#prefixAccount#}tab_active{else}{#prefixAccount#}tab_default{/if}">Account</li>
				</a>
				<a href="http://techberry.org/account/notifications/" id="notifications_link" class="side_anchor">
					<li class="{if $accountNotificationsTab}{#prefixAccount#}tab_active{else}{#prefixAccount#}tab_default{/if}">Notifications</li>
				</a>
				<a href="http://techberry.org/account/general/" id="general_link" class="side_anchor">
					<li class="{if $accountGeneralTab}{#prefixAccount#}tab_active{else}{#prefixAccount#}tab_default{/if}">General</li>
				</a>
				<a href="http://techberry.org/account/achievements/" id="achievements_link" class="side_anchor">
					<li class="{if $accountAchievementsTab}{#prefixAccount#}tab_active{else}{#prefixAccount#}tab_default{/if}">Achievements</li>
				</a>
				<a href="http://techberry.org/account/settings/" id="privacy_link" class="side_anchor">
					<li class="{if $accountSettingsTab}{#prefixAccount#}tab_active{else}{#prefixAccount#}tab_default{/if}">Settings</li>
				</a>
			</ul>
		</div>
		<div id="{#prefixAccount#}side_content">
			{block name=accountContent}Default Page Content{/block}
		</div>
	</div>
{/block}
{/strip}