<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\User;
use app\admin\model\Role;
use app\admin\model\Access;
use app\admin\model\Ping;
use app\admin\model\User_role;
use app\admin\model\Role_access;
use app\admin\model\Type;
use think\View;
use think\Session;
use think\Model;
use think\Db;
class Adminuser extends Controller
{
	//下面所有的方法
	//protected $is_check_login = ['*'];
	public function register()
	{
		
		return $this->fetch();
	}
	/*
	*
	*用户管理
	*
	*/
	//用户信息
	public function member_show()
	{
		//dump(input('get.'));
		$info=User::where('id',input('get.id'))->select();
		//$this->assign('userinfo',$info);
		$this->assign('userinfo',$info);
		return $this->fetch();
	}

	//获取用户信息或添加用户的id
	public function member_add()
	{
		
		session('uid',input('get.'));
		
		return $this->fetch();
	}
	//修改用户信息或添加用户
	public function xiugai()
	{
		
		// $file = request()->file('image');// 移动到框架应用根目录/public/uploads/ 目录下
		// $info = $file->rule('date')->move(ROOT_PATH . 'public' . DS . 'uploads'. DS . 'imgs');
		//var_dump($info);
		//$id = session('user.id');
		$uid=session('uid.id');
		//dump($uid);die;
		// if($info)
		// {
			// $result = User::where("id",$uid)->update(['img'=>str_replace("\\", "/", '/uploads/imgs/'.$info->getSaveName())]);
			
		
					
					
					$user=new User();
					
					$name=input('post.username');
					$email=input('post.email');
					$phone=input('post.phone');
					$qianming=input('post.qianming');
					$sex=input('post.sex');
					//$img=input('post.upload_head');
					//dump($img);die;
					$info=Db::name('user')->where('id',$uid)->update(['tel' => $phone,'nickname' => $name,'email' => $email,'qianming' => $qianming,'sex'=>$sex]);

					if($info)
					{
						
						$this->success('执行成功','admin/admin/member_list');

					}else{
						
						$this->error('执行失败');
					}


		// }
		
		
		
	}
	//修改密码
	public function xiugai_pwd()
	{
		$id=input('param.userid');
		//dump($id);
		$password=md5(input('param.new-password'));
		$info=Db::name('user')->where('id',$id)->update(['password'=>$password]);
		//dump($info);die;
		if($info)
		{
			return json(["info"=>"执行成功","status"=>"y"]);
			//$this->error('执行成功','admin/admin/member_list');//,'admin/admin/member_list'

		}else{
			
			return json(["info"=>"请输入新密码","status"=>"n"]);
		}
	}
	//添加用户
	public function tianjia()
	{
		//dump(input('post.'));
		$name=input('post.member-name');
		$email=input('post.email');
		$phone=input('post.member-tel');
		$sex=input('post.sex');
		$img=input('post.uploadfile-2');
		$qianming=input('post.demo1');
		$info=Db::name('user')->insert(['tel' => $phone,'username' => $name,'email' => $email,'qianming' => $qianming,'sex'=>$sex,'img'=>$img]);
		if($info)
		{
			
			$this->success('执行成功','admin/admin/member_list');//'admin/admin/member_list'
		}else{
			
			$this->error('执行失败');
		}
	}

	//把用户放入回收站
	public function huishouuser()
	{
		//dump(input('post.'));
		$uid=input('post.id');
		//dump($uid);
		$info=Db::name('user')->where('id',$uid)->update(['recovery' => 0]);
		if($info)
		{
			return json(['code'=>1 , 'msg' => '删除成功']);
		}else{
			return json(['code'=>0 , 'msg' => '删除失败']);
		}
	}

	/*
	*
	*会员回收站
	*
	*/

	//会员回收站-还原
	public function huishou_guanli()
	{
		$uid=input('post.id');
		//dump($uid);
		$info=Db::name('user')->where('id',$uid)->update(['recovery' => 1]);
		if($info)
		{
			return json(['code'=>1 , 'msg' => '恢复成功']);
		}else{
			return json(['code'=>0 , 'msg' => '恢复失败']);
		}
	}

	//会员回收站-删除
	public function huishou_del()
	{
		$uid=input('post.id');
		//dump($uid);
		$info=Db::name('user')->where('id',$uid)->delete();
		if($info)
		{
			return json(['code'=>1 , 'msg' => '彻底删除成功']);
		}else{
			return json(['code'=>0 , 'msg' => '彻底删除失败']);
		}
	}

	//会员批量删除
	public function huishou_pdel()
	{
		$uid=input('post.');
		//dump($uid);
		//dump($uid['id']);die;
		$info=Db::name('user')->delete($uid['id']);
		if($info)
		{
			return json(['code'=>1 , 'msg' => '彻底删除成功']);
		}else{
			return json(['code'=>0 , 'msg' => '彻底删除失败']);
		}
	}

	/*
	*
	*管理者管理
	*
	*/
	//传递管理员信息
	public function admin_xiugai()
	{
		$name=input('get.name');
		//dump($name);
		$this->assign('name',$name);
		return $this->fetch();
	}
	//对管理元的角色添加
	
	//设置用户与角色关系逻辑
	public function fuyu()
	{
		
		$data=input('post.');
		
		$uid=$data['usid'];

		
		if(array_key_exists("rid",$data)){
			
			//选中的值
			$rid=$data['rid'];

			if(array_key_exists("nrid",$data)){
				//未被选中的值
				$nrid=$data['nrid'];
				$user_role=new User_role();
					foreach ($nrid as $key => $value) {
						$date=['role_id'=>$value,'uid'=>$uid];
						//$info=$user_role->save(['role_id'=>$value,'uid'=>$uid]);
						 $info=Db::name('user_role')->where(['role_id'=>$value,'uid'=>$uid])->delete();
						// $info=$user_role->save($date);
					}
			}

			$user_role=new User_role();
					foreach ($rid as $key => $value) {
							$date=['role_id'=>$value,'uid'=>$uid];
							//$info=$user_role->isUpdate(false)->save($date);
							//dump($info);
							//查询已存在的
							$result=Db::name('user_role')->where(['role_id'=>$value,'uid'=>$uid])->select();
							//dump($result);die;
						if(!$result){
							$info=Db::name('user_role')->insertGetId($date);
						}
						
									
							 
							// $info=$user_role->save($date);
					}
					
					
			if($info)
			{
					$this->success('角色添加成功','admin/admin/admin_list');
				   // $this->error('角色添加成功');
			}else{
					$this->success('角色添加失败','admin/admin/admin_list');
			}


		}else{
			$nrid=$data['nrid'];
			$user_role=new User_role();
					
						
						 $info=Db::name('user_role')->where('uid',$uid)->delete();
										
					
			if($info)
			{
					$this->success('角色修改成功','admin/admin/admin_list');
					//$this->error('角色添加成功');
			}else{
					$this->success('角色修改失败','admin/admin/admin_list');
			}

		}


	}


	/*
	*
	*角色管理
	*/

	//传递角色与权限值
	public function admin_role_add()
	{
		
		//get获取角色id 与name
		$id=input('get.id');
		$name=input('get.name');
		$this->assign('id',$id);
		$this->assign('name',$name);
		
		//取出所有的权限
		$info=Access::select();
		$this->assign('info',$info);

		//取出所有已分配的权限
		$result=Role_access::where('role_id',$id)->select();
		$access_ids=array_column($result, "access_id");
		$this->assign('access_ids',$access_ids);
		//return $this->fetch();

		
		return $this->fetch();
	}

	//添加角色
	public function tianjia_role()
	{
		$role=new Role();
		$name=input('post.rolename');
		$miaoshu=input('post.rmiaoshu');
		//dump($name);die;
		if(!$name)
		{
			$this->success('请输入合法的名字','admin/admin/admin_role');
		}
		$data=[
			'name'=>$name,
			'miaoshu'=>$miaoshu
			
		];		
		//查询是否存在已有角色名称
		$info=Db::name('role')->where('name',$name)->select();

		if($info)
		{
			$this->success('角色已存在','admin/admin/admin_role');
		}


		$info=$role->save($data);
		//dump($info);die;
		if($info)
		{
			//return json(['code'=>1,'msg'=>'添加成功']);
			$this->success('执行成功','admin/admin/admin_role');
		}else
		{
			return json(['code'=>0,'msg'=>'添加失败']);
		}
	}
	//删除角色
	public function del_role()
	{
		$uid=input('post.id');
		//dump($uid);
		$role_info=Db::name('role')->where('id',$uid)->delete();
		//dump($role_info);
		$user_role_info=Db::name('user_role')->where('role_id',$uid)->delete();
		//dump($user_role_info);
		$role_access_info=Db::name('role_access')->where('role_id',$uid)->delete();
		//dump($role_access_info);
		if($role_info )			//&& $user_role_info && $role_access_info
		{
			return json(['code'=>1 , 'msg' => '彻底删除成功']);
		}else{
			return json(['code'=>0 , 'msg' => '彻底删除失败']);
		}
	}
	
	//角色管理--用户-删除
	public function yonghu_del()
	{
		//dump(input('post.'));die;
		$uid=input('post.id');
		$roleid=input('post.roleid');
		//dump($uid);
		$info=Db::name('user_role')->where(['uid'=>$uid,'role_id'=>$roleid])->delete();
		if($info)
		{
			return json(['code'=>1 , 'msg' => '彻底删除成功']);
		}else{
			return json(['code'=>0 , 'msg' => '彻底删除失败']);
		}
	}

	//设置角色与权限关系逻辑
	public function bianji_role()
	{
		$data=input('post.');
		//dump($data);
		$roleid=$data['roleid'];

		
		if(array_key_exists("rid",$data)){
			
			//选中的值
			$rid=$data['rid'];

			if(array_key_exists("arid",$data)){
				//未被选中的值
				$nrid=$data['arid'];
				
					foreach ($nrid as $key => $value) {
						$date=['access_id'=>$value,'role_id'=>$roleid];
						
						 $info=Db::name('role_access')->where(['access_id'=>$value,'role_id'=>$roleid])->delete();
						
					}
			}

			
					foreach ($rid as $key => $value) {
						$date=['access_id'=>$value,'role_id'=>$roleid];
						//$result=Db::name('user_role')->where(['role_id'=>$value,'uid'=>$uid])->select();
						//查询是否存在
						$result=Db::name('role_access')->where(['access_id'=>$value,'role_id'=>$roleid])->select();

						if(!$result){
						 	$info=Db::name('role_access')->insertGetId($date);
						}
						
					}
					
					
			if($info)
			{
					$this->success('权限添加成功','admin/admin/admin_role');
			}else{
					$this->success('权限添加失败','admin/admin/admin_role');
			}


		}else{
			$nrid=$data['arid'];
			
					
						
						 $info=Db::name('role_access')->where('role_id',$roleid)->delete();
										
					
			if($info)
			{
					$this->success('权限修改成功','admin/admin/admin_role');
			}else{
					$this->success('权限修改失败','admin/admin/admin_role');
			}

		}


	}


	/*
	*
	*
	*权限管理
	*
	*
	*/
	//权限传参
	public function admin_permission_add()
	{
		$accessid=input('get.acessid');
		$accesstitle=input('get.title');
		$accessurls=input('get.urls');
		$this->assign('accessid',$accessid);
		$this->assign('accesstitle',$accesstitle);
		$this->assign('accessurls',$accessurls);
		return $this->fetch();
	}
	//添加权限

	public function tianjia_access()
	{
		$access=new Access();
		$title=input('post.rolename');
		$urls=input('post.rurls');
		//dump($name);die;
		if(!$title)
		{
			$this->success('权限名不能为空','admin/admin/admin_permission');
		}
		if(!$urls)
		{
			$this->success('权限节点不能为空','admin/admin/admin_permission');
		}
		$data=[
			'title'=>$title,
			'urls'=>$urls//$urls json编码存入
			
		];		
		//查询是否存在已有权限名称
		$info=Db::name('access')->where('title',$title)->select();

		if($info)
		{	
			$this->success('权限名已存在','admin/admin/admin_permission');
			// return json(['code'=>1,'msg'=>'权限名已存在','url'=>'admin/adminuser/admin_permission_add']);
		}


		$info=$access->save($data);
		
		if($info)
		{
			// return json(['code'=>1,'msg'=>'权限执行成功','url'=>'admin/admin/admin_permission']);
			$this->success('权限执行成功','admin/admin/admin_permission');
		}else
		{
			// return json(['code'=>0,'msg'=>'权限添加失败','url'=>'admin/admin/admin_permission']);
			$this->success('权限添加失败','admin/admin/admin_permission');
			
		}
	}

	//修改权限


	public function xiugai_access()
	{
		$access=new Access();
		$raccessid=input('post.raccessid');
		$title=input('post.rolename');
		$urls=input('post.rurls');
		//dump($name);die;
		if(!$title)
		{
			$this->success('权限名不能为空','admin/admin/admin_permission');
		}
		if(!$urls)
		{
			$this->success('权限节点不能为空','admin/admin/admin_permission');
		}
		$data=[
			'title'=>$title,
			'urls'=>$urls,
			
		];		
		//根据id修改权限名称与节点
		$info=Db::name('access')->where('id',$raccessid)->update($data);		
		
		if($info)
		{
			// return json(['code'=>1,'msg'=>'权限执行成功','url'=>'admin/admin/admin_permission']);
			$this->success('权限执行成功','admin/admin/admin_permission');
		}else
		{
			// return json(['code'=>0,'msg'=>'权限添加失败','url'=>'admin/admin/admin_permission']);
			$this->success('权限添加失败','admin/admin/admin_permission');
			
		}
	}





	//****************无限级分类
	 /** 
	 * 从顶层逐级向下获取子类 
	 * @param number $pid 
	 * @param array $lists 
	 * @param number $deep 
	 * @return array 
	**/
	

	public function getlists($pid=0, $deep = 0,$html='--')
	{
		//定义一个数组
		$lists = array();
		$deep=$deep+1;
		$res=Db::name('type')->where('pid',$pid)->field('id,pid,name')->select();
		//dump($res);
		//循环读取
		foreach ($res as $key => $value) {
			//判断谁的父栏目等于0
			if($value['pid']==$pid)
			{
				
				//$value['name']=str_repeat($html, $deep).$value['name'];
				//$value['name']=str_repeat($html, $deep).$value['name'];

				//把整条数据放到数组
				$lists[]=$value;
				//dump($value['name']);
				
				$lists=array_merge($lists,$this->getlists($value['id'],$deep));
				//$this->getlist($value['id'],$lists,++$deep);
				//dump($lists);
			}
		}
		//die;
		//dump($lists);
		return $lists;//
		//return json_encode($lists);
	}


	 /** 
	 * 从子类开始逐级向上获取其父类 
	 * @param number $cid 
	 * @param array $category 
	 * @return array: 
	 */ 
	 public function getCategory($cid)
	 { 
	 	$category = array();
	    //$sql = 'SELECT * FROM category WHERE id='.$cid.' LIMIT 1'; 

	 	$res=Db::name('type')
	 			->where('id',$cid)
	 			->select();	 	
	 		foreach ($res as $key => $value) {
				if($value)
				{
					//dump($value);
					//$value['name']=str_repeat($html, $deep).$value['name'];
					$category[]=$value;
				
					//dump($category);
					$category=array_merge($this->getCategory($value['pid']),$category);//调用在前，数组在后是正序，否则是反序
					//$this->getCategory($value['pid']);
				}
			}		
	  	//dump($category);
	  return $category;
	} 

	//正序分类
	public function jsonlist()
	{
		$data=$this->getlists();
		//dump($data);
		return json(['status'=>1 , 'data' =>$data]);
		
	}

	//逆序分类
	public function njsonlist($cid)
	{
		$data=$this->getCategory($cid);

		return json(['status'=>1 , 'data' =>$data]);
	}


	//修改板块信息

	public function xiugai_type()
	{
		$treeid=input('post.tid');
		//dump(input('post.'));die;
		$treename=input('post.newname');
		$info=Db::name('type')->where('id',$treeid)->update(['name'=>$treename]);
		if($info)
		{
			return json(['status'=>1 , 'msg' =>'修改成功']);
		}else{
			return json(['status'=>0 , 'msg' =>'修改失败']);
		}
	}

	//删除板块

	public function del_type()
	{
		$treeid=input('post.tid');
		$info=Db::name('type')->where('id',$treeid)->delete();
		if($info)
		{
			return json(['status'=>1 , 'msg' =>'删除成功']);
		}else{
			return json(['status'=>0 , 'msg' =>'修改失败']);
		}
	}

	//添加子板块
	public function add_type()
	{
			$pid=input('post.parentId');
			$name=input('post.name');
			$data=[
				'pid'=>$pid,
				'name'=>$name
			];

			$info=Db::name('type')->insertGetId($data);

			if($info)
			{
				return $info;
			}else{
				return false;
			}
	}

	//添加根节点
	public function add_gen()
	{
			//$pid=input('post.parentId');
			$name=input('post.name');
			$data=[
				'pid'=>0,
				'name'=>$name
			];

			$info=Db::name('type')->insertGetId($data);

			if($info)
			{
				return $info;
			}else{
				return false;
			}
	}

	public function product_category_add()
	{
		return $this->fetch();
	}
	public function product_category_addd(){
		$tid=(input('param.tid'));
		
		$info=Db::name('video')->where('tid',$tid)->select();
		
		//session('info',$info);
		return json($info);
		
	}

	//视频管理
	public function videohuishou()
	{
		$uid=input('post.id');
		//dump($uid);
		$info=Db::name('video')->where('vid',$uid)->update(['recovery' => 0]);
		if($info)
		{
			return json(['code'=>1 , 'msg' => '删除成功']);
		}else{
			return json(['code'=>0 , 'msg' => '删除失败']);
		}
	}

	//视频还原
	public function video_guanli()
	{
		$uid=input('post.id');
		//dump($uid);
		$info=Db::name('video')->where('vid',$uid)->update(['recovery' => 1]);
		if($info)
		{
			return json(['code'=>1 , 'msg' => '恢复成功']);
		}else{
			return json(['code'=>0 , 'msg' => '恢复失败']);
		}
	}

	//彻底删除
	public function video_del()
	{
		$uid=input('post.id');
		//dump($uid);
		$info=Db::name('video')->where('vid',$uid)->delete();
		if($info)
		{
			return json(['code'=>1 , 'msg' => '彻底删除成功']);
		}else{
			return json(['code'=>0 , 'msg' => '彻底删除失败']);
		}
	}



	//评论管理

	//评论回收
	public function pinghui()
	{
		$uid=input('post.id');
		//dump($uid);
		$info=Db::name('ping')->where('id',$uid)->update(['recovery' => 0]);
		if($info)
		{
			return json(['code'=>1 , 'msg' => '删除成功']);
		}else{
			return json(['code'=>0 , 'msg' => '删除失败']);
		}
	}

	//评论回收还原
	public function ping_guanli()
	{
		$uid=input('post.id');
		//dump($uid);
		$info=Db::name('ping')->where('id',$uid)->update(['recovery' => 1]);
		if($info)
		{
			return json(['code'=>1 , 'msg' => '恢复成功']);
		}else{
			return json(['code'=>0 , 'msg' => '恢复失败']);
		}
	}

	//评论彻底删除
	public function ping_del()
	{
		$uid=input('post.id');
		//dump($uid);
		$info=Db::name('ping')->where('id',$uid)->delete();
		if($info)
		{
			return json(['code'=>1 , 'msg' => '彻底删除成功']);
		}else{
			return json(['code'=>0 , 'msg' => '彻底删除失败']);
		}
	}

	//评论批量删除
	public function ping_pdel()
	{
		$uid=input('post.');
		//dump($uid);
		//dump($uid['id']);die;
		$info=Db::name('ping')->delete($uid['id']);
		if($info)
		{
			return json(['code'=>1 , 'msg' => '彻底删除成功']);
		}else{
			return json(['code'=>0 , 'msg' => '彻底删除失败']);
		}
	}
}