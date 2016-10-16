{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{strip}
{block name=content}
	<div id="{#prefixSupport#}block" style="padding-right:40px">
		<h3 class="{#prefixSupport#}title">TechBerry contact form</h3>
		{if $sent}
			<p class="{#prefixSupport#}note" style="color: rgb(34, 170, 34);">Thank you, your message has been sent!</p>
		{else}
			{if $captchaError}
				<p class="{#prefixSupport#}note" style="color: rgb(170, 34, 34)">Invalid captcha</p>
			{else}
				<p class="{#prefixSupport#}note">Note: I will not respond to any vulgar, rude or harassing messages.</p>
				<p class="{#prefixSupport#}note">You can alternatively email me directly at : {$myEmail}<noscript style="font-style:italic">Must have javascript enabled to view</noscript></p>
				<p class="{#prefixSupport#}note">... or send me a message on <a href="skype:roy.miles3?add" class="default">skype</a></p>
			{/if}
		{/if}
		<form id="contact" action="http://techberry.org/webformmailer.php" method="post">
			<input type="hidden" name="subject" value="Form Submission"/>
			<input type="hidden" name="redirect" value="help/contact/?v=sent"/>
			<input type="text" style="margin-top:10px" name="email" placeholder="Email address (optional)"/>
			<textarea name="comments" style="margin-bottom:10px;padding:5px" class="message" placeholder="Message"></textarea>
			{$captcha}
			<input class="blue" type="submit" value="Send" style="margin-top:10px"/>
		</form>
	</div>
{/block}
{/strip}