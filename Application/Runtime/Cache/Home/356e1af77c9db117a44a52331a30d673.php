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
		<link rel="stylesheet" href="/equipment/Public/Css/public.css" />
		<link rel="stylesheet" type='text/css' href="/equipment/Public/Css/equipiment.css" />
		<script type="text/javascript" src="/equipment/Public/Js/jquery-1.8.3.min.js"></script>
		<script src="/equipment/Public/Js/public.js"></script>
		<script src="/equipment/Public/Js/equipment.js"></script>
		<script>
		/*	var arr=new Array();
        	arr[0]="/equipment/Public/Pic/top.jpg";
       	    arr[1]="/equipment/Public/Pic/lab.jpg";
        	arr[2]="/equipment/Public/Pic/Login.png";
        	arr[3]="/equipment/Public/Pic/phone.jpg";
        	arr[4]="/equipment/Public/Pic/aite.jpg";
        	arr[5]="/equipment/Public/Pic/top.jpg";
        	arr[6]="/equipment/Public/Pic/top.jpg";*/
        var oDiv = document.getElementById("slide");
        var oUl = document.getElementsByTagName("ul")[0];
        var oLi = document.getElementsByTagName("li");

        var speed=2;

        $("ul"[0]).innerHTML+=$("ul"[0]).innerHTML;
        
        function move(){
                if($("ul"[0]).offsetLeft <- oUl.offsetWidth/2){
                    oUl.style.left ='80';
                }
                if(oUl.offsetLeft>0) { 
                    oUl.style.left = -oUl.offsetWidth/2 + 'px';
                }
                    oUl.style.left = oUl.offsetLeft + speed + 'px';   //注意此处的speed
            } 
        var timer = setInterval(move, 30); 
            
        </script>	

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
            <a href="/equipment/index.php/Home/Login/do_login" id="l_loginbtn">登录</a>
        </div>
    </div>
		
		<!-- 结束登陆弹出窗口 -->
		<div id='header'>
			<div class="contain" >
				<img src="/equipment/Public/Pic/top.jpg" alt="" style="width:100%;" />
			</div>
		</div>
		<div id='navi'>
			<div class="contain">
				<a href="/equipment/index.php/Home/Index/main" class="navi_a">首页</a>
				<a href="/equipment/index.php/Home/Inform/news" class="navi_a">新闻通知</a>
				<a href="/equipment/index.php/Home/Equipment/equipment" class="navi_a">仪器介绍</a>
				<a href="/equipment/index.php/Home/Regulation/regulation" class="navi_a">规章制度</a>
				<a href="/equipment/index.php/Home/File/document" class="navi_a">文档下载</a>
				<a href="/equipment/index.php/Home/Message/conmunication" class="navi_a">讨论区</a>
				<a href="/equipment/index.php/Home/Index/about_us" class="navi_a">关于我们</a>
				<div id='na_log'>
					<span>欢迎</span>
					<?php if(($_SESSION['username']) == ""): ?><span><a href="#" id='login'>登录</a></span>
					<?php else: ?>	<SPAN><?php echo (session('username')); ?></SPAN>
						<a href="/equipment/index.php/Home/Login/login_out" style=''>退出</a><?php endif; ?>
				</div>
			</div>
		</div>
		<div id='main'>
			<div class="contain">
				 <div id="slide" onclick="alert(this.offsetWidth);">
       
        <!--when change next image:style="left: -(n-1)*800px;"-->
      <ul onclick="alert(this.offsetWidth);">
          <li><img src="/equipment/Public/Pic/top.jpg"  onclick="alert(this.offsetWidth);"alt="" /></li>
          <li><img src="/equipment/Public/Pic/top.jpg" alt="" /></li>
          <li><img src="/equipment/Public/Pic/Login.png" alt="" /></li>
          <li><img src="/equipment/Public/Pic/phone.jpg" alt="" /></li>
          <li><img src="/equipment/Public/Pic/aite.jpg" alt="" /></li>
          <li><img src="/equipment/Public/Pic/top.jpg" alt="" /></li>
      </ul>
      				<!-- <a href=""><img src="/equipment/Public/Pic/aite.jpg" style="width:100%;height:100%;" alt="" id="obj" /></a> -->
    			</div>
			</div>
		</div>
		<div id='footer'>
			<div class="contain">
				<p class="footer_p">通讯地址：华中农业大学主楼东附楼二楼</p>
				<p class="footer_p">邮政编码：430070</p>
				<hr />
				<p class="footer_p">@xxxxxxxxxxxxxx  <a href="/equipment/index.php/Admin/Index/admin">管理</a></p>
			</div>
		</div>
	</body>
</html>