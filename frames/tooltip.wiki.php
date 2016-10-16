<?php
	namespace techberry\tooltip\wiki;

	class toolTipWiki{
		/*
			No need opening and closing database
			connections as this tree is more easily
			accessible directly for modification
		*/
		public static $tree = 
		array(
			'forum'=>
				array(
					'category'=>
						array(
							'pending'=>"This category is pending",
							'loadMore'=>"Load more categories",
							'viewCount'=>"This count is based on approximations",
							'flag'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'lock'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'commit'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'submit'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'edit'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges",
									'queue'=>"New edits are placed in a queue while awaiting peer reviews, if the queue limit is reached no further edits may be suggested.",
									'cannotSave'=>"Previous edits can't be altered, they may only published or removed",
									'commit'=>
										array(
											'lackPrivilege'=>"You have insufficient privileges"
										)
								),
							'create'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								)
						),
					'topic'=>
						array(
							'pending'=>"This topic is pending",
							'loadMore'=>"Load more topics",
							'viewCount'=>"This count is based on approximations",
							'flag'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'lock'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'commit'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'submit'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges",
									'categoryPending'=>"The parent category is pending"
								),
							'edit'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges",
									'queue'=>"New edits are placed in a queue while awaiting peer reviews, if the queue limit is reached no further edits may be suggested.",
									'cannotSave'=>"Previous edits can't be altered, they may only published or removed",
									'commit'=>
										array(
											'lackPrivilege'=>"You have insufficient privileges"
										)
								),
							'create'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								)
						),
					'post'=>
						array(
							'pending'=>"This post is pending",
							'loadMore'=>"Load more posts",
							'viewCount'=>"This count is based on approximations",
							'flag'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'lock'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'submit'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges",
									'topicPending'=>"The parent topic is pending"
								),
							'edit'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges",
									'queue'=>"New edits are placed in a queue while awaiting peer reviews, if the queue limit is reached no further edits may be suggested.",
									'cannotSave'=>"Previous edits can't be altered, they may only published or removed",
									'commit'=>
										array(
											'lackPrivilege'=>"You have insufficient privileges"
										)
								),
							'create'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								)
						),
					'reply'=>
						array(
							'pending'=>"This reply is pending",
							'loadMore'=>"Load more replies",
							'viewCount'=>"This count is based on approximations",
							'flag'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'lock'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'submit'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								),
							'edit'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges",
									'queue'=>"New edits are placed in a queue while awaiting peer reviews, if the queue limit is reached no further edits may be suggested.",
									'cannotSave'=>"Previous edits can't be altered, they may only published or removed",
									'commit'=>
										array(
											'lackPrivilege'=>"You have insufficient privileges"
										)
								),
							'create'=>
								array(
									'lackPrivilege'=>"You have insufficient privileges"
								)
						)
				),
			'user'=>
				array(
					'group'=>
						array(
							'root'=>"This user is an active contributer to the websites development",
							'new'=>"This user is new to the site",
							'unofficial'=>"<u>Unofficial</u> representative of the respective site",
							'official'=>"<u>Official</u> representative of the respective site",
						),
					'new'=>"You're new to the site; engage in discussions and the general community to gain privileges",
					'moderator'=>"A user who has raised privileges to moniter the quality and consistency of user submitted content",
					'profile'=>
						array(
							'loadMore'=>"Load more wall posts"
						),
					'bot'=>"This is an automated account"
				),
			'badge'=>
				array(
					'unlocked'=>"You have unlocked this badge",
					'locked'=>"You have yet to unlock this badge"
				),
			'privilege'=>
				array(
					'unlocked'=>"You have this privilege"
				),
			'general'=>
				array(
					'action'=>
						array(
							'sendMessage'=>
								array(
									'im'=>"Open up the instant messenger"
								),
							'follow'=>"Following this user will allow you to recieve updates and notifications when new posts/uploads are made",
							'unfollow'=>"You will no longer be updated regarding this users activity"
						)
				),
			'form'=>
				array(
					'username'=>"Only alpha numeric characters are allowed",
					'email'=>"example@example.com",
					'password'=>"Allowed characters are...",
					'verifyPassword'=>"Allowed characters are..."
				),
			'news'=>
				array(
					'comments'=>array(
									'loadMore'=>"Load more comments",
								)
				)
		);
		private $tokens;
		private $parsedTree;
		function __construct(){
			if(isset($_GET['explain'])){
				if(strlen($_GET['explain'])>1000 && strlen($_GET['explain'])<2){
					// Ignore queries which exceed limit
					die("Invalid parameter");
				}else{
					$this->tokens = explode(":", $_GET['explain']);
					$i=0;
					foreach($this->tokens as $branch){
						if($i===0){
							$this->parsedTree = self::$tree[$branch];
						}else{
							$this->parsedTree = $this->parsedTree[$branch];
						}
						$i++;
					}
					/*
						Print final message and cease execution
						- NaN if failed to parse tree
					*/
					empty($this->parsedTree)?die('NaN'):die($this->parsedTree);
				}
			}else{
				die("Invalid parameter");
			}
		}
	}
	$ttw = new toolTipWiki();
?>