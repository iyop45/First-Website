{extends file='/home/content/99/11499199/html/templates/blankLayout.tpl'}
{strip}
{block name=content}
	<div class="inner">
		<div class="form_box">
			<div class="headerInner">
				<h2> TechBerry Registration </h2>
			</div>
			<div class="formInner">
				<div id="reg_wrap">
					<h3 id="msg" class="{#prefixSupport#}note s_subtitle">
						{$formMessage|default:'Create a new TechBerry account'}
					</h3>
					<form accept-charset="UTF-8" action="process.register.php" method="post" name="login_form" class="box_form">
						<div class="label">
							<label for="email">
								<span class="{#prefixSupport#}note">Email</span>
							</label>
							<input type="text" name="email" maxlength="50">
						</div>
						<div class="label">
							<label for="username">
								<span class="{#prefixSupport#}note">Username</span>
							</label>
							<input type="text" name="username" maxlength="50">
						</div>
						<div class="label">
							<label for="password">
								<span class="{#prefixSupport#}note">Password</span>
							</label>
							<input type="password" name="password" maxlength="50">
						</div>
						<div class="label">
							<label for="vpassword">
								<span class="{#prefixSupport#}note">Re-enter Password</span>
							</label>
							<input type="password" name="vpassword" maxlength="50">
						</div>
						<div class="label" style="height:auto !important;overflow:hidden;margin-left:25%;padding-left:15px">
							{$captcha}
						</div>
						<div class="error">
							<ul id="error_list" class="{#prefixBlankForms#}error_list">
							</ul>
						</div>
						<p class="terms">
							By clicking Sign Up, you agree to our <a href="http://techberry.org/help/terms/" target="_blank" rel="nofollow">Terms</a> and that you have read our <a href="http://techberry.org/help/privacy/" target="_blank" rel="nofollow">Privacy Policy</a>.
						</p>
						<input type="hidden" name="token" value="{$token}"/>
						<input class="flatGreen" type="submit" value="Sign Up" onclick="validate(this.form, this.form.password); return false">
					</form>
				</div>
			</div>
		</div>
	</div>
{/block}
{/strip}