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
	'DB_USER'	=>	'root',
	'DB_PWD'	=>	'jay',
	'DB_HOST'	=>	'localhost',
	'DB_NAME'	=>	'cbox_test',
	'DB_PREFIX'	=>	'',
	//'DB_DSN'	=>	'mysql:host=localhost;dbname=cbox_test;charset=UTF-8',

	
	//分组配置信息
	'APP_GROUP_LIST'	=> 'Home,Admin',
	'GROUP_DEFAULT'		=>	'Home', 
);
?>