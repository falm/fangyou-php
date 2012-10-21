<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="__CPUBLIC__/admin/style.css" rel="stylesheet" type="text/css">
	<link href="__CPUBLIC__/Css/bootstrap.css" rel="stylesheet" type="text/css">
	<title>Cbox内容管理</title>
</head>
<body id="contentBody">
	<div id="content_top">照片管理</div>
	<div id="content">		
		<table class="table table-striped table-bordered table-condensed">
			<form action="__URL__/create/" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
				
				<tr>
					<td>名称 <font color="Red">*</font></td>
					<td><input type="text" name="name" /></td>
				</tr>
				<tr>
					<td>所有人 <font color="Red">*</font></td>
					<td>
						<select name="member_id" id="list">
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["username"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>							
					</td>
				</tr>				
				<tr>
					<td>描述 <font color="Red">*</font></td>
					<td>
						<textarea name="description"></textarea>						
					</td>
				</tr>

				<tr>
					<td>上传</td>
					<td>
						<input type="file" name="photo" value="">
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