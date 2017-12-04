<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\wamp64\www\game\thinkphp_5\public/../application/admin\view\admin\feedback_list.html";i:1508836406;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="__CSS__/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__CSS__/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__CSS__/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>评论回收</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理 <span class="c-gray en">&gt;</span> 评论回收 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span> <span class="r"> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="60">ID</th>
					<th width="60">用户名</th>
					<th>留言内容</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($pinglist)): foreach($pinglist as $key=>$val): if($val['recovery']==0): ?>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $val['id']; ?>" name="check"></td>
					<td><?php echo $val['id']; ?></td>
					<td><!-- <a href="javascript:;" onclick="member_show('张三','member-show.html','10001','360','400')"><i class="avatar size-L radius"><img alt="" src="http://static.h-ui.net/h-ui/images/avatar-default-S.gif"></i></a> --><?php echo $val['p_username']; ?></td>
					<td class="text-l"><?php echo $val['contents']; ?></td>
					<td class="td-manage"><a style="text-decoration:none" href="javascript:;" onClick="member_huanyuan(this,'<?php echo $val['id']; ?>')" title="还原"><i class="Hui-iconfont">&#xe66b;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'<?php echo $val['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endif; endforeach; endif; ?>
				
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="__CSS__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__CSS__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__CSS__/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="__CSS__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__CSS__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="__JS__/H-ui.js"></script> 
<script type="text/javascript" src="__JS__/H-ui.admin.js"></script> 
<script type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,2,4]}// 制定列不参与排序
		]
	});
	$('.table-sort tbody').on( 'click', 'tr', function () {
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});
});


/*评论-还原*/
function member_huanyuan(obj,id){
	layer.confirm('确认要还原吗？',function(index){
		
		$.ajax({  
            type: "post",  
            url: "<?php echo url('admin/adminuser/ping_guanli'); ?>",  
            data: {  
                'id':id,  
                // 'memberId':memberId  
            },  
            dataType : "json",  
            success:function(data){
            	//alert(1);
            	if(data.code)
            	{
            		$(obj).parents("tr").remove();
					layer.msg(data.msg);
            	}else{
            		layer.msg(data.msg);
            	}
                
            }
            // error:function(data){
            //     $.messager.alert('错误',data.msg);
            // }
            
        });
         layer.close(index);
	});
}
/*评论-删除*/
function member_del(obj,id){
	layer.confirm('确认要彻底移除该评论吗？',function(index){
		$.ajax({  
            type: "post",  
            url: "<?php echo url('admin/adminuser/ping_del'); ?>",  
            data: {  
                'id':id,  
                // 'memberId':memberId  
            },  
            dataType : "json",  
            success:function(data){
            	//alert(1);
            	if(data.code)
            	{
            		$(obj).parents("tr").remove();
					layer.msg(data.msg);
            	}else{
            		layer.msg(data.msg);
            	}
                
            }         
            
        });
         layer.close(index);
	});
	
}

//评论批量删除
function datadel()
{
		layer.confirm('确认要彻底移除该评论吗？',function(index){
		//var cks=document.getElementsByName("check");
			var checkedList=new Array();
			$("input[name='check']:checked").each(function() { 
				checkedList.push($(this).val()); 
			});  

		$.ajax({  
            type: "post",  
            url: "<?php echo url('admin/adminuser/ping_pdel'); ?>",  
            data: {  
                'id':checkedList,  
                // 'memberId':memberId  
            },  
            dataType : "json",  
            success:function(data){
            	//alert(1);
            	if(data.code)
            	{
            		$("input[name='check']:checked").parents("tr").remove();
					layer.msg(data.msg);
            	}else{
            		layer.msg(data.msg);
            	}
                
            }  
            
        });
         layer.close(index);

	});
}
</script>
</body>
</html>