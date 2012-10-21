<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__CPUBLIC__/admin/index/top.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<div id="admin">
		欢迎<?php echo (session('admin')); ?> 管理员
		<a href="__GROUP__/Index/logout">登出</a>
	</div>	
	<h1>访友网管理</h1>
	<div style="clear:both"></div>
    <div>
    	<ul class="nav">
        	<li>
            	<a href="__GROUP__/Setting/index" target="mainFrame">网站配置管理</a>
            </li>
        	<li>
            	<a href="__GROUP__/Administrator/index" target="mainFrame">管理员管理</a>
            </li>            
        </ul>
    </div>
</body>
</html>