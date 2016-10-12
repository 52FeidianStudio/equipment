<?php 
	namespace Home\Controller;
	use Think\Controller;
	class MessageController extends Controller{
		public function index(){
			$n = M("Message");
			$arr = $n -> select();
			$this -> assign('data',$arr);
			$this -> display();
		}
		public function do_see(){
			$n = M("Answer");
			$where = $_GET['id'];//将问题的编号拿出来赋值给where变量
			$m = M('Message');
			$title = $m -> where("id = $where") -> getField("title");
            $count = $n -> where("messageid = $where") -> count();//查看留言的总数
			
            //实现留言记录的分页功能：
        	$Page = new\Think\Page($count,5);// 每页显示的记录数
        	$Page->setConfig('header','条回复');
        	$Page->setConfig('next','下一页');
        	$Page->setConfig('prev','上一页');
      	  	$show = $Page -> show();//返回分页信息
      		$arr = $n -> limit($Page->firstRow.','.$Page->listRows) -> where("messageid = $where") -> select();
        	$this -> assign("data",$arr);
			$this -> assign("data2",$title);
			$this -> assign("data3",$count);
			$this -> assign("data4",$where);
        	$this -> assign('show',$show);
        	$this -> display();
		}
		public function add(){
			//打开一个新的页面用来撰写回答
			$this -> display();
		}
		//进行后台数据的添加
		public function do_add(){
			$n = M("Answer");
			$data['date'] = NOW_TIME; // 记录当前的时间
			$data['content'] = $_POST['content'];
			$data['messageid'] = $_GET['id'];
			$data['userid'] = "111";
			$result  = $n -> add($data); //写入数据库，并且返回result的值进行判断
			var_dump($result);
			var_dump($data);
		}
	}
 ?>