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
<table >
    <font color="#777777"><strong>用户名称：仪器设备</strong></font>
    <a href="studentdetail.html">小强</a>
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
            <tr>
		       <form action="/zky/index.php/Admin/Equipment/do_add" method="post" enctype="multipart/form-data" name="myForm">
				  	仪器图片：<input type="file" name = "file"><br><br>
					仪器编号：<input type="text" name = "eid"> <br><br>
					仪器中文名称：<input type="text" name = "ecname"><br><br>
					仪器英文名称：<input type="text" name = "eename"><br><br>
					仪器型号：<input type="text" name = "etype"><br><br>
					仪器生产厂家中文名称：<input type="text" name = "ecmanufactor"><br><br>
					仪器生产厂家英文名称：<input type="text" name = "eemanufactor"><br><br>
					仪器出厂年月：<input type="text" name = "eoutdate"><br><br>
					仪器出厂编号：<input type="text" name = "eoutid"><br><br>
					仪器购买时间：<input type="text" name = "ebuydate"><br><br>
					仪器价格：<input type="text" name = "eprice"><br><br>
					仪器放置地点：<input type="text" name = "elocation"><br><br>
					<div id="buttom" >
				           <button type = "submit" value ="添加">添加</button>
				           <button type="reset" value = "重置">重置</button>
				    </div>
				</form>
            </tr>
        </div>
    </div>
</table>
</body>
</html>