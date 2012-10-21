<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>访友|相册</title>

<link href="__CPUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="__CPUBLIC__/css/home.style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__CPUBLIC__/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-modal.js"></script>

</head>
<body id="sub">

<div id="templatemo_wrapper">
	
	<!-- Include Header -->
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
   
    <div id="templatemo_middle_sub">
        <div id="mid_title">相册</div>
        <p>记录你的点点滴滴，像成为世界的焦点吗？那就多上传些美丽的照片吧。</p>
	</div> <!-- end of middle -->
	<div id="templatemo_main">
    

	<script type="text/javascript" src="__CPUBLIC__/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="__CPUBLIC__/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
 	<link rel="stylesheet" type="text/css" href="__CPUBLIC__/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/


			var id;

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					//ids = $(this).attr("name");
					//alert(ids);
					
					return '<span id="fancybox-title-over">Images ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '<a id="pic_remove" href="#" class="float_r" title="删除"><i class="icon-remove icon-white"></i>删除</a> </span>';
				},
				//'onStart'			:function  () {
				//	name = $("a[rel=example_group]").att("name");
			//		alert(name);
			//	}		
				
				
				//在此处上方填写描述
			});
		//	$("a[rel=example_group]").click(function  () {
		//		alert($(this).attr("name"));
	//	})；
			/*
			*   Examples - various
			*/
			
			$("#pic_remove").click(function() {
				//alert('Pid:'+id);
				alert('s');
			});


		});
	</script>
</head>
<body>

	<div id="myModal" class="modal  fade">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" >&times;</a>
          <h3>相册</h3>
        </div>
        <div class="modal-body">
          <h4>填写相片信息</h4>

          <form id="emotion" method="post" action="__URL__/create" enctype="multipart/form-data"  accept-charset="utf-8" >
              <textarea class="feelingsText" name="description"></textarea>
          
          <hr>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn" data-dismiss="modal" >关闭</a>
         <!--<a href="#" class="btn btn-primary">保存</a>-->
         <input class="btn btn-primary" type="submit" name="submit" value="保存">
        </div>
        
    </div> <!--end of dialog-->
    
	<a href="#">上传图片</a><input type="file" name="pic"/><button data-toggle="modal"  data-target="#myModal" href="#myModal" id="upload" type="submit" class="btn btn-primary">上传</button>
	</form>
	<p>
		<h4><?php echo (session('user')); ?>的相册<h4><br />
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a rel="example_group" href="__CPHOTOS__/<?php echo ($v["member_id"]); ?>/<?php echo ($v["name"]); ?>" title="<?php echo ($v["description"]); ?>" name="<?php echo ($v["id"]); ?>">
			<img class="last" alt="" src="__CPHOTOS__/<?php echo ($v["member_id"]); ?>/thumb_<?php echo ($v["name"]); ?>" /></a><?php endforeach; endif; else: echo "" ;endif; ?>
	</p>
          
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