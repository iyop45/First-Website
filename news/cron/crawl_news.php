<?php
	namespace techberry\news\crawl_news;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class crawl_news extends auth{
		function __construct(){
			parent::__construct();
			if(php_sapi_name() == 'cli' || empty($_SERVER['REMOTE_ADDR'])){
				// Executed through cron jobs
			}else{
				// Executed through browser
				// So cease execution
				if (!$this->loginCheck())
				{
					die();
				}
				else
				{
					if($_SESSION['group_id'] < 7)
					{
						die();
					}
				}
			}
			$feed_url=("http://feeds.bbci.co.uk/news/technology/rss.xml");

			$content = file_get_contents($feed_url);
			$x = new \SimpleXmlElement($content);
			$articles = array();
			foreach($x->channel->item as $entry){
				$hlp = $entry->xpath('media:thumbnail[2]');
				$articles[] = array(
								'link'=>$entry->link,
								'title'=>$entry->title,
								'description'=>$entry->description,
								'thumbnail'=>$hlp[0]['url']
								);
			}
			// No need to double check duplicates as `reference`
			// is a unique collumn
			$sql = 'INSERT INTO news_articles (content,reference,image,title) ';
			$i = 0;
			$len = count($articles);
			foreach($articles as $article){
				$description = addslashes(htmlentities($article['description']));
				$link = addslashes(htmlentities($article['link']));
				$thumbnail = addslashes(htmlentities($article['thumbnail']));
				$title = addslashes(htmlentities($article['title']));
				if($i == 0){
					// First article
					$sql .= "VALUES ('$description','$link','$thumbnail','$title')";
				}else{
					$sql .= ", ('$description','$link','$thumbnail','$title')";
				}$i++;
			}
			if($stmt = $this->mysqli->prepare($sql)){
				$stmt->execute();
				$stmt->close();
				echo 1;
			}else{
				echo 2;
			}
		}
	}
	$cN = new crawl_news();
?>