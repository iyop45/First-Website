<?php

namespace techberry\core;

require_once("class.constants.php");
require_once('lib/PhpConsole/__autoload.php');
require( 'lib/php_error.php' );
	
use techberry\core\constants as constants;

class databaseController extends constants{
	public $mysqli;
	
	private $permissionClass;
	private $user_id;
	
	public $debugArray;
	public $notifyError = array();
	
	function __construct(){
		// \php_error\reportErrors();
	
		$connector = \PhpConsole\Connector::getInstance();
		$connector->setPassword('tomato45', true);
		$connector->getDebugDispatcher()->detectTraceAndSource = true;
		
		// Call debug from global PC class-helper (most short & easy way)
		\PhpConsole\Helper::register(); // required to register PC class in global namespace, must be called only once
	
		// Trace debug call
		\PC::getConnector()->getDebugDispatcher()->detectTraceAndSource = true;
		$handler = \PhpConsole\Handler::getInstance();
		$handler->start(); // start handling PHP errors & exceptions
		$handler->getConnector()->setSourcesBasePath($_SERVER['DOCUMENT_ROOT']); // so files paths on client will be shorter (optional)
		
		// Configure eval provider
		$evalProvider = $connector->getEvalDispatcher()->getEvalProvider();
		$evalProvider->addSharedVar('post', $_POST); // so "return $post" code will return $_POST
		$evalProvider->setOpenBaseDirs(array(__DIR__)); // see http://php.net/open-basedir

		$connector->startEvalRequestsListener(); // must be called in the end of all configurations
		$this->mysqli = new \mysqli(
			self::ROOT_DBHOST,
			self::ROOT_DBUSER,
			self::ROOT_DBPASS,
			self::ROOT_DBNAME);	
		if(mysqli_connect_errno()){
			printf("DB error: %s", mysqli_connect_error());
			exit();
		}
		$this->debugArray = array();
	}
	
	public function forum(){
		require_once self::ROOTPATH.'class.process.forum.php';
		return new \techberry\forum\process($this->mysqli);
	}
	
	public function news(){
		require_once self::ROOTPATH.'class.process.news.php';
		return new \techberry\news\process($this->mysqli);
	}
	
	public function userActions(){
		require_once self::ROOTPATH.'class.user.actions.php';
		return new \techberry\user\actions($this->mysqli);
	}
	
	public function userLookups(){
		require_once self::ROOTPATH.'class.user.lookups.php';
		return new \techberry\user\lookups($this->mysqli);
	}	
	
	public function follow(){
		require_once self::ROOTPATH.'class.follow.php';
		return new \techberry\core\follow($this->mysqli);
	}
	
	public function messages(){
		require_once self::ROOTPATH.'class.messages.php';
		return new \techberry\core\messages($this->mysqli);
	}
	
	public function shouts(){
		require_once self::ROOTPATH.'class.shouts.php';
		return new \techberry\core\shouts($this->mysqli);
	}	
	
	public function questions(){
		require_once self::ROOTPATH.'class.questions.php';
		return new \techberry\core\questions($this->mysqli);
	}
	// Permission method is in authentication class..
}
?>