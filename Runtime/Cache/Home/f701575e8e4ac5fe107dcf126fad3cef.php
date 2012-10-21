<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>访友|名片</title>
<link href="__CPUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="__CPUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__CPUBLIC__/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-collapse.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="__CPUBLIC__/js/bootstrap-modal.js"></script>

<style>
	#droplist{
		color: #a2a8b8;
		text-decoration:none;
	}
	#droplist:hover{
		color:#FFF;
		text-decoration:none;
	}
	.list{list-style:none;}
	.list img{display:none;}
	#cardback{
		background:url(__CPUBLIC__/images/card/card1.jpg) no-repeat; 
		width:500px; 
		height:300px;
	}
	#cardtext{
		float:left;
		margin-left:80px;
		margin-top:25px;
		width:400px;
		color:#FFF;
		list-style:none;
	}	
</style>
<script language="javascript">
	$(document).ready(function() {
        $("a[rel=example_group]").click(function(){
			$(".modal-body h4").html($(this).attr('lname'));
			$("#cardtext h5").html($(this).attr('lname'));
			$("#cardtext span").html($(this).attr('lmail'));
			$("#cardtext p").html($(this).attr('lbrief'));
			$("#cardtext st").html($(this).attr('lphone'));
			
			$('.remove').attr('lid',$(this).attr('lid'));
			style = $(this).attr('lstyle');
			
			$("#cardback").css("background","url(__CPUBLIC__/images/card/"+style+".jpg) no-repeat");
		
		});
		
		$(".remove").click(function(){
			id = $(this).attr('lid');
			
			$.get('__URL__/destroy',{'id':id},function  (data) {
				alert(data.info);
			},'json');
		} );
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
    <div id="myModal" class="modal hide fade">
        <div class="modal-header">
          <a class="close" data-dismiss="modal" >&times;</a>
          <h3>名片</h3>
        </div>
        <div class="modal-body">
          <h4>用户名</h4>
          
          <div id="cardback">
          		<div id="cardtext">
          			<h5 style="color:#999"></h5></br>
          			E-mail：<span></span><br/>
          			电话：<st></st>
          			<p></p>
          		</div>
          </div><br/>
          <a href="__APP__/Message/#multicast"><li class="icon-envelope" title="发信"></li>发送消息</a>　　　　　　
          <a href="#" class="remove"><li class="icon-remove" title="删除用户"></li>删除名片</a>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn" data-dismiss="modal" >关闭</a>
        </div>
    </div> <!--end of dialog-->
    
    <div id="templatemo_middle_sub">
        <div id="mid_title">名片管理</div>
        <p>可以将你的同事，好友，家人等归类别存放。方便快捷，加深你对友人的联系，不再窝在家中对着名片发愁。</p>
	</div> <!-- end of middle -->
    
     <div id="templatemo_main">
     	<a href="__URL__/add" class="float_l" target="_blank">添加名片+</a>
     	<a href="__APP__/Member/search" class="float_r" target="_blank">添加好友+</a><br/>
        
        <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#selector" href="#collapseOne">
                  好友</a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                          	
                    <table class="table">
                        <thead>
                          <tr>
                            <th>　</th>
                            <th>名字</th>
                            <th>电话</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                            	<a data-toggle="modal" data-target="#myModal" 
                            	href="#myModal" rel="example_group" lid="<?php echo ($v["id"]); ?>"
                            	lname="<?php echo ($v["realname"]); ?>" lstyle="<?php echo ($v["style"]); ?>" lmail="<?php echo ($v["email"]); ?>"
                            	lbrief="<?php echo ($v["brief"]); ?>" lphone='<?php echo ($v["phone"]); ?>'
                            	>
                            	详情
                            	<img src="__CPUBLIC__/images/arrow.png"/></a>
                        	</td>
                            <td><?php echo ($v["realname"]); ?></td>
                            <td><?php echo ($v["phone"]); ?></td>
                            
                          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                      </table><!-- end of table-->
                    
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#selector" href="#collapseTwo">
                  家人</a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  
                    <table class="table">
                        <thead>
                          <tr>
                            <th>　</th>
                            <th>名字</th>
                            <th>电话</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                            	<a data-toggle="modal" data-target="#myModal" href="#myModal" rel="example_group" lid="<?php echo ($v["id"]); ?>">详情
                            	<img src="__CPUBLIC__/images/arrow.png"/></a>
                        	</td>
                            <td><?php echo ($v["realname"]); ?></td>
                            <td><?php echo ($v["phone"]); ?></td>
                            
                          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                      </table><!-- end of table-->
                  
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#selector" href="#collapseThree">
                  同事</a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  
                    <table class="table">
                        <thead>
                          <tr>
                            <th>　</th>
                            <th>名字</th>
                            <th>电话</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                            	<a data-toggle="modal" data-target="#myModal" href="#myModal" rel="example_group" lid="<?php echo ($v["id"]); ?>">详情
                            	<img src="__CPUBLIC__/images/arrow.png"/></a>
                        	</td>
                            <td><?php echo ($v["realname"]); ?></td>
                            <td><?php echo ($v["phone"]); ?></td>
                            
                          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                      </table><!-- end of table-->
                
                </div>
              </div>
            </div>
          </div><!--end of window shades--> 
              
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