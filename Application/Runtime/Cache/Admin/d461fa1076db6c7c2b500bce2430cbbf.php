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
        <font color="#777777"><strong>管理员：<?php echo (session('username')); ?></strong></font>
        <tr>
            <td>发布留言</td>
        </tr>
        <tr>
            <td>留言主题：<form action="/equipment/index.php/Admin/Message/do_addmessage" method = "post"></td>
            <td><input type="text" name = "title"></td>
        </tr>
        <tr>
            <td>详细内容：</td>
            <td><textarea name="content" id = "content"></textarea></td>
        </tr>
        <tr>
            <div id="buttom" >
                <td><button type = "submit">发布</button></a></td>
                <td><button type = "reset">取消</button></form></td>
            </div>
        </tr>
    </table>
    <table >
        <div class='panel'>
            <div id='p_body'>
                <tr>
                    <td>留言主题</td>
                    <td></td>
                    <td></td>
                </tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["title"]); ?></td>
                        <td><a href="/equipment/index.php/Admin/Message/do_see/id/<?php echo ($vo["id"]); ?>"><button>详细信息</button></a></td>
                        <td> <a href="/equipment/index.php/Admin/Message/do_delete/id/<?php echo ($vo["id"]); ?>"><button>删除</button></a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                    <td><?php echo ($show); ?></td>
                </tr>
            </div>
        </div>
    </table>
</body>
</html>