{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div id="{#prefixGlobal#}page">
		<div id="{#prefixProducts#}results">
			<div class="{#prefixProducts#}light">
				<h2><a href="http://techberry.org/code/">ScribbleCode</a></h2>
			</div>
			<div class="{#prefixProducts#}{#subPrefixWrap#}">
				<a href="http://techberry.org/code/"><img src="http://techberry.org/images/code.png" width="32" height="32"></a>
				<p>Web development tool. Share, collaborate and build your scripts in a simple sandbox</p>
			</div>
			<div class="{#prefixProducts#}light">
				<h2><a href="http://techberry.org/news/">News</a></h2>
			</div>
			<div class="{#prefixProducts#}{#subPrefixWrap#}">
				<a href="http://techberry.org/news/"><img src="http://techberry.org/images/news.png" width="32" height="32"></a>
				<p>Crawls the latest and most reliable news for current and upcoming technology</p>
			</div>
			<div class="{#prefixProducts#}light">
				<h2><a href="http://techberry.org/chat/">Shoutbox</a></h2>
			</div>
			<div class="{#prefixProducts#}{#subPrefixWrap#}">
				<a href="http://techberry.org/chat/"><img src="http://techberry.org/images/chat.png" width="32" height="32"></a>
				<p>Talk to other users online in real-time</p>
			</div>
			<div class="{#prefixProducts#}light">
				<h2><a href="http://techberry.org/docs/#!/users.php">API</a></h2>
			</div>
			<div class="{#prefixProducts#}{#subPrefixWrap#}" style="margin-bottom:50px">
				<a href="http://techberry.org/docs/#!/users.php"><img src="http://techberry.org/images/api.png" width="32" height="32"></a>
				<p>For developers who want to manipulate and interact with our services</p>
			</div>
			<hr>
			<div class="{#prefixProducts#}unsupported">
				<h3 class="{#prefixProducts#}sub-title">Unsupported</h3>
				<p class="{#prefixProducts#}sub-text">I simply lack the time to expand and develop on these platforms</p>
				<div class="{#prefixProducts#}light" style="margin: 20px 20px 10px 20px !important;">
					<h2><a href="http://techberry.org/answers/">Questions</a></h2>
				</div>
				<div class="{#prefixProducts#}{#subPrefixWrap#}">
					<a href="http://techberry.org/answers/"><img src="http://techberry.org/images/qa.png" width="32" height="32"></a>
					<p>Ask and offer advice for any specific questions or queries.</p>
				</div>
				<div class="{#prefixProducts#}light">
					<h2><a href="http://techberry.org/tutorials/">Tutorials</a></h2>
				</div>
				<div class="{#prefixProducts#}{#subPrefixWrap#}" style="margin-bottom:50px">
					<a href="http://techberry.org/tutorials/"><img src="http://techberry.org/images/tuts.png" width="32" height="32"></a>
					<p>Detailed tutorials for a wide variety of languages and computer tricks</p>
				</div>
			</div>
		</div>
	</div>
{/block}
{/strip}