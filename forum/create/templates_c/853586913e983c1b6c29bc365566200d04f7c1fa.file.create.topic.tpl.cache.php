<?php /* Smarty version Smarty-3.1.16, created on 2014-07-24 06:17:43
         compiled from "/home/content/99/11499199/html/forum/templates/create.topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2465208715331cb18527e68-92797320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '853586913e983c1b6c29bc365566200d04f7c1fa' => 
    array (
      0 => '/home/content/99/11499199/html/forum/templates/create.topic.tpl',
      1 => 1393708214,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1406054555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2465208715331cb18527e68-92797320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5331cb18714d44_21961310',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'isLoggedIn' => 0,
    'token' => 1,
    'startOfBody' => 0,
    'loginError' => 0,
    'url' => 0,
    'username' => 1,
    'avatar' => 1,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'disableFooter' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5331cb18714d44_21961310')) {function content_5331cb18714d44_21961310($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<!--
 _________  _______   ________  ___  ___  ________  _______   ________  ________      ___    ___     
|\___   ___\\  ___ \ |\   ____\|\  \|\  \|\   __  \|\  ___ \ |\   __  \|\   __  \    |\  \  /  /|    
\|___ \  \_\ \   __/|\ \  \___|\ \  \\\  \ \  \|\ /\ \   __/|\ \  \|\  \ \  \|\  \   \ \  \/  / /    
     \ \  \ \ \  \_|/_\ \  \    \ \   __  \ \   __  \ \  \_|/_\ \   _  _\ \   _  _\   \ \    / /     
      \ \  \ \ \  \_|\ \ \  \____\ \  \ \  \ \  \|\  \ \  \_|\ \ \  \\  \\ \  \\  \|   \/  /  /      
       \ \__\ \ \_______\ \_______\ \__\ \__\ \_______\ \_______\ \__\\ _\\ \__\\ _\ __/  / /        
        \|__|  \|_______|\|_______|\|__|\|__|\|_______|\|_______|\|__|\|__|\|__|\|__|\___/ /         
                                                                                    \|___|/        
-->
<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
&username_to='+u+'"></iframe>';<?php } else { ?>window.location.href= "http://techberry.org/login.php?continue=<?php echo md5($_SERVER['PHP_SELF']);?>
";<?php }?>}function im_list(){<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$("#im_list").remove();document.cookie = 'im_list=1; expires=0; path=/';document.body.innerHTML += '<iframe id="im_list" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"></iframe>';<?php } else { ?>window.location.href ="http://techberry.org/login.php?continue=<?php echo md5($_SERVER['PHP_SELF']);?>
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
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><div id="login_error" class="error"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</div><?php } else { ?><a href="http://techberry.org/login.php?ref=1" onclick="ShowLogin(this); return false;" rel="nofollow"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Sign in</button></a><form style="visibility:hidden" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo base64_encode($_smarty_tpl->tpl_vars['url']->value);?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/process.logout.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Logout</button></a><div id="<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
_header_block"><a class="<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
_link" href="http://techberry.org/account/" style="margin-top:13px"><?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
</a><a class="<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false"><span id="notification_bell"></span></a><span style="height:25px" class="<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
_avatar"><img src="<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->tpl_vars[\'avatar\']->value;?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
_flyout" style="display:none"><div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo '/*%%SmartyNocache:2465208715331cb18527e68-92797320%%*/<?php echo $_smarty_tpl->tpl_vars[\'token\']->value;?>
/*/%%SmartyNocache:2465208715331cb18527e68-92797320%%*/';?>
" src="about:blank"></iframe></div></div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['customBanner']->value) {?><?php echo $_smarty_tpl->tpl_vars['customBanner']->value;?>
<?php }?><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>style="padding-top:20px"<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><ul><?php if ($_smarty_tpl->tpl_vars['categoryExists']->value==1) {?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list" style="margin-bottom:20px"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
title">Forums</div><a style="float:left" class="flatBlue <?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_createTopic']) {?>strikethrough<?php }?>" href="#" onclick="<?php if ($_smarty_tpl->tpl_vars['userPrivileges']->value['forum_createTopic']) {?>document.submit_new_topic_form.submit();<?php } else { ?>q(); return false;<?php }?>">Submit</a><a style="float:left" class="flatRed" href="javascript:history.back()">Cancel</a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
directory_link"><a href="http://techberry.org/forum/">Root</a> / <a href="http://techberry.org/forum/c=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoryTitleLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['categoryTitle']->value;?>
</a></div>( Creating a topic )</li><li><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
create_content"><?php if (!$_smarty_tpl->tpl_vars['userPrivileges']->value['forum_createTopic']) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
info_message">You have insufficient privileges to create a topic</div><?php }?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
new_event" style="display:none" class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
info_message"></div><form name="submit_new_topic_form" method="post" action="http://techberry.org/forum/create/submit/t=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
/"><input name="title" type="text" class="input_text" placeholder="Title"/><textarea name="content" class="textarea" placeholder="Description"></textarea><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/></form></div></li><?php } else { ?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
list" style="margin-bottom:20px"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
title">Forums</div><a style="float:left" class="flatRed" href="#">Cancel</a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
directory_link"><a href="http://techberry.org/forum/">Root</a></div></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixForum');?>
center_message">This category simply doesn't exist</li><?php }?></ul></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><script type="text/javascript">$(".shortened").shorten(),function(){$(function(){return $(".age.now").attr("datetime",new Date),$(".age.default").age(),$(".age.tiny").age({style:"tiny"}),$(".age.expired").age({expired:"expired"}),$(".age.pending").age({pending:"pending"})})}.call(this);</script><script type="text/javascript">
			$(document).ready(function () {
				$(".loadMore").click(function () {
					var t = this;
					$.get("http://techberry.org/ajax/loadMore.php?info="+$(t).attr('data-info')+"&from="+$(t).attr('data-from'), function (a){
						if(a=='false'){
							$("#contentList").append('<h2 style="text-align:center;margin-top:5px">End of the line</h2>');
							$(t).remove();
						}else{
							$(t).attr("data-from", parseInt($(t).attr("data-from"))+parseInt(20))
							$("#contentList").append(a);
						}
					})
				}), $(".pointsNeeded").click(function (a) {
					var b = $(this).attr("data-action");
					$.get("http://techberry.org/ajax/actions.php?name=" + b, function (a) {
						createAlert("log", "Requires " + a + " points"), $(this).attr("onclick", "createAlert('log','Requires " + a + " points')")
					}), a.preventDefault()
				})
			});
			function reportBug(){
				// Initialize
				$("body").htmlfeedback();
				
				// Show HTMLFeedback immediatly
				$("body").htmlfeedback("show");
				
				$.ajax({
					type: "POST",
					url: "http://techberry.org/frames/report.bug.php",
					data: {
						'token' : '{$token}'
					},
					dataType: "text",
					success: function(d){
						$(document.body).append('<div id="bug-report">'+d+'</div>');
					},
					error: function(){
						Messenger().post({
							message: "Unable to load bug report form",
							type: 'error',
							hideAfter: 10,
							hideOnNavigate: true
						});
						$("body").htmlfeedback("hide");
						$("#bug-report").remove();
					}
				});
				
				$("#bug-report").draggable();
			}
			
			function exitBugReport(){
				$("body").htmlfeedback("hide");
				$( "#bug-report" ).remove();
			}
			</script><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>Messenger().post({message: "<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
",type: '<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
',hideAfter: 10,hideOnNavigate: true});<?php } ?></script><?php }?></body><?php }} ?>
