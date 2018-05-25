<?php
namespace techberry\core;

class constants{

    private function __clone() {}

    public static function getInstance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new \techberry\core\constants();
        }
        return $inst;
    }
	
	const ROOTPATH = '/home/content/99/11499199/html/';
	const ROOTURL = 'http://techberry.org/';
	
	const ROOT_DBHOST = 'techbmain.db.11499199.hostedresource.com';
	const ROOT_DBUSER = 'techbmain';
	const ROOT_DBPASS = 'H763#kjsduy93';
	const ROOT_DBNAME = 'techbmain';
	
	public static $newsSettings = 
								array(
									'flagCountForUnpopular' => 5
								);
	
	public static $forumSettings =
								array(
									// These values are implemented into the templates
									// ---------------------------
									'ReplyFlagCountForUnpopular' => 5,
									'PostFlagCountForUnpopular' => 10,
									'TopicFlagCountForUnpopular' => 15,
									'CategoryFlagCountForUnpopular' => 20,
									
									'ReplyFlagCountForRemoval' => 10,
									'PostFlagCountForRemoval' => 20, 
									'TopicFlagCountForRemoval' => 100,
									'CategoryFlagCountForRemoval' => 1,
									
									'CategoryCommitsToActivate' => 10,
									'TopicCommitsToActivate' => 10,
									// ---------------------------	
									// CONTENT
									'ReplyContentMinLength' => 5,
									'ReplyContentMaxLength' => 500,
									
									'PostContentMinLength' => 5,
									'PostContentMaxLength' => 500,		

									'TopicContentMinLength' => 5,
									'TopicContentMaxLength' => 500,		

									'CategoryContentMinLength' => 5,
									'CategoryContentMaxLength' => 500,
									
									// TITLE
									'PostTitleMinLength' => 10,
									'PostTitleMaxLength' => 200,		

									'TopicTitleMinLength' => 10,
									'TopicTitleMaxLength' => 200,		

									'CategoryTitleMinLength' => 5,
									'CategoryTitleMaxLength' => 200,
									
									// REASON
									'EditReasonMinLength' => 0,
									'EditReasonMaxLength' => 200,
									
									// RESULTS
									'CategoryResultsPerPage' => 5,
									'TopicResultsPerPage' => 10,
									'PostResultsPerPage' => 10,
									'ReplyResultsPerPage' => 5,

									// EDIT QUEUE
									'CategoryEditQueueSize' => 5,
									'TopicEditQueueSize' => 5,
									'PostEditQueueSize' => 5,
									'ReplyEditQueueSize' => 5,	
									
									// If changing these values remember to change notification values in database
									// ----------------------------
									'ReplyEditPublishReputationGain' => 1,
									'PostEditPublishReputationGain' => 5,
									'TopicEditPublishReputationGain' => 10,
									'CategoryEditPublishReputationGain' => 20,
									
									'ReplyEditRemoveReputationGain' => -1,
									'PostEditRemoveReputationGain' => -5,
									'TopicEditRemoveReputationGain' => -10,
									'CategoryEditRemoveReputationGain' => -20,	
									// -----------------------------
									
									'ReputationLossReplyRemoval' => -5,
									'ReputationLossPostRemoval' => -20,
									'ReputationLossTopicRemoval' => -50,
									'ReputationLossCategoryRemoval' => -80,	

									'ReputationLossReplyEditRemoval' => -2,
									'ReputationLossPostEditRemoval' => -2,
									'ReputationLossTopicEditRemoval' => -2,
									'ReputationLossCategoryEditRemoval' => -2,	

									'ReputationLossReplyFlag' => -1,
									'ReputationLossPostFlag' => -4,
									'ReputationLossTopicFlag' => -5,
									'ReputationLossCategoryFlag' => -5,
								);
	public $URL;
	public $dbHost;
	public $dbUser;
	public $dbPass;
	public $dbName;
	private function __construct(){
		$this->url = 'http://techberry.org/';
		$this->dbHost = 'techbmain.db.11499199.hostedresource.com';
		$this->dbUser = 'techbmain';
		$this->dbPass = 'H763#kjsduy93';
		$this->dbName = 'techbmain';
	}
	
	protected static $forumPrefix = 'forum_';
	protected static $dbForumName = 
					array(
						'reply' => 
							array(
								'table' => 'replies',
								'id'    => 'reply_id',
								'edit'  => 
									array(
										'table' => 'replyEdits'
									),
								'flag'  => 
									array(
										'table' => 'replyFlags'
									)
							),
						'post' => 
							array(
								'table' => 'posts',
								'id'    => 'post_id',
								'edit'  => 
									array(
										'table' => 'postEdits'
									),
								'flag'  => 
									array(
										'table' => 'postFlags'
									)
							),
						'topic' => 
							array(
								'table' => 'topics',
								'id'    => 'topic_id',
								'edit'  => 
									array(
										'table' => 'topicEdits'
									),
								'flag'  => 
									array(
										'table' => 'topicFlags'
									),
								'commit' =>
									array(
										'table' => 'topicCommits'
									)
							),
						'category' => 
							array(
								'table' => 'categories',
								'id'    => 'category_id',
								'edit'  => 
									array(
										'table' => 'categoryEdits'
									),
								'flag'  => 
									array(
										'table' => 'categoryFlags'
									),
								'commit' =>
									array(
										'table' => 'categoryCommits'
									)
							)
					);
}
?>