<?php
	namespace techberry\get\rankingSearch;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class rankingSearch extends auth{
		private $search_query;
		private $data;
		function __construct(){
			parent::__construct('GET');
			$this->search_query = isset($_GET['q']) ? $_GET['q'] : null;
			if($this->isTokenValid){
				$this->content="empty";
				if($this->searchResults())
				{
					if(empty($this->data) || !is_array($this->data))
					{
						// No results returned
						echo "<center style='margin-top:10px'>No results returned</center>";
					}
					else
					{
						$this->renderContent();
					}
				}
				else
				{
					// Failed to prepare query
					echo "<center style='margin-top:10px'>An error has occurred</center>";
				}
			}else{
				// Token is not set or is invalid
				echo "<center style='margin-top:10px'>Invalid token</center>";
			}
		}
		
		private function renderContent(){
			foreach($this->data as $d){
				echo '<tr>
							<td>
								<div class="r_avatar">
									<a href="http://techberry.org/user/'.$d['username'].'/" class="miniprofile" data-user="'.$d['username'].'">
										<img src="'.$d['avatar'].'"  onerror="avatarLoadError(this)" style="float:left" height="50" width="50"/>
									</a>
								</div>
							</td>
							<td style="vertical-align:middle">
								<p style="margin-left:3px;font-weight:bolder;margin-bottom:5px">
									<a href="http://techberry.org/user/'.$d['username'].'/" class="default">'.$d['username'].'</a>
									&nbsp;('.$d['reputation'].')
								</p>
								<div style="float:left">
									<span class="badge3"></span>
									<span class="item-multiplier">'.$d['bronze_count'].'</span>
									<span class="badge2"></span>
									<span class="item-multiplier">'.$d['silver_count'].'</span>
									<span class="badge1"></span>
									<span class="item-multiplier">'.$d['gold_count'].'</span>
								</div>
							</td>';
					if($d['is_bot']==1){
						echo '<td class="isBot tooltipWiki r_isBot" data-v="user:bot">&nbsp;bot&nbsp;</td>';
					}else{
						echo '<td data-ot="'.$d['username'].' is '.$d['online_status'].'" class="r_user_online_status '.$d['online_status'].'"></td>';
					}
			echo '</tr>';
			}
		}
		
		private function searchResults()
		{
			if ($stmt = $this->mysqli->prepare("
					SELECT m.id,
						   m.username,
						   IF(LENGTH(m.avatar) > 0, m.avatar , CONCAT('http://vanillicon.com/',md5(m.email))),
						   IF(m.last_active < (NOW() - INTERVAL 1 MINUTE), 'offline', 'online'),
								(SELECT
									COUNT(*) FROM user_badges AS uba
										INNER JOIN badges AS ba
										 ON(ba.id = uba.id_badge)
										WHERE uba.user_id = m.id
										AND ba.value = 3) AS bronze_count,
								(SELECT
									COUNT(*) FROM user_badges AS ubb
										INNER JOIN badges AS bb
										 ON(bb.id = ubb.id_badge)
										WHERE ubb.user_id = m.id
										AND bb.value = 2) AS silver_count,
								(SELECT
									COUNT(*) FROM user_badges AS ubc
										INNER JOIN badges AS bc
										 ON(bc.id = ubc.id_badge)
										WHERE ubc.user_id = m.id
										AND bc.value = 1) AS gold_count,
							m.reputation,
							m.is_bot,
							(SELECT COUNT(*) FROM user_follows WHERE followed = m.id) AS numberOfFollowers
							FROM users AS m
							WHERE m.username LIKE ?
							LIMIT 50"))
			{
				$likeString = '%' . $this->search_query . '%';
				$stmt->bind_param('s',$likeString);
				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result($id, $username, $avatar, $online_status, $bronze_count, $silver_count, $gold_count, $reputation, $is_bot, $numberOfFollowers);
				$this->data  = array();
				while ($stmt->fetch())
				{
					$this->data [] = array(
						'id' => $id,
						'username' => $username,
						'avatar' => $avatar,
						'online_status' => $online_status,
						'bronze_count' => $bronze_count,
						'silver_count' => $silver_count,
						'gold_count' => $gold_count,
						'reputation' => $reputation,
						'is_bot' => $is_bot,
						'numberOfFollowers' => $numberOfFollowers,
					);
				}
				$stmt->close();
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	$rS = new rankingSearch();
?>