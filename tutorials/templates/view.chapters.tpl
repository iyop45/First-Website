{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<ul>
	<li class="{#prefixTutorials#}list">
		<div class="{#prefixTutorials#}title">Tutorials</div>
		<a style="float:left" class="flatBlue {if $isPending}strikethrough{/if}" href="#">Submit a chapter</a>
		<div class="{#prefixTutorials#}directory_link">
			{if $isPending}
				<a href="http://techberry.org/tutorials/">Root</a> / <a href="http://techberry.org/tutorials/g={$group.id}/{$group.titleLink}">{$group.title}</a>
			{else}
				<a href="http://techberry.org/tutorials/">Root</a> / <a href="http://techberry.org/tutorials/g={$group_id}/{$groupTitleLink}">{$groupTitle}</a>
			{/if}
		</div>
	</li>
	{if !$isPending}
		{foreach from=$chapters item=chapter}
			{if $chapter.pending eq 1 && $pendingTitle eq 1}
				{assign "pendingTitle" 0} 
				<li class="{#prefixTutorials#}list">
					Pending chapters
				</li>
			{/if}
			<li class="{#prefixTutorials#}list">
				<a href="http://techberry.org/tutorials/g={$group_id}/{$groupTitleLink}">
					<div class="{#prefixTutorials#}list_bubble" style="background-color:{$chapter.groupColor}">
						<img class="{#prefixTutorials#}list_icon" src="{$chapter.groupIcon}" alt="{$chapter.groupName}"/>
					</div>
				</a>
				<div class="{#prefixTutorials#}list_info">
					<a class="light" href="http://techberry.org/tutorials/c={$chapter.id}/{$chapter.titleLink}">
						<h2>{$chapter.title}</h2>
					</a>
					<p class="{#prefixTutorials#}list_description">
						{$chapter.description}
					</p>
				</div>
				<div class="{#prefixTutorials#}list_stats">
					<div class="{#prefixTutorials#}list_box help" data-ot="This count is based on approximations">
						<span class="{#prefixTutorials#}list_value">
							{$chapter.views}
						</span>
						Views
					</div>
					<div class="{#prefixTutorials#}list_box">
						<span class="{#prefixTutorials#}list_value">
							{$chapter.date}
						</span>
						Age
					</div>
					<div class="{#prefixTutorials#}list_box">
						<span class="{#prefixTutorials#}list_value">
							{$chapter.chapter_id}
						</span>
						Chapter
					</div>
					{if $chapter.pending eq 1}
						<div class="{#prefixTutorials#}list_box_meter" title="{$chapter.commits} committed ( {$chapter.meterWidth}% )">
							<div class="meter">
								<span style="width:{$chapter.meterWidth}%"></span>
							</div>
						</div>
						<div class="{#prefixTutorials#}list_box_action">
							<a href="http://techberry.org/tutorials/commit.php?token={$token}&group_id={$chapter.group_id}&chapter_id={$chapter.chapter_id}" class="flatBlue">Commit</a>
						</div>
					{else}
						<div class="{#prefixTutorials#}list_box_action">
							<a href="#" class="flatRed">Request removal</a>
						</div>
						<div class="{#prefixTutorials#}list_box_action">
							<a href="#" class="flatBlue">Edit chapter</a>
						</div>
					{/if}
				</div>
			</li>
		{/foreach}
	{else}
		<li class="{#prefixTutorials#}center_message">
			This group is <a href="#" class="default">pending</a> and so chapters can't be suggested or altered
		</li>
	{/if}
	</ul>
{/block}
{/strip}