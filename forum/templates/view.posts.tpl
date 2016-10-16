{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{nocache}
{strip}
{block name=content}
	<ul id="contentList">
	<li class="{#prefixForum#}list">
		<div class="{#prefixForum#}title">Forums</div>
		{if !$isPending}
		<a style="float:left" class="
			{if !$userPrivileges.forum_createPost}
				strikethrough flatLocked tooltipWiki
			{else}
				flatBlue
			{/if}
			{if !$userPrivileges.forum_createPost} 
				 {/strip} {strip} {* because otherwise the class names will join *}
				 pointsNeeded" data-action="forum_createPost" data-v="forum:post:submit:lackPrivilege"
			{else}" 
				href="http://techberry.org/forum/create/p={$topic_id}/"
			{/if}>Create a post</a>
		{/if}
		<div class="{#prefixForum#}directory_link">
			{if $topicExists eq 1}
				{if $isPending}
					<a href="http://techberry.org/forum/">Root</a>{if $topic.categoryTitle|escape} / <a href="http://techberry.org/forum/c={$topic.category_id}/{$topic.categoryTitleLink|escape}">{$topic.categoryTitle|escape}</a>{/if}{if $topic.title|escape} / <a href="http://techberry.org/forum/t={$topic.id}/{$topic.titleLink|escape}">{$topic.title|escape}</a>{/if}
				{else}
					<a href="http://techberry.org/forum/">Root</a> / <a href="http://techberry.org/forum/c={$category_id}/{$categoryTitleLink|escape}">{$categoryTitle|escape}</a> / <a href="http://techberry.org/forum/t={$topic_id}/{$topicTitleLink|escape}">{$topicTitle|escape}</a>
				{/if}
			{else}
				<a href="http://techberry.org/forum/">Root</a>
			{/if}
		</div>
	</li>
	{if $topicExists eq 1}
		{if !$isPending}
			{if $hasPosts eq 1}
				{foreach from=$posts item=post}
					<li class="{#prefixForum#}list {if $post.flagCount gt $settings.PostFlagCountForUnpopular}unpopular{/if}">	
						<a href="http://techberry.org/user/{$post.username}/">
							<div data-user="{$post.username}" class="{#prefixForum#}list_bubble miniprofile" style="background-color:{$post.color}">
								<img class="{#prefixForum#}list_icon" src="{$post.avatar}" alt="{$post.title|escape:'html'}"/>
							</div>
						</a>
						<div class="{#prefixForum#}list_info">
							<a class="light" href="http://techberry.org/forum/p={$post.post_id}/{$post.postTitleLink}">
								<h2>{$post.title|escape}</h2>
							</a>
							<!--
							<p class="{#prefixForum#}newReplies" style="display: none">
								onmouseover="$(this).find('.{#prefixForum#}newReplies').show()" onmouseout="$(this).find('.{#prefixForum#}newReplies').hide()"
								----------- <a href="http://techberry.org/forum/p={$post.post_id}/{$post.postTitleLink}?goto=newreplies">new replies</a> -----------
							</p>
							-->
							<p class="{#prefixForum#}list_description shortened more">
								{$post.content|escape}
							</p>
						</div>
						<div class="{#prefixForum#}list_stats">
							<div class="{#prefixForum#}list_box help" data-ot="This count is based on approximations">
								<span class="{#prefixForum#}list_value">
									{$post.views|default:0}
								</span>
								Views
							</div>
							<div class="{#prefixForum#}list_box">
								<span class="{#prefixForum#}list_value">
									{$post.replyCount|default:0}
								</span>
								Replies
							</div>
							<div class="{#prefixForum#}list_box">
								<span datetime="{$post.date}" class="{#prefixForum#}list_value tiny age">
									{$post.friendlyDate|default:'NaN'}
								</span>
								Age
							</div>
							{if $post.isLocked eq 1}
								<div class="{#prefixForum#}list_box_action">
									<a href="#" data-ot="This post is permanently locked" data-action="unlock" class="flatLocked pointsNeeded">Locked</a>
								</div>
							{else}
								<div class="{#prefixForum#}list_box_action">
									<a href="http://techberry.org/forum/flag/p={$post.post_id}/{$token}" class="
									{if !$userPrivileges.forum_flagPost}
										strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_flagPost" data-v="forum:post:flag:lackPrivilege"
									{else}
										flatRed"
									{/if}>{if $smarty.session.group_id >= 6}Remove{else}Flag{/if}</a>
								</div>
								<div class="{#prefixForum#}list_box_action">
									<a href="http://techberry.org/forum/edit/p={$post.post_id}/" class="flatBlue">Edit</a>
								</div>
								<div class="{#prefixForum#}list_box_action">
									<a href="http://techberry.org/forum/lock/p={$post.post_id}/{$token}" class="
									{if !$userPrivileges.forum_lockPost}
										flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_lockPost" data-v="forum:post:lock:lackPrivilege"
									{else}
										flatBlue"
									{/if}>Lock</a>
								</div>
							{/if}
						</div>
					</li>
				{/foreach}
			{else}
				{if $PageNumber > 1}
					<li class="{#prefixForum#}center_message">
						There are no posts on this page
					</li>		
				{else}
					<li class="{#prefixForum#}center_message">
						This topic is empty, be the first to contribute!
					</li>
				{/if}
			{/if}
		{else}
			<li class="{#prefixForum#}center_message">
				This topic is <a href="#" data-v="forum:topic:pending" class="default tooltipWiki">pending</a> and so posts can't be suggested or altered
			</li>
		{/if}
	{else}
		<li class="{#prefixForum#}center_message">
			This topic does not exist
		</li>
	{/if}
	</ul>
	{$pagination}
	{if $posts|@count gt 1 and $topicExists and false}
		<!-- This will not be shown -->
		<div role="button" data-from="{$settings.PostResultsPerLoad}" data-first="1" data-info="forum-post_{$topic_id}" class="{#prefixForum#}loadMore loadMore">Show more</div>
	{/if}
{/block}
{/strip}
{/nocache}