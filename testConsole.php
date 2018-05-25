<?php
	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('testConsole','default');
	
if(!$c->isLoggedIn){
	// Must be logged in
	$c->notify->source()->type('error')->msg("You must be logged in ")->process();
	$continue = base64_encode('http://techberry.org/testConsole.php');
	header('Location: http://techberry.org/login.php?continue='.$continue);
}

if($_SESSION['group_id']  < 6){
	// Must be an administrator or higher
	$tpl->display('/home/content/99/11499199/html/templates/pages/403.tpl');
	exit;
}
	
	require_once('/home/content/99/11499199/html/unit_testing/autorun.php');
	require_once('/home/content/99/11499199/html/unit_testing/web_tester.php');
	
	$id = substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,50 ) ,1 ) .substr( md5( time() ), 1);
	$tpl->assign("textareaID",$id);
	
	// Head variables
	$inlineScript = false;
	$inlineCSS = false;

	$tpl->assign("inlineScript",$inlineScript);
	$tpl->assign("inlineCSS",$inlineCSS);

	$tpl->assign("cssLinks",array());
	$tpl->assign("javaScriptLinks",array());

	$tpl->assign("withTopPadding",true);
	$tpl->assign("withSidePadding",true);
	$tpl->assign("disableFooter",true);
	class userChecks extends WebTestCase{
		function testloginWithCorrectCredentials(){
			$this->post(
					'http://techberry.org/process.login.php',
					array(
						'email' => 'test@test.com',
						'p' => hash('sha512','fgjkhk54h6jgjygjhb4j3')
						));
			// The username of the account is displayed at the top
			$this->assertText('test'); 
			$this->click('Logout');
			$this->assertText('Sign in');
		}
	}
	class userOnlyPagesChecks extends WebTestCase{
		function testUsersOnlyForShoutBox(){
			$this->get('http://techberry.org/chat/');
			$this->assertText('Must be logged in to continue');
		}
		function testUsersOnlyForStatisticsOnePage(){
			$this->get('http://techberry.org/statistics/');
			$this->assertText('Must be logged in to continue');
		}
		function testUsersOnlyForStatisticsHistory(){
			$this->get('http://techberry.org/statistics/history.php');
			$this->assertText('Must be logged in to continue');
		}
		function testUsersOnlyForStatisticsVisitors(){
			$this->get('http://techberry.org/statistics/visitors.php');
			$this->assertText('Must be logged in to continue');
		}
		function testUsersOnlyForTestConsole(){
			$this->get('http://techberry.org/testConsole.php');
			$this->assertText('Must be logged in to continue');
		}
	}
	/*class generalPageContentChecks extends WebTestCase{
		function test404NotFoundPage(){
			$this->get('http://techberry.org/_thispagedoesnotexist_'.$id);
			$this->assertText('ERROR 404');
			$this->assertResponse(404);
		}
	}*/
	/*
	class changingThemesCheck extends WebTestCase{
		function testRedTheme(){
			$this->get('http://techberry.org/testConsole.php');
			$this->assertCookie('theme', 'red');
		}
		function testGreenTheme(){
			$this->get('http://techberry.org/testConsole.php');
			$this->assertCookie('theme', 'green');
		}
		function testBlueTheme(){
			$this->get('http://techberry.org/testConsole.php');
			$this->assertCookie('theme', 'blue');
		}
		function testYellowTheme(){
			$this->get('http://techberry.org/testConsole.php');
			$this->assertCookie('theme', 'yellow');
		}
		function testPurpleTheme(){
			$this->get('http://techberry.org/testConsole.php');
			$this->assertCookie('theme', 'purple');
		}
	}
	*/
	$tpl->display('/home/content/99/11499199/html/templates/pages/testConsole.tpl');
?>