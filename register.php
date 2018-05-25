<?php
	namespace techberry\page;

	require("class.content.php");
	require("lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('register','default');

// Variables for banner
$homeTab = true;
$bannerLinksEnabled = true;
$searchBarEnabled = true;
$bannerLinkWidth = "15%";

// Head variables
$cssLinks = array();
$inlineScript = 
<<<'EOT'
	function error(msg,box){
		document.getElementById('msg').innerHTML = 'There has been an error with your form in the following fields:';
		box.style.borderColor = "rgb(170, 34, 34)";
		var li = document.createElement("li");
		var err = document.getElementById('error_list');
		li.appendChild(document.createTextNode(msg));
		err.appendChild(li);
	}
	function validate(form,pass){
		// reset errors
		document.getElementById('error_list').innerHTML = '';
		pass.style.borderColor = "#bdc7d8";
		form.username.style.borderColor = "#bdc7d8";
		form.email.style.borderColor = "#bdc7d8";
		form.vpassword.style.borderColor = "#bdc7d8";
		var i=0;
		if(form.username.value == "" || form.username.value.match(/^.*?(?=[\^#%&$\*:<>\?\/\{\|\}]).*$/) || form.username.value.length < 2 || form.username.value.length > 15){
			error('This username is invalid',form.username);
			i++;
		}
		if(form.email.value.match(/(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) == null){
			error('This is an invalid email address',form.email);
		}
		if(pass.value.length < 8 || pass.value.length > 40){
			error('Password must be between 8 and 40 characters',form.password);
			i++;
		}
		if(pass.value != form.vpassword.value){
			error('Passwords do not match!',form.vpassword);
			i++;
		}
		if(i>0){
			return false;
		}else{
			var p = document.createElement("input");
			// Add the new element to our form.
			form.appendChild(p);
			p.name = "p";
			p.type = "hidden"
			p.value = pass.value;
			pass.value = "";
			form.submit();
		}
	}
EOT;
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

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

$captcha = str_replace('placeholder="Captcha"','',\captcha::form());
$tpl->assign("captcha",$captcha);
$tpl->assign("enableFooter",true);
$tpl->assign("topBarLink","http://techberry.org/login");
$tpl->assign("topLinkText","Login");
$tpl->assign("topLinkColor","blue");

$tpl->display('templates/pages/register.tpl');
?>