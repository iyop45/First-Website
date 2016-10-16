{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div class="{#prefixNews#}news_resets">
		<div class="{#prefixNews#}main_article">
			<div class="{#prefixNews#}article_actions" align="left">
				<span {if $isLoggedIn}onclick="likeNewsArticle();"{/if} class="{#prefixNews#}love" align="left"> {$mainArticle.votes} </span> 
				<p class="{#prefixNews#}article_date">{$mainArticle.date}</p>
			</div>
			<form id="likeNewsArticle" style="display:none" method="POST" action="http://techberry.org/news/process.like.php">
				<input type="hidden" name="token" value="{$token}"/>
				<input type="hidden" name="newsID" value="{$mainArticle.id}"/>
			</form>
			<div class="{#prefixNews#}main_article_image">
				<img style="position:absolute;margin:20px 0 0 20px;min-height:160px;min-width:300px;border:1px solid #303030" src="{$mainArticle.image}">
				<img width="720" height="427.3" src="http://techberry.org/news/binary.jpg">
				<div class="{#prefixNews#}main_article_info">
					<div class="{#prefixNews#}main_article_title">
						<h3>
							<a href="{$mainArticle.reference}">
								{$mainArticle.title}
							</a>
						</h3>
					</div>
					<div class="{#prefixNews#}main_article_snippet">
						{$mainArticle.content}...
					</div>
					<a href="{$mainArticle.reference}" style="margin-right:5px">
						<div class="{#prefixNews#}main_article_readmore">
							<span class="{#prefixNews#}plus">&nbsp;</span>
							<span class="{#prefixNews#}main_bg">
								<h5>
									Read more
								</h5>
							</span>
						</div>
					</a>
					<span class='st_sharethis_large' displayText='ShareThis'></span>
					<span class='st_facebook_large' displayText='Facebook'></span>
					<span class='st_twitter_large' displayText='Tweet'></span>
					<span class='st_googleplus_large' displayText='Google +'></span>
					<span class='st_linkedin_large' displayText='LinkedIn'></span>
					<span class='st_pinterest_large' displayText='Pinterest'></span>	
				</div>
			</div>
		</div>
		
		<div class="{#prefixGlobal#}comment_box" style="float:left;width:720px;">
			<form id="news_comment" action="http://techberry.org/news/comment/n={$mainArticle.id}/" method="POST">
				<div class="{#prefixGlobal#}comment_holder">
					<textarea id="comment_textarea" name="comment" onclick="{literal}$(this).animate({height:100},200){/literal}" placeholder="Enter your comment..." class="{#prefixGlobal#}comment_textarea"></textarea>
				</div>
				<input id="parent_id" type="hidden" name="parent_id" value="0"/>
				<input type="hidden" name="token" value="{$token}"/>
				<div class="{#prefixGlobal#}comment_buttons">
					<input type="submit" value="Submit" class="blue"/>
				</div>
			</form>
		</div>
		<div class="{#prefixGlobal#}comments" style="float:left;width:720px;">
			<div id="contentList">
				{$comments}
			</div>
			{if false}
				<!--<div role="button" data-from="11" data-info="news-replies" class="{#prefixNews#}loadMore tooltipWiki loadMore" data-v="news:comments:loadMore">Show more</div>-->
			{/if}
		</div>	
		
		<div class="{#prefixNews#}side_bar">
			<div class="{#prefixNews#}side_bar_container">
				<ul>
					<input id="g_search_input" name="query" style="margin-bottom:10px" placeholder="search" type="text">
					<div id="original_side_content">
						{foreach from=$sideArticles item=sideArticle}
							<li>
								<div class="{#prefixNews#}thumbnail">
									<img width="70" height="70" src="{$sideArticle.image}">
								</div>
								<div class="{#prefixNews#}right">
									<h5>
										<a href="http://techberry.org/news/n={$sideArticle.id}/{$sideArticle.titleLink}/">
											{$sideArticle.title|truncate:30:"...":true}
										</a>
									</h5>
								</div>
								<div class="{#prefixNews#}popularity">
									<div style="width:{if $sideArticle.votes > 50}100%{else}{math equation="x + y" x=$sideArticle.votes y=50}%{/if}"></div>
								</div>
							</li>
						{/foreach}
						{if $recentArticles}
							<hr>
							{foreach from=$recentArticles item=recentArticle}
								<li>
									<div class="{#prefixNews#}thumbnail">
										<img width="70" height="70" src="{$recentArticle.image}">
									</div>
									<div class="{#prefixNews#}right">
										<h5>
											<a href="http://techberry.org/news/n={$recentArticle.id}/{$recentArticle.titleLink}/">
												{$recentArticle.title|truncate:30:"...":true}
											</a>
										</h5>
									</div>
									<div class="{#prefixNews#}popularity" data-ot="Popularity">
										<div style="width:80%"></div>
									</div>
								</li>
							{/foreach}
						{/if}
					</div>
					<div id="search_side_content" class="{#prefixNews#}side_bar_container"></div>
				</ul>
			</div>
		</div>
	</div>
		<script type="text/javascript">
		{literal}
		if(window.location.hash){
			 var id = window.location.hash.replace(/#/g , "");
			$('html, body').animate({
				scrollTop: $("#comment_"+id).offset().top-50
			}, 2000);
		}
		$(document).mouseup(function(event){
			var target = $("#comment_textarea");
			if(!target.is(event.target) && !$("button").is(event.target) && target.is(":visible")){
				$("#comment_textarea").animate({height:40},200);
			}else{
				return false;
			}
		});
		
		$( document ).ready(function() {
			$('#search_side_content').hide();
			$('#original_side_content').show();
			$('#g_search_input').keyup(function (){
				var search = $(this).val();
				if (search.length >= 3) {
					$.ajax({ url: "http://techberry.org/news/process.search.php?q="+search+"&token={/literal}{$token}{literal}", success: function(response){
							$('#original_side_content').hide();
							$('#search_side_content').empty();
							$('#search_side_content').append(response);
							$('#search_side_content').show();
						}
					});
				}else{
					$('#search_side_content').hide();
					$('#original_side_content').show();
				}
			});
		});		

		{/literal}
		</script>
{/block}
{/strip}