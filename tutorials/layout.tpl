{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div id="{#prefixSupport#}fullBlock">
		<div class="{#prefixTutorials#}title_block">
			<div class="{#prefixTutorials#}title">Tutorials</div>
			<a style="float:left" class="flatBlue {if $isPending}strikethrough{/if}" href="#">Edit chapter</a>
			<a style="float:left" class="flatRed {if $isPending}strikethrough{/if}" href="#">Request removal</a>
			<div class="{#prefixTutorials#}directory_link">
				{if $isPending}
					<a href="http://techberry.org/tutorials/">Root</a> / <a href="http://techberry.org/tutorials/g={$tut.group_id}/{$tut.groupTitleLink}">{$tut.title}</a> / <a href="http://techberry.org/tutorials/c={$tut.id}/{$tut.titleLink}">{$tut.title}</a>
				{else}
					<a href="http://techberry.org/tutorials/">Root</a> / <a href="http://techberry.org/tutorials/g={$tut.group_id}/{$groupTitleLink}">{$groupTitle}</a> / <a href="http://techberry.org/tutorials/c={$tut.id}/{$tut.titleLink}">{$tut.title}</a>
				{/if}
			</div>
		</div>
		<div class="{#prefixTutorials#}content">
			{if !$isPending}
				<div id="{#prefixSupport#}block" style="text-align:left;padding:0 !important">
					<h4 class="{#prefixSupport#}title">{$groupTitle}: {$tut.title|ucfirst}</h4>
					{$content}
					<br>
					<br>
					<div class="chapter">
						{if $tut.previous_id != 0}
							<div class="prev">
								<a class="default" style="font-weight:bolder" href="http://techberry.org/tutorials/c={$tut.previous_id}/{$tut.previousTitleLink}">&#171; Previous tut</a>
							</div>
						{/if}
						{if $tut.next_id != 0}
							<div class="next">
								<a class="default" style="font-weight:bolder" href="http://techberry.org/tutorials/c={$tut.next_id}/{$tut.nextTitleLink}">Next tut &#187;</a>
							</div>
						{/if}
					</div>
					<div class="{#prefixTutorials#}comment_box" style="float:left;width:600px">
						<form action="">
							<div class="{#prefixTutorials#}comment_holder">
								<textarea placeholder="Enter your comment..." class="{#prefixTutorials#}comment_textarea"></textarea>
							</div>
							<input type="hidden" name="token" value="{$token}">
							<div class="{#prefixTutorials#}comment_buttons">
								<input type="submit" value="Submit" class="blue">
							</div>
						</form>
					</div>
				</div>
			{else}
				<div class="{#prefixTutorials#}center_message {#prefixTutorials#}page_message">
					This tutorial page is <a href="#" class="default">pending</a> and so contributions or edits can't be made
				</div>
			{/if}
		</div>
	</div>
{/block}
{/strip}