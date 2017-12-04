<?php
namespace app\index\controller;
use think\Controller;
//use xun\lib\XS;
include '../vendor/hightman/xunsearch/lib/XS.php';
class Suns extends Controller
{
    public function index(){
        //$xs = new \XS('danmu_ping'); // 这里是关键, XS这个类不在Home\Controller空间中,是在公共空间,所以加反斜杠就不会提示class xxx not found 错误了

        $xs = new \XS('bb');   // 自动使用 $prefix/sdk/php/app/demo.ini 作项目配置文件
		//$xs = new XS('../vendor/hightman/xunsearch/demo.ini');
		// $index = $xs->index;
  //      $docs = $xs->search->search('1');

  //       dump($docs);
        $search = $xs->search;
		$search->setCharset('UTF-8');
		
		$query = '1';
		$search->setQuery($query);
		$docs = $search->search();
		dump($docs);
    }



    protected $auto = ['name', 'pid'];

    // 自动设置拼音全拼
    public function setPyWholeAttr()
    {
        // 获取title
        $title = $this->getAttr('title');
        if (empty($title)){
            return '';
        }
        // 先对title分词
        $xs = new \XS('bb');
        $keyword_list = $xs->getScws()->getTokens($title);

        // 再对title分的每一个词转换成拼音
        $pinyin = [];
        if (count($keyword_list)>0){
            foreach ($keyword_list as $keyword){
                $keyword_pinyin = gbk_to_pinyin($keyword);// 这里用PHPCMS里般过来的转拼音函数转换
                if (is_array($keyword_pinyin) && count($keyword_pinyin)>0){
                    $pinyin[] = implode ( '' ,  $keyword_pinyin );
                }
            }
        }
        if (count($pinyin)>0){
            return implode(' ', $pinyin);// 迅搜里的配置分割方式默认是空格，这里也就用空格了
        }else{
            return '';
        }
    }

    // 自动设置拼音首字母缩写
    protected function setPyAcronymAttr()
    {
        $title = $this->getAttr('title');
        if (empty($title)){
            return '';
        }
        // 先对title分词
        $xs = new XunSearch('recipe');
        $keyword_list = $xs->getScws()->getTokens($title);
        $pinyin = [];
        if (count($keyword_list)>0){
            foreach ($keyword_list as $keyword){
                $keyword_arr = mb_str_split($keyword);// 字符进行逐字分割，这是一个自定义函数，解决PHP自带函数不能分割中文问题
                // 提取拼音首字母缩写
                $keyword_initial = array_map(function( $word ){
                    $pinyin = gbk_to_pinyin($word);
                    return substr( $pinyin[0], 0, 1 );
                }, $keyword_arr);

                if (is_array($keyword_initial) && count($keyword_initial)>0){
                    $pinyin[] = implode ( '' ,  $keyword_initial );
                }
            }
        }

        if (count($pinyin)>0){
            return implode(' ', $pinyin);// 迅搜里的配置分割方式默认是空格，这里也就用空格了
        }else{
            return '';
        }
    }
}