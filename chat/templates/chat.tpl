{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div id="{#prefixChat#}box">
		<div id="{#prefixChat#}recent_posts">
			<ul id="shout">
				{if $shouts}
					{foreach from=$shouts item=shout}
						<li>
							<div id="msg_{$shout.id}" class="{#prefixChat#}message">
								<a href="http://techberry.org/user/{$shout.username}/" class="miniprofile" data-user="{$shout.username}">
									<span class="avatar {#prefixChat#}avatar">
										<img title="{$shout.username}" src="{$shout.avatar}" width="25px" height="25px">
									</span>
								</a>
								{$shout.message}
							</div>
						</li>
					{/foreach}
				{else}
					<li><div class="{#prefixChat#}message">The chatbox is empty</div></li>
				{/if}
			</ul>
			<p class="{#prefixChat#}garbageCollection">Garbage collection</p>
		</div>
		{if $onlineUsers}
			<div id="{#prefixChat#}active_users_list">
				<p class="{#prefixChat#}side_note">Members in chat</p>
				<div id="__onlineUsers">
					{foreach from=$onlineUsers item=user}
						<a id="user__{$user.id}" href="http://techberry.org/user/{$user.username}/" class="miniprofile" data-user="{$user.username}">
							<img src="{$user.avatar}" style="float:left" height="32" width="32"/>
						</a>
					{/foreach}
				</div>
			</div>
		{else}
			<div id="{#prefixChat#}active_users_list">
				<p class="{#prefixChat#}side_note">Members in chat</p>
				<p class="{#prefixChat#}side_note" style="color: #666">This should not have happened</p>
			</div>
		{/if}
	</div>
	<div class="{#prefixChat#}form">
		<form id="shoutform" method="post" action="http://techberry.org/process.shout.php">
			<img height="80" width="80" title="{$username}" alt="{$username}" src="{$avatar}">
			<textarea id="shoutmsg" name="shoutmsg"></textarea>
			<input type="submit"value="Submit" class="{#prefixChat#}submit"/>
			<div class="{#prefixGlobal#}logo"></div>
			<input type="hidden" name="token" value="{$token}" onclick="return shout()"/>
		</form>
	</div>
{/block}
{/strip}