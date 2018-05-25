<?php
namespace techberry;

$rootPath = '/var/chroot/home/content/99/11499199/html/';
$filePath = str_replace($rootPath, '', $_SERVER['SCRIPT_FILENAME']);

require($rootPath . "class.authentication.php");
require($rootPath . "class.contentQuerying.php");
require($rootPath . "process.strings.php");

include($rootPath . 'statistics/include/counter.php');

use techberry\core\authentication as auth;

/**
* 
* 
* @param <type> $a 
* 
* @return <type>
*/

function dump()
{
  $args = func_get_args();

  echo "\n<pre style=\"border:1px solid #ccc;padding:10px;" .
       "margin:10px;font:14px courier;background:whitesmoke;" .
       "display:block;border-radius:4px;\">\n";

  $trace = debug_backtrace(false);
  $offset = (@$trace[2]['function'] === 'dump_d') ? 2 : 0;

  echo "<span style=\"color:red\">" .
       @$trace[1+$offset]['class'] . "</span>:" .
       "<span style=\"color:blue;\">" .
       @$trace[1+$offset]['function'] . "</span>:" .
       @$trace[0+$offset]['line'] . " " .
       "<span style=\"color:green;\">" .
       @$trace[0+$offset]['file'] . "</span>\n";

  if ( ! empty($args)) {
    call_user_func_array('var_dump', $args);
  }

  echo "</pre>\n";
}

function dump_d()
{
  call_user_func_array(__NAMESPACE__ .'\dump', func_get_args());
  die();
}

class content extends auth
{
	public $cq;
	public $isLoggedin;
	
	public $location;
	public $url;
	
	public $searchObject;
	public $accountObject;
	
	public $alertNotifications = array();
	public $actionTimerNotification;
	public $announcements;
	
	public $maintenannceImage;
	public $maintenanceMessage;
	
	public $badges;
	public $privileges;
	
	public $graph;
	
	public $counter;
	
	public $strings;
	
	public $userActions;
	
	public $p; // Permission object
	
	/**
	* 
	* 
	* 
	* @return <type>
	*/
	function __construct()
	{
		//error_reporting(E_ALL);
		parent::__construct();
		// Path variables for forms
		$this->strings = new strings();
		$url           = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
		$this->url     = preg_replace('/index.php/', '', $url);
		// Access database for retrieving dynamic content
		if ($this->loginCheck())
		{
			$this->isLoggedIn = true;
			$this->userActions = $this->userActions($this->mysqli);
			$this->userActions->updateRecentActivity($isPolling = false);
		}
		else
		{
			$this->isLoggedIn = false;
		}
		$this->cq = new \techberry\core\contentQuerying($this->mysqli);
		// Get the content ready for parsing
		$this->startOfBody();
		$this->endOfHead();
		//$this->counter = new \counter($this->mysqli);
	}
	
	/*
	Holds the smarty template object
	*/
	public $tpl;
	public function setTemplateVars($page, $layout)
	{
		// Loop through error, log and success sessions and store in general array
		$types = array(
		'error',
		'log',
		'success'
		);
		foreach ($types as $n)
		{
			if (isset($_SESSION[$n]))
			{
				foreach ($_SESSION[$n] as $message)
				{
					$this->alertNotifications[] = array(
					$message,
					$n
					);
				}
			}
		}
		// Remove all alert sessions so they don't appear more than once
		// SESSION[error,log,success and actionTimerAlter]
		foreach ($types as $n)
		{
			unset($_SESSION[$n]);
		}
		/*
		Temporary variable to identify pages which
		don't call this function/method
		*/
		$this->tpl->assign("isUpdatedPage", true);
		/*
		Class containing all global constants
		*/
		if ($this->isMaintenanceUp($page))
		{
			$this->displayMaintenancePage();
		}
		// Constant variables
		$this->tpl->assign("ROOTURL", self::ROOTURL);
		$this->tpl->assign("URL", $this->URL);
		/*
		These template variables are mostly dynamic
		and so are independent of the layout of the
		page OR are constants
		*/
		$this->tpl->assign("CSSTheme", $this->getTheme());
		$this->tpl->assign("isLoggedIn", $this->isLoggedIn);
		$this->tpl->assign("token", $this->token);
		if (isset($_SESSION['smartyDebugMode']))
		{
			$this->tpl->debugging = 1;
		}
		if ($this->isLoggedIn)
		{
			/*
			Though session variables are available
			directly to smarty
			*/
			$this->p  = $this->permissions();
			$_SESSION['privileges'] = $this->p->getUserPrivileges($_SESSION['user_id']);
			$this->tpl->assign("userPrivileges", $_SESSION['privileges']);
			$this->tpl->assign("username", $_SESSION['username']);
			$this->tpl->assign("userid", $_SESSION['user_id']);
			$this->tpl->assign("avatar", $_SESSION['avatar']);
			$this->tpl->assign("reputation", $_SESSION['reputation']);
			$this->tpl->assign("groupName", $_SESSION['group_name']);
			$this->tpl->assign("group_id", $_SESSION['group_id']);
			$this->tpl->assign("hasNotifications", $_SESSION['hasNotifications']);
			
			$this->tpl->assign("showLockedButtons", $_SESSION['settings_showLockedButtons']);
		}
		else
		{
			$this->tpl->assign("showLockedButtons", 1);
		}
		/*
		If there is a login error
		hold the error message in
		a variable for smarty use
		*/
		if (isset($_SESSION['loginError']))
		{
			$this->tpl->assign("loginError", $_SESSION['loginError']);
			unset($_SESSION['loginError']);
		}
		/*
		If user has earnt a new badge
		hold the success message in
		a variable for smarty use
		*/
		if (isset($_SESSION['newBadge']))
		{
			$this->tpl->assign("newBadgeMessage", $_SESSION['newBadge']);
			unset($_SESSION['newBadge']);
		}
		switch ($layout)
		{
		case 'default':
		default:
			/*
				Attributes that are made by default
				These may be overwritten on the
				page itself
				*/
			$this->tpl->assign("bannerLinksEnabled", true);
			$this->tpl->assign("searchBarEnabled", true);
			$this->tpl->assign("bannerLinkWidth", "15%");
			$this->tpl->assign("docType", "<!doctype html>");
			$this->tpl->assign("toTopButton", true);
			$this->tpl->assign("charset", "utf-8");
			$this->tpl->assign("contentType", "text/html");
			$this->tpl->assign("favicon", "http://techberry.org/favicon.png");
			
			$this->tpl->assign("alerts", $this->alertNotifications);
			$this->tpl->assign("announcements",  $this->cq->announcements());
			// set if there are announcements
			if(isset($this->cq->pagePadding)){
				$this->tpl->assign("pagePadding", $this->cq->pagePadding);
			}else{
				$this->tpl->assign("pagePadding", 20);
			}
			break;
		}
		$this->tpl->assign("currentTimeStamp", microtime());
	}
	
	public function accountPage()
	{
		$this->accountObject = new \account($this);
	}
	
	/**
	* 
	* 
	* @param <type> $length  
	* 
	* @return <type>
	*/
	public function randomString($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
		$string     = '';
		for ($p = 0; $p < $length; $p++)
		{
			$string .= $characters[mt_rand(0, strlen($characters))];
		}
		
		return 'rnd__' . $string;
	}
	
	/*
	BBCode replacements for single tags
	FUNCTION IS ALSO IN POLL/CHAT.SHOUTS.PHP AND CLASS.MESSAGES.PHP
	*/
	public function singleTags($input)
	{
		$output = str_replace('[hr]', '<hr>', $input);
		$output = str_replace('[br]', '<br>', $output);
		$output = preg_replace_callback('/ #(\w+)/', array(
		$this,
		'handle_hashTag'
		), $output);
		$output = preg_replace_callback('/ @(\w+)/', array(
		$this,
		'handle_atSign'
		), $output);
		return $output;
	}
	function handle_hashTag($match)
	{
		return ' <a class="default" href="http://techberry.org/search/?q=' . htmlentities($match[1]) . '">#' . htmlentities($match[1]) . '</a>';
	}
	function handle_atSign($match)
	{
		return ' <a class="default" href="http://techberry.org/user/' . htmlentities($match[1]) . '/">@' . htmlentities($match[1]) . '</a>';
	}
	
	/*
	Obfuscates an email address with javascript
	*/
	function hide_email($email)
	{
		$character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';
		$key           = str_shuffle($character_set);
		$cipher_text   = '';
		$id            = 'e' . rand(1, 999999999);
		for ($i = 0; $i < strlen($email); $i += 1)
		$cipher_text .= $key[strpos($character_set, $email[$i])];
		$script = 'var a="' . $key . '";var b=a.split("").sort().join("");var c="' . $cipher_text . '";var d="";';
		$script .= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';
		$script .= 'document.getElementById("' . $id . '").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';
		$script = "eval(\"" . str_replace(array(
		"\\",
		'"'
		), array(
		"\\\\",
		'\"'
		), $script) . "\")";
		$script = '<script type="text/javascript">/*<![CDATA[*/' . $script . '/*]]>*/</script>';
		return '<span id="' . $id . '"></span>' . $script;
	}
	
	public function getBadges()
	{
		$this->badges    = $this->cq->badges();
		$parsedPlatforms = array();
		foreach ($this->badges as &$badge)
		{
			if (!in_array($badge['platform'], $parsedPlatforms))
			{
				$badge['firstOfPlatform'] = 1;
				$parsedPlatforms[]        = $badge['platform'];
			}
			$badge['markup']  = $this->renderBadge($badge['name'], $badge['value']);
			$badge['urlName'] = urlencode($badge['name']);
		}
		return $this->badges;
	}
	
	/*
	Page variable is for when only certain pages
	are put into maintenance
	** They're set in the form 'index','news' etc
	*/
	public function isMaintenanceUp($page = null)
	{
		/*
		-1 is set for all pages to be under maintenance
		whereas an array is used for explicit pages
		*/
		$MAINTENANCE_PAGES = 1;
		$MAINTENANCE_IPS   = array(
		'86.29.130.73',
		'85.237.223.166'
		);
		if (in_array($_SERVER["REMOTE_ADDR"], $MAINTENANCE_IPS))
		{
			/*
			Specified IP address are allowed through
			to the site whilst under maintenance
			*/
			return false;
		}
		else
		{
			//$this->maintenanceMessage = "I blame css";
			//$this->maintenanceImage = "http://techberry.org/images/maintenance/css.gif";
			
			//$this->maintenanceMessage = "We're having some browser compatibility problems.";
			//$this->maintenanceImage = "http://techberry.org/images/maintenance/browser.jpg";
			$this->maintenanceMessage = "Undergoing major re-factoring";
			if ($MAINTENANCE_PAGES === 1)
			{
				/*
				All pages are currently under maintenance
				*/
				return false; // Set to false to disable maintenance for everyone not in ip list
			}
			else
			{
				if (in_array($page, $MAINTENANCE_PAGES))
				{
					/*
					This page is under maintenance
					*/
					return true;
				}
				else
				{
					/*
					This page is NOT under maintenance
					*/
					return false;
				}
			}
		}
	}
	
	/*
	Function actually renders maintenance page
	and ceases further script execution
	*/
	public function displayMaintenancePage()
	{
		$this->tpl->assign("message", $c->maintenanceMessage);
		$this->tpl->assign("image", $c->maintenanceImage);
		$this->tpl->display('/home/content/99/11499199/html/templates/pages/maintenance.tpl');
		die();
	}
	
	/*
	Validate and process theme cookie
	** Default theme is purple
	*/
	public function getTheme()
	{
		$themes = array(
		'red',
		'green',
		'blue',
		'yellow',
		'purple'
		);
		if (isset($_COOKIE['theme']))
		{
			if (in_array($_COOKIE['theme'], $themes))
			{
				return $_COOKIE['theme'];
			}
			else
			{
				return 'purple';
			}
		}
		else
		{
			return 'purple';
		}
	}
	
	public function endOfHead()
	{
	}
	
	/*
	Globalization function for generating html for badges
	to avoid changing markup on multiple pages
	** May be ported to a small smarty template
	*/
	/**
	* 
	* 
	* @param <type> $name 
	* @param <type> $value 
	* @param <type> $quantity  
	* 
	* @return <type>
	*/
	public function renderBadge($name, $value, $quantity = 1)
	{
		$content = '<a href="http://techberry.org/help/badges/' . urlencode($name) . '" class="badge">
						<span class="badge' . $value . '"></span>
						&nbsp;' . $name . '
					</a>';
		if ($quantity > 1)
		{
			$content .= '<span class="item-multiplier">x' . $quantity . '</span>';
		}
		return $content;
	}
	
	public function urlFreindly($text)
	{
		return $this->strings->urlFreindly($text);
	}
	public function abbreviateNumber($number)
	{
		return $this->strings->abbreviateNumber($number);
	}
	public function humanTiming($time,$compressed=1)
	{
		return $this->strings->humanTiming($time,$compressed);
	}
	
	/*
	Simple function for stripping whitespaces
	in HTML markup in cases where smarty
	{strip} can't be used
	*/
	function compress_html($html)
	{
		$search  = array(
		'/\>[^\S ]+/s', // strip whitespaces after tags, except space
		'/[^\S ]+\</s', // strip whitespaces before tags, except space
		'/(\s)+/s' // shorten multiple whitespace sequences
		);
		$replace = array(
		'>',
		'<',
		'\\1'
		);
		$html    = preg_replace($search, $replace, $html);
		return $html;
	}
	
	/*
	Same function as compress_html but used
	specifically for in-line css
	*/
	function compress_css($code)
	{
		$code = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $code);
		$code = str_replace(array(
		"\r\n",
		"\r",
		"\n",
		"\t",
		'  ',
		'    ',
		'    '
		), '', $code);
		$code = str_replace('{ ', '{', $code);
		$code = str_replace(' }', '}', $code);
		$code = str_replace('; ', ';', $code);
		
		return $code;
	}
	
	public function startOfBody()
	{
		
	}
	
	public $faqContent;
	public function getFAQ()
	{
		$this->faqContent = $this->cq->faq();
	}
	
	/*
	This function returns html user profile
	- This is directly called through the api
	*/
	public function embedProfile($data, $badgeData)
	{
		/*
		Content is pre-compress rather than dynamically
		to reduce server processing in hindsight
		*/
		if ($embedProfileID = apc_fetch('embedProfileID')) {
			return '<div id="'.$embedProfileID.'_profile"><style type="text/css" scoped>a.'.$embedProfileID.'_default{color: #859ce6;text-decoration:none}a.'.$embedProfileID.'_default:hover{color: #2445ae;}.'.$embedProfileID.'_offline{background: #c99 !important;}.online{background: #9c9 !important;}.'.$embedProfileID.'_online_status{position: absolute;top: 5px;right: 5px;width: 5px;border-radius: 2px;height: 5px;}.'.$embedProfileID.'_badge1,.'.$embedProfileID.'_badge2,.'.$embedProfileID.'_badge3{display: inline-block;overflow: hidden;line-height: inherit;width: 6px;height: 6px;margin: 0 0 0 3px;vertical-align: middle;background-repeat: no-repeat;overflow: hidden;border-radius: 4px;}.'.$embedProfileID.'_badge1{background-color:#cd7f32;}.'.$embedProfileID.'_badge2{background-color:silver;}.'.$embedProfileID.'_badge3{background-color:gold;}.'.$embedProfileID.'_item-multiplier{margin: 0 4px;color: #888;font-size: 11px;font-family: Arial,Helvetica,sans-serif;}.'.$embedProfileID.'_avatar{background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);border: 1px solid #d3d3d3;border-collapse: separate;overflow: hidden;}.'.$embedProfileID.'_user{font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;font-size: 12px;color: #888;border-collapse: collapse;border-spacing: 0}.'.$embedProfileID.'_tr{position: relative;width: 215px;padding: 5px;margin: 0px 5px 10px 5px;float: left;overflow: hidden;background: white;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;border-top: 1px solid #ddd;border-left: 1px solid #ddd;-moz-box-shadow: 0px 1px 3px #dddddd;-webkit-box-shadow: 0px 1px 3px #dddddd;box-shadow: 0px 1px 3px #dddddd;-moz-border-radius: 0px;-webkit-border-radius: 0px;border-radius: 0px;color: #444444;}.'.$embedProfileID.'_p,.'.$embedProfileID.'_div, table.'.$embedProfileID.'_user{margin: 0;padding: 0;font-size: 100%;font: inherit;vertical-align: baseline;}.'.$embedProfileID.'_p{margin-left:3px;font-weight:bolder;margin-bottom:5px}</style><table class="'.$embedProfileID.'_users" style="display:table"><tbody><tr class="'.$embedProfileID.'_tr"><td><a href="http://techberry.org/user/' . $data['username'] . '/"><div class="'.$embedProfileID.'_avatar"><img src="' . $data['avatar'] . '" style="float:left" height="50" width="50"/></div></a></td><td style="vertical-align:middle"><p class="'.$embedProfileID.'_p" style="margin-left:3px;font-weight:bolder;margin-bottom:5px"><a href="http://techberry.org/user/(' . $data['username'] . ')/" class="'.$embedProfileID.'_default">' . $data['username'] . '</a> (' . $data['reputation'] . ')</p><div style="float:left"><span class="'.$embedProfileID.'_badge3"></span><span class="'.$embedProfileID.'_item-multiplier">' . $badgeData['bronze_count'] . '</span><span class="'.$embedProfileID.'_badge2"></span><span class="'.$embedProfileID.'_item-multiplier">' . $badgeData['silver_count'] . '</span><span class="'.$embedProfileID.'_badge1"></span><span class="'.$embedProfileID.'_item-multiplier">' . $badgeData['gold_count'] . '</span></div></td><td title="' . $data['username'] . ' is ' . $data['online_status'] . '" class="'.$embedProfileID.'_online_status ' . $data['online_status'] . '"></td></tr></tbody></table></div>';
		}
		else 
		{ 
			$embedProfileID = 'tb_'.substr(md5(uniqid(mt_rand(), true)), 0, 8);
			apc_add('embedProfileID', $embedProfileID, 120);
			return '<div id="'.$embedProfileID.'_profile"><style type="text/css" scoped>a.'.$embedProfileID.'_default{color: #859ce6;text-decoration:none}a.'.$embedProfileID.'_default:hover{color: #2445ae;}.'.$embedProfileID.'_offline{background: #c99 !important;}.online{background: #9c9 !important;}.'.$embedProfileID.'_online_status{position: absolute;top: 5px;right: 5px;width: 5px;border-radius: 2px;height: 5px;}.'.$embedProfileID.'_badge1,.'.$embedProfileID.'_badge2,.'.$embedProfileID.'_badge3{display: inline-block;overflow: hidden;line-height: inherit;width: 6px;height: 6px;margin: 0 0 0 3px;vertical-align: middle;background-repeat: no-repeat;overflow: hidden;border-radius: 4px;}.'.$embedProfileID.'_badge1{background-color:#cd7f32;}.'.$embedProfileID.'_badge2{background-color:silver;}.'.$embedProfileID.'_badge3{background-color:gold;}.'.$embedProfileID.'_item-multiplier{margin: 0 4px;color: #888;font-size: 11px;font-family: Arial,Helvetica,sans-serif;}.'.$embedProfileID.'_avatar{background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);border: 1px solid #d3d3d3;border-collapse: separate;overflow: hidden;}.'.$embedProfileID.'_user{font-family: "ff-din-web-1", "ff-din-web-2", "Helvetica Neue", Helvetica, Arial, Verdana, sans-serif;font-size: 12px;color: #888;border-collapse: collapse;border-spacing: 0}.'.$embedProfileID.'_tr{position: relative;width: 215px;padding: 5px;margin: 0px 5px 10px 5px;float: left;overflow: hidden;background: white;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;border-top: 1px solid #ddd;border-left: 1px solid #ddd;-moz-box-shadow: 0px 1px 3px #dddddd;-webkit-box-shadow: 0px 1px 3px #dddddd;box-shadow: 0px 1px 3px #dddddd;-moz-border-radius: 0px;-webkit-border-radius: 0px;border-radius: 0px;color: #444444;}.'.$embedProfileID.'_p,.'.$embedProfileID.'_div, table.'.$embedProfileID.'_user{margin: 0;padding: 0;font-size: 100%;font: inherit;vertical-align: baseline;}.'.$embedProfileID.'_p{margin-left:3px;font-weight:bolder;margin-bottom:5px}</style><table class="'.$embedProfileID.'_users" style="display:table"><tbody><tr class="'.$embedProfileID.'_tr"><td><a href="http://techberry.org/user/' . $data['username'] . '/"><div class="'.$embedProfileID.'_avatar"><img src="' . $data['avatar'] . '" style="float:left" height="50" width="50"/></div></a></td><td style="vertical-align:middle"><p class="'.$embedProfileID.'_p" style="margin-left:3px;font-weight:bolder;margin-bottom:5px"><a href="http://techberry.org/user/(' . $data['username'] . ')/" class="'.$embedProfileID.'_default">' . $data['username'] . '</a> (' . $data['reputation'] . ')</p><div style="float:left"><span class="'.$embedProfileID.'_badge3"></span><span class="'.$embedProfileID.'_item-multiplier">' . $badgeData['bronze_count'] . '</span><span class="'.$embedProfileID.'_badge2"></span><span class="'.$embedProfileID.'_item-multiplier">' . $badgeData['silver_count'] . '</span><span class="'.$embedProfileID.'_badge1"></span><span class="'.$embedProfileID.'_item-multiplier">' . $badgeData['gold_count'] . '</span></div></td><td title="' . $data['username'] . ' is ' . $data['online_status'] . '" class="'.$embedProfileID.'_online_status ' . $data['online_status'] . '"></td></tr></tbody></table></div>';
		}
	}
	
	public function renderSCEditor()
	{
		// Javascript to enable SCEditor (bbcode editor) on textarea[name=content]
		return
<<<'EOT'
$.sceditor.plugins.bbcode.bbcode.set("subtitle",{tags:{subtitle:{"class":["subtitle"]}},format:"[subtitle]{0}[/subtitle]",html:'<h1 class="f_subtitle">{0}</h1>'});$.sceditor.plugins.bbcode.bbcode.set("p",{format:"[p]{0}[/p]",html:"<p>{0}</p>"});$.sceditor.plugins.bbcode.bbcode.set("table",{format:"[table]{0}[/table]",html:'<table class="reference">{0}</table>'});$.sceditor.plugins.bbcode.bbcode.set("tbody",{format:"[tbody]{0}[/tbody]",html:"<tbody>{0}</tbody>"});$.sceditor.plugins.bbcode.bbcode.set("tr",{format:"[tr]{0}[/tr]",html:"<tr>{0}</tr>"});$.sceditor.plugins.bbcode.bbcode.set("th",{format:"[th]{0}[/th]",html:"<th>{0}</th>"});$.sceditor.plugins.bbcode.bbcode.set("td",{format:"[td]{0}[/td]",html:"<td>{0}</td>"});$.sceditor.plugins.bbcode.bbcode.set("quote",{format:"[quote]{0}[/quote]",html:"<blockquote>::before {0}</blockquote>"});$.sceditor.plugins.bbcode.bbcode.set("br",{isSelfClosing:true,format:"[br]",html:"<br>"});$.sceditor.plugins.bbcode.bbcode.set("code",{format:"[code]{0}[/code]",html:function(e,t,n){PR.prettyPrint();return'<div style="white-space:pre" class="prettyprint">'+n+"</div>"}})
$(function(){$("textarea[name=content]").sceditor({plugins:"bbcode",style:"http://techberry.org/css/global/purple/main.css",toolbar:"bold,italic,underline|ltr,rtl,subscript,superscript|code,table,horizontalrule,quote|source,maximize",autoUpdate:true,autoExpand:true,width:794,resizeWidth:false,id:"sceditor"})})
EOT;
	}
}
?>