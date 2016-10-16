<?php
	namespace techberry\user;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class friends_list extends auth{
		function __construct(){
			parent::__construct('GET');
			if($this->isTokenValid){
				if($this->loginCheck()){
					$f = $this->follow();
					$online_following = $f->onlineFollowing($_SESSION['user_id']);
					if(isset($online_following['error'])){
						echo '<ul class="im_warning"><li>'.$online_following['error'].'</li>';
					}else{
						echo '<ul class="im_users">';
						foreach($online_following['success'] as $of){
							echo '<li><span onclick="parent.im(\''.$of['username'].'\')" class="username">'.$of['username'].'</a></li>';
						}
					}
				}else{
					echo '<ul class="im_warning"><li>Must be logged in</li>';
				}
			}else{
				echo '<ul class="im_warning"><li>Invalid request</li>';
			}
			echo '</ul><!--<input type="text" id="im_search" placeholder="Search..."/>-->';
		}
		private function niceTime($time){
			$time = time() - $time; // to get the time since that moment
			$tokens = array (
				31536000 => 'year',
				2592000 => 'month',
				604800 => 'week',
				86400 => 'day',
				3600 => 'hour',
				60 => 'minute',
				1 => 'second'
			);
			foreach ($tokens as $unit => $text) {
				if ($time < $unit) continue;
				$numberOfUnits = floor($time / $unit);
				return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'').' ago';
			}
		}
	}
	$n = new friends_list();
?>