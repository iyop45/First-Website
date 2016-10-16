{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<h3 class="{#prefixSupport#}title">TechBerry groups</h3>
	<p class="{#prefixSupport#}note" style="margin-bottom:20px">Groups enable certain privileges by default. Moderators will adjust user groups manually.</p>
	<ul class="nav">
	{foreach from=$groups item=group}
		<a href="http://techberry.org/help/groups/{$group.name}">
			<li id="{$group.name}" class="{#prefixSupport#}group_row">
				{if $groupName eq $group.name}
					<div class="{#prefixSupport#}earnt">
					</div>
				{/if}
				<div class="{#prefixSupport#}group_points {#prefixSupport#}note">
				{if $group.privilegeReputationStart eq 7777}
					&#8734;
				{else}
					{if $group.privilegeReputationStart eq -7777}
						&#8722;&#8734;
					{else}
						{$group.privilegeReputationStart}
					{/if}
				{/if}</div>
				<div class="{#prefixSupport#}group_name {#prefixSupport#}note">{$group.name}</div>
				<div class="{#prefixSupport#}group_description {#prefixSupport#}note">{$group.description}</div>
			</li>
		</a>
	{/foreach}
	</ul>
	{if $scrollToID}
		<script type="text/javascript">
			{literal}
				$('html, body').animate({
					scrollTop: $("{/literal}#{$scrollToID}{literal}").offset().top-50
				}, 2000, function(){   
					$('{/literal}#{$scrollToID}{literal}').animate({backgroundColor: "#f90" }, 'slow');
					$('{/literal}#{$scrollToID}{literal}').animate({backgroundColor: "#fff" }, 'slow');
				});
			{/literal}
		</script>
	{/if}
{/block}
{/strip}