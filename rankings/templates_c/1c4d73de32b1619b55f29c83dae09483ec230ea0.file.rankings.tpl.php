<?php /* Smarty version Smarty-3.1.16, created on 2014-12-16 01:27:34
         compiled from "/home/content/99/11499199/html/templates/pages/rankings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211694242853ad43bfe75e77-45836051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c4d73de32b1619b55f29c83dae09483ec230ea0' => 
    array (
      0 => '/home/content/99/11499199/html/templates/pages/rankings.tpl',
      1 => 1415835930,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211694242853ad43bfe75e77-45836051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53ad43c052a7c5_44920116',
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
<?php if ($_valid && !is_callable('content_53ad43c052a7c5_44920116')) {function content_53ad43c052a7c5_44920116($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
page" style="height:100%">
	<div id="<?php echo $_smarty_tpl->getConfigVariable('prefixRanking');?>
actions">
		<input id="<?php echo $_smarty_tpl->getConfigVariable('prefixRanking');?>
search_input" name="query" style="margin-bottom:10px;width:183px;height:28px" placeholder="search" type="text">
		<div id="<?php echo $_smarty_tpl->getConfigVariable('prefixRanking');?>
action_sort">
			<a href="http://techberry.org/rankings/random" <?php if ($_smarty_tpl->tpl_vars['activeTab']->value=='random') {?>class="here"<?php }?>>random</a>
			<a href="http://techberry.org/rankings/online" <?php if ($_smarty_tpl->tpl_vars['activeTab']->value=='online') {?>class="here"<?php }?>>online</a>
			<a href="http://techberry.org/rankings/bots" <?php if ($_smarty_tpl->tpl_vars['activeTab']->value=='bots') {?>class="here"<?php }?>>bots</a>
			<a href="http://techberry.org/rankings/topFollowed" <?php if ($_smarty_tpl->tpl_vars['activeTab']->value=='topFollowed') {?>class="here"<?php }?>>top followed</a>
			<a href="http://techberry.org/rankings/reputation" <?php if ($_smarty_tpl->tpl_vars['activeTab']->value=='reputation') {?>class="here"<?php }?>>reputation</a>
		</div>
	</div>
	<div id="ranking_table_original_content">
		<table class="<?php echo $_smarty_tpl->getConfigVariable('prefixRanking');?>
users" style="display:table">
			<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
				<tr>
					<td>
						<div class="<?php echo $_smarty_tpl->getConfigVariable('prefixRanking');?>
avatar">
							<a href="http://techberry.org/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
/" class="miniprofile" data-user="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
"  onerror="avatarLoadError(this)" style="float:left" height="50" width="50"/>
							</a>
						</div>
					</td>
					<td style="vertical-align:middle">
						<p style="margin-left:3px;font-weight:bolder;margin-bottom:5px">
							<a href="http://techberry.org/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
/" class="default"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a>
							&nbsp;(<?php echo $_smarty_tpl->tpl_vars['user']->value['reputation'];?>
)
						</p>
						<div style="float:left">
							<span class="badge3"></span>
							<span class="item-multiplier"><?php echo $_smarty_tpl->tpl_vars['user']->value['bronze_count'];?>
</span>
							<span class="badge2"></span>
							<span class="item-multiplier"><?php echo $_smarty_tpl->tpl_vars['user']->value['silver_count'];?>
</span>
							<span class="badge1"></span>
							<span class="item-multiplier"><?php echo $_smarty_tpl->tpl_vars['user']->value['gold_count'];?>
</span>
						</div>
					</td>
					<?php if ($_smarty_tpl->tpl_vars['user']->value['is_bot']) {?>
						<td class="isBot tooltipWiki <?php echo $_smarty_tpl->getConfigVariable('prefixRanking');?>
isBot" data-v="user:bot">&nbsp;bot&nbsp;</td>
					<?php } else { ?>
						<td data-ot="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
 is <?php echo $_smarty_tpl->tpl_vars['user']->value['online_status'];?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixRanking');?>
user_online_status <?php echo $_smarty_tpl->tpl_vars['user']->value['online_status'];?>
"></td>
					<?php }?>
				</tr>
			<?php } ?>
		</table>
		<?php if (count($_smarty_tpl->tpl_vars['userList']->value)==0) {?>
			<h1 class="<?php echo $_smarty_tpl->getConfigVariable('prefixRanking');?>
empty">We have returned empty!</h1>
		<?php }?>
	</div>
	<div id="ranking_table_search_results">
			
	</div>
	<script type="text/javascript">
	
		$( document ).ready(function() {
			$('#ranking_table_search_results').hide();
			$('#ranking_table_original_content').show();
			$('#r_search_input').keyup(function (){
				var search = $(this).val();
				if (search.length >= 3) {
					$.ajax({ url: "http://techberry.org/rankings/process.search.php?q="+search+"&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
", success: function(response){
							$('#ranking_table_original_content').hide();
							$('#ranking_table_search_results').empty();
							$('#ranking_table_search_results').append('<table class="r_users" style="display:table">'+response+'</table>');
							$('#ranking_table_search_results').show();
						}
					});
				}else{
					$('#ranking_table_search_results').hide();
					$('#ranking_table_original_content').show();
				}
			});
		});
	
	</script>
</div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
