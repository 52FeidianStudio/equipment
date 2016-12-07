<?php
// 本类由系统自动生成，仅供测试用途
    namespace Admin\Controller;
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
            $this -> display();
        }
        public function update(){
            $n = M("Person");
            $m = M("Others");
            $arr0 = $n -> select();
            $arr1 = $m -> select();
            $this -> assign("data0",$arr0);
            $this -> assign("data1",$arr1);
            $this -> display();
        }
        public function do_update(){
            $n = M("Person");
            $position = $_POST['position'];
            $name = $_POST['name'];
            $responsibility = $_POST['responsibility'];
            $responsible = $_POST['responsible'];
            if($username=="" || $responsibility == ""){
                $text="您没有输入有效信息！";
            }else{
                $n -> position = $position;
                $n -> name = $name;
                $n -> responsibility = $responsibility;
                $n -> responsible = $responsible;
                $result = $n->add();
                if($result){
                    $text = "pass";
                }else{
                    $text = "添加失败！";
                }
                $this->ajaxReturn($text);     
            }   
        }
        public function do_update1(){
            $n = M("Others");
            $adress = $_POST['adress'];
            $addressname = $_POST['addressname'];
            $people = $_POST['people'];
            $peoplename= $_POST['peoplename'];
            $post = $_POST['post'];
            $postid = $_POST['postid'];
            if($username=="" || $responsibility == ""){
                $text="您没有输入有效信息！";
            }else{
                $n -> adress = $adress;
                $n -> addressname = $addressname;
                $n -> people = $people;
                $n -> peoplename = $peoplename;
                $n -> post = $post;
                $n -> postid = $postid;
                $result = $n->add();
                if($result){
                    $text = "pass";
                }else{
                    $text = "添加失败！";
                }
                $this->ajaxReturn($text);     
            }   
        }
}