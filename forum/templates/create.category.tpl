{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<ul>
		<li class="{#prefixForum#}list" style="margin-bottom:20px">
			<div class="{#prefixForum#}title">Forums</div>
			<a href="#" style="float:left" class="
			{if !$userPrivileges.forum_createCategory}
				flatLocked strikethrough tooltipWiki pointsNeeded"
				data-action="forum_createCategory" 
				data-v="forum:category:create:lackPrivilege"
			{else}
				flatBlue" onclick="forum_createCategory(); return false"
			{/if}>Submit</a>
			<a style="float:left" class="flatRed" href="javascript:history.back()" data-ot="Go back">Cancel</a>
			<div class="{#prefixForum#}directory_link">
				<a href="http://techberry.org/forum/">Root</a>
			</div>
			( Creating a category )
		</li>
		<li>
			<div class="{#prefixForum#}create_content">
				{if !$userPrivileges.forum_createCategory}
					<div class="{#prefixForum#}info_message">
						You have insufficient <a class="default" href="http://techberry.org/help/privileges/">privileges</a> to create a category
					</div>
				{else}
					<div id="{#prefixForum#}new_event" style="display:none" class="{#prefixForum#}info_message"></div>
					<form name="submit_new_category_form" method="post" action="http://techberry.org/forum/create/submit/c/">
						<input name="title" type="text" class="input_text" placeholder="Title" maxlength="200"/>
						<textarea name="content" class="textarea" placeholder="Description" maxlength="500"></textarea>
						<input type="hidden" name="token" value="{$token}"/>
					</form>
				{/if}
			</div>
			{if $userPrivileges.forum_createCategory}
				<div class="{#prefixForum#}side_tip">
					<h4>Links</h4>
					<p><a href="http://techberry.org/help/bbcode" class="default" target="_blank">Forum rules »</a></p>
					<p><a href="http://techberry.org/help/bbcode" class="default" target="_blank">BBCode docs »</a></p>
				</div>
			{/if}
		</li>
	</ul>
{/block}
{/strip}