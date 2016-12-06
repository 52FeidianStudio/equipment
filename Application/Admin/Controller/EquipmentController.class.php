<?php
	namespace Admin\Controller;
	use Think\Controller;
	class EquipmentController extends Controller{
		public function _initialize(){
          if(!isset($_SESSION['username']) || $_SESSION['username'] == '' || $_SESSION['isTeacher'] == 0){
            $this -> redirect("__APP__/Home/Index/main");
          }
        }
		public function equipment(){
			$n = D('Equipment');
			$count = $n -> count();
			$Page = new\Think\Page($count,1);// 每页显示的记录数
        	$Page->setConfig('header','个文件');
        	$Page->setConfig('next','下一页');
        	$Page->setConfig('prev','上一页');
      	  	$show = $Page -> show();
      		$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> order("id") -> relation(true) -> where($data) -> select();
        	$this -> assign("data",$arr);
        	$this -> assign('show',$show);
        	$this -> display();
		}
		public function do_add(){
			$n = M('Equipment');
			$n -> create();
			//上传文件操作
			$upload = new\Think\Upload();//实例化上传类
			$upload -> maxSize = 3145728;//设置附件的大小
			$upload-> exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload -> rootPath = './uploads/';//设置上传根目录
			$upload -> savePath = './Equipment/'; //设置文件上传子目录
			$upload->saveName = 'time';
			$info = $upload -> upload();
			if(!$info){
				//上传错误提示信息
				$this -> error($upload->getError());
			}
			$n -> imagicname = $info['file']['savename'];//记录文件的上传路径
			$n -> imagicaddress =$info['file']['savepath'].$info['file']['savename'];
			$n -> eblong = date("Y-m-d H:i:s");
			$last = $n -> add();
			if($last){
				$this -> redirect('Equipment/equipment','','0','上传成功'); // 进行重定向操作，返回到主页
			}
		}
		public function delete(){
			$n = M('Equipment');
			$m = M('Equipmentmanage');
			$do = $_GET['id'];
			$result = $n -> where("id = $do") -> delete();
			if($result){
				$resultq1 = $m -> where("equipmentid = $do") -> delete();
				if($resultq1){
					$this -> success("删除成功");
				}else{
					$this -> error("删除失败");
				}
			}else{
				$this -> error("删除失败");
			}
		}
		public function update(){
			$do = $_GET['id'];
			$n = M('Equipment');
			$result = $n -> where("id = $do") -> find();
			$this -> assign("vo",$result);
			$this -> display();
		}
		public function do_update(){
			$n = M('Equipment');
			$do = $_POST['id'];
			$result = $n -> where("id = $do") -> data($_POST) -> save();
			if($result){
				$this -> redirect("Equipment/equipment");
			}else{
				$this -> error("修改失败");
			}
		}
		public function add_management(){
			$this -> assign("data",$_GET['id']);
			$this -> display();
		}
		public function do_addmanagement(){
			$m = M("Equipment");
			$n = M("Equipmentmanage");
			$where = $_GET['id'];
			if($_POST['title'] == "" || $_POST['content'] == ""){
				$id = 0;
			}else{
				$count = $m -> where("id = $where") -> getField("count");
				$m -> where("id = $where") -> count = $count + 1;
				$n -> create();
				$n -> equipmentid = $where;
				$result = $n -> add();
				if($result){
					$id = $m -> save();
				}else{
					$id = 0;
				}
			}
			if($id){
	            $data = array(
	                'code'=>'0',
	                'id'=>$id
	            );
	            echo json_encode($data);
        	}
		}
		public function add(){
			$this -> display();
		}
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
			// var_dump(U(ACTION_NAME));
			// $count = $n -> where($data) -> count();
			// $Page = new\Think\Page($count,1);// 每页显示的记录数
   //      	$Page->setConfig('next','下一页');
   //      	$Page->setConfig('prev','上一页');
   //      	$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> where($data) -> select();
   //      	var_dump($Page);
			// exit();
   //    	  	$show = $Page -> show();//返回分页信息
   //      	$this -> assign("data",$arr);
   //      	$this -> assign("count",$count);
   //      	$this -> assign('show',$show);
			$count = $n -> where($data) -> count();
			$arr = $n -> where($data) -> select();
			$this -> assign("data",$arr);
        	$this -> assign("count",$count);
        	$this -> display();
		}
	}
?>
