<?php
	namespace techberry\forum\poll;

	require("/home/content/99/11499199/html/class.content.php");
	/*
	*  Considering deadlocks and infinite while loops
	*  long polling has since been scratched for short
	*  polling
	*/
	$c = new \techberry\content;
	$c->cq->forum();
	
	$types = array('reply','post','topic','category');
	if(isset($_GET['type'],$_GET['token'],$_GET['time']) && in_array($_GET['type'],$types)){
		die($_GET['id']);
		if($_GET['type']=='category'){
			if($c->cq->forumClass->isNew($_GET['type'],$_GET['id'],$_GET['time'])){
				die('true');
			}else{
				die('false');
			}		
		}
		else
		{
			if($c->cq->forumClass->exists($_GET['type'],$_GET['id'])){
				if($c->cq->forumClass->isNew($_GET['type'],$_GET['id'],$_GET['time'])){
					die('true');
				}else{
					die('false');
				}
			}		
		}
	}
	die('sdffds');
	die('false');
?>