{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{$docType}
<head>
	{$startOfHead}
	{include file="/home/content/99/11499199/html/templates/core/head.tpl"}
	{$endOfHead}
	{include file="/home/content/99/11499199/html/templates/head_js.tpl"}
</head>
{strip}
	<body>
		{$startOfBody}
		<div id="{#prefixMain#}bg"></div>
		<div id="{#prefixGlobal#}{#subPrefixHeader#}">
			<div id="{#prefixGlobal#}{#subPrefixHeader#}_{#subPrefixWrap#}">
				{if $isLoggedIn eq false}
					{if $loginError}
						<form accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="{#prefixGlobal#}login">
							<input class="h_input" type="text" name="email" id="username" maxlength="50"/>
							<input class="h_input" type="password" name="password" id="password" maxlength="50"/>
							<input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/>
							<input type="hidden" value="{$url|base64_encode}" name="continue"/>
							<input type="hidden" value="{$token}" name="token"/>
							<a href="http://techberry.org/register" rel="nofollow" class="h_sign-up">
								<span>Sign Up</span>
							</a>
						</form>
						<div id="login_error" class="color-red">{$loginError}</div>
					{else}
						<a href="http://techberry.org/login?ref=1" onclick="ShowLogin(this); return false;" rel="nofollow">
							<button class="{#prefixGlobal#}{#subPrefixHeader#}_head_btn blue">Sign in</button>
						</a>
						<form style="visibility:hidden" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="{#prefixGlobal#}login">
							<input class="h_input" type="text" name="email" id="username" maxlength="50"/>
							<input class="h_input" type="password" name="password" id="password" maxlength="50"/>
							<input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/>
							<input type="hidden" value="{$url|base64_encode}" name="continue"/>
							<input type="hidden" value="{$token}" name="token"/>
							<a href="http://techberry.org/register" rel="nofollow" class="h_sign-up">
								<span>Sign Up</span>
							</a>
						</form>
					{/if}
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
								<span id="notification_bell">
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
		{include file="/home/content/99/11499199/html/templates/core/banner.tpl"}
		{if $customBanner}
			{$customBanner}
		{/if}
		<div id="notification_overlay" onclick="notifications();" style="display:none"></div>
		<div {if $withTopPadding eq true}id="paddedBody" style="padding-top:{$pagePadding|default:'20'}px"{/if}>
			<div {if $withSidePadding eq true}class="{#prefixGlobal#}wrap"{/if}>
				<div id="{#prefixGlobal#}page" style="height:100%">
					{block name=content}Default Page Content{/block}
				</div>
			</div>
			{if !$disableFooter}
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