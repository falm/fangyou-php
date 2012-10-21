<?php 

	/**
	* 
	*/
	class MemberAction extends Action{
		
		public function _initialize(){
			
		}
		
		
		public function index(){
			
			$member = D('Members');
			
			
			$result = $member->find($_SESSION['user_id']);
			
			
			$this->assign('row',$result);
			
			$this->display();
			
			
		}
		
		public function setting(){
			
			$member = D('Members');
			
			
			$result = $member->find($_SESSION['user_id']);
			
			
			$this->assign('row',$result);
			
			$this->display();
		}
		
		public function update(){
			$member = D('Members');
		
			
			$id = $_SESSION['user_id'];
			$member->find($id);
			
			$member->create();

			//$member->brithday  = date("Y-m-d",strtotime($this->_post('brithday')));
			$member->changeFormat();
			if ($member->save()) {
				
				//$this->assign('jumpUrl','setting');
				$this->success('设置成功！'.$member->brithday,'__URL__/setting');
			}else{
				//$this->assign('jumpUrl','setting');
				$this->error('设置失败！'.$date,'__URL__/setting');
			}
		}
		
		public function useCard(){
			$db = D('Moodandstyle');
			$member_id = $_SESSION['user_id'];
			$res = $db->where("`member_id`='$member_id'")->setField('style',$this->_get('style'));
			
			if ($res) {
				$this->ajaxReturn(1,'使用成功',1);
			}else{
				$this->ajaxReturn(0,'使用失败',0);			
			}
		}
		
		public function signIn(){
			$mood = D('Moodandstyle');
			$mood->create();
			$mood->member_id = $_SESSION['user_id'];
			if($mood->add()){
				//$this->ajaxReturn(1,'签到成功',1);
				//$this->assign('jumpUrl','/setting');
				//$this->success('设置成功！');
				$this->redirect('Index/main');
			}else{
				$this->redirect('Index/main');
				//$this->ajaxReturn(0,'签到失败',0);
				//$this->assign('jumpUrl','/setting');
				//$this->error('设置失败！');				
			}
		}
		
		public function search(){
			$db = D('Members');			
			
			if($this->isPost()){
				$username = $this->_post('username');
				$conditions = "username like '$username'";
				$list = $db->where($conditions)->select();
				$this->assign('list',$list);
			}else{
				$list = $db->select();
				$this->assign('list',$list);
			}
			
			$this->display();
		}
		
		public function add(){
			
			$db = D('Membership');
			
			$data['member_id'] = $_SESSION['user_id'];
			$data['friend_id'] = $this->_get('id');
			
			if ($db->add($data)) {
				$this->ajaxReturn(1,'添加成功！',1);
			}else{
				$this->ajaxReturn(1,'添加失败',1);
			}
		}
		
	}
	

?>