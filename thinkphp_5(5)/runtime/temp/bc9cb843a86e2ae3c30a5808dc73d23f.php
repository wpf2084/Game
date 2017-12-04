<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\wamp64\www\game\thinkphp_5\public/../application/index\view\userall\member.html";i:1508941352;s:81:"D:\wamp64\www\game\thinkphp_5\public/../application/index\view\public\header.html";i:1508915152;s:81:"D:\wamp64\www\game\thinkphp_5\public/../application/index\view\public\footer.html";i:1508924980;}*/ ?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="applicable-device" content="pc,mobile">
<title>个人主页 - 羁绊站群会员中心</title>
<link rel="stylesheet" href="__BOOTSTRAP__/css/bootstrap.min.css"/>
<link rel="stylesheet" href="__CSS__/master.css" />
  <link rel="stylesheet" href="__CSS__/reset.css">
  <link rel="stylesheet" href="__CSS__/common.css">
  <link rel="stylesheet" href="__CSS__/index.css">
  <link rel="stylesheet" type="text/css" href="__CSS__/member.css">
<!--<script src="/Style/js/main.js"></script>-->
<link rel="stylesheet" type="text/css" href="__CSS__/sign2_1.css"/>




<script type="text/javascript" src="__BOOTSTRAP__/js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="__BOOTSTRAP__/js/bootstrap.min.js"></script>
</head>

<body>
<!--公用顶部开始-->
  <header id="header">
     <link rel="stylesheet" href="__CSS__/donwload.css">
  <div id="page_top">
      <div class="bg-wrap">
        <div class="bg"></div>
        <div class="mask"></div>
      </div>





      <div class="header-top">
        <div class="page-width clearfix">
          <div class="header-top__nav">
            <ul>
              <li class="item item-home">
                <a href="<?php echo url("index/index/index"); ?>">主站</a>
              </li>
              <li class="item"><a href="#">画友</a></li>
              <li class="item">
                <a href="#">游戏中心</a>
                <div class="game-center header-hover">
                  <div class="c clearfix">
                    <div class="fl">
                      <div class="imgbox">
                        <a href="#">
                          <img src="images/cont/game-center__img1.jpg" alt="#">
                          <span>命运-冠位指定（Fate/GO）</span>
                        </a>
                      </div>
                      <div class="game-img">
                        <a href="#">
                          <img src="images/cont/game_img1.png" alt="#">
                          <span>刀剑乱舞</span>
                        </a>
                        <a href="#">
                          <img src="images/cont/game_img2.png" alt="#">
                          <span>刀剑乱舞</span>
                        </a>
                        <a href="#">
                          <img src="images/cont/game_img3.jpg" alt="#">
                          <span>刀剑乱舞</span>
                        </a>
                      </div>
                    </div>
                    <div class="fr">
                      <div class="game-list">
                        <div class="title">
                          <i></i>
                          <a href="#">游戏论坛</a>
                        </div>
                        <div class="all">
                          <a href="#">仙剑奇侠传幻璃镜</a>
                          <a href="#">魔法禁书目录</a>
                          <a href="#">萌王EX</a>
                          <a href="#">妖精的衣橱</a>
                          <a href="#">神代梦华谭</a>
                          <a href="#">碧蓝航线</a>
                          <a href="#">光明大陆</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="gameImg"></div>
                </div>
              </li>
              <li class="item">
                <a href="#">直播</a>
                <div class="live-box header-hover">
                  <div class="live-box__c">
                    <div class="fl">
                      <div class="title">热门直播:</div>
                      <div class="cont">
                        <a href="#">
                          <!-- <img src="images/cont/live-box__img1.jpg" alt="#"> -->
                          <i>LIVE</i>
                          <p>热爱电竞の三三</p>
                        </a>
                        <a href="#">
                          <!-- <img src="images/cont/live-box__img2.jpg" alt="#"> -->
                          <i>LIVE</i>
                          <p>大角虫漫画</p>
                        </a>
                        <a href="#">
                          <!-- <img src="images/cont/live-box__img3.jpg" alt="#"> -->
                          <i>LIVE</i>
                          <p>木本青</p>
                        </a>
                        <a href="#">
                         <!--  <img src="images/cont/live-box__img4.gif" alt="#"> -->
                          <i>LIVE</i>
                          <p>一只小鹿噜噜噜</p>
                        </a>
                        <a href="#">
                          <!-- <img src="images/cont/live-box__img5.jpg" alt="#">
                          <i>LIVE</i>
                          <p>污叶妹屮</p>
                        </a>
                        <a href="#">
                          <img src="images/cont/live-box__img6.jpg" alt="#"> -->
                          <i>LIVE</i>
                          <p>污污_永远的魔法师_</p>
                        </a>
                      </div>
                    </div>
                    <div class="fl">
                      <div class="title">热门直播:</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item"><a href="#">周边</a></li>
              <li class="item">
                <a href="#">移动端</a>
                <!-- <div class="header-app header-hover">
                  <i></i>
                </div> -->
              </li>
            </ul>
          </div>
          <div class="header-top__user">

            <?php if(!empty(session('user'))): ?>
            
            <div class="login-box">

              <div style="width: 330px;position: relative;">
                
              <a class="yonghu clearfix"><img class="head_img" src= "<?php echo (\think\Request::instance()->session('user.img')) ? \think\Request::instance()->session('user.img') :  '//static.hdslb.com/images/member/noface.gif'; ?>"/></a>
              <div class="i_menu">
                <div class="user_name"><b>用户:<?php echo \think\Request::instance()->session('user.nickname'); ?></b></div>
                <div class="coin"></div>
              </div>

              </div>
              <a href="/index/userall/user_info">个人中心</a>
              <a href="javascript:;" id="firm">退出登录</a>

              <span></span>
              <a href="<?php echo url('admin/admin/index'); ?>" >管理中心</a>
              <script type="text/javascript">
                  $(".yonghu").mouseover(function(){
                        $(".i_menu").show();
                        $(".head_img").attr('class','head_img scale-in');
                  });
                  $(".yonghu").mouseout(function(){
                        $(".i_menu").hide();
                        $(".head_img").attr('class','head_img');
                  });
              </script>
              
            </div>
            <?php else: ?>

            <div class="login-box">

            <button type="button" class="" data-toggle="modal" data-target="#login" >
             <a href="javascript:">登录</a>

            </button>
            
              <span></span>


              <button type="button" class="" data-toggle="modal" data-target="#register" >
               <a href="javascript:">注册</a>          

       

              </button>

              <span></span>
               <button type="button"  data-toggle="modal" data-target="#zhaohui" >

             <!--  <button type="button" class="" data-toggle="modal" data-target="#register" > -->

               <a href="#">找回密码</a>          
              </button>
              
            </div>
            <?php endif; ?>



            <div class="user-post">
              <a href="#" class="link">投 稿</a>
              <div class="user-post__hover header-hover">
                <a href="<?php echo url('/index/upload/upload_vid'); ?>" class="post">视频投稿</a>
                <a href="#" class="manage">投稿管理</a>
                <a href="#" class="create">创作中心</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-body" id="loginout" style="z-index: 100; display: none;background:#fff;position: absolute;top: 0px;left: 900px;">
    <img  src='/static/img/loginout.png' /><div><span style='font-size:30px;color:green'>退出成功</span></div><span id='timeouver' style='font-size:20px;'>5秒后立即跳转</span><a href="/">立即跳转</a></div>
  <script type="text/javascript" src="__JS__/loginout.js"></script>  
      
      <div class="header-c">
      <div class="page-width">
        <a href="#" id="header_logo"></a>
        <p id="header_title"></p>
        <div id="search" class="clearfix">
        <form action="<?php echo url('index/animate/four'); ?>" method="post">
          <div class="search-rank">排行榜</div>
          
          <div class="search-box">
            <input type="text" name="sou"class="text" value="" placeholder="Search here..."/>
            <button type="submit"  class="btn"/><i></i></a></button>
            <div class="search-history">
              <div class="title">历史搜索</div>
              <div class="list">
                <a href="#">努巴尼欢乐秀<i></i></a>
                <a href="#">主播真会玩守望篇<i></i></a>
                <a href="#">主播真会玩女神篇<i></i></a>
                <a href="#">暴暴勺暴暴<i></i></a>
                <a href="#">OverWatch<i></i></a>
              </div>
            </div>
          </div>
          </form>
        </div>
        <div class="header-title">哔哩哔哩 (゜-゜)つロ 干杯~</div>
      </div>
    </div>




     

<!--公用顶部结束-->
<div class="warpbox">
    <div class="warptit"></div>
    <div class="w1000 clear">

            <div class="leftside fleft">
    <h1 class="adminlogo"><strong>会员</strong>中心<em>usr.005.tv</em></h1>
    <div class="adminbox">
        <div class="adminname fonttips">liliuli808</div>
        <div class="adminlink">
            <button id="btn-sign-user" data-checked="0" data-group="1" class="btn primary"><i class="icon icon-check-circle"></i>签到</button>
        </div>
        <div class="admin-extra">
            <div class="space"></div>
            <a href="javascript:void(0)" ><span class="pts" id="user_credits" >5</span> <span class="hint">经验</span></a>
            <a href="javascript:void(0)" title="0% - 当前总经验值：5 / 下一级所需总经验值：100" id="user_level_tips" ><span class="pts">LV1</span> <span class="hint">等级</span></a>
            <span class="clearfix"></span>
        </div>
        <div class="adminlink">
            <a class="fontblue" href="/User/setting.html">设置</a><a href="/User/loginout.html">退出</a>
        </div>
    </div>
    <ul class="leftnav">
        <li><a href="<?php echo url('index/userall/user_info'); ?>" class="active" ><em class="zhuye"></em>个人主页</a></li>
        <li><a href="<?php echo url('index/userall/member'); ?>" ><em class="mood"></em>会员</a></li>
        <li><a href="<?php echo url('index/userall/upload_head'); ?>"  ><em class="shoucang"></em>修改头像</a></li>
        <li><a class="opennavbtn" herf="javascript:;" class="active"><em class="guanli"></em>账号管理<span class="openico"></span></a>
            <div class="navsonbox" style="display:block;" >
                <a href="<?php echo url('/index/userall/set_user'); ?>" >信息设置</a>   
            </div>
        </li>
          <li><a class="opennavbtn" herf="javascript:;"><em class="haoyou"></em>我的投稿<span class="openico"></span></a>
            <div class="navsonbox" style="display:none;" >
                <!--<a href="/Contrib/add.html" >文章投稿</a>-->
                <!--<a href="/Contrib/all.html" >投稿管理</a>-->
                <a href="http://www.dilidili.com/member/article_add1.php" >链接投稿</a>
                  <!--<a href="http://www.dilidili.com/member/article_add1.php">视频投稿</a>-->
                  <a href="http://www.dilidili.com/member/content_list.php?channelid=17">过往投稿</a>
                <!--<a href="/Contrib/upload_video.html" >视频投稿</a>-->
                  <!--<a href="/Contrib/post_all.html" >过往投稿</a>-->
            </div>
        </li>
    </ul>

</div>

        <div class="rightmain fright">
            <div class="mainbox">
                <div class="zytop clear">
                    <div class="adminzy fleft">
                        <div class="adminnametext">liliuli808<span>1点赞币：<strong>0</strong>个</span></div>
                        <div class="adminmood fonthui">来说点什么吧~~</div>
                    </div>
                    <div class="adminnum fright">
                    </div>
                </div>

                <div class="vip">
                       <div class="vip_head">
                             <div class="vip_img unvip"></div>
                                 <div class="v-title">
                                     <div class="vip-untext">
                                            <p>和我签订契约,成为魔法少女吧</p>
                                     </div>
                                     <div class="vip_button">
                                        点击购买魔法棒
                                     </div>
                                 </div>
                        </div>
                        <div style="font-size: 20px">魔法少女专属福利</div>
                        <div class="pri-content">
                                    <span class="v-list" style="background-color:#eaf9ff">
                                            <img src="__IMAGES__/1080p.png" class="v-list-icon">
                                            <div class="v-list-info">
                                                <p class="v-list-name">钛合金画质</p>
                                                <p class="v-list-desc">魔法少女专享1080P画质</p>
                                            </div>
                                    </span>
                                    <span class="v-list" style="background-color: #fff2fe;">
                                            <img src="__IMAGES__/danmu2.png" class="v-list-icon">
                                            <div class="v-list-info">
                                                <p class="v-list-name">魔法少女专属弹幕</p>
                                                <p class="v-list-desc">魔法少女高亮粉色弹幕</p>
                                            </div>
                                    </span>
                                    <span class="v-list" style="background-color: #FFE5DF;">
                                            <img src="__IMAGES__/nickname.png" class="v-list-icon">
                                            <div class="v-list-info">
                                                <p class="v-list-name">魔法少女专属粉色昵称</p>
                                                <p class="v-list-desc">魔法少女高亮粉色昵称</p>
                                            </div>
                                    </span>
                        </div>
                </div>
        </div>
    </div>
    <div class="warpbott"></div>
</div>
</div>
<div class="pay-model" style="display: none;">
        <div class="model-title">
                开通会员
        </div>
        <div class="pay-content">
                <div class="main">
                        <div class="pay-sum">
                            <label class="head-label">开通时长：</label>
                            <ul id="pay-sum">
                                <li data="233" data-months="12" class="active">233元 / 年</li>
                                <li data="68" data-months="3" class="">68元 / 季</li>
                                <li data="25" data-months="1" class="">25元 / 月</li>
                            </ul>
                        </div>
                        <div class="pay-type">
                            <label class="head-label">支付方式：</label>
                            <ul id="pay-type">
                                <li data-code="alipay" title="支付宝" id="alipay" class="active"></li>
                                <li data-code="wechat" title="微信" id="wechat" ></li>
                                </ul>
                        </div>
                        <button class="btn btn-primary" id="pay-btn">支付
                </button>
                </div>
                <div class="modal-close"></div>
        </div>
</div>
<script type="text/javascript">
        var sum = 0;
        $("#pay-sum").children().click(function(){
            $("#pay-sum").children().attr('class','');
                $(this).attr('class','active');
                
        });
        $("#pay-type").children().click(function(){
            $("#pay-type").children().attr('class','');
                $(this).attr('class','active');
        });
        $("#pay-btn").on('click',function(){
            sum = $("#pay-sum").children(".active").html();
              sum = parseInt(sum); 
                $.post(
                    "paymember",
                    {'sum':sum},
                    function(data)
                    {
                        if(data.status)
                        {
                           
                            $(".pay-content").after("<div style='color:green;position: absolute;bottom:110px;left: 100px;font-size: 20px;'>"+data.msg+"</div>");    
                        }else
                        {
                           
                            $(".pay-content").after("<div style='color:red;position: absolute;bottom:110px;left: 100px;font-size: 20px;'>"+data.msg+"</div>");  
                        }
                    }
                    );
        });

        $(".modal-close").on('click',function(){
            $(".pay-model").hide();
        });
        $(".vip_button").on('click',function(){
            $(".pay-model").show();
        });
</script>
     <!-- 注册窗口 -->
     
    <div id="register" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-title" id="register_title">
                    <h1 class="text-center">注册</h1>
                </div>
                <div class="modal-body" id="register_body">
                   
                            <div class="form-group">
                                <label for="">用户名</label>
                                <input class="form-control" type="text" name="rusername" id="rusername" placeholder="6-15位字母或数字">
                                <span id="checkuser"></span>
                            </div>
                            <div class="form-group">
                                <label for="">密码</label>
                                <input class="form-control" type="password" name="repassword" placeholder="至少6位字母或数字">
                                <span id="checkpass"></span>
                            </div>
                            <div class="form-group">
                                <label for="">再次输入密码</label>
                                <input class="form-control" type="password" name="rerpassword" placeholder="至少6位字母或数字">
                                <span id="checkrepass"></span>
                            </div>
                            <div class="form-group">
                                <label for="">手机号</label>
                                <input class="form-control" type="tel" name="telnum">
                                <span id="errorspan"></span>
                                <div class="text-left">
                                 <label for="" style="margin-top: 30px">验证码</label>
                                <input class="form-control" type="text" id="yzm" name="yzm" >
                                <input class="btn btn-primary btn-sm" type="button" name="btnSendCode" value="点击获取验证码" style="">
                                </div>
                            </div>
                            <div class="text-right">
                        
                                <input class="btn btn-primary" name="doregister" type="button" value="提交">
                                <button class="btn btn-danger" data-dismiss="modal">取消</button>
                            </div>
                            <a href="" data-toggle="modal" data-dismiss="modal" data-target="#login">已有账号？点我登录</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- 登录窗口 -->
    
    <div id="login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-title">
                    <h1 class="text-center">登录</h1>
                </div>
                <div class="modal-body" id="login_body">
                   <!--  <form class="form-group" action="<?php echo url('index/login/dologin'); ?>" method="post"> -->
                            <div class="form-group">
                                <label for="">用户名</label>
                                <input class="form-control" type="text" name="username" placeholder="">
                                <span id="yincang1"></span>
                            </div>
                            <div class="form-group">
                                <label for="">密码</label>
                                <input class="form-control" type="password" name="password" placeholder="">
                                 <span id="yincang2"></span>
                            </div>
                            <div class="form-group">
                                <label for="">验证码</label>
                                <input class="form-control" type="text" name="verify" placeholder="">
                                 <span id="yincang3"></span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="zidong" name="zidong" value="1">
                                 <span id="yincang4"></span>
                                <label for="">自动登录</label>
                                
                            </div>
                              <div class="form-group">
                                 <label for="qqlogin">
                                 <a id="qqlogin" href="<?php echo url("index/login/oauth"); ?>"><i class="iconfont icon-qq" style="font-size: 30px"></i></a>  
                                 </label>  
                            </div>
                            <div><img id="verify_img" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="refreshVerify()"/>
                            </div>
                            <div class="text-right">
                                <button id="denglu" class="btn btn-primary">登录</button>
                                <button class="btn btn-danger" data-dismiss="modal">取消</button>
                            </div>
                            <a href="" data-toggle="modal" data-dismiss="modal" data-target="#register">还没有账号？点我注册</a>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>  
        
  <!-- 找回密码 -->
     <div id="zhaohui" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-title" id="zhaohui_title">
                    <h1 class="text-center">找回密码</h1>
                </div>
                <div class="modal-body" id="zhaohui_body">
                   
                            <div class="form-group">
                                <label for="">用户名</label>
                                <input class="form-control" type="text" name="zusername"  placeholder="">
                                <span id="zuser"></span>
                            </div>
                                            
                            <div class="form-group">
                                <label for="">手机号</label>
                                <input class="form-control" type="tel" name="ztelnum">
                                <span id="zerrorspan"></span>
                                <div class="text-left">
                                 <label for="" style="margin-top: 30px">验证码</label>
                                <input class="form-control" type="text" id="zyzm" name="zyzm" >
                                <input class="btn btn-primary btn-sm" type="button" name="zbtnSendCode" value="点击获取验证码" style="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">新密码</label>
                                <input class="form-control" type="password" name="zepassword" placeholder="至少6位字母或数字">
                                <span id="checkpass"></span>
                            </div>
                            <div class="form-group">
                                <label for="">再次输入密码</label>
                                <input class="form-control" type="password" name="zerpassword" placeholder="至少6位字母或数字">
                                <span id="checkrepass"></span>
                            </div>     
                            <div class="text-right">
                        
                                <input class="btn btn-primary" id="dozhaohui" type="button" value="提交">
                                <button class="btn btn-danger" data-dismiss="modal">取消</button>
                            </div>
                            <a href="" data-toggle="modal" data-dismiss="modal" data-target="#login">已有账号？点我登录</a>
                </div>
            </div>
        </div>
    </div>   





<script type="text/javascript" src="__JS__/register.js"></script>
<script src="__JS__/jquery-1.8.3.js"></script>
<script type="text/javascript" src="__JS__/upload_head.js"></script>
<script src="__JS__/login.js"></script>
<script type="text/javascript">

</script>
</body>
</html>

