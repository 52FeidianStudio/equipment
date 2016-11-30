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
			$name = $_POST['name'];
			$code = $_POST['verify'];
			$data1['username'] = $username;
			$data1['isTeacher'] = 0;
			$text = 0;
			if($username == "" || $password == "" || $repassword == "" || $name == "" || $code == ""){
				$text = "账号用户名密码验证码不能为空";
				$this->ajaxReturn($text); 
			}
			if(!(self::check_verify($code))){
				$text = "验证码错误！";
				$this->ajaxReturn($text); 
			}else{
				if($repassword == $password){
					$result1 = $n -> where($data1) -> count();
					if(!$result1){
						$data['username'] = $username;
						$data['password'] = $password;
						$data['isTeacher'] = 0;
						$data['say'] = 0;
						$data['name'] = $name;
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
					$text = "两次输入的密码不一致！";
				}
			}
			$this->ajaxReturn($text); 
		}
			
		// 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    	function check_verify($code, $id = ''){
        	$verify = new \Think\Verify();
        	return $verify->check($code, $id);
    	}
    }
 ?>