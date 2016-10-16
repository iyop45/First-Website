{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{nocache}
{strip}
{block name=content}
	<ul id="contentList">
	<li class="{#prefixForum#}list">
		<div class="{#prefixForum#}title">Forum</div>
		{if !$isPending}
		<a style="float:left" class="
			{if !$userPrivileges.forum_createTopic}
				flatLocked strikethrough tooltipWiki
			{else}
				flatBlue
			{/if}
			{if !$userPrivileges.forum_createTopic} 
				 {/strip} {strip} {* because otherwise the class names will join *}
				 pointsNeeded" data-action="forum_createTopic" data-v="forum:topic:submit:lackPrivilege"
			{else}" 
				href="http://techberry.org/forum/create/t={$category_id}/"
			{/if}>Submit a topic</a>
		{/if}
		<div class="{#prefixForum#}directory_link">
			{if $categoryExists eq 1}
				{if $isPending}
					<a href="http://techberry.org/forum/">Root</a>{if $category.title|escape} / <a href="http://techberry.org/forum/c={$category.id}/{$category.titleLink|escape}">{$category.title|escape}</a>{/if}
				{else}
					<a href="http://techberry.org/forum/">Root</a> / <a href="http://techberry.org/forum/c={$category_id}/{$categoryTitleLink|escape}">{$categoryTitle|escape}</a>
				{/if}
			{else}
				<a href="http://techberry.org/forum/">Root</a>
			{/if}
		</div>
	</li>
	{if $categoryExists eq 1}
		{if !$isPending}
			{if $hasTopics eq 1}
				{foreach from=$topics item=topic}
					{if $topic.pending eq 1 && $pendingTitle eq 1}
						{assign "pendingTitle" 0} 
						<li class="{#prefixForum#}list">
							Pending topics
						</li>
					{/if}
					<li class="{#prefixForum#}list{if $topic.flagCount gt $settings.TopicFlagCountForUnpopular} unpopular{/if}">
						<a href="http://techberry.org/forum/t={$topic.id}/{$topic.titleLink}">
							<div class="{#prefixForum#}list_bubble" style="background-color:{$topic.groupColor}">
								<img class="{#prefixForum#}list_icon" src="{$topic.categoryIcon}" alt="{$topic.categoryTitle|escape}"/>
							</div>
						</a>
						<div class="{#prefixForum#}list_info">
							<a class="light" href="http://techberry.org/forum/t={$topic.id}/{$topic.titleLink}">
								<h2>{$topic.title|escape}</h2>
							</a>
							<p class="{#prefixForum#}list_description shortened more">
								{$topic.description|escape}
							</p>
						</div>
						<div class="{#prefixForum#}list_stats">
							<div class="{#prefixForum#}list_box">
								<span class="{#prefixForum#}list_value help" data-ot="This count is based on approximations">
									{$topic.views|default:0}
								</span>
								Views
							</div>
							<div class="{#prefixForum#}list_box">
								<span datetime="{$topic.date}" class="{#prefixForum#}list_value tiny age">
									{$topic.friendlyDate|default:'NaN'}
								</span>
								Age
							</div>
							<div class="{#prefixForum#}list_box">
								<span class="{#prefixForum#}list_value">
									{$topic.posts|default:0}
								</span>
								Posts
							</div>
							{if $topic.pending eq 1}
								<div class="{#prefixForum#}list_box_meter" data-ot="{$topic.commits} committed ( {$topic.meterWidth}% )">
									<div class="meter">
										<span style="width:{$topic.meterWidth}%"></span>
									</div>
								</div>
								{if !$topic.hasCommitted eq 1}
									<div class="{#prefixForum#}list_box_action">
										<a href="http://techberry.org/forum/commit/t={$topic.id}/{$token}" class="
										{if !$userPrivileges.forum_commitTopic}
											flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_commitTopic" data-v="forum:topic:commit:lackPrivilege"
										{else}
											flatBlue"
										{/if}>{if $smarty.session.group_id >= 6}Activate{else}Commit{/if}</a>
									</div>
								{/if}
							{else}
								{if $topic.isLocked eq 1}
									<div class="{#prefixForum#}list_box_action">
										<a href="#" data-ot="This topic is permanently locked" data-action="unlock" class="flatLocked pointsNeeded">Locked</a>
									</div>
								{else}
									<div class="{#prefixForum#}list_box_action">
										<a class="
										{if !$userPrivileges.forum_flagTopic}
											flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_flagTopic" data-v="forum:topic:flag:lackPrivilege"
										{else}
											flatRed"
											href="http://techberry.org/forum/flag/t={$topic.id}/{$token}"
										{/if}>{if $smarty.session.group_id >= 6}Remove{else}Flag{/if}</a>
									</div>
									<div class="{#prefixForum#}list_box_action">
										<a href="http://techberry.org/forum/edit/t={$topic.id}/" class="flatBlue">Edit topic</a>
									</div>
									<div class="{#prefixForum#}list_box_action">
										<a class="
										{if !$userPrivileges.forum_lockTopic}
											flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_lockTopic" data-v="forum:topic:lock:lackPrivilege"
										{else}
											flatBlue"
											href="http://techberry.org/forum/lock/t={$topic.id}/{$token}"
										{/if}>Lock</a>
									</div>
								{/if}
							{/if}
						</div>
					</li>
				{/foreach}
			{else}
				<li class="{#prefixForum#}center_message">
					This category is empty, be the first to contribute!
				</li>		
			{/if}
		{else}
			<li class="{#prefixForum#}center_message">
				This category is <a href="#" data-v="forum:category:pending" class="default tooltipWiki">pending</a> and so topics can't be suggested or altered
			</li>
		{/if}
	{else}
		<li class="{#prefixForum#}center_message">
			This category does not exist
		</li>
	{/if}
	</ul>
	{$pagination}
	{if $withShowMoreButton eq 1 and !$isPending and $hasTopics eq 1 and false}
		<div role="button" data-from="{$settings.TopicResultsPerLoad}" data-first="1" data-info="forum-topic_{$category_id}" class="{#prefixForum#}loadMore loadMore">Show more</div>
	{/if}
{/block}
{/strip}
{/nocache}