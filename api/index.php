<?php
	namespace techberry\api;

	$directoryPath = '/home/content/99/11499199/html/api/';
	
	require("/home/content/99/11499199/html/class.content.php");

	$c = new \techberry\content;

	require '/home/content/99/11499199/html/api/Slim/Slim.php';
	\Slim\Slim::registerAutoloader();
	
	$app = new \Slim\Slim();
	$app->setName('TechBerryV1');
	$version = 'v1';
	
	function toXml($data, $rootNodeName = 'data', $xml=null){
		// turn off compatibility mode as simple xml throws a wobbly if you don't.
		if (ini_get('zend.ze1_compatibility_mode') == 1){
			ini_set ('zend.ze1_compatibility_mode', 0);
		}
		if ($xml == null){
			$xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><$rootNodeName />");
		}
		// loop through the data passed in.
		foreach($data as $key => $value){
			// no numeric keys in our xml please!
			if (is_numeric($key)){
				// make string key...
				$key = "unknownNode_". (string) $key;
			}
			// replace anything not alpha numeric
			$key = preg_replace('/[^a-z]/i', '', $key);
			// if there is another array found recrusively call this function
			if (is_array($value)){
				$node = $xml->addChild($key);
				// recrusive call.
				toXml($value, $rootNodeName, $node);
			}else{
				// add single node.
				$value = htmlentities($value);
				$xml->addChild($key,$value);
			}
		}
		// pass back as string. or simple xml object if you want!
		return $xml->asXML();
	}
	
	// GET route
	$app->get('/', function() use ($app){
		$data = array(
						'error'=>'No parameters supplied, or an outdated version',
						'latest-version'=>$GLOBALS["version"]
					);
		$response = $app->response();
		$response['Content-Type'] = 'application/json';
		$response->body(json_encode($data));
	});
	
	$app->get('/'.$version.'/user/username=(:username)/', 
	function($username='admin') use ($app){
		$u = $GLOBALS['c']->userLookups();
		if(strlen($username) >= 100){$username='admin';}
		if(strlen($username) <= 1){$username='admin';}
		$data = $u->userInfo((string)$username);
		if(isset($_GET['encoding'])){
			$encoding = $_GET['encoding'];
		}else{
			$encoding = 'json';
		}
		$response = $app->response();
		switch($encoding){
			case 'xml':
				$response['Content-Type'] = 'text/xml';
				$response->body(toXml($data));
				break;
			case 'json':
			default:
				$response['Content-Type'] = 'application/json';
				$response->body(json_encode($data));
		}
	});
	
	$app->get('/'.$version.'/user/userid=(:userid)/', 
	function($userid=2) use ($app){
		if(!is_numeric($userid)){$userid=2;}
		$u = $GLOBALS['c']->userLookups();
		$data = $u->userInfo((int)$userid);
		if(isset($_GET['encoding'])){
			$encoding = $_GET['encoding'];
		}else{
			$encoding = 'json';
		}
		$response = $app->response();
		switch($encoding){
			case 'xml':
				$response['Content-Type'] = 'text/xml';
				$response->body(toXml($data));
				break;
			case 'json':
			default:
				$response['Content-Type'] = 'application/json';
				$response->body(json_encode($data));
		}
	});
	
	$app->get('/'.$version.'/user/profile/id=(:id)/', 
	function($id=2) use ($app){
		if(!is_numeric($id)){$id=2;}
		$u = $GLOBALS['c']->userLookups();
		$data = $u->userInfo((int)$id);
		$badgeData = $u->getUserBadgeCounts($data['id']);
		$response = $app->response();
		$response['Content-Type'] = 'text/html';
		$response->body($GLOBALS['c']->embedProfile($data,$badgeData));
	});
	
	$app->get('/'.$version.'/user/profile/username=(:username)/', 
	function($username='admin') use ($app){
		if(strlen($username) >= 100){$username='admin';}
		if(strlen($username) <= 1){$username='admin';}
		$u = $GLOBALS['c']->userLookups();
		$data = $u->userInfo((string)$username);
		$badgeData = $u->getUserBadgeCounts($data['id']);
		$response = $app->response();
		$response['Content-Type'] = 'text/html';
		$response->body($GLOBALS['c']->embedProfile($data,$badgeData));
	});
	
	$app->get('/'.$version.'/user/rankings/', 
	function() use ($app){
		$data = $GLOBALS['c']->cq->userRanking(null);
		if(isset($_GET['encoding'])){
			$encoding = $_GET['encoding'];
		}else{
			$encoding = 'json';
		}
		$response = $app->response();
		switch($encoding){
			case 'xml':
				$response['Content-Type'] = 'text/xml';
				$response->body(toXml($data));
				break;
			case 'json':
			default:
				$response['Content-Type'] = 'application/json';
				$response->body(json_encode($data));
		}
	});
	
	// POST route
	$app->post(
		'/post',
		function () {
			echo 'This is a POST route';
		}
	);

	// PUT route
	$app->put(
		'/put',
		function () {
			echo 'This is a PUT route';
		}
	);

	// PATCH route
	$app->patch('/patch', function () {
		echo 'This is a PATCH route';
	});

	// DELETE route
	$app->delete(
		'/delete',
		function () {
			echo 'This is a DELETE route';
		}
	);
	
	$app->run();
?>