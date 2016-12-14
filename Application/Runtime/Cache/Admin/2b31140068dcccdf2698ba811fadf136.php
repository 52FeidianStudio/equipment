<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/aboutus.css" />
    <style type="text/css">
    </style>
</head>
<body>
            
        <div class="row">
        当前登录管理员
        <table > 
        
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (session('name')); ?> &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo (session('username')); ?> </td>
                </tr>
        </table>
    
    </div>
    <div class="row">
        <ul >
            <h2>　植科院公共平台目前的组织管理结构如下</h2>
            <?php if(is_array($data0)): $i = 0; $__LIST__ = $data0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/zky/Uploads/pic/na.png" alt="" />　<span class="na"><?php echo ($vo["position"]); ?>  <?php echo ($vo["name"]); ?></span></li>
                <li><img src="/zky/Uploads/pic/job.png" alt="" />　<span class="inf"><?php echo ($vo["responsibility"]); ?>    <?php echo ($vo["responsible"]); ?></span></li>
                <li>
                    <?php if(($vo["id"]) > $min): ?><span><a href="/zky/index.php/Admin/About/higher/id/<?php echo ($vo["id"]); ?>" id='login'><button>上移</button></a></span><?php endif; ?>
                    <?php if(($vo["id"]) < $max): ?><span><a href="/zky/index.php/Admin/About/lower/id/<?php echo ($vo["id"]); ?>" id='login'><button>下移</button></a></span><?php endif; ?>
                    <span><a href="/zky/index.php/Admin/About/delete1/id/<?php echo ($vo["id"]); ?>" id='login'><button>删除</button></a></span>
                    <span><a href="/zky/index.php/Admin/About/update3/id/<?php echo ($vo["id"]); ?>" id='login'><button>修改</button></a></span>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul> 
        <br>
    </div>
    <form action = "/zky/index.php/Admin/About/add1" method="post">
        <div class="row">
            <div class = "conInput">   
            <span >信息1： </span>
            <input type="text" name = "position" id = "position" value = "平台主任"/> <br>
            <span >信息1详述：</span>
            <input type="text" name = "name" id="name" value = "张三"/><br>
            <span >信息2：</span>
            <input type="text" name = "responsibility" id = "responsibility" value = "职责"/><br>
            <span >信息2详述：</span>  
            <textarea name="responsible" id = "responsible" value = "负责中心实验平台的管理与运营"></textarea>
            <button>添加</button>
        </div></div>
    </form>
    <div class="row">
        <h2>其他信息修改</h2>
        <ul >
            <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class='add'><img src="/zky/Uploads/pic/address.png" alt="" />　<?php echo ($vo["adress"]); ?>:<?php echo ($vo["addressname"]); ?></li>
                <li class='add'><img src="/zky/Uploads/pic/person.png" alt="" />　<?php echo ($vo["people"]); ?>：<?php echo ($vo["peoplename"]); ?></li>
                <li class='add'><img src="/zky/Uploads/pic/zip_code.png" alt="" />　<?php echo ($vo["post"]); ?>：<?php echo ($vo["postid"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <form action = "/zky/index.php/Admin/About/update2" method="post">
        <div class="row">
        <div class = "conInput">   
            <span > 信息1： </span> <input type="text" name = "adress" id = "adress" value = "联系地址"/><br>
            <span >信息1详述：</span>
            <input type="text" name = "addressname" id = "addressname" value = "华中农业大学主楼东附楼二楼"/><br>
            <span >信息2：</span>
            <input type="text" name = "people" id = "people" value = "联系人"/><br>
            <span >信息2详述：</span>
            <input type="text" name = "peoplename" id = "peoplename" value = "李老师"/><br>    
            <span >信息3：</span> 
            <input type="text" name = "post" id = "post" value = "邮编"/><br>
            <span >信息3详述：</span>
            <input type="text" name = "postid" id = "postid" value="430070" />
            <button>修改</button>
        </div></div>
    </form>
</body>
</html>