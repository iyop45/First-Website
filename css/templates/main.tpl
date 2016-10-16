{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
	{include file="core/reset.tpl"}
	{include file="core/prettify.tpl"}
	{include file="core/animate.tpl"}
	{include file="core/messenger.tpl"}
	{include file="core/opentip.tpl"}
	{include file="core/datepicker.tpl"}
	{include file="core/feedback.tpl"}
	{include file="core/reveal.tpl"}
	{include file="core/modal.tpl"}
	{include file="core/common.tpl"}
	{include file="core/banner.tpl"}
	{include file="core/global.tpl"}
	{include file="core/footer.tpl"}
	{include file="core/blankForms.tpl"}
	{include file="core/sceditor.tpl"}
	{include file="core/buttons.tpl"}
	{include file="core/zebra_pagination.tpl"}
	{if $page eq 'global' or $page eq 'index'}
		{include file="pages/home.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'about'}
		{include file="pages/about.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'products'}
		{include file="pages/products.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'support'}
		{include file="pages/support.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'tutorials'}
		{include file="pages/tutorials.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'forum'}
		{include file="pages/forum.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'qa'}
		{include file="pages/qa.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'news'}
		{include file="pages/news.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'account'}
		{include file="pages/account.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'code'}
		{include file="pages/code.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'profile'}
		{include file="pages/profile.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'upload'}
		{include file="pages/upload.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'admin'}
		{include file="pages/admin.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'chat'}
		{include file="pages/chat.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'rankings'}
		{include file="pages/rankings.tpl"}
	{/if}
	{if $page eq 'global' or $page eq 'followersActivity'}
		{include file="pages/followersActivity.tpl"}
	{/if}
{/strip}