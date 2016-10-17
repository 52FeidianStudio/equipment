<?php
	namespace Admin\Controller;
	use Think\Controller;
	class InformController extends Controller{
		public function index(){
			$n = M("Information");
			$arr = $n -> select();
			$this -> assign('data',$arr);
			$this -> display();
		}
		public function do_show(){
			//首先判断用户是否登陆或者用户是否是学生
			//如果用户是教师
			$n = M('Information');
			$n -> Create();  //创建数据对象
			$n -> date = date("Y-m-d");
			$n -> userid = 1;
			$result  = $n -> add(); //写入数据库，并且返回result的值进行判断
			$this -> redirect('Inform/index','','0','页面跳转中'); // 进行重定向操作，返回到主页
			//$this -> success('新增成功',Inform/index);
		}
		public function showitems(){
			$n = M('Information');
			$where = $_GET['id'];
			$arr = $n -> where("id = $where") -> find();
			$this -> assign("data",$arr);
		}
	}
?>