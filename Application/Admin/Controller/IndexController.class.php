<?php
// 本类由系统自动生成，仅供测试用途
    namespace Admin\Controller;
    use Think\Controller;
    class IndexController extends Controller {
        public function _initialize(){
          if(!isset($_SESSION['username']) || $_SESSION['username'] == '' || $_SESSION['isTeacher'] == 0){
            $this -> redirect("__APP__/Home/Index/main");
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
        public function addAdmin(){
            $where = $_GET['id'];
            $n = M("User");
            $n -> isTeacher = 1;
            $result = $n -> where("id = $where") -> save();
            if($result){
                $this -> redirect("Index/admin_list");
            }
        }
        public function unaddAdmin(){
            $where = $_GET['id'];
            $n = M("User");
            $n -> isTeacher = 0;
            $result = $n -> where("id = $where") -> save();
            if($result){
                $this -> redirect("Index/admin_list");
            }
        }
        public function admin_list(){
            $n = M("User");
            $arr = $n -> where("isTeacher = 1") -> select();
            $arr2 = $n -> where("isTeacher = 0") -> select();
            $this -> assign("data1",$arr2);
            $this -> assign("data",$arr);
            $this -> display();
        }
        public function pass_update(){
            $this -> display();
        }
        public function dopass_update(){
            $where = $_POST['id'];//将其作为用户看不到的表单中的一项
            $pass = $_POST['password'];
            $repass = $_POST['repassword'];
            if($pass != $repass){
                $this -> error("两次输入的密码不一致！");
            }
            if($_SESSION["password"] == $pass){
                $this -> error("没有更改密码！");
            }else{
                $n = M("User");
                // $n -> password = $pass;
                $result = $n -> where("id = $where")-> data($_POST) -> save();
                if($result){
                    $this -> redirect("Index/admin_list");
                }else{
                    $this -> error("更改失败！");
                }
            }
        }

        /*方法功能：展示页面中的链接*/
        public function index_link(){
            $n = M("Link");
            $arr0 = $n->where("class = 0")->select();
            $arr1 = $n->where("class = 1")->select();
            $arr2 = $n->where("class = 2")->select();
            $arr3 = $n->where("class = 3")->select();
            $this -> assign("data0",$arr0);
            $this -> assign("data1",$arr1);
            $this -> assign("data2",$arr2);
            $this -> assign("data3",$arr3);

            $m = M("Maincontent");
            $arr = $m -> where("id = 1") -> getField("content");
            $this -> display();
        }
        /*方法功能：添加链接*/
        public function addlinks(){
            $n = M("Link");
            $data['class'] = $_POST['condition'];
            $data['name']= $_POST['name'];
            $data['address'] = $_POST['address'];
            if($data['name'] == "" || $data['address'] == ""){
                $this -> error("没有给出详细的信息！");
            }
            $result = $n->add($data);
            if($result){
                $this -> redirect("Index/index_link");
            }else{
                $this -> error("添加失败！");
            }
        }
        /*方法功能：删除链接*/
        public function delete_links(){
            $where = $_GET['id'];
            $n = M("Link");
            $result = $n -> where("id = $where")->delete();
            if($result){
                $this -> redirect("Index/index_link");
            }else{
                $this -> error("删除失败！");
            }
        }
        /*方法功能：显示主页面的信息*/
        public function index_admin(){
            $n = M("Maincontent");
            $m = $n->where("id = 1")->getField("content");
            $this -> assign("data",$m);
            $this -> display();
        }
        /*方法功能：更改主页面中的内容*/
        public function do_show(){
            $n = M('Maincontent');
            $n -> Create();  //创建数据对象
            if($_POST['content'] == ""){
                $id = 0;
            }else{
                $id = $n -> where("id = 1") -> data($_POST) -> save(); //写入数据库，并且返回result的值进行判断
            }
            if($id){
                $data = array(
                    'code'=>'0',
                    'id'=>$id
                );
                echo json_encode($data);
            }
        }
        
}