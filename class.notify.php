<?php

namespace techberry\core;

class notify
{
	public $errorno;
	public $type;
	public $msg;
	public $page;
	
	public function source()
	{
		
		$this->errorno = array();
		$this->type = array();
		$this->msg = array();
		$this->page = array();
		
		return $this;
		
	}
	
	public function process()
	{
		$types = array('error','log','success');
		foreach($types as $n){
			// Loop through every type of
			// notification, if session
			// is not an array, it hasn't been set
			
			if(!is_array($_SESSION[$n])){
				$_SESSION[$n] = array();
			}
		}
		for($i=0;$i<count($this->msg);$i++){
			$_SESSION[$this->type[$i]][] = $this->msg[$i];
		}
	}
	public function errorno($error)
	{
		$this->errno[] = $error;
		return $this;
	}
	public function type($type)
	{
		$this->type[] = $type;
		return $this;
	}
	public function msg($msg)
	{
		$this->msg[] = $msg;
		return $this;
	}
	public function page($page)
	{
		$this->page[] = $page;
		return $this;
	}
	
	public function timer($timeToWait)
	{
		$this->source()
			  ->type('log')
			  ->msg("You must wait for $timeToWait seconds")
			  ->process();
	}
}
?>