<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>访友</title>
<link href="__CPUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/home.style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__CPUBLIC__/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-tab.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-alert.js"></script>
<script type="text/javascript" charset="utf-8">
	//$(document)
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
    
     <div id="templatemo_middle_sub">
        <div id="mid_title">应用描述</div>
        <p>一条信息可以重复发收给指定的多用户，不在繁琐的操作，友好的多元化界面，让你耳目一新。</p>
	</div> <!-- end of middle -->
    
     <div id="templatemo_main">
        <div class="col_w200 float_l">
            
        <div class="well" style="padding: 8px 0;">
            <ul class="nav nav-list">
              <li class="nav-header">发送</li>
              <li class="active"><a href="#broadcast" data-toggle="tab" ><i class="icon-th"></i> 广播<img src="__CPUBLIC__/images/arrow.png" class=" float_r"/></a></li>
              <li><a href="#multicast" data-toggle="tab"><i class="icon-th-large"></i> 组播<img src="__CPUBLIC__/images/arrow.png" class=" float_r"/></a></li>
              <li class="nav-header">接收</li>
              <li><a href="#inbox" data-toggle="tab"><i class="icon-th-list"></i> 收件箱<img src="__CPUBLIC__/images/arrow.png" class=" float_r"/></a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="icon-cog"></i> 设置<img src="__CPUBLIC__/images/arrow.png" class=" float_r"/></a></li>
              <li><a href="#"><i class="icon-flag"></i> 帮助<img src="__CPUBLIC__/images/arrow.png" class=" float_r"/></a></li>
            </ul>
		</div>
      
        </div>
            
        <div class="col_w600 float_r">
           
           <div class="tab-content">
            <div class="tab-pane active" id="broadcast">
              <p class="textpage">填写广播信息</p>
              <form name="broadcast" method="post" action="__URL__/send">
              	<input type="hidden" name="way" value="1" />
              	<textarea class="feelingsText" name="message"></textarea><br/>
                <button type="submit" class="btn btn-primary btn-large" id="sendBdt">发送</button>
              </form>
            </div>
            <div class="tab-pane" id="multicast">
              <p>填写发送地址</p>
              <form name="composition" method="post" action="__URL__/send">
              	
              	<!--<input type="text" name="member_id" value="请在这里@你的好友" onFocus="this.value = '' "  onBlur=" this.value = '请在这里@你的好友' "/>-->
              	<select name="target_id" id="target_id">
              		<option>请在这里@你的好友</option>
              		<?php if(is_array($friendList)): $i = 0; $__LIST__ = $friendList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["username"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              	</select>
                <textarea class="feelingsText" name="message"></textarea><br/>
                <button type="submit" class="btn btn-primary btn-large" id="sendMti">发送</button>
              </form>
            </div>
            <div class="tab-pane" id="inbox">
              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="alert alert-<?php echo ($style[$i%2]); ?> float_<?php echo ($float[$i%2]); ?>">
	                <a class="close" data-dismiss="alert">&times;</a>
					<strong>@<?php echo ($v["username"]); ?></strong>于<?php echo ($v["postdate"]); ?>说<br/><?php echo ($v["message"]); ?>
				</div><!-- end of alert--><?php endforeach; endif; else: echo "" ;endif; ?>
              <div class="alert alert-info float_l">
                <a class="close" data-dismiss="alert">&times;</a>
                <strong>某某2说：</strong><br/> 收件信息数据项
              </div><!-- end of alert-->
              
              <div class="alert alert-success float_r">
                <a class="close" data-dismiss="alert">&times;</a>
                <strong>某某3说：</strong><br/> 收件信息数据项
              </div><!-- end of alert-->
              
            </div>
          </div><!-- end of tab-->
          
        </div><!--end of col_w600-->
    	
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