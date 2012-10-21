<?php  


	function getData($table , $pk='id'){
		//header("Content-type: application/json");
			
		$db = M($table);			
		import('@.Util.Page');
		import('@.Util.Flexigrid');
			
		$f = new Flexigrid(new Page($db->count()) , $db  );
		
		$f->output($pk);		
	}


	function getDataWithOption($table,$conditions,$pk='id'){
		
		$db = M($table);			
		import('@.Util.Page');
		import('@.Util.Flexigrid');
			
		$f = new Flexigrid(new Page($db->count()) , $db  );
		
		$f->outputWithOpiton($conditions,$pk);		
	}
	
	function getDataWithSql($table,$sql,$sql2=NULL,$pk='id'){
		
		$db = M($table);			
		import('@.Util.Page');
		import('@.Util.Flexigrid');
			
		$f = new Flexigrid(new Page($db->count()) , $db  );
		
		$f->outputWithSql($sql,$sql2,$pk);		
	}	
	
	function checkAdmin(){
		if (empty($_SESSION['admin'])) {
			
			$url = U('Index/index');
			//echo("<script>location.href('$url')</script>");
			//header("refres:0;url=$url");
			Header("Location: $url"); 
		}
	}

?>