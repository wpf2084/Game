<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Basecontroller;
use think\Request;
use think\Validate;
use yzm\Ucpaas;
use app\admin\model\User;
use think\Session;
use open\Open51094;
use think\Db;
class Adminlogin extends controller
{
	
	/*******************************************************************/

	//检测session（user）
	public function checkLogin()
	{
		return session('?user');
	}

	//登录验证
	public function dologin()
	{
		//dump(1)
		//dump(input('post.'));die;
		//验证码
		$verify=input('post.verify');
		//dump(input('post.'));
		//检测验证码
		 if(!captcha_check($verify)){
		 		return '失败';
				//return json(['status'=>0 , 'msg' => '验证失败']);
		 }

		 //验证用户
		  $info=User::where(['username'=>input('post.username'),'password'=>md5(input('post.password'))])->find();
		 
		  if($info){
		  		//验证成功存入session
		  		Session::set('user' ,$info->toArray());
		  		//dump(session('user'));
		  		
		  		return json(['status'=>1 , 'msg' => '登录成功' , 'redirect_url' => url('admin/admin/index')]);
		  		 
		  }else{

		  	return json(['status'=>0 , 'msg' => '登录失败' , 'redirect_url' => url('admin/admin/index')]);
		  		
		  }
	}

	//退出登录
	public function loginOut()
	{
		session(null);
		//echo '退出成功';
		$this->success('退出成功',url('index/index/index'));

	}
	
	
}