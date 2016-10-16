<?php
	require("/home/content/99/11499199/html/class.crawler.php");

	class crawl extends \techberry\core\crawler{
		function __construct(){
			//die();
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
			$this->url('http://www.reddit.com/.rss')
				 ->type('reddit')
				 ->username('reddit')
				 ->start();
			$this->url('http://newsfeed.time.com/tag/4chan/feed/')
				  ->type('4chan')
				  ->username('4chan')
				  ->start();
			$this->url('http://9gag-rss.com/api/rss/get?code=9GAG&format=2')
				 ->type('9gag')
				 ->username('9gag')
				 ->start();
			$this->url('http://gdata.youtube.com/feeds/base/users/YouTube/uploads?alt=rss&v=2&orderby=published&client=ytapi-youtube-profile')
				 ->type('youtube')
				 ->username('youtube')
				 ->start();
			$this->url('http://gdata.youtube.com/feeds/base/users/TheBestVines/uploads?alt=rss&v=2&orderby=published&client=ytapi-youtube-profile')
				 ->type('youtube')
				 ->username('vine')
				 ->start();
		}
	}
	$crawl = new crawl();
?>