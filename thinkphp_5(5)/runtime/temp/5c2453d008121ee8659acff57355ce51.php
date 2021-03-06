<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\wamp64\www\game\thinkphp_5\public/../application/admin\view\admin\member_list.html";i:1508924150;}*/ ?>
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
<title>用户管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">

	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="__http__admin/admin/member_add"  class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span>  </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">用户名</th>
				<th width="40">性别</th>
				<th width="90">手机</th>
				<th width="150">邮箱</th>
				<th width="">地址</th>
				<th width="130">加入时间</th>
				<th width="70">状态</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($userlist as $key=>$val): if($val['recovery']==1): ?>
			<tr class="text-c">
				<td><input type="checkbox" value="<?php echo $val['id']; ?>" name=""></td>
				<td><?php echo $val['id']; ?></td>
				<td><a href="__http__index/adminuser/member_show?id=<?php echo $val['id']; ?>"><u style="cursor:pointer" class="text-primary" ><?php echo $val['username']; ?></u></a></td>
				<?php if($val['sex']==0): ?>
				<td>女</td>
				<?php else: ?>
				<td>男</td>
				<?php endif; ?>
				<td><?php echo $val['tel']; ?></td>
				<td><?php echo $val['email']; ?></td>
				<td class="text-l"><?php echo $val['place']; ?></td>
				<td></td>
				<td class="td-status"><span class="label label-success radius">已启用</span></td>
				<td class="td-manage">
				 <a title="编辑" href="__http__admin/adminuser/member_add?id=<?php echo $val['id']; ?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
				<a style="text-decoration:none" class="ml-5" onClick="change_password('<?php echo $val['id']; ?>','<?php echo $val['username']; ?>')" href="javascript:;" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'<?php echo $val['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<?php endif; endforeach; ?>
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
		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
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
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*用户-停用*/
function member_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}

/*用户-启用*/
function member_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!',{icon: 6,time:1000});
	});
}
/*用户-编辑*/
function member_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*密码-修改*/
function change_password(uid,name){
	//layer_show(title,url,w,h);	
	layer.open({
		type:2,
		title:'修改密码',
		maxmin: true, //开启最大化最小化按钮
      	area: ['500px', '500px'],
		//shade: true,
		content:"change_password?uid="+uid+"&name="+name,
		
		yes:function(layero,index){
			var data=$(layero).find("iframe")[0].contentWindow.formData();
			if(data)
			{
				uid(data);
			}
        },

	});		
}
/*用户-删除*/
function member_del(obj,id){
 
	layer.msg('你确定删除么？', {
    time: 0 //不自动关闭
    ,btn: ['确定', '取消']
    ,yes: function(index){
        //alert(1);
        $.ajax({
            url:"<?php echo url('admin/adminuser/huishouuser'); ?>",
            data:{'id':id},
            type:"Post",
            dataType:"json",
            success:function(data){
            	//实现了为删除
            	$(obj).parents("tr").remove();
                layer.msg(data.msg);
            },
            error:function(data){
                $.messager.alert('错误',data.msg);
            }
        });
        layer.close(index);

    	}
	});
 }
</script> 
</body>
</html>