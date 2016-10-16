{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
	<div id="{#prefixGlobal#}page" style="height:100%">
		<div class="{#prefixAbout#}content_block">
			<h2 class="{#prefixAbout#}title">403 - Forbidden</h2>
			<div class="{#prefixSupport#}imageWrap">
				<img class="{#prefixSupport#}imageSide" src="http://techberry.org/images/logo1.png">
				<img class="{#prefixSupport#}imageSide" src="http://techberry.org/images/grey-arrow-right.png">
				<img class="{#prefixSupport#}imageSide" src="http://techberry.org/images/lock_black.png">
			</div>
			<center>
				<p class="{#prefixAbout#}large">Unfortunately you lack the required <a href="http://techberry.org/help/privileges/" class="default">privileges</a> to view this page.</p>
				<a style="width:50px" class="flatRed" href="javascript:history.back()">Back</a>
			</center>
		</div>
	</div>
{/block}
{/strip}