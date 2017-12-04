
    //-----------用户登录     
        //第三方登录
        //点击刷新验证码
        function refreshVerify() {
            var ts = Date.parse(new Date())/1000;
            $("#verify_img").attr("src", "/captcha?id="+ts);
        }
     // var rinput=$("input");
     //用户名
      var rusername=$("input[name=username]");
    //用户密码
      var rpassword=$("input[name=password]");
    //验证码
      var rVerify=$("input[name=verify]");

      var login = $("#denglu");
      //非空状态检测

      rusername.on("blur",function(){
          if(rusername.val().length !=0){
              rusername.next().html("OK");
              rusername.next().attr("style" ,"color:green");
              flag1 = true;
          }else{
              rusername.next().html("不能为空");
              rusername.next().attr("style" ,"color:red");
              flag1 = false;
          }
      });

      rpassword.on("blur",function(){
          if(rpassword.val() ==''){
              rpassword.next().html("密码不能为空");
              rpassword.next().attr("style" ,"color:red");
              rpassword.focus();
              flag2 = false;
          }else{
              rpassword.next().html("输入正确");
              rpassword.next().attr("style" ,"color:green");
              flag2 = true;
          }
      });

      rVerify.on("blur",function(){
          if(rVerify.val() ==''){
              rVerify.next().html("验证码不能为空");
              rVerify.next().attr("style" ,"color:red");
              rVerify.focus();
              flag3 = false;
          }else{
              rVerify.next().html("输入正确");
              rVerify.next().attr("style" ,"color:green");
              flag3= true;
          }
      });


        //登录验证
        login.on('click',function(){
            var username=$("input[name=username]").val();
            var password=$("input[name=password]").val();
            var verify=$("input[name=verify]").val();
            if($('#zidong').is(':checked')) 
            {
              var zidonglogin=1;
            }
            var loginbo = $("#login_body");
            var params = {
              "username":username,
              "password":password,
              "verify":verify,
              "zidonglogin":zidonglogin
            }
           
            if(flag1 && flag2 && flag3){
            $.post("/index/login/dologin",params,function(data){

              if(data.status){

                    loginbo.children().attr('style','display:none');
                    loginbo.after("<img  src='/static/img/success.png' style='margin:0 auto;position:relative;left:233px'/><div><span style='position:relative;left:233px;font-size:30px;color:green'>登陆成功</span></div><span id='timeouve' style='position:relative;left:233px;font-size:20px;'>5秒后立即跳转</span><a href='/''>立即跳转</a>");
                      var n = 5;
                      setInterval(function(){
                        n--;
                        $("#timeouve").html(n+"秒后立即跳转");
                      if(n <= 1)
                      {
                         location.href = '/';
                      }
                      } ,1000);
                              
              }else{
                loginbo.children().attr('style','display:none');
                 loginbo.after("<img  src='/static/img/error.png' style='margin:0 auto;position:relative;left:233px'/><div><span style='position:relative;left:233px;font-size:30px;color:red'>登陆失败</span></div><span id='timeouver' style='position:relative;left:233px;font-size:20px;'>5秒后立即跳转</span><div><span style='position:relative;left:233px;font-size:30px;color:red'>"+data.msg+"</span></div><a href='/'>立即跳转</a>");
                    var n = 5;
                    setInterval(function(){
                      n--;
                      $("#timeouve").html(n+"秒后立即跳转");
                      if(n <= 1)
                      {

                         //location.href = '/';
                      }
                    },1000);
              }
            });
          }
        });


// ------------找回密码
    //用户名
      var zusername=$('input[name=zusername]');
      var ztelnum=$('input[name=ztelnum]');
      var zepassword=$('input[name=zepassword]');
      var zerpassword=$('input[name=zerpassword]');
      //用户的返回值
      var zfanhui=false;
     //用户验证    
     
      function zcheckuser()
      {
        var zparams={"username":$("input[name=zusername]").val()}
     
          $.post("index/login/zhao",zparams,function(data){
             // alert(data.status);
              if(data.status){ 
                    //alert(1);                 
                     zfanhui=true;                   
              }else{
                    //alert(2);
                     zfanhui=false;                  
              }
          });
      }

    zusername.blur(function(){        
          zcheckuser();
          if(zfanhui){
                  //alert(zfanhui);
                 zusername.next().html('用户名存在');
                 zusername.next().attr('style' ,'color:green');
          }else{
                   zusername.next().html('用户不存在');
                   zusername.next().attr('style' ,'color:red');
                   zusername.focus();
                   return ;
          }
    });
    
    //手机验证
    ztelnum.blur(function(){
      var zparams={"tel":$('input[name=ztelnum]').val()}
      $.post("index/login/tel",zparams,function(data){
          if(data.status){
                ztelnum.next().html('手机号正确');
               ztelnum.next().attr('style' ,'color:green');
                //ztelnum.focus();
                //return true;
          }else{
                //alert(data.status);
                ztelnum.next().html('手机号不正确');
                ztelnum.next().attr('style' ,'color:red');
                //ztelnum.focus();
                return;

          }
      });
    
    });

    //验证密码
    zepassword.blur(function(){
      var pPattern = /^[a-zA-Z0-9_-]{8,16}$/;
        // if(zepassword.val().length <8 || zepassword.val().length > 13 )
        if(!pPattern.exec(zepassword.val()))
        {
                  zepassword.next().html('最少8位');
                  zepassword.next().attr('style','color:red');
                  return;
        }else
        {
              zepassword.next().html('恭喜啦,密码可以使用');
              zepassword.next().attr('style','color:green');
               
        }
    });
   zerpassword.blur(function(){
        var pPattern = /^[a-zA-Z0-9_-]{8,16}$/;
       
        if(zerpassword.val() != zepassword.val())
        {
                  zerpassword.next().html('两次密码不同');
                  zerpassword.next().attr('style','color:red');
                   return;
        }else
        {
              zerpassword.next().html('两次密码一致');
              zerpassword.next().attr('style','color:green');
               
        }
    });

   //发送验证码
       var zbtnSendCode = $("input[name=zbtnSendCode]");
       var zn=60;
      zbtnSendCode.click(function(){
        //alert(1);
        //ruser.next().attr('style','color:red');
      if($("input[name=ztelnum]").val() == '')
      {
        $("#zerrorspan").html('不能为空');
        $("#zerrorspan").attr('style','color:red');
        $("input[name=telnum]").focus();
        return;
      }
      var paramrs = {"telnum": $("input[name=ztelnum]").val()};
      zbtnSendCode.attr('value','60秒后重试');
      zbtnSendCode.attr('disabled','disabled');
      $.post(
        "index/login/docode",
        paramrs
        );
           timer = setInterval (function(){
                  zn--;
                  zbtnSendCode.attr('value',zn+'秒后重试');
                  if(zn == 0)
                  {
                    zn=60;
                    clearInterval(timer);
                    zbtnSendCode.attr('value','重新发送验证码');
                    zbtnSendCode.attr('disabled',false);
                  }
            }, 1000);
       });

      //修改
      $('#dozhaohui').click(function(){
                   

            var zname=$('input[name=zusername]').val();
            
            var zword=$('input[name=zepassword]').val();          
            var zyzm=$('input[name=zyzm]').val();
            var zparams = {
              "username":zname,
              "password":zword,
              "yzm":zyzm
             }
           
            
            $.post("index/login/doxiugai",zparams,function(data){
             
              if(data.status){
               
               alert(data.msg);
              
                setTimeout(function(){
                   location.href = 'index/index/index'; 
                    
                } , 500);
                              
              }else{
                alert('登录失败');
               
              }
            });

        });


//修改密码

//用户名
      var xusername=$('input[name=xusername]');
     
      var xepassword=$('input[name=xepassword]');
      var xerpassword=$('input[name=xerpassword]');
      //用户的返回值
      var xfanhui=false;

      //验证密码
    xepassword.blur(function(){
      var pPattern = /^[a-zA-Z0-9_-]{8,16}$/;
        // if(zepassword.val().length <8 || zepassword.val().length > 13 )
        if(!pPattern.exec(xepassword.val()))
        {
                  xepassword.next().html('最少8位');
                  xepassword.next().attr('style','color:red');
                  return;
        }else
        {
              xepassword.next().html('恭喜啦,密码可以使用');
              xepassword.next().attr('style','color:green');
               
        }
    });
   xerpassword.blur(function(){
        var pPattern = /^[a-zA-Z0-9_-]{8,16}$/;
       
        if(xerpassword.val() != xepassword.val())
        {
                  xerpassword.next().html('两次密码不同');
                  xerpassword.next().attr('style','color:red');
                   return;
        }else
        {
              xerpassword.next().html('两次密码一致');
              xerpassword.next().attr('style','color:green');
               
        }
    });

   //修改
      $('#doxiugai').click(function(){
                   

            var xname=$('input[name=xusername]').val();
            
            var xword=$('input[name=xepassword]').val();          
           
            var xparams = {
              "username":xname,
              "password":xword
             
             }
           
            
            $.post("doxiugai",xparams,function(data){
             
              if(data.status){
               
               //alert(data.msg);
              
                // setTimeout(function(){
                //    location.href = 'index/index/index'; 
                    
                // } , 500);
                              
              }else{
                 alert(data.msg);
               
              }
            });

        });