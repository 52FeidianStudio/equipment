<?php 
	namespace Admin\Controller;
	use Think\Controller;
	class MessageController extends Controller{
		public function _initialize(){
          if(!isset($_SESSION['username']) || $_SESSION['username'] == '' || $_SESSION['isTeacher'] == 0){
            $this -> redirect("__APP__/Home/Index/main");
          }
        }
		public function conmmunication(){
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
        	$Page = new\Think\Page($count,15);// 每页显示的记录数
        	$Page->setConfig('header','条回复');
        	$Page->setConfig('next','下一页');
        	$Page->setConfig('prev','上一页');
      	  	$show = $Page -> show();//返回分页信息
      		$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> where("messageid = $where") -> relation(true) -> select();
        	$this -> assign("data",$arr);
			$this -> assign("count",$count);
        	$this -> assign('show',$show);
        	$this -> assign('find',$find);
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
				$this -> success("回复成功！");
			}else{
				$this -> error("好像哪里出了问题");
			}
		}
		public function do_deleteanswer(){
			$where = $_GET['id'];
			$n = M("Answer");
			$result = $n -> where("id = $where") -> delete();
			$this -> success("删除成功！");
		}
		public function add_message(){
			$this -> display();
		}
		public function do_addmessage(){
			$n = D("Message");
			$n -> Create();
			$n -> date = date("Y-m-d H-i-s");
			$n -> userid = $_SESSION['id'];
			$result = $n -> add();
			if($result){
				$this -> redirect("Message/conmmunication");
			}else{
				$this -> error("发布留言失败");
			}
		}
		public function do_delete(){
			$n = M("Message");
			$m = M("Answer");
			$where = $_GET['id'];
			$result1 = $n -> where("id = $where") -> delete();
			$result2 = $m -> where("messageid = $where") -> delete();
			$this -> redirect("Message/conmmunication");
 		}
 		public function user(){
 			$n = M("User");
 			$arr = $n -> where("isTeacher = 0") -> order("username") -> select();
 			$count = $n -> where("isTeacher = 0") -> count();
 			$count1 = $n -> where("say = 1") -> count();
 			$this -> assign("data",$arr);
 			$this -> assign("count",$count);
 			$this -> assign("count1",$count1);
            $this -> display();
        }
        public function set(){
        	$where['id'] = $_GET['id'];
        	$n = M("User");
        	$n -> say = 1;
        	$n -> time = date("Y-m-d h:i:s");
        	$result = $n -> where($where) -> save();
        	if($result){
        		$this -> redirect("Message/user");
        	}
        }
        public function setall(){
        	$n = M("User");
        	$n -> say = 1;
        	$n -> time = date("Y-m-d h:i:s");
        	$arr = $n -> where("isTeacher = 0") -> save();
        	if($arr){
        		$this -> redirect("Message/user");
        	}
        }
        public function unsetall(){
        	$n = M("User");
        	$n -> say = 0;
        	$n -> time = date("Y-m-d h:i:s");
        	$arr = $n -> where("isTeacher = 0") -> save();
        	if($arr){
        		$this -> redirect("Message/user");
        	}
        }
        public function un_set(){
        	$where = $_GET['id'];
        	$n = M("User");
        	$n -> say = 0;
        	$n -> time = date("Y-m-d h:i:s");
        	$result = $n -> where("id = $where") -> save();
        	if($result){
        		$this -> redirect("Message/user");
        	}
        }
        public function studenttail(){
        	$where = $_GET['id'];
        	$n = M("User");
        	$m = D("Message");
        	$p = D("Answer");
        	$user = $n -> where("id = $where") -> find();
        	$message = $m -> where("userid = $where") -> relation(true) -> select();
        	$answer = $p -> where("userid = $where") -> relation(true) -> select();
        	$countmessage = $m -> where("userid = $where") -> count();
        	$countanswer = $p -> where("userid = $where") -> count();
        	$this -> assign("countmessage",$countmessage);
        	$this -> assign("countanswer",$countanswer);
        	$this -> assign("user",$user);
        	$this -> assign("message",$message);
        	$this -> assign("answer",$answer);
        	$this -> display();
        }
	}
 ?>