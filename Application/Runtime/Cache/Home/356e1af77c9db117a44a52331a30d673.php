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
		<link rel="stylesheet" href="/zky/Public/Css/public.css" />
		<link rel="stylesheet" type='text/css' href="/zky/Public/Css/equipiment.css" />
		<script type="text/javascript" src="/zky/Public/Js/jquery-1.8.3.min.js"></script>
		<script src="/zky/Public/Js/public.js"></script>
		<!-- <script src="/zky/Public/Js/equipment.js"></script> -->
		<script>
			var arr=new Array();
			function f1(){
				$.post("/zky/index.php/Home/Login/do_login", {
					username:$("#l_txtName").val(),
					password:$("#l_txtPwd").val()
				},function(text){
					if(text=="pass"){
						window.location.href="/zky/index.php/Home/Equipment/equipment";
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
		<style type="text/css">
			.lalala{
				font-size: 15px;
			}
			.hahaha{
				font-size: 10px;
			}
		</style>
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
		<div id='main' style="height:815px; ">
			<div class="contain" style="height:815px; ">
				<div id="main_navi">
						<a href="/zky/index.php/Home/Index/main">首页</a><span><span>--->仪器介绍</span> </span><br />
				</div>
				
				<div id='sl_na'>
					<div id='inclu'>
						<a href="/zky/index.php/Home/Equipment/showclass/id/1" >质谱仪器</a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/2" >色谱仪器</a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/3" >光谱仪器</a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/4" >生化分离<br />分析仪器</a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/5" >显微镜<br />及图像仪</a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/6" >品质<br />分析仪器</a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/7" >其他</a>
						
						<form action="/zky/index.php/Home/Equipment/search" id="search" method="post">
							<input type="text" style="obrde:r1px solid black;border-radius:3px;" name="search1"/>
							<button type="submit">搜索</button><br />
							<input type="radio" name="condition" value="1" checked/>所有　
							<input type="radio" name="condition" value="2"/>设备名称　
							<input type="radio" name="condition" value="3"/>设备编号　
						</form>
					</div>
				</div>
				<div id="eqlist">
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="eqsl">
							<table >
								<tr><br />
									<td><a href="/zky/index.php/Home/Equipment/showitems/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["ecname"]); ?></a></td>
								</tr>
								<tr>
									<table>
										<tr> <td><img src="/zky/Uploads<?php echo ($vo["imagicaddress"]); ?>" alt="无图片" /></td>
											 <td>
											 	<table>
											 		<tr> 
											 			<th class = "lalala">设备编号：</th>   
											 			<td class = "hahaha"><?php echo ($vo["eid"]); ?></td>  
											 		</tr>
													<tr> 
														<th class = "lalala">存放地点：</th>   
														<td class = "hahaha"><?php echo ($vo["elocation"]); ?></td> 
													</tr>
													<tr> 
														<th class = "lalala">所属单位：</th>   
														<td class = "hahaha"><?php echo ($vo["eblong"]); ?></td> 
													</tr>
													<tr>
												    	<th class = "lalala">状　　态：</th>   
												    	<td class = "hahaha"><?php echo ($vo["now"]); ?></td> 
												    </tr>
												</table>
											 </td> 
										</tr>
										
									</table>	
								</tr>
								<tr>
									<td style="text-indent: 20px;font-size: 15px;"><?php echo ($vo["introduction"]); ?></td>
								</tr>
							</table>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>

					<div id="page"><?php echo ($show); ?></div>
				</div>
			</div>
		</div>
		<div id="cf" style="height:57px; "></div>
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