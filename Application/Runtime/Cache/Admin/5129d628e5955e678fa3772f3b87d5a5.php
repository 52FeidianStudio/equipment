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
    <font color="#777777"><strong>用户名称：</strong></font>
    <a href="/zky/index.php/Admin/Index/studentdetail"><?php echo (session('username')); ?></a>
    <table>
        <div class='panel'>
            <div id='p_body'>
                <tr>
                    <td>上传文件</td>
                </tr>
                <tr>
                    <td><form action="/zky/index.php/Admin/Regulation/do_show" enctype="multipart/form-data" method="post" ></td>
                    <td id = "lalala"><input type="file" name = "file"></td> 
                    <td></td>
                    <td></td>            
                    <div id="buttom" >
                        <td><button type = "submit">添加</button></form></td>
                    </div>
                </tr>
            </div>
        </div>
    <table>
    <table >
        <div class='panel'>
            <div id='p_body'>
                <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                        <td><?php echo ($k); ?></td>
                        <td><a href="/zky/Uploads<?php echo ($vo["address"]); ?>" target = "_blank"><?php echo ($vo["realname"]); ?></a></td>
                        <td> <a href="/zky/index.php/Admin/Regulation/delete/id/<?php echo ($vo["id"]); ?>"><button type="submit">删除</button></a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo ($show); ?></td>
                </tr>   
            </div>
        </div>
    </table>
</body>
</html>