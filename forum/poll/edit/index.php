<?php
	namespace techberry\forum\poll;
	
	require("/home/content/99/11499199/html/class.content.php");
	
	/*
	*  Considering deadlocks and infinite while loops
	*  long polling has since been scratched for short
	*  polling
	*  WE DON'T CARE ABOUT THE TOKEN
	*/
	
	$c = new \techberry\content;
	$c->cq->forum();
	
	$types = array('reply','post','topic','category');
	if(isset($_GET['type'],$_GET['id'],$_GET['timeSinceLoad']) && in_array($_GET['type'],$types)){
		if($c->cq->forumClass->exists($_GET['type'],$_GET['id'])){
			if($c->cq->forumClass->isNewEdit($_GET['type'],$_GET['id'],$_GET['timeSinceLoad'])){
				die('true');
			}else{
				die('false');
			}
		}
	}
	die('sdfdf');
	die('false');
?>