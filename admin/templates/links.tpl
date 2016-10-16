{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
	<style type="text/css">
		{literal}
		.__thisList, .__thisList ul{
			list-style: circle outside none;
			margin-left:10px;
		}
		.__thisList li{
			margin-bottom:5px;
			font-size: 12px;
			margin-bottom:8px;
		}
		{/literal}
	</style>
	<ul class="__thisList">
		<li>
				<h2 style="color: #333;font-size: 13px;font-weight: bold;line-height: 1.2;margin-bottom:8px">Cron</h2>
				<ul>
					<li>
						<a onclick="return confirm('Are you sure you wish to crawl the bot user content?')"  target="_blank" class="default" href="http://techberry.org/cron/botUsers.php">Bot users</a>
					</li>		
					<li>
						<a onclick="return confirm('Are you sure you with to crawl news articles?')" target="_blank" class="default" href="http://techberry.org/news/cron/crawl_news.php">News articles</a>
					</li>
				</ul>
		</li>
		<li>
			<a class="default" target="_blank" href="https://n1nlsmysqladm01.secureserver.net/grid50/331/index.php">Database</a>
		</li>
	</ul>
{/block}
{/strip}