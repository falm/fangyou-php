<?php  

	function getSetting($key){
		$db = M('Settings');
		
		$result = $db->where("`key` ='$key'")->find();
		//$result = $db->find($key);
		return $result['value'];
	}
	
	function getCategory($pid){
		$db = M('Categoires');
		$result = $db->where("pid = '$pid'")->select();
		return $result;
	}

?>