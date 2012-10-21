<?php 



	class MessageAction extends Action{
		
		public function _initialize(){
			
		}
		

		public function index(){
			
			$this->inbox();
			$this->helper();
			$this->display();

		}
		

		
		public function inbox(){
			$db = D('Messages');
			
			$list = $db->inbox();//$db->findByUser();//$db->inbox();
			
			$this->assign('list',$list);
			
			$friend = $db->findByFriend();
			
			$this->assign('friendList',$friend);
			
		}
		
		public function send(){
			$Message = D('Messages');
			
			$Message->create();
			$Message->member_id = $_SESSION['user_id'];
			if($Message->add()){
				//$this->redirect("Message/index",'',3,'添加成功');
				$this->success('发送成功');
			}else{
				//$this->redirect("Message/index",'',3,'添加失败');
				$this->error('发送失败');
			}
		}
				
		private function helper(){
			$style = array('success','info');
			$float = array('r','l' );
			$this->assign('style',$style);
			$this->assign('float',$float);
		}
		
		private function echoCategory(){
			
			
			$this->assign('list',$this->getCategory());			
		}
		
		private function getCategory(){
			$pid = getSetting('Message_Cid');
			return getCategory($pid);
		}
	}
	

?>