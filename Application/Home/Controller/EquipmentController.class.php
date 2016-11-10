<?php
	namespace Home\Controller;
	use Think\Controller;
	class EquipmentController extends Controller{
		public function equipment(){
			$n = M('Equipment');
			$arr = $n -> select();
			$this -> assign('data',$arr);
			$this -> display();
		}
		public function showclass(){
			$class = $_GET['id'];
			$n = D('Equipment');
			$count = $n -> count();
			$Page = new\Think\Page($count,10);// 每页显示的记录数
        	$Page->setConfig('header','个仪器');
        	$Page->setConfig('next','下一个');
        	$Page->setConfig('prev','上一个');
      	  	$show = $Page -> show();//返回分页信息
      		$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> where("class = $class") -> select();
        	$this -> assign("data",$arr);
        	$this -> assign('show',$show);
        	$this -> display();
		}
		public function showitems(){
			$where = $_GET['id'];
			$n = D('Equipment');
			$arr = $n -> where("id = $where") -> relation(true) -> find();
			$this -> assign("data",$arr);
			$this -> display();
		}

		// 展示：
		public function hahaha(){
			$n = D("Equipment");
			$arr = $n -> relation(true) -> select();
			var_dump($arr);
		}
	}
?>