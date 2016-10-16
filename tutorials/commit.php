<?php
	namespace techberry\tuts\commit;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class commit extends auth{
		public $group_id;
		public $chapter_id;
	
		function __construct(){
			die('sorry D:');
			$this->group_id = isset($_GET['group_id']) ? $_GET['group_id'] : null;
			$this->chapter_id = isset($_GET['chapter_id']) ? $_GET['chapter_id'] : null;
			parent::__construct('GET');
			if($this->isTokenValid){
				if($group_id && $chapter_id){
					if($chapter = $this->getTutorialChapter($group_id,$chapter_id)){
						if($chapter['pending']===0){
							echo 'made it';
						}else{
							$this->notifyClass()->source()->type('error')->errorno("0x1")->msg("This chapter is already active")->page("login.php")->process();
							header('Location: http://techberry.org/tuts/');
						}
					}else{
						$this->notifyClass()->source()->type('error')->errorno("0x1")->msg("Unable to find this chapter")->page("login.php")->process();
						header('Location: http://techberry.org/tuts/');
					}
				}else if($group_id && !$chapter_id){
					if($group = $this->getTutorialGroup($group_id)){
						if($group['pending']===0){
							echo 'made it 2';
						}else{
							$this->notifyClass()->source()->type('error')->errorno("0x1")->msg("This group is already active")->page("login.php")->process();
							header('Location: http://techberry.org/tuts/');
						}
					}else{
						$this->notifyClass()->source()->type('error')->errorno("0x1")->msg("Unable to find this group")->page("login.php")->process();
						header('Location: http://techberry.org/tuts/');
					}
				}else{
					$this->notifyClass()->source()->type('error')->errorno("0x1")->msg("Invalid request")->page("login.php")->process();
					header('Location: http://techberry.org/tuts/');
				}
			}else{
				// Unable to validate token
				$this->notifyClass()->source()->type('error')->errorno("0x1")->msg("Unable to validate your request")->page("login.php")->process();
				header('Location: http://techberry.org/tuts/');
			}
		}

	}
	$l = new commit();
?>