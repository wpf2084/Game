<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use think\Request;
use think\Validate;
use yzm\Ucpaas;
use app\admin\model\User;
use app\admin\model\User_role;
use open\Open51094;
use think\Db;
class Basecontroller extends Controller
{

	//不需要判断的其他的方法节点
		public $ig_url=[
			'admin/Admin/index',
			'admin/Admin/welcome',
		];


	//后台基础类登录验证
	public function _initialize()
	{
		$id = session('user.id');
		 $result = User_role::where('uid',$id)->find();
	
		if(empty(session('user.username')) || session('user.username')=='' || !$result) 
		{
			//echo '没有登录 请登录在操作';
			$this->error('你没有登录请重新登录',url('admin/adminuser/register'));
		}
		//获得用户所拥有的权限
		 $privarr_urls=$this->getRole();

		 //取得当前节点名进行拼接	 
		 $request=Request::instance();
		 $model=$request->module();
		 $controller= $request->controller();
		 $action=$request->action();			
		 $jiedian=$model.'/'.$controller.'/'.$action;
		 //echo '当前操作'.$jiedian;

		 
		
		// 	一些页面不需要判断
	 	if(in_array($jiedian, $this->ig_url))
	 	{
	 		
	 		return true;//返回的 是超管返回
	 	}
	 	//如果是超级管理员已不需要判断
		if(!empty(session('user.is_admin')))
		{
					
			return true;//返回的，是超管返回
		}


	 	//判断当前访问页面权限的链接是否在用户所有链接中
		if(!in_array($jiedian, $privarr_urls)){
			
			$this->error('你没有权限操作，请联系管理员',url('admin/admin/welcome'));
			//echo "你没有权限操作，请联系管理员";
		}
	}

	// //在框架里加入统一验证方法	
	/*
	*获取用户所有的权限
	*取出指定用户所有角色
	*在通过角色 取出 所属 权限关系
	*在权限表中取出所有权限
	*/

	//取出用户的所有权限
	public function getRole($uid=0)	//$uid=0默认
	{
		// if(!$uid &&session('user.id'))		//$uid &&
		// {
			$uid=session('user.id');
		// }
			
		$privarr_urls=[];
		//取出用户所述的角色 是一个数组
		$role_idss=Db::name('user_role')->where('uid',$uid)->select();
		//dump($role_idss);die;
		if($role_idss){
				//$role_ids=[];
				foreach ($role_idss as $keys => $values) {
					$role_ids[]=$values['role_id'];
					
				}
				//dump($role_ids);
				//$role_ids = $role_idss['role_id'];
				//dump($role_ids);die;

				if($role_ids)
				{

					//$access_ids=[];
					//$access_idss=[];
					//在通过角色取出所述的权限id,是一个数组					
					foreach($role_ids as $v)
					{
						
						$access_idss[]=Db::name('role_access')->distinct(true)->where('role_id',$v)->field('role_id,access_id')->select();
					
					}
					
						foreach ($access_idss as $ke => $value) {
							foreach ($value as  $val) {
								$access_ids[]=$val['access_id'];
							
							}
							
						}
					
						
					
					//在全县表中所有的权限urls 是个数组
					foreach($access_ids as $key=>$value)
					{
						
						$urllist[]=Db::name('access')->where('id',$value)->select();
					}
									
					if($urllist)
					{
							foreach ($urllist as $key => $value) {
								foreach($value as $val){

								$tmp_urls = $val['urls'];
								
								$privarr_urls[]=$tmp_urls;
								}
								

							}
							
					}
				}

		}
		
		return $privarr_urls; 
	}
	
}