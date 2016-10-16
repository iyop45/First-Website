{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div id="{#prefixGlobal#}page" style="height:100%">
		<div id="{#prefixSupport#}primary">
			{$faqContent}
		</div>
	</div>
{/block}
{/strip}