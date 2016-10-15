<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>通告</title>
</head>
<script>
    function hahaha(){
        mya.blur(function(){
            alert("1");
        });
    }
</script>
<body>

    <!-- 管理员（教师用户通知模块）
    功能是：展示所有的通知和上传通知
     -->

	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="" name = "mya" onclick = "hahaha()"><p><?php echo ($vo["title"]); ?></a>　　<?php echo ($vo["date"]); ?></p>
        <!-- 点击它发生一个事件，窗口弹出显示通知 -->
		<hr><?php endforeach; endif; else: echo "" ;endif; ?>
    <form action="/zky/index.php/Admin/Inform/do_show" method="post" name="myForm">
        通告名称：<input type="text" name="title" value="" /><br /><br />
        通告内容：<textarea name="content"></textarea><br /><br />
        <input type="submit" name="submit" value="提交" />
    </form>
</body>
</html>