<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
	<head>
		<title>规章制度</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />
		<meta name="Author" content="网页作者" /> 
		<meta name="Copyright" content="网站版权" /> 
		<meta name="keywords" content="网站关键字" />
		<meta name="description" content="网站描述" />
		<link rel="stylesheet" href="./zhihu-css.css" />
		<link rel="stylesheet" type='text/css' href="/equipment/Public/Css/main.css" />
		<link rel="stylesheet" href="/equipment/Public/Css/public.css" />
		<script type="text/javascript" src="/equipment/Public/Js//jquery-1.8.3.min.js"></script>
		<script src="/equipment/Public/Js/public.js"></script>
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
            <a href="#" id="l_loginbtn">登录</a>
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
				<div id="main_navi">
						&nbsp;<a href="/equipment/index.php/Home/Index/main">首页</a><span>--->规章制度</span>
				</div>
				<div id="r_list">
					<div id="list">
						<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "暂时没有通知" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/equipment/index.php/Home/Regulation/showitems/id/<?php echo ($vo["id"]); ?>" class="news_list">
									<p><span><?php echo ($vo["title"]); ?></span>　　　　<t><?php echo ($vo["date"]); ?></t></p>
									<br />
								</a><?php endforeach; endif; else: echo "暂时没有通知" ;endif; ?>
					</div>
					<table >
				        <div class='panel'>
				            <div id='p_body'>
				                <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
				                    	<tr></tr>
				                        <td><?php echo ($k); ?></td>
				                        <td><a href="/equipment/Uploads/<?php echo ($vo["address"]); ?>" target = "_blank"><?php echo ($vo["realname"]); ?></a><td>
				                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
				                <tr>
				                    <td></td>
				                    <td></td>
				                    <td></td>
				                    <td><?php echo ($show); ?></td>
				                </tr>   
				            </div>
				        </div>
				    </table>
				</div>
			</div>
		</div>
		<div id='footer'>
			<div class="contain">
				<p class="footer_p">通讯地址：xxxxxxxxxxxxxxxxx</p>
				<p class="footer_p">邮政编码：xxxxxx</p>
				<p class="footer_p">联系电话：xxxxxxx xxxxxxxxxx xxxxxxxxxxxx</p>
				<hr />
				<p class="footer_p">@xxxxxxxxxxxxxx  <a href="/equipment/index.php/Admin/Index/admin">管理</a></p>
			</div>
		</div>
	</body>
</html>