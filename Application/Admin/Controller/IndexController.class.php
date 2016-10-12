<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$n = M('User');
    	$n -> add();
    	$arr = $n->select();
    	$this -> assign('data',$arr);
		$this->display();
    }
}