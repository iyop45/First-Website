{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div id="{#prefixGlobal#}page" style="height:100%">
		<div class="{#prefixAbout#}content_block">
			<h2 class="{#prefixAbout#}title">Welcome to TechBerry</h2>
			<img class="{#prefixAbout#}logo" src="http://techberry.org/images/logo1.png">
			<p class="{#prefixAbout#}large"><b>TechBerry</b> is a growing community website for programmers and technology enthusiasts alike. You'll find useful social platforms to expand your knowledge whilst learning in a community with a shared passion for computing.</p>
			<p class="{#prefixAbout#}large"><i>Though we offer a lot more than most other websites.</i></p>
			
			<hr class="{#prefixAbout#}hr">
			
			<div class="{#prefixAbout#}stats_wrapper">
				<ul class="{#prefixAbout#}stats">
					<li class="{#prefixAbout#}first">
						<div class="{#prefixAbout#}number">{$numberOfMembers}</div>
						<div class="{#prefixAbout#}description">Members</div>
					</li>
					<li>
						<div class="{#prefixAbout#}number">0</div>
						<div class="{#prefixAbout#}description">Uploads</div>
					</li>
					<li>
						<div class="{#prefixAbout#}number" data-ot="Forum and wall posts ( not topics, replies etc )">{$numberOfPosts}</div>
						<div class="{#prefixAbout#}description" data-ot="Forum and wall posts ( not topics, replies etc )">Posts</div>
					</li>
					<li>
						<div class="{#prefixAbout#}number">{$numberOfTutorials}</div>
						<div class="{#prefixAbout#}description">Tutorials</div>
					</li>
					<li>
						<div class="{#prefixAbout#}number">{$numberOfComments}</div>
						<div class="{#prefixAbout#}description">Comments</div>
					</li>
					<li class="{#prefixAbout#}last">
						<div class="{#prefixAbout#}number">{$numberOfAnswers}</div>
						<div class="{#prefixAbout#}description">Answers</div>
					</li>
				</ul>
			</div>
			
			<div class="{#prefixAbout#}brief">
				<h3 class="{#prefixAbout#}h3">What makes us different?</h3>
				<p class="{#prefixAbout#}large">
					The main aspect that singles us out from other websites is that every platform available is built from scratch or with minimal contributions from external resources. This means new ideas can easily be implemented and bugs will be quickly fixed.
				</p>
			</div>
			<div class="{#prefixAbout#}info">
				<ul>
					<li class="{#prefixAbout#}info_item">
						<b class="{#prefixAbout#}label">Founded</b>
						<b class="{#prefixAbout#}value">June 2014</b>
					</li>
					<li class="{#prefixAbout#}info_item">
						<b class="{#prefixAbout#}label">Host</b>
						<b class="{#prefixAbout#}value">GoDaddy</b>
					</li>
					<li class="{#prefixAbout#}info_item">
						<b class="{#prefixAbout#}label">Contact</b>
						<b class="{#prefixAbout#}value"><a class="default" href="http://techberry.org/help/contact/">Here</a></b>
					</li>
				</ul>
			</div>
		</div>
		
		<hr class="{#prefixAbout#}hr">
		
		<div class="{#prefixAbout#}content_block">
			<h2 class="{#prefixAbout#}title">So what are you waiting for?</h2>
			<div class="{#prefixAbout#}button_wrapper">
				<a class="blackButton" href="http://techberry.org/register.php">Sign up now!</a>
			</div>
		</div>
	</div>
{/block}
{/strip}