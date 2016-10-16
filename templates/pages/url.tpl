{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div id="{#prefixGlobal#}page" style="height:100%">
		<div class="{#prefixAbout#}content_block">
			<h2 class="{#prefixAbout#}title">External link</h2>
			<div class="{#prefixSupport#}imageWrap">
				<img class="{#prefixSupport#}imageSide" src="http://techberry.org/images/logo1.png">
				<img class="{#prefixSupport#}imageSide" src="http://techberry.org/images/grey-arrow-right.png">
				<img class="{#prefixSupport#}imageSide" src="http://techberry.org/images/internet-safari-icon.png">
			</div>
			<p class="{#prefixAbout#}large">It should be noted that although we do try and moderate external links we still have no control over third party content. If you're uncertain please review the reports for this link: <a target="_blank" href="http://scanurl.net/?u={$urlInfo.scanUrl}&uesb=Check+This+URL#results" class="default">here</a></p>
			{if $urlInfo.isBlackListed}
				<p class="{#prefixAbout#}large color-red">This link has been recognised for violating our terms of service.</p>
				<div class="{#prefixSupport#}urlActions">
					<a href="#" class="flatLocked">Locked</a>
			{else}
				<div class="{#prefixSupport#}urlActions">
					<a style="float:left" class="flatBlue" href="{$urlInfo.url}">Follow</a>
			{/if}
					<a style="float:left" class="flatRed" href="javascript:history.back()">Cancel</a>
				</div>
		</div>
	</div>
{/block}
{/strip}