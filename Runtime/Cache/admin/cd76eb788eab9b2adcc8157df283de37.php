<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="__CROOT__/Public/admin/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="__CROOT__/Public/Css/flexgrid/flexigrid.pack.css" />
	<script type="text/javascript"	src="__CROOT__/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="__CROOT__/Public/js/flexigrid.pack.js"></script>
	<title>Cbox内容管理</title>
</head>
<body id="contentBody">
	<div id="content_top">消息管理</div>
	<div id="content">		
		<table class="flexme" style="display: none"></table>
		
		<script type="text/javascript">	
			//alert('ss');
			var URL='__URL__';			
			var grid=$(".flexme").flexigrid({
				url : URL+'/getdata',
				dataType: 'json',
				colModel : [  {
						display : '信息编码',
						name : 'id',
						width : 60,
						sortable : true,
						align : 'center'
					} ,	{
						display : '信息',
						name : 'message',
						width : 80,
						sortable : true,
						align : 'center'
					}, {
						display : '发布时间',
						name : 'postdate',
						width : 200,
						sortable : true,
						align : 'center'
					}, {
						display : '发送方式',
						name : 'way',
						width : 80,
						sortable : true,
						align : 'center'
					}, {
						display : '图片',
						name : 'picture',
						width : 60,
						sortable : true,
						align : 'center'
					}, {
						display : 'Member_id',
						name : 'member_id',
						width : 60,
						sortable : true,
						align : 'center'
					}, {
						display : 'target_id',
						name : 'target_id',
						width : 60,						
						align : 'center'
				}],
				buttons : [ {
						name : '添加',
						bclass : 'add',
						onpress: Add
					},  
					{
						name : '删除',
						bclass : 'delete',
						onpress: Delete
					}, {
						name : '编辑',
						bclass : 'edit',
						onpress: Edit
					},{
						separator : true
				} ],
				searchitems : [ {
						display : '用户编码',
						name : 'id'
					}, {
						display : '机组',
						name : 'mu_name'					
				}],
				pagestat: '共 {total} 项 当前记录 {from} 到 {to} ',
				findtext: '查找',
				procmsg: '正在处理，请等候',				
				sortname : "id",
				sortorder : "desc",
				usepager : true,
				title : '消息列表',
				useRp : true,
				rp : 2,
				rpOptions: [15, 30, 45, 60, 100],
				width : 760,
				height : 360
			});		
			function Add(){
				self.location=URL+'/add/';
			}
			function Edit(){
				if($(".trSelected").length==1){ 
					id=$('.trSelected',grid).find("td").eq(0).text();
					self.location=URL+'/edit/id/'+id;										
				}else if($(".trSelected").length>1){  
					alert("请选择一项修改,不能同时修改多项");  
				}else if($(".trSelected").length==0){  
					alert("请选择一项您要修改的记录")  
				}  				
			}
			
			function Look () {
				if($(".trSelected").length==1){ 
					id=$('.trSelected',grid).find("td").eq(0).text();
					
					self.location=URL+'/look/id/'+id;
				}else if($(".trSelected").length>1){  
					alert("请选择一项查看,不能同时查看多项");  
				}else if($(".trSelected").length==0){  
					alert("请选择一项您要查看的记录")  
				} 				
			}
			function Delete(){
				selected_count = $('.trSelected', grid).length;  
                if (selected_count == 0) {  
                    alert('请选择一条记录!');  
                    return;  
                }
				if(!confirm("确认要删除"+selected_count+"条记录吗？")){
					return;
				}
                ids = '';  
                $('.trSelected td:nth-child(1) div', grid).each(function(i) {  
                    if (i){  
                        ids += ',';  
					}
                    ids += $(this).text();  
                })  
				self.location=URL+'/destroy/id/'+ids;
			}			
		</script>
		
	</div>
</body>
</html>