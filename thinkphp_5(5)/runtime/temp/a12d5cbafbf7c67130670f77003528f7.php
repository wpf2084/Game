<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\wamp64\www\game\thinkphp_5\public/../application/admin\view\admin\system_base.html";i:1508900869;}*/ ?>
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
<link href="__CSS__/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="__CSS__/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>基本设置</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 基本设置 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<form action="<?php echo url('admin/admin/system_add'); ?>" method="post" class="form form-horizontal" id="form-article-add">
		<div id="tab-system" class="HuiTab">
			<div class="tabBar cl"><span>基本设置</span></div>
			<?php if(!empty($result)): foreach($result as $key=>$val): ?>
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-2"><span class="c-red">*</span>网站名称：</label>
					<div class="formControls col-10">
						<input type="text" name="ming"id="website-title"  value="<?php echo $val['title']; ?>" class="input-text">
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-2"><span class="c-red">*</span>描述：</label>
					<div class="formControls col-10">
						<input type="text" name="miao"id="website-description"  value="<?php echo $val['miaoshu']; ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-2"><span class="c-red">*</span>站点控制：</label>
					<div class="formControls col-10">
						开启:  <input type="radio"   name="zhan"value="1"<?php if($val['guan']==1): ?>checked<?php endif; ?>/ >  关闭:<input style="margin-left: 10px"type="radio" name="zhan"  value="0"<?php if($val['guan']==0): ?>checked<?php endif; ?> >
					</div>
				</div>
			
				
				</div>
				<?php endforeach; endif; ?>
			</div>
		
		
			<div class="tabCon">
				
			</div>
		</div>
		<div class="row cl">
			<div class="col-10 col-offset-2">
				<button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
				<button  class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="__CSS__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__CSS__/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="__CSS__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__CSS__/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__JS__/H-ui.js"></script> 
<script type="text/javascript" src="__JS__/H-ui.admin.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");
});
</script>
</body>
</html>