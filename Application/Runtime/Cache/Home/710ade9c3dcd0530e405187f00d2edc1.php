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
	<body>
		<!-- 这里是登录弹出窗口 -->
		<div id="LoginBox">
        <div class="row1">
            登录<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="l_closeBtn">×</a>
        </div>
        <div class="row">
            用户名: <span class="inputBox">
                <input type="text" id="l_txtName" placeholder="账号/邮箱" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="l_warn">*</a>
        </div>
        <div class="row">
            密&nbsp;&nbsp;&nbsp;&nbsp;码: <span class="inputBox">
                <input type="text" id="l_txtPwd" placeholder="密码" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="l_warn2">*</a>
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
				<!-- <div id='sl_na'>
					<div id='inclu'>
					<a href="/zky/index.php/Home/Equipment/showclass/id/1" >质谱仪器</a>
					<a href="/zky/index.php/Home/Equipment/showclass/id/2" >色谱仪器</a>
					<a href="/zky/index.php/Home/Equipment/showclass/id/3" >光谱仪器</a>
					<a href="/zky/index.php/Home/Equipment/showclass/id/4" >生化分离分析仪器</a>
					<a href="/zky/index.php/Home/Equipment/showclass/id/5" >显微镜及图像仪</a>
					<a href="/zky/index.php/Home/Equipment/showclass/id/6" >品质分析仪器</a>
					<a href="/zky/index.php/Home/Equipment/showclass/id/7" >其他</a>
				</div>
				</div>
				 <div id="slide" >
				      <ul >
				          <li><img src="/zky/Public/Pic/top.jpg"  alt="" /></li>
				          <li><img src="/zky/Public/Pic/top.jpg" alt="" /></li>
				          <li><img src="/zky/Public/Pic/Login.png" alt="" /></li>
				          <li><img src="/zky/Public/Pic/phone.jpg" alt="" /></li>
				          <li><img src="/zky/Public/Pic/aite.jpg" alt="" /></li>
				          <li><img src="/zky/Public/Pic/top.jpg" alt="" /></li>
				          <li><img src="/zky/Public/Pic/phone.jpg" alt="" /></li>
				      </ul>
    			</div> -->
    			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table>
						<a href="/zky/Uploads<?php echo ($vo["imagicaddress"]); ?>" target = "_blank"><img src="/zky/Uploads<?php echo ($vo["imagicaddress"]); ?>" class = "pic" width = "200" height = "200"/> <br><br></a>
						仪器编号：<?php echo ($vo["id"]); ?> <br><br>
						仪器中文名称：<?php echo ($vo["ecname"]); ?><br><br>
						仪器英文名称：<?php echo ($vo["eename"]); ?><br><br>
						仪器型号：<?php echo ($vo["etype"]); ?><br><br>
						仪器放置地点：<?php echo ($vo["elocation"]); ?><br><br>
						<a href="/zky/index.php/Home/Equipment/showitems/id/<?php echo ($vo["id"]); ?>">详细信息</a>
						<hr>
	                </table><?php endforeach; endif; else: echo "" ;endif; ?>
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