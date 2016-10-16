<?php
	namespace techberry\poll;
	
	require("/home/content/99/11499199/html/class.authentication.php");
	/*
	*  Considering deadlocks and infinite while loops
	*  long polling has since been scratched for short
	*  polling
	*/
	use techberry\core\authentication as auth;

	class shoutbox extends auth{
		function __construct(){
			parent::__construct('GET');
			
			$latest_id = $_GET['i'];
			$s = $this->shouts($this->mysqli);
			if(!$s->isValidShout($latest_id)){
				die('error');
			}
			if($this->loginCheck()){
				// Check if new reply
				if(($new_ids = $s->isNewShout($latest_id))){
					
					require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
					$parser = new \JBBCode\Parser();
					$parser->addCodeDefinitionSet(new \JBBCode\ShoutBoxDefinitionSet());
					
					if(($shouts = $s->returnShouts($new_ids))){
						$html = '';
						foreach($shouts as &$shout){
							$parser->parse(htmlspecialchars($shout['message'], ENT_QUOTES));
							$shout['message'] = $this->singleTags($parser->getAsHtml());
							$html .= '<li><div id="msg_'.$shout['id'].'" class="c_message c_new" style="background-color:rgb(244,168,61)"><a href="http://techberry.org/user/'.$shout['username'].'/" class="miniprofile" data-user="'.$shout['username'].'"><span class="avatar c_avatar"><img title="'.$shout['username'].'" onerror="this.src=avatarLoadError()" src="'.$shout['avatar'].'" width="25px" height="25px"></span></a>'.$shout['message'].'</div></li>';
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
		}
		/*
		BBCode replacements for single tags
		FUNCTION IS ALSO IN CLASS.CONTENT.PHP
		*/
		public function singleTags($input)
		{
			$output = str_replace('[hr]', '<hr>', $input);
			$output = str_replace('[br]', '<br>', $output);
			$output = preg_replace_callback('/ #(\w+)/', array(
				$this,
				'handle_hashTag'
			), $output);
			$output = preg_replace_callback('/ @(\w+)/', array(
				$this,
				'handle_atSign'
			), $output);
			return $output;
		}
		function handle_hashTag($match)
		{
			return ' <a class="default" href="http://techberry.org/search/?q=' . htmlentities($match[1]) . '">#' . htmlentities($match[1]) . '</a>';
		}
		function handle_atSign($match)
		{
			return ' <a class="default" href="http://techberry.org/user/' . htmlentities($match[1]) . '/">@' . htmlentities($match[1]) . '</a>';
		}
	}
	$sb = new shoutbox();
?>