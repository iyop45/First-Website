<?php /* Smarty version Smarty-3.1.16, created on 2014-03-20 04:36:21
         compiled from "/home/content/99/11499199/html/templates/pages/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1367696966532ad2b5758ab2-70216758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd33c2897caee99af2d84f0b4ba7674d3f3cc789' => 
    array (
      0 => '/home/content/99/11499199/html/templates/pages/login.tpl',
      1 => 1391088263,
      2 => 'file',
    ),
    '88c052349ecda74de9274e0d034a7fb9820719fa' => 
    array (
      0 => '/home/content/99/11499199/html/templates/blankLayout.tpl',
      1 => 1395315115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1367696966532ad2b5758ab2-70216758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'startOfBody' => 1,
    'announcements' => 1,
    'announcement' => 1,
    'isLoggedIn' => 1,
    'topBarLink' => 1,
    'topLinkText' => 1,
    'token' => 1,
    'privilege' => 1,
    'username' => 1,
    'numberOfNotifications' => 1,
    'avatar' => 1,
    'userBanner' => 1,
    'n' => 1,
    'withTopPadding' => 1,
    'withSidePadding' => 1,
    'enableFooter' => 1,
    'endOfBody' => 1,
    'toTopButton' => 1,
    'alerts' => 1,
    'alert' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532ad2b59a1e30_73341890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ad2b59a1e30_73341890')) {function content_532ad2b59a1e30_73341890($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

</head>

<body><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'startOfBody\']->value;?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php if ($_smarty_tpl->tpl_vars[\'announcements\']->value) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php  $_smarty_tpl->tpl_vars[\'announcement\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'announcement\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'announcements\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'announcement\']->key => $_smarty_tpl->tpl_vars[\'announcement\']->value) {
$_smarty_tpl->tpl_vars[\'announcement\']->_loop = true;
?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<div id="beta_header"><p><span class="blurb"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'announcement\']->value;?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
</span><span onclick="var x=this.parentNode.parentNode;x.parentNode.removeChild(x)" class="removeNtf uOnHover">remove</span></p></div><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php } ?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php }?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<div id="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixMain\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
bg"></div><div id="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixHeader\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
"><div id="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixHeader\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixWrap\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php if ($_smarty_tpl->tpl_vars[\'isLoggedIn\']->value==false) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'topBarLink\']->value)===null||$tmp===\'\' ? \'http://techberry.org/\' : $tmp);?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
" style="float:right" rel="nofollow" class="sign_up"><span class="spr_slct"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'topLinkText\']->value)===null||$tmp===\'\' ? \'Home\' : $tmp);?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
</span></a><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php } else { ?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<a href="http://techberry.org/process.logout.php?token=<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'token\']->value;?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
"><button class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixHeader\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_head_btn blue">Logout</button></a><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php if ($_smarty_tpl->tpl_vars[\'privilege\']->value>1) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<a href="http://techberry.org/admin/"><button class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixHeader\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_head_btn red">Admin</button></a><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php }?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<div id="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_header_block"><a class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_link" href="http://techberry.org/account/" style="margin-top:13px"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
</a><a class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_link" href="http://techberry.org/account/?v=notifications" onclick="notifications(); return false"><span class="indent notif_box"><span style="position:relative;top:3px"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'numberOfNotifications\']->value;?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
</span></span></a><span style="height:25px" class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_avatar"><img src="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'avatar\']->value;?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_flyout" style="display:none"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'numberOfNotifications\']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>0) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php  $_smarty_tpl->tpl_vars[\'n\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'n\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'userBanner\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'n\']->key => $_smarty_tpl->tpl_vars[\'n\']->value) {
$_smarty_tpl->tpl_vars[\'n\']->_loop = true;
?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php if ($_smarty_tpl->tpl_vars[\'n\']->value[2]==1) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/message.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px"><a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
:</a> <?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[1];?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
 </div></div></div><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'n\']->value[2]==2) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Sent request to: <a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
</a></div></div></div><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'n\']->value[2]==3) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<div class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_box"><div class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_text"><a href="#" class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_sideIcon" style="margin-top:0px;"><img src="http://techberry.org/images/contact_black.png" height="16px" width="16px"></a><div class="ellipsis" style="width:160px">Contact request: <a href="http://techberry.org/users/<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
/" class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'subPrefixUser\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
_clean_link"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'n\']->value[0];?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
</a></div></div></div><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php }?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php } ?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php } else { ?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<div id="">No new notifications</div><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php }?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<div class="arr"></div></div></div><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php }?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<a href="http://techberry.org/"><div class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
logo"></div></a></div></div><div style="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php if ($_smarty_tpl->tpl_vars[\'withTopPadding\']->value==true) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
padding-top:20px<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php }?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
"><div id="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixMain\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
overlay2" onclick="close_bar(this);" style="display:none"></div><div <?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php if ($_smarty_tpl->tpl_vars[\'withSidePadding\']->value==true) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
class="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
wrap<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php }?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
"><div id="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getConfigVariable(\'prefixGlobal\');?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
page" style="height:100%"><div class="inner"><div class="form_box"><div class="headerInner"><h2> TechBerry Login </h2></div><div class="formInner"><div id="log_wrap"><h3 id="msg" class="s_note s_subtitle"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'formMessage\']->value)===null||$tmp===\'\' ? \'Sign in to your TechBerry account\' : $tmp);?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
</h3><form class="box_form" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form"><div class="label"><label for="email"><strong>Email</strong></label><input type="text" name="email" maxlength="50"></div><div class="label"><label for="password"><strong>Password</strong></label><input type="password" name="password" maxlength="50"></div><div id="err" class="error"><ul id="err_l"><<?php ?>?php if(isset($_GET['error'])){ echo "Wrong password or non-existing account."; }else{ if(isset($_GET['v'])){ echo "You must log in to continue."; } } ?<?php ?>></ul></div><input type="hidden" value="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'continue\']->value;?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
" name="continue"><input type="hidden" value="<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'token\']->value;?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
" name="token"/><input class="flatOrange" type="submit" value="Login" onclick="validate(this.form, this.form.password)"></form></div></div></div></div></div></div><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php if ($_smarty_tpl->tpl_vars[\'enableFooter\']->value) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php }?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
</div><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'endOfBody\']->value;?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php if ($_smarty_tpl->tpl_vars[\'toTopButton\']->value) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<a id="toTop" href="#top" style="display: inline;"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php }?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php if ($_smarty_tpl->tpl_vars[\'alerts\']->value) {?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
<script type="text/javascript"><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php  $_smarty_tpl->tpl_vars[\'alert\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'alert\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'alerts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'alert\']->key => $_smarty_tpl->tpl_vars[\'alert\']->value) {
$_smarty_tpl->tpl_vars[\'alert\']->_loop = true;
?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
alertify.log("<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'alert\']->value[0];?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
","<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php echo $_smarty_tpl->tpl_vars[\'alert\']->value[1];?>
/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
",0);<?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php } ?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
</script><?php echo '/*%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/<?php }?>/*/%%SmartyNocache:1367696966532ad2b5758ab2-70216758%%*/';?>
</body>
<?php }} ?>
