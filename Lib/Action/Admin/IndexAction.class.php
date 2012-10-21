<?php

	/**
	* 
	*/
	class IndexAction extends Action{
		
		function index(){
			//echo 'Welcome to Admin';
			$this->display('login');
		}
		
		public function main(){
			checkAdmin();
			$this->display();
		}
		
		public function login(){
			
			
			if (!$this->isPOST()) {
				$this->error('非法请求');
			}
			
			$this->verify();
			
			$user = $this->_post('username');
			$pwd = $this->_post('password');
			$db = D('Administrators');
			
			if($db->login($user,$pwd)){
			
				$this->success('登陆成功','__GROUP__/Index/main');
			}else{
				$this->error('用户名或密码无效');
			}
		}
		
		public function logout(){
			
			
			unset($_SESSION['admin']);
			unset($_SESSION['admin_id']);
			$this->redirect('/cbox/index/',2,'退出中');
		}
		
		public function welcome(){
			$this->display('content');
		}
		
		public function left(){
			$this->display();
		}
		
		public function top(){
			$this->display();
		}
		
		private function verify(){
			
			if(md5($_POST['verify'])!=$_SESSION['verify']){
				$this->error('验证码错误');
			}			
		}
	}
	

?>