<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/equipment.css" />
</head>
<body>
    <div class="title">
        <font color="#777777"><strong>用户名称：</strong></font>
        <a href="/zky/index.php/Admin/Message/studenttdetail"><?php echo (session('username')); ?></a>
    </div>
    <div class="add">
        <form action="/zky/index.php/Admin/Equipment/search" id="search" method="post">
            <input type="text" style="border:1px solid black;border-radius:3px;" name="search1"/>
                            <button type="submit">搜索</button><br />
                            <input type="radio" name="condition" value="1" checked/>所有　
                            <input type="radio" name="condition" value="2"/>设备名称　
                            <input type="radio" name="condition" value="3"/>设备编号　
        </form><br>
        <table >
                 <tr><a href="/zky/index.php/Admin/Equipment/add"><button>添加</button></a></tr>
        </table><br>
    </div>
    <div class="row">
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table><br>
                        <tr>
                            <td><a href="/zky/index.php/Admin/Equipment/update/id/<?php echo ($vo["id"]); ?>"><button>修改</button></a></td>
                            <td><a href="/zky/index.php/Admin/Equipment/delete/id/<?php echo ($vo["id"]); ?>"><button>删除</button></a></td>
                            <th><a href="/zky/index.php/Admin/Equipment/add_management/id/<?php echo ($vo["id"]); ?>"><button>添加介绍</button></a></th>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td><a href="/zky/Uploads<?php echo ($vo["imagicaddress"]); ?>" target = "_blank"><img src="/zky/Uploads<?php echo ($vo["imagicaddress"]); ?>" class = "pic" alt="无图片"/></a></td>
                        </tr>
                        <tr>
                            <td>仪器编号：</td>
                            <td><?php echo ($vo["eid"]); ?></td>
                        </tr>
                        
                        <tr>
                            <td>资产编号：</td>
                            <td><?php echo ($vo["eoutid"]); ?></td>
                        </tr>
                        <tr>
                            <td>名称：</td>
                            <td><?php echo ($vo["ecname"]); ?></td>
                        </tr>
                        <tr>
                            <td>型号：</td>
                            <td><?php echo ($vo["etype"]); ?></td>
                        </tr>
                        <tr>
                            <td>单价：</td>
                            <td><?php echo ($vo["eprice"]); ?></td>
                        </tr>
                        <tr>
                            <td>现状：</td>
                            <td><?php echo ($vo["now"]); ?></td>
                        </tr>

                        <tr>
                            <td>领用单位：</td>
                            <td><?php echo ($vo["eblong"]); ?></td>
                        </tr>

                        <tr>
                            <td>存放地：</td>
                            <td><?php echo ($vo["elocation"]); ?></td>
                        </tr>
                        
                        <tr>
                            <td>供应商：</td>
                            <td><?php echo ($vo["ecmanufactor"]); ?></td>
                        </tr>
                       
                        <tr>
                            <td>仪器简介</td>
                            <td><?php echo ($vo["introduction"]); ?></td>
                        </tr>
            
                    <thead>
                    </thead>
                        <?php for($k = 0; $k < $vo['count'];$k++){ ?>
                            <tr>
                                <td>仪器特点
                                    <?php echo $k+1; ?>
                                </td>
                                <td>
                                    <?php echo $vo['management'][$k]['title']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>特点
                                    <?php echo $k+1; ?>
                                    详细介绍</td>
                                <td>
                                    <?php echo htmlspecialchars_decode($vo['management'][$k]['content']); ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tr>
            </table><?php endforeach; endif; else: echo "" ;endif; ?>
    <div id="page"><?php echo ($show); ?></div>
    </div>
</body>
</html>