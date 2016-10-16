{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div id="{#prefixGlobal#}bar" style="overflow:auto;margin-bottom:40px; !important">
		<div class="{#prefixIndex#}collumn {#prefixIndex#}ind_reg {#prefixIndex#}register">
			<h1 id="{#prefixIndex#}{#subPrefixHeader#}">Register for Free</h1>
			<h3 id="{#prefixIndex#}msg"></h3>
			<form accept-charset="UTF-8" action="process.register.php" method="post" name="login_form" class="box_form">
				<div class="label">
					<input type="text" name="email" maxlength="50" data-v="form:username" placeholder="Email"/>
				</div>
				<div class="label">
					<input type="text" name="username" maxlength="50" data-v="form:username" placeholder="Username"/>
				</div>
				<div class="label">
					<input type="password" name="password" maxlength="50" data-v="form:password" placeholder="Password"/>
				</div>
				<div class="label">
					<input type="password" name="vpassword" maxlength="50" data-v="form:verifyPassword" placeholder="Confirm Password"/>
				</div>
				<div class="label">
					{$captcha}
				</div>
				<div id="err" class="color-red" style="margin:0 0 10px 0; !important;font-size: 12px;">
					<ul id="err_l" style="float:left;margin-bottom:5px;"></ul>
				</div>
				<p class="terms">By clicking Sign Up, you agree to our <a href="http://techberry.org/help/terms/" target="_blank" rel="nofollow">Terms</a> and that you have read our <a href="http://techberry.org/help/privacy/" target="_blank" rel="nofollow">Privacy Policy</a>.</p>									
				<input type="hidden" name="token" value="{$token}"/>
				<input class="flatGreen" type="submit" style="margin-bottom:15px" value="Sign Up!" onclick="validate(this.form, this.form.password); return false"/>
			</form>
		</div>
		<div id="{#prefixIndex#}player">
			<div id="{#prefixIndex#}{#subPrefixWrap#}_snippet">
				<div id="{#prefixIndex#}snippet">
					<p>TechBerry is a site for technology enthusiasts. You can access free tools and guides or collaborate with users in the community.&nbsp;&nbsp;<a class="default" href="http://techberry.org/about/">Find out more!</a></p>
				</div>
			</div>
			<video id="lctDWnttYEE" class="sublime" width="500" height="281" data-uid="lctDWnttYEE" data-youtube-id="lctDWnttYEE" preload="none"></video>
			<!--<iframe src="//player.vimeo.com/video/73569274" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
		</div>
	</div>
	<div id="{#prefixIndex#}section">
		<div class="{#prefixIndex#}box">
			<div class="b_t p1">Services</div>
			<div class="xt">
				<p>The latest news for upcoming technology!</p>
				<p>Sandbox for web development and scripting</p>
				<p>Dedicated forums for a variety of languages</p>
			</div>
		</div>
		<div class="{#prefixIndex#}box">
			<div class="b_t p2">Our community</div>
			<div class="xt">
				<p>Unlock badges and reputation points</p>
				<p>Private and secure messaging systems</p>
				<p>Strong community of enthusiastic programmers</p>
			</div>
		</div>
		<div class="{#prefixIndex#}box">
			<div class="b_t p3">Why join?</div>
			<div class="xt">
				<p>Be involved in technology discussions</p>
				<p>Stay up-to-date with news and events</p>
				<p>No advertising or annoying pop-ups</p>
				<p>Registration is free and always will be</p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		{literal}
		function error(a, b, c) {
			document.getElementById("i_msg").innerHTML = "There has been an error with your form in the following fields:", b.style.borderColor = "rgb(170, 34, 34)", b.className = "tooltipWiki";
			var d = document.createElement("li"),
				e = document.getElementById("err_l");
			d.appendChild(document.createTextNode(a)), e.appendChild(d);
			Opentip.findElements();
			renderDynamicTips();
		}
		function validate(a, b) {
			document.getElementById("err_l").innerHTML = "", b.style.borderColor = "#bdc7d8", a.username.style.borderColor = "#bdc7d8", a.email.style.borderColor = "#bdc7d8", a.vpassword.style.borderColor = "#bdc7d8";
			var c = 0;
			if (("" == a.username.value || a.username.value.match(/^.*?(?=[\^#%&$\*:<>\?\/\{\|\}_-]).*$/) || a.username.value.length < 2 || a.username.value.length > 15) && (error("This username is invalid", a.username, "username"), c++), null == a.email.value.match(/(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) && error("This is an invalid email address", a.email, "email"), (b.value.length < 8 || b.value.length > 40) && (error("Password must be between 8 and 40 characters", a.password, null), c++), b.value != a.vpassword.value && (error("Passwords do not match!", a.vpassword, null), c++), c > 0) return !1;
			var d = document.createElement("input");
			a.appendChild(d), d.name = "p", d.type = "hidden", d.value = b.value, b.value = "", a.submit()
		}
		{/literal}
	</script>
{/block}
{/strip}