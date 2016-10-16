{extends file='/home/content/99/11499199/html/account/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=accountContent}
	<div class="{#prefixAccount#}info_block">
		<h3>
		<p>
			Following {if !empty($followings)}<span style="color:#999">({$followings|@count})</span>{/if}
		</p>
		</h3>
		{if !empty($followings)}
		<table class="{#prefixAccount#}followers" style="display:table">
			{foreach from=$followings item=following}
				<tr>
					<td>
						<a href="http://techberry.org/user/{$following.username}/">
							<div class="{#prefixAccount#}avatar_list_item">
								<img class="miniprofile" src="{$following.avatar}" data-user="{$following.username}" style="float:left" height="50" width="50"/>
							</div>
						</a>
					</td>
					<td style="vertical-align:middle">
						<p style="margin-left:3px;font-weight:bolder;margin-bottom:5px">
							<a href="http://techberry.org/user/{$following.username}/" class="{#prefixAccount#}name_link">{$following.username}</a>
						</p>
						<p style="margin-left:3px;font-weight:bolder;margin-bottom:5px">
							<a href="#" onclick="im('{$following.username}'); return false;" class="{#prefixAccount#}name_link">Send message</a>
						</p>
						<div style="float:left">
							<span class="badge3"></span>
							<span class="item-multiplier">{$following.bronze_count}</span>
							<span class="badge2"></span>
							<span class="item-multiplier">{$following.silver_count}</span>
							<span class="badge1"></span>
							<span class="item-multiplier">{$following.gold_count}</span>
						</div>
					</td>
					<td title="{$following.username} is {$following.online_status}" class="{#prefixAccount#}follower_online_status {$following.online_status}"></td>
				</tr>
			{/foreach}
		</table>
		{else}
			<div style="font-weight:bold;font-size:12px;line-height:15px;margin-top:15px;">Your following list is empty</div>
		{/if}
	</div>
	<div class="{#prefixAccount#}info_block">
		<h3>
		<p>
			Followers {if !empty($followers)}<span style="color:#999">({$followers|@count})</span>{/if}
		</p>
		</h3>
		{if !empty($followers)}
		<table class="{#prefixAccount#}followers" style="display:table">
			{foreach from=$followers item=follower}
				<tr>
					<td>
						<a href="http://techberry.org/user/{$follower.username}/">
							<div class="{#prefixAccount#}avatar_list_item">
								<img class="miniprofile" src="{$follower.avatar}" data-user="{$follower.username}" style="float:left" height="50" width="50"/>
							</div>
						</a>
					</td>
					<td style="vertical-align:middle">
						<p style="margin-left:3px;font-weight:bolder;margin-bottom:5px">
							<a href="http://techberry.org/user/{$follower.username}/" class="{#prefixAccount#}name_link">{$follower.username}</a>
						</p>
						<p style="margin-left:3px;font-weight:bolder;margin-bottom:5px">
							<a href="#" onclick="im('{$follower.username}'); return false;" class="{#prefixAccount#}name_link">Send message</a>
						</p>
						<div style="float:left">
							<span class="badge3"></span>
							<span class="item-multiplier">{$follower.bronze_count}</span>
							<span class="badge2"></span>
							<span class="item-multiplier">{$follower.silver_count}</span>
							<span class="badge1"></span>
							<span class="item-multiplier">{$follower.gold_count}</span>
						</div>
					</td>
					<td title="{$follower.username} is {$follower.online_status}" class="{#prefixAccount#}follower_online_status {$follower.online_status}"></td>
				</tr>
			{/foreach}
		</table>
		{else}
			<div style="font-weight:bold;font-size:12px;line-height:15px;margin-top:15px;">Your followers list is empty</div>
		{/if}
	</div>
{/block}
{/strip}