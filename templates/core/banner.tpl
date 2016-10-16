{strip}
<div id="{#prefixGlobal#}banner">
	{nocache}
	{if $announcements}
		{foreach from=$announcements item=announcement}
			<!-- Loop, despite only one announcement being rendered per page -->
			{if $announcement.id <> 0 and $announcement.id <> null and $smarty.cookies.removeAnnouncement != $announcement.id and !isset($noAnnouncements)}
				<div id="announcement_{$announcement.id}" class="global_notification">
					<p>
						<span>{$announcement.content}</span>
						<span onclick="removeAnnouncement({$announcement.id})" class="removeNtf uOnHover">remove</span>
					</p>
				</div>
			{/if}
		{/foreach}
	{/if}
	{/nocache}
	{if $newBadgeMessage}
		<!-- disabled for now due to padding and name issue -->
		<div class="success_notification">
			<p>
				<span>{$newBadgeMessage}</span>
			</p>
		</div>
	{/if}
	<noscript>
			<div id="noscript">
				<p>
					<span>We strongly recommend that you enable javascript</span>
				</p>
			</div>
	</noscript>
	{if $bannerLinksEnabled eq true}
		<nav class="{#prefixGlobal#}main-nav sans-serif">
			<div class="{#prefixGlobal#}container">
				<ul>
					<li style="width:{$bannerLinkWidth}"><a href="http://techberry.org/" rel="home" class="{if $homeTab}active{else}default{/if}">Home</a></li>
					<li style="width:{$bannerLinkWidth}"><a href="http://techberry.org/platforms/" class="{if $platformsTab}active{else}default{/if}">Platforms</a></li>
					<li style="width:{$bannerLinkWidth}"><a href="http://techberry.org/forum/" class="{if $forumTab}active{else}default{/if}">Forums</a></li>
					<li style="width:{$bannerLinkWidth}"><a href="http://techberry.org/rankings/" rel="me" class="{if $usersTab}active{else}default{/if}">Users</a></li>
					<li style="width:{$bannerLinkWidth}"><a href="http://techberry.org/support/" rel="me" class="{if $supportTab}active{else}default{/if}">Support</a></li>
					{if $searchBarEnabled}
						<script>
						  (function() {
							var cx = '010847070576185715249:2nyivikkprw';
							var gcse = document.createElement('script');
							gcse.type = 'text/javascript';
							gcse.async = true;
							gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
								'//www.google.com/cse/cse.js?cx=' + cx;
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(gcse, s);
						  })();
						</script>
						<form id="searchbox_010847070576185715249:2nyivikkprw" action="http://techberry.org/search/" class="{#prefixGlobal#}search_form">
							<input id="q" name="q" placeholder="search" type="text">
							<input id="sa" type="submit" value="">
						</form>
					{/if}
				</ul>
			</div>
		</nav>
	{/if}
</div>
{/strip}