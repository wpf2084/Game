<?php
namespace app\index\controller;


use think\Controller;
use app\admin\model\Guan;
class Base extends Controller
{
	public function _initialize()
	{

		if(empty(session('user')) || session('user')=='') 
		{
			$this->redirect('/index/login');
		}
	}
}