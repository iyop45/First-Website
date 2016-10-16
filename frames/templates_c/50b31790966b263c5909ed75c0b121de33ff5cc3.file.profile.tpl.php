<?php /* Smarty version Smarty-3.1.16, created on 2014-11-13 11:22:45
         compiled from "/home/content/99/11499199/html/frames/templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:770926622534068e30cde35-79512635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50b31790966b263c5909ed75c0b121de33ff5cc3' => 
    array (
      0 => '/home/content/99/11499199/html/frames/templates/profile.tpl',
      1 => 1415902820,
      2 => 'file',
    ),
    'ea541626e7e48b7e5c9159b25f043426db9b3a75' => 
    array (
      0 => '/home/content/99/11499199/html/templates/frame.tpl',
      1 => 1410452054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '770926622534068e30cde35-79512635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534068e3177689_13222298',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'inlineScript' => 0,
    'inlineCSS' => 0,
    'endOfHead' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534068e3177689_13222298')) {function content_534068e3177689_13222298($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['inlineScript']->value) {?>
		<script type="text/javascript">
			<?php echo $_smarty_tpl->tpl_vars['inlineScript']->value;?>

		</script>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['inlineCSS']->value) {?>
		<style type="text/css"><?php echo $_smarty_tpl->tpl_vars['inlineCSS']->value;?>
</style>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

</head>

<body><?php if ($_smarty_tpl->tpl_vars['errorMessage']->value) {?><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
<?php } else { ?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
body" <?php if ($_smarty_tpl->tpl_vars['isCurrentUser']->value) {?>style="height:85px !important"<?php }?>><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
banner" style="<?php if ($_smarty_tpl->tpl_vars['profileImage']->value) {?>background-image:url(<?php echo $_smarty_tpl->tpl_vars['profileImage']->value;?>
);background-size: 100% 100%;<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['cover']) {?>background:url('<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['cover'];?>
');background-size: 100% 100%;<?php } else { ?>background-color:<?php echo $_smarty_tpl->tpl_vars['randomColor']->value;?>
<?php }?><?php }?>"><img class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
avatar" src="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['avatar'];?>
" width="40px" height="40px"/></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
info"><h1><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
</h1><div><span class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
group" style="font-weight:bold;font-size:14px"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['group_name'];?>
</span></div><div style="margin-top:8px"><span class="badge3"></span><span class="item-multiplier" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['badgeCount']->value['bronze_count'];?>
</span><span class="badge2"></span><span class="item-multiplier" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['badgeCount']->value['silver_count'];?>
</span><span class="badge1"></span><span class="item-multiplier" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['badgeCount']->value['gold_count'];?>
</span></div></div><?php if ($_smarty_tpl->tpl_vars['isCurrentUser']->value) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
sub_bar"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
button <?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
action" onclick="window.top.location.href = 'http://techberry.org/account';">View account</div></div><?php } else { ?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
sub_bar"><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['is_bot']==0) {?><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
button <?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
action" onclick="<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>parent.im('<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
'); return false;<?php } else { ?>window.top.location.href = 'http://techberry.org/login.php?continue=<?php echo $_smarty_tpl->tpl_vars['userPage_baseEncode']->value;?>
'<?php }?>">Send message</div><?php }?><?php if ($_smarty_tpl->tpl_vars['isFollowing']->value==1) {?><div id="<?php echo $_smarty_tpl->tpl_vars['followStringID']->value;?>
" onclick="unfollow('<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['followStringID']->value;?>
')" class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
button <?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
action">UnFollow</div><?php } else { ?><div id="<?php echo $_smarty_tpl->tpl_vars['followStringID']->value;?>
" onclick="follow('<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['followStringID']->value;?>
')" class="<?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
button <?php echo $_smarty_tpl->getConfigVariable('prefixHoverCard');?>
action">Follow</div><?php }?></div><?php }?></div><?php }?></body>
<?php }} ?>
