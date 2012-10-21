<?php


	/**
	* 
	*/
	class PhotosModel extends Model{
		
		public function delete($id){
			
			$row = $this->find($id);
			$path = C('TMPL_PARSE_STRING.__CPHOTOS__').'/'.$row['member_id'].'/'.$row['name'];
			
			$this->deletePicture($path);
			$this->deletePicture('thumb_'.$path);
			return parent::delete($id);
			
			
		}
		
		private function deletePicture($path){
			unlink($path);
		}
	}
	

?>