<?php
	namespace techberry\post;
	
	require("class.authentication.php");

	use techberry\core\authentication as auth;

	class invert extends auth{
		function __construct(){
			parent::__construct('GET');
			$redirect = $this->validateRedirect($_SERVER['HTTP_REFERER']);
			if($this->isTokenValid === true){
				if(isset($_COOKIE['invert'])){
					if($_COOKIE['invert']==0){
						setcookie(
							"invert",
							1,
							time() + (10 * 365 * 24 * 60 * 60)
						);
					}else{
						setcookie(
							"invert",
							0,
							time() + (10 * 365 * 24 * 60 * 60)
						);
					}
				}else{
					setcookie(
						"invert",
						1,
						time() + (10 * 365 * 24 * 60 * 60)
					);
				}
				header('Location: '.$redirect);
			}else{
				header('Location: '.$redirect);
			}
		}
	}
	$i = new invert();
?>