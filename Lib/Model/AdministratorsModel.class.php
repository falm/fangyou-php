<?php


	/**
	* 
	*/
	class AdministratorsModel extends Model{
		
		protected	$_auto = array(
				
				array('password','md5',1,'function'),
				
				
		);
			
		protected	$_validate = array(
				array('repassword','password','确认密码不一致',0,'confirm'),
				array('username','','该用户名已经被使用',0,'unique',3 ),
		);
		
		
		public function login($user,$pwd){
			$pwd = md5($pwd);
			

			
			$conditions = "`username` = '$user' and `password`='$pwd'";
			
			$res = $this->where($conditions)->find();
			if ($res) {
				$_SESSION['admin'] = $user;
				$_SESSION['admin_id'] = $res['id'];
			}
			return $res;
		}
		

	}
	

?>