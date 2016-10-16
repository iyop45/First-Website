{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div id="profileWrap">
		<div id="{#prefixProfile#}header" style="{if $profileImage}background-image:url({$profileImage});background-size: 100% 100%{else}{if $userInfo.cover}background:url('{$userInfo.cover}');background-size: 100% 100%;{else}background-color:{$randomColor}{/if}{/if}">
			{if $userInfo.is_bot eq 0 and $userInfo.id != $userid}
				<div class="{#prefixProfile#}button {#prefixProfile#}header_action tooltipWiki" data-v="general:action:sendMessage:im"  onclick="im('{$userInfo.username}'); return false;">Send message</div>
			{/if}
			{if $isLoggedIn and $userInfo.id != $userid}
				{if $isFollowing eq 1}
					<div id="{$followStringID}" class="{#prefixProfile#}button {#prefixProfile#}header_action tooltipWiki" onclick="unfollow('{$userInfo.username}','{$token}','{$followStringID}')" data-v="general:action:unfollow">Unfollow</div>
				{else}
					<div id="{$followStringID}" class="{#prefixProfile#}button {#prefixProfile#}header_action tooltipWiki" onclick="follow('{$userInfo.username}','{$token}','{$followStringID}')" data-v="general:action:follow">Follow</div>
				{/if}
			{/if}
			<div id="{#prefixProfile#}user_avatar">
				<img src="{$userInfo.avatar}" width="120">
			</div>
			<div class="{#prefixProfile#}user_head_info">
				<h1>{$userInfo.username}</h1>
				<div>
					<a href="http://techberry.org/help/groups/{$userInfo.group_name}" class="light tooltipWiki" data-v="user:group:{$userInfo.group_name}" style="font-weight:bold">{$userInfo.group_name}</a>
				</div>
				<div style="margin-top:10px">
					<span class="badge3"></span>
					<span class="item-multiplier" style="color:#fff;font-size:16px">{$badgeCount.bronze_count}</span>
					<span class="badge2"></span>
					<span class="item-multiplier" style="color:#fff;font-size:16px">{$badgeCount.silver_count}</span>
					<span class="badge1"></span>
					<span class="item-multiplier" style="color:#fff;font-size:16px">{$badgeCount.gold_count}</span>
				</div>
			</div>
			{if $userInfo.id eq $smarty.session.user_id}
				<a href="#channelArt" onclick="uploadChannelArt(); return false;" class="{#prefixProfile#}editCoverButton blue">+ Add channel art </a>
			{/if}
		</div>
		<div id="{#prefixProfile#}main_content">
			{if $userInfo.is_bot eq 0}
				<h2>
					Wall posts 
					{if $userInfo.id eq $smarty.session.user_id}
						<a href="#linkAccounts" onclick="linkAccounts(); return false;" class="{#prefixProfile#}editLinkedAccountsButton red">+ Link Accounts </a>
					{/if}
				</h2>
			{/if}
			<ul id="contentList" class="{#prefixProfile#}feed">
				{foreach from=$wallPosts item=wallPost}
					<li>
						<a href="http://techberry.org/user/{$wallPost.username}/">
							<div data-user="{$wallPost.username}" class="{#prefixProfile#}avatar_bubble_list miniprofile">
								<img class="{#prefixProfile#}avatar_image_list" src="{$wallPost.avatar}"/>
							</div>
						</a>
						<div class="{#prefixProfile#}post_content">
							{$wallPost.post}
						</div>
					</li>
				{/foreach}
			</ul>
			{if $wallPosts|@count eq 20}
				<div role="button" data-from="20" data-info="user-posts_{$userInfo.id}" class="{#prefixForum#}loadMore tooltipWiki loadMore" data-v="user:profile:loadMore">Show more</div>
			{/if}
			{if $userInfo.is_bot eq 0}
				<div class="{#prefixProfile#}comment_box" style="float:left;width:680px">
					<form action="http://techberry.org/process.wallpost.php" method="post">
						<div class="{#prefixProfile#}comment_holder">
							<textarea id="comment_textarea" onclick="{literal}$(this).animate({height:100},200){/literal}" name="wallpost" placeholder="Enter your comment..." class="{#prefixProfile#}comment_textarea">
								{if $failedWallPostContent}{$failedWallPostContent|escape:"html"}{/if}
							</textarea>
						</div>
						<input type="hidden" name="token" value="{$token}">
						<input type="hidden" name="username_to" value="{$userInfo.username}">
						<div class="{#prefixProfile#}comment_buttons">
							<input type="submit" value="Submit" class="blue">
						</div>
					</form>
				</div>
			{/if}
		</div>
		<div id="{#prefixProfile#}side_content">
			{if $userInfo.is_bot eq 0}
				<div class="{#prefixProfile#}block">
					<div class="{#prefixProfile#}block_inner">
						<h2>General info</h2>
						<ul>
							<li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="{#prefixProfile#}info_label">Gender</span><span style="font-weight:bold;font-size:12px;line-height:15px">{$userInfo.gender}</span></li>
							<li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="{#prefixProfile#}info_label">Birthday</span><span style="font-weight:bold;font-size:12px;line-height:15px">{$userInfo.birth_date}</span></li>
							<li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="{#prefixProfile#}info_label">Homepage</span><span style="font-weight:bold;font-size:12px;line-height:15px">{$userInfo.homepage}</span></li>
							<li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="{#prefixProfile#}info_label">Interests</span><span style="font-weight:bold;font-size:12px;line-height:15px">{$userInfo.interests}</span></li>
							<li style="white-space:nowrap;overflow: hidden;text-overflow:ellipsis;"><span class="{#prefixProfile#}info_label">Occupation</span><span style="font-weight:bold;font-size:12px;line-height:15px">{$userInfo.occupation}</span></li>
						</ul>
					</div>
				</div>
			{/if}
			<div class="{#prefixProfile#}block">
				<div class="{#prefixProfile#}block_inner">
					<h2>Followers</h2>
					<ul class="{#prefixProfile#}avatar_list">
						{foreach from=$followers item=follower}
							<li>
								<a href="http://techberry.org/user/{$follower.username}/">
									<img src="{$follower.avatar}" data-user="{$follower.username}" class="miniprofile" alt="Profile image for {$follower.username}" width="43" height="43">
								</a>
							</li>
						{foreachelse}
							<span style="font-weight:bold;font-size:12px;line-height:15px;margin:15px;">Followers list is empty</span>
						{/foreach}
					</ul>
				</div>
			</div>
			<div class="{#prefixProfile#}block">
				<div class="{#prefixProfile#}block_inner">
					<h2>Following</h2>
					<ul class="{#prefixProfile#}avatar_list">
						{foreach from=$following item=user}
							<li>
								<a href="http://techberry.org/user/{$user.username}/">
									<img src="{$user.avatar}" data-user="{$user.username}" class="miniprofile" alt="Profile image for {$user.username}" width="43" height="43">
								</a>
							</li>
						{foreachelse}
							<span style="font-weight:bold;font-size:12px;line-height:15px;margin:15px;">Following list is empty</span>
						{/foreach}
					</ul>
				</div>
			</div>
			{if $userInfo.is_bot eq 0}
				<div class="{#prefixProfile#}block">
					<div class="{#prefixProfile#}block_inner">
						<h2>Badges</h2>
						<ul>
							{foreach from=$badges item=badge name="badgeLoop"}
								{if $smarty.foreach.badgeLoop.iteration is odd}
									<li>
								{/if}
									<a href="http://techberry.org/help/badges/{$badge.urlName}" style="margin:5px" class="badge">
										<span class="badge{$badge.value}"></span>&nbsp;{$badge.name}</a>
								</li>
								{if $badge@iteration is div by 2}
									</li>
								{/if}
							{foreachelse}
								<span style="font-weight:bold;font-size:12px;line-height:15px">No badges unlocked</span>
							{/foreach}
						</ul>
					</div>
				</div>
			{/if}
			<div class="{#prefixProfile#}scrollAd" style="margin-top:18px">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- userpage -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:300px;height:250px"
					 data-ad-client="ca-pub-3344062671978465"
					 data-ad-slot="3035776837"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
	</div>
	{if $userInfo.is_bot eq 0}
		<script type="text/javascript">
		{literal}
		$(document).mouseup(function(event){
			var target = $("#comment_textarea");
			if(!target.is(event.target) && !$("button").is(event.target) && target.is(":visible")){
				$("#comment_textarea").animate({height:40},200);
			}else{
				return false;
			}
		});
		{/literal}
		</script>
	{/if}
	<script src="http://techberry.org/js/youtube.js"></script>
{/block}
{/strip}