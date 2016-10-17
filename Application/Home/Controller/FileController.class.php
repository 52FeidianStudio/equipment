<?php
	namespace Home\Controller;
	use Think\Controller;
	class FileController extends Controller{
		public function document(){
			$n = M('File');
			$count = $n -> count();
			$Page = new\Think\Page($count,10);// 每页显示的记录数
        	$Page->setConfig('header','个文件');
        	$Page->setConfig('next','下一页');
        	$Page->setConfig('prev','上一页');
      	  	$show = $Page -> show();//返回分页信息
      		$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> select();
        	$this -> assign("data",$arr);
        	$this -> assign('show',$show);
        	$this -> display();
		}
	}
?>