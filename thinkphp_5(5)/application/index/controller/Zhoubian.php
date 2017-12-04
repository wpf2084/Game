<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;
use yzm\Ucpaas;
use san\Curl;
class Zhoubian extends Controller
{

	public function sanfang()
	{
		return $this->fetch();
	}
	public function jiemeng()
	{
		
		//dump($meng);
		$curl= new Curl();
		$appkey = '7e519cdf00e14b97';//你的appkey
		$keyword =input('param.meng');;//utf8
		//dump($keyword);
		//die;
		$url = "http://api.jisuapi.com/dream/search?appkey=$appkey&keyword=$keyword";
		$result =$curl->curlOpen($url);
		 
		$jsonarr = json_decode($result, true);
		//exit(var_dump($jsonarr));
		 //dump($jsonarr);
		if($jsonarr['status'] != 0)
		{
		    echo $jsonarr['msg'];
		    exit();
		}
		 //dump($result);
		 return $result = $jsonarr['result'];
		 //dump($result);
		// foreach($result as $val)
		// {
		//     echo $val['name'].' '.$val['content'].'<br>';
		// }
	}

	
}