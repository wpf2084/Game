<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"D:\wamp64\www\think\game\thinkphp_5\public/../application/index\view\animate\index.html";i:1508843690;s:87:"D:\wamp64\www\think\game\thinkphp_5\public/../application/index\view\public\header.html";i:1508915152;s:87:"D:\wamp64\www\think\game\thinkphp_5\public/../application/index\view\public\footer.html";i:1508924980;}*/ ?>
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
              <a href="<?php echo $v['url']; ?>">
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
      <div class="mainCont clearfix" id="promote">
        <div class="main-side fr">
          <div class="promote-side__title">
            <a href="#">在线人数：715509</a>
            <span>|</span>
            <a href="#">最新投稿：5806</a>
          </div>
        </div>
      </div>

      <!-- 动画 -->
      <div class="mainCont clearfix" id="animation" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-animation"></i>
            <h2>3D动画</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul id="animate_list" class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
            <div class="storey-box clearfix">
                     <div class="load-state">
                        <span class="loading">正在加载....</span>
              </div>
            </div>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="__IMAGES__/cont/main-rank__img1.jpg" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="__IMAGES__/cont/main-rank__img2.jpg" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>



      <!-- 电影 -->
      <div class="mainCont clearfix" id="movie" js-move="true">
        <div class="pic-list fl" js-tab="true">
          <div class="pic-list__title">
            <i class="icon icon-movie"></i>
            <h2>2D动画</h2>
            <div class="tab-title">
              <a href="#" class="cur">有新动态</a>
              <a href="#">最新投稿</a>
            </div>
            <a href="#" class="main-link"><i></i>我的十月新番打开方式一定有问题</a>
            <div class="more-wrap">
              <a href="#" class="dynamic"><i></i>392条新动态</a>
              <a href="#" class="more">更多<i></i></a>
            </div>
          </div>
          <ul id="movie_list" class="pic-list__wrapper clearfix tab-cont__item tab-cont__cur">
                <div class="storey-box clearfix">
                     <div class="load-state">
                        <span class="loading">正在加载....</span>
                    </div>
                </div>
          </ul>
        </div>
        <div class="main-side fr" js-tab="true">
          <div class="main-side__title">
            <div class="rank-t">
              <h3>排行</h3>
            </div>
            <div class="tab-title">
              <a href="#" class="cur">全部</a>
              <a href="#">原创</a>
            </div>
            <div class="side-select">
              <span>三日</span>
              <i></i>
            </div>
          </div>
          <div class="main-side__cont">
            <div class="tab-cont">
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="__IMAGES__/cont/main-rank__img1.jpg" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
              <ul class="tab-cont__item main-rank">
                <li class="item item-one">
                  <a href="#">
                    <i class="n1">1</i>
                    <img src="__IMAGES__/cont/main-rank__img2.jpg" alt="#">
                    <div>
                      <p class="title">【1月】小林家的龙女仆 10【独家正版】</p>
                      <p class="mark">综合评分: 109.3万</p>
                    </div>
                  </a>
                </li>
                <li class="item">
                  <a href="#"><i class="n2">2</i>                  【1月】火影忍者 疾风传 719</a>
                </li>
                <li class="item">
                  <a href="#"><i class="n3">3</i>                    【4月】双星之阴阳师 48</a>
                </li>
                <li class="item">
                  <a href="#"><i>4</i>狐妖小红娘 52 狗血大戏正上演 OP特效又更换</a>
                </li>
                <li class="item">
                  <a href="#"><i>5</i>少年锦衣卫 第一季 06 怪谈</a>
                </li>
                <li class="item">
                  <a href="#"><i>6</i>画江湖之不良人Ⅱ 35 阋墙之祸</a>
                </li>
                <li class="item">
                  <a href="#"><i>7</i>【1月】黑白来看守所 24【独家正版】</a>
                </li>
              </ul>
            </div>
            <a href="#" class="more">查看更多<i></i></a>
          </div>
        </div>
      </div>

  <footer id="footer">
    <div class="page-width">
      <ul class="footer-c clearfix">
         <li>
           <h6>dilidili</h6>
           <a href="#" class="card">关于我们</a>
           <a href="#" class="card">友情链接</a>
           <a href="#" class="card">周边</a>
           <a href="#" class="card">联系我们</a>
           <a href="#" class="card">加入我们</a>
           <a href="#" class="card">官方认证</a>
         </li>
         <li class="middle">
           <h6>传送门</h6>
           <a href="#" class="card">帮助中心</a>
           <a href="#" class="card">高级弹幕</a>
           <a href="#" class="card">活动专题页</a>
           <a href="#" class="card">侵权申诉</a>
           <a href="#" class="card">分院帽计划</a>
           <a href="#" class="card">活动中心</a>
           <a href="#" class="card">用户反馈论坛</a>
           <a href="#" class="card">壁纸站</a>
           <a href="#" class="card">名人堂</a>
         </li>
         <li class="footer-icon">
           <div class="cont">
             <a href="#" class="app">
               <i></i>
               <em>手机端下载</em>
               <img src="__IMAGES__/app-qrcode.png" alt="#">
             </a>
             <a href="#" class="weibo">
               <i></i>
               <em>新浪微博</em>
               <img src="__IMAGES__/weibo-qrcode.png" alt="#">
             </a>
             <a href="#" class="weixin">
               <i></i>
               <em>官方微信</em>
               <img src="__IMAGES__/weixin-arcode.gif" alt="#">
             </a>
           </div>
         </li>
      </ul>
    </div>
  </footer>


  <div id="sideBar">
    <div class="sideBar-list">
      <a href="#">直播</a>
      <a href="#">动画</a>
      <a href="#">番剧</a>
      <a href="#">国创</a>
      <a href="#">音乐</a>
      <a href="#">舞蹈</a>
      <a href="#">游戏</a>
      <a href="#">科技</a>
      <a href="#">生活</a>
      <a href="#">鬼畜</a>
      <a href="#">时尚</a>
      <a href="#">广告</a>
      <a href="#">娱乐</a>
      <a href="#">电影</a>
      <a href="#">TV剧</a>
      <a href="#"><i></i>排序</a>
    </div>
    <div class="sideBar-line"></div>
    <a href="#" class="sideBar-toTop" id="backTop"></a>
  </div>

<script type="text/javascript">
  


      $.post(
        "/index/index/getAnimate",
        function(data)
        {
          $("#animate_list").children().remove();
          $("#movie_list").children().remove();
          for (var i = 0; i < data.length; i++) {
          	 if(data[i].tid == 3){
              $("#animate_list").append('<li class="item"><a href=/index/Radioinfo/show?id='+data[i]['vid']+' class="img-link"><img src='+data[i].img_src+' alt="#"><span class="mask"></span><span class="time">3:39</span></a><div class="img-info"><a href="#">'+data[i].title+'~</a><div class="btm"><div class="user"><i></i>'+data[i].nickname+'</div><div class="online"><i></i>6732</div></div></div></li>');
            }else
            {
              $("#movie_list").append('<li class="item"><a href=/index/Radioinfo/show?id='+data[i]['vid']+' class="img-link"><img src='+data[i].img_src+' alt="#"><span class="mask"></span><span class="time">3:39</span></a><div class="img-info"><a href="#">'+data[i].title+'~</a><div class="btm"><div class="user"><i></i>'+data[i].nickname+'</div><div class="online"><i></i>6732</div></div></div></li>');
            }
          }
        }
        );



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