<?php


	/**
	* 
	*/
	
	
	
	class NoteAction extends Action{
		
		private $_table;
		private $_action;
		
		public function _initialize(){
			checkAdmin();
			$this->_table = 'Notes';
			$this->_action = 'Note';
			
		}		
		
		function index(){
			$this->display();
		}
		
		public function getdata(){
			
			getData($this->_table);
		}
		
		public function add(){
			$this->echoMember();
			$this->echoCategory();
			$this->display();
		}
		
		public function create(){
			$note = D($this->_table);
			
			$note->create();
			
			if($note->add()){
				$this->redirect("{$this->_action}/index",'',3,'添加成功');
			}else{
				$this->redirect("{$this->_action}/index",'',3,'添加失败');
			}
		}
		
		
		public function edit(){
			$note = D($this->_table);
			$id = $this->_get('id');
			$row = $note->find($id);
			
			$this->echoCategory();
			$this->assign('row',$row);
			$this->display();
		}
		
		public function update(){
			
			$note = D($this->_table);
			
			if($note->create()){
				//dump($_POST);
				if(!$note->save()){
					$this->redirect("{$this->_action}/index",'',3,'修改失败');
				}
				$this->redirect("{$this->_action}/index",'',3,'修改成功');
			}else{
				$this->error($note->errorInfo());
			}
		}
		public function destroy(){
			$note = D($this->_table);
			$id = $this->_get('id');
		
			if($note->delete($id)){
				$this->redirect("{$this->_action}/index",NULL,3,'删除成功');
			}else{
				$this->redirect("{$this->_action}/index",NULL,3,'删除失败');
			}
		}
		
		public function search(){
			$username = $this->_get('username');
			$sql = "SELECT * FROM Notes WHERE note_id IN (SELECT note_id FROM notes WHERE username='$username')";
			getDataWithSql('Notes',$sql);
		}
		
		public function echoCategory(){
			$pid = getSetting('Note_Cid');
			
			$this->assign('list',getCategory($pid));			
		}
		
		public function echoMember(){
			$member = D('Members');
			$res = $member->select();
			
			$this->assign('member_list',$res);
		}
	}
	

?>