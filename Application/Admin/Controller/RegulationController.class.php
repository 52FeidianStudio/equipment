<?php 
	namespace Admin\Controller;
	use Think\Controller;
	class RegulationController extends Controller{
		public function _initialize(){
          if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
          	$this -> redirect("Login/index");
          }
      	}
		public function regulation(){
			$this -> display();
		}
	}
 ?>