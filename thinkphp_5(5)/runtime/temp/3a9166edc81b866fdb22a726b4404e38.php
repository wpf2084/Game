<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\wamp64\www\game\thinkphp_5\public/../application/admin\view\admin\admin_role.html";i:1508923228;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="__CSS__/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__CSS__/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__CSS__/H-style.css" rel="stylesheet" type="text/css" />
<link href="__CSS__/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>角色管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 角色管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="__http__admin/admin/admin_role_add" ><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r"> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-aaa">
		<thead>
			<tr>
				<th scope="col" colspan="6">角色管理</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" value="" name=""></th>
				<th width="40">ID</th>
				<th width="200">角色名</th>
				<th>用户列表</th>
				<th width="300">描述</th>
				<th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
		
		<?php if(!empty($rolelist)): foreach($rolelist as $key=>$val): ?>
		
			 <tr class="text-c">
				<td><input type="checkbox" value="" name=""></td>
				<td id="errorspan"><?php echo $val['id']; ?></td>
				<td><?php echo $val['name']; ?></td>

				<td><a  href="javascript:;" id="usid"onclick='admin_role_edit(<?php echo $val['id']; ?>)'>
						用户详情
						
				</a><br/>
					<input id="hid" type="hidden" value="<?php echo $val['id']; ?>"/>
				</td>
				<td><?php echo $val['miaoshu']; ?></td>
				<td class="f-14"><a title="编辑" href="__http__admin/adminuser/admin_role_add?id=<?php echo $val['id']; ?>&name=<?php echo $val['name']; ?>"  style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'<?php echo $val['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
		
			<?php endforeach; endif; ?>
			
		</tbody>
	</table>
	</div>
</div>
<script type="text/javascript" src="__CSS__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__CSS__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__CSS__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__CSS__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 

<script type="text/javascript" src="__JS__/H-ui.js"></script> 
<script type="text/javascript" src="__JS__/H-ui.admin.js"></script> 
<script type="text/javascript">

$(function(){
	$('.table-aaa').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  // {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
		]
	});
	$('.table-aaa tbody').on( 'click', 'tr', function () {
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});

	
	




});



/*管理员-角色-添加*/
function admin_role_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-角色-用户编辑*/
function admin_role_edit(uid,rid){
	
	layer.open({
		type:2,
		title:'用户角色详情',
		maxmin: true, //开启最大化最小化按钮
      	area: ['500px', '500px'],
		//shade: true,
		content:"admin_xiang?uid="+uid,
		
		yes:function(layero,index){
			var data=$(layero).find("iframe")[0].contentWindow.formData();
			if(data)
			{
				uid(data);
			}
        },

	});		
}

/*管理员-角色-删除*/
function admin_role_del(obj,id){
	// layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
	// 	//此处请求后台程序，下方是成功后的前台处理……
		
		
	// 	$(obj).parents("tr").remove();
	// 	layer.msg('已删除!',{icon:1,time:1000});
	// });

	layer.msg('角色删除须谨慎，确认要删除吗？', {
    time: 0 //不自动关闭
    ,btn: ['确定', '取消']
    ,yes: function(index){
        //alert(1);
        $.ajax({
            url:"<?php echo url('admin/adminuser/del_role'); ?>",
            data:{'id':id},
            type:"Post",
            dataType:"json",
            success:function(data){
            	//实现了真删除
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