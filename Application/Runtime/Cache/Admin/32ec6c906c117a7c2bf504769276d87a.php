<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>管理员登录界面</title>
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />
		<meta name="Author" content="网页作者" /> 
		<meta name="Copyright" content="网站版权" /> 
		<meta name="keywords" content="网站关键字" />
		<meta name="description" content="网站描述" />
		<link rel="stylesheet" href="/zky/Public/Css/public.css" />
		<link rel="stylesheet" type='text/css' href="/zky/Public/Css/equipiment.css" />
		<script type="text/javascript" src="/zky/Public/Js/jquery-1.8.3.min.js"></script>
		<script src="/zky/Public/Js/public.js"></script>
		<script src="/zky/Public/Js/equipment.js"></script> -->
		<script type="text/javascript">
			var arr=new Array();
		        	arr[0]="/zky/Public/Pic/top.jpg";
		       	    arr[1]="/zky/Public/Pic/lab.jpg";
		        	arr[2]="/zky/Public/Pic/Login.png";
		        	arr[3]="/zky/Public/Pic/phone.jpg";
		        	arr[4]="/zky/Public/Pic/aite.jpg";
		        	arr[5]="/zky/Public/Pic/top.jpg";
		        	arr[6]="/zky/Public/Pic/top.jpg";
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
	<!-- <span><a href="#" id='login'>登录</a></span> -->
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
</body>
</html>