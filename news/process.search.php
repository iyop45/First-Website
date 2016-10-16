<?php
	namespace techberry\get\newsSearch;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class newsSearch extends auth{
		private $search_query;
		private $data;
		function __construct(){
			parent::__construct('GET');
			$this->search_query = isset($_GET['q']) ? $_GET['q'] : null;
			if($this->isTokenValid){
				if($this->searchResults())
				{
					if(empty($this->data) || !is_array($this->data))
					{
						// No results returned
						echo "<span>No results returned</span>";
					}
					else
					{
						$this->renderContent();
					}
				}
				else
				{
					// Failed to prepare query
					echo "<span>An error has occurred</span>";
				}
			}else{
				// Token is not set or is invalid
				echo "<span>Invalid token</span>";
			}
		}
		
		private function renderContent(){
			foreach($this->data as $d){
				$truncatedTitle = substr($d['title'],0,30)."...";
				echo '<li>
								<div class="n_thumbnail">
									<img width="70" height="70" src="'.$d['image'].'">
								</div>
								<div class="n_right">
									<h5>
										<a href="http://techberry.org/news/n='.$d['id'].'/">
											'.$truncatedTitle.'
										</a>
									</h5>
								</div>
								<div class="n_popularity" data-ot="Popularity">
									<div style="width:80%"></div>
								</div>
							</li>';
			}
		}
		
		private function searchResults()
		{
			if($stmt = $this->mysqli->prepare("
				SELECT  n.id,
						n.title,
						n.image
						FROM news_articles as n
						WHERE n.title LIKE ?
						ORDER BY n.date DESC
						LIMIT 10")){
				$likeString = '%' . $this->search_query . '%';
				$stmt->bind_param('s',$likeString);
				$stmt->execute();
				$stmt->bind_result($id,$title,$image);
				$this->data = array();
				while($stmt->fetch()){
					$this->data[] = array(
										'id'=>$id,
										'title'=>$title,
										'image'=>$image
									);
				}
				$stmt->close();
				return true;
			}else{
				return false;
			}
		}
	}
	$nS = new newsSearch();
?>