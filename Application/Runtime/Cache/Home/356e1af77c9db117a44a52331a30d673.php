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
		            账号: 
		            	<span >
		                	<input class="inputBox" type="text" id="l_txtName" placeholder="账号" />
		            	</span>
		        </div>
		        <div class="row">
		            密码:
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
		<div id='main' style="height:885px; ">
			<div class="contain" style="height:885px; ">
				<div id="main_navi">
						<a href="/zky/index.php/Home/Index/main">首页</a><span><span>--->仪器介绍</span> </span><br />
				</div>
				
				<div id='sl_na'>
					<div id='inclu'>
						<a href="/zky/index.php/Home/Equipment/showclass/id/1" ><p >质谱仪器</p></a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/2" ><p>色谱仪器</p></a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/3" ><p>光谱仪器</p></a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/4" >生化分离<br />分析仪器</a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/5" >显微镜<br />及图像仪</a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/6" >品质<br />分析仪器</a>
						<a href="/zky/index.php/Home/Equipment/showclass/id/7" ><p>其他</p></a>
						
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
					<div id="page">共有<?php echo ($count); ?>个仪器</div>
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="eqsl">
							<table >
								<tr>
									<td><a href="/zky/index.php/Home/Equipment/showitems/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["ecname"]); ?></a></td>
								</tr>
							</table>
							<table>
								<tr> 
									<td><img src="/zky/Uploads<?php echo ($vo["imagicaddress"]); ?>" alt="无图片" /></td>
									 <td>
									 	<table id="showr">
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
							<table style="text-overflow :ellipsis;height: 12px;width: 250px;margin: 0 auto 0 auto;">	
								<tr>
									<td style="text-indent: 20px;font-size: 10px;"><?php echo ($vo["introduction"]); ?></td>
								</tr>
							</table>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>

					<div id="page"><?php echo ($show); ?></div>
				</div>
			</div>
		</div>
		
	</body>
</html>