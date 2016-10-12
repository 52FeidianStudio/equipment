<?php
	namespace Home\Controller;
	use Think\Controller;
	class EquipmentController extends Controller{
		public function index(){
			$n = M('Equipment');
			$arr = $n -> select();
			$this -> assign('data',$arr);
			$this -> display();
		}
	}
?>