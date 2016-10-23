<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="Css/style.css" />
    <script type="text/javascript" src="Js/jquery2.js"></script>
    <script type="text/javascript" src="Js/jquery2.sorted.js"></script>
    <script type="text/javascript" src="Js/bootstrap.js"></script>
    <script type="text/javascript" src="Js/ckform.js"></script>
    <script type="text/javascript" src="Js/common.js"></script>

    <style type="text/css">
        body {
            font-size: 20px;
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        table{
            margin:10px 2.5%; 
            width: 95%;
            border: 2px solid #2a8ba7;
            border-radius: 5px;
        }
        .panel{
            width: 100%;
            border: none;
            box-shadow: none;
        }
        #p_header{
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
            border-color: #eff2f7;
            font-size: 16px;
            font-weight: 300;
        }
       /*  #p_header th{
           border-color: #eff2f7;
           font-size: 16px;
           margin-bottom: 30px;
           margin-right: 30px;
           width: ;
           font-weight: 300;
       } */
       tr{
        width: 100%;
       }
       #contant{
        width: 70%;
       }
       td{
        padding: 10px;
       }
       td button,#buttom button{
        display: block;
        width: 75px;
        float: right;
        margin-right: 20px;
        border-radius: 4px;
       }
       #buttom button{
        margin:0 5% 5px ;
       }
        

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
    <table>
        <div class='panel'>
            <div id='p_body'>
                <volist name = "data" id = "vo">
                    <tr>
                        <td>账　号：</td>
                        <td><?php echo (session('name')); ?></td>
                    </tr>
                    <tr>
                        <td>用户名：</td>
                        <td><?php echo (session('username')); ?></td>
                    </tr>
                    <tr>
                        <td>请输入更改之后的密码：</td>
                        <td><form action="/zky/index.php/Admin/Index/dopass_update" method = "post"><input type="text" name = "password"></td>
                    </tr>
                    <tr>
                        <td>请重新输入密码：</td>
                        <td><input type="text" name = "repassword"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type = "submit">提交</button></td>
                        <td><button type = "reset">重置</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
            </div>
        </div>
    </table>
</body>
</html>