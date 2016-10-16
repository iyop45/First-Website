{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<ul>
	{if $topicExists eq 1}
		<li class="{#prefixForum#}list" style="margin-bottom:20px">
			<div class="{#prefixForum#}title">Forums</div>
			<a href="#" style="float:left" class=" 
			{if !$userPrivileges.forum_createPost}
				flatLocked strikethrough tooltipWiki pointsNeeded"
				data-action="forum_createPost" 
				data-v="forum:post:create:lackPrivilege"
			{else}
				flatBlue"
				onclick="forum_createPost(); return false"
			{/if}>Submit</a>
			<a style="float:left" class="flatRed" href="javascript:history.back()" data-ot="Go back">Cancel</a>
			<div class="{#prefixForum#}directory_link">
				<a href="http://techberry.org/forum/">Root</a> / <a href="http://techberry.org/forum/c={$category_id}/{$categoryTitleLink}">{$categoryTitle}</a> / <a href="http://techberry.org/forum/t={$topic_id}/{$topicTitleLink}">{$topicTitle}</a>
			</div>
			( Creating a post )
		</li>
		<li>
			<div class="{#prefixForum#}create_content">
				<div id="{#prefixForum#}new_event" style="display:none" class="{#prefixForum#}info_message"></div>
				<form name="submit_new_post_form" method="post" action="http://techberry.org/forum/create/submit/p={$topic_id}/">
					<input name="title" type="text" class="input_text" placeholder="Title" maxlength="200"/>
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
			This topic simply doesn't exist
		</li>
	{/if}
	</ul>
{/block}
{/strip}