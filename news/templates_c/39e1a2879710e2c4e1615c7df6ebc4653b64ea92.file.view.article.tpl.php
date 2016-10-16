<?php /* Smarty version Smarty-3.1.16, created on 2014-12-15 14:13:43
         compiled from "/home/content/99/11499199/html/news/templates/view.article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2929027295367e74f645a69-00175458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39e1a2879710e2c4e1615c7df6ebc4653b64ea92' => 
    array (
      0 => '/home/content/99/11499199/html/news/templates/view.article.tpl',
      1 => 1418059692,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2929027295367e74f645a69-00175458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5367e74f821ee1_02664094',
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
<?php if ($_valid && !is_callable('content_5367e74f821ee1_02664094')) {function content_5367e74f821ee1_02664094($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/content/99/11499199/html/lib/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_math')) include '/home/content/99/11499199/html/lib/plugins/function.math.php';
?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
page" style="height:100%"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
news_resets"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
main_article"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
article_actions" align="left"><span <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>onclick="likeNewsArticle();"<?php }?> class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
love" align="left"> <?php echo $_smarty_tpl->tpl_vars['mainArticle']->value['votes'];?>
 </span><p class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
article_date"><?php echo $_smarty_tpl->tpl_vars['mainArticle']->value['date'];?>
</p></div><form id="likeNewsArticle" style="display:none" method="POST" action="http://techberry.org/news/process.like.php"><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/><input type="hidden" name="newsID" value="<?php echo $_smarty_tpl->tpl_vars['mainArticle']->value['id'];?>
"/></form><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
main_article_image"><img style="position:absolute;margin:20px 0 0 20px;min-height:160px;min-width:300px;border:1px solid #303030" src="<?php echo $_smarty_tpl->tpl_vars['mainArticle']->value['image'];?>
"><img width="720" height="427.3" src="http://techberry.org/news/binary.jpg"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
main_article_info"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
main_article_title"><h3><a href="<?php echo $_smarty_tpl->tpl_vars['mainArticle']->value['reference'];?>
"><?php echo $_smarty_tpl->tpl_vars['mainArticle']->value['title'];?>
</a></h3></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
main_article_snippet"><?php echo $_smarty_tpl->tpl_vars['mainArticle']->value['content'];?>
...</div><a href="<?php echo $_smarty_tpl->tpl_vars['mainArticle']->value['reference'];?>
" style="margin-right:5px"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
main_article_readmore"><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
plus">&nbsp;</span><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
main_bg"><h5>Read more</h5></span></div></a><span class='st_sharethis_large' displayText='ShareThis'></span><span class='st_facebook_large' displayText='Facebook'></span><span class='st_twitter_large' displayText='Tweet'></span><span class='st_googleplus_large' displayText='Google +'></span><span class='st_linkedin_large' displayText='LinkedIn'></span><span class='st_pinterest_large' displayText='Pinterest'></span></div></div></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comment_box" style="float:left;width:720px;"><form id="news_comment" action="http://techberry.org/news/comment/n=<?php echo $_smarty_tpl->tpl_vars['mainArticle']->value['id'];?>
/" method="POST"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comment_holder"><textarea id="comment_textarea" name="comment" onclick="$(this).animate({height:100},200)" placeholder="Enter your comment..." class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comment_textarea"></textarea></div><input id="parent_id" type="hidden" name="parent_id" value="0"/><input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comment_buttons"><input type="submit" value="Submit" class="blue"/></div></form></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
comments" style="float:left;width:720px;"><div id="contentList"><?php echo $_smarty_tpl->tpl_vars['comments']->value;?>
</div><?php if (false) {?><!--<div role="button" data-from="11" data-info="news-replies" class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
loadMore tooltipWiki loadMore" data-v="news:comments:loadMore">Show more</div>--><?php }?></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
side_bar"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
side_bar_container"><ul><input id="g_search_input" name="query" style="margin-bottom:10px" placeholder="search" type="text"><div id="original_side_content"><?php  $_smarty_tpl->tpl_vars['sideArticle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sideArticle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sideArticles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sideArticle']->key => $_smarty_tpl->tpl_vars['sideArticle']->value) {
$_smarty_tpl->tpl_vars['sideArticle']->_loop = true;
?><li><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
thumbnail"><img width="70" height="70" src="<?php echo $_smarty_tpl->tpl_vars['sideArticle']->value['image'];?>
"></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
right"><h5><a href="http://techberry.org/news/n=<?php echo $_smarty_tpl->tpl_vars['sideArticle']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['sideArticle']->value['titleLink'];?>
/"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['sideArticle']->value['title'],30,"...",true);?>
</a></h5></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
popularity"><div style="width:<?php if ($_smarty_tpl->tpl_vars['sideArticle']->value['votes']>50) {?>100%<?php } else { ?><?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['sideArticle']->value['votes'],'y'=>50),$_smarty_tpl);?>
%<?php }?>"></div></div></li><?php } ?><?php if ($_smarty_tpl->tpl_vars['recentArticles']->value) {?><hr><?php  $_smarty_tpl->tpl_vars['recentArticle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recentArticle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recentArticles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recentArticle']->key => $_smarty_tpl->tpl_vars['recentArticle']->value) {
$_smarty_tpl->tpl_vars['recentArticle']->_loop = true;
?><li><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
thumbnail"><img width="70" height="70" src="<?php echo $_smarty_tpl->tpl_vars['recentArticle']->value['image'];?>
"></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
right"><h5><a href="http://techberry.org/news/n=<?php echo $_smarty_tpl->tpl_vars['recentArticle']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['recentArticle']->value['titleLink'];?>
/"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['recentArticle']->value['title'],30,"...",true);?>
</a></h5></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
popularity" data-ot="Popularity"><div style="width:80%"></div></div></li><?php } ?><?php }?></div><div id="search_side_content" class="<?php echo $_smarty_tpl->getConfigVariable('prefixNews');?>
side_bar_container"></div></ul></div></div></div><script type="text/javascript">if(window.location.hash){var id = window.location.hash.replace(/#/g , "");$('html, body').animate({scrollTop: $("#comment_"+id).offset().top-50}, 2000);}$(document).mouseup(function(event){var target = $("#comment_textarea");if(!target.is(event.target) && !$("button").is(event.target) && target.is(":visible")){$("#comment_textarea").animate({height:40},200);}else{return false;}});$( document ).ready(function() {$('#search_side_content').hide();$('#original_side_content').show();$('#g_search_input').keyup(function (){var search = $(this).val();if (search.length >= 3) {$.ajax({ url: "http://techberry.org/news/process.search.php?q="+search+"&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
", success: function(response){$('#original_side_content').hide();$('#search_side_content').empty();$('#search_side_content').append(response);$('#search_side_content').show();}});}else{$('#search_side_content').hide();$('#original_side_content').show();}});});</script></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
