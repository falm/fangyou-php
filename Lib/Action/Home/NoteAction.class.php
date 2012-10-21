<?php 


	/**
	* 
	*/
	class NoteAction extends Action{
		
		public function _initialize(){
			
		}
		

		public function index(){
			
			$note = D('Notes');
		
			$result = $note->findByUser();
			
			$clist = $this->getCategory();
			foreach ($result as $value) {							
				switch ($value['category_id']) {
					case $clist[0]['id']:
						$list1[]=$value;
						break;
					case $clist[1]['id']:
						$list2[]=$value;
						break;	
					default:
						$list3[]=$value;
						break;
				}
			}
			
			$this->assign('list1',$list1);
			$this->assign('list2',$list2);
			$this->assign('list3',$list3);
			//$this->assign('list',$result);
			$this->display();
		}
		
		public function add(){
			
			$this->echoCategory();
			$this->display();
		}
		
		public function create(){
			$note = D('Notes');
			
			$note->create();
			$note->member_id = $_SESSION['user_id'];
			if($note->add()){
				$this->redirect("Note/index",'',3,'添加成功');
			}else{
				$this->redirect("Note/index",'',3,'添加失败');
			}
		}
				
		public function edit(){
			$note = D('Notes');
			$id = $this->_get('id');
			$row = $note->find($id);
			
			$this->echoCategory();
			$this->assign('row',$row);
			$this->display();
		}
		
		public function update(){
			
			$note = D('Notes');
			
			if($note->create()){
				//dump($_POST);
				if(!$note->save()){
					$this->redirect("Note/index",'',3,'修改失败');
				}
				$this->redirect("Note/index",'',3,'修改成功');
			}else{
				$this->error($note->errorInfo());
			}
		}
		
		public function show(){
			$note = D('Notes');
			$result = $note->find($this->_get('id'));
			$this->assign('row',$result);
			$this->display();
		}
		private function echoCategory(){
			
			
			$this->assign('list',$this->getCategory());			
		}
		
		private function getCategory(){
			$pid = getSetting('Note_Cid');
			return getCategory($pid);
		}
	}
	

?>