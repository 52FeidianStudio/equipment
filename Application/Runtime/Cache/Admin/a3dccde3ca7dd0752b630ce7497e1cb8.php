<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
</head>
<body>
<table >
    <font color="#777777"><strong>管理员：<?php echo (session('username')); ?></strong></font>
    <div class='panel'>
        <thead>
        </thead>
        <div id='p_body'>
            <tr>
		        <td>1</td>
                <td id='contant'>复仇者联盟</td>
                <td>www.ahfoia.com</td>
                <td> <button type="submit">删除</button></a></td>
                <td> <button type="submit">修改</button></a></td>
            </tr>
		    <tr>
		        <td>2</td>
                <td id='contant'>北大教授讲座</td>
                <td>www.ahfoia.com</td>
                <td> <button type="submit">删除</button></a></td>
                <td> <button type="submit">修改</button></a></td>
            </tr>
        </div>
        
    </div>
    <div id="buttom" >
            <a href=""><button>添加</button></a>
        </div>
</table>
    
</body>
</html>