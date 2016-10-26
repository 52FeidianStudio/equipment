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
		<script src="/zky/Public/Js/equipment.js"></script>
	</head>
	<style type="text/css">
		td{
			width: 5%;
		}
	</style>
	<body>
		<!-- 这里是登录弹出窗口 -->
		<div id="LoginBox">
        <div class="row1">
            登录<a href="javascript:dataid(0)" title="关闭窗口" class="close_btn" id="l_closeBtn">×</a>
        </div>
        <div class="row">
            用户名: <span class="inputBox">
                <input type="text" id="l_txtName" placeholder="账号/邮箱" />
            </span><a href="javascript:dataid(0)" title="提示" class="warning" id="l_warn">*</a>
        </div>
        <div class="row">
            密&nbsp;&nbsp;&nbsp;&nbsp;码: <span class="inputBox">
                <input type="text" id="l_txtPwd" placeholder="密码" />
            </span><a href="javascript:dataid(0)" title="提示" class="warning" id="l_warn2">*</a>
        </div>
        <div class="row">
            <a href="/zky/index.php/Home/Login/do_login" id="l_loginbtn">登录</a>
        </div>
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
						<a href="/zky/index.php/Home/Index/main">首页</a><span><span>--->仪器介绍</span> </span><br />
				</div>
	    			<table>
						<a href="/zky/Uploads<?php echo ($data["imagicaddress"]); ?>" target = "_blank"><img src="/zky/Uploads<?php echo ($data["imagicaddress"]); ?>" class = "pic" width = "200" height = "200"/> </a>
						<tr>
							<td>
								编号：
							</td>
							<td>
								<?php echo ($data["eid"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								中文名称：
							</td>
							<td>
								<?php echo ($data["ecname"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								英文名称：
							</td>
							<td>
								<?php echo ($data["eename"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								型号：
							</td>
							<td>
								<?php echo ($data["etype"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								生产厂家：
							</td>
							<td>
								<?php echo ($data["ecmanufactor"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
							<td>
								<?php echo ($data["eemanufactor"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								出厂年月：
							</td>
							<td>
								<?php echo ($data["eoutdate"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								出厂编号：
							</td>
							<td>
								<?php echo ($data["eoutid"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								购买时间：
							</td>
							<td>
								<?php echo ($data["ebuydate"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								价格：
							</td>
							<td>
								<?php echo ($data["eprice"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								放置地点：
							</td>
							<td>
								<?php echo ($data["elocation"]); ?>
							</td>
						</tr>
						<tr>
							<td>
								简介
							</td>
							<td>
								<?php echo ($data["introduction"]); ?>
							</td>
						</tr>
						<hr>
						<?php for($k = 0; $k < $data['count'];$k++){ ?>
	                        <tr>
	                            <td>特点
	                                <?php echo $k+1; ?>
	                            </td>
	                            <td>
	                                <?php echo $data['management'][$k]['title']; ?>
	                            </td>
	                        </tr>
	                        <hr>
	                        <tr>
	                            <td>特点
	                                <?php echo $k+1; ?>
	                                详细介绍</td>
	                            <td>
	                                <?php echo $data['management'][$k]['content']; ?>
	                            </td>
	                        </tr>
	                        <hr>
	                    <?php } ?>
	                </table>
			</div>
		</div>
		<div id='footer'>
			<div class="contain">
				<p class="footer_p">通讯地址：华中农业大学主楼东附楼二楼</p>
				<p class="footer_p">邮政编码：430070</p>
				<hr />
				<p class="footer_p">@xxxxxxxxxxxxxx  <a href="/zky/index.php/Admin/Index/admin">管理</a></p>
			</div>
		</div>
	</body>
</html>