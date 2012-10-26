<?php



return array(
	//'配置项'=>'配置值'
	
	//模板配置
	
	'TMPL_PARSE_STRING'	=>	array(
		'__CROOT__'		=>	'/cbox',
		'__CPUBLIC__'	=>	'/cbox/Public',
		'__CPHOTOS__'	=> 	'/cbox/Userfiles/Photos',
		'__CUPLOAD__'	=>	'./Userfiles/Photos'
	),
	
	
	//数据库配置信息
	
	'DB_TYPE'	=>	'mysql',
	'DB_USER'	=>	'db_user',
	'DB_PWD'	=>	'password',
	'DB_HOST'	=>	'localhost',
	'DB_NAME'	=>	'db_name',
	'DB_PREFIX'	=>	'',


	
	//分组配置信息
	'APP_GROUP_LIST'	=> 'Home,Admin',
	'GROUP_DEFAULT'		=>	'Home', 
);
?>