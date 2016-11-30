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
	<font color="#777777"><strong>管理员：<?php echo (session('username')); ?></strong></font>
    <table>
        <div class='panel'>
            <div id='p_body'>
                <tr>
                    <td>主题：</td>
                    <td><?php echo ($find['title']); ?></td>
                </tr>
			</div>
		</div>     
	</table>           
    <table>
        <div class='panel'>
            <div id='p_body'>
                <tr>
                   <td>详细内容：</td>
                   <td><?php echo ($find['content']); ?></td>
                </tr>
            </div>
        </div>
	</table>  
	<table>
        <div class='panel'>
            <div id='p_body'>
                <tr>
                    <td><?php echo ($find['user']['name']); ?>　　于<?php echo ($find['date']); ?>发布</td>
                    <td>已经有<?php echo ($count); ?>人关注</td>
                </tr>
            </div>
		</div>
	</table>
	<table>
		<tr>
			<td>添加回复</td>
		</tr>
		<tr>
			<td>
				<form action="/zky/index.php/Admin/Message/do_addanswer/id/<?php echo ($find['id']); ?>" method = "post">
					<textarea name="content" id = "content" value = "回复他/她"></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><button type = "submit">回复</button></form></td>
		</tr>
	</table>
	<table>
        <div class='panel'>
            <div id='p_body'>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($vo["user"]["name"]); ?>：</td>
						<td><?php echo ($vo["content"]); ?></td>　　　　
						<td></td>
						<td></td>
						<td><?php echo ($vo["date"]); ?></td>　
						<td><a href="/zky/index.php/Admin/Message/do_deleteanswer/id/<?php echo ($vo["id"]); ?>"><button>删除</button></a></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				<tr>
					<td><?php echo ($show); ?></td>
				</tr>
            </div>
        </div>
    </table>
</body>
</html>