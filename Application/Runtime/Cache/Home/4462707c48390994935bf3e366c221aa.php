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
		<link rel="stylesheet" href="./zhihu-css.css" />
		<link rel="stylesheet" type='text/css' href="/equipment/Public/Css/main.css" />
		<link rel="stylesheet" href="/equipment/Public/Css/public.css" />
		<script language =javascript >
 			var curIndex=0;
 			//时间间隔 单位毫秒
 			var timeInterval=1000;
 			var arr=new Array();
 			arr[0]="/equipment/Public/Pic/top.jpg";
 			arr[1]="/equipment/Public/Pic/lab.jpg";
 			arr[2]="/equipment/Public/Pic/Login.png";
			arr[3]="/equipment/Public/Pic/phone.jpg";
 			arr[4]="/equipment/Public/Pic/aite.jpg";
			arr[5]="/equipment/Public/Pic/top.jpg";
			arr[6]="/equipment/Public/Pic/top.jpg";
 			setInterval(changeImg,timeInterval);
 			function changeImg()
			{
   				var obj=document.getElementById("obj");
 				if (curIndex==arr.length-1) 
    			{
        			curIndex=0;
   				}
    			else
    			{
        			curIndex+=1;
    			}
    			obj.src=arr[curIndex];
			}
		</script>

	</head>
	<body>
		<div id='navi'>
			<div class="contain">
				<a href="#1" class="navi_a">首页</a>
				<a href="@@@#" class="navi_a">新闻通知</a>
				<a href="#" class="navi_a">仪器介绍</a>
				<a href="#" class="navi_a">规章制度</a>
				<a href="#" class="navi_a">文档下载</a>
				<a href="#" class="navi_a">讨论区</a>
				<a href="#" class="navi_a">关于我们</a>
				<b>	　　　　　　　　　　　　　　　</b>
				<b style='line-height:60px;'>欢迎</b>
				<span style='line-height:60px;'>ctc {$v.username}</span>
				<a href="#@" style=''>退出</a>
			</div>
		</div>
		<div id='header'>
			<div class="contain" >
				<img src="/equipment/Public/Pic/top.jpg" alt="" style="width:100%;" />
			</div>
		</div>
		
		<div id='main'>
			<div class="contain">
				<div id='left'>
					<div id='book'>
						<h1>　仪器预约系统</h1>
						　　　<a href="@!@!"　>单击进入预约系统</a>
					</div>
					<hr />
					<div id='relational_a'>
						<h2>　　相关链接</h2>
						<a href="#@#@@#" class="left_a">1lianjie</a>
						<a href="#" class="left_a">2lianjie</a>
						<a href="#" class="left_a">3lianjie</a>
						<a href="#" class="left_a">4lianjie</a>
						<a href="#" class="left_a">5lianjie</a>
						<a href="#" class="left_a">6lianjie</a>
						<a href="#" class="left_a">7lianjie</a>
						<a href="#" class="left_a">8lianjie</a>
						<a href="#" class="left_a">9lianjie</a>
						<a href="#" class="left_a">10lianjie</a>	
					</div>
				</div>
				<div id='right'>
					<div id='js'>
						<img src="1.jpg" style="width:100%;height:100%;" alt="" id="obj" />
					</div>
					zheshiyoubiandejieshao
				
				<div id='r_message'>
					<p>
						这里也是相关介绍
					</p>
				</div></div>
			</div>
		</div>
		<div id='footer'>
			<div class="contain">
				<p class="footer_p">通讯地址：xxxxxxxxxxxxxxxxx</p>
				<p class="footer_p">邮政编码：xxxxxx</p>
				<p class="footer_p">联系电话：xxxxxxx xxxxxxxxxx xxxxxxxxxxxx</p>
				<hr />
				<p class="footer_p">@xxxxxxxxxxxxxx　　	<a href="">管理</a></p>
			</div>
		</div>
	</body>
</html>