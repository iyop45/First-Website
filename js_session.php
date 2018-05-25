<?php
	header('Content-Type: image/gif');
	//equivalent to readfile('pixel.gif')
	echo "\x47\x49\x46\x38\x37\x61\x1\x0\x1\x0\x80\x0\x0\xfc\x6a\x6c\x0\x0\x0\x2c\x0\x0\x0\x0\x1\x0\x1\x0\x0\x2\x2\x44\x1\x0\x3b";
	if(isset($_GET['withJavascript']) && $_GET['withJavascript']==1){
		$_SESSION['hasEnabledJavaScript']=1;
	}else{
		$_SESSION['hasEnabledJavaScript']=0;
	}
?>