<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>访友</title>
<link href="__CPUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/home.style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__CPUBLIC__/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-transition.js"></script>
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
    
    <div id="myModal" class="modal hide fade">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" >&times;</a>
          <h3>今日签到</h3>
        </div>
         <form id="emotion" method="post" action="__APP__/Member/signIn">
        <div class="modal-body">
          <h4>填写心情</h4>
         
         

                <input type="radio" name="mood" value="很差" title="很差"/>很差
                <input type="radio" name="mood" value="良好" title="良好"/>良好
                <input type="radio" name="mood" value="奋斗" title="奋斗"/>奋斗
                <input type="radio" name="mood" value="开心" title="开心"/>开心
              <hr/>
              <textarea id="feel" class="feelingsText" name="feelings"></textarea>
          <hr>
         
       	</div>
        <div class="modal-footer">
          <a href="#" class="btn" data-dismiss="modal" >关闭</a>
          <!--<a  id="signIn" class="btn btn-primary">保存</a>-->
          <input  type="submit" class="btn btn-primary" value="保存"  />
          
        </div>
         </form>
    </div> <!--end of dialog-->
    
    <div id="templatemo_middle_sub">
        <div id="mid_title">
           	应用中心
        </div>
        <p>名片起源于交往，而且是文明时代的交往，因为名片离不开文字。但是，名片太多不知怎么分类，又是谁的？这些问题一直缠绕着你，给你添了麻烦了吗？现在，你只需要动动手指就可以轻松管理你的名片，不再因为名片的错乱而打错电话，不再因为名片的丢失而联系中断。</p>
	</div> <!-- end of middle -->
    
    <div id="templatemo_main">
        <div class="post_box">
        	 <div class="image_frame"><img src="__CPUBLIC__/images/signIn.png" alt="Image 05" /></div>
            <h2>每日签到</h2>
            
            <p>坚持每日签到，养成勤劳的好习惯。经常查看好友动态，</p>
            <p>可以让好友即时获取你的最新信息，沟通更方便更快捷，</p>
            <p>成为好友中可靠地存在，今日就做个万人迷吧。</p>
            <button data-toggle="modal" data-target="#myModal" href="#myModal" class="btn btn-primary btn-large">签到</button>
          <div class="cleaner"></div>
        </div>
        <div class="post_box">
        	 <div class="image_frame"><img src="__CPUBLIC__/images/ren.png" alt="Image 06" /></div>
            <h2>人肉搜索</h2>
           
            <p>我想要和他或她通信，但是不知怎么联系到他。现在体</p>
            <p>体验一下人肉的强大吧</p>
            <form action="" target="_blank">
            <button type="submit" class="btn btn-primary btn-large" formaction="__APP__/Member/search">开始搜索</button>
            </form>
          <div class="cleaner"></div>
        </div>
        <div class="post_box">
        	<div class="image_frame"><img src="__CPUBLIC__/images/tong.png" alt="Image 07" /></div>
            <h2>留言通信</h2>
            
            <p>一条信息可以重复发收给指定的多用户，不在繁琐的操</p>
            <p>作友好的多元化界面，让你耳目一新。</p>
            <form action="__APP__/Message" target="_blank">
            	<button type="submit" class="btn btn-primary btn-large" formaction="__APP__/Message">进入应用</button>
            </form>
          <div class="cleaner"></div>
        </div>
        
    </div> <!-- end of templatemo_main -->

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
</div> <!-- end of wrapper -->

</body>
</html>