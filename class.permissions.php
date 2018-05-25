<?php
namespace techberry\core;

class permissions{

    private $mysqli;
    
    function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }
	
	public function restartUserGroupPrivileges()
	{
		for($i = -2; $i <= 9; $i++)
		{
			if($stmt = $this->mysqli->prepare("
				INSERT INTO group_permissions (group_id, action_id)  
				(
					SELECT ?, id 
					FROM permissions 
					WHERE required_points <= ( SELECT privilegeReputationStart FROM user_groups WHERE id = ? )
				)")){
				$stmt->bind_param('ii',$i,$i);
				$stmt->execute();
				$stmt->close();
			}
			else
			{
				return false;
			}
		}
		return true;
	}
	
	/*
		Return an array of all the users privileges
		** array contains name of actions allowed
	*/
	public function getUserPrivileges($user_id,$isCompressed=1){
		$sql = "(SELECT p1.action,
							  p1.id
				   FROM user_permissions AS u1
				   INNER JOIN permissions AS p1 ON (p1.id = u1.action_id)
				   WHERE u1.user_id = ?)
				UNION
				  (SELECT p2.action,
						  p2.id
				   FROM users AS u2
				   INNER JOIN user_groups AS g ON (g.id = u2.group_id)
				   INNER JOIN group_permissions AS gp ON (gp.group_id = g.id)
				   INNER JOIN permissions AS p2 ON (p2.id = gp.action_id)
				   WHERE u2.id = ?) ";
	   if(isset($_SESSION['group_id'])){
			// Once the user is part of the 'trusted' group and beyond
			// any permissions are granted assuming reputation is met
			if($_SESSION['group_id'] >= 4){
				$includeAllPrivilegesBasedOnReputation = 1;
				$sql .= "UNION
							(
								SELECT p.action, 
										   p.id
								FROM permissions AS p
								WHERE p.required_points <=
									(SELECT reputation
									 FROM users
									 WHERE id = ?
									 LIMIT 1)
							)";
			}
	   }
		if($isCompressed==1)
		{
			if($stmt = $this->mysqli->prepare($sql)){
				if($includeAllPrivilegesBasedOnReputation){
					$stmt->bind_param('iii',$user_id,$user_id,$user_id);
				}else{
					$stmt->bind_param('ii',$user_id,$user_id);
				}
				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result($action_name,$action_id);
				$user_privileges = array();
				while($stmt->fetch()){
					$user_privileges[$action_name] = $action_id;
				}
				$stmt->close();
				return $user_privileges;
			}else{
				return false;
			}
		}else{
			if($stmt = $this->mysqli->prepare("
				(SELECT p1.id,
						p1.name,
						p1.action,
						p1.description
					FROM user_permissions as u1
					INNER JOIN permissions as p1 
						ON(p1.id = u1.action_id)
					WHERE u1.user_id = ?)
				UNION
				(SELECT p2.id,
						p2.name,
						p2.action,
						p2.description
					FROM users AS u2
					INNER JOIN user_groups as g
						ON(g.id = u2.group_id)
					INNER JOIN group_permissions AS gp
						ON(gp.group_id = g.id)
					INNER JOIN permissions AS p2
						ON(p2.id = gp.action_id)
					WHERE u2.id = ?)")){
				$stmt->bind_param('ii',$user_id,$user_id);
				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result($id,$name,$action,$description);
				$user_privileges = array();
				while($stmt->fetch()){
					$user_privileges[] = array(
								'id'=>$id,
								'name'=>$name,
								'action'=>$action,
								'description'=>$description);
				}
				$stmt->close();
				return $user_privileges;
			}else{
				return false;
			}
		}
	}
	
	public function getPrivileges(){
		if($stmt = $this->mysqli->prepare("
			SELECT id,
				   name,
				   action,
				   description,
				   platform,
				   required_points
				FROM(
			SELECT id,
				   name,
				   action,
				   description,
				   platform,
				   required_points
			FROM permissions
				ORDER BY required_points
				)
				AS a
				ORDER BY platform DESC
				")){
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id,$name,$action,$description,$platform,$required_points);
			$privileges = array();
			while($stmt->fetch()){
				$privileges[] = array(
							'id'=>$id,
							'name'=>$name,
							'action'=>$action,
							'description'=>$description,
							'platform'=>$platform,
							'required_points'=>$required_points);
			}
			$stmt->close();
			return $privileges;
		}else{
			return false;
		}
	}	
	
	/*
		Verify if the user has permission to
		perform the specified action
	*/
	public function hasPermission($action){
		if($stmt = $this->mysqli->prepare("
			SELECT IF(SUM(pc.pa) > 0, 1, 0)
			FROM
			(
				SELECT pa
				FROM
				(
					(
						SELECT
						(
							EXISTS
							(
								SELECT 1
								FROM user_permissions AS up
								INNER JOIN permissions AS p ON ( up.action_id = p.id ) 
								WHERE up.user_id = ?
								AND p.action = ?
							)
						) as pa
					)
					UNION ALL
					(
						SELECT
						(
							EXISTS
							(
								SELECT 1
									FROM users AS u2
									INNER JOIN user_groups as g
										ON(g.id = u2.group_id)
									INNER JOIN group_permissions AS gp
										ON(gp.group_id = g.id)
									INNER JOIN permissions AS p2
										ON(p2.id = gp.action_id)
									WHERE u2.id = ?
									AND p2.action = ?
							)
						) as pa
					)
				) as pb
			) as pc")){
			$stmt->bind_param('isis',$_SESSION['user_id'],$action,$_SESSION['user_id'],$action);
			$stmt->execute();
			$stmt->bind_result($hasPermission);
			$stmt->fetch();
			if($hasPermission==1){
				$stmt->close();
				return true;
			}else{
				$stmt->close();
				return false;
			}
		}else{
			return false;
		}
	}
}
?>