<?php 
	namespace Admin\Controller;
	use Think\Controller;
	class LoginController extends Controller{
		public function index(){
			$this -> display();
		}
		public function do_login(){
			$n = M("User");
			$username = $_POST['username'];
			$password = $_POST['password'];
			$count = $n -> where("username = $username") -> count();
			if($count){
				$result = $n -> where("username = $username") -> getField("isTeacher");
				if($result){
					$result1 = $n -> where("username = $username") -> getField('password');
					if($result1 == $password){
						$name = $n -> where("username = $username") -> getField('name');
						$_SESSION['username'] = $name;
						$_SESSION['id'] = $n -> where("username = $username") -> getField('id');
						$_SESSION['name'] = $n -> where("username = $username") -> getField('username');
						$_SESSION['isTeacher'] = 1;
						$_SESSION['password'] = $password;
						$text = "pass";
					}else{
						$text = "密码错误！";
					}
				}else{
					$text = "您不是管理员用户！";
				}
			}else{
				$text = "用户不存在！";
			}
			$this -> ajaxReturn($text);
		}
		public function login_out(){
			$_SESSION = array();
			if(isset($_COOKIE['session_name()'])){
				setcookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			$this -> redirect("__APP__/Home/Index/main");
		}
	}
 ?>