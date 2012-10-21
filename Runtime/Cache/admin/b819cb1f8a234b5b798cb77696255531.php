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
					<td>图片 </td>
					<td><input type="text" name="picture" /></td>
				</tr>
				<tr>
					<td>信息 <font color="Red">*</font></td>
					<td><textarea name="message"></textarea></td>
				</tr>				
				<tr>
					<td>发送人 <font color="Red">*</font></td>
					<td><input type="text" name="member_id" /></td>
				</tr>				

				<tr>
					<td>目标ID</td>
					<td><input type="text" name="target_id" /></td>
				</tr>
				<tr>
					<td>发送方式</td>
					<td>
						<select name="way" id="way">
								<option value="1">广播</option>
								<option value="0">组播</option>
								
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