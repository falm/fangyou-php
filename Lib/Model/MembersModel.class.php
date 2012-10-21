<?php

	/**
	* 用户模型类
	*/
	class MembersModel extends Model{
		
		protected	$_validate = array(
			array('repassword','password','两次密码不一致',0,'confirm'),
			array('username','','该用户名已经被使用',0,'unique',3 ),
		);
		
		protected $_auto = array(
			array('password','md5',1,'function'),
			array('registertime','getTime',1,'callback')
		);
		
		
		public function login($user,$pwd){
			$pwd = md5($pwd);
			$conditions = "`username`='$user' and `password`='$pwd'";
			return $this->where($conditions)->find();
			
		}
		
		public function getTime(){
			return strtotime("now");
		}
		
		public function findByFriend($user_id){
			//$user_id = $_SESSION['user_id'];
			
			$sql = "SELECT id,username FROM members WHERE id in (SELECT friend_id FROM membership WHERE member_id='$user_id')";
			$sql2= "SELECT id,username FROM members WHERE id in (SELECT member_id FROM membership WHERE friend_id='$user_id')";
			$list = $this->query($sql);
			
			$list = array_merge($list,$this->query($sql2));
			return $list;			
		}
		
		public function dateToTimestamp($date){
			$temp=explode(" ",$date);
			$temp1=explode("-",$temp[0]);
			$temp2=explode(":",$temp[1]);
			return mktime($temp2[0],$temp2[1],$temp2[2],$temp1[1],$temp1[2],$temp1[0]);			
		}
		
		public function changeFormat(){
			$this->brithday  = date("Y-m-d",strtotime($_POST['brithday']));
		}
	}
	

?>