<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>访友|个人设置</title>
<link href="__CPUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/home.style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__CPUBLIC__/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/jsbootstrap-dropdown.js"></script>

<script language="javascript">
	$(document).ready(function() {
        $(".card1").click(function(){
			$(".select1").css("display","block");
			$(".select2").css("display","none");
			$(".select3").css("display","none");
		});
        $(".card2").click(function(){
			$(".select1").css("display","none");
			$(".select2").css("display","block");
			$(".select3").css("display","none");
		});
        $(".card3").click(function(){
			$(".select1").css("display","none");
			$(".select2").css("display","none");
			$(".select3").css("display","block");
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
        <div id="mid_title">个人档案</div>
        <p>在现实世界中，个人信息随处可见，与我们的生活息息相关。个人信息是个人隐私的一部分，应征得个人信息的主体同意，才可在限定的目的范围内使用。本网站可以守护你的个人信息，你的个人信息和你的名片息息相关，请认真填写。</p>
	</div> <!-- end of middle -->
    
     <div id="templatemo_main">
        <div class="col_w450 float_l">
            <div id="contact_form">
        		<h3>个人信息</h3>
                <form method="post" name="contact" action="#">
                    <label class="control-label" for="uname">用户名</label>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2" id="uname"  name="username" value="<?php echo ($row["username"]); ?>"type="text">
                    </div><!--end of name box-->
                    <label class="control-label" for="name">实名</label>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-lock"></i></span>
                        <input class="span2" id="name" name="realname" value="<?php echo ($row["realname"]); ?>"type="text">
                    </div><!--end of name box-->
                   	<label class="control-label" for="e-mail">邮箱地址</label>
                    <div class="input-prepend">
                    	<span class="add-on"><i class="icon-envelope"></i></span>
                    	<input class="span2" id="email" name="email" value="<?php echo ($row["email"]); ?>" type="text">
                    </div><!--end of e-mail box-->
                    <label class="control-label" for="sex">性别</label>
                        <select class="span1" id="sex">
                            <option value="1">男</option>
                            <option value="0">女</option>
                		</select><!--end of sex box-->
                    <label for="age">年龄</label>
                    <div class="input-prepend">
                    	<span class="add-on"><i class="icon-facetime-video"></i></span><input class="span1" id="age" type="text">
                    </div><!--end of age box-->
                    <label for="hobby">爱好</label>
                    <div class="input-prepend">
                    	<span class="add-on"><i class="icon-leaf"></i></span><input class="span3" id="hobby" type="text">
                    </div><!--end of position box-->         
                    <label for="place">工作岗位</label>
                    <div class="input-prepend">
                    	<span class="add-on"><i class="icon-edit"></i></span><input class="span3" id="place" type="text">
                    </div><!--end of work box-->
                    <label for="position">职称</label>
                    <div class="input-prepend">
                    	<span class="add-on"><i class="icon-star"></i></span><input class="span2" id="position" type="text">
                    </div><!--end of position box-->
                    <div class="per_btn_move">
                		<input type="submit" value="确认" class="btn btn-primary btn-large" />　<input type="submit" value="重置" class="btn btn-inverse btn-large" />
                    </div>
				</form> 
            </div>
        </div>   
        <div class="col_w500 float_r">
            <h2>设计我的名片样式</h2>
            <div class="card_select">
            	<table border="0">
                  <tr>
                    <td width="48"><img src="images/select.png" class="select1"/></td>
                    <td width="488"><img src="images/card1.png" class="card1"/></td>
                  </tr>
                  <tr>
                    <td><img src="images/select.png" class="select2"/></td>
                    <td><img src="images/card2.png" class="card2"/></td>
                  </tr>
                  <tr>
                    <td><img src="images/select.png" class="select3"/></td>
                    <td><img src="images/card3.png" class="card3"/></td>
                  </tr>
                </table><br/>
            </div>
            <form method="get" action="#">
            	<input type="submit" value="立即使用" class="btn btn-primary btn-large float_r" />
            </form>
        </div>
    	<div class="cleaner"></div>
	</div> <!-- end of templatemo_main -->
</div> <!-- end of wrapper -->
	<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    
    	<div class="col_allw300">
        	<h4>导航</h4>
            <ul class="footer_list">
            	<li><a href="user.html">个人主页</a></li>
                <li><a href="personal_file.html">个人档案</a></li>
                <li><a href="card.html">名片管理</a></li>
                <li><a href="note.html">笔记</a></li>
                <li><a href="album.html">相册</a></li>
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