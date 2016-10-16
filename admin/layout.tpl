{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div class="{#prefixAdmin#}inline">
		<div id="{#prefixAdmin#}side_bar">
			<ul id="{#prefixAdmin#}side_main_list">
				<h3>
					--- Root ---
				</h3>
				<a href="http://techberry.org/admin/account" id="account_link" class="side_anchor">
					<li class="{if $adminAccountTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">Accounts</li>
				</a>		
				<a href="http://techberry.org/admin/maintenance" id="maintenance_link" class="side_anchor">
					<li class="{if $adminMaintenanceTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">Maintenance</li>
				</a>		
				<a href="http://techberry.org/admin/sessions_debug" id="sessions_debug_link" class="side_anchor">
					<li class="{if $adminSessionsDebugTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">Sessions debug</li>
				</a>		
				<a href="http://techberry.org/admin/sql-queries" class="side_anchor">
					<li class="{if $sqlQueriesTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">SQL Queries</li>
				</a>	
				<a href="http://techberry.org/admin/db-mapper" class="side_anchor">
					<li class="{if $dbMapperTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">DB Mapper</li>
				</a>				
				<a href="http://techberry.org/admin/links" class="side_anchor">
					<li class="{if $linksTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">+Links</li>
				</a>	
				<hr>
				<h3>
					--- Admin ---
				</h3>
				<a href="http://techberry.org/admin/checklist" id="checklist_link" class="side_anchor">
					<li class="{if $adminCheckListTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">Check List</li>
				</a>	
				<a href="http://techberry.org/admin/users" id="users_link" class="side_anchor">
					<li class="{if $adminUsersTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">Users</li>
				</a>	
				<a href="http://techberry.org/admin/statistics" id="statistics_link" class="side_anchor">
					<li class="{if $adminStatisticsTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">Statistics</li>
				</a>
				<a href="http://techberry.org/admin/bugs" id="bug_link" class="side_anchor">
					<li class="{if $adminBugsTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">Bugs</li>
				</a>	
				<hr>
				<h3>
					--- Moderation ---
				</h3>
				<a href="http://techberry.org/admin/announcements" id="announcements_link" class="side_anchor">
					<li class="{if $adminAnnouncementsTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">Announcements</li>
				</a>	
				<a href="http://techberry.org/admin/forum" id="forum_link" class="side_anchor">
					<li class="{if $adminForumTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">Forum</li>
				</a>				
				<a href="http://techberry.org/admin/logs" id="forum_link" class="side_anchor">
					<li class="{if $adminLogsTab}{#prefixAdmin#}tab_active{else}{#prefixAdmin#}tab_default{/if}">Logs</li>
				</a>				
			</ul>
		</div>
		<div id="{#prefixAdmin#}side_content">
			{block name=adminContent}Default Page Content{/block}
		</div>
	</div>
{/block}
{/strip}