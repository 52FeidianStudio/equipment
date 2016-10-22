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
        border-bottom: #ccc 0px dotted
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
    <table >
        <div class='panel'>
            <thead>
            </thead>
            <div id='p_body'>
                <tr>
                    <td>写通知</td>
                </tr>
                <tr>
                    <!-- 使用Ajax判断输入是否合法 -->
                    <td><form action="/zky/index.php/Admin/Inform/do_show" method="post" name="myForm">通知名称：</td>
                    <td><input type="text" name="title" value="" /></td>
                </tr>
                <tr>
                    <td>通告内容：</td>
                    <td><textarea name="content"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><div id="buttom" ><button type="submit"value="提交" />提交</button></div></form></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </div>
        </div>
    </table>
    <table >
        <div class='panel'>
            <thead>
                <!-- <div id='p_header'>
                <tr>
                                    <th>序号</th>
                        <th>链接名称</th>
                        <th>上传日期</th>
                        <th>管理菜单</th>
                    </tr>
                </div> -->
            </thead>
            <div id='p_body'>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        		        <td><a href="/zky/index.php/Admin/Inform/showitems/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></td>
                        <td><?php echo ($vo["date"]); ?></td>
                        <td><a href="/zky/index.php/Admin/Inform/do_delete/id/<?php echo ($vo["id"]); ?>"><button>删除</button></a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </table>
    
</body>
</html>