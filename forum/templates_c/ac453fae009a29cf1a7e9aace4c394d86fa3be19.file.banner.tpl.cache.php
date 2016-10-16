<?php /* Smarty version Smarty-3.1.16, created on 2014-03-19 02:19:03
         compiled from "/home/content/99/11499199/html/templates/core/banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142699058353296107c22880-97492550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac453fae009a29cf1a7e9aace4c394d86fa3be19' => 
    array (
      0 => '/home/content/99/11499199/html/templates/core/banner.tpl',
      1 => 1392568510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142699058353296107c22880-97492550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bannerLinkWidth' => 0,
    'homeTab' => 0,
    'productsTab' => 0,
    'forumTab' => 0,
    'aboutTab' => 0,
    'supportTab' => 0,
    'searchBarEnabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53296107c6e004_47886524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53296107c6e004_47886524')) {function content_53296107c6e004_47886524($_smarty_tpl) {?><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
banner"><nav class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
main-nav sans-serif"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
container"><ul><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/" rel="home" class="<?php if ($_smarty_tpl->tpl_vars['homeTab']->value) {?>active<?php } else { ?>default<?php }?>">Home</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/products/" class="<?php if ($_smarty_tpl->tpl_vars['productsTab']->value) {?>active<?php } else { ?>default<?php }?>">Platforms</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/forum/" class="<?php if ($_smarty_tpl->tpl_vars['forumTab']->value) {?>active<?php } else { ?>default<?php }?>">Forums</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/about/" rel="me" class="<?php if ($_smarty_tpl->tpl_vars['aboutTab']->value) {?>active<?php } else { ?>default<?php }?>">About</a></li><li style="width:<?php echo $_smarty_tpl->tpl_vars['bannerLinkWidth']->value;?>
"><a href="http://techberry.org/support/" rel="me" class="<?php if ($_smarty_tpl->tpl_vars['supportTab']->value) {?>active<?php } else { ?>default<?php }?>">Support</a></li><?php if ($_smarty_tpl->tpl_vars['searchBarEnabled']->value) {?><form action="http://techberry.org/search/" method="GET" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_form"><input id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_input" name="query" placeholder="search" type="text"><input id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
search_submit" type="submit" value=""><input type="hidden" value="1" name="search"/></form><?php }?></ul></div></nav></div><?php }} ?>
