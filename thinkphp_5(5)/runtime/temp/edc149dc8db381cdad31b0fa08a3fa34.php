<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\wamp64\www\game\thinkphp_5\public/../application/index\view\animate\threed.html";i:1508843698;s:81:"D:\wamp64\www\game\thinkphp_5\public/../application/index\view\public\header.html";i:1508915152;s:81:"D:\wamp64\www\game\thinkphp_5\public/../application/index\view\public\footer.html";i:1508924980;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Demo</title>
  <link rel="shortcut icon" href="favicons/1.png">

  <link rel="stylesheet" href="__CSS__/reset.css">
  <link rel="stylesheet" href="__CSS__/common.css">
  <link rel="stylesheet" href="__CSS__/index.css">
  <link rel="stylesheet" href="__CSS__/donwload.css">
  <link rel="stylesheet" type="text/css" href="__CSS__/iconfont.css">
  <link rel="stylesheet" type="text/css" href="__CSS__/home.css">
  <link rel="stylesheet" type="text/css" href="__CSS__/three.css">
  <!-- bootstrap -->
    <link rel="stylesheet" href="__BOOTSTRAP__/css/bootstrap.css">

     <link rel="stylesheet" href="__BOOTSTRAP__/css/bootstrap.css">
    <script type="text/javascript" src="__BOOTSTRAP__/js/jquery-1.12.4.js"></script>
     <script type="text/javascript" src="__BOOTSTRAP__/js/bootstrap.min.js"></script>
      <script src="http://open.51094.com/user/myscript/159e341c4a9cc6.html"></script>
     <!-- QQ -->
     <!-- <script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="appid" data-redirecturi="callback" charset="utf-8"></script> -->
      <style>
        .header-top__user .login-box .youxiang img
          {
           margin-right:100px;
          }
          .header-top__user .login-box .yonghu{
            float:left;
            text-decoration: none;
            margin-right: 0px;
          }
      </style>
</head>
<body>

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




     


   <!--  <div class="header-c">
      <div class="page-width">
        <a href="#" id="header_logo"></a>
        <p id="header_title"></p>
        <div id="search" class="clearfix">
          <div class="search-rank">排行榜</div>
          <div class="search-box">
            <input type="text" class="text" placeholder="Search here...">
            <a href="#" class="btn"><i></i></a>
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
        </div>
        <div class="header-title">哔哩哔哩 (゜-゜)つロ 干杯~</div>
      </div>
    </div> -->
  </header>

  <nav id="nav">
    <div class="page-width clearfix">
      <ul class="nav-list">
        <li class="item item-home">
          <a href="/" class="link">首页</a>
        </li>
        <?php foreach($data as $val): ?>
        <li class="item">
          <a href="<?php echo $val['url']; ?>" class="link">
            <div class="num"><i>887</i></div>
            <?php echo $val['name']; ?>
          </a>
          <ul class="nav-item__hover">
            <?php foreach($val as $v): if(is_array($v)): ?>
            <li>
              <a href="#">
                <em><?php echo $v['name']; ?><i></i></em>
              </a>
            </li>
              <?php endif; endforeach; ?>
          </ul>
        </li>
        <?php endforeach; ?>
        <li class="item item-square">
          <a href="#" class="link">广场</a>
          <div class="nav-square__hover">
            <ul>
              <li><a href="#"><i class="icon-activity"></i>活动中心</a></li>
              <li><a href="#"><i class="icon-game"></i>游戏中心</a></li>
              <li><a href="#"><i class="icon-news"></i>新闻中心</a></li>
              <li><a href="#"><i class="icon-friend"></i>画友</a></li>
              <li><a href="#"><i class="icon-tv"></i>芒果TV</a></li>
            </ul><!-- 
            <a href="#" class="activity"><img src="__IMAGES__/cont/nav-square__img.jpg" alt="#"></a> -->
          </div>
        </li>
        <li class="item item-live">
          <a href="#" class="link">直播</a>
          <ul class="nav-item__hover">
            <li>
              <a href="#">
                <em>推荐主播<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>手机直播<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>绘画专区<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>唱见舞见<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>御宅文化<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>单机联机<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>网络游戏<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>电子竞技<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>手游直播<i></i></em>
              </a>
            </li>
            <li>
              <a href="#">
                <em>放映厅<i></i></em>
              </a>
            </li>
          </ul>
        </li>
        <li class="item item-room">
          <a href="#" class="link">小黑屋</a>
        </li>
      </ul>
      <div class="nav-gif"><img src="__IMAGES__/cont/nav_img.gif" alt="求领养"></div>
    </div>
  </nav>


  <div id="main">
    <div class="page-width">
      <!-- 推广 -->
      <div class="tag-list-wrp">
          <div class="b-head">
              <span class="b-head-i"></span>
              <span class="b-head-t">热门标签</span>
              <span class="b-head-s">点击即可查看本区标签的相关内容</span>
          </div>
          <div class="tag-list-cnt" id="tag_list" style="height: auto;">
              <ul class="tag-list">
                  <li class="tag-item" id="tag_flag" title="全部标签"  tag-id="0" row="1" style="padding-left: 10px; padding-right: 10px;"><span>全部标签</span></li>
              </ul>
          </div>
      </div>

      <!-- 动画 -->
      <div class="container-body">
      <div class="b-page-large b-f-left">
          <div class="b-head">
              <span class="b-head-i"></span>
              <span class="b-head-t">最新动态</span>
              <span class="b-head-s"></span>
          </div>
          <div class="vl-dyn-cnt">
              <ul  class="v-list" id="vl_dyn_list">
                <div class="storey-box clearfix">
                     <div class="load-state">
                        <span class="loading">正在加载....</span>
                    </div>
                </div>
          </ul>
          </div>
            <div class="video-list list-c">
                <div class="vl-hd clearfix">
                <ul class="vd-list l2" id="vd-list-o">
                </ul>
                </div>
            </div>
      </div>

           <div class="b-page-small b-f-right">
              <div class="b-head">
                    <span class="b-head-t">热门</span>
              </div>
              <div class="rlist-wrp">
                    <ul class="rlist loaded">
                          <li class="on">
                              <i class="number n1">1</i>
                              <div class="preview"><a href="/video/av4495965/" title="【静止系MAD】 BLASTER 【我的英雄学院】" target="_blank"><img data-img="" src="http://i0.hdslb.com/bfs/archive/4ea17d44082efce202ac4840be3895bdf306439e.jpg@320w_200h.webp" loaded="loaded" alt="【静止系MAD】 BLASTER 【我的英雄学院】" style="opacity: 1;"></a><i class="watch-later" aid="4495965"></i></div>
                              <a class="rl-info" href="/video/av4495965/" title="【静止系MAD】 BLASTER 【我的英雄学院】" target="_blank"><div class="title t">【静止系MAD】 BLASTER 【我的英雄学院】</div><div class="i"><b class="pts" title="综合评分：3955">综合评分：<em number="3955">3955</em></b></div></a>
                          </li>
                    </ul>
              </div>
          </div>
</div>
<script type="text/javascript">
$("#vl_dyn_list").children('li').on('mouseover',function(){
            $("#t").animate({height:"50px"});
});

$("#vl_dyn_list").children('li').on('mouseout',function(){
            $("#t").animate({height:"25px"});
});
$('document').ready(function(){
   $.post(
        "getElemnt",
        {'tid':3},
        function(data)
        {
          $("#vl_dyn_list").children().remove();
          for (var i = 0; i < data['video'].length; i++) {
            $("#vl_dyn_list").append('<li><div class="v"><a class="preview cover-preview" href=/index/Radioinfo/show?id='+data['video'][i].vid+'><img src='+data['video'][i].img_src+' loaded="loaded" style="opacity: 1;"></a><a href=/index/Radioinfo/show?id='+data['video'][i].vid+' target="_blank" title='+data['video'][i].title+'><div class="t" id="t">'+data['video'][i].title+'</div><div class="i"><span><i class="b-icon b-icon-v-play"></i><em number="5660">'+data['video'][i].count+'</em></span><span><i class="b-icon b-icon-v-dm"></i><em number="115">115</em></span></div></a></div></li>');
          }
        }
        );
$.post(
  "getTag",
  {'tid':3},
  function(data)
  {
    //alert(data['tag'][0].tagname);
    for (var i = 0; i < data.length; i++) {
          $("#tag_flag").after('<li class="tag-item" title='+data[i].tagname+' tag-id=tag'+i+' tag='+data[i].tagname+' row="1" style="padding-left: 10px; padding-right: 10px;" ><span value='+data[i].tagname+'>'+data[i].tagname+'</span><div class="hot"></div></li>');
    }
  }
  );

$.post(
    "getAll",
    {'tid':3},
    function(data)
    {
      for (var i = 0; i < data.length; i++) {
            $("#vd-list-o").append('<li><div class="l-item"><div class="l-l"><a href=/index/Radioinfo/show?id='+data[i].vid+' target="_blank" class="preview cover-preview"><img data-img="" src='+data[i].img_src+' loaded="loaded" alt="【魔法少女小圆MAD】The Eyes【叛逆的物語】" style="opacity: 1;"><div class="back"><div></div></div><div class="fore"><span></span><div class="bar"><div></div></div></div><div class="x"><b class="x2">3:44</b></div></a><i class="watch-later" aid="3026457"></i><a href="//www.bilibili.com/video/av3026457" target="_blank" class="title" title="【魔法少女小圆MAD】The Eyes【叛逆的物語】">'+data[i].title+'</a></div><div class="l-r"><div class="v-desc">自制/sm27316300 作者：Hiroki。本来是参加AniPAFE2015的作品，可惜没赶上。</div><div class="v-info"><span class="v-info-i gk"><i class="b-icon b-icon-v-play" title="观看"></i><span number="448630">'+data[i].count+'</span></span><span class="v-info-i dm"><i class="b-icon b-icon-v-dm" title="弹幕"></i><span number="3588">'+data[i].count+'</span></span><span class="v-info-i sc"><i class="b-icon b-icon-v-fav" title="收藏"></i><span number="34997"></span></span></div><div class="up-info"><a class="v-author" href="//space.bilibili.com/1273021" target="_blank" title="停用CrowsAmvTeam"></a><span class="v-date" title="日期">2015-10-07 21:11:39</span></div></div></div></li>');
      }
    }
  );
});
 $("#tag_list ul").on("click","li",function(){
  tagname = $(this).children().attr('value');
  $(".tag-item").attr('class','tag-item');
  $(this).attr('class','tag-item on');
      $.post(
        "getElemnt",
        {'tagname':tagname,'tid':3},
        function(data)
        {
          $("#vl_dyn_list").children().remove();
          for (var i = 0; i < data['video'].length; i++) {
            $("#vl_dyn_list").append('<li><div class="v"><a class="preview cover-preview" href=/index/Radioinfo/show?id='+data['video'][i].vid+'><img src='+data['video'][i].img_src+' loaded="loaded" style="opacity: 1;"></a><a href=/index/Radioinfo/show?id='+data['video'][i].vid+' target="_blank" title='+data['video'][i].title+'><div class="t" id="t">'+data['video'][i].title+'</div><div class="i"><span><i class="b-icon b-icon-v-play"></i><em number="5660">'+data['video'][i].count+'</em></span><span><i class="b-icon b-icon-v-dm"></i><em number="115">115</em></span></div></a></div></li>');
          }
        }
        );
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