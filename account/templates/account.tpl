{extends file='/home/content/99/11499199/html/account/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=accountContent}
	<h3>
		<p>
			Your account
		</p>
	</h3>
	<div class="{#prefixAccount#}info_block">
		<div class="{#prefixAccount#}avatar">
			<img src="{$smarty.session.avatar}" style="float:left" height="50" width="50">
		</div>
		<div class="break" style="float:left">
			<p class="{#prefixAccount#}name">
				{$smarty.session.username}
			</p>
			<p style="margin:4px;font-weight:bold" class="important">
				{$smarty.session.group_name}
			</p>
		</div>
	</div>
	<div class="break">
		<a href="http://techberry.org/user/{$smarty.session.username}/" class="flatGrey">View profile</a>
	</div>
	<h3>
		<p>
			General settings
		</p>
	</h3>
	<div class="break">
		<a href="#profilePicture" onclick="uploadProfilePicture(); return false;" class="flatGrey">Change your Profile pic</a>
	</div>
	<h3>
		<p>
			Sign-in options
		</p>
	</h3>
	<div class="break">
		<p class="{#prefixAccount#}tip">
			You should never have to share your login credentials
		</p>
	</div>
	<div class="break">
		<a href="http://techberry.org/account/password" class="flatGrey">Change your password</a>
	</div>
	<div class="break strikethrough" data-ot="Reserved for premium members">
		<a href="#" class="flatGrey">Change your username</a>
	</div>
	<h3>
		<p>
			Extra Information
		</p>
	</h3>
	<div class="break">
		<a href="http://techberry.org/account/edit" class="flatGrey">Occupation</a>
	</div>
	<div class="break">
		<a href="http://techberry.org/account/edit" class="flatGrey">Homepage</a>
	</div>
	<div class="break">
		<a href="http://techberry.org/account/edit" class="flatGrey">Birthday</a>
	</div>
	<div class="break">
		<a href="http://techberry.org/account/edit" class="flatGrey">Gender</a>
	</div>
	<div class="break">
		<a href="http://techberry.org/account/edit" class="flatGrey">Interests</a>
	</div>
{/block}
{/strip}