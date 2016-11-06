<?php
	namespace Home\Controller;
	use Think\Controller;
	class InformController extends Controller{
		public function news(){
			$n = M("Information");
			$arr = $n -> order("id desc") -> select();
			$this -> assign('data',$arr);
			$this -> display();
		}
		public function showitems(){
			$where = $_GET['id'];
			$n = M("Information");
			$arr = $n -> where("id = $where") -> order("id desc") -> find();
			$arr['content'] = htmlspecialchars_decode($arr['content']);
			$this -> assign("data",$arr);
			$this -> display();
		}
	}
?>