<?php
	namespace Admin\Controller;
	use Think\Controller;
	class FileController extends Controller{
		public function _initialize(){
          if(!isset($_SESSION['username']) || $_SESSION['username'] == '' || $_SESSION['isTeacher'] == 0){
            $this -> redirect("__APP__/Home/Index/main");
          }
        }
      	//由原来的index改为doucument
		public function doucument(){
			$n = M('File');
			$count = $n -> count();
			$Page = new\Think\Page($count,20);// 每页显示的记录数
        	$Page->setConfig('header','个文件');
        	$Page->setConfig('next','下一页');
        	$Page->setConfig('prev','上一页');
      	  	$show = $Page -> show();//返回分页信息
      		$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> order("id desc") -> select();
        	$this -> assign("data",$arr);
        	$this -> assign('show',$show);
        	$this -> display();
		}
		public function do_show(){
			$Me = M('file');
			$Me ->Create();
			//设置上传文件类型
			$Realname = $_FILES['file']['name'];
			$upload = new \Think\Upload();//实例化上传类
			$upload -> maxSize = 3145728;//设置上传文件的大小
			
       		$upload->rootPath  =   './Uploads/'; // 设置附件上传根目录
			$upload->savePath  =   './File/'; // 设置附件上传（子）目录
			$upload->saveName = 'time';

			//上传文件
			$info = $upload -> upload();
			if(!$info){
				//上传错误提示信息
				$this -> error($upload->getError());
			}
			$Me -> userid = $_SESSION['id'];
			$Me -> date = date("Y-m-d H:i:s");
			$Me -> filename = $info['file']['savename'];//记录文件的上传路径
			$Me -> address =$info['file']['savepath'].$info['file']['savename'];
			$Me -> realname = $Realname;
			$last = $Me -> add();

			if($last){
				$this -> redirect('File/doucument','','0','上传成功'); // 进行重定向操作，返回到主页
			}else{
				$this -> error("上传失败！");
			}
		}
		public function delete(){
			$n = M('File');
			$where = $_GET['id'];
			$address = $n -> where("id = $where") -> getField("address");
			$result = $n -> where("id = $where") -> delete();
			if($result){
				$lalala = "./Uploads".substr($address,1);
				unlink($lalala);
				$this -> redirect('File/doucument','','0','删除成功');
			}else{
				$this -> error("删除失败");
			}
		}
	}
?>