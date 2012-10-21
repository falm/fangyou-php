<?php



	/**
	* 
	*/
	class page{
		
		
		private $_list_rows;
		private $_count;
		
		public	$page;
		public $limit;
		public $start;

		function __construct($count,$list_rows = NULL){
			
			$this->_list_rows = empty($list_rows) ? C('LIST_ROWS_NUM') : $list_rows;
			$this->_count = $count;
			$this->run();
		}
		
		
		private function run(){
			$page = isset($_POST['p']) ? $_POST['p'] : 1 ;
			//$rp = isset($_POST['rp']) ? $_POST['rp'] : $this->_list_rows ;
			$rp = $this->_list_rows;
			$this->page = $page;
			
			$start = ($page-1) * $rp;
			
			
			$this->limit = "$start,$rp";
			$this->start = $start;
			
		}
	}
	

?>