<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>仪器介绍</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />
		<meta name="Author" content="网页作者" /> 
		<meta name="Copyright" content="网站版权" /> 
		<meta name="keywords" content="网站关键字" />
		<meta name="description" content="网站描述" />
		<link rel="stylesheet" href="./zhihu-css.css" />
		<link rel="stylesheet" href="/zky/Public/Css/public.css" />
		<link rel="stylesheet" type='text/css' href="/zky/Public/Css/equipiment.css" />
		<script type="text/javascript"> 
  			window.onload = function () 
 			{ 
   				flag = 0; 
  				 obj1 = document.getElementById("picshow"); 
  				 obj2 = document.getElementsByTagName("li"); 
  				 obj2[0].style.backgroundColor = "#666666";
  				 //默认被选中颜色 
   				time = setInterval("turn();", 5000); 
  				 obj1.onmouseover = function () { 
  				  clearInterval(time); 
   					} 
   				obj1.onmouseout = function () { 
   					 time = setInterval("turn();", 6000); 
  					 } 
 
   				for (var num = 0; num < obj2.length; num++) { 
    				obj2[num].onmouseover = function () { 
     					turn(this.innerHTML); 
     					clearInterval(time); 
   					 } 
    				obj2[num].onmouseout = function () { 
     					time = setInterval("turn();", 6000); 
    				} 
  				 } 
   //延迟加载图片，演示的时候，使用本地图片
   //上线后请改为二级域名提供的图片地址 
   				document.getElementById("second").src = "/zky/Public/Pic/lab.jpg";
   //使用图片宽660，高550 
   				document.getElementById("third").src = "/zky/Public/Pic/phone.jpg"; 
   				document.getElementById("four").src = "/zky/Public/Pic/aite.jpg";
   				document.getElementById("third").src = "/zky/Public/Pic/login.png"; 
   				document.getElementById("four").src = "/zky/Public/Pic/top.jpg";
   				document.getElementById("third").src = "/zky/Public/Pic/lab.jpg"; 
   				document.getElementById("four").src = "/zky/Public/Pic/phone.jpg";
  			} 
  			function turn(value) { 
   				if (value != null) 
   					{ 
    					flag = value - 2; 
   					} 
   				if (flag < obj2.length - 1) 
   					flag++; 
   				else 
    				flag = 0; 
   				obj1.style.top = flag * (-550) + "px"; 
   				for (var j = 0; j < obj2.length; j++) 
   				{ 
    				obj2[j].style.backgroundColor = "#ffffff"; 
   				} 
   				obj2[flag].style.backgroundColor = "#666666"; 
  			} 
 </script> 
	</head>
	<body>
		<div id='header'>
			<div class="contain">
				<img src="/zky/Public/Pic/top.jpg" alt="" style="width:100%;" />
			</div>
		</div>
		<div id='navi'>
			<div class="contain">
				<a href="#" class="navi_a">首页</a>
				<a href="#" class="navi_a">新闻通知</a>
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
		</div>
		<div id='main'>
			<div class="contain">
				<div id="main_navi">
						<a href="">首页</a>--->仪器介绍
				</div>
				<div>
					<div id='list_nav'>
						<ul>
							<li>1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
							<li>6</li>
							<li>7</li>
							<li>8</li>
						</ul>
					</div>
					<div id='picshow'>
							<a target="_blank" href="#"><img src="/zky/Public/Pic/top.jpg" /></a> 
   							<a target="_blank" href="#"><img id="second" /></a> 
   							<a target="_blank" href="#"><img id="third" /></a> 
   							<a target="_blank" href="#"><img id="four" /></a> 
   							<a target="_blank" href="#"><img id="five" /></a>
   							<a target="_blank" href="#"><img id="six" /></a>
   							<a target="_blank" href="#"><img id="seven" /></a>
   							<a target="_blank" href="#"><img id="eight" /></a>
					</div>
				</div>
			</div>
		</div>
		<div id='footer'>
			<div class="contain">
				<p class="footer_p">通讯地址：xxxxxxxxxxxxxxxxx</p>
				<p class="footer_p">邮政编码：xxxxxx</p>
				<p class="footer_p">联系电话：xxxxxxx xxxxxxxxxx xxxxxxxxxxxx</p>
				<hr />
				<p class="footer_p">@xxxxxxxxxxxxxx  <a href="">管理</a></p>
			</div>
		</div>
	</body>
</html>