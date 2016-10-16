<?php
	namespace techberry\poll;
	
	require("/home/content/99/11499199/html/class.authentication.php");
	/*
	*  Considering deadlocks and infinite while loops
	*  long polling has since been scratched for short
	*  polling
	*/
	use techberry\core\authentication as auth;

	class messages extends auth{
		private $username;
		
		function __construct(){
			parent::__construct('GET');
			
			$this->username = isset($_GET['username_to']) ? $_GET['username_to'] : null;
			$m = $this->messages();
			
			$latest_id = $_GET['i'];
			if(!$m->isValidMessage($latest_id)){
				die('error');
			}
			
			if($this->loginCheck()){
				if($this->isTokenValid){
						// Check if new message
						$new_ids = $m->isNewMessage($this->username,$latest_id);
						if(is_array($new_ids)){
							// New message
							require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
							$parser = new \JBBCode\Parser();
							$parser->addCodeDefinitionSet(new \JBBCode\InstantMessengerDefinitionSet());
							
							$messages = $m->returnMessages($new_ids);
							if($messages){
								$html = '';
								foreach($messages as &$msg){
									$parser->parse(htmlspecialchars($message['content'], ENT_QUOTES));
									$message['message'] = $parser->getAsHtml();
									if($msg['user_id'] == $_SESSION['user_id']){
										// Sent message
										$html .= '<li id="imMSG_'.$msg['id'].'"><img style="float:right" src="'.$msg['avatar'].'" onerror="avatarLoadError(this)" width="25px" height="25px"/><p style="float:right" class="im_new">'.$msg['message'].'</p></li>';
									}else{
										// Recieved message
										$html .= '<li id="imMSG_'.$msg['id'].'"><img style="float:left" src="'.$msg['avatar'].'" onerror="avatarLoadError(this)" width="25px" height="25px"/><p class="im_new">'.$msg['message'].'</p></li>';
									}
								}
								die($html);
							}else{
								die('error');
							}
						}else{
							die('0');
						}
				}else{
					die('0');
				}
			}else{
				die('0');
			}
		}
	}
	$m = new messages();
?>