<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class bugReport extends auth
{
	function __construct(){
		parent::__construct();
		if(isset($_POST['screenshot'],$_POST['description'])){
			$filePath = 'images/bugs/';
			$fileName = md5(date('m-d-Y_hia'));
		
			if (function_exists('mb_strlen')){
				$fileSize = mb_strlen($_POST['screenshot'], '8bit');
			}else{
				$fileSize = strlen($_POST['screenshot']);
			}
			
			
			if($fileSize < 1000000){ // Less than 1MB
				
				if($stmt = $this->mysqli->prepare("INSERT INTO admin_bugReports (fileName, description) VALUES(?,?)")){
					$stmt->bind_param('ss',$fileName,$_POST['description']);
					$stmt->execute();
					$stmt->close();
				
					$img = str_replace('data:image/png;base64,', '', $_POST['screenshot']);
					$img = str_replace(' ', '+', $img);
					file_put_contents($filePath.$fileName.'.png', base64_decode($img));
					die('1');
				}else{
					die('0');
				}
				
				die($fileName);
			
			}else{
				die('0');
			}
		}else{
			die('0');
		}
	}
}
$bR = new bugReport();
?>