<?php 
	namespace Home\Controller;
	use Think\Controller;
	class MessageController extends Controller{
		public function _initialize(){
          //获取用户当前的状态
			$m = M("User");
			$user = $m -> where("id = $_SESSION[id] ") -> getField("say");
			$this -> assign("user",$user);
      	}
		public function conmunication(){
			$n = M("Message");
			$count = $n -> count();
			$Page = new\Think\Page($count,13);// 每页显示的记录数
        	$Page->setConfig('header','条留言');
        	$Page->setConfig('next','下一页');
        	$Page->setConfig('prev','上一页');
      	  	$show = $Page -> show();//返回分页信息
      		$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> order('id desc') -> select();
        	$this -> assign("data",$arr);
        	$this -> assign('show',$show);
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
			if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
	          	$this -> redirect("Login/index");
	        }
			//打开一个新的页面用来撰写回答
			$which = $_GET['id'];
			$address = $_GET['address'];
			$n = D("Message");
			$arr = $n -> where("id = $which") -> find();
			$this -> assign("data",$arr);
			$this -> assign("address",$address);
			$this -> display();
		}

		//进行敏感词汇的过滤
		public function isSensitive($data){
			$sensitive = M("Sensitive");
			$sensitivereplace = "***";
			$sensitiveall = $sensitive -> select();
			$sensitivecount = $sensitive -> count();
			for ($i=0;$i<$sensitivecount;$i++){  
			    $isSensitive = substr_count($data, $sensitiveall[$i]['content']);  
			    if($isSensitive>0){
			    	$data = str_ireplace($sensitiveall[$i]['content'], $sensitivereplace, $data);
			     }  
			}
			return $data;
		}

		//进行后台数据的添加
		public function do_addanswer(){
			$sensitive = M("Sensitive");
			$n = M("Answer");
			$where = $_GET['id'];
			$data['date'] = date("Y-m-d H:i:s"); // 记录当前的时间
			$data['content'] = self::isSensitive($_POST['content']);
			$data['messageid'] = $where;
			$data['userid'] = $_SESSION['id'];
			$result  = $n -> add($data); //写入数据库，并且返回result的值进行判断
			if($result){
				$this -> redirect("Message/conmunication");
			}else{
				$this -> error("好像哪里出了问题");
			}
		}
		public function add_message(){
			if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
	          	$this -> redirect("Login/index");
	        }
			$this -> display();
		}
		public function do_addmessage(){
			$n = D("Message");
			$data['title'] = self::isSensitive($_POST['title']);
			$data['content'] = self::isSensitive($_POST['content']);
			if($data['title'] == "***" || $data['content'] == "***"){
				$this -> error("您的留言主题或者留言内容不合适");
			}
			$data['date'] = date("Y-m-d H:i:s");
			$data['userid'] = $_SESSION['id'];
			$result = $n -> add($data);
			if($result){
				$this -> redirect("Message/conmunication");
			}else{
				$this -> error("发布留言失败");
			}
		}
		// 展示
		public function aaa(){
			$n = D("Answer");
			$arr = $n -> relation(true) -> select();
			var_dump($arr);
		}
	}
 ?>