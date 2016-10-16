{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
	<div style="text-align:center">
		<iframe style="width:90px;height:30px;margin-top:20px" src="http://techberry.org/statistics/counter.php"></iframe>
		<hr>
		<a href="http://techberry.org/statistics/"><input type="submit" value="Overview" class="sun-flower-button"></a>
		<a href="http://techberry.org/statistics/history.php"><input type="submit" value="History" class="sun-flower-button"></a>
		<a href="http://techberry.org/statistics/visitors.php"><input type="submit" value="Visitors" class="sun-flower-button"></a>
		<hr>
		<a href="https://www.google.com/analytics/web/?hl=en#report/visitors-overview/a43206333w73191827p75569048/"><input type="submit" value="Analytics" class="sun-flower-button"></a>
	</div>
{/block}
{/strip}