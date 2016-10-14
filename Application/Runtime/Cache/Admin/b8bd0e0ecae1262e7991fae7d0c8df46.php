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
			<a href="admin_list.html" target="mainCont" title="Ghost">
				管理员：Ghost</a> 
		</div>
	</div>
	<div class="left">
		<div class="div1">
           <div class="div2">
				<div class="spgl"></div>
				首页管理
			</div>
			<div class="div3">
				<li><a class="a" href="javascript:void(0);"
					onClick="openurl('videoQuery.html');">首页链接</a></li>
			</div>
			<div class="div2">
				<div class="spgl"></div>
				新闻通知管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('documentQuery.html');">所有新闻</a></li>
				</ul>
			</div>
			<div class="div2">
				<div class="spgl"></div>
				仪器管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('classQuery.html');">仪器信息</a></li>
						
				</ul>
			</div>
			<div class="div2">
				<div class="yhgl"></div>
				制度管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('studentQuery.html');">学生管理</a></li>
				</ul>
			</div>
			
			<div class="div2">
				<div class="gggl"></div>
				文档管理
			</div>
			<div class="div3">

				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('deletecomment.html');">评价删除</a></li>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('useredit.html');">用户禁言</a></li>
				</ul>

			</div>
			<div class="div2">
				<div class="pjgl"></div>
				讨论区管理
			</div>
			<div class="div3">
				<ul>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('afficheQuery.html');">评价删除</a></li>
					<li><a class="a" href="javascript:void(0);"
						onClick="openurl('afficheAdd.html');">用户禁言</a></li>
				</ul>
			</div>
			<a class="a1" href="login.html"><div class="div2">
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