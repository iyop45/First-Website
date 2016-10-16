<?php
	namespace techberry\user;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class notifications extends auth{
		function __construct(){
			parent::__construct('GET');
			echo "<ul id='notification_list'>
						<div class='notification_title'>
							<span class='notification_main_link'>";
							if(isset($_GET['wTitle']))
							{
								if($_GET['wTitle'] == 1)
								{
									echo "<a href='http://techberry.org/account/notifications/' style='-webkit-font-smoothing:antialiased;font:13px Roboto,arial,sans-serif;color:#404040;text-decoration:none;font-weight:700' target='_parent'>
											Techberry notifications
										</a>
									</span>";
								}
							}
			if($this->isTokenValid){
				if($this->loginCheck()){
					$n = $this->userLookups($this->mysqli);
					if(($notifications = $n->userNotifications())){
						echo "<a href='http://techberry.org/frames/remove.user.notification.php?token=".$_GET['token']."&id=0' class='notification_remove_all' title='Remove all'>&#10006;</a></div>";
						foreach($notifications as $notification){
							echo '<li>
									'.$notification['type'].'
									<div class="notification_header">
										<span class="notification_date">'.$this->niceTime(strtotime($notification['date'])).'</span>
										<span class="notification_remove">
											<a href="http://techberry.org/frames/remove.user.notification.php?token='.$_GET['token'].'&id='.$notification['id'].'">remove</a>
										</span>
									</div>
									<div class="notification_content">
										<span class="notification_message">'.$notification['content'].'</span>';
									if($notification['points']!=0){
										if($notification['points']>0){
											echo '<span class="notification_points notification_plus">+'.$notification['points'].'</span>';
										}else{
											echo '<span class="notification_points notification_minus">-'.$notification['points'].'</span>';
										}
									}
							echo	'</div>
								 </li>';
						}
					}else{
						echo '</div>'; // Close notification_title div
						echo '<li><div class="notification_content">No available notifications</div></li>';
					}
				}else{
					echo '<li><div class="notification_content">Must be logged in</div></li>';
				}
			}else{
				echo '<li><div class="notification_content">Invalid request</div></li>';
			}
			echo '</ul>';
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
	$n = new notifications();
?>