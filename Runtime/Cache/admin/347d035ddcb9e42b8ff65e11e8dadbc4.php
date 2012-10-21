<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="__CROOT__/Public/admin/style.css" rel="stylesheet" type="text/css">
	<link href="__CROOT__/Public/Css/bootstrap.css" rel="stylesheet" type="text/css">
	<title>Cbox内容管理</title>
</head>
<body id="contentBody">
	<div id="content_top">消息管理</div>
	<div id="content">		
		<table class="table table-striped table-bordered table-condensed">
			<form action="__URL__/create/" method="post" accept-charset="utf-8">
				
				<tr>
					<td>标题 <font color="Red">*</font></td>
					<td><input type="text" name="title" /></td>
				</tr>
				<tr>
					<td>所有人 <font color="Red">*</font></td>
					<td>
							<select name="member_id" id="way">
								<?php if(is_array($member_list)): $i = 0; $__LIST__ = $member_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["username"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>	
						</td>
					</tr>				
				<tr>
					<td>内容 <font color="Red">*</font></td>
					<td>
						<textarea name="content"></textarea>						
					</td>
				</tr>

				<tr>
					<td>分类</td>
					<td>
						<select name="category_id" id="way">
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>	
					</td>
				</tr>
	
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" name="submit" value="提交" class="btn btn-primary" /> &nbsp;
						<input type="reset" name="reset" value="重置" class="btn btn-inverse" /> 
					</td>
				</tr>																						
			</form>
		</table>
	</div>
</body>
</html>