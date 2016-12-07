<?php
// 本类由系统自动生成，仅供测试用途
    namespace Home\Controller;
    use Think\Controller;
    class AboutController extends Controller {
        public function _initialize(){
          if(!isset($_SESSION['username']) || $_SESSION['username'] == '' || $_SESSION['isTeacher'] == 0){
            $this -> redirect("__APP__/Home/Index/main");
          }
        }
        public function about(){
            $n = M("Person");
            $m = M("Others");
            $arr0 = $n -> select();
            $arr1 = $m -> select();
            $this -> assign("data0",$arr0);
            $this -> assign("data1",$arr1);
            var_dump($arr0);
            exit();
            $this -> display();
        }
}