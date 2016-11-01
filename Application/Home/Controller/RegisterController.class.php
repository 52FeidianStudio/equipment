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
			$code = $_POST['verify'];
			$data1['username'] = $username;
			$data1['isTeacher'] = 0;
			$text = 0;
			if($_SESSION['verify'] != md5($code)){
				$text = "验证码错误！";
			}else{
				if($repassword == $password){
					$result1 = $n -> where($data1) -> count();
					if(!$result1){
						$data['username'] = $username;
						$data['password'] = $password;
						$data['isTeacher'] = 0;
						$data['say'] = 0;
						$data['time'] = date("Y-m-d H:i:s");
						$result = $n -> add($data);
						if($result){
							$text = "pass";
						}else{
							$text = "注册失败！";
						}
					}
					else{
						$text = "用户名已经存在！";
					}
				}else{
					$text = "两侧输入的密码不一致！";
				}
			}
			$this->ajaxReturn($text); 
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