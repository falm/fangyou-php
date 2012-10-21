<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>访友|个人设置</title>
<link href="__CPUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/home.style.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/dp.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="__CPUBLIC__/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/select-card.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/datepicker_lang_US.js" ></script>
<script src="__CPUBLIC__/js/jquery.datepicker.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {           
		
		$("#temptime").datepicker({ picker: "<img class='picker' align='middle' src='__CPUBLIC__/images/cal.gif' alt=''/>" });
		$("#use").click(function  () {
			//alert($("#style").val());
			$.get('__URL__/useCard',{style:$("#style").val()},function(data) {
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
        <div id="mid_title">个人档案</div>
        <p>在现实世界中，个人信息随处可见，与我们的生活息息相关。个人信息是个人隐私的一部分，应征得个人信息的主体同意，才可在限定的目的范围内使用。本网站可以守护你的个人信息，你的个人信息和你的名片息息相关，请认真填写。</p>
	</div> <!-- end of middle -->
    
     <div id="templatemo_main">
        <div class="col_w450 float_l">
            <div id="contact_form">
        		<h3>个人信息</h3>
                <form method="post" name="contact" action="__URL__/update/">
                	
                    <label class="control-label" for="uname">用户名</label>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span><input class="span2" name="username"  value="<?php echo ($row["username"]); ?>" type="text">
                    </div><!--end of name box-->
                    <label class="control-label" for="name">实名</label>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-lock"></i></span><input class="span2" name="realname"  value="<?php echo ($row["realname"]); ?>" type="text">
                    </div><!--end of name box-->
                   	<label class="control-label" for="e-mail">邮箱地址</label>
                    <div class="input-prepend">
                    	<span class="add-on"><i class="icon-envelope"></i></span><input class="span2" name="email" value="<?php echo ($row["email"]); ?>" type="text">
                    </div><!--end of e-mail box-->
                    <label class="control-label" for="sex">性别</label>
                        <select class="span1" name="sex">
                            <option value="1">男</option>
                            <option value="0">女</option>
                		</select><!--end of sex box-->
                    <label for="phone">电话℡</label>
                    <div class="input-prepend">
                    	<span class="add-on"><i class="icon-comment"></i></span><input class="span3" name="phone" value="<?php echo ($row["phone"]); ?>" type="text">
                    </div><!--end of position box-->         
                  
                    <label for="temptime">生日&nbsp;<i class="icon-gift"></i></label>
                    <input class="span2" type="text" id="temptime" name="brithday" value=""/>
                    <!--end of work box-->
                    <label>个性签名&nbsp;<li class="icon-edit"></li></label>
                    <textarea style="width:300px; height:100px;" name="brief"><?php echo ($row["brief"]); ?></textarea>
                    <div class="per_btn_move">
                		<input type="submit" value="确认" class="btn btn-primary btn-large" />　<input type="submit" value="重置" class="btn btn-inverse btn-large" />
                    </div>
				</form>  
            </div>
        </div>   
        <div class="col_w500 float_r">
            <h2>设计我的名片样式</h2>
            <div class="card_select">
            	<table class="tableposition">
                  <tr>
                  <td width="180"><img src="__CPUBLIC__/images/card/card1_s.jpg" class="card1"/></td>
                    <td width="55"><img src="__CPUBLIC__/images/select.png" class="select1"/></td>
                    <td width="180"><img src="__CPUBLIC__/images/card/card2_s.jpg" class="card2"/></td>
                    <td><img src="__CPUBLIC__/images/select.png" class="select2"/></td>
                  </tr>
                  <tr>
                    <td><img src="__CPUBLIC__/images/card/card3_s.jpg" class="card3"/></td>
                    <td><img src="__CPUBLIC__/images/select.png" class="select3"/></td>
                    <td><img src="__CPUBLIC__/images/card/card4_s.jpg" class="card4"/></td>
                    <td><img src="__CPUBLIC__/images/select.png" class="select4"/></td>
                  </tr>
                  <tr>
                   	<td><img src="__CPUBLIC__/images/card/card5_s.jpg" class="card5"/></td>
                    <td><img src="__CPUBLIC__/images/select.png" class="select5"/></td>
					<td><img src="__CPUBLIC__/images/card/card6_s.jpg" class="card6"/></td>
                    <td><img src="__CPUBLIC__/images/select.png" class="select6"/></td>
                  </tr>
                </table>
            </div>
            <form method="get" action="#">
            	<input type="hidden" name="style" value="card1" id="style"/>
            	<input type="button" value="立即使用" class="btn btn-primary btn-large float_r"  id="use"/>
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