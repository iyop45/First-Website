<?php /* Smarty version Smarty-3.1.16, created on 2014-02-01 06:04:38
         compiled from "/home/content/99/11499199/html/tuts/templates/programming/php/1.introduction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160771518352ecf0e6589fc2-30321680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7f72dc8823e3272861be16504a8b282e8d0a73e' => 
    array (
      0 => '/home/content/99/11499199/html/tuts/templates/programming/php/1.introduction.tpl',
      1 => 1391115372,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1391079845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160771518352ecf0e6589fc2-30321680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'startOfBody' => 0,
    'announcements' => 0,
    'announcement' => 0,
    'isLoggedIn' => 0,
    'userBanner' => 0,
    'url' => 0,
    'token' => 0,
    'loginError' => 0,
    'privilege' => 0,
    'username' => 0,
    'numberOfNotifications' => 0,
    'avatar' => 0,
    'n' => 0,
    'bannerLinksEnabled' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ecf0e6920e99_07049849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ecf0e6920e99_07049849')) {function content_52ecf0e6920e99_07049849($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

</head>

<body><div id="notification"><p> You've just earnt a new badge! view your <a href="http://techberry.org/account.php?v=achievements">profile</a><span onclick="var x=this.parentNode.parentNode;x.parentNode.removeChild(x)" class="removeNtf uOnHover">remove</span></p></div><?php echo $_smarty_tpl->tpl_vars['startOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['announcements']->value) {?><?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
?><div id="beta_header"><p><span class="blurb"><?php echo $_smarty_tpl->tpl_vars['announcement']->value;?>
</span><span onclick="var x=this.parentNode.parentNode;x.parentNode.removeChild(x)" class="removeNtf uOnHover">remove</span></p></div><?php } ?><?php }?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
bg"></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value==false) {?><?php if ($_smarty_tpl->tpl_vars['userBanner']->value=='loginError') {?><form accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input type="text" name="email" id="username" maxlength="50"/><input type="password" name="password" id="password" maxlength="50"/><input type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="sign_up"><span class="spr_slct">Sign Up</span></a></form><div id="login_error" class="error"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</div><?php } else { ?><a href="http://techberry.org/login.php?ref=1" onclick="ShowLogin(this); return false;" rel="nofollow"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Sign in</button></a><form style="visibility:hidden" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input type="text" name="email" id="username" maxlength="50"/><input type="password" name="password" id="password" maxlength="50"/><input type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="sign_up"><span class="spr_slct">Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/logout.php"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Logout</button></a><?php if ($_smarty_tpl->tpl_vars['privilege']->value>1) {?><a href="http://techberry.org/admin/"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn red">Admin</button></a><?php }?><div id="me"><a class="anchor" href="http://techberry.org/account.php" style="margin-top:13px"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><a class="anchor" href="http://techberry.org/account.php?v=notifications" onclick="notifications(); return false"><span class="indent notif_box"><span style="position:relative;top:3px"><?php echo $_smarty_tpl->tpl_vars['numberOfNotifications']->value;?>
</span></span></a><span style="height:25px" class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" width="25px" height="25px"></span><div id="notifications" class="flyout" style="display:none"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['numberOfNotifications']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>0) {?><?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userBanner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['n']->value[2]==1) {?><div class="noticeBox"><div class="noticeText"><a href="#" class="siteLinkFavicon" style="margin-top:0px;"><img src="http://techberry.org/images/message.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px"><a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="script_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
:</a> <?php echo $_smarty_tpl->tpl_vars['n']->value[1];?>
 </div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['n']->value[2]==2) {?><div class="noticeBox"><div class="noticeText"><a href="#" class="siteLinkFavicon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Sent request to: <a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="script_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
</a></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['n']->value[2]==3) {?><div class="noticeBox"><div class="noticeText"><a href="#" class="siteLinkFavicon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Contact request: <a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="script_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
</a></div></div></div><?php }?><?php } ?><?php } else { ?><div id="">No new notifications</div><?php }?><div class="arr"></div></div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><?php if ($_smarty_tpl->tpl_vars['bannerLinksEnabled']->value==true) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><div style="<?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>padding-top:20px<?php }?>"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
overlay2" onclick="close_bar(this);" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap<?php }?>"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
fullBlock"><div class="<?php echo $_smarty_tpl->getConfigVariable('preficAbout');?>
content"><div id="<?php echo $_smarty_tpl->getConfigVariable('preficAbout');?>
block"><h4 class="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
title">PHP: Introduction (Basics) pt.1</h4><p>This is the first installment for my PHP tutorial series. If you're a beginner at programming or scripting (or neither) this is the right place to start. I will try to be as clear as I can with my explanations and avoid waffle and jargon in order to keep on point. The series will run at a steady and understandable rate so no viewers are at a disadvantage from the next.</p><br><h4 class="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
note <?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
subtitle">Installation</h4><p>This only really applies for if you plan on running the php scripts on your local machine because if you're using a hosted server the chances are php is already installed. If that is the case you can of course skip this part. Well, to begin you need to have an environment where you can host web-pages on your computer locally. To do so it's recommended that you download <a class="script_link" href="http://sourceforge.net/projects/xampp/" target="_blank" rel="nofollow">xampp</a>, follow the installation and execute the main application. If all is well you should see the xampp control panel, for now click 'Start' on the apache module.</p><div class="<?php echo $_smarty_tpl->getConfigVariable('preficAbout');?>
img"><img src="http://techberry.org/tuts/images/xampp.png"></div><p>The apache module must be started in order for you to run on localhost (I'll explain in a bit). To write php scripts you can use <b>any</b> text editor. I would personally recommend <a class="script_link" href="http://notepad-plus-plus.org/" target="_blank" rel="nofollow">Notepad++</a> but that is just down to my personal preference. To start with we're going to check if php is working properly, to do so firstly make a folder (for example 'test') inside the htdocs folder of which would typically be found at C:\xampp\. Copy the following to a file named 'example.php' (the extension is important) and save it inside your newly made test folder.</p><br><pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'Hello&nbsp;World!'</span><span style="color: #007700">;&nbsp;<br></span><span style="color: #0000BB">?&gt;</span></span></code></pre><br><p>In the address bar enter 'http://localhost/test/example.php' and if all works you should see <b>Hello World!</b> on the screen, if you're seeing anything else something has gone wrong and you may need to check apache is running and whether or not xampp has installed correctly. Notice how we used 'localhost' rather than C://xampp/, this is because we're treating it on a server rather than as a raw file. So remember always use 'localhost' (or 127.0.0.1) as the base directory of htdocs.</p><br><h4 class="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
note <?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
subtitle">Declaring a php script</h4><p>All php code must be within an opening and closing php tag. Any outside of these tags will not be seen by the php interpreter and so will not run; in fact typically speaking it will just be interpreted by the browser as html. Unlike html, you can't embed php tags within others however you can have them throughout a page.'</p><br><pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//Any&nbsp;lot&nbsp;of&nbsp;php&nbsp;code&nbsp;<br></span><span style="color: #0000BB">?&gt;</span>&nbsp;<br>&lt;!--&nbsp;This&nbsp;is&nbsp;interpreted&nbsp;as&nbsp;html,&nbsp;not&nbsp;php&nbsp;--&gt;<br><span style="color: #0000BB">&lt;?&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//Shorthand&nbsp;way&nbsp;of&nbsp;opening&nbsp;and&nbsp;closing&nbsp;php&nbsp;tags<br></span><span style="color: #0000BB">?&gt;</span></span></code></pre><br><p>You can open and close php tags as much as you like although it's of course good practice to not overuse this idea. From the script demonstrated it brings me nicely onto the next concept of which is <b>comments</b>.</p><h4 class="<?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
note <?php echo $_smarty_tpl->getConfigVariable('prefixSupport');?>
subtitle">Comments</h4><p></p><p>Notice how I used the double forward slashes. These are <b>comments</b> and like code outside of the php tags are not run through the interpreter. You're not obligated to use comments and they don't have any specific purpose, they're just useful for debugging and passing on potentially confusing and/or complicated scripts for others look at or work on. For example you could use a comment to describe the purpose of each line or function in the script and if that purpose isn't met you will know where the problem is.</p><br><p>The double forward slashes are only commenting text on the right of them <b>and</b> on the same line, if you need your comment to span across multiple lines you would use '/*' and '*/' as demonstrated here:</p><br><pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//This&nbsp;is&nbsp;very&nbsp;inneficient&nbsp;for&nbsp;long&nbsp;comments<br>&nbsp;&nbsp;&nbsp;&nbsp;//as&nbsp;you&nbsp;have&nbsp;to&nbsp;use&nbsp;the&nbsp;doubleslahes<br>&nbsp;&nbsp;&nbsp;&nbsp;//for&nbsp;each&nbsp;new&nbsp;line&nbsp;of&nbsp;comments<br><br>/*<br>&nbsp;&nbsp;&nbsp;&nbsp;But&nbsp;this&nbsp;is&nbsp;perfect-<br>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;I&nbsp;can&nbsp;run&nbsp;the&nbsp;comment&nbsp;accross&nbsp;multiple&nbsp;lines<br>&nbsp;&nbsp;&nbsp;&nbsp;very&nbsp;easily<br>*/<br></span><span style="color: #0000BB">?&gt;</span></span></code></pre><br><p>The first examples are known as <b>comment lines</b> and the second is a <b>comment block</b>, you'll find yourself using them a lot or not enough but either way they're a vital concept to have the grasp of.</p><br><br><div class="chapter"><div class="next"><a href="http://techberry.org/tuts/PHP/Output/">Next Chapter »</a></div></div></div><div id="<?php echo $_smarty_tpl->getConfigVariable('preficAbout');?>
side"><div class="tut_sn"><h4 class="w_m">About</h4><p>These tutorials are based around computing and programming. If they're of any use to you I would love to hear about it.</p></div><br><br><div class="tut_sn"><h4 class="w_s">Quick links</h4><ul><li>Introduction</li><li><a class="script_link" href="http://techberry.org/tuts/PHP/Output/">Outputting text</a></li><li><a class="script_link" href="http://techberry.org/tuts/PHP/Variables/">Variables</a></li></ul></div></div></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>alertify.log("<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
","<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
",0);<?php } ?></script><?php }?></body>
<?php }} ?>
