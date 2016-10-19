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
			$count = $n -> where("username = $username") -> find();
			if($count){
				//$result = $n -> where("username = $username") -> getField("isTeacher");
				//if(!$result){
					$result1 = $n -> where("username = $username") -> getField('password');
					if($result1 == $password){
						$name = $n -> where("username = $username") -> getField('name');
						$_SESSION['username'] = $name;
						$_SESSION['id'] = $n -> where("username = $username") -> getField('id');
						$_SESSION['isTeacher'] = 0;
						$_SESSION['say'] = $n -> where("username = $username") -> getField('say');
						$this -> redirect("Message/conmunication");
					}else{
						$this -> error("密码不正确！");
					}
				//}else{
					//$this -> error("您不是普通用户！");
				//}
			}else{
				$this -> error("用户不存在");
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