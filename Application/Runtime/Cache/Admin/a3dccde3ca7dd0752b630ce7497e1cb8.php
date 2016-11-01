<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
</head>
<body>

    <div class="row1"><font color="#777777">
        <strong>管理员：<?php echo (session('username')); ?></strong></font>
    </div>
    <div class="row">
        <div class='panel'>
        <table >
            <div id='p_body'>
                <tr>
                    <td ><span>复仇者联盟</span></td>
                    <td><span>www.ahfoia.com</span></td>
                    <td> <button type="submit">删除</button></a></td>
                    <td> <button type="submit">修改</button></a></td>
                </tr>
    		    <tr>
                    <td ><span>北大教授讲座 </span></td>
                    <td><span>www.ahfoia.com</span></td>
                    <td> <button type="submit">删除</button></a></td>
                    <td> <button type="submit">修改</button></a></td>
                </tr>
            </div>
        </table>
    </div>
        <div id="buttom" >
            <a href=""><button>添加</button></a>
        </div>

    </div>  
</body>
</html>