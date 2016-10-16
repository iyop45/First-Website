<?php /* Smarty version Smarty-3.1.16, created on 2014-12-16 01:27:36
         compiled from "/home/content/99/11499199/html/answers/templates/view.answers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181445450253f419837bbfd8-62504896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '003ab494c3c1e2b704873a407277c186466af54b' => 
    array (
      0 => '/home/content/99/11499199/html/answers/templates/view.answers.tpl',
      1 => 1404166875,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1418665460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181445450253f419837bbfd8-62504896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53f41983a090b4_63983841',
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
<?php if ($_valid && !is_callable('content_53f41983a090b4_63983841')) {function content_53f41983a090b4_63983841($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
page" style="height:100%"><ul><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
list"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
title">Q & A</div><a style="float:left" class="flatBlue" href="#">Answer question</a><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
directory_link"><a href="http://techberry.org/answers/">Root</a> / <a href="http://techberry.org/answers/q=<?php echo $_smarty_tpl->tpl_vars['question_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['questionTitleLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['questionTitle']->value;?>
</a></div></li><?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['answer']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['a']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['answer']->index++;
 $_smarty_tpl->tpl_vars['answer']->first = $_smarty_tpl->tpl_vars['answer']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['a']['first'] = $_smarty_tpl->tpl_vars['answer']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['a']['iteration']++;
?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
list"><ul class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
side_list"><li><a href="http://techberry.org/user/<?php echo $_smarty_tpl->tpl_vars['answer']->value['username'];?>
/"><div data-user="<?php echo $_smarty_tpl->tpl_vars['answer']->value['username'];?>
" class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
list_bubble miniprofile" style="background-color:<?php echo $_smarty_tpl->tpl_vars['answer']->value['color'];?>
"><img class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
list_icon" src="<?php echo $_smarty_tpl->tpl_vars['answer']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['answer']->value['title'];?>
"/></div></a></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
votes"><ul><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
vote_icon"><img src="http://techberry.org/answers/images/upvote.png" height="30" width="25"/></li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
vote_number"><?php echo $_smarty_tpl->tpl_vars['answer']->value['votes'];?>
</li><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
vote_icon"><img src="http://techberry.org/answers/images/downvote.png" height="30" width="25"/></li></ul></li><?php if ($_smarty_tpl->tpl_vars['answer']->value['accepted']==1) {?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
accepted"><img src="http://techberry.org/answers/images/accepted.png" height="42" width="42"/></li><?php }?><li><a class="light <?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
reply" href="#"><p>Reply</p></a></li></ul><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
reply_content"><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['a']['first']) {?><a class="light" href="http://techberry.org/answers/q=<?php echo $_smarty_tpl->tpl_vars['question_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['questionTitleLink']->value;?>
"><h2><?php echo ucfirst($_smarty_tpl->tpl_vars['questionTitle']->value);?>
</h2></a><?php }?><p class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
list_description"><?php echo $_smarty_tpl->tpl_vars['answer']->value['content'];?>
</p></div></li><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['a']['iteration'];?>
<?php $_tmp1=ob_get_clean();?><?php if (count($_smarty_tpl->tpl_vars['comments']->value[$_tmp1])>0) {?><li class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
comment_box"><?php ob_start();?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['a']['iteration'];?>
<?php $_tmp2=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value[$_tmp2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixQA');?>
comment"><a class="light" href="http://techberry.org/user/<?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
/"><?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
</a>&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</div><?php } ?></li><?php }?><?php } ?></ul></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/body_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body><?php }} ?>
