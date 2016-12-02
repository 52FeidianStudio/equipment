<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
    <style type="text/css">
        .hahaha{
            *
        }
    </style>
</head>
<body>

    <div class="row1"><font color="#777777">
        <strong>管理员：<?php echo (session('username')); ?></strong></font>
    </div>
    <div class="row">
        <div id="buttom" align="center">
            <form action="/zky/index.php/Admin/Index/addlinks" method="post">
                名称： <input type="type" name="name"> <br><br>
                地址： <input type="type" name="address">  <br><br>
                <input type="radio" name="condition" value="0" checked/>实验预约系统
                <input type="radio" name="condition" value="1"/>学院内链接
                <input type="radio" name="condition" value="2"/>校内链接
                <input type="radio" name="condition" value="3"/>校外链接　<br><br>
                <button style="text-align: right">添加</button>
            </form>
        </div>
        <br><br><br>
        <div class='panel'>
        <table class = "hahaha">
            <div id='p_body'>
                <?php if(is_array($data0)): $i = 0; $__LIST__ = $data0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <th><h3>实验仪器预约系统</h3></th>
                    </tr>
                    <tr>
                        <th><?php echo ($vo["name"]); ?>></th>
                        <th><?php echo ($vo["address"]); ?></th>
                        <th> <a href="/zky/index.php/Admin/Index/delete_links/id/<?php echo ($vo["id"]); ?>">删除</a></th>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </table>
        <br><br>
        <table class = "hahaha">
            <div id='p_body'>
                    <tr>
                        <th><h2>相关链接</h2></th>
                    </tr>
                    <tr>
                        <th><h3>学院内链接</h3></th>
                    </tr>
                <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <th><?php echo ($vo["name"]); ?></th>
                        <th><?php echo ($vo["address"]); ?></th>
                        <th> <a href="/zky/index.php/Admin/Index/delete_links/id/<?php echo ($vo["id"]); ?>">删除</a></th>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </table>
        <br><br>
        <table class = "hahaha">
            <div id='p_body'>
                <tr>
                    <th><h3>校内链接</h3></th>
                </tr>
                <?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <th><?php echo ($vo["name"]); ?></th>
                        <th><?php echo ($vo["address"]); ?></th>
                        <th> <a href="/zky/index.php/Admin/Index/delete_links/id/<?php echo ($vo["id"]); ?>">删除</a></th>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </table>
        <br><br>
        <table class = "hahaha">
            <div id='p_body'>
                <tr>
                    <th><h3>校外链接</h3></th>
                </tr>
                <?php if(is_array($data3)): $i = 0; $__LIST__ = $data3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <th><?php echo ($vo["name"]); ?></th>
                        <th><?php echo ($vo["address"]); ?></th>
                        <th> <a href="/zky/index.php/Admin/Index/delete_links/id/<?php echo ($vo["id"]); ?>">删除</a></th>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </table>
    </div>
        

    </div>  
</body>
</html>