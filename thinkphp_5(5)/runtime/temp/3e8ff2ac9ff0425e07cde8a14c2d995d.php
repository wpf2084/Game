<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:98:"D:\wamp64\www\game\thinkphp_5\public/../application/admin\view\adminuser\admin_permission_add.html";i:1508736762;}*/ ?>
<!DOCTYPE HTML>
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
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>新建权限节点</title>
</head>
<body>
<div class="pd-20">
	<form  action=""  method="post" class="form form-horizontal" id="form-user-character-add">
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>权限节点：</label>
			<div class="formControls col-10">
			<input type="hidden" class="input-text" value="<?php echo $accessid; ?>" placeholder=""  name="accessid" datatype="*4-16" nullmsg="权限ID不能为空">


				<input type="text" class="input-text" value="<?php echo $accesstitle; ?>" placeholder=""  name="username" datatype="*4-16" nullmsg="权限节点不能为空">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>urls：</label>
			<div class="formControls col-10">
				<input type="text" class="input-text" value="<?php echo $accessurls; ?>" placeholder=""  name="urls" datatype="*4-16" nullmsg="权限节点不能为空">
			</div>
		</div>

		<div class="row cl">
			<div class="col-10 col-offset-2">
				<button type="button" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="__CSS__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__CSS__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__CSS__/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="__CSS__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__JS__/H-ui.js"></script> 
<script type="text/javascript" src="__JS__/H-ui.admin.js"></script> 
<!-- <script type="text/javascript" src="__JS__/role.js"></script> -->
<!-- <script type="text/javascript" src="/static/js/role.js"></script> -->
<script>
$(function(){
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
		
	});
});
//获取权限Id
var raccessid=$("input[name=accessid]");
//获取权限名
var rolename=$("input[name=username]");
//权限节点
var rurls=$("input[name=urls]");
//确认按钮
var role_save=$("input[name=admin-role-save]");
// <?php echo url('index/adminuser/tianjia_role'); ?>

$('#admin-role-save').click(function(){

		var parms={
			"raccessid":raccessid.val(),
			"rolename":rolename.val(),
			"rurls":rurls.val()
		}
		
		$.post('<?php echo url('admin/adminuser/xiugai_access'); ?>',parms,function(data){
				//alert(data.msg);
				if(data.code)
				{
					alert(data.msg);
					location.href=data.url;
				}else{
					alert(data.msg);
					location.href=data.url;
				}
				
				
		});
		
});





</script>
</body>
</html>