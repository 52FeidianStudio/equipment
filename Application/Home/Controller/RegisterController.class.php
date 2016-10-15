<?php 
	namespace Home\Controller;
	use Think\Controller;
	class RegisterController extends Controller{
		public function index(){
			$this -> display();
		}
		public function do_register(){
			$n = D("User");
			$username = $_POST['username'];
			$password = $_POST['password'];
			$upassword = $_POST['upassword'];
			$data1['username'] = $username;
			$data1['isTeacher'] = $_POST['isTeacher'];
			if($password == $password){
				$result1 = $n -> where($data1) -> count();
				if(!$result1){
					$data['username'] = $username;
					$data['password'] = $password;
					$data['isTeacher'] = $_POST['isTeacher'];
					$result = $n -> add($data);
					if($result){
						$this -> redirect("Login/index","注册成功","3");
					}else{
						$this -> error("注册失败！");
					}
				}
				else{
					$this -> error("用户名已经存在");
				}
			}else{
				//$this -> error("两次输入的密码不一致，请重新输入！");
			}
		}
	}
 ?>