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
        public function admin_list(){
            $n = M("User");
            $arr = $n -> where("isTeacher = 1") -> select();
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
                $abc = "两次输入的密码不一致";
                return $abc;
            }
            if($_SESSION["password"] == $pass){
                $abc = "您没有更改密码";
                return $abc;
            }else{
                $n = M("User");
                $n -> password = $pass;
                $result = $n -> where($where)-> save();
                if($result){
                    $abc = "更改成功！";
                    return $abc;
                }else{
                    $abc = "更改失败！";
                    return $abc;
                }
            }
        }
}