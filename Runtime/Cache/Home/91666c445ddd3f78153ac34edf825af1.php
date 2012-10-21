<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>访友|笔记</title>
<link href="__CPUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/home.style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__CPUBLIC__/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-tab.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-dropdown.js"></script>

</head>
<body id="sub">

<div id="templatemo_wrapper">


		<div id="templatmeo_header">
    	<div id="logo_header">
    	
        	<img src="__CPUBLIC__/images/mylogo.png"/>
        	
        </div>
        <div id="templatemo_menu">
            <ul>
                <li><a id="h1" href="__APP__/Index/main">主页</a></li>
                <li><a id="h2" href="__APP__/Member/setting">个人档案</a></li>
                <li><a id="h3" href="__APP__/Card">名片管理</a></li>
                <li><a id="h4" href="__APP__/Note/">笔记</a></li>
                <li><a id="h5" href="__APP__/Photo/" >相册</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->

        <div id="userinfo">
        <li class="dropdown">
        		 <a href="#" style="text-decoration:none;"><span class="badge badge-info">0</span></a>
              <a class="dropdown-toggle" id="droplist" data-toggle="dropdown" href="#"><?php echo (session('user')); ?><b class="caret"></b></a>
              <ul id="menu3" class="dropdown-menu">
                <li><a href="__APP__/Index/main">我的主页</a></li>
                <li><a href="__APP__/Member/setting">个人资料设置</a></li>
                <li><a href="__APP__/Note/index">记事本</a></li>
                <li class="divider"></li>
                <li><a href="__APP__/Index/logout">退出</a></li>
              </ul>
            </li>
        </div><!-- end of dropdown-->
        
    </div> <!-- end of header -->
    <script type="text/javascript" charset="utf-8">
    	switch('__URL__'){
    		case '__APP__/Index':$('#h1').attr('class','current');break;
    		case '__APP__/Member':$('#h2').attr('class','current');break;
    		case '__APP__/Card':$('#h3').attr('class','current');break;
    		case '__APP__/Note':$('#h4').attr('class','current');break;
    		case '__APP__/Photo':$('#h5').attr('class','current');break;
    	}
    </script>
	<!-- end of header -->
   
    <div id="templatemo_middle_sub">
        <div id="mid_title">笔记</div>
        			<p>生活中的日志是记录你生活的点点滴滴，让它把你内心的世界表露出来，更好的诠释自己的内心世界，而电脑里的日志可以是有价值的信息宝库，也可以是毫无价值的数据泥潭。</p>
		</div> <!-- end of middle -->
    
    <div id="templatemo_main">
        <form action="" method="post" class="float_r">
        	<button class="btn" id="newbtn" formaction="add" formtarget="_blank">新建记事</button>
		</form>
	</div>
       <div class="tabbable ">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#lA" data-toggle="tab">心情eins</a></li>
            <li><a href="#lB" data-toggle="tab">心情zwei</a></li>
            <li><a href="#lC" data-toggle="tab">心情drei</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="lA">
				<?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="__URL__/show/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
	             
            </div>
            <div class="tab-pane" id="lB">
				<?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="__URL__/show/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="tab-pane" id="lC">
				<?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="__URL__/show/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
          </div>
        </div> <!-- /tabbable -->
      	
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