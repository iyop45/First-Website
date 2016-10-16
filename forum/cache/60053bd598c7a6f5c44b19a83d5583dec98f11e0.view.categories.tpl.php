<?php /*%%SmartyHeaderCode:92026182053296044488f63-07474484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60053bd598c7a6f5c44b19a83d5583dec98f11e0' => 
    array (
      0 => '/home/content/99/11499199/html/forum/templates/view.categories.tpl',
      1 => 1395827982,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1396729675,
      2 => 'file',
    ),
    '75b19db522df5c605312c386535bfde906373629' => 
    array (
      0 => '/home/content/99/11499199/html/templates/config/css.prefix.conf',
      1 => 1392754104,
      2 => 'file',
    ),
    '0b5dbed8cad242fd15e23598935aea94b2c20f6b' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/header.tpl',
      1 => 1394318517,
      2 => 'file',
    ),
    'ac453fae009a29cf1a7e9aace4c394d86fa3be19' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/banner.tpl',
      1 => 1392568510,
      2 => 'file',
    ),
    'e16a1ee9d5bae846a905efbcaa4e8c0f243f7b2e' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/footer.tpl',
      1 => 1394319611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92026182053296044488f63-07474484',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53407a7b8d90d1_02137615',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'token' => 1,
    'startOfBody' => 0,
    'announcements' => 0,
    'announcement' => 0,
    'newBadgeMessage' => 0,
    'isLoggedIn' => 0,
    'userBanner' => 1,
    'url' => 0,
    'loginError' => 0,
    'ROOTURL' => 0,
    'privilege' => 0,
    'username' => 1,
    'avatar' => 1,
    'numberOfNotifications' => 1,
    'n' => 1,
    'bannerLinksEnabled' => 0,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53407a7b8d90d1_02137615')) {function content_53407a7b8d90d1_02137615($_smarty_tpl) {?><!doctype html>
<head>
	
	<meta http-equiv="Content-Type" content="<?php echo $_smarty_tpl->tpl_vars['contentType']->value;?>
; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" /><title><?php ob_start();?><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['title']->value);?>
<?php $_tmp2=ob_get_clean();?><?php echo (($tmp = @$_tmp2)===null||$tmp==='' ? "TechBerry" : $tmp);?>
 - TechBerry</title><link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon"/><meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metaDescription']->value;?>
"><script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><script src="http://techberry.org/js/main.js"></script><script type="text/javascript">
function readCookie(a){a+="=";for(var b=document.cookie.split(/;\s*/),c=b.length-1;c>=0;c--)if(!b[c].indexOf(a))return b[c].replace(a,"")}1==readCookie("invert")&&function(){var a="html {-webkit-filter: invert(100%);-moz-filter: invert(100%);-o-filter: invert(100%);-ms-filter: invert(100%); }",b=document.getElementsByTagName("head")[0],c=document.createElement("style");if(window.counter){if(window.counter++,0==window.counter%2)var a="html {-webkit-filter: invert(0%); -moz-filter:    invert(0%); -o-filter: invert(0%); -ms-filter: invert(0%); }"}else window.counter=1;c.type="text/css",c.styleSheet?c.styleSheet.cssText=a:c.appendChild(document.createTextNode(a)),b.appendChild(c)}();
</script><?php if ($_smarty_tpl->tpl_vars['inlineCSS']->value) {?><style type="text/css"><?php echo $_smarty_tpl->tpl_vars['inlineCSS']->value;?>
</style>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javaScriptLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"></script>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cssLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" type="text/css" media="all">
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['inlineScript']->value) {?>
	<script type="text/javascript">
		<?php echo $_smarty_tpl->tpl_vars['inlineScript']->value;?>

	</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?>
	
	<script type="text/javascript">
$(document).ready(function(){$("#toTop").hide();$(function(){$(window).scroll(function(){if($(this).scrollTop()>100)$("#toTop").fadeIn();else $("#toTop").fadeOut()});$("#toTop").click(function(){$("body,html").animate({scrollTop:0},800);return false})})});
	</script>
	
<?php }?>
<link rel="stylesheet" href="http://techberry.org/css/<?php echo $_smarty_tpl->tpl_vars['CSSPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['CSSTheme']->value;?>
/main.css" type="text/css" media="all">


	
	<script type="text/javascript">
		function im(u){
			$("#im").remove();
			document.body.innerHTML += '<iframe id="im" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=9001decbe9d7d37c4e216622f523ec41&username_to='+u+'"></iframe>';
		}
		$(function(){
			Opentip.styles.miniprofile = {
				showOn: 'mouseover',
				target: true,
				tipJoint: "bottom"
			};
			$('.miniprofile').each(function(i,obj){
				new Opentip(obj,{ style: "miniprofile", ajax:"http://techberry.org/frames/user.profile.php?username="+$(this).data('user') });
			});
		});
	</script>
</head>
<body><noscript><div id="noscript"><p><span>We strongly recommend that you enable javascript</span></p></div></noscript><div id="m_bg"></div><div id="g_h"><div id="g_h_w"><a href="http://techberry.org/process.logout.php?token=9001decbe9d7d37c4e216622f523ec41"><button class="g_h_head_btn blue">Logout</button></a><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
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
_flyout" style="display:none"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['numberOfNotifications']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>0) {?><?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userBanner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['n']->value[2]==1) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_box"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_text"><a href="#" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/message.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px"><a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_clean_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
:</a> <?php echo $_smarty_tpl->tpl_vars['n']->value[1];?>
 </div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['n']->value[2]==2) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_box"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_text"><a href="#" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Sent request to: <a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_clean_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
</a></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['n']->value[2]==3) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_box"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_text"><a href="#" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Contact request: <a href="http://techberry.org/users/<?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
/" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_clean_link"><?php echo $_smarty_tpl->tpl_vars['n']->value[0];?>
</a></div></div></div><?php }?><?php } ?><?php } else { ?><div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" src="about:blank"></iframe></div><?php }?></div></div><a href="http://techberry.org/"><div class="g_logo"></div></a></div></div><div id="g_banner"><nav class="g_main-nav sans-serif"><div class="g_container"><ul><li style="width:15%"><a href="http://techberry.org/" rel="home" class="default">Home</a></li><li style="width:15%"><a href="http://techberry.org/products/" class="default">Platforms</a></li><li style="width:15%"><a href="http://techberry.org/forum/" class="active">Forums</a></li><li style="width:15%"><a href="http://techberry.org/about/" rel="me" class="default">About</a></li><li style="width:15%"><a href="http://techberry.org/support/" rel="me" class="default">Support</a></li><form action="http://techberry.org/search/" method="GET" id="g_search_form"><input id="g_search_input" name="query" placeholder="search" type="text"><input id="g_search_submit" type="submit" value=""><input type="hidden" value="1" name="search"/></form></ul></div></nav></div><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div style="padding-top:20px"><div class="g_wrap"><div id="g_page" style="height:100%"><ul><li class="f_list"><div class="f_title">Forums</div><a style="float:left" class="flatBlue " href="http://techberry.org/forum/create/c/" >Submit a category</a><div class="f_directory_link"><a href="http://techberry.org/forum/">Root</a></div></li><li class="f_list"><a href="http://techberry.org/forum/c=1/general"><div class="f_list_bubble" style="background-color:"><img data-ot="General" class="f_list_icon" src="http://techberry.org/images/general.png" alt="General"/></div></a><div class="f_list_info"><a class="light" href="http://techberry.org/forum/c=1/general"><h2>General</h2></a><p class="f_list_description">Discussions on various subjects, not forum specific</p></div><div class="f_list_stats"><div class="f_list_box"><span class="f_list_value">4.32k</span>Views</div><div class="f_list_box"><span class="f_list_value">4</span>Topics</div><div class="f_list_box"><span class="f_list_value">2m</span>Age</div><div class="f_list_box_action"><a href="http://techberry.org/forum/flag/c=1/9001decbe9d7d37c4e216622f523ec41" class="flatRed" >Flag</a></div><div class="f_list_box_action"><a href="http://techberry.org/forum/edit/c=1/" class="flatBlue">Edit category</a></div></div></li><li class="f_list"><a href="http://techberry.org/forum/c=4/this-is-a-test-category-title"><div class="f_list_bubble" style="background-color:"><img data-ot="this is a test category title" class="f_list_icon" src="http://www.gravatar.com/avatar/d41d8cd98f00b204e9800998ecf8427e?r=PG&s=256&default=identicon" alt="this is a test category title"/></div></a><div class="f_list_info"><a class="light" href="http://techberry.org/forum/c=4/this-is-a-test-category-title"><h2>this is a test category title</h2></a><p class="f_list_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultrices augue nec turpis tempus, semper tristique metus congue. Morbi id aliquam nulla.</p></div><div class="f_list_stats"><div class="f_list_box"><span class="f_list_value">200</span>Views</div><div class="f_list_box"><span class="f_list_value">0</span>Topics</div><div class="f_list_box"><span class="f_list_value">1m</span>Age</div><div class="f_list_box_action"><a href="http://techberry.org/forum/flag/c=4/9001decbe9d7d37c4e216622f523ec41" class="flatRed" >Flag</a></div><div class="f_list_box_action"><a href="http://techberry.org/forum/edit/c=4/" class="flatBlue">Edit category</a></div></div></li><li class="f_list">Pending Categories</li><li class="f_list"><a href="http://techberry.org/forum/c=5/web-design"><div class="f_list_bubble" style="background-color:"><img data-ot="Web design" class="f_list_icon" src="http://www.gravatar.com/avatar/d41d8cd98f00b204e9800998ecf8427e?r=PG&s=256&default=identicon" alt="Web design"/></div></a><div class="f_list_info"><a class="light" href="http://techberry.org/forum/c=5/web-design"><h2>Web design</h2></a><p class="f_list_description">blah blah blah</p></div><div class="f_list_stats"><div class="f_list_box"><span class="f_list_value">0</span>Views</div><div class="f_list_box"><span class="f_list_value">0</span>Topics</div><div class="f_list_box"><span class="f_list_value">3d</span>Age</div><div class="f_list_box_meter" title="1 committed ( 10% )"><div class="meter"><span style="width:10%"></span></div></div><div class="f_list_box_action"><a href="http://techberry.org/forum/commit/c=5/9001decbe9d7d37c4e216622f523ec41" class="flatBlue" >Commit</a></div></div></li><li class="f_list"><a href="http://techberry.org/forum/c=3/programming"><div class="f_list_bubble" style="background-color:"><img data-ot="Programming" class="f_list_icon" src="http://techberry.org/images/programming.png" alt="Programming"/></div></a><div class="f_list_info"><a class="light" href="http://techberry.org/forum/c=3/programming"><h2>Programming</h2></a><p class="f_list_description">Topic for language specific posts</p></div><div class="f_list_stats"><div class="f_list_box"><span class="f_list_value">0</span>Views</div><div class="f_list_box"><span class="f_list_value">0</span>Topics</div><div class="f_list_box"><span class="f_list_value">2m</span>Age</div><div class="f_list_box_meter" title="1 committed ( 10% )"><div class="meter"><span style="width:10%"></span></div></div><div class="f_list_box_action"><a href="http://techberry.org/forum/commit/c=3/9001decbe9d7d37c4e216622f523ec41" class="flatBlue" >Commit</a></div></div></li><li class="f_list"><a href="http://techberry.org/forum/c=2/computing"><div class="f_list_bubble" style="background-color:"><img data-ot="Computing" class="f_list_icon" src="http://techberry.org/images/computing.png" alt="Computing"/></div></a><div class="f_list_info"><a class="light" href="http://techberry.org/forum/c=2/computing"><h2>Computing</h2></a><p class="f_list_description">General computing lounge</p></div><div class="f_list_stats"><div class="f_list_box"><span class="f_list_value">3.42k</span>Views</div><div class="f_list_box"><span class="f_list_value">0</span>Topics</div><div class="f_list_box"><span class="f_list_value">2m</span>Age</div><div class="f_list_box_meter" title="2 committed ( 20% )"><div class="meter"><span style="width:20%"></span></div></div><div class="f_list_box_action"><a href="http://techberry.org/forum/commit/c=2/9001decbe9d7d37c4e216622f523ec41" class="flatBlue" >Commit</a></div></div></li></ul></div></div><div id="g_f_w"><div id="g_f"><div class="g_f_top"><div class="g_f_logo"></div><ul class="g_f_links"><li><a href="http://techberry.org/help/sitemap/">Site Map</a></li><li><a href="http://techberry.org/feed/">RSS Feeds</a></li><li><a href="http://techberry.org/help/contact/" rel="nofollow">Contact Us</a></li></ul><ul id="colorPicker"><a href="http://techberry.org/changeTheme.php?v=red"><li class="red"></li></a><a href="http://techberry.org/changeTheme.php?v=green"><li class="green"></li></a><a href="http://techberry.org/changeTheme.php?v=blue"><li class="blue"></li></a><a href="http://techberry.org/changeTheme.php?v=yellow"><li class="yellow"></li></a><a href="http://techberry.org/changeTheme.php?v=purple"><li class="purple"></li></a></ul></div><p class="g_f_segment">Access tools and platforms for basic programming through to maintaining large applications and programs. We strive to make a strong and collaborative community of active and willing programmers of experience within all areas of computing. I am always looking to add new features that will open up programming to more people and make learning a new language easy.</p><p class="g_f_segment">TechBerry &#174; 2013. All rights reserved. <a href="http://techberry.org/help/terms/" target="_blank" rel="nofollow">Terms and Conditions of Use</a> - <a href="http://techberry.org/help/privacy/" target="_blank" rel="nofollow">Privacy Policy</a></p><div data-ot="You found me! (Only works on chrome)" onclick="javascript:location.href='http://techberry.org/invert.php?token=9001decbe9d7d37c4e216622f523ec41'" style="position:absolute;width:10px;height:10px;left:20px;cursor:pointer">.</div></div></div></div></div><a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a></body><?php }} ?>
