<?php 
	namespace Home\Controller;
	use Think\Controller;
	class MessageController extends Controller{
		public function _initialize(){
          if(!isset($_SESSION['username']) || $_SESSION['username'] == '' || $_SESSION['isTeacher'] == 1){
          	$this -> redirect("Login/index");
          }
          //获取用户当前的状态
			$m = M("User");
			$user = $m -> where("id = $_SESSION[id] ") -> getField("say");
			$this -> assign("user",$user);
      	}
		public function conmunication(){
			$n = M("Message");
			$arr = $n -> order('id desc') -> select();
			$this -> assign('data',$arr);
			$this -> display();
		}
		public function do_see(){
			$where = $_GET['id'];//将问题的编号拿出来赋值给where变量
			$n = D("Answer");
            $count = $n -> where("messageid = $where") -> count();//查看留言的总数
            $m = D("Message");
           	$find = $m -> where("id = $where") -> relation(true) -> find();//在Message中查找符合条件的返回数组
            //实现留言记录的分页功能：
        	$Page = new\Think\Page($count,5);// 每页显示的记录数
        	$Page->setConfig('header','条回复');
        	$Page->setConfig('next','下一页');
        	$Page->setConfig('prev','上一页');
      	  	$show = $Page -> show();//返回分页信息
      		$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> where("messageid = $where") -> relation(true) -> select();
        	$this -> assign("data",$arr);
			$this -> assign("count",$count);
        	$this -> assign('show',$show);
        	$this -> assign('find',$find);
        	$this -> assign('address',$_SERVER['REQUEST_URI']);
        	$this -> display();
		}
		public function add_answer(){
			//打开一个新的页面用来撰写回答
			$which = $_GET['id'];
			$address = $_GET['address'];
			$n = D("Message");
			$arr = $n -> where("id = $which") -> find();
			$this -> assign("data",$arr);
			$this -> assign("address",$address);
			$this -> display();
		}
		//进行后台数据的添加
		public function do_addanswer(){
			$n = M("Answer");
			$where = $_GET['id'];
			$data['date'] = date("Y-m-d H:i:s"); // 记录当前的时间
			$data['content'] = $_POST['content'];
			$data['messageid'] = $where;
			$data['userid'] = $_SESSION['id'];
			//$data['userid'] = "11";
			$result  = $n -> add($data); //写入数据库，并且返回result的值进行判断
			if($result){
				//$this -> redirect("$_GET[address]");
				$this -> redirect("Message/conmunication");
			}else{
				$this -> error("好像哪里出了问题");
			}
		}
		public function add_message(){
			$this -> display();
		}
		public function do_addmessage(){
			$n = D("Message");
			$n -> Create();
			$n -> date = date("Y-m-d H:i:s");
			/*
				$n -> userid = $_SESSION['id'];
			*/
			//$n -> userid = 1;
			$n -> userid = $_SESSION['id'];
			$result = $n -> add();
			if($result){
				$this -> redirect("Message/conmunication");
			}else{
				$this -> error("发布留言失败");
			}
		}
	}
 ?>