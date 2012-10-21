<?php

	/**
	* 
	*/
	class NotesModel extends Model{
		

		public function findByUser(){
			$member_id = $_SESSION['user_id'];
			$conditions = "`member_id` = '$member_id'";
			return $this->where($conditions)->select();
		}
	}
	

?>