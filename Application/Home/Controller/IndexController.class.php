<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function main(){
    	$m = M('User');
    	$arr = $m->select();
        /*方法功能：展示页面中的链接*/
        $n = M("Link");
        $arr0 = $n->where("class = 0")->select();
        $arr1 = $n->where("class = 1")->select();
        $arr2 = $n->where("class = 2")->select();
        $arr3 = $n->where("class = 3")->select();
        $this -> assign("data0",$arr0);
        $this -> assign("data1",$arr1);
        $this -> assign("data2",$arr2);
        $this -> assign("data3",$arr3);
    	$this -> assign('data',$arr);
		$this->display();
    }

    public function about_us(){
    	$this -> display();
    }
}