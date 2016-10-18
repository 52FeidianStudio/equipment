<?php
// 本类由系统自动生成，仅供测试用途
    namespace Admin\Controller;
    use Think\Controller;
    class IndexController extends Controller {
        public function _initialize(){
          if(!isset($_SESSION['username']) || $_SESSION['username'] == '' || $_SESSION['isTeacher'] == 0){
            $this -> redirect("Login/index");
          }
        }
        public function index(){
        	$n = M('User');
        	$n -> add();
        	$arr = $n->select();
        	$this -> assign('data',$arr);
    		$this->display();
        }
        public function admin(){
        	$this->display();
        }
}