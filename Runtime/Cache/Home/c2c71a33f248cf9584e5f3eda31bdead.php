<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>访友|搜索好友</title>
<link href="__CPUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__CPUBLIC__/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function  () {
		$('button[rel=add_group]').click(function  () {
			ids = $(this).attr('name');
			//alert(ids);
			$.get('__URL__/add/',{id:ids},function  (data) {
				alert(data.info);
			},'json');
		});
	});
</script>
</head>
<body id="sub">

<div id="templatemo_wrapper">
	<div id="templatmeo_header">
    	<div id="logo_header">
        	<img src="__CPUBLIC__/images/mylogo.png"/>
        </div>
    </div> <!-- end of header -->
   
    <div id="templatemo_middle_sub">
        <div id="mid_title">搜索</div>
        <p>----目前，搜索页面----</p>
	</div> <!-- end of middle -->
    
     <div id="templatemo_main">
     	<form method="post" action="">
        	<input type="text" name="username" class="input-medium search-query">
        	<button type="submit" name="submit" class="btn btn-primary btn-large">搜索</button>
        </form>
        
        <table class="table">
          <thead>
            <tr>
              <th>　</th>
              <th>网名</th>
              <th>实名</th>
              <th>编辑</th>
            </tr>
          </thead>
          <tbody>
          	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
              <td><?php echo ($i); ?></td>
              <td><?php echo ($v["username"]); ?></td>
              <td><?php echo ($v["realname"]); ?></td>
              <td><button rel="add_group" class="btn btn-primary" name="<?php echo ($v["id"]); ?>">添加为好友</button></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table><!-- end of table-->
      
  </div> <!-- end of templatemo_main -->
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    
    	<div class="col_allw300">
        	<h4>导航</h4>
            <ul class="footer_list">
            	<li><a href="__APP__/Index/main">个人主页</a></li>
                <li><a href="__APP__/Member/setting">个人档案</a></li>
                <li><a href="__APP__/Card/">名片管理</a></li>
                <li><a href="__APP__/Note">笔记</a></li>
                <li><a href="__APP__/Photo/">相册</a></li>
            </ul>
        </div>
    	<div class="cleaner"></div>
    
    </div> <!-- end of templatemo_footer -->
     <div class="cleaner"></div>
</div>

<div id="templatemo_footer_wrapper">
     <!-- end of templatemo_footer -->
     <div class="cleaner"></div>
</div>

<div id="templatemo_copyright_wrapper">
    <div id="templatemo_copyright">
    	
            Copyright © 2012 <a href="#">Network professional 102</a> | Designed by <a href="#">A310</a>
        
    </div> <!-- end of templatemo_footer -->
</div>

</body>
</html>