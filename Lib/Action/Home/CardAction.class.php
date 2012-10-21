<?php


	/**
	* 
	*/
	class CardAction extends Action{
		
		public function index(){
			$card = D('Cards');
		
			$result = $card->findByUser();
			
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
			$this->display();			
		}
		
		
		public function add(){
			
			$this->echoCategory();
			$this->display();
		}
		
		public function create(){
			$note = D('Cards');
			
			$note->create();
			$note->member_id = $_SESSION['user_id'];
			if($note->add()){
				//$this->redirect("Note/index",'',3,'添加成功');
				$this->success('添加成功！');
			}else{
				//$this->redirect("Note/index",'',3,'添加失败');
				$this->success('添加失败！');
			}
		}
		
		
		public function destroy(){
			$member = D('Cards');
			$id = $this->_get('id');
			if($member->delete($id)){
				$this->ajaxReturn(1,'删除成功！',1);
				//$this->success('删除成功!');
			}else{
				//$this->success('删除失败!');
				$this->ajaxReturn(0,'删除失败！',0);
			}
		}		
		
		
		
		private function echoCategory(){
			$this->assign('list',$this->getCategory());			
		}
		
		private function getCategory(){
			$pid = getSetting('Card_Cid');
			return getCategory($pid);
		}		
	}
	

?>