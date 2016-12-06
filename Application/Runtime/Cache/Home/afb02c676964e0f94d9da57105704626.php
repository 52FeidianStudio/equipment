<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>讨论区</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />
		<meta name="Author" content="网页作者" /> 
		<meta name="Copyright" content="网站版权" /> 
		<meta name="keywords" content="网站关键字" />
		<meta name="description" content="网站描述" />
		<link rel="stylesheet" type='text/css' href="/zky/Public/Css/communication.css" />
		<link rel="stylesheet" href="/zky/Public/Css/public.css" />
		<script type="text/javascript" src="/zky/Public/Js/jquery-3.1.1.min.js"></script>
		<script src="/zky/Public/Js/public.js"></script>
		<script>
			var arr=new Array();
        	
   			// 问题不在于ajax，而是点击按钮之后事件没有被触发
			// 登录按钮ajax操作
			function f1(){
				$.post("/zky/index.php/Home/Login/do_login", {
					username:$("#l_txtName").val(),
					password:$("#l_txtPwd").val()
				},function(text){
					if(text=="pass"){
						window.location.href="/zky/index.php/Home/Index/main";
					}else{
						$("#suggest").html(text);
					}
				});
			}
			
			function f2(){
				$.post("/zky/index.php/Admin/Login/do_login", {
					username:$("#a_txtName").val(),
					password:$("#a_txtPwd").val()
				},function(text){
					if(text=="pass"){
						window.location.href="/zky/index.php/Admin/Index/admin";
					}else{
						$("#suggest").html(text);
					}
				});
			}

			function f3(){
				$.post("/zky/index.php/Home/Register/do_register", {
					username:$("#r_txtName").val(),
					password:$("#r_txtPwd").val(),
					repassword:$("#re_txtPwd").val(),
					name:$("#ra_txtName").val(),
					verify:$("#c_txtPwd").val()
				},function(text){
					if(text=="pass"){
						window.location.href="/zky/index.php/Home/Index/main";
					}else{
						$("#suggest2").html(text);
					}
				});
			}
		</script>
		<script src="/zky/Public/Js/main.js"></script>
		
	</head>
	<body>
		<!-- 这里是登录弹出窗口 -->
		<div id="LoginBox">
	        <div class="row1">
	            登录<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="l_closeBtn">×</a>
	        </div>
	        <form>
		        <span id="suggest"> &nbsp;</span>
		        <div class="row">
		            用户名: 
		            	<span >
		                	<input class="inputBox" type="text" id="l_txtName" placeholder="账号" />
		            	</span>
		        </div>
		        <div class="row">
		            密&nbsp;&nbsp;&nbsp;&nbsp;码:
		            <span >
		                <input class="inputBox" type="password" id="l_txtPwd" placeholder="密码" />
		           	</span>
		        </div>
		        <div class="row">
		            	<a href="#" id="l_loginbtn" onclick="f1();">登录</a>
	        	</div>
	        </form>
	    </div>
		
		<!-- 结束登陆弹出窗口 -->
		<!-- 管理登录 -->
		<div id="AdminBox">
	        <div class="row1">
	            后台登录<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="a_closeBtn">×</a>
	        </div>
	        <form>
		        <span id="suggest"> &nbsp;</span>
		        <div class="row">
		            用户名: 
		            	<span >
		                	<input class="inputBox" type="text" id="a_txtName" placeholder="管理员账号" />
		            	</span>
		        </div>
		        <div class="row">
		            密&nbsp;&nbsp;&nbsp;&nbsp;码:
		            <span >
		                <input class="inputBox" type="password" id="a_txtPwd" placeholder="密码" />
		           	</span>
		        </div>
		        <div class="row">
		            	<a href="#" id="a_loginbtn" onclick="f2();">登录</a>
	        	</div>
	        </form>
	    </div>
	     <!-- 结束管理登录窗口 -->
	      <!-- 注册窗口 -->
    <div id="registerBox">
	        <div class="row1">
	            注册<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="r_closeBtn">×</a>
	        </div>
	        <form>
		        <div class="row">
		           <span id="suggest2"> &nbsp;</span>
		        </div>
		        <div class="row">
		            账　　号: <span >
		                <input type="text" class="inputBox" id="r_txtName" placeholder="账号/邮箱" />
		            </span>
		        </div>
		        <div class="row">
		            用&nbsp;&nbsp;户&nbsp;&nbsp;名: <span >
		                <input type="text" class="inputBox" id="ra_txtName" placeholder="姓名" />
		            </span>
		        </div>
		        <div class="row">
		            密　　码: <span >
		                <input type="password" class="inputBox" id="r_txtPwd" placeholder="密码" />
		            </span>
		        </div>
		        <div class="row">
		            确认密码: <span >
		                <input type="password" class="inputBox" id="re_txtPwd" placeholder="确认密码" />
		            </span>
		        </div>
		        <div class="row">
		            验&nbsp;&nbsp;证&nbsp;&nbsp;码: <span >
		                <input type="text" class="inputBox" id="c_txtPwd" placeholder="验证码" />
		                <img src="/zky/index.php/Home/Public/code" onclick = 'this.src = this.src+"?"+Math.random'/>
		            </span>
	        	</div>
		        <div class="row">
		            
		        </div>
		        <div class="row">
		            <a href="#" id="r_loginbtn" onclick="f3();">注册</a>
		        </div>
		    </form>
    	</div>
    <!-- 结束注册窗口 -->
		<div id='header'>
			<div class="contain" >
				<img src="/zky/Public/Pic/top.jpg" alt="" style="width:100%;" />
			</div>
		</div>
		<div id='navi'>
			<div class="contain">
				<a href="/zky/index.php/Home/Index/main" class="navi_a">首页</a>
				<a href="/zky/index.php/Home/Inform/news" class="navi_a">新闻通知</a>
				<a href="/zky/index.php/Home/Equipment/equipment" class="navi_a">仪器介绍</a>
				<a href="/zky/index.php/Home/Regulation/regulation" class="navi_a">规章制度</a>
				<a href="/zky/index.php/Home/File/document" class="navi_a">文档下载</a>
				<a href="/zky/index.php/Home/Message/conmunication" class="navi_a">讨论区</a>
				<a href="/zky/index.php/Home/Index/about_us" class="navi_a">关于我们</a>
				<div id='na_log'>
					<span>欢迎</span>
					<?php if(($_SESSION['username']) == ""): ?><span><a href="#" id='login'>登录</a></span>
						<span><a href="#" id='register'>注册</a></span>
					<?php else: ?>	<span><?php echo (session('username')); ?></span>
						<a href="/zky/index.php/Home/Login/login_out" style=''>退出</a><?php endif; ?>
				</div>
			</div>
		</div>
		<div id='main'>
			<div class="contain">
				<div id="main_navi">
						<a href="/zky/index.php/Home/Index/main">首页</a><span>--->讨论区 </span><br />
						   	
				</div>
				<div id="show">
					<?php if(($user) == "0"): ?><a href="/zky/index.php/Home/Message/add_message" id="add_me">添加留言</a><br /><br />
								<?php else: ?> 
									<?php if(($user) == ""): ?><p>
											<span class='hint'>您还没有登录，登陆过后可以添加留言</span>
										</p><br />
										<?php else: ?> 
										<p>
											<span class='hint'>您已经被管理员禁言</span>
										</p><br /><?php endif; endif; ?>
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["title"]); ?><a href="/zky/index.php/Home/Message/do_see/id/<?php echo ($vo["id"]); ?>">查看详情</a> <span id='time'> <?php echo ($vo["date"]); ?></span></p><?php endforeach; endif; else: echo "" ;endif; ?>
						<div id="page"><?php echo ($show); ?></div>
				</div>
			</div>
		</div>
		<div id='footer'>
		<div class="contain">
			<p class="footer_p">通讯地址：华中农业大学主楼东附楼二楼</p>
			<p class="footer_p">邮政编码：430070</p>
			<hr />
			<p class="footer_p">@xxxxxxxxxxxxxx  <a href="#" id='admin' >管理</a></p>
		</div>
	</div>
	</body>
</html>