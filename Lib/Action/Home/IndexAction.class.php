<?php

class IndexAction extends Action {
	
    public function index(){
		$this->display();
    }
    
    public function login(){
    	$member = D('Members');
    	$user = $this->_post('username');
    	$pwd = $this->_post('password');
    	$res = $member->login($user,$pwd);
    	if($res){
    		//$this->_session('user',$user);
    		//$this->_session('user_id',$res['id']);
    		$_SESSION['user'] = $user;
    		$_SESSION['user_id'] = $res['id'];
    		$this->assign('jumpUrl','main');
    		$this->success('登陆成功');
    	}else{
    		$this->assign('jumpUrl','index');
    		$this->error('登陆失败');
    	}
    }
    
    public function register(){
    	$member = D('Members');
    	
    	$member->create();
    	
    	if($member->add()){
    		$this->assign('jumpUrl','index');
    		$this->success('注册成功');
    	}else{
    		$this->assign('jumpUrl','index');
    		$this->error('注册失败');
    	}
    }
    public function logout(){
    	//$this->_session('user',NULL);
    	unset($_SESSION['user']);
    	unset($_SESSION['user_id']);
    	$this->redirect('Index/index');
    }
    
    public function main(){
    	
    	
    	
    	$this->display();
    }
}