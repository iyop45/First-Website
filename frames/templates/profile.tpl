{extends file='/home/content/99/11499199/html/templates/frame.tpl'}
{strip}
{block name=content}
	{if $errorMessage}
		{$errorMessage}
	{else}
		<div class="{#prefixHoverCard#}body" {if $isCurrentUser}style="height:85px !important"{/if}>
			<div class="{#prefixHoverCard#}banner" style="{if $profileImage}background-image:url({$profileImage});background-size: 100% 100%;{else}{if $userInfo.cover}background:url('{$userInfo.cover}');background-size: 100% 100%;{else}background-color:{$randomColor}{/if}{/if}">
				<img class="{#prefixHoverCard#}avatar" src="{$userInfo.avatar}" width="40px" height="40px"/>
			</div>
			<div class="{#prefixHoverCard#}info">
				<h1>{$userInfo.username}</h1>
				<div>
					<span class="{#prefixHoverCard#}group" style="font-weight:bold;font-size:14px">{$userInfo.group_name}</span>
				</div>
				<div style="margin-top:8px">
					<span class="badge3"></span>
					<span class="item-multiplier" style="color:#fff">{$badgeCount.bronze_count}</span>
					<span class="badge2"></span>
					<span class="item-multiplier" style="color:#fff">{$badgeCount.silver_count}</span>
					<span class="badge1"></span>
					<span class="item-multiplier" style="color:#fff">{$badgeCount.gold_count}</span>
				</div>
			</div>
			{if $isCurrentUser}
				<div class="{#prefixHoverCard#}sub_bar">
					<div class="{#prefixHoverCard#}button {#prefixHoverCard#}action" onclick="window.top.location.href = 'http://techberry.org/account';">View account</div>
				</div>
			{else}
				<div class="{#prefixHoverCard#}sub_bar">
					{if $userInfo.is_bot eq 0}
						<div class="{#prefixHoverCard#}button {#prefixHoverCard#}action" onclick="{if $isLoggedIn}parent.im('{$userInfo.username}'); return false;{else}window.top.location.href = 'http://techberry.org/login.php?continue={$userPage_baseEncode}'{/if}">Send message</div>
					{/if}
					{if $isFollowing eq 1}
						<div id="{$followStringID}" onclick="unfollow('{$userInfo.username}','{$token}','{$followStringID}')" class="{#prefixHoverCard#}button {#prefixHoverCard#}action">UnFollow</div>
					{else}
						<div id="{$followStringID}" onclick="follow('{$userInfo.username}','{$token}','{$followStringID}')" class="{#prefixHoverCard#}button {#prefixHoverCard#}action">Follow</div>
					{/if}
				</div>
			{/if}
		</div>
	{/if}
{/block}
{/strip}