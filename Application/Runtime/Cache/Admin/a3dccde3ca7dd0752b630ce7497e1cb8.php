<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/index_link.css" />
</head>
<body>
    <div class="title">
        <font color="#777777"><strong>管理员：</strong><?php echo (session('username')); ?></font>
    </div>
    <table>
        <div class="row">
                <br>
                <form action="/zky/index.php/Admin/Index/addlinks" method="post">
                    　名称： <input type="type" name="name"> 
                   　 地址： <input type="type" name="address"> 
                    　<input type="radio" name="condition" value="0" checked/>实验预约系统
                    　<input type="radio" name="condition" value="1"/>学院内链接
                    　<input type="radio" name="condition" value="2"/>校内链接
                    　<input type="radio" name="condition" value="3"/>校外链接　
                      <br><br>
                      <button type>添加</button>
                </form>
                <br>
        </div>
    </table>
        <div class="row">
            <table class = "table">
                    <?php if(is_array($data0)): $i = 0; $__LIST__ = $data0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <th><h3>实验仪器预约系统</h3></th>
                        </tr>
                        <tr>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["address"]); ?></td>
                            <th> <a href="/zky/index.php/Admin/Index/delete_links/id/<?php echo ($vo["id"]); ?>">删除</a></th>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
        <div class="row">
            <h2>相关链接</h2>
        </div>
        <div class="row">
            <table class = "table">
                        <tr>
                            <th><h3>学院内链接</h3></th>
                        </tr>
                    <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["address"]); ?></td>
                            <th> <a href="/zky/index.php/Admin/Index/delete_links/id/<?php echo ($vo["id"]); ?>">删除</a></th>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
        <div class="row">
            <table class = "table">
                    <tr>
                        <th><h3>校内链接</h3></th>
                    </tr>
                    <?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["address"]); ?></td>
                            <th> <a href="/zky/index.php/Admin/Index/delete_links/id/<?php echo ($vo["id"]); ?>">删除</a></th>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
        <div class="row">
            <table class = "table">
                    <tr>
                        <th><h3>校外链接</h3></th>
                    </tr>
                    <?php if(is_array($data3)): $i = 0; $__LIST__ = $data3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["address"]); ?></td>
                            <th> <a href="/zky/index.php/Admin/Index/delete_links/id/<?php echo ($vo["id"]); ?>">删除</a></th>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </table>
</body>
</html>