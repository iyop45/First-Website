<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class resetForum extends auth
{
    function __construct()
    {
        parent::__construct('GET');
        
        if ($this->loginCheck())
        {
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
					if($_SESSION['group_id'] >= 7)
					{
						if($stmt = $this->mysqli->multi_query("
							DELETE FROM forum_categories;
							ALTER TABLE forum_categories AUTO_INCREMENT = 1
							DELETE FROM forum_categoryCommits;
							ALTER TABLE forum_categoryCommits AUTO_INCREMENT = 1
							DELETE FROM forum_categoryEdits;
							ALTER TABLE forum_categoryEdits AUTO_INCREMENT = 1
							DELETE FROM forum_categoryFlags;
							ALTER TABLE forum_categoryFlags AUTO_INCREMENT = 1
							DELETE FROM forum_postEdits;
							ALTER TABLE forum_postEdits AUTO_INCREMENT = 1
							DELETE FROM forum_postFlags;
							ALTER TABLE forum_postFlags AUTO_INCREMENT = 1
							DELETE FROM forum_posts;
							ALTER TABLE forum_posts AUTO_INCREMENT = 1
							DELETE FROM forum_replies;
							ALTER TABLE forum_replies AUTO_INCREMENT = 1
							DELETE FROM forum_replyEdits;
							ALTER TABLE forum_replyEdits AUTO_INCREMENT = 1
							DELETE FROM forum_replyFlags;
							ALTER TABLE forum_replyFlags AUTO_INCREMENT = 1
							DELETE FROM forum_topicCommits;
							ALTER TABLE forum_topicCommits AUTO_INCREMENT = 1
							DELETE FROM forum_topicEdits;
							ALTER TABLE forum_topicEdits AUTO_INCREMENT = 1
							DELETE FROM forum_topicFlags;
							ALTER TABLE forum_topicFlags AUTO_INCREMENT = 1
							DELETE FROM forum_topics;
							ALTER TABLE forum_topics AUTO_INCREMENT = 1")){
							$this->notify->source()->type('success')->msg("Forum has been emptied")->process();
						}
						else
						{
							$this->notify->source()->type('error')->msg("Failed to execute query")->process();
						}
					}
					else
					{
						header('Location: http://techberry.org/');
						$this->notify->source()->type('error')->msg("Only root users can perform this action")->process();
					}
                }
            }
            else
            {
				$this->notify->source()->type('error')->msg("Invalid token")->process();
            }
        }
        else
        {
			header('Location: http://techberry.org/');
			$this->notify->source()->type('error')->msg("Must be logged in")->process();
        }
		header('Location: http://techberry.org/admin/maintenance');
    }
}
$rF = new resetForum();
?>