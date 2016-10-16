{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{$docType}
<head>
	{$startOfHead}
	{include file="/home/content/99/11499199/html/templates/core/head.tpl"}
	{$endOfHead}
	{include file="/home/content/99/11499199/html/templates/head_js.tpl"}
</head>
{nocache}
{strip}
	<body>
		{$startOfBody}
		{if $announcements}
			{foreach from=$announcements item=announcement}
				<div id="beta_header">
					<p>
						<span class="blurb">{$announcement}</span>
						<span onclick="var x=this.parentNode.parentNode;x.parentNode.removeChild(x)" class="removeNtf uOnHover">remove</span>
					</p>
				</div>
			{/foreach}
		{/if}
		<div id="{#prefixMain#}bg"></div>
		<div id="{#prefixGlobal#}{#subPrefixHeader#}">
			<div id="{#prefixGlobal#}{#subPrefixHeader#}_{#subPrefixWrap#}">
				{if $isLoggedIn eq false}
					<a href="{$topBarLink|default:'http://techberry.org/'}" style="float:right" rel="nofollow" class="sign_up">
						<button class="{#prefixGlobal#}{#subPrefixHeader#}_head_btn {$topLinkColor|default:'blue'}">{$topLinkText|default:'Home'}</button>
					</a>
				{else}
					<a href="http://techberry.org/process.logout.php?token={$token}">
						<button class="{#prefixGlobal#}{#subPrefixHeader#}_head_btn blue">Logout</button>
					</a>
					{if $group_id gt 4}
						<a href="http://techberry.org/admin/">
							<button class="{#prefixGlobal#}{#subPrefixHeader#}_head_btn red">admin</button>
						</a>		
					{/if}
					{nocache}
						<div id="{#prefixGlobal#}{#subPrefixUser#}_header_block">
							<a class="{#prefixGlobal#}{#subPrefixUser#}_link" href="http://techberry.org/account/" style="margin-top:13px">{$username}</a>
							<span class="{#prefixGlobal#}{#subPrefixUser#}_reputation">
								{/strip}[ {strip}
								<a href="http://techberry.org/help/privileges/" data-ot="Reputation level" class="reputationLink">{$reputation}</a>
								{/strip} ]{strip}
							</span>
							<a class="{#prefixGlobal#}{#subPrefixUser#}_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false">
								<span id="notification_bell" {if $hasNotifications eq 1}class="animated flash" onclick="$.get('http://techberry.org/poll/viewedNotifications.php?token={$token}'); $(this).removeClass();"{/if}>
								</span>
							</a>
							<span style="height:25px" class="{#prefixGlobal#}{#subPrefixUser#}_avatar">
								<img src="{$avatar}" width="25px" height="25px">
							</span>
							<div id="notifications" class="{#prefixGlobal#}{#subPrefixUser#}_flyout" style="display:none">
								<div class="body-arrow"></div>
								<div style="width:400px;height:327px;background-color:#e5e5e5;">
									<iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token={$token}" src="about:blank"></iframe>
								</div>
							</div>
						</div>
					{/nocache}
				{/if}
				<a href="http://techberry.org/">
					<div class="{#prefixGlobal#}logo"></div>
				</a>
			</div>
		</div>
		<div style="{if $withTopPadding eq true}padding-top:20px{/if}">
			<div id="{#prefixMain#}overlay2" onclick="close_bar(this);" style="display:none"></div>
			<div {if $withSidePadding eq true}class="{#prefixGlobal#}wrap{/if}">
				<div id="{#prefixGlobal#}page" style="height:100%">
					{block name=content}Default Page Content{/block}
				</div>
			</div>
			{if $enableFooter}
				{include file="/home/content/99/11499199/html/templates/core/footer.tpl"}
			{/if}
		</div>
		{$endOfBody}
		{if $toTopButton}
			<a id="toTop" href="#top" style="display:inline">
				<img width="40" height="40" src="http://techberry.org/images/to-top.png">
			</a>
		{/if}
		{include file="/home/content/99/11499199/html/templates/body_js.tpl"}
	</body>
{/strip}
{/nocache}