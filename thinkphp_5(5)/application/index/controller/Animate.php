<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\controller\Index;
use app\index\model\Video;
use app\index\model\Tag;

class Animate extends Controller
{
	public function index()
	{
		
		$data = Db::table('danmu_type')->select();
        $list = Index::getTree($data);
        $this->assign('data',$list);
		 return $this->fetch();
	}

	public function threed()
	{
		$data = Db::table('danmu_type')->select();
        $list = Index::getTree($data);
        $liso = Db::name('video')->where('tid',3)->paginate(4);
		// 把分页数据赋值给模板变量list
		$page = $liso->render();
		$this->assign('page', $page);
		$this->assign('list', $liso);
        $this->assign('data',$list);
		return $this->fetch();
	}

	public function twod()
	{
		$data = Db::table('danmu_type')->select();
        $list = Index::getTree($data);
        $this->assign('data',$list);
		return $this->fetch();
	}

	public function four()
	{
		//dump(input('post.'));die;
		$key=input('post.sou');
		//dump($key);die;
		//搜索用户信息

		// $res = Db::name('danmu_type')
		// 		->where('title','like',"%$key%")
		// 		->whereOr('mobile','like',"%$key%")
		// 		->whereOr('province','like',"%$key%")
		// 		->whereOr('email','like',"%$key%")
		// 		->whereOr('tu_id','like',"%$key%")
		// 		->select();
		
		$info=Db::name('video')->where('title','like',"%$key%")->paginate(5);
		$page = $info->render();
		//dump($info);
		$data = Db::name('type')->select();
        $list = Index::getTree($data);
        $this->assign('page', $page);
        $this->assign('data',$list);
        $this->assign('infolist',$info);
		return $this->fetch();
	}

	public function getTag()
	{
		$tid = input('post.tid');
		$tag = Video::alias('v')->where('tid',$tid)->join('danmu_tag t','t.vid=v.vid')->field('tagname')->select();
		// $tag = array_flip(array_flip($tag));
		$tag = array_unique($tag);
		$tag = array_values($tag);
		return json($tag);
	}

	public function getElemnt()
	{
		$tagname = input('post.tagname');
		if($tagname)
		{
			$video = Tag::alias('t')->where('tagname',$tagname)->join('danmu_video v','t.vid=v.vid')->select();
			$video = array_unique($video);
			$video = array_values($video);
		}else
		{
			$tid = input('post.tid');
			$video = Video::where('tid',$tid)->limit(0,4)->select();
		}
		return json(['video'=>$video]); 
	}

	public function getAll()
	{
		$tid = input('post.tid');
		$video = Video::where('tid',$tid)->limit(0,20)->select();
		return json($video);
	}


}