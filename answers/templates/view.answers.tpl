{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<ul>
	<li class="{#prefixQA#}list">
		<div class="{#prefixQA#}title">Q & A</div>
		<a style="float:left" class="flatBlue" href="#">Answer question</a>
		<div class="{#prefixQA#}directory_link">
			<a href="http://techberry.org/answers/">Root</a> / <a href="http://techberry.org/answers/q={$question_id}/{$questionTitleLink}">{$questionTitle}</a>
		</div>
	</li>
	{foreach from=$answers item=answer name=a}
		<li class="{#prefixQA#}list">
			<ul class="{#prefixQA#}side_list">
				<li>
					<a href="http://techberry.org/user/{$answer.username}/">
						<div data-user="{$answer.username}" class="{#prefixQA#}list_bubble miniprofile" style="background-color:{$answer.color}">
							<img class="{#prefixQA#}list_icon" src="{$answer.avatar}" alt="{$answer.title}"/>
						</div>
					</a>
				</li>
				<li class="{#prefixQA#}votes">
					<ul>
						<li class="{#prefixQA#}vote_icon">
							<img src="http://techberry.org/answers/images/upvote.png" height="30" width="25"/>
						</li>
						<li class="{#prefixQA#}vote_number">
							{$answer.votes}
						</li>
						<li class="{#prefixQA#}vote_icon">
							<img src="http://techberry.org/answers/images/downvote.png" height="30" width="25"/>
						</li>
					</ul>
				</li>
				{if $answer.accepted eq 1}
					<li class="{#prefixQA#}accepted">
						<img src="http://techberry.org/answers/images/accepted.png" height="42" width="42"/>
					</li>
				{/if}
				<li>
					<a class="light {#prefixQA#}reply" href="#">
						<p>Reply</p>
					</a>
				</li>
			</ul>
			<div class="{#prefixQA#}reply_content">
				{if $smarty.foreach.a.first}
					<a class="light" href="http://techberry.org/answers/q={$question_id}/{$questionTitleLink}">
						<h2>{$questionTitle|ucfirst}</h2>
					</a>
				{/if}
				<p class="{#prefixQA#}list_description">
					{$answer.content}
				</p>
			</div>
		</li>
		{if $comments[{$smarty.foreach.a.iteration}]|@count gt 0}
			<li class="{#prefixQA#}comment_box">
			{foreach from=$comments[{$smarty.foreach.a.iteration}] item=comment name=c}
				<div class="{#prefixQA#}comment">
					<a class="light" href="http://techberry.org/user/{$comment.username}/">
						{$comment.username}
					</a>
					&nbsp;:&nbsp;{$comment.content}
				</div>
			{/foreach}
			</li>
		{/if}
	{/foreach}
	</ul>
{/block}
{/strip}