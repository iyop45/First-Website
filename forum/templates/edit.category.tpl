{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<script type="text/javascript">
		{literal}
		function viewEdit(id){
		{/literal}
			window.location.replace("http://techberry.org/forum/edit/c={$category_id}/"+id);
		{literal}
		}
		{/literal}
	</script>
	<ul>
		<li class="{#prefixForum#}list" style="margin-bottom:20px">
			<div class="{#prefixForum#}title">Forums</div>
			{if !$show_edit}
				<a style="float:left" class="flatBlue" onclick="document.submit_edit_category_form.submit();" href="#">Save edit</a>
			{/if}
			<a style="float:left" class="flatRed" href="javascript:history.back()">Cancel</a>
			<div class="{#prefixForum#}directory_link">
				<a href="http://techberry.org/forum/">Root</a> / <a href="http://techberry.org/forum/c={$category_id}/{$directory_categoryTitleLink}">{$directory_categoryTitle}</a>
			</div>
		</li>
		{if $isLocked eq 1}
			<li>
				<div class="{#prefixForum#}edit_content">
					<div class="{#prefixForum#}info_message">
						This category is locked and so edits can't be suggested or published
					</div>	
				</div>
			</li>
		{else}
			<li>
				<div class="{#prefixForum#}edit_content">
					{if $edits|@count gt 4}
						<div class="{#prefixForum#}info_message">
							We're not currently accepting any more edits as the <a href="#" class="default tooltipWiki" data-v="forum:category:edit:queue">queue</a> is full. Check back soon.
						</div>
					{/if}
					{if !$userPrivileges.forum_editTopic}
						<div class="{#prefixForum#}info_message">
							As you're <a href="http://techberry.org/help/groups/new" data-v="user:new" class="default tooltipWiki">new</a> your edits will be placed in a queue until reviewed by a <a href="http://techberry.org/help/groups/moderator" data-v="user:moderator" class="default tooltipWiki">moderator</a>
						</div>
					{/if}
					<select onchange="viewEdit(this.value)">
						<option value="" {if !$show_edit}selected="selected"{/if}>{$categoryUsername} ( {$categoryDate} ago) </option>
						{if !empty($edits)}
							{foreach from=$edits item=edit}
								<option value="{$edit.link_id}" {if $show_edit and $edit.select eq 1}selected="selected"{/if}>{$edit.username} ( {$edit.date} ago ) {$edit.reason}</option>
							{/foreach}
						{/if}
					</select>
					{if $show_edit}
						<div class="input_text" contenteditable="true">{$categoryTitle}</div>
						<div class="textarea" contenteditable="true">
							{$categoryDescription}
						</div>
					{else}
						<form name="submit_edit_category_form" method="post" action="http://techberry.org/forum/edit/submit/c={$category_id}/">
							<input name="title" type="text" class="input_text" placeholder="Title" value="{$categoryTitle}"/>
							<textarea name="content" class="textarea" placeholder="Content">
								{$categoryDescription}
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
								<a href="http://techberry.org/forum/edit/publish/c={$edit_id}/{$token}" class="{if !$userPrivileges.forum_commitCategoryEdit}strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_editCategory" data-v="forum:category:edit:commit:lackPrivilege"{else}flatBlue"{/if}>Publish</a>
							</li>
							<li class="{#prefixForum#}edit_button">
								<a href="http://techberry.org/forum/edit/remove/c={$edit_id}/{$token}" class="{if !$userPrivileges.forum_editCategory}strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_editCategory" data-v="forum:category:edit:lackPrivilege"{else}flatRed"{/if}>Remove</a>
							</li>
						</ul>
					</div>
				{/if}
			</li>
		{/if}
	</ul>
{/block}
{/strip}