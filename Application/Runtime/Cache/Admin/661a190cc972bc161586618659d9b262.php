<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/equipment/Uploads/Css/public.css" />
</head>
<body>
     <table>
        <div class='panel'>
            <div id='p_body'>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo (session('name')); ?></td>
                        <td><?php echo (session('username')); ?></td>
                        <td><a href="/equipment/index.php/Admin/Message/studenttail/id/<?php echo ($vo["id"]); ?>"><button>详细信息</button></a></td>
                        <td><a href="/equipment/index.php/Admin/Index/pass_update"><button>修改密码</button></a></td>
                    </tr>
                
            </div>
        </div>
    </table>
    <table>
        <div class='panel'>
            <div id='p_body'>
                    <tr>
                        <td>工号</td>
                        <td>用户名</td>
                        <td></td>
                    </tr>
            </div>
        </div>
    </table>
    <table>
        <div class='panel'>
            <div id='p_body'>
                <volist name = "data" id = "vo">
                    <tr>
                        <td><?php echo ($vo["username"]); ?></td>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td><a href="/equipment/index.php/Admin/Message/studenttail/id/<?php echo ($vo["id"]); ?>"><button>详细信息</button></a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </table>
</body>
</html>