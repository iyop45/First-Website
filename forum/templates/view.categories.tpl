{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{nocache}
{strip}
{block name=content}
	<ul id="contentList">
	<li class="{#prefixForum#}list">
		<div class="{#prefixForum#}title">Forums</div>
		<a style="float:left" class="
			{if !$userPrivileges.forum_createCategory}
				flatLocked strikethrough tooltipWiki pointsNeeded" 
				data-action="forum_createCategory" 
				data-v="forum:category:submit:lackPrivilege"
			{else}
				flatBlue" 
				href="http://techberry.org/forum/create/c/"
			{/if}>Submit a category</a>
		<div class="{#prefixForum#}directory_link">
			<a href="http://techberry.org/forum/">Root</a>
		</div>
	</li>
	{foreach from=$categories item=category}
		{if $category.pending eq 1 && $pendingTitle eq 1}
			{assign "pendingTitle" 0} 
			<li class="{#prefixForum#}list">
				Pending Categories
			</li>
		{/if}
		<li class="{#prefixForum#}list{if $category.flagCount gt $settings.CategoryFlagCountForUnpopular} unpopular{/if}">
			<a href="http://techberry.org/forum/c={$category.id}/{$category.titleLink}">
				<div class="{#prefixForum#}list_bubble" style="background-color:{$category.color}">
					<img class="{#prefixForum#}list_icon" src="{$category.icon}" alt="{$category.title|escape}"/>
				</div>
			</a>
			<div class="{#prefixForum#}list_info">
				<a class="light" href="http://techberry.org/forum/c={$category.id}/{$category.titleLink}">
					<h2>{$category.title|escape}</h2>
				</a>
				<p class="{#prefixForum#}list_description shortened more">
					{$category.description|escape}
				</p>
			</div>
			<div class="{#prefixForum#}list_stats">
				<div class="{#prefixForum#}list_box">
					<span class="{#prefixForum#}list_value tooltipWiki help" data-v="forum:category:viewCount">
						{$category.views|default:0}
					</span>
					Views
				</div>
				<div class="{#prefixForum#}list_box">
					<span class="{#prefixForum#}list_value">
						{$category.topics|default:0}
					</span>
					Topics
				</div>
				<div class="{#prefixForum#}list_box">
					<span datetime="{$category.date}" class="{#prefixForum#}list_value tiny age">
						{$category.friendlyDate|default:'NaN'}
					</span>
					Age
				</div>
				{if $category.pending eq 1}
					<div class="{#prefixForum#}list_box_meter" data-ot="{$category.commits} committed ( {$category.meterWidth}% )">
						<div class="meter">
							<span style="width:{$category.meterWidth}%"></span>
						</div>
					</div>
					{if !$category.hasCommitted eq 1}
						<div class="{#prefixForum#}list_box_action">
							<a href="http://techberry.org/forum/commit/c={$category.id}/{$token}" 
								class="{if !$userPrivileges.forum_commitCategory}flatLocked strikethrough tooltipWiki pointsNeeded" 
								data-action="forum_commitCategory" 
								data-v="forum:category:commit:lackPrivilege" 
								style="padding-left:35px !important"{else}flatBlue"{/if}>{if $smarty.session.group_id >= 6}Activate{else}Commit{/if}</a>
						</div>
					{/if}
				{else}
					{if $category.isLocked eq 1}
						<div class="{#prefixForum#}list_box_action">
							<a href="#" data-ot="This category is permanently locked" data-action="unlock" class="flatLocked pointsNeeded">Locked</a>
						</div>
					{else}
						<div class="{#prefixForum#}list_box_action">
							<a class="
							{if !$userPrivileges.forum_flagCategory}
								flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_flagCategory" data-v="forum:category:flag:lackPrivilege"
							{else}
								flatRed" href="http://techberry.org/forum/flag/c={$category.id}/{$token}"
							{/if}>{if $smarty.session.group_id >= 6}Remove{else}Flag{/if}</a>
						</div>
						<div class="{#prefixForum#}list_box_action">
							<a href="http://techberry.org/forum/edit/c={$category.id}/" class="flatBlue">Edit</a>
						</div>
						<div class="{#prefixForum#}list_box_action">
							<a class="
							{if !$userPrivileges.forum_lockCategory}
								flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_lockCategory" data-v="forum:category:lock:lackPrivilege"
							{else}
								flatBlue"
								href="http://techberry.org/forum/lock/c={$category.id}/{$token}"
							{/if}>Lock</a>
						</div>
					{/if}
				{/if}
			</div>
		</li>
	{/foreach}
	</ul>
	{$pagination}
	{if $withShowMoreButton eq 1 and false}
		<div role="button" data-from="{$settings.CategoryResultsPerLoad}" data-first="1" data-info="forum-category" class="{#prefixForum#}loadMore loadMore">Show more</div>
	{/if}
{/block}
{/strip}
{/nocache}