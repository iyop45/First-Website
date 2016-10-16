{extends file='/home/content/99/11499199/html/account/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}

{block name=accountContent}
	<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script type="text/javascript">
		{literal}
		$(function(){
			$('#datepicker').datepicker({
				inline: true,
				changeYear: true,
				showOtherMonths: true,
				dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
			});
		});
		{/literal}
	</script>
	<style type="text/css">
		input{
			width:215px;
		}
		.select{
			width:219px;
		}
	</style>
	<div class="{#prefixAccount#}info_block">
		<h3>
		<p>
			Account info
		</p>
		</h3>
		<form id="edit" action="http://techberry.org/account/process.edit.php" method="POST">
			<table class="{#prefixAccount#}edit" style="display:table">			
			<tr>
				<td>Occupation</td>
				<td><input name="occupation" type="text" value="{$userInfo.occupation|escape:'html'}"/></td>
			</tr>
			<tr>
				<td>Homepage</td>
				<td><input name="homepage" type="text" value="{$userInfo.homepage|escape:'html'}"/></td>
			</tr>
			<tr>
				<td>Interests</td>
				<td><input name="interests" type="text" value="{$userInfo.interests|escape:'html'}"/></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<select class="select">
						<option name="gender" selected="selected" value="{$userInfo.gender|escape:'html'|lower}">{$userInfo.gender|escape:'html'|lower}</option>
						{if $userInfo.gender|lower eq male}
							<option name="gender" value="female">female</option>
						{else}
							<option name="gender" value="male">male</option>
						{/if}
					</select>
				</td>
			</tr>
			<tr>
				<td>Birth Date</td>
				<td>
					<div id="datepicker"></div>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input class="blue" type="submit" name="save" value="Save">
				</td>
			</tr>
			<input type="hidden" name="token" value="{$token}"/>
			</table>
		</form>
	</div>
	<script type="text/javascript">
		{literal}
		(function ($, W, D) {
			var JQUERY4U = {};
			JQUERY4U.UTIL = {
				setupFormValidation: function () {
					$("#edit").validate({
						rules: {
							occupation: {
								required: false,
								minlength: 5,
								maxlength: 50
							},
							homepage: {
								required: false,
								minlength: 5,
								maxlength: 50
							},
							interests: {
								required: false,
								minlength: 5,
								maxlength: 50
							}
						},
						messages: {
							occupation: {
								minlength: "Must be at least 5 characters long",
								maxlength: "Must not exceed 50 characters"
							},
							homepage: {
								minlength: "Must be at least 5 characters long",
								maxlength: "Must not exceed 50 characters"
							},
							interests: {
								minlength: "Must be at least 5 characters long",
								maxlength: "Must not exceed 50 characters"
							}
						},
						submitHandler: function (form) {
							form.submit();
						}
					});
				}
			}

			//when the dom has loaded setup form validation rules
			$(D).ready(function ($) {
				JQUERY4U.UTIL.setupFormValidation();
			});

		})(jQuery, window, document);
		{/literal}
	</script>
{/block}
