<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>关于我们</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />
		<meta name="Author" content="网页作者" /> 
		<meta name="Copyright" content="网站版权" /> 
		<meta name="keywords" content="网站关键字" />
		<meta name="description" content="网站描述" />
		<link rel="stylesheet" href="/zky/Public/Css/public.css" />
		<link rel="stylesheet" href="/zky/Public/Css/about_us.css" />
		<script type="text/javascript" src="/zky/Public/Js/jquery-3.1.1.min.js"></script>
		<script src="/zky/Public/Js/public.js"></script>
		<script>
			function f1(){
				$.post("/zky/index.php/Home/Login/do_login", {
					username:$("#l_txtName").val(),
					password:$("#l_txtPwd").val()
				},function(text){
					if(text=="pass"){
						window.location.href="/zky/index.php/Home/Inform/news";
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
		</script>
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
						&nbsp;<a href="/zky/index.php/Home/Index/main">首页</a><span>--->关于我们</span>
				</div>
				<ul id='show'>
						<h2>　植科院公共平台目前的组织管理结构如下</h2>
						<?php if(is_array($data0)): $i = 0; $__LIST__ = $data0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/zky/Public/pic/na.png" alt="" />　<span class="na"><?php echo ($vo["position"]); ?>  <?php echo ($vo["name"]); ?></span></li>
							<li><img src="/zky/Public/pic/job.png" alt="" />　<span class="inf"><?php echo ($vo["responsibility"]); ?>	<?php echo ($vo["responsible"]); ?></span></li>
							<br /><br /><br /><br /><?php endforeach; endif; else: echo "" ;endif; ?>
						<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class='add'><img src="/zky/Public/pic/address.png" alt="" />　<?php echo ($vo["adress"]); ?>:<?php echo ($vo["addressname"]); ?></li>
							<li class='add'><img src="/zky/Public/pic/person.png" alt="" />　<?php echo ($vo["people"]); ?>：<?php echo ($vo["peoplename"]); ?></li>
							<li class='add'><img src="/zky/Public/pic/zip_code.png" alt="" />　<?php echo ($vo["post"]); ?>：<?php echo ($vo["postid"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
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