<?php
	namespace techberry\core;
	
	require("class.authentication.php");

	use techberry\core\authentication as auth;

	class loginStatus extends auth{
		function __construct(){
			parent::__construct();
			self::loginStatus();
		}
		
		private function loginStatus(){
			parent::__construct('GET');
			if($this->isTokenValid){
				if($this->loginCheck()){
					echo '1';
				}else{
					echo '0';
				}
			}
		}
	}
	$l = new loginStatus();
?>