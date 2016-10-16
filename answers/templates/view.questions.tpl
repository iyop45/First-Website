{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<ul>
	<li class="{#prefixQA#}list">
		<div class="{#prefixQA#}title">Q & A</div>
		<a style="float:left" class="flatBlue" href="#">Ask a question</a>
		<div class="{#prefixQA#}directory_link">
			<a href="http://techberry.org/answers/">Root</a>
		</div>
	</li>
	{foreach from=$questions item=question}
		<li class="{#prefixQA#}list">
			<a href="http://techberry.org/answers/q={$question.id}/{$question.titleLink}">
				<div data-user="{$question.username}" class="{#prefixQA#}list_bubble miniprofile" style="background-color:{$question.color}">
					<img class="{#prefixQA#}list_icon" src="{$question.avatar}" alt="{$question.title}"/>
				</div>
			</a>
			<div class="{#prefixQA#}list_info">
				<a class="light" href="http://techberry.org/answers/q={$question.id}/{$question.titleLink}">
					<h2>{$question.title|ucfirst}</h2>
				</a>
				<p class="{#prefixQA#}list_description">
					{$question.content}...
				</p>
			</div>
			<div class="{#prefixQA#}list_stats">
				<div class="{#prefixQA#}list_box help" data-ot="This count is based on approximations">
					<span class="{#prefixQA#}list_value">
						{$question.views}
					</span>
					Views
				</div>
				<div class="{#prefixQA#}list_box {if $question.answered > 0}accepted{/if}">
					<span class="{#prefixQA#}list_value">
						{$question.answers|default:0}
					</span>
					Answers
				</div>
				<div class="{#prefixQA#}list_box">
					<span class="{#prefixQA#}list_value">
						{$question.votes|default:0}
					</span>
					Votes
				</div>
				<div class="{#prefixQA#}list_box">
					<span class="{#prefixQA#}list_value">
						{$question.date}
					</span>
					Age
				</div>
				<div class="{#prefixQA#}list_box_action">
					<a href="#" class="flatRed">Flag</a>
				</div>
			</div>
		</li>
	{/foreach}
	</ul>
{/block}
{/strip}