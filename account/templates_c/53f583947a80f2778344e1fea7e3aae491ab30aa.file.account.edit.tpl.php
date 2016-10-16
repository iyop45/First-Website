<?php /* Smarty version Smarty-3.1.16, created on 2015-01-02 04:10:49
         compiled from "/home/content/99/11499199/html/account/templates/account.edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1835295084532e2682833f54-30245968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53f583947a80f2778344e1fea7e3aae491ab30aa' => 
    array (
      0 => '/home/content/99/11499199/html/account/templates/account.edit.tpl',
      1 => 1415891502,
      2 => 'file',
    ),
    '1f9d8d781bb7135c71365e1c8ca1d3020f3aa14e' => 
    array (
      0 => '/home/content/99/11499199/html/account/layout.tpl',
      1 => 1413386456,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1835295084532e2682833f54-30245968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532e2682a70482_24083431',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'startOfBody' => 0,
    'isLoggedIn' => 0,
    'loginError' => 0,
    'url' => 0,
    'token' => 0,
    'group_id' => 0,
    'username' => 0,
    'reputation' => 0,
    'avatar' => 0,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'pagePadding' => 0,
    'withSidePadding' => 0,
    'disableFooter' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532e2682a70482_24083431')) {function content_532e2682a70482_24083431($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/head_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body><?php echo $_smarty_tpl->tpl_vars['startOfBody']->value;?>
<div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
bg"></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value==false) {?><?php if ($_smarty_tpl->tpl_vars['loginError']->value) {?><form accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo base64_encode($_smarty_tpl->tpl_vars['url']->value);?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><div id="login_error" class="color-red"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</div><?php } else { ?><a href="http://techberry.org/login?ref=1" onclick="ShowLogin(this); return false;" rel="nofollow"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Sign in</button></a><form style="visibility:hidden" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo base64_encode($_smarty_tpl->tpl_vars['url']->value);?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/process.logout.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Logout</button></a><?php if ($_smarty_tpl->tpl_vars['group_id']->value>4) {?><a href="http://techberry.org/admin/"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn red">admin</button></a><?php }?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_header_block"><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/" style="margin-top:13px"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_reputation">[ <a href="http://techberry.org/help/privileges/" data-ot="Reputation level" class="reputationLink"><?php echo $_smarty_tpl->tpl_vars['reputation']->value;?>
</a> ]</span><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false"><span id="notification_bell"></span></a><span style="height:25px" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_flyout" style="display:none"><div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" src="about:blank"></iframe></div></div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['customBanner']->value) {?><?php echo $_smarty_tpl->tpl_vars['customBanner']->value;?>
<?php }?><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>id="paddedBody" style="padding-top:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagePadding']->value)===null||$tmp==='' ? '20' : $tmp);?>
px"<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
inline"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
side_bar"><ul id="<?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
side_main_list"><a href="http://techberry.org/account/" id="account_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['accountAccountTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
tab_default<?php }?>">Account</li></a><a href="http://techberry.org/account/notifications/" id="notifications_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['accountNotificationsTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
tab_default<?php }?>">Notifications</li></a><a href="http://techberry.org/account/general/" id="general_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['accountGeneralTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
tab_default<?php }?>">General</li></a><a href="http://techberry.org/account/achievements/" id="achievements_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['accountAchievementsTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
tab_default<?php }?>">Achievements</li></a><a href="http://techberry.org/account/settings/" id="privacy_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['accountSettingsTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
tab_default<?php }?>">Settings</li></a></ul></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
side_content">
	<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script type="text/javascript">
		
		$(function(){
			$('#datepicker').datepicker({
				inline: true,
				changeYear: true,
				showOtherMonths: true,
				dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
			});
		});
		
	</script>
	<style type="text/css">
		input{
			width:215px;
		}
		.select{
			width:219px;
		}
	</style>
	<div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
info_block">
		<h3>
		<p>
			Account info
		</p>
		</h3>
		<form id="edit" action="http://techberry.org/account/process.edit.php" method="POST">
			<table class="<?php echo $_smarty_tpl->getConfigVariable('prefixAccount');?>
edit" style="display:table">			
			<tr>
				<td>Occupation</td>
				<td><input name="occupation" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userInfo']->value['occupation'], ENT_QUOTES, 'UTF-8', true);?>
"/></td>
			</tr>
			<tr>
				<td>Homepage</td>
				<td><input name="homepage" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userInfo']->value['homepage'], ENT_QUOTES, 'UTF-8', true);?>
"/></td>
			</tr>
			<tr>
				<td>Interests</td>
				<td><input name="interests" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userInfo']->value['interests'], ENT_QUOTES, 'UTF-8', true);?>
"/></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<select class="select">
						<option name="gender" selected="selected" value="<?php echo mb_strtolower(htmlspecialchars($_smarty_tpl->tpl_vars['userInfo']->value['gender'], ENT_QUOTES, 'UTF-8', true), 'UTF-8');?>
"><?php echo mb_strtolower(htmlspecialchars($_smarty_tpl->tpl_vars['userInfo']->value['gender'], ENT_QUOTES, 'UTF-8', true), 'UTF-8');?>
</option>
						<?php if (mb_strtolower($_smarty_tpl->tpl_vars['userInfo']->value['gender'], 'UTF-8')=='male') {?>
							<option name="gender" value="female">female</option>
						<?php } else { ?>
							<option name="gender" value="male">male</option>
						<?php }?>
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
			<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/>
			</table>
		</form>
	</div>
	<script type="text/javascript">
		
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
		
	</script>
</div></div></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
