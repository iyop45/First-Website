{extends file='/home/content/99/11499199/html/templates/blankLayout.tpl'}
{strip}
{block name=content}
	<div class="{#prefixBlankForms#}inner">
		<div class="{#prefixBlankForms#}form_box">
			<div class="{#prefixBlankForms#}header">
				<h2> TechBerry Login </h2>
			</div>
			<div class="{#prefixBlankForms#}form_inner">
				<div id="{#prefixBlankForms#}form_wrap">
					<h3 class="s_note s_subtitle">
						{$formMessage|default:'Sign in to your TechBerry account'}
					</h3>
					<form class="box_form" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form">
					<div class="label">
						<label for="email">
							<span class="{#prefixSupport#}note">Email</span>
						</label>
						<input type="text" name="email" maxlength="50">
					</div>
					<div class="label">
						<label for="password">
							<span class="{#prefixSupport#}note">Password</span>
						</label>
						<input type="password" name="password" maxlength="50">
					</div>
					<div id="err" class="color-red">
						<ul id="err_l">{if $loginError}Wrong password or non-existing account{/if}</ul>
					</div>
						<input type="hidden" value="{$continue}" name="continue">
						<input type="hidden" value="{$token}" name="token"/>
						<input class="flatOrange" type="submit" value="Login" onclick="validate(this.form, this.form.password)">
					</form>
				</div>
			</div>
		</div>
	</div>
{/block}
{/strip}