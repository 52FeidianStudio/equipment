<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>新闻</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
</head>
<body>
    <div class="contant">
    <div class="row1">
            <font color="#777777"><strong>用户名称：</strong></font>
            <a href="/zky/index.php/Admin/Index/studentdetail"><?php echo (session('username')); ?></a>
    </div>
    <div class="row2">
            <table >
                <div class='panel'>
                    <thead>
                    </thead>
                    <div id='p_body'>
                        <tr>
                            <td><span>写通知</span></td>
                        </tr>
                        <tr>
                            <!-- 使用Ajax判断输入是否合法 -->
                            <td><form action="/zky/index.php/Admin/Inform/do_show" method="post" name="myForm">通知名称：</td>
                            <td><input type="text" name="title" value="" /></td>
                        </tr>
                        <tr>
                            <td>通告内容:</td>
                            <td class='con'><textarea name="content"></textarea></td>
                        </tr>
                        <tr>
                            <td><div id="buttom" ><button type="submit"value="提交" />提交</button></div></form></td>
                        </tr>
                    </div>
                </div>
            </table>
        </div>
        <div class="3">
            <table >
                <div class='panel'>
                    </thead>
                    <div id='p_body'>
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                		        <td><a href="/zky/index.php/Admin/Inform/showitems/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></td>
                                <td><?php echo ($vo["date"]); ?></td>
                                <td><a href="/zky/index.php/Admin/Inform/do_delete/id/<?php echo ($vo["id"]); ?>"><button>删除</button></a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <thead>
                    </div>
                </div>
            </table>
        </div>
    </div>
</body>
</html>