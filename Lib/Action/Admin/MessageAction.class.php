<?php


	/**
	* 
	*/
	
	
	
	class MessageAction extends Action{
		
		private $_table;
		private $_action;
		
		public function _initialize(){
			checkAdmin();
			$this->_table = 'Messages';
			$this->_action = 'Message';
			
		}		
		
		function index(){
			$this->display();
		}
		
		public function getdata(){
			
			getData($this->_table);
		}
		
		public function add(){
			$this->display();
		}
		
		public function create(){
			$message = D($this->_table);
			
			$message->create();
			
			if($message->add()){
				$this->redirect("{$this->_action}/index",'',3,'添加成功');
			}else{
				$this->redirect("{$this->_action}/index",'',3,'添加失败');
			}
		}
		
		
		public function edit(){
			$message = D($this->_table);
			$id = $this->_get('id');
			
			$row = $message->find($id);
			
			$this->assign('row',$row);
			$this->display();
		}
		
		public function update(){
			
			$message = D($this->_table);
			
			if($message->create()){
				//dump($_POST);
				if(!$message->save()){
					$this->redirect("{$this->_action}/index",'',3,'修改失败');
				}
				$this->redirect("{$this->_action}/index",'',3,'修改成功');
			}else{
				$this->error($message->errorInfo());
			}
		}
		public function destroy(){
			$message = D($this->_table);
			$id = $this->_get('id');
		
			if($message->delete($id)){
				$this->redirect("{$this->_action}/index",NULL,3,'删除成功');
			}else{
				$this->redirect("{$this->_action}/index",NULL,3,'删除失败');
			}
		}
	}
	

?>