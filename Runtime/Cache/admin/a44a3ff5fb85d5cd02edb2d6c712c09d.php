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
					<td>名称 <font color="Red">*</font></td>
					<td><input type="text" name="name" /></td>
				</tr>
				<tr>
					<td>父类 <font color="Red">*</font></td>
					<td><input type="text" name="pid" value="<?php echo ($_GET['pid']); ?>" /></td>
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