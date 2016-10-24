<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>首页名称</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />
		<meta name="Author" content="网页作者" /> 
		<meta name="Copyright" content="网站版权" /> 
		<meta name="keywords" content="网站关键字" />
		<meta name="description" content="网站描述" />
		<link rel="stylesheet" type='text/css' href="/equipment/Public/Css/main.css" />
		<link rel="stylesheet" href="/equipment/Public/Css/public.css" />
		<script type="text/javascript" src="/equipment/Public/Js/jquery-1.8.3.min.js"></script>
		<script src="/equipment/Public/Js/public.js"></script>
		<script>
			var arr=new Array();
        	arr[0]="/equipment/Public/Pic/top.jpg";
       	    arr[1]="/equipment/Public/Pic/lab.jpg";
        	arr[2]="/equipment/Public/Pic/Login.png";
        	arr[3]="/equipment/Public/Pic/phone.jpg";
        	arr[4]="/equipment/Public/Pic/aite.jpg";
        	arr[5]="/equipment/Public/Pic/top.jpg";
        	arr[6]="/equipment/Public/Pic/top.jpg";
        	

        	//登录按钮ajax
        	$("#l_loginbtn").on('click', function () {
			
			 $.post('/equipment/index.php/Home/Login/do_login', {
					username:$("#l_txtName").val(),
					password:$("#l_txtPwd").val()
				},function(text){
					
					if(text=="pass"){
						window.location.href="/equipment/index.php/Home/Index/index";
					}else{
						$("#suggest").html(text);
					}
				});
		});
		</script>
		<script src="/equipment/Public/Js/main.js"></script>
		
	</head>
	<body>
		<!-- 这里是登录弹出窗口 -->
		 <div id="LoginBox">
        <div class="row1">
            登录<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="l_closeBtn">×</a>
        </div>
        <span id="suggest"></span>
        <div class="row">
            用户名: 
            	<span class="inputBox">
                <input type="text" id="l_txtName" placeholder="账号" />
            	</span>
        </div>
        <div class="row">
            密&nbsp;&nbsp;&nbsp;&nbsp;码:
             <span class="inputBox">
                <input type="password" id="l_txtPwd" placeholder="密码" />
           	</span>
        </div>
        <div class="row">
            <a href="javascript:void(0)" id="l_loginbtn">登录</a>
        </div>
    </div>
		
		<!-- 结束登陆弹出窗口 -->
		<!-- 这里是注册弹出窗口 -->
		<div id="registerBox">
        <div class="row1">
            注册<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="r_closeBtn">×</a>
        </div>
        <div class="row">
            用户名: <span class="inputBox">
                <input type="text" id="r_txtName" placeholder="账号/邮箱" />
            </span>
        </div>
        <div class="row">
            密&nbsp;&nbsp;&nbsp;&nbsp;码: <span class="inputBox">
                <input type="password" id="r_txtPwd" placeholder="密码" />
            </span>
        </div>
        <div class="row">
            <a href="javascript:void(0)" id="r_loginbtn">注册</a>
        </div>
    </div>
    <!-- 结束注册窗口 -->
		<div id='header'>
			<div class="contain" >
				<img src="/equipment/Public/Pic/top.jpg" alt="" style="width:100%;" />
			</div>
		</div>
		
		<div id='navi'>
			<div class="contain">
				<a href="/equipment/index.php/Home/Index/main" class="navi_a">首页</a>
				<a href="/equipment/index.php/Home/Inform/news" class="navi_a">新闻通知</a>
				<a href="/equipment/index.php/Home/Equipment/equipment" class="navi_a">仪器介绍</a>
				<a href="/equipment/index.php/Home/Regulation/regulation" class="navi_a">规章制度</a>
				<a href="/equipment/index.php/Home/File/document" class="navi_a">文档下载</a>
				<a href="/equipment/index.php/Home/Message/conmunication" class="navi_a">讨论区</a>
				<a href="/equipment/index.php/Home/Index/about_us" class="navi_a">关于我们</a>
				<div id='na_log'>
					<span>欢迎</span>
					<?php if(($_SESSION['username']) == ""): ?><span><a href="#" id='login'>登录</a></span>
						<span><a href="#" id='register'>注册</a></span>
					<?php else: ?>	<SPAN><?php echo (session('username')); ?></SPAN>
						<a href="/equipment/index.php/Home/Login/login_out" style=''>退出</a><?php endif; ?>
				</div>
			</div>
		</div>
		
    </div>
		<div id='main'>
			<div class="contain">
				<div id='left'>
					<div id='book'>
						<h1>　仪器预约系统</h1>
						<a href="@!@!"　>单击进入预约系统</a>
						<!-- <br />
						<span>注意：只有本校学生才能预约</span>
											</div> -->
						<hr />
						<div id='relational_a'>
						<h2>　相关链接</h2>
						<h4>学院内链接：</h4>
						<a href="http://cpst.hzau.edu.cn/" target="_blank" class="left_a">华中农业大学植物科学技术学院</a>
						<h4>校内链接：</h4>
						<a href="http://www.hzau.edu.cn/2014/ch/"target="_blank" class="left_a">华中农业大学</a>
						<a href="#" class="left_a">华中农业大学大型仪器设备管理系统</a>
						<a href="http://lib.hzau.edu.cn/"target="_blank" class="left_a">华中农业大学图书馆</a>
						<h4>校外链接：</h4>
						<a href="http://www.dxy.cn/bbs/index.html"target="_blank" class="left_a">丁香园论坛</a>
						<a href="http://muchong.com/bbs/"target="_blank" class="left_a">小木虫论坛</a>
						<a href="http://www.gfjl.org/forum.php?fromuid=10080"target="_blank" class="left_a">计量论坛</a>
						<a href="http://www.instrument.com.cn/"target="_blank" class="left_a">仪器信息网</a>
						<h4></h4>
						</div>
					</div>
				
			</div>
			<div id='right'>
					<div id='js'>
						<img src="/equipment/Public/Pic/aite.jpg" style="width:100%;height:100%;" alt="" id="obj" />
					</div>
				<div id='r_message'>
					<p>
						随着学院建设的发展，植物科学技术学院大中型仪器设备的数量和档次都得到大幅度提高，总价值接近一千万元人民币，目前价值十万元人民币以上的仪器设备数量为15台。大型仪器主要有超高效液相质谱联用仪、气相色谱质谱联用仪、液相色谱仪、气相色谱仪和凝胶成像仪等。公平平台的宗旨是进一步改善学院贵重仪器设备的管理和维护、提高仪器设备利用率、促进开放共享，以更好地为学科建设、科学研究和人才培养服务。</p>
						<br />
						<p>
						公共实验平台管理的仪器设备的使用、维护和维修进行统一管理和安排。公共平台的大型贵重仪器实行专管公用，提前预约制度，面向学院学校和社会开放服务，本学院服务优先。公共实验平台的硬件环境和软件条件的建设正在逐步开展和完善中，平台网站、平台技术团队也将随平台建设工作的开展一同发展和完善。
					</p><br />
					
					
				</div></div>
		</div>
	</div>	
		<div id='footer'>
			<div class="contain">
				<p class="footer_p">通讯地址：华中农业大学主楼东附楼二楼</p>
				<p class="footer_p">邮政编码：430070</p>
				<hr />
				<p class="footer_p">@xxxxxxxxxxxxxx  <a href="/equipment/index.php/Admin/Index/admin">管理</a></p>
			</div>
		</div>
	</body>
</html>