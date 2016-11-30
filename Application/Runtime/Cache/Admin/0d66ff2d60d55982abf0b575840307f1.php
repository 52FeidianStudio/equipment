<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>新闻</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
</head>
<body>
    <div class="contant">
    <div class="row1">
            <font color="#777777"><strong>用户名称：</strong></font>
            <a href="/zky/index.php/Admin/Index/studentdetail"><?php echo (session('username')); ?></a>
    </div>
    <div class="row">
            <table >
                <div class='panel'>
                    <div id='p_body'>
                        <table>
                            <tr>
                                <td>
                                    <a href="/zky/index.php/Admin/Inform/add"><button>写通知</button></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            </table>
        </div>
        <div class="row">
            <table >
                <div class='panel'>
                    
                    <div id='p_body'>
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                		        <td>
                                    <a href="/zky/index.php/Admin/Inform/showitems/id/<?php echo ($vo["id"]); ?>">
                                    <span><?php echo ($vo["title"]); ?>             <?php echo ($vo["date"]); ?>                <a href="/zky/index.php/Admin/Inform/do_delete/id/<?php echo ($vo["id"]); ?>"><button>删除</button></a></span>
                                    </a>
                                <!-- </td>
                                <td> --><!-- <span></span> --><!-- </td>
                                <td> --></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </table>
        </div>
    </div>
</body>
</html>