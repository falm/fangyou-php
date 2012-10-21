<?php


	/**
	* 
	*/
	
	
	
	class CategoryAction extends Action{
		
		private $_table;
		private $_action;
		
		public function _initialize(){
			checkAdmin();
			$this->_table = 'Categoires';
			$this->_action = 'Category';
			
		}		
		
		function index(){
			
			$cate = D($this->_table);
			
			$result = $cate->field('id,pid,name')->select();
			$this->assign('list',json_encode($result));
			$this->display();
		}
		

		public function add(){
			
			
			$this->display();
		}
		
		public function create(){
			$cate = D($this->_table);
			
			$cate->create();
			
			if($cate->add()){
				$this->redirect("{$this->_action}/index",'',3,'添加成功');
			}else{
				$this->redirect("{$this->_action}/index",'',3,'添加失败');
			}
		}
		
		
		public function edit(){
			$cate = D($this->_table);
			$id = $this->_get('id');
			
			$row = $cate->find($id);
			
			$this->assign('row',$row);
			$this->display();
		}
		
		public function update(){
			
			$cate = D($this->_table);
			$id = $this->_get('id');
			$cate->find($id);
			$cate->name = $this->_get('name');
			
			if(!$cate->save()){
				//$this->redirect("{$this->_action}/index",'',3,'修改失败');
				
				$this->ajaxReturn(0,'修改失败',0);
			}
			//$this->redirect("{$this->_action}/index",'',0,'修改成功');
			$this->ajaxReturn(1,'修改成功',1);
		}
		public function destroy(){
			$cate = D($this->_table);
			$id = $this->_get('id');
		
			if($cate->delete($id)){
				$this->ajaxReturn(0,'删除成功',0);
			}else{
				$this->ajaxReturn(0,'删除失败',0);
			}
		}
		
		
	}
	

?>