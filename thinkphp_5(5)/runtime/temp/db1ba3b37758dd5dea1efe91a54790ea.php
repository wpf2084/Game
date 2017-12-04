<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\wamp64\www\game\thinkphp_5\public/../application/index\view\userall\set_user.html";i:1508925522;s:81:"D:\wamp64\www\game\thinkphp_5\public/../application/index\view\public\header.html";i:1508915152;s:81:"D:\wamp64\www\game\thinkphp_5\public/../application/index\view\public\footer.html";i:1508924980;}*/ ?>

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
<!--<script src="/Style/js/main.js"></script>-->
<script type="text/javascript" src="__BOOTSTRAP__/js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="__BOOTSTRAP__/js/bootstrap.min.js"></script>
<script src="__JS__/jquery.cityselect.js"></script>
</head>

<body>
<!-- 修改密码 -->
     <div id="xiugai" class="modal fade" tabindex="1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-title" id="zhaohui_title">
                    <h1 class="text-center">修改密码</h1>
                </div>
                <div class="modal-body">
                   
                            <div class="form-group">
                                <label for="">用户名</label>
                                <input class="form-control" type="text" name="xusername"  value="<?php echo $data['username']; ?>">
                                <span id="zuser"></span>
                            </div>
                                            
                         
                            <div class="form-group">
                                <label for="">新密码</label>
                                <input class="form-control" type="password" name="xepassword" placeholder="至少6位字母或数字">
                                <span id="checkpass"></span>
                            </div>
                            <div class="form-group">
                                <label for="">再次输入密码</label>
                                <input class="form-control" type="password" name="xerpassword" placeholder="至少6位字母或数字">
                                <span id="checkrepass"></span>
                            </div>     
                            <div class="text-right">
                        
                                <input class="btn btn-primary" id="doxiugai" type="button" value="提交">
                                <button class="btn btn-danger" data-dismiss="modal">取消</button>
                            </div>
                           
                </div>
            </div>
        </div>
    </div>   
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
        <div class="adminpic"></div>
        <div class="adminname fonttips"><?php echo $data['username']; ?></div>
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
      
      
    </ul>

</div>

<div class="rightmain fright">
			<div class="mainbox">

				<div class="maintitle"><h3>信息设置</h3></div>
				<div class="onebox">
					<div class="mintitle"><a class="active" href="/User/setting.html">基本信息</a>
					<div class="databox">
							<table cellspacing="0" cellpadding="0" class="formtable">
								<tbody>
									<tr>
										<th>用户名</th>
										<td> <?php echo $data['username']; ?>(<button type="button" class="" data-toggle="modal" data-target="#xiugai" >
             							<a href="javascript:">修改密码</a>) </td>
										
									</tr>
									<tr>
										<th>用户昵称</th>
										<td><input type="text" id="name" name="name" value="<?php echo $data['nickname']; ?>" class="t_input"></td>
									</tr>
									<tr>
										<th>性别</th>
										<td id="sex"><label for="sexm">
												<input id="sexm" type="radio" value="1" name="sex">
												男</label>
											<label for="sexw">
												<input id="sexw" type="radio" value="0" name="sex">
												女</label></td>									
									</tr>
									<tr>
										<th>婚恋状态</th>
										<td><select id="marry" name="marry">
												<option value="0"  selected>&nbsp;</option>
												<option value="1">单身</option>
												<option value="2">非单身</option>
											</select></td>
									</tr>
									<tr>
										<th>生日</th>
										<td><select id="birthyear" name="birthyear" >
												<option value="0">&nbsp;</option>
                                                												<option value="2016" >2016</option>
																								<option value="2015" >2015</option>
																								<option value="2014" >2014</option>
																								<option value="2013" >2013</option>
																								<option value="2012" >2012</option>
																								<option value="2011" >2011</option>
																								<option value="2010" >2010</option>
																								<option value="2009" >2009</option>
																								<option value="2008" >2008</option>
																								<option value="2007" >2007</option>
																								<option value="2006" >2006</option>
																								<option value="2005" >2005</option>
																								<option value="2004" >2004</option>
																								<option value="2003" >2003</option>
																								<option value="2002" >2002</option>
																								<option value="2001" >2001</option>
																								<option value="2000" >2000</option>
																								<option value="1999" >1999</option>
																								<option value="1998" >1998</option>
																								<option value="1997" >1997</option>
																								<option value="1996" >1996</option>
																								<option value="1995" >1995</option>
																								<option value="1994" >1994</option>
																								<option value="1993" >1993</option>
																								<option value="1992" >1992</option>
																								<option value="1991" >1991</option>
																								<option value="1990" >1990</option>
																								<option value="1989" >1989</option>
																								<option value="1988" >1988</option>
																								<option value="1987" >1987</option>
																								<option value="1986" >1986</option>
																								<option value="1985" >1985</option>
																								<option value="1984" >1984</option>
																								<option value="1983" >1983</option>
																								<option value="1982" >1982</option>
																								<option value="1981" >1981</option>
																								<option value="1980" >1980</option>
																								<option value="1979" >1979</option>
																								<option value="1978" >1978</option>
																								<option value="1977" >1977</option>
																								<option value="1976" >1976</option>
																								<option value="1975" >1975</option>
																								<option value="1974" >1974</option>
																								<option value="1973" >1973</option>
																								<option value="1972" >1972</option>
																								<option value="1971" >1971</option>
																								<option value="1970" >1970</option>
																								<option value="1969" >1969</option>
																								<option value="1968" >1968</option>
																								<option value="1967" >1967</option>
																								<option value="1966" >1966</option>
																								<option value="1965" >1965</option>
																								<option value="1964" >1964</option>
																								<option value="1963" >1963</option>
																								<option value="1962" >1962</option>
																								<option value="1961" >1961</option>
																								<option value="1960" >1960</option>
																								<option value="1959" >1959</option>
																								<option value="1958" >1958</option>
																								<option value="1957" >1957</option>
																								<option value="1956" >1956</option>
																								<option value="1955" >1955</option>
																								<option value="1954" >1954</option>
																								<option value="1953" >1953</option>
																								<option value="1952" >1952</option>
																								<option value="1951" >1951</option>
																								<option value="1950" >1950</option>
																								<option value="1949" >1949</option>
																								<option value="1948" >1948</option>
																								<option value="1947" >1947</option>
																								<option value="1946" >1946</option>
																								<option value="1945" >1945</option>
																								<option value="1944" >1944</option>
																								<option value="1943" >1943</option>
																								<option value="1942" >1942</option>
																								<option value="1941" >1941</option>
																								<option value="1940" >1940</option>
																								<option value="1939" >1939</option>
																								<option value="1938" >1938</option>
																								<option value="1937" >1937</option>
																								<option value="1936" >1936</option>
																								<option value="1935" >1935</option>
																								<option value="1934" >1934</option>
																								<option value="1933" >1933</option>
																								<option value="1932" >1932</option>
																								<option value="1931" >1931</option>
																								<option value="1930" >1930</option>
																								<option value="1929" >1929</option>
																								<option value="1928" >1928</option>
																								<option value="1927" >1927</option>
																								<option value="1926" >1926</option>
																								<option value="1925" >1925</option>
																								<option value="1924" >1924</option>
																								<option value="1923" >1923</option>
																								<option value="1922" >1922</option>
																								<option value="1921" >1921</option>
																								<option value="1920" >1920</option>
																								<option value="1919" >1919</option>
																								<option value="1918" >1918</option>
																								<option value="1917" >1917</option>
																								<option value="1916" >1916</option>
																							</select>
											年
											<select id="birthmonth" name="birthmonth">
												<option value="0">&nbsp;</option>
												<option value="1"  >1</option>
												<option value="2"  >2</option>
												<option value="3"  >3</option>
												<option value="4"  >4</option>
												<option value="5"  >5</option>
												<option value="6"  >6</option>
												<option value="7"  >7</option>
												<option value="8"  >8</option>
												<option value="9"  >9</option>
												<option value="10"  >10</option>
												<option value="11"  >11</option>
												<option value="12"  >12</option>
											</select>
											月
											<select id="birthday" name="birthday">
												<option value="0">&nbsp;</option>
												<option value="1" >1</option>
												<option value="2" >2</option>
												<option value="3" >3</option>
												<option value="4" >4</option>
												<option value="5" >5</option>
												<option value="6" >6</option>
												<option value="7" >7</option>
												<option value="8" >8</option>
												<option value="9" >9</option>
												<option value="10" >10</option>
												<option value="11" >11</option>
												<option value="12" >12</option>
												<option value="13" >13</option>
												<option value="14" >14</option>
												<option value="15" >15</option>
												<option value="16" >16</option>
												<option value="17" >17</option>
												<option value="18" >18</option>
												<option value="19" >19</option>
												<option value="20" >20</option>
												<option value="21" >21</option>
												<option value="22" >22</option>
												<option value="23" >23</option>
												<option value="24" >24</option>
												<option value="25" >25</option>
												<option value="26" >26</option>
												<option value="27" >27</option>
												<option value="28" >28</option>
												<option value="29" >29</option>
												<option value="30" >30</option>
												<option value="31" >31</option>
											</select>
											日 </td>
									</tr>
									<tr>
										<th>血型</th>
										<td><select id="blood" name="blood">
												<option value="">&nbsp;</option>
												<option value="A" >A</option>
												<option value="B" >B</option>
												<option value="O" >O</option>
												<option value="AB" >AB</option>
											</select></td>
									</tr>
									<tr>
										<th>家乡</th>
										<td id="birthcitybox">
                                            <div id="city">  
											    <select id="prov" class="prov"></select>   
											    <select class="city" disabled="disabled"></select>  
											    <select class="dist" disabled="disabled"></select>  
											</div>
											<script type="text/javascript">
											$("input[id=<?php echo isset($data["sex"])?$data["sex"]:1?'sexw':'sexm'; ?>]").attr('checked','checked');
											$("#marry").val("<?php echo isset($data["marry"])?$data["marry"]:'2'; ?>");
											$("#blood").val("<?php echo isset($data["blood"])?$data["blood"]:'A'; ?>");
											var arr = "<?php echo isset($data['birthday'])?$data['birthday']:'2016,1,1'; ?>";
											arr = arr.split(',');
											$("#birthyear").val(arr[0]);
											$("#birthmonth").val(arr[1]);
											$("#birthday").val(arr[2]);
											var brr = "<?php echo isset($data['place'])?$data['place']:'北京,海淀区'; ?>";
											brr = brr.split(',');
												$("#city").citySelect({
													url:"__JS__/city.min.js",   
												    prov:brr[0], //省份  
												    city:brr[1], //城市  
												    dist:brr[2], //区县  
												    nodata:"none" //当子集无数据时，隐藏select  
												});
											</script>    
                                        </td>
									</tr>
									<tr>
										<th>&nbsp;</th>
										<td><input type="submit" name="profilesubmit" value="保存" class="submit"></td>
										<td>&nbsp;</td>
									</tr>
								</tbody>
							</table>
						<input type="hidden" name="__hash__" value="68578a362643952212d23a1d3895af9b_7dd69c971d4987186861c94603ef8dce" />

					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="warpbott"></div>
</div>


<!--公用尾部开始-->             
<script type="text/javascript" src="__JS__/set_user.js"></script>
<script type="text/javascript" src="__JS__/loginout.js"></script>  
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

