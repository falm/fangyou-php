<?php 


	/**
	* 
	*/
	class PhotoAction extends Action{
		
		public function _initialize(){
			
		}
		
		public function index(){
			
			$photo = D('Photos');
			$member_id = $_SESSION['user_id'];
			$res = $photo->where("`member_id` = '$member_id'")->select();
			//echo $member_id;
			//dump($res);
			$this->assign('list',$res);
			$this->display();
		}
		
		public function create(){
			
			$Photo = D('Photos');
			
			$info = $this->upload();
			
			$Photo->create();
			
			$Photo->name = $info[0]['savename'];
			$Photo->member_id = $_SESSION['user_id'];
			if($Photo->add()){
				//$this->redirect("Photo/index",'',2,'添加成功');
				$this->success('上传成功！');
			}else{
				//$this->redirect("Photo/index",'',2,'添加失败');
				$this->error('上传失败！');
			}			 	
		} 
		
		protected function upload(){
			
			
			$Photo_id = $_SESSION['user_id'];//$this->_session('user_id');
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
	}
	
	
?>