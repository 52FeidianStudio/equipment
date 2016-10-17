<?php
	namespace Home\Controller;
	use Think\Controller;
	class InformController extends Controller{
		public function news(){
			$n = M("Information");
			$arr = $n -> select();
			$this -> assign('data',$arr);
			$this -> display();
		}
		public function showitems(){
			$where = $_GET['id'];
			$n = M("Information");
			$arr = $n -> where("id = $where") -> find();
			$this -> assign("data",$arr);
			$this -> display();
		}
	}
?>