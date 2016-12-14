<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/update3.css" />
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

    <form action = "/zky/index.php/Admin/About/update1/id/<?php echo ($id); ?>" method="post">
        <div class="row">
        <div class = "conInput">
            <span > 信息1： </span> <input type="text" name = "position" id = "position" value = "<?php echo $data['position'] ?>" /><br>
            <span >信息1详述：</span>
            <input type="text" name = "name" id = "name" value = "<?php echo $data['name'] ?>"/><br>
            <span >信息2：</span>
            <input type="text" name = "responsibility" id = "responsibility" value = "<?php echo $data['responsibility'] ?>"/><br>
            <span >信息2详述：</span>
            <textarea type="text" name = "responsible" id = "responsible" style=" width: 200px;height: 80px;word-break:break-all"> <?php echo ($data["responsible"]); ?>
            </textarea>
            <br><br>
            <button>修改</button>
        </div>
        </div>
    </form>
</body>
</html>