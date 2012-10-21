<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="__CROOT__/Public/admin/style.css" rel="stylesheet" type="text/css">
	<link href="__CROOT__/Public/Css/bootstrap.css" rel="stylesheet" type="text/css">
	<title>Cbox内容管理</title>
</head>
<body id="contentBody">
	<div id="content_top">管理员管理</div>
	<div id="content">		
		<table class="table table-striped table-bordered table-condensed">
			<form action="__URL__/create/" method="post" accept-charset="utf-8">
				
				<tr>
					<td>用户名 <font color="Red">*</font></td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td>密码 <font color="Red">*</font></td>
					<td><input type="password" name="password" /></td>
				</tr>				
				<tr>
					<td>确认密码</td>
					<td><input type="password" name="repassword" /></td>
				</tr>
				<tr>
					<td>级别</td>
					<td>
						<select name="level" id="level">
								<option value="0">编辑</option>
								<option value="1">管理员</option>
								<option value="2">超级管理员</option>
								
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