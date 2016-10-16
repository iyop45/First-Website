<?php /* Smarty version Smarty-3.1.16, created on 2014-06-27 05:28:14
         compiled from "/home/content/99/11499199/html/templates/pages/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66061485253ad635ecd9478-43552651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef185a9fb1ae23a1e91aaaf40b850ffc9fd28466' => 
    array (
      0 => '/home/content/99/11499199/html/templates/pages/about.tpl',
      1 => 1400243889,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1403532586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66061485253ad635ecd9478-43552651',
  'function' => 
  array (
  ),
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
    'username' => 0,
    'avatar' => 0,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'disableFooter' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53ad635f08f3e3_43046493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ad635f08f3e3_43046493')) {function content_53ad635f08f3e3_43046493($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
&username_to='+u+'"></iframe>';document.body.innerHTML += '<iframe id="im_list" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';<?php } else { ?>window.location("http://techberry.org/login.php?continue=<?php echo md5($_SERVER['PHP_SELF']);?>
");<?php }?>}function renderDynamicTips(){Opentip.styles.default = {showOn: 'mouseover',target: true,tipJoint: "bottom"};Opentip.styles.hovercard = {showOn: 'mouseover',target: true,tipJoint: "bottom",className: "hovercard",group: "hovercards",background: "#fff",borderColor: "rgba(0, 0, 0, 0)",borderRadius: "3",shadowColor: "rgba(0, 0, 0, 0.298039)",stem: false,showEffect: 'blindDown',hideTriggers:[document,document],hideOn:['keydown','click']};$('.miniprofile').each(function(i,obj){new Opentip(obj,{ style: "hovercard", ajax:"http://techberry.org/frames/user.profile.php?username="+$(this).data('user') });});$('.tooltipWiki').each(function(i,obj){new Opentip(obj,{ style: "default", ajax:"http://techberry.org/frames/tooltip.wiki.php?explain="+$(this).data('v') });});}function checkAuth(){var logged = (function(){var isLogged = null;$.ajax({'async': false,'global': false,'url': 'http://techberry.org/loginStatus?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
','success': function(resp) {isLogged = (resp === "1");}});return isLogged;})();return logged;}$(function (){renderDynamicTips();});<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$(document).ready(function(){var u = getCookie('im');if(u){$('#toTop').css('bottom','3em');$('#toTop').css('right','1em');document.body.innerHTML += '<iframe id="im" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';document.body.innerHTML += '<iframe id="im_list" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
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
_head_btn blue">Logout</button></a><!--{if $privilege > 1}--><a href="http://techberry.org/admin/"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn red">Admin</button></a><!--{/if}--><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_header_block"><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/" style="margin-top:13px"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
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
<?php }?><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>style="padding-top:20px"<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><div id="<?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['prefixGlobal']->value);?>
page" style="height:100%"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
content_block"><h2 id="tour_title" class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
title">Welcome to TechBerry</h2><img id="tour_logo" class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
full_img" src="http://techberry.org/images/logo1.png"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
p"><div id="tour_description"><p><b>TechBerry</b> is a growing community website for programmmers and technology enthusiasts alike. You'll find useful social platforms to expand your knowledge whilst learning with a community with a shared passion for computing.</p><p><i>Though we offer a lot more than most other websites.</i></p></div><hr class="small"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
item"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
min_content <?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
lp"><h3>Forums</h3><p>Where you can <b>discuss anything</b> about computing, remember no question is ever too stupid to ask and there will always be someone willing to help!</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
small-image" style="float:right"><img id="tour_forum" src="http://techberry.org/images/no-available-image.png" height="240px" width="300px"/></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
item"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
min_content <?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
lp"><h3>News stories</h3><p>The most <b>up-to-date</b> news relevent to what <b>you</b> and the community like. You can comment and share on stories to affect the general vibe of the community which will in turn affect what stories are crawled next!</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
small-image"><img id="tour_news" src="images/news.png" height="240px" width="300px"/></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
item"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
min_content <?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
lp"><h3>QA Platform</h3><p>If you ever need a question urgently answered or simply want to help others that do this is the best place to look.</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
small-image" style="float:right"><img id="tour_qa" src="http://techberry.org/images/no-available-image.png" height="240px" width="300px"/></div></div><hr class="small"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
item"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
min_content <?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
rp"><h3>Sandbox</h3><p>A simple sandbox for HTML, CSS and JavaScript. You can now save and share scribbles quickly with less hassle and with <b>unlimited</b> use.</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
small-image" style="float:left"><img id="tour_scribble" src="images/sandbox.png" height="240px" width="300px"/></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
item"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
min_content <?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
rp"><h3>Tutorials</h3><p>Follow and share official and user submitted tutorials for the community. If you ever want to learn a language from scratch or adopt a new skill the tutorial section will be here.</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
small-image" style="float:left"><img id="tour_tutorials" src="images/tutorials.png" height="240px" width="300px"/></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
item"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
min_content <?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
rp"><h3>TechBerry API</h3><p>For developers who want to manipulate and interact with our services. You can query are database using a simple and understandable rest API.</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
small-image" style="float:left"><img id="tour_news" src="images/api.png" height="240px" width="300px"/></div></div><hr class="small"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
item"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
min_content <?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
lp"><h3>Uploads</h3><p>Upload and keep your files <b>safe and accessible</b> for free! Bring your photos, docs, and videos anywhere or share them with other users in the community.</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
small-image" style="float:right"><img id="tour_forum" src="http://techberry.org/images/no-available-image.png" height="240px" width="300px"/></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
item"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
min_content <?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
lp"><h3>Member interface</h3><p>Personalize and manage your account through a clean and easily accessible user interface.</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
small-image" style="float:left"><img id="tour_interface" src="images/member.png" height="240px" width="300px"/></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
item"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
min_content <?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
lp"><h3>Shoutbox</h3><p>For quick suggestions, comments or discussions there's the shoutbox. The shoutbox is the perfect place for real-time interactions with other users.</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
small-image" style="float:right"><img id="tour_qa" src="http://techberry.org/images/no-available-image.png" height="240px" width="300px"/></div></div><hr class="small"><h2 class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
title">So what are you waiting for?</h2><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixAbout');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><a id="tour_register" class="blackButton" href="http://techberry.org/register.php">Sign up now!</a></div></div></div></div></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
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
				$( "#abcde" ).dialog({
				  height: 140,
				  modal: true,
				  draggable: true,
				  buttons: {
					Ok: function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			}
			</script><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>Messenger().post({message: "<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
",type: '<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
',hideAfter: 10,hideOnNavigate: true});<?php } ?></script><?php }?><div id="abcde" style="background-color:red;z-index:5002"><p>Adding the modal overlay screen makes the dialog look more prominent because it dims out the page content.</p><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" aria-disabled="false" title="close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">close</span></button></div></body><?php }} ?>
