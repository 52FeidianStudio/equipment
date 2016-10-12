<?php
	namespace Admin\Controller;
	use Think\Controller;
	class EquipmentController extends Controller{
		public function index(){
			$n = M('Equipment');
			$arr = $n -> select();
			$this -> assign('data',$arr);
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
			$info = $upload -> upload();
			if(!$info){
				//上传错误提示信息
				$this -> error($upload->getError());
			}
			$n -> imagicname = $info['file']['savename'];//记录文件的上传路径
			$n -> imagicaddress =$info['file']['savepath'].$info['file']['savename'];
			$n -> eblong = date("Y-m-d h:i:s");
			$last = $n -> add();
			var_dump($last);
			var_dump($info);
			if($last){
				$this -> redirect('File/index','','0','上传成功'); // 进行重定向操作，返回到主页
			}
		}
		public function delete(){
			$n = M('Equipment');
			$do = $_GET['id'];
			$result = $n -> where("id = $do") -> delete();
			if($result){
				$this -> success("删除成功");
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
			var_dump($_POST);
			$do = $_POST['id'];
			echo "$do";
			$result = $n -> where("id = $do") -> data($_POST) -> save();
			var_dump($result);
			if($result){
				$this -> success("修改成功");
			}else{
				$this -> error("修改失败");
			}
		}
	}
?>