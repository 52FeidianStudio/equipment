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
        .pic{
            width: 50%;
            height: 100%;
            text-align: center;
        }

    </style>
</head>
<body>
    <font color="#777777"><strong>用户名称：</strong></font>
    <a href="/zky/index.php/Admin/Message/studenttdetail"><?php echo (session('username')); ?></a>
    <table >
        <div id="buttom" >
                <a href="/zky/index.php/Admin/Equipment/add"><button>添加</button></a>
        </div>
    </table>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table>
            <div class="panel">
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
                    <tr>
                        <td><a href="/zky/index.php/Admin/Equipment/update/id/<?php echo ($vo["id"]); ?>"><button>修改</button></a></td>
                        <td><a href="/zky/index.php/Admin/Equipment/delete/id/<?php echo ($vo["id"]); ?>"><button>删除</button></a></td>
                        <td><a href="/zky/index.php/Admin/Equipment/add_management/id/<?php echo ($vo["id"]); ?>"><button>添加介绍</button></a></td>
                    </tr>
                    <tr>
                        <td><a href="/zky/Uploads<?php echo ($vo["imagicaddress"]); ?>" target = "_blank"><img src="/zky/Uploads<?php echo ($vo["imagicaddress"]); ?>" class = "pic"/></a></td>
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
                </div>
            </div>
        
            <div class="panel">
                <thead>
                </thead>
                <div id='p_body'>
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
            </div>
        </table><?php endforeach; endif; else: echo "" ;endif; ?>
    <?php echo ($show); ?>
</body>
</html>