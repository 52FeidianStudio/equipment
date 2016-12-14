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
            $arr0 = $n -> order("id asc") -> select();
            $arr1 = $m -> order("id asc") -> select();
            $max = $n -> max("id");
            $min = $n -> min("id");
            $this -> assign("data0",$arr0);
            $this -> assign("data1",$arr1);
            $this -> assign("max",$max);
            $this -> assign("min",$min);
            $this -> display();
        }
        public function delete1(){
            $id = $_GET['id'];
            $n = M("Person");
            $result = $n -> where("id = $id") -> delete();
            if($result){
                $this -> redirect("About/about");
            }else{
                $this -> error("删除失败！");
            }
        }
        public function add1(){
            $n = M("Person");
            $n -> create();
            $result = $n -> add();
            if($result){
                $this -> redirect("About/about");
            }else{
                $this -> error("添加失败！");
            }
        }
        public function update3(){
            $id = $_GET['id'];
            $n = M("Person");
            $arr = $n -> where("id = $id") ->find();
            $this -> assign("data",$arr);
            $this -> assign("id",$id);
            $this -> display();
        }
        public function update1(){
            $id = $_GET['id'];
            $n = M("Person");
            $data = $_POST;
            $result = $n -> where("id = $id") -> data($data) -> save();
            if($result){
                $this -> redirect("About/about","修改成功！");
            }else{
                $this -> error("修改失败！");
            }
        }
        public function update2(){
            $n = M("Others");
            $data = $_POST;
            $result = $n -> where("id = 1") -> data($data) -> save();
            if($result){
                $this -> redirect("About/about","修改成功！");
            }else{
                $this -> error("修改失败！");
            }
        }
        public function lower(){
           /*方法的功能：将顺序进行调整*/
           $id = $_GET['id'];
           $idi = $id + 1;
           $n = M("Person");
           $arr0 = $n -> where("id = $id") -> find();
           $arr1 = $n -> where("id = $idi") ->find();
           $arr0['id'] = $idi;
           $arr1['id'] = $id;
           $n -> where("id = $id") ->delete();
           $n -> where("id = $idi") ->delete();
           $result = $n->add($arr0); // 根据条件更新记录
           $result1 = $n->add($arr1); // 根据条件更新记录
            if(result && result1){
                $this -> redirect("About/about","修改成功！");
            }
        }
        public function higher(){
           /*方法的功能：将顺序进行调整*/
           $id = $_GET['id'];
           $idi = $id - 1;
           $n = M("Person");
           $arr0 = $n -> where("id = $id") -> find();
           $arr1 = $n -> where("id = $idi") ->find();
           $arr0['id'] = $idi;
           $arr1['id'] = $id;
           $n -> where("id = $id") ->delete();
           $n -> where("id = $idi") ->delete();
           $result = $n->add($arr0); // 根据条件更新记录
           $result1 = $n->add($arr1); // 根据条件更新记录
            if(result && result1){
                $this -> redirect("About/about","修改成功！");
            }
        }
}