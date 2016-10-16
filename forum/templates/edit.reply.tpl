{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<script type="text/javascript">
		{literal}
		function viewEdit(id){
		{/literal}
			window.location.replace("http://techberry.org/forum/edit/r={$reply_id}/"+id);
		{literal}
		}
		{/literal}
	</script>
	<ul>
	{if $replyExists eq 1}
		<li class="{#prefixForum#}list" style="margin-bottom:20px">
			<div class="{#prefixForum#}title">Forums</div>
			<a style="float:left" class="{if $show_edit}strikethrough flatLocked tooltipWiki" data-v="forum:reply:edit:cannotSave"{else}flatBlue" onclick="document.submit_edit_reply_form.submit();"{/if} href="#">Save edit</a>
			<a style="float:left" class="flatRed" href="javascript:history.back()">Cancel</a>
			<div class="{#prefixForum#}directory_link">
				<a href="http://techberry.org/forum/">Root</a> / <a href="http://techberry.org/forum/c={$category_id}/{$categoryTitleLink}">{$categoryTitle}</a> / <a href="http://techberry.org/forum/t={$topic_id}/{$topicTitleLink}">{$topicTitle}</a> / <a href="http://techberry.org/forum/p={$post_id}/{$postTitleLink}">{$postTitle}</a>
			</div>
		</li>
		<li>
			<div class="{#prefixForum#}edit_content">
				<div id="{#prefixForum#}new_event" style="display:none" class="{#prefixForum#}info_message"></div>
				{if $edits|@count gt 4}
					<div class="{#prefixForum#}info_message">
						We're not currently accepting any more edits as the <a href="#" class="default tooltipWiki" data-v="forum:topic:reply:queue">queue</a> is full. Check back soon.
					</div>
				{/if}
				{if !$userPrivileges.forum_editPost}
					<div class="{#prefixForum#}info_message">
						As you're <a href="http://techberry.org/help/groups/new" data-v="user:new" class="default tooltipWiki">new</a> your edits will be placed in a queue until reviewed by a <a href="http://techberry.org/help/groups/moderator" data-v="user:moderator" class="default tooltipWiki">moderator</a>
					</div>
				{/if}
				<select onchange="viewEdit(this.value)">
					<option value="" {if !$show_edit}selected="selected"{/if}>{$replyUsername} ( {$replyDate} ago) </option>
					{if !empty($edits)}
						{foreach from=$edits item=edit}
							<option value="{$edit.link_id}" {if $show_edit and $edit.select eq 1}selected="selected"{/if}>{$edit.username} ( {$edit.date} ago ) {$edit.reason}</option>
						{/foreach}
					{/if}
				</select>
				{if $show_edit}
					<div class="textarea" contenteditable="true">
						{$content}
					</div>
				{else}
					<form name="submit_edit_reply_form" method="post" action="http://techberry.org/forum/edit/submit/r={$reply_id}/">
						<textarea name="content" class="textarea" placeholder="Content">
							{$content}
						</textarea>
						<input name="reason" type="text" class="input_text" placeholder="Reason" maxlength="200"/>
						<input type="hidden" name="token" value="{$token}"/>
					</form>
				{/if}
			</div>
			{if $show_edit}
				<div class="{#prefixForum#}edit_actions" style="float:left;font-weight:bolder">
					<ul>
						<li class="{#prefixForum#}edit_button">
							<a href="http://techberry.org/forum/edit/publish/r={$edit_id}/{$token}" class="{if !$userPrivileges.forum_commitPostEdit}strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_editReply" data-v="forum:reply:edit:commit:lackPrivilege"{else}flatBlue"{/if}>Publish</a>
						</li>
						<li class="{#prefixForum#}edit_button">
							<a href="http://techberry.org/forum/edit/remove/r={$edit_id}/{$token}" class="{if !$userPrivileges.forum_editReply}strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_editReply" data-v="forum:reply:edit:lackPrivilege"{else}flatRed"{/if}>Remove</a>
						</li>
					</ul>
				</div>
			{/if}
		</li>
	{else}
		<li class="{#prefixForum#}center_message">
			This reply simply doesn't exist
		</li>
	{/if}
	</ul>
{/block}
{/strip}