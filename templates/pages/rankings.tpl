{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}

{block name=content}
	<div id="{#prefixRanking#}actions">
		<input id="{#prefixRanking#}search_input" name="query" style="margin-bottom:10px;width:183px;height:28px" placeholder="search" type="text">
		<div id="{#prefixRanking#}action_sort">
			<a href="http://techberry.org/rankings/random" {if $activeTab eq 'random'}class="here"{/if}>random</a>
			<a href="http://techberry.org/rankings/online" {if $activeTab eq 'online'}class="here"{/if}>online</a>
			<a href="http://techberry.org/rankings/bots" {if $activeTab eq 'bots'}class="here"{/if}>bots</a>
			<a href="http://techberry.org/rankings/topFollowed" {if $activeTab eq 'topFollowed'}class="here"{/if}>top followed</a>
			<a href="http://techberry.org/rankings/reputation" {if $activeTab eq 'reputation'}class="here"{/if}>reputation</a>
		</div>
	</div>
	<div id="ranking_table_original_content">
		<table class="{#prefixRanking#}users" style="display:table">
			{foreach from=$userList item=user}
				<tr>
					<td>
						<div class="{#prefixRanking#}avatar">
							<a href="http://techberry.org/user/{$user.username}/" class="miniprofile" data-user="{$user.username}">
								<img src="{$user.avatar}"  onerror="avatarLoadError(this)" style="float:left" height="50" width="50"/>
							</a>
						</div>
					</td>
					<td style="vertical-align:middle">
						<p style="margin-left:3px;font-weight:bolder;margin-bottom:5px">
							<a href="http://techberry.org/user/{$user.username}/" class="default">{$user.username}</a>
							&nbsp;({$user.reputation})
						</p>
						<div style="float:left">
							<span class="badge3"></span>
							<span class="item-multiplier">{$user.bronze_count}</span>
							<span class="badge2"></span>
							<span class="item-multiplier">{$user.silver_count}</span>
							<span class="badge1"></span>
							<span class="item-multiplier">{$user.gold_count}</span>
						</div>
					</td>
					{if $user.is_bot}
						<td class="isBot tooltipWiki {#prefixRanking#}isBot" data-v="user:bot">&nbsp;bot&nbsp;</td>
					{else}
						<td data-ot="{$user.username} is {$user.online_status}" class="{#prefixRanking#}user_online_status {$user.online_status}"></td>
					{/if}
				</tr>
			{/foreach}
		</table>
		{if $userList|@count eq 0}
			<h1 class="{#prefixRanking#}empty">We have returned empty!</h1>
		{/if}
	</div>
	<div id="ranking_table_search_results">
			
	</div>
	<script type="text/javascript">
	{literal}
		$( document ).ready(function() {
			$('#ranking_table_search_results').hide();
			$('#ranking_table_original_content').show();
			$('#r_search_input').keyup(function (){
				var search = $(this).val();
				if (search.length >= 3) {
					$.ajax({ url: "http://techberry.org/rankings/process.search.php?q="+search+"&token={/literal}{$token}{literal}", success: function(response){
							$('#ranking_table_original_content').hide();
							$('#ranking_table_search_results').empty();
							$('#ranking_table_search_results').append('<table class="r_users" style="display:table">'+response+'</table>');
							$('#ranking_table_search_results').show();
						}
					});
				}else{
					$('#ranking_table_search_results').hide();
					$('#ranking_table_original_content').show();
				}
			});
		});
	{/literal}
	</script>
{/block}
