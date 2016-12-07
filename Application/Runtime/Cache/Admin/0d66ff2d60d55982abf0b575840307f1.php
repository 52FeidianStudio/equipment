<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>新闻</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/news.css" />
</head>
<body>
    <div class="contant">
        <div class="title">
                <font color="#777777"><strong>用户名称：</strong></font>
                <a href="/zky/index.php/Admin/Index/studentdetail"><?php echo (session('username')); ?></a>
        </div>
        <div class="row">
                <table class="table">
                    <tr>
                        <td>
                            <a href="/zky/index.php/Admin/Inform/add"><button>写通知</button></a>
                        </td>
                    </tr>
                </table>
        </div>
        <div class="row">
            <table class="table">
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td>
                                    <a href="/zky/index.php/Admin/Inform/showitems/id/<?php echo ($vo["id"]); ?>"> <?php echo ($vo["title"]); ?>  <?php echo ($vo["date"]); ?></a>
                                </td>
                		        <th>
                                    <button><a href="/zky/index.php/Admin/Inform/do_delete/id/<?php echo ($vo["id"]); ?>">删除</a></button>
                                </th>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </div>
</body>
</html>