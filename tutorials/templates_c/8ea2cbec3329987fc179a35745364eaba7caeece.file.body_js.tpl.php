<?php /* Smarty version Smarty-3.1.16, created on 2015-03-21 08:58:51
         compiled from "/home/content/99/11499199/html/templates/body_js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1094665615548fecf85944e8-34633022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea2cbec3329987fc179a35745364eaba7caeece' => 
    array (
      0 => '/home/content/99/11499199/html/templates/body_js.tpl',
      1 => 1426953293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1094665615548fecf85944e8-34633022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548fecf85d2653_38789609',
  'variables' => 
  array (
    'token' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fecf85d2653_38789609')) {function content_548fecf85d2653_38789609($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<script type="text/javascript">$(".shortened").shorten(),function(){$(function(){return $(".age.now").attr("datetime",new Date),$(".age.default").age(),$(".age.tiny").age({style:"tiny"}),$(".age.expired").age({expired:"expired"}),$(".age.pending").age({pending:"pending"})})}.call(this);</script>
<script type="text/javascript">
	
		$(document).ready(function() {
			renderYoutubeEmbed();
			$(".spoiler").spoiler();
			$(".loadMore").click(function() {
				var e = this;
				if ($(e).attr("data-first")) {
					var t = $(e).attr("data-first")
				} else {
					var t = 0
				}
				if ($(e).attr("data-n")) {
					var n = $(e).attr("data-n")
				} else {
					var n = 1
				}
				$.get("http://techberry.org/ajax/loadMore.php?info=" + $(e).attr("data-info") + "&from=" + $(e).attr("data-from") + "&first=" + t, function(t) {
					if (t == "false") {
						$("#contentList").append('<h2 class="endOfTheLine" style="text-align:center;margin-top:5px">End of the line</h2>');
						$(e).remove()
					} else {
						history.pushState("page", "", "?page=" + 20 * parseInt(n) - 10);
						$(e).attr("data-from", parseInt($(e).attr("data-from")) + parseInt(20));
						$(e).attr("data-n", +n + +1);
						$(e).attr("data-first", 0);
						$("#contentList").append(t);
						renderYoutubeEmbed();
					}
				});
			}), $(".pointsNeeded").click(function(e) {
				var t = $(this).attr("data-action");
				var dt = new Date();
				$.get("http://techberry.org/ajax/actions.php?action=" + t + "&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&r=" + dt.getMilliseconds(), function(e) {
					if (e == "-") {
						createAlert("error", "Must be logged in to an active account"), $(this).attr("onclick", "createAlert('error','Must be logged in to an active account')")
					} else if (e == "|") {
						createAlert("error", "Locking is a permanent action"), $(this).attr("onclick", "createAlert('error','Locking is a permanent action')")
					} else if (e == "*") {
						createAlert("error", "Must be in the trusted user group or higher for your reputation to contribute to permissions"), $(this).attr("onclick", "createAlert('error','Must be in the trusted user group or higher for your reputation to contribute to permissions')")
					} else {
						createAlert("error", "Requires " + e + " points"), $(this).attr("onclick", "createAlert('error','Requires " + e + " points')")
					}
				}), e.preventDefault()
			})
		});
		$("body").htmlfeedback();
		function reportBug(){$("body").htmlfeedback("reset");exitBugReport();$("body").htmlfeedback("show");$.ajax({type:"POST",url:"http://techberry.org/frames/report.bug.php",data:{token:"<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"},dataType:"text",success:function(e){$(document.body).append('<div id="bug-report">'+e+"</div>");$("#bug-report").draggable({handle:"#bug-report-handle"})},error:function(){Messenger().post({message:"Unable to load bug report form",type:"error",hideAfter:10,hideOnNavigate:true});$("body").htmlfeedback("hide");$("#bug-report").remove()}})}
		function exitBugReport(){$("body").htmlfeedback("hide");$("#bug-report").remove()}
	
</script>
<?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?>
	<script type="text/javascript">
		<?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>
			Messenger().post({
				message: '<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
',
				type: '<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
',
				hideAfter: 10,
				hideOnNavigate: true,
				showCloseButton: true
			});
		<?php } ?>
	</script>
<?php }?><?php }} ?>
