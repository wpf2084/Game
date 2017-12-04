<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Basecontroller;
use app\admin\controller\Adminuser;
use app\admin\model\User;
use app\admin\model\Role;
use app\admin\model\Access;
use app\admin\model\Ping;
use app\admin\model\Guan;
use app\admin\model\Video;
use app\admin\model\User_role;
use app\admin\model\Role_access;
use think\Model;
use think\Db;
class Admin extends Basecontroller
{
	//下面所有的方法
	//protected $is_check_login = ['*'];

	public function login()
	{
		return $this->fetch();
	}
	public function index()
	{
		return $this->fetch();
	}
	public function _blank()
	{
		return $this->fetch();
	}
	public function _footer()
	{
		return $this->fetch();
	}
	public function _header()
	{
		return $this->fetch();
	}
	public function admin_add()
	{
		//获取用户名
		$name=input('get.name');
		
		//获取用户id
		$id=input('get.id');
		
		//查询用户角色表
		$urid=Db::name('user_role')->where('uid',$id)->select();
		$urids=array_column($urid, "role_id");
		//查询角色表
		$info=Role::select();
		$this->assign('urids',$urids);
		$this->assign('name',$name);
		$this->assign('uid',$id);
		$this->assign('rolelist',$info);
		return $this->fetch();
	}
	public function admin_xiugai()
	{
		return $this->fetch();
	}

	//管理员列表
	public function admin_list()
	{
		$info=User::select();
		//$info=Db::name('user')->paginate(5);
		



		// 获取分页显示
		//$page = $info->render();
		// 模板变量赋值
		$this->assign('userlist',$info);
		//$this->assign('page', $page);
		// 渲染模板输出
		return $this->fetch();
	}
	public function admin_permission()
	{
		$info=Access::select();

		$this->assign('accesslist',$info);
		return $this->fetch();
	}
	public function admin_permission_add()
	{
		// $accessid=input('get.acessid');
		// $accesstitle=input('get.title');
		// $accessurls=input('get.urls');
		// $this->assign('accessid',$accessid);
		// $this->assign('accesstitle',$accesstitle);
		// $this->assign('accessurls',$accessurls);
		return $this->fetch();
	}
	

	//角色的方法
	public function admin_role_add()
	{
		return $this->fetch();
	}
	public function admin_role()
	{
			

			$info=Role::order('id', 'asc')->select();
			//dump($info);
			$this->assign('rolelist',$info);
			return $this->fetch();
	
	}

	public function admin_xiang()
	{
		//dump(input('param.'));die;
		$user=Role::get(input('param.uid'));
		$roleid=input('param.uid');
		$data=$user->user;	
		//dump($data);die;
		$this->assign('roleid',$roleid);
		$this->assign('data',$data);
		return $this->fetch();
	}
	public function article_add()
	{
		return $this->fetch();
	}
	public function article_list()
	{
		return $this->fetch();
	}
	public function change_password()
	{
		//dump(input('param.'));die;
		$id=input('param.uid');
		$name=input('param.name');
		$this->assign('uid',$id);
		$this->assign('name',$name);
		return $this->fetch();
	}
	public function charts_1()
	{
		return $this->fetch();
	}
	public function charts_2()
	{
		return $this->fetch();
	}
	public function charts_3()
	{
		return $this->fetch();
	}
	public function charts_4()
	{
		return $this->fetch();
	}
	public function charts_5()
	{
		return $this->fetch();
	}
	public function charts_6()
	{
		return $this->fetch();
	}
	public function charts_7()
	{
		return $this->fetch();
	}
	public function codeing()
	{
		return $this->fetch();
	}
	
	public function register()
	{
		return $this->fetch();
	}
	public function member_add()
	{
		return $this->fetch();
	}
	public function member_del()
	{
		$info=User::where('recovery',0)->select();
		
		$this->assign('userinfo',$info);
		return $this->fetch();
	}
	public function member_list()
	{
		$info=User::select();

		$this->assign('userlist',$info);
		return $this->fetch();
	}
	public function member_record_browse()
	{
		return $this->fetch();
	}
	public function member_record_download()
	{
		return $this->fetch();
	}
	public function member_record_share()
	{
		return $this->fetch();
	}
	public function member_show()
	{
		
		return $this->fetch();
	}
	public function picture_add()
	{

		return $this->fetch();
	}
	public function picture_list()
	{
		return $this->fetch();
	}
	public function picture_show()
	{
		return $this->fetch();
	}
	public function product_add()
	{
		return $this->fetch();
	}
	public function product_list()
	{
		return $this->fetch();
	}
	public function product_brand()
	{
		return $this->fetch();
	}
	public function product_category()
	{
		$info=Db::name('video')->where('recovery',0)->select();
		//dump($info);
		$this->assign('userinfo',$info);
		return $this->fetch();
	}
	public function product_category_add()
	{

		return $this->fetch();
		
	}

	
	public function system_base()
	{
		$result=Db::name('guan')->select();
		// $title=input('post.ming');
		// $miaoshu=input('post.miao');
		// $guan=input('post.zhan');
		// $data=['title'=>$title,'miaoshu'=>$miaoshu,'guan'=>$guan];
		// $info=Db::name('guan')->where('id',1)->update($data);

		

		$this->assign('result',$result);
		return $this->fetch();
	}

	public function system_add()
	{
		$title=input('post.ming');
		$miaoshu=input('post.miao');
		$guan=input('post.zhan');
		$data=['title'=>$title,'miaoshu'=>$miaoshu,'guan'=>$guan];
		$info=Db::name('guan')->where('id',1)->update($data);
		if($info)
		{
			$this->success('修改成功',url('admin/admin/system_base'));
		}else{
			//dump(1);die;
			$this->success('请不要无效修改',url('admin/admin/system_base'));
		}
	}



	public function system_category_add()
	{
		return $this->fetch();
	}
	public function system_category()
	{
		return $this->fetch();
	}
	public function system_data()
	{
		return $this->fetch();
	}
	public function system_log()
	{
		return $this->fetch();
	}
	public function system_shielding()
	{
		return $this->fetch();
	}
	public function welcome()
	{
		return $this->fetch();
	}
	public function feedback_list()
	{
		$info=Db::name('ping')->where('recovery',0)->paginate(5);
		$this->assign('pinglist',$info);
		return $this->fetch();
	}

	public function pinglun_list()
	{
		$info=Db::name('ping')->where('recovery',1)->paginate(5);
		 $page = $info->render();
	    // 模板变量赋值
	   
	    $this->assign('page', $page);
		$this->assign('pinglist',$info);
		return $this->fetch();
	}


	public function doupload()
	{
		$path = ROOT_PATH .  'public' ;

		if(session('file_path'))
		{
			$path = session('file_path');
		}else
		{
			$path = ROOT_PATH .  'public' .DS .'uploads'. DS . 'vodio'. DS .date('Ymd'). DS .uniqid();
			//$file_path =  DS .'uploads'. DS . 'vodio'. DS .date('Ymd'). DS .uniqid() . DS . $_FILES['file']['name'];
			session('file_path',$path);
		} 
		if(!file_exists($path))
		{
			mkdir($path,0777,true);
		}
		$real_path = $path . DS . uniqid() . $_FILES['file']['name'];
		$pos = strpos($real_path,'uploads');
		$file_path = DS .substr($real_path, $pos);
		$real_path = str_replace('\\', '/', $real_path);
		$file_path = str_replace('\\', '/', $file_path);
		echo $file_path;
		$type = ['video/mp4','video/mkv','video/avi'];

		$imgtype = ['image/jpeg','image/png','image/bmp'];
		if(in_array($_FILES['file']['type'], $type))
		{
			if(move_uploaded_file($_FILES["file"]["tmp_name"], $real_path)){
				
				session('vid_path',$file_path);
			}
		}else if(in_array($_FILES['file']['type'], $imgtype))
		{
			if(move_uploaded_file($_FILES["file"]["tmp_name"], $real_path)){
				
				session('img_path',$file_path);
			}
		}else
		{
			return json(['msg'=>0]);
		}

	}


	public function showtype()
	{
		$cid = input('post.pid');
		session('pid',$cid);
		$cate = Db::table('danmu_type')->select();
		//dump($cate);
		$arr = self::forparent($cate,$cid);
		arsort($arr);
		return json(['data'=>join('-->',$arr)]);
	}

	public  function forparent($cate,$cid){
			$arr = array();
			foreach ($cate as $k => $v) {
				if($v['id'] == $cid)
				{
					$arr[] = $v['name'];
					$arr = array_merge($arr,self::forparent($cate,$v['pid']));
				}
			}
			return $arr;
	}
	public function uploaddb()
	{
		$src = session('vid_path');
		$data = ['src'=>$src,'title'=>input('post.title'),'authid'=>session('user.id'),'tid'=>session('pid'),'img_src'=>session('img_path')];
		$result = Video::insert($data);
		if($result)
		{
			session('file_path',null);
			session('file_path',null);
			return json(['status'=>1]);
		}else
		{
			return json(['status'=>0]);
		}
	}
}