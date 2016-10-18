<?php 
	namespace Admin\Model;
	use Think\Model;
	class UserModel extends Model{
		//进行自动验证的功能
		protected $_validate = array(
			array('username','','该用户名已经注册','0','unique',1),
			array('repassword','password','两次输入密码不一致',0,'confirm'),
			array('code','require','验证码必须填写！'),
			array('code','checkCode','验证码错误！',0,'callback'),
			//array('isTeacher','require','请选择注册的账户类型')，
			);
		protected function checkCode($code){
			if(md5($code) != $_SESSION['code']){
				return false;
			}else{
				return true;
			}
		}
	}
 ?>