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
						$this -> redirect("Index/admin");
					}else{
						$this -> error("密码不正确！");
					}
				}else{
					$this -> error("您不是管理员用户！");
				}
			}else{
				$this -> error("用户不存在");
			}
			
		}
	}
 ?>