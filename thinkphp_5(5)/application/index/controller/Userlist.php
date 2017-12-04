<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;
use think\View;

class Userlist extends Controller
{
	public function member_list()
	{
		$view=new View();
		//$user=new User();
		$info=User::select();

		$this->assign('userlist',$info);
		return $view->fetch('member_list');
	}

}