<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>文档下载</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />
		<meta name="Author" content="网页作者" /> 
		<meta name="Copyright" content="网站版权" /> 
		<meta name="keywords" content="网站关键字" />
		<meta name="description" content="网站描述" />
		<link rel="stylesheet" href="./zhihu-css.css" />
		<link rel="stylesheet" type='text/css' href="/zky/Public/Css/main.css" />
		<link rel="stylesheet" href="/zky/Public/Css/public.css" />
		<script></script>
	</head>
	<body>
		<div id='header'>
			<div class="contain">
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
				<b>	　　　　　　　　　　　　　　　</b>
				<b style='line-height:60px;'>欢迎</b>
				<span style='line-height:60px;'><?php echo (session('username')); ?></span>
				<a href="/zky/index.php/Home/Login/login_out" style=''>退出</a>
			</div>
			</div>
		</div>
		<div id='main'>
			<div class="contain">
				<div id="main_navi">
						<a href="/zky/index.php/Home/Index/main">首页</a>--->文档下载
				</div>
				<div id="d_list">
					<h4>相关文件下载：</h4>
					<ul>
						<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
								<a href="/zky/Uploads<?php echo ($vo["address"]); ?>"><p><?php echo ($vo["realname"]); ?>　　<?php echo ($vo["date"]); ?></p></a><br />
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						<!--<li>xxxxyiqi1
							<li><a href=""></a></li>
							<li><a href=""></a></li>
						</li>
						<li>xxxxyiqi2
							<li><a href=""></a></li>
							<li><a href=""></a></li>
						</li>
						<li>xxxxyiqi3
							<li><a href=""></a></li>
							<li><a href=""></a></li>
						</li>
						<li>xxxxyiqi4
							<li><a href=""></a></li>
							<li><a href=""></a></li>
						</li>
						<li>xxxxyiqi5
							<li><a href=""></a></li>
							<li><a href=""></a></li>
						</li>-->
					</ul>
					<?php echo ($show); ?>
				</div>
			</div>
		</div>
		<div id='footer'>
			<div class="contain">
				<p class="footer_p">通讯地址：xxxxxxxxxxxxxxxxx</p>
				<p class="footer_p">邮政编码：xxxxxx</p>
				<p class="footer_p">联系电话：xxxxxxx xxxxxxxxxx xxxxxxxxxxxx</p>
				<hr />
				<<p class="footer_p">@xxxxxxxxxxxxxx  <a href="/zky/index.php/Admin/Index/admin">管理</a></p>
			</div>
		</div>
	</body>
</html>