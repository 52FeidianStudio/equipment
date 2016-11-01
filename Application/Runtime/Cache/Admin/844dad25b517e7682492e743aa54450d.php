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
        <font color="#777777"><strong>用户名称：<?php echo ($user["name"]); ?></strong></font> <br>
        <font color="#777777"><strong>用户状态：
            <?php if(($user['say']) == "1"): ?>禁言<?php endif; ?>
            <?php if(($user['say']) == "0"): ?>正常<?php endif; ?>
        </strong></font>
        <br><font color="#777777"><strong>发布的主题 共<?php echo ($countmessage); ?>条主题</strong></font> <br>
        <table >
            <div class='panel'>
                <div id='p_body'>
                        <tr>
                            <td>留言主题</td>
                            <td>留言内容</td>
                            <td>留言时间</td>
                        </tr>
                    <?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><a href="/zky/index.php/Admin/Message/do_see/id/<?php echo ($vo["message"]["id"]); ?>"><?php echo ($vo["title"]); ?></a></td>
                            <td><?php echo ($vo["content"]); ?></td>
                            <td><?php echo ($vo["date"]); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </table>
        <br><font color="#777777"><strong>他的回复 共<?php echo ($countanswer); ?>条回复</strong></font> <br>
        <table >
            <div class='panel'>
                <div id='p_body'>
                        <tr>
                            <td>留言主题</td>
                            <td>回复内容</td>
                            <td>回复时间</td>
                        </tr>
                    <?php if(is_array($answer)): $i = 0; $__LIST__ = $answer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><a href="/zky/index.php/Admin/Message/do_see/id/<?php echo ($vo["message"]["id"]); ?>"><?php echo ($vo["message"]["title"]); ?></a></td>
                            <td><?php echo ($vo["content"]); ?></td>
                            <td><?php echo ($vo["date"]); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </table>
</body>
</html>