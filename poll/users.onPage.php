<?php
	namespace techberry\poll;
	
	require("/home/content/99/11499199/html/class.databaseController.php");

	use techberry\core\databaseController as dbc;

	class onPage extends dbc{
		private $page;
		function __construct(){
			parent::__construct();
			$this->page = isset($_GET['page']) ? base64_decode($_GET['page']) : null;
			if(!$this->page)
			{
				die('error');
			}
			$l = $this->userLookups();
			$users = $l->getActiveUsersOnPage($this->page);
			if($users)
			{
				die(json_encode($users));
			}
			else
			{
				die('false');
			}
		}
	}
	$op = new onPage();
?>