<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Type;
use think\Db;
use app\index\model\Video;
use app\index\model\User;
use app\admin\model\Guan;
class Index extends Controller
{

    public function _initialize()
    {
        $info=Db::name('guan')->find();
        
        if($info['guan']==0)
        {
            $this->success('正在维护，请前往其它网站','http://www.baidu.com');
        }
        if (empty(session('user')))
        {
            if(isset($_COOKIE['login'])){
            $value=$_COOKIE['login'];
            $user = unserialize($value);
            session('user',$user);
            //User::where('id',$user['id'])->update(['lasttime'=>time()]);
            }
        }
    }
    
    public function index()
    {

       

        $num =  Video::count('vid');
        $pageAll = 6;
        $count = ceil($num/$pageAll);
        $data = Db::name('type')->select();
        $list = $this->getTree($data);
        $this->assign('data',$list);
        $this->assign('count',$count);

        return $this->fetch();
    }


    public function header()
    {
    	return $this->fetch();
    }


    public static function getTree($arr)
    {
        foreach ($arr as $k => $val) {
            if($val['pid'] == 0 )
            {
                $list[$k] = $arr[$k];
               foreach ($arr as $key => $value) {
                    if($value['pid'] == $val['id'])
                    {
                        $list[$k][] = $value;
                    }
                }
            }  
            }
            return $list;
    }

    function subtree($arr,$id){                                         
         $subs=array();                                                  
         foreach($arr as $v){                                           
          if($v['pid']==$id){                                      
           $subs[]=$v;                                             
           $subs=array_merge($subs,$this->subtree($arr,$v['id']));       
          }
         }
         return $subs;                                                   
        }


//     public function userinfo()
//     {
//          return $this->fetch();
// =======
    public function reveal()
    {
        
            $page = isset($_POST['page']) ? $_POST['page'] : 1;

            $num =  Video::where('tid',233)->count('vid');

            $pageAll = 6;
           
            $limit = $this->getLimit($page,$num,$pageAll);
           
            $data = Video::where('tid',233)->limit($limit,$pageAll)->select();
            $data = $this->getNickName($data);
            return json(["data"=>$data]);

    }

    public function getSon($id,$array){
        static $list;
        foreach ($array as $k => $v) {
            if($v['pid'] == $id){
                $list[] = $array[$k];
                self::getSon($v['id'],$array);
            }
        }

        return $list;
}  

    public function getAnimate()
    {
        $page = isset($_POST['page']) ? $_POST['page'] : 1;

        $num =  Video::where('tid',3)->whereor('tid',4)->count('vid');

        $pageAll = 8;
           
        $limit = $this->getLimit($page,$num,$pageAll);

        $data = Video::where('tid',3)->whereor('tid',4)->limit($limit,$pageAll)->select();

        $data = $this->getNickName($data);
        return json($data);
    }

    public function getMovie()
    {

        $page = isset($_POST['page']) ? $_POST['page'] : 1;

        $num =  Video::where('tid',5)->whereor('tid',6)->whereor('tid',7)->count('vid');

        $pageAll = 8;
           
        $limit = $this->getLimit($page,$num,$pageAll);
        
        $data = Video::where('tid',5)->whereor('tid',6)->whereor('tid',7)->limit($limit,$pageAll)->select();
        $data = $this->getNickName($data);
        return json($data);
    }


    public function getNickName($data)
    {
        foreach ($data as $key => $value) {
               $val = User::where('id',$value['authid'])->field('nickname')->find();
               $data[$key]['nickname'] = $val['nickname'];
        }
        return $data;
    }

    public function getTop()
    {
        $tid = input('post.tid');
        $video = Video::where('tid',$tid)->order('count desc')->limit(0,3)->select();
        return json($video);
    }


    public function getLimit($page,$num,$pageAll)
    {

            $count = ceil($num/$pageAll);

            if($page > $count)
            {
                $page = 1;
            }

            if($page <= 0)
            {
                $page = $count;
            }
            $limit = ($page - 1) *$pageAll;

            return $limit;
    }
}
