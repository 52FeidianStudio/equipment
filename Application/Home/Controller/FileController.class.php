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
		public function do_show(){
			//设置上传文件类型

			$upload = new \Think\Upload();//实例化上传类
			$upload -> maxSize = 3145728;//设置上传文件的大小
			
       		$upload->rootPath  =   './Uploads/'; // 设置附件上传根目录
			$upload->savePath  =   ''; // 设置附件上传（子）目录
			$upload->saveName = 'time';

			//上传文件
			$info = $upload -> upload();
			var_dump($info);
			$a = M('File');
			$a -> userid = "2015317200402";
			//$data = NOW_TIME;
			//var_dump($data);
			$a -> date = NOW_TIME;
			$a -> filename = $info[0]['name'];//记录文件的上传路径
			$a -> address = $info[0]['savepath'].$info[0]['savename'];
			$result = $a -> add();
			var_dump($result);
			if(!$info){
				//上传错误提示信息
				$this -> error($upload->getError());
			}else{
				//上传成功
				//$this -> success("上传成功！");
			}
		}
	}
?>