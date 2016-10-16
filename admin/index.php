<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('admin','default');

$tpl->assign("homeTab",true);
// Head variables
$inlineScript = "";
$inlineCSS = "
#g_f_w{margin: 0 !important;}
.task-wrap{width:800px;font: normal 14px 'Open Sans', Arial, sans-serif;color: #999;margin:0 auto;}.task-list{width:88%;min-height:300px;background:#fff;box-shadow:2px 2px 0 #ddd;margin-top:40px;padding:22px 6%}.task-list li{font-size:1.2em;padding:8px 0;overflow:hidden}.task-list li span{width:86%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;float:left}.task-list li .delete-button{width:10px;height:auto;padding-top:7px;float:right;vertical-align:top;opacity:.5;cursor:pointer}.task-list li .delete-button:hover{opacity:.85}.add-new-task{margin-top:20px;padding-bottom:60px}.add-new-task input[type='text']{width:100%;font:normal 1.2em 'Open Sans',Arial,sans-serif;color:#999;box-shadow:2px 2px 0 #ddd;border:none;border-radius:none;display:block;padding:12px 6%;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
";

if(!$c->isLoggedIn){
	// Must be logged in
	$c->notify->source()->type('error')->msg("You must be logged in ")->process();
	$continue = base64_encode('http://techberry.org/admin/');
	header('Location: http://techberry.org/login.php?continue='.$continue);
}else{
	if($_SESSION['group_id'] < 5){
		$tpl->display('/home/content/99/11499199/html/templates/pages/403.tpl');
		die();
	}
}
$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("endOfHead","");

$tpl->assign("startOfBody","");
$tpl->assign("footerText","Access tools and platforms for basic programming through to maintaining large applications and programs. We strive to make a strong and collaborative community of active and willing programmers of experience within all areas of computing. I am always looking to add new features that will open up programming to more people and make learning a new language easy.");
$tpl->assign("endOfBody","");

$tpl->assign("withTopPadding",false);
$tpl->assign("withSidePadding",false);

// Just for this page
if(isset($_GET['view'])){
	switch($_GET['view']){
		// Root
		case 'account':
			$tpl->assign("adminAccountTab",true);
			$tpl->display('/home/content/99/11499199/html/admin/templates/account.tpl');	
			break;
		case 'maintenance':
			$tpl->assign("adminMaintenanceTab",true);
			if($_SESSION['group_id'] < 7){
				$tpl->display('/home/content/99/11499199/html/admin/templates/403.tpl');
				die();
			}	
			$id = substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,50 ) ,1 ) .substr( md5( time() ), 1);
			$tpl->assign("textareaID",$id);
			$tpl->display('/home/content/99/11499199/html/admin/templates/maintenance.tpl');
			break;
		case 'sessions_debug':
			$tpl->assign("adminSessionsDebugTab",true);
			if($_SESSION['group_id'] < 7){
				$tpl->display('/home/content/99/11499199/html/admin/templates/403.tpl');
				die();
			}	
			ob_start();
			\techberry\dump($_SESSION);
			$sessions = ob_get_clean();
			$tpl->assign('sessions_debug',$sessions);
			$tpl->display('/home/content/99/11499199/html/admin/templates/sessions_debug.tpl');
			break;	
		case 'sql-queries':
			$tpl->assign("sqlQueriesTab",true);
			if($_SESSION['group_id'] < 7){
				$tpl->display('/home/content/99/11499199/html/admin/templates/403.tpl');
				die();
			}
			$tpl->assign("title", file_get_contents('http://loripsum.net/api/1/short/headers/plaintext'));
			$tpl->assign("content", file_get_contents('http://loripsum.net/api/5/short/headers/plaintext'));
			
			$tpl->display('/home/content/99/11499199/html/admin/templates/sql-queries.tpl');
			break;
		case 'db-mapper':
			$tpl->assign("dbMapperTab",true);
			if($_SESSION['group_id'] < 7){
				$tpl->display('/home/content/99/11499199/html/admin/templates/403.tpl');
				die();
			}
			define('externalAccess', TRUE);
			ob_start();
			require('db-mapper.php');
			$svg = ob_get_clean(); 
			$tpl->assign("svg", $svg);
			
			$tpl->display('/home/content/99/11499199/html/admin/templates/db-mapper.tpl');
			break;
		case 'links':
			$tpl->assign("linksTab",true);
			if($_SESSION['group_id'] < 7){
				$tpl->display('/home/content/99/11499199/html/admin/templates/403.tpl');
				die();
			}	
			$tpl->display('/home/content/99/11499199/html/admin/templates/links.tpl');
			break;
		
		
		// Administrators
		case 'checklist':
			$tpl->assign("adminCheckListTab",true);
			if($_SESSION['group_id'] < 6){
				$tpl->display('/home/content/99/11499199/html/admin/templates/403.tpl');
				die();
			}
			$result = $c->mysqli->query('SELECT id,task FROM admin_checklist ORDER BY date DESC LIMIT 100');
			$list = '<div class="task-wrap"><div class="task-list"><ul>';
			while ($row = $result->fetch_assoc()) {
				$list .= '<li>
							<span>'.$row['task'].'</span>
							<img id="'.$row['id'].'" class="delete-button" width="10px" src="images/close.svg" />
						</li>';
			}
			$list .= '</ul></div></div>';
			$tpl->assign("list",$list);
			$tpl->display('/home/content/99/11499199/html/admin/templates/checkList.tpl');					
			break;
		case 'users':
			$tpl->assign("adminUsersTab",true);
			if($_SESSION['group_id'] < 6){
				$tpl->display('/home/content/99/11499199/html/admin/templates/403.tpl');
				die();
			}
			$tpl->display('/home/content/99/11499199/html/admin/templates/users.tpl');		
			break;
		case 'statistics':
			$tpl->assign("adminStatisticsTab",true);
			if($_SESSION['group_id'] < 6){
				$tpl->display('/home/content/99/11499199/html/admin/templates/403.tpl');
				die();
			}
			$tpl->display('/home/content/99/11499199/html/admin/templates/statistics.tpl');		
			break;
		case 'bugs':
			$tpl->assign("adminBugsTab",true);
			if($_SESSION['group_id'] < 6){
				$tpl->display('/home/content/99/11499199/html/admin/templates/403.tpl');
				die();
			}
			if($stmt = $c->mysqli->prepare("SELECT id,fileName,description FROM admin_bugReports
																ORDER BY date DESC LIMIT 100")){
				$stmt->bind_result($id,$fileName,$description);
				$stmt->execute();
				$bugs = array();
				while($stmt->fetch()){
					$bugs[] = array(
											'id'=>$id,
											'fileName'=>$fileName,
											'description'=>$description,
											);
				}
				$stmt->close();
				$tpl->assign("bugs",$bugs);
			}else{
				die();
			}
			$tpl->display('/home/content/99/11499199/html/admin/templates/bugs.tpl');		
			break;
			
		// Moderators
		case 'announcements':
			$tpl->assign("adminAnnouncementsTab",true);
			$tpl->display('/home/content/99/11499199/html/admin/templates/announcements.tpl');		
			break;	
		case 'forum':
			$tpl->assign("adminForumTab",true);
			$tpl->display('/home/content/99/11499199/html/admin/templates/forum.tpl');		
			break;	
		case 'logs':
			include('../logs.php');
			$tpl->assign("adminLogsTab",true);
			$tpl->assign("logs",$logs);
			$tpl->display('/home/content/99/11499199/html/admin/templates/logs.tpl');		
			break;		
		default:
			$tpl->assign("adminAnnouncementsTab",true);
			$tpl->display('/home/content/99/11499199/html/admin/templates/announcements.tpl');	
	}
}else{
	$tpl->assign("adminAnnouncementsTab",true);
	$tpl->display('/home/content/99/11499199/html/admin/templates/announcements.tpl');	
}
?>