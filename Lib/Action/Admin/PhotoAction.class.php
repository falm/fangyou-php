<?php


	/**
	* 
	*/
	
	
	
	class PhotoAction extends Action{
		
		private $_table;
		private $_action;
		
		public function _initialize(){
			checkAdmin();
			$this->_table = 'Photos';
			$this->_action = 'Photo';
			
		}		
		
		function index(){
			$this->display();
		}
		
		public function getdata(){
			
			getData($this->_table);
		}
		
		public function add(){
			
			$this->getMembers();
			$this->display();
		}
		
		public function create(){
			$Photo = D($this->_table);
			
			$info = $this->upload();
			
			$Photo->create();
			
			$Photo->name = $info[0]['savename'];
			
			if($Photo->add()){
				$this->redirect("{$this->_action}/index",'',3,'添加成功');
			}else{
				$this->redirect("{$this->_action}/index",'',3,'添加失败');
			}
		}
		
		
		public function edit(){
			
			$Photo = D($this->_table);
			$id = $this->_get('id');
			
			$row = $Photo->find($id);
			
			$this->assign('row',$row);
			$this->display();
		}
		
		public function update(){
			
			$Photo = D($this->_table);
			
			if($Photo->create()){
				//dump($_POST);
				if(!$Photo->save()){
					$this->redirect("{$this->_action}/index",'',3,'修改失败');
				}
				$this->redirect("{$this->_action}/index",'',3,'修改成功');
			}else{
				$this->error($Photo->errorInfo());
			}
		}
		public function destroy(){
			$Photo = D($this->_table);
			$id = $this->_get('id');
		
			if($Photo->delete($id)){
				
				$this->redirect("{$this->_action}/index",NULL,3,'删除成功');
			}else{
				$this->redirect("{$this->_action}/index",NULL,3,'删除失败');
			}
		}
		
		public function upload(){
			
			
			$Photo_id = $this->_post('member_id');
			import('ORG.Net.UploadFile');
			
			$upload = new UploadFile();
			$upload->maxSize = 365500;
			$upload->allowExts = array('jpg','gif','png','jpeg' );
			$upload->savePath = C('TMPL_PARSE_STRING.__CUPLOAD__')."/$Photo_id/";
			$upload->thumb = true;
			$upload->thumbMaxWidth = '50';
			$upload->thumbMaxHeight = '50';
			
			if(!$upload->upload()){
				$this->error($upload->getErrorMsg());
			}else {
				$info = $upload->getUploadFileInfo();
			}
			
			
			return $info;
		}
		
		public function look(){
			$path = "{$this->_get('id')}/{$this->_get('name')}";
			$this->assign('path',$path);
			$this->display();
		}
		
		public function getMembers(){
			$db = D('Members');
			$result = $db->field('id,username')->select();
			$this->assign('list',$result);
		}
	}
	

?>