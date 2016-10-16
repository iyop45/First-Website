<?php
	header("Content-type: application/json; charset: UTF-8");
	
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$tpl = new Smarty;
	
	$tpl->assign("apiVersion","v1");
	$tpl->assign("basePath","http://techberry.org/docs/");
	
	$apiRoutes = array(
						array(
							'name'=>'users',
							'description'=>'Search users on this site'
							  )
					   );
	
	$tpl->assign("apiRoutes",$apiRoutes);
	
	$tpl->display('templates/docs.json.tpl');
?>