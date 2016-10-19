<?php
	namespace Admin\Controller;
	use Think\Controller;
	class InformController extends Controller{
		public function _initialize(){
          if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
          	$this -> redirect("Login/index");
          }
      	}
      	//由原来的index改成news
		public function news(){
			$n = M("Information");
			$arr = $n -> select();
			$this -> assign('data',$arr);
			$this -> display();
		}
		public function do_show(){
			$n = M('Information');
			$n -> Create();  //创建数据对象
			$n -> date = date("Y-m-d");
			$n -> userid = $_SESSION['id'];
			$result  = $n -> add(); //写入数据库，并且返回result的值进行判断
			$this -> redirect('Inform/news','','0','页面跳转中'); // 进行重定向操作，返回到主页
		}
		public function showitems(){
			$n = M('Information');
			$where = $_GET['id'];
			$arr = $n -> where("id = $where") -> find();
			$this -> assign("data",$arr);
			$this -> display();
		}
		public function do_delete(){
			$where = $_GET['id'];
			$n = M("Information");
			$result = $n -> where("id = $where") -> delete();
			if($result){
				$this -> redirect('Inform/news','','0','页面跳转中');
			}else{
				$this -> error("删除失败");
			}
		}
	}
?>