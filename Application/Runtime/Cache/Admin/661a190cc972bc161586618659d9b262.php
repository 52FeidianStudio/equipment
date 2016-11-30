<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
</head>
<body>
     <table>
        <caption>当前登录管理员</caption>
         <tr></tr>
        <tr></tr>
        <div class='panel'>
            <div id='p_body'>
                <tr>
                    <td><?php echo (session('name')); ?> &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo (session('username')); ?> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="/zky/index.php/Admin/Message/studenttail/id/<?php echo ($vo["id"]); ?>">详细信息</a>  &nbsp;&nbsp;&nbsp;&nbsp;   
                    <a href="/zky/index.php/Admin/Index/pass_update">修改密码</a></td>
                </tr>
            </div>
        </div>
    </table>
    <table>
                <caption>所有管理员用户信息</caption>
                <tr></tr>
                <tr></tr>
        <!-- <div class='panel'> -->
            <!-- <div id='p_body'> -->
                    <tr>
                        <th>工号</th>
                        <th>用户名</th>
                    </tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["username"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["name"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/zky/index.php/Admin/Message/studenttail/id/<?php echo ($vo["id"]); ?>">详细信息</a>
                        <?php if(($_SESSION['name']) == "2015317200402"): ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/zky/index.php/Admin/Index/unaddAdmin/id/<?php echo ($vo["id"]); ?>">撤销管理员</a><?php endif; ?>
                        <?php if(($_SESSION['name']) == ""): ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/zky/index.php/Admin/Index/unaddAdmin/id/<?php echo ($vo["id"]); ?>">撤销管理员</a><?php endif; ?>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- </div> -->
        <!-- </div> -->
    </table>
        <table>
                <caption>所有普通用户信息</caption>
                <tr></tr>
                <tr></tr>
                    <tr>
                        <th>工号</th>
                        <th>用户名</th>
                    </tr>
                <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["username"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["name"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/zky/index.php/Admin/Message/studenttail/id/<?php echo ($vo["id"]); ?>">详细信息</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if(($_SESSION['name']) == "2015317200402"): ?><a href="/zky/index.php/Admin/Index/addAdmin/id/<?php echo ($vo["id"]); ?>">添加为管理员</a><?php endif; ?>
                        <?php if(($_SESSION['name']) == ""): ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/zky/index.php/Admin/Index/unaddAdmin/id/<?php echo ($vo["id"]); ?>">撤销管理员</a><?php endif; ?>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- </div> -->
        <!-- </div> -->
    </table>
</body>
</html>