<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\wamp64\www\game\thinkphp_5\public/../application/admin\view\adminuser\register.html";i:1508736932;}*/ ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0"> 
	<title>登录界面</title>
    <link href="__CSS__/default1.css" rel="stylesheet" type="text/css" />
	<!--必要样式-->
    <link href="__CSS__/styles2.css" rel="stylesheet" type="text/css" />
    <link href="__CSS__/demo1.css" rel="stylesheet" type="text/css" />
    <link href="__CSS__/loaders1.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
			#yincang1, #yincang2 ,#yincang3{
				margin-left: 60px;
			} 
    </style>
</head>
<body>
	<div class='login'>
	  <div class='login_title'>
	    <span>管理员登录</span>
	  </div>
	  <div class='login_fields'>
	    <div class='login_fields__user'>
	      <div class='icon'>
	        <img alt="" src='__IMG__/user_icon_copy.png'>
	      </div>
	      <input name="username" placeholder='用户名' maxlength="16" type='text' autocomplete="off" value=""/>
	      <span id="yincang1"></span>
	        <div class='validation'>
	          <img alt="" src='__IMG__/tick.png'>
	        </div>
	    </div>
	    <div class='login_fields__password'>
	      <div class='icon'>
	        <img alt="" src='__IMG__/lock_icon_copy.png'>
	      </div>
	      <input name="password" placeholder='密码' maxlength="16" type='password' autocomplete="off">
	      <span id="yincang2"></span>
	      <div class='validation'>
	        <img alt="" src='__IMG__/tick.png'>
	      </div>
	    </div>
	    <div class='login_fields__password'>
	      <div class='icon'>
	        <img alt="" src='__IMG__/key.png'>
	      </div>
	      <input name="yzm" placeholder='验证码' maxlength="6" type='text'>
	      <span id="yincang3"></span>
	      <div><img style="width:250px;height:50px"id="verify_img" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="refreshVerify()"/>
          <canvas class="J_codeimg" id="myCanvas" onclick="Code();">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
	      </div>
	    </div>
	    <div class='login_fields__submit'>
	      <input type='button' id="denglu"value='登录'>
	    </div>
	  </div>
	  <div class='success'>
	  </div>
	 <!--  <div class='disclaimer'>
	    <p>欢迎登录后台管理系统  更多源码：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
	  </div> -->
	</div>
	<div class='authent'>
	  <div class="loader" style="height: 44px;width: 44px;margin-left: 28px;">
        <div class="loader-inner ball-clip-rotate-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
        </div>
	  <p>认证中...</p>
	</div>
	<div class="OverWindows"></div>
	
    <link href="__LAY__/css/layui.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="__JS__/jquery.min.js"></script>
	<script type="text/javascript" src="__JS__/jquery-ui.min.js"></script>
	<script type="text/javascript" src='__JS__/stopExecutionOnTimeout.js?t=1'></script>
    <script type="text/javascript" src="__LAY__/layui.js"></script>
    <script type="text/javascript" src="__JS__/Particleground.js"></script>
    <script type="text/javascript" src="__JS__/Treatment.js"></script>
    <script type="text/javascript" src="__JS__/jquery.mockjax.js"></script>
	<script type="text/javascript">		
	    //粒子背景特效
	    $('body').particleground({
	        dotColor: '#E8DFE8',
	        lineColor: '#133b88'
	    });
	    $('input[name="pwd"]').focus(function () {
	        $(this).attr('type', 'password');
	    });
	    $('input[type="text"]').focus(function () {
	        $(this).prev().animate({ 'opacity': '1' }, 200);
	    });
	    $('input[type="text"],input[type="password"]').blur(function () {
	        $(this).prev().animate({ 'opacity': '.5' }, 200);
	    });
	    $('input[name="login"],input[name="pwd"]').keyup(function () {
	        var Len = $(this).val().length;
	        if (!$(this).val() == '' && Len >= 5) {
	            $(this).next().animate({
	                'opacity': '1',
	                'right': '30'
	            }, 200);
	        } else {
	            $(this).next().animate({
	                'opacity': '0',
	                'right': '20'
	            }, 200);
	        }
	    });	 




	    //管理员登录
	    //刷新验证码
	     function refreshVerify() {
           var ts = Date.parse(new Date())/1000;
           $('#verify_img').attr("src", "/captcha?id="+ts);
    	 }
   
	      var rusername=$('input[name=username]');
	    //用户密码
	      var rpassword=$('input[name=password]');
	    //验证码
	      var rVerify=$('input[name=yzm]');

      //非空状态检测

      rusername.blur(function(){
          if(rusername.val() ==''){
              rusername.next().html('用户名不能为空');
              rusername.next().attr('style' ,'color:red');
              rusername.focus();
              return false;
          }else{
              //rusername.next().html('输入正确');
              rusername.next().attr('style' ,'display:none');

          }
      });

      rpassword.blur(function(){
          if(rpassword.val() ==''){
              rpassword.next().html('密码不能为空');
              rpassword.next().attr('style' ,'color:red');
              rpassword.focus();
              return false;
          }else{
              //rpassword.next().html('输入正确');
              rpassword.next().attr('style' ,'display:none');
          }
      });

      rVerify.blur(function(){
          if(rVerify.val() ==''){
              rVerify.next().html('验证码不能为空');
              rVerify.next().attr('style' ,'color:red');
              rVerify.focus();
              return false;
          }else{
              //rVerify.next().html('输入正确');
              rVerify.next().attr('style' ,'display:none');
          }
      });


        //登录验证
        $('#denglu').click(function(){
                   

            var username=$('input[name=username]').val();
            var password=$('input[name=password]').val();
            var verify=$('input[name=yzm]').val();
            var zidonglogin=$('input[name=checkbox]').val();

            if(username.length==0){
                  $('#yincang1').html("用户名不能为空");
                  $('#yincang1').attr('style' , 'color:red');
                  return false;
            }else{


                  //$('#yincang1').html("格式正确");
                  $('#yincang1').attr('style' , 'display:none');
            }

            if(password.length==0){
                  $('#yincang2').html("密码不能为空");
                  $('#yincang2').attr('style' , 'color:red');
                  return false;
            }else{
                  //$('#yincang2').html("输入正确");
                  $('#yincang2').attr('style' , 'display:none')
            }

            if(verify.length==0){
                  $('#yincang3').html("验证码不能为空");
                  $('#yincang3').attr('style' , 'color:red');
                  return false;
            }else{
                  //$('#yincang3').html("输入正确");
                  $('#yincang3').attr('style' , 'display:none');
            }



            var params = {
              "username":username,
              "password":password,
              "verify":verify
              
            }
           
            //alert(params);
            $.post("<?php echo url('admin/adminlogin/dologin'); ?>",params,function(data){
            	//alert(data.status);
              if(data.status){
                // alert(data);
                //
               alert(data.msg);
              
                setTimeout(function(){
                   location.href = '<?php echo url("admin/admin/index"); ?>'; 
                    
                } , 500);
                              
              }else{
                alert('登陆失败');
                // $('#login').model('hide');
                // setTimeout(function(){
                // location.href = '<?php echo url("index/index/index"); ?>';
                // } , 3000);
                
                //alert(data.msg);
              }
            });

        });

   
    </script>
<script src="__JS__/jquery-1.12.4.js"></script>
</body>
</html>
