<?php /* Smarty version Smarty-3.1.16, created on 2014-10-16 09:16:37
         compiled from "/home/content/99/11499199/html/admin/templates/blank.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1244544355543ebdcb2ce7c8-53202750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f65c3d2833a31392b7dbf2d01a63b6cfc0d2734' => 
    array (
      0 => '/home/content/99/11499199/html/admin/templates/blank.tpl',
      1 => 1413397621,
      2 => 'file',
    ),
    '7b1a3e0977a1e7782f33c6eec28b802a3633dba0' => 
    array (
      0 => '/home/content/99/11499199/html/admin/layout.tpl',
      1 => 1413409029,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1413476190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1244544355543ebdcb2ce7c8-53202750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_543ebdcb49dc74_67701313',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'isLoggedIn' => 0,
    'token' => 0,
    'startOfBody' => 0,
    'loginError' => 0,
    'url' => 0,
    'group_id' => 0,
    'username' => 0,
    'reputation' => 0,
    'hasNotifications' => 0,
    'avatar' => 0,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'pagePadding' => 0,
    'withSidePadding' => 0,
    'disableFooter' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543ebdcb49dc74_67701313')) {function content_543ebdcb49dc74_67701313($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

	
		<script type="text/javascript">
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-43206333-1', 'techberry.org');
		  ga('send', 'pageview');
		</script>
	<script type="text/javascript">function im(u){<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$("#im").remove();document.cookie = 'im='+u+'; expires=0; path=/';document.body.innerHTML += '<iframe id="im" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';<?php } else { ?>document.cookie = 'im='+u+'; expires=0; path=/';window.location.href= "http://techberry.org/login?continue="+btoa('http://techberry.org/user/'+u);<?php }?>}function im_list(){<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$("#im_list").remove();document.cookie = 'im_list=1; expires=0; path=/';document.body.innerHTML += '<iframe id="im_list" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"></iframe>';<?php } else { ?>window.location.href ="http://techberry.org/login?continue=<?php echo base64_encode($_SERVER['PHP_SELF']);?>
";<?php }?>}function renderDynamicTips(){Opentip.styles.default = {showOn: 'mouseover',target: true,tipJoint: "bottom"};Opentip.styles.hovercard = {showOn: 'click',target: true,tipJoint: "bottom",className: "hovercard",group: "hovercards",background: "#fff",borderColor: "rgba(0, 0, 0, 0)",borderRadius: "3",shadowColor: "rgba(0, 0, 0, 0.298039)",stem: false,showEffect: 'blindDown',hideTriggers:[document,document],hideOn:['keydown','click']};$('.miniprofile').each(function(i,obj){new Opentip(obj,{ style: "hovercard", ajax:"http://techberry.org/frames/user.profile.php?username="+$(this).data('user') });});$('.tooltipWiki').each(function(i,obj){new Opentip(obj,{ style: "default", ajax:"http://techberry.org/frames/tooltip.wiki.php?explain="+$(this).data('v') });});}$(function (){renderDynamicTips();});<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>function checkAuth(){var logged = (function(){var isLogged = null;$.ajax({'async': false,'global': false,'url': 'http://techberry.org/loginStatus?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
','success': function(resp) {isLogged = (resp === "1");}});return isLogged;})();return logged;}$(document).ready(function(){var u = getCookie('im');var l = getCookie('im_list');if(u){document.body.innerHTML += '<iframe id="im" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';}if(l){$('#toTop').css('bottom','3em');$('#toTop').css('right','1em');document.body.innerHTML += '<iframe id="im_list" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';}setInterval(function(){$.ajax({type:'POST',url:'http://techberry.org/poll/updateRecentActivity.php',data:"token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"});}, 45000);});<?php }?></script>
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
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><div id="login_error" class="color-red"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</div><?php } else { ?><a href="http://techberry.org/login?ref=1" onclick="ShowLogin(this); return false;" rel="nofollow"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Sign in</button></a><form style="visibility:hidden" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo base64_encode($_smarty_tpl->tpl_vars['url']->value);?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/process.logout.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
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
_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false"><span id="notification_bell" <?php if ($_smarty_tpl->tpl_vars['hasNotifications']->value==1) {?>class="animated flash" onclick="$.get('http://techberry.org/poll/viewedNotifications.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
'); $(this).removeClass();"<?php }?>></span></a><span style="height:25px" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
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
page" style="height:100%"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
inline"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
side_bar"><ul id="<?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
side_main_list"><h3>--- Root ---</h3><a href="http://techberry.org/admin/account" id="statistics_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminAccountTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Accounts</li></a><a href="http://techberry.org/admin/maintenance" id="statistics_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminMaintenanceTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Maintenance</li></a><hr><h3>--- Admin ---</h3><a href="http://techberry.org/admin/checklist" id="home_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminCheckListTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Check List</li></a><a href="http://techberry.org/admin/users" id="users_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminUsersTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Users</li></a><a href="http://techberry.org/admin/statistics" id="statistics_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminStatisticsTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Statistics</li></a><hr><h3>--- Moderation ---</h3><a href="http://techberry.org/admin/statistics" id="statistics_link" class="side_anchor"><li class="<?php if ($_smarty_tpl->tpl_vars['adminForumTab']->value) {?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_active<?php } else { ?><?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
tab_default<?php }?>">Forum</li></a></ul></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixAdmin');?>
side_content">empty</div></div></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><script type="text/javascript">$(".shortened").shorten(),function(){$(function(){return $(".age.now").attr("datetime",new Date),$(".age.default").age(),$(".age.tiny").age({style:"tiny"}),$(".age.expired").age({expired:"expired"}),$(".age.pending").age({pending:"pending"})})}.call(this);</script><script type="text/javascript">
			$(document).ready(function() {
			    $(".loadMore").click(function() {
			        var e = this;
			        if ($(e).attr("data-first")) {
			            var t = $(e).attr("data-first");
			        } else {
			            var t = 0;
			        }
					if ($(e).attr("data-n")) {
						var n = $(e).attr("data-n");
					} else {
						var n = 1;
					}
			        $.get("http://techberry.org/ajax/loadMore.php?info=" + $(e).attr("data-info") + "&from=" + $(e).attr("data-from") + "&first=" + t, function(t) {
			            if (t == "false") {
			                $("#contentList").append('<h2 class="endOfTheLine" style="text-align:center;margin-top:5px">End of the line</h2>');
			                $(e).remove()
			            } else {
						
							history.pushState('page', "", "?page="+ (20 * parseInt(n) )-10 );
			                $(e).attr("data-from", parseInt($(e).attr("data-from")) + parseInt(20));
			                $(e).attr("data-n", +n + +1);
			                $(e).attr("data-first", 0);
			                $("#contentList").append(t)
			            }
			        })
			    }), $(".pointsNeeded").click(function(e) {
			        var t = $(this).attr("data-action");
			        $.get("http://techberry.org/ajax/actions.php?action=" + t, function(e) {
			            if (e == "-") {
			                createAlert("error", "Must be logged in to an active account"), $(this).attr("onclick", "createAlert('error','Must be logged in to an active account')")
			            } else if (e == "|") {
			                createAlert("error", "Locking is a permanent action"), $(this).attr("onclick", "createAlert('error','Locking is a permanent action')")
			            } else {
			                createAlert("error", "Requires " + e + " points"), $(this).attr("onclick", "createAlert('error','Requires " + e + " points')")
			            }
			        }), e.preventDefault()
			    })
			});
			$("body").htmlfeedback();
			function reportBug(){exitBugReport();$("body").htmlfeedback("show");$.ajax({type:"POST",url:"http://techberry.org/frames/report.bug.php",data:{token:"<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"},dataType:"text",success:function(e){$(document.body).append('<div id="bug-report">'+e+"</div>");$("#bug-report").draggable({handle:"#bug-report-handle"})},error:function(){Messenger().post({message:"Unable to load bug report form",type:"error",hideAfter:10,hideOnNavigate:true});$("body").htmlfeedback("hide");$("#bug-report").remove()}})}
			function exitBugReport(){$("body").htmlfeedback("hide");$("#bug-report").remove()}
			</script><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>Messenger().post({message: '<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
',type: '<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
',hideAfter: 10,hideOnNavigate: true,showCloseButton: true});<?php } ?></script><?php }?></body><?php }} ?>
