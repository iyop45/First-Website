{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<ul>
	<li class="{#prefixTutorials#}list">
		<div class="{#prefixTutorials#}title">Tutorials</div>
		<a style="float:left" class="flatBlue" href="#">Submit a group</a>
		<div class="{#prefixTutorials#}directory_link">
			<a href="http://techberry.org/tutorials/">Root</a>
		</div>
	</li>
	{foreach from=$groups item=group}
		{if $group.pending eq 1 && $pendingTitle eq 1}
			{assign "pendingTitle" 0} 
			<li class="{#prefixTutorials#}list">
				Pending groups
			</li>
		{/if}
		<li class="{#prefixTutorials#}list">
			<a href="http://techberry.org/tutorials/g={$group.id}/{$group.titleLink}">
				<div class="{#prefixTutorials#}list_bubble" style="background-color:{$group.color}">
					<img class="{#prefixTutorials#}list_icon" src="{$group.icon}" alt="{$group.title}"/>
				</div>
			</a>
			<div class="{#prefixTutorials#}list_info">
				<a class="light" href="http://techberry.org/tutorials/g={$group.id}/{$group.titleLink}">
					<h2>{$group.title}</h2>
				</a>
				<p class="{#prefixTutorials#}list_description">
					{$group.description}
				</p>
			</div>
			<div class="{#prefixTutorials#}list_stats">
				<div class="{#prefixTutorials#}list_box">
					<span class="{#prefixTutorials#}list_value help" data-ot="This count is based on approximations">
						{$group.views}
					</span>
					Views
				</div>
				<div class="{#prefixTutorials#}list_box">
					<span class="{#prefixTutorials#}list_value">
						{$group.pages}
					</span>
					Pages
				</div>
				<div class="{#prefixTutorials#}list_box">
					<span class="{#prefixTutorials#}list_value">
						{$group.date}
					</span>
					Age
				</div>
				{if $group.pending eq 1}
					<div class="{#prefixTutorials#}list_box_meter" title="{$group.commits} committed ( {$group.meterWidth}% )">
						<div class="meter">
							<span style="width:{$group.meterWidth}%"></span>
						</div>
					</div>
					<div class="{#prefixTutorials#}list_box_action">
						<a href="#" class="flatBlue">Commit</a>
					</div>
				{else}
					<div class="{#prefixTutorials#}list_box_action">
						<a href="#" class="flatRed">Request removal</a>
					</div>
					<div class="{#prefixTutorials#}list_box_action">
						<a href="#" class="flatBlue">Edit group</a>
					</div>
				{/if}
			</div>
		</li>
	{/foreach}
	</ul>
{/block}
{/strip}