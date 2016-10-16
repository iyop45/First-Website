<?php
	namespace techberry\page\index;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('login','default');
	

// Head variables
$cssLinks = array();
$inlineScript = 'function error(a,b){document.getElementById("msg").innerHTML="There has been an error with your form in the following fields:",b.style.borderColor="rgb(170, 34, 34)";var c=document.createElement("li"),d=document.getElementById("err_l");c.appendChild(document.createTextNode(a)),d.appendChild(c)}function validate(a,b){document.getElementById("err_l").innerHTML="";var c=0;return""==a.email&&(error("Please enter a valid username",a.username),c++),c>0?!1:(formhash(a,b),void 0)}';
$inlineCSS = 
<<<'EOT'
.inner{
	padding-top:50px;
}
.label{
	overflow:hidden;
}
input{
	border: 1px solid #ddd;
	padding: 5px;
	color: #777;
	line-height: normal;
	-moz-transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
	-webkit-transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
	-o-transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
	transition: box-shadow ease-in-out 0.5s, border ease-in-out 0.5s;
}
.inner{width:940px;margin:0 auto}.form_box{margin-bottom:0;width:640px;-webkit-border-radius:4px;margin-left:auto;margin-right:auto;background-color:#fff;padding-top:10px}.headerInner{line-height:20px;min-height:20px;padding-bottom:2px;border-bottom:1px solid #aaa;margin-left:20px;margin-right:20px;color:#1c2a47;font-size:16px;font-weight:700}.formInner{padding-left:20px;padding-right:20px;padding-top:10px;margin-bottom:15px}.formInner h3{margin:0 10px 10px}.box_form{width:100%}.label{font-weight:700;margin:0 0 5px;display:block}.label label{float:left;width:25%;padding:5px;margin-right:5px;text-align:right}.box_form input[type=password],.box_form input[type=text]{float:left;border:1px solid #bdc7d8;margin:0;width:310px}input{font-family:'lucida grande',tahoma,verdana,arial,sans-serif}#log_wrap,#reg_wrap{position:relative;width:100%}
EOT;

if($c->isLoggedIn){
	// Stop users being able to log in twice in the same session
	$c->notify->source()->type('error')->msg("Already logged in")->process();
	header('Location: http://techberry.org/');
}
$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);

$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

$tpl->assign("enableFooter",true);
$tpl->assign("topBarLink","http://techberry.org/register");
$tpl->assign("topLinkText","Sign Up");
$tpl->assign("topLinkColor","red");

// Only for this page
if(isset($_SESSION['JustRegistered'])){
	unset($_SESSION['JustRegistered']);
	$tpl->assign("formMessage", "You can now log into your new account");
}else if(isset($_SESSION['changed_password'])){
	unset($_SESSION['changed_password']);
	$tpl->assign("formMessage", "You can now log back in with your new password");
}
if(isset($_GET['continue'])){
	$tpl->assign("formMessage","Must be logged in to continue");
	$continue = $_GET['continue'];
}else{
	$continue = base64_encode('http://techberry.org/');
}
$tpl->assign("continue", $continue);
$tpl->display('/home/content/99/11499199/html/templates/pages/login.tpl');
?>