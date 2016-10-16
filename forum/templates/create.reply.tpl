{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<ul>
	{if $postExists eq 1}
		<li class="{#prefixForum#}list" style="margin-bottom:20px">
			<div class="{#prefixForum#}title">Forums</div>
			<a href="#" style="float:left" class=" 
			{if !$userPrivileges.forum_createReply}
				flatLocked strikethrough tooltipWiki pointsNeeded"
				data-action="forum_createReply" 
				data-v="forum:reply:create:lackPrivilege"
			{else}
				flatBlue"
				onclick="forum_createReply(); return false"
			{/if}>Submit</a>
			<a style="float:left" class="flatRed" href="javascript:history.back()" data-ot="Go back">Cancel</a>
			<div class="{#prefixForum#}directory_link">
				<a href="http://techberry.org/forum/">Root</a> / <a href="http://techberry.org/forum/c={$category_id}/{$categoryTitleLink}">{$categoryTitle}</a> / <a href="http://techberry.org/forum/t={$topic_id}/{$topicTitleLink}">{$topicTitle}</a> / <a href="http://techberry.org/forum/p={$post_id}/{$postTitleLink}">{$postTitle}</a>
			</div>
			( Creating a reply )
		</li>
		<li>
			<div class="{#prefixForum#}create_content">
				<div id="{#prefixForum#}new_event" style="display:none" class="{#prefixForum#}info_message"></div>
				<form name="submit_new_reply_form" method="post" action="http://techberry.org/forum/create/submit/r={$post_id}/">
					<textarea name="content" class="textarea" placeholder="Content" maxlength="500"></textarea>
					<input type="hidden" name="token" value="{$token}"/>
				</form>
			</div>
			<div class="{#prefixForum#}side_tip">
				<h4>Links</h4>
				<p><a href="http://techberry.org/help/bbcode" class="default" target="_blank">Forum rules »</a></p>
				<p><a href="http://techberry.org/help/bbcode" class="default" target="_blank">BBCode docs »</a></p>
			</div>
		</li>
	{else}
		<li class="{#prefixForum#}list" style="margin-bottom:20px">
			<div class="{#prefixForum#}title">Forums</div>
			<a style="float:left" class="flatRed" href="#">Cancel</a>
			<div class="{#prefixForum#}directory_link">
				<a href="http://techberry.org/forum/">Root</a>
			</div>
		</li>
		<li class="{#prefixForum#}center_message">
			This post simply doesn't exist
		</li>
	{/if}
	</ul>
{/block}
{/strip}