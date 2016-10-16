{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div class="{#prefixSupport#}sitemap">
		<ul id="{#prefixSupport#}primaryNav" class="{#prefixSupport#}col4">
			<li id="{#prefixSupport#}home"><a href="http://techberry.org">Home</a></li>
			<li><a href="/products">Platforms</a>
				<ul>
					<li><a href="/forum">Forums</a></li>
					<li><a href="/code">ScribbleCode</a></li>
					<li><a href="/news">News</a></li>
					<li><a href="/answers">Questions</a></li>
					<li><a href="/tutorials">Tutorials</a></li>
					<li><a href="/docs">API</a></li>
					<li><a href="/chat">ShoutBox</a></li>
				</ul>
			</li>
			<li><a href="/about">Extras</a>
				<ul>
					<li><a href="/about">About Us</a></li>
					<li><a href="/statistics">Statistics</a></li>
					<li><a href="/search">Search</a></li>
					<li><a href="/rankings">Rankings</a></li>
					<li><a href="/help/badges">Badges</a></li>
					<li><a href="/help/privileges">Privileges</a></li>
					<li><a href="/help/groups">Groups</a></li>
				</ul>
			</li>
			<li><a href="/support">Support</a>
				<ul>
					<li><a href="/support">FAQ</a></li>
					<li><a href="/help/bbcode">BBCode</a></li>
					<li><a href="/help/sitemap/">Site Map</a></li>
					<li><a href="/help/contact/">Contact Us</a></li>
					<li><a href="/help/terms/">Terms & Conditions</a></li>
					<li><a href="/help/privacy/">Privacy Policy</a></li>
				</ul>
			</li>
		</ul>
	</div>
{/block}
{/strip}