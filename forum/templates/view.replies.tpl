{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{nocache}
{strip}
{block name=content}
	<ul id="contentList">
	<li class="{#prefixForum#}list">
		<div class="{#prefixForum#}title">Forums</div>
		{if $postExists}
		<a style="float:left" class="
			{if !$userPrivileges.forum_createReply}
				strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_createReply" data-v="forum:reply:submit:lackPrivilege"
			{else}
				flatBlue" href="http://techberry.org/forum/create/r={$post_id}/" 
			{/if}>Create a reply</a>
		{/if}
		<div class="{#prefixForum#}directory_link">
			<a href="http://techberry.org/forum/">Root</a>{if $postExists} / <a href="http://techberry.org/forum/c={$category_id}/{$categoryTitleLink|escape}">{$categoryTitle|escape}</a> / <a href="http://techberry.org/forum/t={$topic_id}/{$topicTitleLink|escape}">{$topicTitle|escape}</a> / <a href="http://techberry.org/forum/p={$post_id}/{$postTitleLink|escape}">{$postTitle|escape}</a>{/if}
		</div>
	</li>
	<li>
		<div id="{#prefixForum#}new_event" style="display:none" class="{#prefixForum#}info_message"></div>
	</li>
	{if $postExists}
		{foreach from=$replies item=reply name=r}
			<li class="{#prefixForum#}list {if $reply.flagCount gt $forumConstants.ReplyFlagCountForUnpopular and $reply.isPost eq 0}unpopular{/if}" {if $reply.isPost eq 1}style="border-bottom: 4px solid #ccc;"{/if}>
				<ul class="{#prefixForum#}side_list">
					<li>
						<a href="http://techberry.org/user/{$reply.username}/">
							<div data-user="{$reply.username}" class="{#prefixForum#}list_bubble miniprofile" style="background-color:{$reply.color}">
								<img class="{#prefixForum#}list_icon" src="{$reply.avatar}" alt="{$reply.title}"/>
							</div>
						</a>
					</li>
					<li class="{#prefixForum#}side_list_actions">
						<a href="http://techberry.org/help/groups/{$reply.groupName}" style="color:white">
							<p class="groupBadge tooltipWiki" data-v="user:group:{$reply.groupName}">
								{$reply.groupName}
							</p>
						</a>
						{if $smarty.foreach.r.first}
							{if $reply.isLocked eq 1}
								<a href="#" style="background-image:none!important;padding-left:1em" data-ot="This post is permanently locked" data-action="unlock" class="flatLocked pointsNeeded">Locked</a>
							{else}
								<a class="flatBlue" href="http://techberry.org/forum/edit/p={$post_id}/">Edit</a>
								<a class="
								{if !$userPrivileges.forum_flagPost}
									strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_flagPost" data-v="forum:post:flag:lackPrivilege" style="padding-left:35px !important"
								{else}
									flatRed"
									href="http://techberry.org/forum/flag/p={$post_id}/{$token}"
								{/if}>Flag</a>
								<a href="http://techberry.org/forum/lock/p={$post_id}/{$token}" class="
								{if !$userPrivileges.forum_lockPost}
									flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_lockPost" data-v="forum:post:lock:lackPrivilege" style="padding-left:35px !important"
								{else}
									flatBlue"
								{/if}>Lock</a>
							{/if}
						{else}
							{if $reply.isLocked eq 1}
								<a href="#" style="background-image:none!important;padding-left:1em" data-ot="This reply is permanently locked" data-action="unlock" class="flatLocked pointsNeeded">Locked</a>
							{else}
								<a class="flatBlue" href="http://techberry.org/forum/edit/r={$reply.id}/">Edit</a>
								<a class="
								{if !$userPrivileges.forum_flagReply}
									strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_flagReply" data-v="forum:reply:flag:lackPrivilege" style="padding-left:35px !important"
								{else}
									flatRed"
									href="http://techberry.org/forum/flag/r={$reply.id}/{$token}"
								{/if}>{if $smarty.session.group_id >= 6}Remove{else}Flag{/if}</a>
								<a class="
								{if !$userPrivileges.forum_lockReply}
									flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_lockReply" data-v="forum:reply:lock:lackPrivilege" style="padding-left:35px !important"
								{else}
									flatBlue"
									href="http://techberry.org/forum/lock/r={$reply.id}/{$token}"
								{/if}>Lock</a>
							{/if}
						{/if}
					</li>
				</ul>
				<div class="{#prefixForum#}reply_content">
					{if $smarty.foreach.r.first}
						<a class="light" href="http://techberry.org/forum/p={$post_id}/{$postTitleLink|escape}">
							<h2>{$postTitle|ucfirst|escape}</h2>
						</a>
					{/if}
					<p class="{#prefixForum#}list_description">
						{$reply.content}
					</p>
				</div>
			</li>
			{if $smarty.foreach.r.first}
				<script type="text/javascript">
					{literal}
					$(document).ready(function(){
						(function poll(){
							$.ajax(
										{
											{/literal}
												url: "http://techberry.org/forum/poll/p={$post_id}/{$token}/{$currentTimeStamp}",
											{literal}
											success: function(response)
											{
												if(response=='true'){
													$("#f_new_event").css({"display":"block"});
													{/literal}
														$("#f_new_event").html("There has been a <a class=\"default\" href=\"http://techberry.org/forum/p={$post_id}/{$postTitleLink}\">new</a> reply to this post");
													{literal}
												}
											},
											complete: setTimeout(poll,5000),
											timeout: 5000
										}
								  );
						})();
					});
					{/literal}
				</script>
			{/if}
		{/foreach}
	{else}
		<li class="{#prefixForum#}center_message">
			This post does not exist :(
		</li>
	{/if}
	</ul>
	{$pagination}
	{if $replies|@count gt 1 and $postExists and false}
		<!-- This will not be shown -->
		<div role="button" data-from="{$settings.ReplyResultsPerLoad}" data-info="forum-reply_{$post_id}" class="{#prefixForum#}loadMore loadMore">Show more</div>
	{/if}
{/block}
{/strip}
{/nocache}