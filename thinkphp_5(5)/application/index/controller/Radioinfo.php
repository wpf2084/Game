<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\model\Danmu;
use app\index\model\Video;
use app\index\model\User;
use app\index\model\Type;

use app\index\model\Ping;
use app\index\controller\Index;
use app\index\controller\Base;
class Radioinfo extends Base
{

	public function show()
	{
		$vid = $_GET['id'];
		Video::where('vid', $vid)->setInc('count');
		$data = Video::alias('v')->where('vid', $vid)->join('danmu_user u','u.id=v.authid')->select();
		$count = Danmu::where('video_id',$vid)->count('id');
		$doto = Db::name('type')->select();
        $list = Index::getTree($doto);
        $this->assign('doto',$list);
		$info=Db::name('ping')->where('video_id',$vid)->select();
		$this->assign('pinglist',$info);
		$this->assign('count',$count);
		$this->assign('data',$data[0]);
		$this->assign('id',$vid);

		return $this->fetch();
	}

	public function ping()
	{
		
		//dump(input('param.'));
		$vid=input('param.vid');
		$img=input('param.img');
		$username=input('param.username');
		$contents=input('param.contents');
		//$time=input('param.time');
		$time=time();
		$data=['video_id'=>$vid,'contents'=>$contents,'p_username'=>$username,'img'=>$img,'create_time'=>$time];

		$info=Db::name('ping')->insertGetId($data);
		if($info)
		{
			return json(['status'=>1,'msg'=>'成功']);
		}else{
			return json(['status'=>0,'msg'=>'失败']);
		}
	}

	public function query()
	{
		$vid = $_GET['id'];
		$data = Danmu::where('video_id',$vid)->field('text,color,size,position,time')->select();
		$str = '[';	
		foreach ($data as $value) {
		$str .= "'".json_encode($value)."',";
			}
		$str = rtrim($str,',');
		$str .= ']';
		echo $str;
	}

	public function stone()
	{
		$danmu = input('post.danmu');
		$arr = json_decode($danmu,true);
		$arr['video_id'] = $_GET['id'];
		$result = Danmu::insert($arr);
		echo $result;
	}

	 public function fatherTree($arr,$id) {  
        static $Tree = array();  
        foreach($arr as $k=>$v) {   
            if($v['id'] == $id) {  
                $this->fatherTree($arr,$v['pid']);  
                $Tree[] = $v;             
            }  
        } 
        return $Tree;  
      }

      public function navidata()
      {
      	$vid = input('post.vid');
      	$data = Video::where('vid',$vid)->select();
      	$tid = $data[0]['tid'];
		$data = Type::select();
		$arr = $this->fatherTree($data,$tid);
		//array_flip($arr);
		$arr = array_reverse($arr);
		return json(['navidata'=>$arr]);
      }

}