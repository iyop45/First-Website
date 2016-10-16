{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<style type="text/css">
	{literal}
	#body{
		background:#0000aa;
		color:#ffffff;
		font-family:courier;
		font-size:12pt;
		text-align:center;
		padding:40px;
	}
	blink{
		color:yellow;
	}
	.neg {
		background:#fff;
		color:#0000aa;
		padding:2px 8px;
		font-weight:bold;
	}
	.p_404 {
		margin:30px 100px;
		text-align:left;
	}
	a,a:hover {
		color:inherit;
		font:inherit;
	}
	.menu {
		text-align:center;
		margin-top:50px;
	}
	#matrix{
		text-align:center;
	}
	table{
		margin: 0 auto;
	}
	#g_f_w{
		margin:0 !important;
	}
	.rel_link:hover{
		text-decoration:underline;
	}
	{/literal}
	</style>
	<div id="{#prefixGlobal#}page" style="height:100%">
		<div id="body">
			<p class="p_404"><span class="neg">ERROR 404</span></p>
			
			<p class="p_404">The page you're looking for does not exist. You can wait <br />
			and see if it becomes available again, or you can restart your computer.</p>
			
			<p class="p_404">* Send us an e-mail to notify us of this issue<br />
			* Press CTRL+ALT+DEL to restart your computer. You will<br />
			&nbsp; lose unsaved information in any programs that are running.</p>
			
			<p class="p_404">Press any link to continue <blink>_</blink></p>
			
			<div class="menu">
				<a class="rel_link" href="http://techberry.org/">index</a>
					|
				<a class="rel_link" href="http://techberry.org/help/contact/">contact</a>
				{if $isLoggedIn and !$noBypassLink}|<a class="rel_link" href="http://techberry.org/" onclick="bypass(); return false">bypass</a>{/if}
			</div>
		</div>
	</div>
{/block}
{/strip}