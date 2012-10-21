<?php




	/**
	* 
	*/
	class MemberAction extends Action{
		
		public function _initialize(){
			checkAdmin();
		}
		function index(){
			$this->display();
		}
		
		public function getdata(){
			
			getData('Members');
		}
		
		public function add(){
			$this->display();
		}
		
		public function create(){
			$member = D('Members');
			
			$member->create();
			
			if($member->add()){
				$this->redirect('Member/index','',3,'添加成功');
			}else{
				$this->redirect('Member/index','',3,'添加失败');
			}
		}
		
		
		public function edit(){
			$member = D('Members');
			$id = $this->_get('id');
			
			$row = $member->find($id);
			
			$this->assign('row',$row);
			$this->display();
		}
		
		public function update(){
			
			$member = D('Members');
			
			if($member->create()){
				//dump($_POST);
				if(!$member->save()){
					$this->redirect('Member/index','',3,'修改失败');
				}
				$this->redirect('Member/index','',3,'修改成功');
			}else{
				$this->error($member->errorInfo());
			}
		}
		public function destroy(){
			$member = D('Members');
			$id = $this->_get('id');
			if($member->delete($id)){
				$this->redirect('Member/index',NULL,3,'删除成功');
			}else{
				$this->redirect('Member/index',NULL,3,'删除失败');
			}
		}
		
		public function Look(){
		
			
			
			$this->display();
		}
		
		public function getFriends(){
			$id = $this->_get('id');
			$sql = "SELECT * FROM members WHERE id in ( SELECT friend_id FROM membership WHERE  member_id = $id )";
			$sql2 = "SELECT * FROM members WHERE id in ( SELECT member_id FROM membership WHERE  friend_id = $id)";
			getDataWithSql('Members',$sql,$sql2);
		}
		
		
		
	}
	

?>