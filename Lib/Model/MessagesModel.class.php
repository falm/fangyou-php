<?php


	/**
	* 
	*/
	class MessagesModel extends Model{
		
		public function findByUser(){
			$user = $_SESSION['user_id'];
			//$conditions = "`target_id`='$user' and `way`=0";
			$sql = "SELECT m.message,m.postdate,u.username FROM messages as m join members as u on m.member_id=u.id 
			WHERE `target_id`='$user' and `way`=0";
			return $this->query($sql);
		}
		
		public function inbox(){
			$member_id = $_SESSION['user_id'];
			$sql = "SELECT m.message,m.postdate,u.username  FROM messages as m join members as u on  m.member_id = u.id
			WHERE way=1 and member_id in (SELECT friend_id FROM membership WHERE member_id = '$member_id')";
			$sql2 ="SELECT m.message,m.postdate,u.username  FROM messages as m join members as u on  m.member_id = u.id
			WHERE way=1 and member_id in (SELECT member_id FROM membership WHERE friend_id = '$member_id')";
			
			$list = array_merge($this->query($sql),$this->query($sql2));
			//$list = $this->query($sql);
			$list = array_merge($list,$this->findByUser());
			return $list;
		}
		
		public function findByFriend(){
			$user_id = $_SESSION['user_id'];
			
			$sql = "SELECT id,username FROM members WHERE id in (SELECT friend_id FROM membership WHERE member_id='$user_id')";
			$sql2= "SELECT id,username FROM members WHERE id in (SELECT member_id FROM membership WHERE friend_id='$user_id')";
			$list = $this->query($sql);
			
			$list = array_merge($list,$this->query($sql2));
			return $list;
		}
	}
	

?>