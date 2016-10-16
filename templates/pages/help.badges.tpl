{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<h3 class="{#prefixSupport#}title">TechBerry badges</h3>
	<p class="{#prefixSupport#}note" style="margin-bottom:20px">Badges are a means of rewarding helpful and productive users on the site; they will be displayed alongside your profile.</p>
	<ul class="nav">
	{foreach from=$badges item=badge}
		{if $badge.firstOfPlatform}
			<p id="{$badge.platform}Tab" class="{#prefixSupport#}note" style="margin-left:25px">
				<a href="http://techberry.org/help/badges/{$badge.platform}Tab" class="default">{$badge.platform}</a>
			</p>
		{/if}
		<a href="http://techberry.org/help/badges/{$badge.urlName}">
			<li id="{$badge.urlName}" class="{#prefixSupport#}badge_row" {if $smarty.foreach.badge.last}style="border-top: 1px solid #e5e5e5"{/if}>
				{if $badge.unlocked}
					<div class="{#prefixSupport#}earnt tooltipWiki" data-v="badge:unlocked"></div>
				{/if}
				<div class="{#prefixSupport#}badge_collumn">{$badge.markup}</div>
				<div class="{#prefixSupport#}badge_collumn {#prefixSupport#}note">{$badge.description}</div>
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