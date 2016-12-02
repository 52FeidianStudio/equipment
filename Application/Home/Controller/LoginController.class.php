<?php 
	namespace Home\Controller;
	use Think\Controller;
	class LoginController extends Controller{
		public function index(){
			$this -> display();
		}
		public function do_login(){
			$n = M("User");
			$username = $_POST['username'];
			$password = $_POST['password'];
		    if($username==""){
		        $text="你还没有输入帐号！";
		    }else if($password==""){
		        $text="你还没有输入密码！";
		    }else{
		        $count = $n -> where("username=$username") -> find();
		        if($count){
		        	$result1 = $n -> where("username = $username") -> getField('password');
		        	if($result1 == $password){
						$name = $n -> where("username = $username") -> getField('name');
		                $_SESSION['username'] = $name;
						$_SESSION['id'] = $n -> where("username = $username") -> getField('id');
						$_SESSION['isTeacher'] = 0;
						$_SESSION['say'] = $n -> where("username = $username") -> getField('say');
		                $text="pass";
		            }else{
		                $text="密码不正确！";
		            }
		        }else{
		        	$text = "用户不存在！";
		        };
		        $this->ajaxReturn($text);     
		    }	
		}
		public function login_out(){
			$_SESSION = array();
			if(isset($_COOKIE['session_name()'])){
				setcookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			$this -> redirect("Index/main");
		}
	}
 ?>