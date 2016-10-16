{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<h3 class="{#prefixSupport#}title">TechBerry privileges</h3>
	<p class="{#prefixSupport#}note">Privileges can be granted in direct relation to your reputation level. They control your actions on this site.</p>
	<p class="{#prefixSupport#}note" style="margin-bottom:20px">If you're not in the <a class="default" href="http://techberry.org/help/groups/trusted">trusted</a> group or higher then the reputation requirement for automatic privilege unlocks will not be set</p>
	<ul class="nav">
	{foreach from=$privileges item=privilege}
		{if $privilege.firstOfPlatform}
			<p id="{$privilege.platform}Tab" class="{#prefixSupport#}note" style="margin-left:25px">
				<a href="http://techberry.org/help/privileges/{$privilege.platform}Tab" class="default">{$privilege.platform}</a>
			</p>
		{/if}
	<a href="http://techberry.org/help/privileges/{$privilege.action}">
		<li id="{$privilege.action}" class="{#prefixSupport#}privilege_row" style="{if $smarty.foreach.privilege.last}border-top: 1px solid #e5e5e5;{/if}{if !$privilege.unlocked}opacity:0.6{/if}">
			{if $privilege.unlocked}
				<div class="{#prefixSupport#}earnt tooltipWiki" data-v="privilege:unlocked">
				</div>
			{/if}
			<div class="{#prefixSupport#}privilege_points {#prefixSupport#}note">{if $privilege.required_points eq 0}-{else}{$privilege.required_points}{/if}</div>
			<div class="{#prefixSupport#}privilege_name {#prefixSupport#}note">{$privilege.name}</div>
			<div class="{#prefixSupport#}privilege_description {#prefixSupport#}note">{$privilege.description}</div>
			{if !$privilege.required_points eq 0 and $isLoggedIn and !$privilege.unlocked}
				<div class="{#prefixSupport#}privilege_progress {#prefixSupport#}note">
					<div class="{#prefixSupport#}progress_bar">
						<div class="{#prefixSupport#}progress" style="width:
						{if $reputation > $privilege.required_points}
							100%"
						{else}
							{math equation="(( y  / x ) * 100)" x=$privilege.required_points y=$reputation}%"
							data-ot="{math equation="(( y  / x ) * 100)" x=$privilege.required_points y=$reputation}%"
						{/if}></div>
					</div>
				</div>
			{/if}
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