{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
	<style type="text/css">
		#__{$textareaID}
		{literal}
		{
			width: 600px;
			margin: 0px;
			color: rgb(52, 213, 52);
			background-color: black;
			overflow-y:hidden;
		}
		#iframe_tests{
			width:600px;
			display:block;
		}
		{/literal}
	</style>
	<input type="text" id="__{$textareaID}" placeholder="  Enter a command..."></textarea>
	<iframe id="iframe_tests" src="http://techberry.org/admin/process.tests.php?token={$token}" style="height:80px"></iframe>
	<div style="width:600px">
		<a onclick="return confirm('Are you sure you wish to reset the forum?')"  href="http://techberry.org/admin/process.reset.forum.php?token={$token}"><input type="submit" value="Reset forum" class="sun-flower-button"></a>
		<a onclick="return confirm('Are you sure you wish to reset the shoutbox?')"  href="http://techberry.org/admin/process.reset.shoutbox.php?token={$token}"><input type="submit" value="Reset shoutbox" class="orange-flat-button"></a>
		<a onclick="return confirm('Are you sure you wish to delete all wall posts?')"  href="http://techberry.org/admin/process.reset.wall-posts.php?token={$token}"><input type="submit" value="Remove all wall posts" class="carrot-flat-button"></a>
		<a onclick="return confirm('Are you sure you wish to delete all scribbles?')"  href="http://techberry.org/admin/process.reset.scribbles.php?token={$token}"><input type="submit" value="Remove all scribbles" class="pumpkin-flat-button"></a>
		<a onclick="return confirm('Are you sure you wish to reset the statistics?')"  href="http://techberry.org/admin/process.reset.statistics.php?token={$token}"><input type="submit" value="Reset statistics" class="alizarin-flat-button"></a>
		<a onclick="return confirm('Are you sure you wish to restart the base privileges for user groups?')"  href="http://techberry.org/admin/process.restart.user-group-privileges.php?token={$token}"><input type="submit" value="Reinitialize user group/privilege allocation" class="pomegranate-flat-button"></a>
		<a onclick="return confirm('Are you sure you wish to delete all news articles?')"  href="http://techberry.org/admin/process.reset.news-articles.php?token={$token}"><input type="submit" value="Reset news articles" class="turquoise-flat-button"></a>
		<a onclick="return confirm('Are you sure you wish to delete all the news comments?')"  href="http://techberry.org/admin/process.reset.news-comments.php?token={$token}"><input type="submit" value="Reset news comments" class="green-sea-flat-button"></a>
		<a onclick="return confirm('Are you sure you wish to delete all the user messages?')"  href="http://techberry.org/admin/process.reset.messages.php?token={$token}"><input type="submit" value="Reset user messages" class="emerald-flat-button"></a>
	</div>
{/block}
{/strip}