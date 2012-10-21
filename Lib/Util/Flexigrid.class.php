<?php



	/**
	* 
	*/
	class Flexigrid
	{

		private $_page_instance;	//Page类的实例
		private $_db;				//表Model类的实例
		
		public function __construct(&$p,&$db){
			
			//header("Content-type: application/json");
			
			$this->_page_instance= $p;
		
			$this->_db = $db;	
		}
		//获取数据列表
		private function getList(){
			
			$limit_options = $this->_page_instance->limit;
			return $this->_db->limit($limit_options)->select();
		}
		// 输出Flexigrid所需的json数据 
		//params  设定Flexigrid 行中的键 是那个字段 $pk 默认值为 'id'
		public function output($pk = 'id'){
			
			$list = $this->getList();
			//dump($list);
			$total = count($list);
			
			$jsonData = array('page'=>$this->_page_instance->page,'total'=>$total,'from'=>$this->_page_instance->start,'rows'=>array());
			
			foreach ($list as  $row) {
					$cell = array();
					foreach ($row as $key => $value) {
						$cell[$key] = $row[$key];
					}
					$entry = array('id'=>$row[$pk],'cell'=>$cell );
					$jsonData['rows'][] = $entry;
			}	
						
			echo json_encode($jsonData);			
		}
		
		// 输出Flexigrid所需的json数据  带参数的查询
		//params  设定Flexigrid 行中的键 是那个字段 $pk 默认值为 'id'
		public function outputWithOption($conditions,$pk = 'id'){
			
			$list = $this->_db->limit( $this->_page_instance->limit )->where($conditions)->select();
			//dump($list);
			$total = count($list);
			
			$jsonData = array('page'=>$this->_page_instance->page,'total'=>$total,'from'=>$this->_page_instance->start,'rows'=>array());
			
			foreach ($list as  $row) {
					$cell = array();
					foreach ($row as $key => $value) {
						$cell[$key] = $row[$key];
					}
					$entry = array('id'=>$row[$pk],'cell'=>$cell );
					$jsonData['rows'][] = $entry;
			}	
						
			echo json_encode($jsonData);			
		}
		
		// 输出Flexigrid所需的json数据  带SQL 语句的查询
		//params  设定Flexigrid 行中的键 是那个字段 $pk 默认值为 'id'
		public function outputWithSql($sql,$sql2=null,$pk = 'id'){
			
			if(!empty($sql2)){
				$list = array_merge($this->_db->query($sql),$this->_db->query($sql2));
			}else{
				$list = $this->_db->query($sql);
			}
			
			//dump($list);
			$total = count($list);
			
			$jsonData = array('page'=>$this->_page_instance->page,'total'=>$total,'from'=>$this->_page_instance->start,'rows'=>array());
			
			foreach ($list as  $row) {
					$cell = array();
					foreach ($row as $key => $value) {
						$cell[$key] = $row[$key];
					}
					$entry = array('id'=>$row[$pk],'cell'=>$cell );
					$jsonData['rows'][] = $entry;
			}	
						
			echo json_encode($jsonData);			
		}
		

		
	}
	

?>