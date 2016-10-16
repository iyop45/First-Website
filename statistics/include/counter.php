<?php
//
// initialization and visitor Information
//
class counter{
	private $mysqli;
	private $db_prefix;
	function __construct($mysqli){
		$this->mysqli = $mysqli;
		$this->db_prefix = 'stats_';
		$this->populate();
	}
	public function populate(){
		/*
			If mysql connection is not
			made then end script
		*/
		if(!$this->mysqli){die();}
		// Date Time
		$time=time();
		$day=date("Y.m.d",$time); // YYYY.MM.DD
		$month=date("Y.m",$time); // YYYY.MM

		// IP adress
		$ip=$_SERVER['REMOTE_ADDR']; 

		// Get Referrer and Page
		if($_GET["ref"] <> "" ){
			// from javascript
			$referer = $_GET["ref"];
			$page = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
		}else{
			// from php
			$referer=$_SERVER['HTTP_REFERER'];
			$page=$_SERVER['PHP_SELF']; // with include via php
		}
		// cleanup
		if(basename($page) == basename(__FILE__)) $page="" ; // count not counter.php

		$server_host=$_SERVER["HTTP_HOST"]; // Server Host
		if(substr($server_host,0,4) == "www.") $server_host=substr($server_host,4); // Server Host without www.

		$referer_host=parse_url($referer, PHP_URL_HOST); // Referrer Host
		if(substr($referer_host,0,4) == "www.") $referer_host=substr($referer_host,4); // Referer Host without www.

		// adjust search engines 
		if(strstr($referer_host, "google.")){
			$referer_query=parse_url($referer, PHP_URL_QUERY);
			$referer_query.="&";
			preg_match('/q=(.*)&/UiS', $referer_query, $keys);
			
			$keyword=urldecode($keys[1]); // These are the search terms
			$referer_host="Google"; // adjust host
		}
		if(strstr($referer_host, "yahoo.")){
			$referer_query=parse_url($referer, PHP_URL_QUERY);
			$referer_query.="&";
			preg_match('/p=(.*)&/UiS', $referer_query, $keys);
			
			$keyword=urldecode($keys[1]); // These are the search terms
			$referer_host="Yahoo"; // adjust host
		}
		if(strstr($referer_host, "bing.")){
			$referer_query=parse_url($referer, PHP_URL_QUERY);
			$referer_query.="&";
			preg_match('/q=(.*)&/UiS', $referer_query, $keys);
			
			$keyword=urldecode($keys[1]); // These are the search terms
			$referer_host="Bing"; // adjust host
		}
		// Language
		$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);

		//
		// Counter
		//

		// delete old IPs
		$earlyYesterday = mktime(0, 0, 0, date(n), date(j), date(Y)) - 48*60*60 ; // 48*60*60 => after 48 hours
		$query = "delete from ".$this->db_prefix."IPs where time<".$earlyYesterday."";
		if($delete=$this->mysqli->prepare("delete from ".$this->db_prefix."IPs where time<?")){
			$delete->bind_param('i',$earlyYesterday);
			$delete->execute();
			$delete->close();
		}else{
			echo"<br>We have experienced an error with our counter. #1"; exit;
		}

		// delete old page,referrer,language and keywords
		$old_day=date("Y.m.d",mktime(0, 0, 0, date("n"), date("j")-$oldentries, date("Y"))); // delete older than $oldentries(config.php) days
		if($delete=$this->mysqli->prepare("delete from ".$this->db_prefix."Page where day<=?")){
			$delete->bind_param('i',$old_day);
			$delete->execute();
			$delete->close();
		}else{
			echo"<br>We have experienced an error with our counter. #1"; exit;
		}
		if($delete=$this->mysqli->prepare("delete from ".$this->db_prefix."Referer where day<=?")){
			$delete->bind_param('i',$old_day);
			$delete->execute();
			$delete->close();
		}else{
			echo"<br>We have experienced an error with our counter. #1"; exit;
		}
		if($delete=$this->mysqli->prepare("delete from ".$this->db_prefix."Keyword where day<=?")){
			$delete->bind_param('i',$old_day);
			$delete->execute();
			$delete->close();
		}else{
			echo"<br>We have experienced an error with our counter. #1"; exit;
		}
		if($delete=$this->mysqli->prepare("delete from ".$this->db_prefix."Language where day<=?")){
			$delete->bind_param('i',$old_day);
			$delete->execute();
			$delete->close();
		}else{
			echo"<br>We have experienced an error with our counter. #1"; exit;
		}

		// insert a new day
		$newDay=$this->mysqli->query("select id from ".$this->db_prefix."Day where day='$day'");
		if(!$newDay) {echo"We have experienced an error with our counter. #3"; exit;}
		if($newDay->num_rows==0){ 
			$this->mysqli->query("insert into ".$this->db_prefix."Day (day, user, view) values ('$day', '0', '0')");
		}
			
		// check reload and set online time
		$newuser=0;
		$oldreload = $time-$reload;
		$closed=$this->mysqli->query("select id from ".$this->db_prefix."IPs where ip='$ip' AND time>'$oldreload' order by id desc limit 1");
		if(!$closed) {echo"We have experienced an error with our counter. #4"; exit;}
		if($closed->num_rows==0){
			// new visitor
			$newuser=1;
			$this->mysqli->query("insert into ".$this->db_prefix."IPs (ip, time, online) values ('$ip', '$time', '$time')");
			$this->mysqli->query("update ".$this->db_prefix."Day set user=user+1, view=view+1 where day='$day'");
		}else{
			// reload visitor
			$closedID=mysql_result($closed,0,0);
			$this->mysqli->query("update ".$this->db_prefix."IPs set online='$time' where id='$closedID'");
			$this->mysqli->query("update ".$this->db_prefix."Day set view=view+1 where day='$day'");
		}

		// Page
		if($page <> ""){
			if($result = $this->mysqli->prepare("SELECT id from ".$this->db_prefix."Page WHERE page=? AND day=?")){
				$result->bind_param('ss',$page,$day);
				$result->execute();
				$result->store_result();
				$result->bind_result($pageid);
				if($result->num_rows==0){
					$result->close();
					if($stmt = $this->mysqli->prepare("insert into ".$this->db_prefix."Page (day, page, view) values (?,?,'1')")){
						$stmt->bind_param('ss',$day,$page);
						$stmt->execute();
						$stmt->close();
					}else{
						echo"We have experienced an error with our counter. #5,1"; exit;
					}
					if($stmt = $this->mysqli->prepare("insert into ".$this->db_prefix."Page (day, page, view) values (?,?,'1')")){
						$stmt->bind_param('ss',$day,$page);
						$stmt->execute();
						$stmt->close();
					}else{
						echo"We have experienced an error with our counter. #5,2"; exit;
					}
				}else{
					$result->close();
					if($stmt = $this->mysqli->prepare("update ".$this->db_prefix."Page set view=view+1 where id=?")){
						$stmt->bind_param('i',$pageid);
						$stmt->execute();
						$stmt->close();
					}else{
						echo"We have experienced an error with our counter. #5,3"; exit;
					}
				}
			}else{
				echo"We have experienced an error with our counter. #5"; exit;
			}
		}
		// Referer
		if(stristr($server_host, $referer_host) === FALSE AND $referer_host<>"" AND $newuser == 1) {
			if($result = $this->mysqli->prepare("SELECT id from ".$this->db_prefix."Referer WHERE referer=? AND day=?")){
				$result->bind_param('ss',$referer_host,$day);
				$result->execute();
				$result->store_result();
				$result->bind_result($refererid);
				$result->close();
			}else{
				echo"We have experienced an error with our counter. #6"; exit;
			}
			if($result->num_rows==0){
				if($stmt = $this->mysqli->prepare("insert into ".$this->db_prefix."Referer (day, referer, view) values (?,?,'1')")){
					$stmt->bind_param('ss',$day,$referer_host);
					$stmt->execute();
					$stmt->close();
				}else{
					echo"We have experienced an error with our counter. #6,1"; exit;
				}
			}else{
				if($stmt = $this->mysqli->prepare("update ".$this->db_prefix."Referer set view=view+1 where id=?")){
					$stmt->bind_param('i',$refererid);
					$stmt->execute();
					$stmt->close();
				}else{
					echo"We have experienced an error with our counter. #6,2"; exit;
				}
			}
		}

		// keywords 
		if($keyword<>"" AND $newuser == 1){
			if($result = $this->mysqli->prepare("SELECT id from ".$this->db_prefix."Keyword WHERE keyword=? AND day=?")){
				$result->bind_param('ss',$keyword,$day);
				$result->execute();
				$result->store_result();
				$result->bind_result($keywordid);
				$result->close();
			}else{
				echo"We have experienced an error with our counter. #7"; exit;
			}
			if($result->num_rows==0){
				if($stmt = $this->mysqli->prepare("insert into ".$this->db_prefix."Keyword (day, keyword, view) values (?,?,'1')")){
					$stmt->bind_param('ss',$day,$keyword);
					$stmt->execute();
					$stmt->close();
				}else{
					echo"We have experienced an error with our counter. #7,1"; exit;
				}
			}else{
				if($stmt = $this->mysqli->prepare("update ".$this->db_prefix."Keyword set view=view+1 where id=?")){
					$stmt->bind_param('i',$keywordid);
					$stmt->execute();
					$stmt->close();
				}else{
					echo"We have experienced an error with our counter. #7,2"; exit;
				}
			}
		}
		// Language 
		if($language<>"" AND $newuser == 1){
			if($result = $this->mysqli->prepare("SELECT id from ".$this->db_prefix."Language WHERE language=?")){
				$result->bind_param('s',$language);
				$result->execute();
				$result->store_result();
				$result->bind_result($languageid);
			}else{
				echo"We have experienced an error with our counter. #8"; exit;
			}
			if($result->num_rows==0){
				$result->close();
				if($stmt = $this->mysqli->prepare("insert into ".$this->db_prefix."Language (day, language, view) values (?,?,'1')")){
					$stmt->bind_param('ss',$day,$language);
					$stmt->execute();
					$stmt->close();
				}else{
					echo"We have experienced an error with our counter. #8,1"; exit;
				}
			}else{
				$result->close();
				if($stmt = $this->mysqli->prepare("update ".$this->db_prefix."Language set view=view+1 where id=?")){
					$stmt->bind_param('i',$languageid);
					$stmt->execute();
					$stmt->close();
				}else{
					echo"We have experienced an error with our counter. #8,1"; exit;
				}
			}
		}
	}
}
?>