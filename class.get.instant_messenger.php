<?php
namespace techberry\user;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class im extends auth
{
    private $username_to;
    function __construct()
    {
        parent::__construct('GET');
        $this->username_to = isset($_GET['username_to']) ? $_GET['username_to'] : null;
        echo '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>';
        echo "<script type='text/javascript'>
					$(document).ready(function(){
						$('#im_comment').keydown(function(e){
							if(e.keyCode == 13){
								e.preventDefault();
								var data = {
											'token' 				: $('#token').val(),
											'message' 				: $('#im_comment').val(),
											'username_to' 			: $('#username_to').val()
										};
								$.ajax({
									type 		: 'POST',
									url 		: 'http://techberry.org/process.send_message.php',
									data 		: data,
									success: function(response){
										var obj = $.parseJSON(response);
										if(obj['type']=='error'){
											$('#im_warning').remove();
											$('#im_wrap').prepend('<ul id=\'im_warning\' class=\'im_warning\'><li>'+obj['message']+'</li></ul>');
											$('#im_warning').delay(1000).fadeOut(\"slow\");
										}else if(obj['type']=='success'){
											if($('#im_messages').length == 0){
												$('#im_wrap').prepend('<ul id=\"im_messages\" class=\"im_messages\">'+obj['content']+'</ul>');
											}else{
												$('#im_messages').prepend(obj['content']);
											}
											$('#im_comment').val('');
										}else{
											console.log('How on earth did you manage this???');
										}
										console.log(obj['type']);
									}
								});
								return false;
							}
						});
					});
				</script>";
        if ($this->isTokenValid)
        {
            if ($this->loginCheck())
            {
                // Initialize classes
                $u = $this->userLookups($this->mysqli);
                $m = $this->messages($this->mysqli);
                
                if ($u->userExists($this->username_to))
                {
                    if ($_SESSION['username'] == $this->username_to)
                    {
						$noPolling = 1;
						$noMessenger = 1;
                        echo '<ul class="im_warning"><li>Can\'t send a message to yourself</li>';
                    }
                    else
                    {
                        $messages = $m->getMessages($_SESSION['user_id'], $this->username_to);
                        if (array_key_exists('error', $messages))
                        {
							$noPolling = 1;
							$noMessenger = 1;
                            echo '<ul class="im_warning"><li>' . $messages['error'] . '</li>';
                        }
                        else
                        {
							if (array_key_exists('log', $messages))
							{
								$noPolling = 0;
								$noMessenger = 0;
								echo '<ul class="im_warning"><li>' . $messages['log'] . '</li>';
							}
							else
							{
								if($u->is_bot($this->username_to))
								{
									$noPolling = 1;
									$noMessenger = 1;
									echo '<ul class="im_warning"><li>Can\'t send messages to bot accounts</li>';
								}
								else
								{
									$noPolling = 0;
									$noMessenger = 0;
									echo '<ul id="im_messages" class="im_messages">';
									
									require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
									$parser = new \JBBCode\Parser();
									$parser->addCodeDefinitionSet(new \JBBCode\InstantMessengerDefinitionSet());
									
									$i = 0;
									foreach ($messages['success'] as &$msg)
									{
										if ($i == 0)
										{
											$latest_id = $msg['id'];
										}
										
										$parser->parse(htmlspecialchars($msg['message'], ENT_QUOTES));
										$msg['message'] = $parser->getAsHtml();
										
										if ($msg['isRecieved'] == 0)
										{
											// Sent message
											echo '<li id="imMSG_' . $msg['id'] . '"><img style="float:right" src="' . $msg['avatar'] . '" onerror="avatarLoadError()" width="25px" height="25px"/><p style="float:right">' . $msg['message'] . '</p></li>';
										}
										else
										{
											// Recieved message
											echo '<li id="imMSG_' . $msg['id'] . '"><img style="float:left" src="' . $msg['avatar'] . '" onerror="avatarLoadError()" width="25px" height="25px"/><p>' . $msg['message'] . '</p></li>';
										}
										$i++;
									}
								}
							}
						}
                    }
                }
                else
                {
					$noPolling = 1;
					$noMessenger = 1;
                    echo '<ul class="im_warning"><li>User does not exist</li>';
                }
            }
            else
            {
				$noPolling = 1;
				$noMessenger = 1;
                echo '<ul class="im_warning"><li>Must be logged in</li>';
            }
        }
        else
        {
			$noPolling = 1;
			$noMessenger = 1;
            echo '<ul class="im_warning"><li>Invalid request</li>';
        }
		if($noMessenger != 1)
		{
			echo '</ul><p class="im_garbage">Garbage collection</p><input type="hidden" id="token" value="' . $this->token . '"/><input type="hidden" id="username_to" value="' . $this->username_to . '"/><textarea id="im_comment" class="im_comment" placeholder="Send a message"></textarea>';
		}
		if($noPolling != 1){
			echo '<script type="text/javascript">
						var param = ' . ( $latest_id ? $latest_id: 0) . ';
						var i = 0;
						function poll(){
							var fatalError = 0;
							$.ajax({
									url: "http://techberry.org/poll/user.messages.php?token=' . $this->token . '&username_to=' . $this->username_to . '&i="+param+"",
									success: function(response){
										if(response=="error"){
											if(i<2){
												$("#im_wrap").prepend("<ul id=\'im_warning\' class=\'im_warning\'><li>An error has occurred, please refresh the frame</li></ul>");
												$("#im_warning").delay(2000).fadeOut("slow");
												i++;
											}else{
												$("#im_wrap").prepend("<ul id=\'im_warning\' class=\'im_warning\'><li>A bug report window will open up in <span id=\"__countdown\">3</span></li></ul>");
												var x = 0;
												var interval = setInterval(function () {
													var number = parseInt($("#__countdown").html());
													$("#__countdown").html(number-1);
													if (++x === 3){
													   window.clearInterval(interval);
													   parent.reportBug();
													}
												}, 1000);
												fatalError = 1;
											}
										}else if(response!="0"){
											if($(\'#im_messages\').length == 0){
												$(\'#im_wrap\').prepend(\'<ul id="im_messages" class="im_messages"></ul>\');
											}
											$("#im_messages").prepend(response);
											param = $("ul#im_messages li:first").attr("id").replace("imMSG_","");
											$("ul#im_messages li .im_new").animate({backgroundColor: "#f6f6f6" }, "slow").removeClass("im_new");
											IMCleanup();
										}
									}, complete:  function(){
															if(fatalError == 0){
																setTimeout(poll,7000);
															}
									}, timeout: 7000 
							});
						}
						function IMCleanup(){
							var i = $("#im_messages li").length - 40;
							if(i>0){
								while(i>0){
									$("#im_messages li:last").remove();
									i--;
								}
							}
						}
						poll();
				</script>';
		}
    }
}
$im = new im();
?>