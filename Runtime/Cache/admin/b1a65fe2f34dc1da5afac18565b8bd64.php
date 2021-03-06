<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="__CPUBLIC__/admin/style.css" rel="stylesheet" type="text/css">
	<link href="__CPUBLIC__/Css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="__CPUBLIC__/zTree/zTreeStyle.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript"	src="__CPUBLIC__/js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript"	src="__CPUBLIC__/zTree/jquery.ztree.min.js"></script>
	<script type="text/javascript"	src="__CPUBLIC__/zTree/jquery.ztree.exedit.min.js"></script>
	
	<title>Cbox内容管理|分类管理</title>
	<script type="text/javascript" charset="utf-8">
		var zTreeObj;
		
		var setting = {
			edit:{
				enable:true
			},
			check:{
				enable:true
			},
			callback:{
				onMouseDown:ztreeSelect,
				onRemove:ztreeOnRemove,
				onRename:ztreeOnRename
			},
			view:{
				showIcon:false
			},
			data:{
				simpleData:{
					enable:true,
					pIdKey:"pid",
					rootPId:0
				}
			}
		};
		
		var datas = <?php echo ($list); ?>;
		var selectId;
		function ztreeSelect (event,treeId,treeNode) {
			
			selectId = treeNode.id;
		}
		function ztreeOnRemove (event,treeId,treeNode) {
			//self.location = '__URL__/destroy/id/'+treeNode.id;
			$.get('__URL__/destroy/',{id:treeNode.id},function(){
				alert(data.info);
			},'json');
		}
		function ztreeOnRename (event,treeId,treeNode) {
			
			//self.location = '__URL__/update/id/'+treeNode.id'/name/'+treeNode.name;
			$.get('__URL__/update/',{id:treeNode.id,name:treeNode.name},function(data){
				alert(data.info);
			},'json' );
		}
		
		$(document).ready(function(){
			
			zTreeObj = $.fn.zTree.init($("#ztree"),setting,datas);
			$("#new").click(function  () {
				id = selectId ? selectId : 0;
				$(this).attr('href','__URL__/add/pid/'+id);
				
			});
		});
	</script>
</head>
<body id="contentBody">
	<div id="content_top">分类管理</div>
	<div id="content">	
		<form class="form-vertical">
		
			<ul id="ztree" class="ztree" ></ul>	
	
			
			<a class="btn" id="new" href="#">添加</a>

	
			
		</form>
	</div>
</body>
</html>