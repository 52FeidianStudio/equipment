<?php
	namespace Home\Controller;
	use Think\Controller;
	class EquipmentController extends Controller{
		public function equipment(){
			$n = M('Equipment');
			$count = $n -> count();
			$Page = new\Think\Page($count,9);// 每页显示的记录数
        	$Page->setConfig('header','个仪器');
        	$Page->setConfig('next','下一页');
        	$Page->setConfig('prev','上一页');
      	  	$show = $Page -> show();//返回分页信息
      		$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> select();
        	$this -> assign("data",$arr);
        	$this -> assign("count",$count);
        	$this -> assign('show',$show);
        	$this -> display();
		}
		public function showclass(){
			$class = $_GET['id'];
			$m = M("class");
			$class1 = $m -> where("id=$class")->getField("name");
			$n = D('Equipment');
			$count = $n -> count();
			$Page = new\Think\Page($count,9);// 每页显示的记录数
        	$Page->setConfig('header','个仪器');
        	$Page->setConfig('next','下一个');
        	$Page->setConfig('prev','上一个');
      	  	$show = $Page -> show();//返回分页信息
      		$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> where("class = $class") -> select();
        	$this -> assign("data",$arr);
        	$this -> assign("class1",$class1);
        	$this -> assign('show',$show);
        	$this -> display();
		}
		public function showitems(){
			$where = $_GET['id'];
			$n = D('Equipment');
			$arr = $n -> where("id = $where") -> relation(true) -> find();
			$arr['management'][0]['content'] = htmlspecialchars_decode($arr['management'][0]['content']);
			$this -> assign("where",$where);
			$this -> assign("data",$arr);
			$this -> display();
		}

		// 展示：
		public function hahaha(){
			$n = D("Equipment");
			$arr = $n -> relation(true) -> select();
			var_dump($arr);
		}

		// 进行关键字的查询
		public function search(){
			$n = D("Equipment");
			$search = $_POST['search1'];
			$condition = $_POST['condition'];
			if($condition == '1'){
				// 进行模糊查询，可以包含所有的选项
				$data['ecname'] = array('like','%'.$search.'%');
				$data['eid'] = $search;
				$data['_logic'] = 'or';
			}else if($condition == '2'){
				$data['ecname'] = array('like','%'.$search.'%');
			}else{
				$data['eid'] = $search;
			}

			// $count = $n -> where($data) -> count();
			// $Page = new\Think\Page($count,9);// 每页显示的记录数
   //      	$Page->setConfig('header','个仪器');
   //      	$Page->setConfig('next','下一页');
   //      	$Page->setConfig('prev','上一页');
   //      	$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> where($data) -> select();
   //    	  	$show = $Page -> show();//返回分页信息\
			$count = $n -> where($data) -> count();
			$arr = $n -> where($data) -> select();

        	$this -> assign("data",$arr);
        	$this -> assign("count",$count);
        	// $this -> assign('show',$show);
        	$this -> display();
		}
	}
?>