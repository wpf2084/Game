<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Validate;
use app\index\model\User;
use qqlogin\qqconnect\QC;
use yzm\Ucpaas; 
class Login extends Controller
{

	public function index()
	{
		return $this->fetch();
	}

	//第三方
	public function oauth()
	{
		$qc = new QC();
        return redirect($qc->qq_login());
	}


	public function callback()
	{
		$qc = new QC();
        $access_token = $qc->qq_callback();    // access_token
        $openid =  $qc->get_openid();     // openidmd
        
        $qc = new QC($access_token,$openid);
        $re = $qc->get_user_info();
        $res = User::where('openid',$openid)->find();
       	if(!$res){
       		$data = ['username' => 'qq'.$openid,'password' => 'qq'.$openid,'openid'=>$openid,'nickname'=>$re['nickname'],'img'=>$re['figureurl_qq_1']];
       		$id = User::insertGetId($data);
       		session('user',$data);
       	}else
       	{
       		session('user' ,$res);
       	}
       	$data = session('user');
       	$value = serialize($data);            
		setcookie('login', $value,time()+60*60*24*30,'/');
		$this->redirect('http://cctv.toptoptt.top/');
	}
	//登录验证
	public function dologin()
	{
		//提交的信息
		//dump(input('post.zidong'));die;

		//自动登录
		// $zidong=0;
		// $zidong=input('post.zidong');
		// if()
		//验证码
		$verify=input('post.verify');
		//检测验证码
		 if(!captcha_check($verify)){
		 		return '失败';
				//return json(['status'=>0 , 'msg' => '验证失败']);
		 }
		 //验证用户
		  $info=User::where(['username'=>input('post.username'),'password'=>md5(input('post.password'))])->find();

		  if($info){
		  		//验证成功存入session
		  		$arr = $info->toArray();
		  		session('user' ,$arr);
		  		//echo '登录成功'
		  		if(input('post.zidonglogin') == 1){
		  			$value = serialize($info->toArray());            
			        setcookie('login', $value,time()+60*60*24*30,'/');
		  		}
		  		
		  		return json(['status'=>1 , 'msg' => $info->toArray() , 'redirect_url' => url('/')]);
		  		 
		  }else{

		  	return json(['status'=>0 , 'msg' => '登录失败' , 'redirect_url' => url('index/index/index')]);
		  		// $json=['status'=>1 , 'msg' => '登录成功' , 'redirect_url' => url('index/index/index')];
		  		//  echo json_encode($json);
		  }
	}

	//退出登录
	public function loginOut()
	{
		session('user',null);
		cookie('login', null);
	}




	//找回密码
	public function zhao()
	{
		//var_dump(input('post.'));die;
		$info=User::where(['username'=>input('post.username')])->find();
		//dump($info);die;
		if($info){
		  		
		  		return json(['status'=>1 , 'msg' => '存在' , 'redirect_url' => url('index/index/index')]);
		  		 
		  }else{

		  	return json(['status'=>0 , 'msg' => '不存在' , 'redirect_url' => url('index/index/index')]);
		  }
	}

	public function tel()
	{
		//var_dump(input('post.'));die;
		$info=User::where(['tel'=>input('post.tel')])->find();
		//dump($info);die;
		if($info){
		  		//验证成功存入session
		  		//session('user' ,$info->toArray());
		  		//var_dump($session('user'));die;
		  		//echo '登录成功';
				//dump(1);die;
		  		return json(['status'=>1 , 'msg' => '存在' , 'redirect_url' => url('index/index/index')]);
		  		 
		  }else{

		  	return json(['status'=>0 , 'msg' => '不存在' , 'redirect_url' => url('index/index/index')]);
		  }
	}

	//第三方手机验证
	public function docode()
	{
		$get = input('post.telnum');
		//dump($get);die;
		$options['accountsid']='78a7d4a4f321235d9050a06e6f8b82fe'; 
        $options['token']='f39050a03a25570cb7542ec462605212'; 
        //初始化 
        $ucpass = new Ucpaas($options);
                //随机生成4位验证码
		$authnum = '';
        srand((double)microtime()*1000000);
        for($i=0;$i<4;$i++){
        $randnum=rand(0,9); // 10+26;
        $authnum.=$randnum;
        }
        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "5996001b4d89485da54e1d093cad1e5e";  
        $to = $get;
        $templateId = "134239";
        $param=$authnum;
        $ucpass->templateSMS($appId,$to,$templateId,$param);
        setcookie('zyzm', $param, time()+6000);
        //dump($_COOKIE('zyzm'));
	}

	//找回密码修改
	public function doxiugai()
	{
		$user=new User();
		if(isset($_COOKIE["zyzm"]))
		{
			
			$yzm = $_COOKIE["zyzm"];
			
			if(input('post.yzm') != $yzm)
			{
				return json(['status'=>0 , 'msg' => '验证码错误']);
			}
		
		$data = [
			'username' => input('post.username'),
			'password' =>md5(input('post.password')),
			
		];
			$result = $user->where('username',input('post.username'))->update($data);
			
				if ($result) {
					return json(['status'=>1 , 'msg' => '修改成功' , 'redirect_url' => url('index/index/index')]);
				} else {
					return json(['status'=>0 , 'msg' => '修改失败']);
				}
		}else
		{
			return json(['status'=>0 , 'msg' => '验证码错误']);
		}
	}
	
}