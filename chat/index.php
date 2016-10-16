<?php
	namespace techberry\page\index;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('chat','default');
	
if(!$c->isLoggedIn){
	// Must be logged in
	$continue = base64_encode('http://techberry.org/chat/');
	header('Location: http://techberry.org/login.php?continue='.$continue);
}

$javaScriptLinks = array('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=desert');
$tpl->assign("javaScriptLinks",$javaScriptLinks);

require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
$parser = new \JBBCode\Parser();
$parser->addCodeDefinitionSet(new \JBBCode\ShoutBoxDefinitionSet());

$s = $c->shouts();
$shouts = $s->getShouts();

$latest_id = $shouts[0]['id'];
foreach($shouts as &$shout){
	$parser->parse(htmlspecialchars($shout['message'], ENT_QUOTES));
	$shout['message'] = $c->singleTags($parser->getAsHtml());
}

$tpl->assign("shouts",$shouts);

$l = $c->userLookups();
$users = $l->getActiveUsersOnPage('/chat/index.php');
$userIDs = array();
foreach($users as $u)
{
	$userIDs[] = $u['id'];
}
$tpl->assign("onlineUsers",$users);
$tpl->assign("onlineUsersIDs",$userIDs);

$inlineScript = 

'
$.ajaxSetup({ cache: false });
Messenger.options = {
    extraClasses: \'messenger-fixed messenger-on-bottom messenger-on-right\',
    theme: \'flat\'
}
param = "'.$latest_id.'";
(function poll(){
	$.ajax({ url: "http://techberry.org/poll/chat.shouts.php?i="+param+"", success: function(response){
			if(response==\'error\'){
				Messenger().post({
					message: "An error has occurred, please refresh the page",
					type: \'error\',
					hideAfter: 5
				});
			}else if(response!=\'0\'){
				$("#shout").prepend(response);
				param = $(\'ul#shout li:first div\').attr(\'id\').replace(\'msg_\',\'\');
				$(\'ul#shout li .c_new\').animate({backgroundColor: "#f6f6f6" }, \'slow\').removeClass("c_new");
				PR.prettyPrint();
				renderDynamicTips();
				chatBoxCleanup();
			}
	}, complete: setTimeout(poll,7000), timeout: 7000 });
})();
function userPoll(isFirstRun,callback){
	if(isFirstRun == 1){
		var oldUsers = '.json_encode($userIDs).';
	}else{
		var oldUsers = callback;
	}
	var page = \''.base64_encode("/chat/index.php").'\';
	$.ajax({ url: "http://techberry.org/poll/users.onPage.php?page="+page, success: function(response){
			if(response==\'error\'){
				Messenger().post({
					message: "An error has occurred, please refresh the page",
					type: \'error\',
					hideAfter: 5
				});
			}else if(response!=\'false\'){
				var obj = $.parseJSON(response);
				var newUsers = [];
				$.each(obj, function(key,value){
					newUsers.push(value.id);
				});
				if(oldUsers.sort().join(\',\') != newUsers.sort().join(\',\')){
					$("#__onlineUsers").html("<img id=\'__loading\'src=\'http://techberry.org/images/ajax_load.gif\'\>");
					$.each(obj, function(key,value){
						$("#__onlineUsers").append(\'<a id="user__\'+value.id+\'" href="http://techberry.org/user/\'+value.username+\'/" class="miniprofile" data-user="\'+value.username+\'"><img src="\'+value.avatar+\'" style="float:left" height="32" width="32"/></a>\').fadeIn(\'slow\');
					});
					$("#__loading").remove();
					oldUsers = newUsers;
				}else{
					for(var i = 0; i < oldUsers; i++){
						/* does not exist in document */
						if($("#user__"+oldUsers[i]).length == 0){
							/* so clear the oldUser array so the document can be reloaded on next poll */
							oldUsers = [];
							break;
						}
					}
				}
			}
	}, complete: setTimeout( function() { userPoll(0,oldUsers); },10000), timeout: 10000 });
}
userPoll(1);
function chatBoxCleanup(){
	var i = $(\'#shout li\').length - 40;
	if(i>0){
		while(i>0){
			$(\'#shout li:last\').remove();
			i--;
		}
	}
}
$(function(){
	$("#c_recent_posts").animate({
		height: $(window).height()-250
	}, 500);
	$(window).resize(function() {
		$("#c_recent_posts").animate({
			height: $(window).height()-250
		}, 500);
	});
	$(\'#shoutform\').submit(function(){
		$.ajax({
			type: "POST",
			url: "http://techberry.org/process.shout.php",
			data: "message="+$(\'#shoutmsg\').val()+"&token='.$c->token.'&js=1",
			success: function(response){
				var obj = $.parseJSON(response);
				if(obj[\'type\']=="success"){
					$("#shoutmsg").val("");
					$("#shout").prepend(obj[\'content\']);
					/*Messenger().post({
						message: obj[[\'message\']],
						type: \'success\',
						hideAfter: 5
					});*/
					$(\'#c_recent_posts\').animate({
					   scrollTop: 0
					}, \'slow\');
					param = $(\'ul#shout li:first div\').attr(\'id\').replace(\'msg_\',\'\');
					$(\'ul#shout li .c_new\').animate({backgroundColor: "#f6f6f6" }, \'slow\').removeClass("c_new");
					PR.prettyPrint();
					renderDynamicTips();
				}else{
					Messenger().post({
						message: response[obj[\'message\']],
						type: \'error\',
						hideAfter: 5
					});
				}
			}
		});
		return false;
	});
})';

$tpl->assign("withTopPadding",false);
$tpl->assign("withSidePadding",false);

$tpl->assign("inlineScript",$inlineScript);

$tpl->assign("disableFooter",true);

$tpl->display('templates/chat.tpl');
?>