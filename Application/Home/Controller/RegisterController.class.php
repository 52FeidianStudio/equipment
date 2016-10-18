<?php 
	namespace Home\Controller;
	use Think\Controller;
	class RegisterController extends Controller{
		public function register(){
			$this -> display();
		}
		public function do_register(){
			$n = D("User");
			$username = $_POST['username'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];
			var_dump($_POST);
			exit;
			$data1['username'] = $username;
			$data1['isTeacher'] = 0;
			if($repassword == $password){
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
		public function checkName(){
			$username = $_GET['username'];
			$n = M('User');
			$where['username'] = $username;
			$count = $n -> where($where) -> count();
			if($count){
				echo '可以注册';
			}else{
				echo '用户名已经存在';
			}
		}
	}
 ?>