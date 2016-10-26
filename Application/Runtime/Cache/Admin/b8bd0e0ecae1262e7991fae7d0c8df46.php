<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>后台管理</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />
		<meta name="Author" content="网页作者" /> 
		<meta name="Copyright" content="网站版权" /> 
		<meta name="keywords" content="网站关键字" />
		<meta name="description" content="网站描述" />
		<link rel="stylesheet" type='text/css' href="/equipment/Uploads/Css/admin.css" />
		<script type="text/javascript" src="/equipment/Uploads/Js/jquery1.js"></script>
		<script type="text/javascript">
			$(document).ready(
			function() {
				$(".div2").click(
						function() {
							$(this).next("div").slideToggle("").siblings(".div3:visible")/*.slideUp("slow")*/;
						});
				});
			function openurl(url) {
					var rframe = parent.document.getElementById("rightFrame");
					rframe.src = url;
					}
			</script>
 </head>
 <body>
	<div class="top">
		<div class="title" >
			<h3>后台管理系统</h3>
		</div>
		<div class="top_link">
			<a href="/equipment/index.php/Admin/Index/admin_list" target="" title="Ghost">
				管理员：<?php echo (session('username')); ?></a>
		</div>
	</div>
	<div class="left">
		<div class="div1">
           <div class="div2">
				<div class="div4"></div>
				首页管理
			</div>
			<div class="div3">
				<li><a class="a" href="javascript:/equipment/index.php/Admin/Index/admin;"
					onClick="openurl('/equipment/index.php/Admin/Index/index_link');">首页链接</a></li>
			</div>
			<div class="div2">
				<div class="div4"></div>
				新闻通知管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:/equipment/index.php/Admin/Inform/news;"
						onClick="openurl('/equipment/index.php/Admin/Inform/news');">所有新闻</a></li>
				</ul>
			</div>
			<div class="div2">
				<div class="div4"></div>
				仪器管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:/equipment/index.php/Admin/Equipment/equipment;"
						onClick="openurl('/equipment/index.php/Admin/Equipment/equipment');">仪器信息</a></li>
						
				</ul>
			</div>
			<div class="div2">
				<div class="div4"></div>
				制度管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:/equipment/index.php/Admin/Regulation/regulation;"
						onClick="openurl('/equipment/index.php/Admin/Regulation/regulation');">制度文件</a></li>
				</ul>
			</div>
			
			<div class="div2">
				<div class="div4"></div>
				文档管理
			</div>
			<div class="div3">

				<ul>
					<li><a class="a" href="javascript:/equipment/index.php/Admin/File/doucument;"
						onClick="openurl('/equipment/index.php/Admin/File/doucument');">文档信息</a></li>
				</ul>

			</div>
			<div class="div2">
				<div class="div4"></div>
				讨论区管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('/equipment/index.php/Admin/Message/conmmunication');">留言管理</a></li>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('/equipment/index.php/Admin/Message/user');">用户禁言</a></li>
				</ul>
			</div>
			<div class="div2">
				<div class="div4"></div>
				管理员信息
			</div>
			<div class="div3">
				<li><a class="a" href="javascript:/equipment/index.php/Admin/Index/admin;"
					onClick="openurl('/equipment/index.php/Admin/Index/admin_list');">查看管理员</a></li>
			</div>
			<a class="a1" href="/equipment/index.php/Admin/Login/login_out"><div class="div2">
					<div class="tcht"></div>
					退出后台
				</div></a>
		</div>
	</div>

	<div class="right">
		<iframe id="rightFrame" name="rightFrame" width="100%" height="100%"
			scrolling="auto" marginheight="0" marginwidth="0" align="center"
			style="border: 0px solid #CCC; margin: 0; padding: 0;"></iframe>
	</div>
</body>
</html>