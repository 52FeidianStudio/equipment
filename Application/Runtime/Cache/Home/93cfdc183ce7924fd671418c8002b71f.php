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
		<link rel="stylesheet" type='text/css' href="/zky/Public/Css/main.css" />
		<link rel="stylesheet" href="/zky/Public/Css/public.css" />
		<script type="text/javascript" src="/zky/Public/Js/jquery-3.1.1.min.js"></script>
		<script src="/zky/Public/Js/public.js"></script>
		<script>
			var arr=new Array();
        	arr[0]="/zky/Public/Pic/top.jpg";
       	    arr[1]="/zky/Public/Pic/lab.jpg";
        	arr[2]="/zky/Public/Pic/Login.png";
        	arr[3]="/zky/Public/Pic/phone.jpg";
        	arr[4]="/zky/Public/Pic/aite.jpg";
        	arr[5]="/zky/Public/Pic/top.jpg";
        	arr[6]="/zky/Public/Pic/top.jpg";
   			// 问题不在于ajax，而是点击按钮之后事件没有被触发
			// 登录按钮ajax操作
			function f1(){
				$.post("/zky/index.php/Home/Login/do_login", {
					username:$("#l_txtName").val(),
					password:$("#l_txtPwd").val()
				},function(text){
					if(text=="pass"){
						window.location.href="/zky/index.php/Home/Message/add_message";
					}else{
						$("#suggest").html(text);
					}
				});
			}
			function f3(){
				$.post("/zky/index.php/Admin/Login/do_login", {
					username:$("#a_txtName").val(),
					password:$("#a_txtPwd").val()
				},function(text){
					if(text=="pass"){
						window.location.href="/zky/index.php/Admin/Index/admin";
					}else{
						$("#suggest1").html(text);
					}
				});
			}
		</script>
	</head>
	<body>
		<!-- 这里是登录弹出窗口 -->
		 <div id="LoginBox">
        <div class="row1">
            登录<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="l_closeBtn">×</a>
        </div>
        <div class="row">
            用户名: <span class="inputBox">
                <input type="text" id="l_txtName" placeholder="账号/邮箱" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="l_warn">*</a>
        </div>
        <div class="row">
            密&nbsp;&nbsp;&nbsp;&nbsp;码: <span class="inputBox">
                <input type="text" id="l_txtPwd" placeholder="密码" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="l_warn2">*</a>
        </div>
        <div class="row">
            	<a href="#" id="l_loginbtn" onclick="f1();">登录</a>
    	</div>
    </div>
		
		<!-- 结束登陆弹出窗口 -->

		<!-- 管理登录 -->
		<div id="AdminBox">
	        <div class="row1">
	            后台登录<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="a_closeBtn">×</a>
	        </div>
	        <form>
		        <div class="row">
		            <span id="suggest1">&nbsp;</span>
		        </div>
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
		            	<a href="#" id="a_loginbtn" onclick="f3();">登录</a>
	        	</div>
	        </form>
	    </div>
		<!-- 结束管理登录 -->

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
					<?php else: ?>	<SPAN><?php echo (session('username')); ?></SPAN>
						<a href="/zky/index.php/Home/Login/login_out" style=''>退出</a><?php endif; ?>
				</div>
			</div>
		</div>
		<div id='main'>
			<div class="contain">
				<div id="main_navi">
						<a href="/zky/index.php/Home/Index/main">首页</a>---><a href="/zky/index.php/Home/Message/conmunication">讨论区</a>--->发布留言<br />
						<?php if(($user) == "0"): ?><form action="/zky/index.php/Home/Message/do_addmessage" method = "post" id = "myForm">
									留言主题：<input type="text" name = "title"> <br><br>
									<!-- 此处应该限制一下输入文本框的长度 -->
									<textarea name="content" id = "content"></textarea><br /><br />
							        <input type="submit" name="submit" value="发布">
							        <input type="reset" value = "取消">
							        <!-- 添加一个事件，当点击其时，弹出对话框，是否放弃发布留言？是，关闭新打开的标签页，否，回到本界面 -->
							    </form>
								<?php else: ?> 
									<?php if(($user) == ""): ?><p><span>您还没有登录，登录后可添加留言</span></p><br />
										<?php else: ?><span>您已经被管理员禁言</span><br /><?php endif; endif; ?>
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