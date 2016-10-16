{extends file='/home/content/99/11499199/html/account/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}

{block name=accountContent}
	<style type="text/css">
		input{
			width:214px;
		}
	</style>
	<script type="text/javascript">
		{literal}
		function validate(){
			var i = 0;
			
			$('#verifyPassword').css("borderColor", "#9c9");
			$('#newPassword').css("borderColor", "#9c9");
			
			var newPass = $('#newPassword').val();
			var verifyPass = $('#verifyPassword').val();
			if( newPass != verifyPass ){
				$('#verifyPassword').css("borderColor", "rgb(170, 34, 34)");
				$('#verifyPassword').attr('class', "tooltipWiki");
				i++;
			}
			if(newPass.length < 8 || newPass.length > 40){
				$('#newPassword').css("borderColor", "rgb(170, 34, 34)");
				$('#newPassword').attr('class', "tooltipWiki");
				i++;			
			}
			if(i==0){
				$('#changePasswordForm').submit();
				return true;
			}else{
				Opentip.findElements();
				renderDynamicTips();	
				return false;
			}
		}
		{/literal}
	</script>
	<div class="{#prefixAccount#}info_block">
		<h3>
		<p>
			Change your password
		</p>
		</h3>
		<form id="changePasswordForm" action="http://techberry.org/account/process.password.php" method="post">
		<table class="{#prefixAccount#}edit" style="display:table">
			<tr>
				{if $errors}
				<ul style="list-style:initial;margin-top:10px;">
					{foreach from=$errors item=error}
						<li class="color-red">{$error.description}</li>
					{/foreach}
				</ul>
				{/if}
			</tr>
			<tr>
				<td>Old password</td>
				<td><input name="oldPassword" type="password"/></td>
			</tr>
			<tr>
				<td>New password</td>
				<td><input id="newPassword" data-v="form:password" name="newPassword" type="password"/></td>
			</tr>
			<tr>
				<td>Re-enter password</td>
				<td><input id="verifyPassword" data-v="form:verifyPassword" name="verifyPassword" type="password"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input onclick="validate(); return false;" class="blue" type="submit" name="save" value="Save"></td>
			</tr>
		</table>
		<input type="hidden" name="token" value="{$token}"/>
		</form>
	</div>
{/block}
