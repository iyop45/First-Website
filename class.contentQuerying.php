<?php
namespace techberry\core;

require_once("class.constants.php");
use techberry\core\constants as constants;
/*
 * This class is for methods that return page content
 * via access to the database ( general methods )
 */
class contentQuerying extends constants
{
    private $mysqli;
    
    public $numberOfNotifications;
    public $notifications;
    public $isLoginError;
    
    public $tutorialClass;
    public $forumClass;
    public $qaClass;
    public $newsClass;
    
    public static $ROOTPATH = '/var/chroot/home/content/99/11499199/html/';
    
    function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }
    
    /*
    These proceeding methods are for incorporating
    external classes which contain more specific
    methods in order to avoid overloading this
    current class
    */
    public function tutorial()
    {
        require(constants::ROOTPATH . "class.page.tutorials.php");
        $this->tutorialClass = new \tutorials($this->mysqli);
    }    
	
	public function questions()
    {
        require(constants::ROOTPATH . "class.page.questions.php");
        $this->questionsClass = new \questions($this->mysqli);
    }
    
    public function forum()
    {
        require_once(constants::ROOTPATH . "class.page.forums.php");
		$this->forumClass = new \techberry\core\forums($this->mysqli);
    }
	
	function file_get_php_classes($filepath) {
	  $php_code = file_get_contents($filepath);
	  $classes = $this->get_php_classes($php_code);
	  return $classes;
	}

	function get_php_classes($php_code) {
	  $classes = array();
	  $tokens = token_get_all($php_code);
	  $count = count($tokens);
	  for ($i = 2; $i < $count; $i++) {
		if (   $tokens[$i - 2][0] == T_CLASS
			&& $tokens[$i - 1][0] == T_WHITESPACE
			&& $tokens[$i][0] == T_STRING) {

			$class_name = $tokens[$i][1];
			$classes[] = $class_name;
		}
	  }
	  return $classes;
	}
	
    public function news()
    {
        require(constants::ROOTPATH . "class.page.news.php");
        $this->newsClass = new \news($this, $this->mysqli);
    }
    
    /*
    Returns an array of all announcements for valid
    for specified page, global announcement are valid
    for all pages
    */
    public function announcements()
    {
		// Show a random announcement that is enabled
		$url = preg_replace('/index.php/', '', "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);
		if ($stmt = $this->mysqli->prepare("SELECT id,content FROM admin_announcement 
												WHERE (location = ? OR location = 'global') AND enabled = 1
												ORDER BY RAND() LIMIT 1"))
		{
			$stmt->bind_param('s', $url);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id,$announcement);
			$a = array();
			$stmt->fetch();
			if(isset($_COOKIE['removeAnnouncement']))
			{
				if (intval($_COOKIE['removeAnnouncement']) == $id)
				{
					$stmt->close();
					return null;
				}
				else
				{
					if($id != 0 && $announcement)
					{
						$this->pagePadding = 50;
						$a[] = array(
									'id'=>$id,
									'content'=>$announcement
									);			
					}
					else
					{
						return null;
					}
				}
			}
			else
			{
				if($id != 0 && $announcement)
				{
					$this->pagePadding = 50;
					$a[] = array(
								'id'=>$id,
								'content'=>$announcement
								);			
				}
				else
				{
					return null;
				}
			}
			$stmt->close();
			return $a;
		}
		else
		{
			return null;
		}
    }
    
    /*
    Return all badges available
    */
    public function badges()
    {
        if ($stmt = $this->mysqli->prepare("
				SELECT id,
					   name,
					   description,
					   value,
					   platform
					FROM(
				SELECT id,
					   name,
					   description,
					   value,
					   platform
				FROM badges
					ORDER BY value
					)
					AS a
					ORDER BY platform DESC
					"))
        {
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $name, $description, $value, $platform);
            $badges = array();
            while ($stmt->fetch())
            {
                $badges[] = array(
                    'id' => $id,
                    'name' => $name,
                    'description' => $description,
                    'value' => $value,
                    'platform' => $platform
                );
            }
            $stmt->close();
            return $badges;
        }
        else
        {
            $this->notifyClass()->source()->type('error')->msg('Unable to load badges')->process();
            return false;
        }
    }
    
    public function groups()
    {
        if ($stmt = $this->mysqli->prepare("
				SELECT id,
					   name,
					   description,
					   privilegeReputationStart
					FROM user_groups
					ORDER BY privilegeReputationStart DESC
					"))
        {
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $name, $description, $privilegeReputationStart);
            $groups = array();
            while ($stmt->fetch())
            {
                $groups[] = array(
                    'id' => $id,
                    'name' => $name,
                    'description' => $description,
                    'privilegeReputationStart' => $privilegeReputationStart
                );
            }
            $stmt->close();
            return $groups;
        }
        else
        {
            $this->notifyClass()->source()->type('error')->msg('Unable to load groups')->process();
            return false;
        }
    }
    
	//externalLink() is in lib/CodeDefinition.php
    public function getRefUrl($src)
    {
        if ($stmt = $this->mysqli->prepare("SELECT id,url FROM links_external WHERE salt = ? LIMIT 1"))
        {
            $stmt->bind_param('s', base64_decode($_GET['src']));
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $url);
            $stmt->fetch();
            if ($stmt->num_rows == 1)
            {
                $stmt->close();
                // Check if url is blacklisted
                if ($stmt = $this->mysqli->prepare("SELECT 1 FROM links_blacklist WHERE link_id = ? LIMIT 1"))
                {
                    $stmt->bind_param('i', $id);
                    $stmt->execute();
                    $stmt->store_result();
                    if ($stmt->num_rows == 1)
                    {
                        $isBlackListed = 1;
                    }
                    else
                    {
                        $isBlackListed = 0;
                    }
                    return array(
                        'url' => $url,
                        'isBlackListed' => $isBlackListed
                    );
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    /*
    This function returns the html markup
    for the faq, this is because the markup
    is too difficult to process solely in
    smarty (would require too many variables)
    ** It looks a mess but at least it works!
    */
    public function faq()
    {
        if ($stmt = $this->mysqli->prepare("SELECT id FROM faq_categories"))
        {
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id);
            $cat_id = array();
            while ($stmt->fetch())
            {
                $cat_id[] = $id;
            }
            $stmt->close();
            if ($stmt = $this->mysqli->prepare("
					SELECT q.question,
						   a.answer
					FROM faq_questions AS q
					INNER JOIN faq_categories AS c ON (c.id = q.category)
					INNER JOIN faq_answers AS a ON (a.question_id = q.id)
					WHERE c.id=?"))
            {
                // #{category id}_{question id}
                $faqContent = '';
                for ($i = 0; $i < count($cat_id); $i++)
                {
                    $stmt->bind_param('i', $cat_id[$i]);
                    $stmt->execute();
                    $stmt->store_result();
                    $stmt->bind_result($question, $answer);
                    $faq = array(); //[0]-question [1]-answer
                    while ($stmt->fetch())
                    {
                        $faq[] = array(
                            $question,
                            $answer
                        );
                    }
                    $faqContent .= '<ul class="s_section_menu">';
                    for ($j = 0; $j < count($faq); $j++)
                    {
                        $faqContent .= '<li><a href="#' . ($i + 1) . '_' . ($j + 1) . '" class="ref">' . $faq[$j][0] . '</a></li>';
                    }
                    $faqContent .= '</ul><dl class="s_faq">';
                    for ($j = 0; $j < count($faq); $j++)
                    {
                        $faqContent .= '<dt>' . $faq[$j][0] . '</dt>';
                        $faqContent .= '<dd id="' . ($i + 1) . '_' . ($j + 1) . '">' . $faq[$j][1] . '</dd>';
                    }
                    $faqContent .= '</dl>';
                }
                return $faqContent;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    /*
    Method primarily used on the ranking page
    ** Curently $orderBy parameter is ignored
    */
    public function userRanking($orderBy)
    {
        switch ($orderBy)
        {
            case 'bots':
                $SQLFilterString = 'WHERE m.is_bot = 1 ORDER BY m.reputation';
                break;
            case 'reputation':
                $SQLFilterString = 'ORDER BY m.reputation DESC';
                break;
            case 'topFollowed':
                $SQLFilterString = 'ORDER BY numberOfFollowers DESC';
                break;
            case 'online':
                $SQLFilterString = 'WHERE m.last_active > (NOW() - INTERVAL 1 MINUTE) ORDER BY m.reputation';
                break;
            case 'random':
                $SQLFilterString = 'ORDER BY RAND()';
                break;
            default:
                $SQLFilterString = 'ORDER BY m.reputation DESC';
        }
        if ($stmt = $this->mysqli->prepare("
				SELECT m.id,
					   m.username,
					   IF(LENGTH(m.avatar) > 0, m.avatar , CONCAT('http://vanillicon.com/',md5(m.email))),
					   IF(m.last_active < (NOW() - INTERVAL 1 MINUTE), 'offline', 'online'),
							(SELECT
								COUNT(*) FROM user_badges AS uba
									INNER JOIN badges AS ba
									 ON(ba.id = uba.id_badge)
									WHERE uba.user_id = m.id
									AND ba.value = 3) AS bronze_count,
							(SELECT
								COUNT(*) FROM user_badges AS ubb
									INNER JOIN badges AS bb
									 ON(bb.id = ubb.id_badge)
									WHERE ubb.user_id = m.id
									AND bb.value = 2) AS silver_count,
							(SELECT
								COUNT(*) FROM user_badges AS ubc
									INNER JOIN badges AS bc
									 ON(bc.id = ubc.id_badge)
									WHERE ubc.user_id = m.id
									AND bc.value = 1) AS gold_count,
						m.reputation,
						m.is_bot,
						(SELECT COUNT(*) FROM user_follows WHERE followed = m.id) AS numberOfFollowers
						FROM users AS m
						" . $SQLFilterString . "
						LIMIT 50"))
        {
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $username, $avatar, $online_status, $bronze_count, $silver_count, $gold_count, $reputation, $is_bot, $numberOfFollowers);
            $users = array();
            while ($stmt->fetch())
            {
                $users[] = array(
                    'id' => $id,
                    'username' => $username,
                    'avatar' => $avatar,
                    'online_status' => $online_status,
                    'bronze_count' => $bronze_count,
                    'silver_count' => $silver_count,
                    'gold_count' => $gold_count,
                    'reputation' => $reputation,
                    'is_bot' => $is_bot,
                    'numberOfFollowers' => $numberOfFollowers,
                );
            }
            $stmt->close();
            return $users;
        }
    }
	
	/*
		Returns graph data for a users reputation
	 */
	public function reputationInfo($user_id){
		if($stmt = $this->mysqli->prepare("
		SELECT value,date FROM user_points
		WHERE id_from = ?
		ORDER BY date DESC
		LIMIT 5")){
			$stmt->bind_param('i',$user_id);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($value,$date);
			$reputationInfo = array();
			if($stmt->num_rows == 0){
				$stmt->close();
				return false;
			}else{
				while($stmt->fetch()){
					$reputationInfo[] = array(
					'value'=>$value,
					'date'=>$date,
					);
				}
				$stmt->close();
				return $reputationInfo;
			}
		}else{
			return false;
		}
	}
}
?>