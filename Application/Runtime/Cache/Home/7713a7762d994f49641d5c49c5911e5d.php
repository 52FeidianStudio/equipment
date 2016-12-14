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
		<link rel="stylesheet" type='text/css' href="/zky/Public/Css/showitems.css" />
		<script type="text/javascript" src="/zky/Public/Js/jquery-1.8.3.min.js"></script>
		<script src="/zky/Public/Js/public.js"></script>
		<script src="/zky/Public/Js/equipment.js"></script>
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
		<div id='main'>
			<div class="contain">
				<div id="main_navi">
						<a href="/zky/index.php/Home/Index/main">首页</a><span>---></span> <a href="/zky/index.php/Home/Equipment/equipment">仪器介绍</a>  <span>---></span>
							<?php if(($where) == "1"): ?><span>质谱仪器</span><?php endif; ?>
							<?php if(($where) == "2"): ?><span>色谱仪器</span><?php endif; ?>
							<?php if(($where) == "3"): ?><span>光谱仪器</span><?php endif; ?>
							<?php if(($where) == "4"): ?><span>生化分离分析仪器</span><?php endif; ?>
							<?php if(($where) == "5"): ?><span>显微镜及图像仪</span><?php endif; ?>
							<?php if(($where) == "6"): ?><span>品质分析仪器</span><?php endif; ?>
							<?php if(($where) == "7"): ?><span>其他</span><?php endif; ?><br />
				</div>
				<div id="eqListShow">
	    			<table >
						<!-- <a href="/zky/Uploads<?php echo ($data["imagicaddress"]); ?>" target = "_blank"> -->
						<img src="/zky/Uploads<?php echo ($data["imagicaddress"]); ?>"  id = "pic" /> <!-- </a> -->
						<tr>
							<th>
								编号：
							</th>
							<td>
								<?php echo ($data["eid"]); ?>
							</td>
						</tr>
						<tr>
							<th>
								资产编号：
							</th>
							<td>
								<?php echo ($data["eoutid"]); ?>
							</td>
						</tr>
						<tr>
							<th>
								名称：
							</th>
							<td>
								<?php echo ($data["ecname"]); ?>
							</td>
						</tr>
						<tr>
							<th>
								型号：
							</th>
							<td>
								<?php echo ($data["etype"]); ?>
							</td>
						</tr>
						<tr>
							<th>
								单价：
							</th>
							<td>
								<?php echo ($data["eprice"]); ?>
							</td>
						</tr>
						<tr>
							<th>
								现状：
							</th>
							<td>
								<?php echo ($data["now"]); ?>
							</td>
						</tr>
						<tr>
							<th>
								领用单位：
							</th>
							<td>
								<?php echo ($data["eblong"]); ?>
							</td>
						</tr>
						<tr>
							<th>
								存放地：
							</th>
							<td>
								<?php echo ($data["elocation"]); ?>
							</td>
						</tr>
						<tr>
							<th>
								供应商：
							</th>
							<td>
								<?php echo ($data["ecmanufactor"]); ?>
							</td>
						</tr>
						
						<tr>
							<th>
								简介
							</th>
							<td>
								<?php echo ($data["introduction"]); ?>
							</td>
						</tr>
						<hr>
						<?php for($k = 0; $k < $data['count'];$k++){ ?>
	                        <tr>
	                            <th>特点
	                                <?php echo $k+1; ?>
	                            </th>
	                            <td>
	                                <?php echo $data['management'][$k]['title']; ?>
	                            </td>
	                        </tr>
	                        <hr>
	                        <tr>
	                            <th>特点
	                                <?php echo $k+1; ?>
	                                详细介绍</th>
	                            <td>
	                                <?php echo $data['management'][$k]['content']; ?>
	                            </td>
	                        </tr>
	                        <hr>
	                    <?php } ?>
	                </table>
	                </div>
			</div>
		</div>
		
	</body>
</html>