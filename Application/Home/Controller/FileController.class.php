<?php
	namespace Home\Controller;
	use Think\Controller;
	class FileController extends Controller{
		public function index(){
			$n = M('File');
			$arr = $n -> select();
			$this -> assign('data',$arr);
			$this -> display();
		}
	}
?>