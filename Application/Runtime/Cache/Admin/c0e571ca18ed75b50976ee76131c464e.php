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
        <table>
            <div class="panel">
                <thead>
                </thead>
		
				<form action="/zky/index.php/Admin/Equipment/do_update" method = "post">
					<input type="text" name = "id" value = "<?php echo ($vo["id"]); ?>" hidden>
	                <div id='p_body'>
	                    <tr>
	                        <td><a href="/zky/Uploads<?php echo ($vo["imagicaddress"]); ?>" target = "_blank"><img src="/zky/Uploads<?php echo ($vo["imagicaddress"]); ?>" class = "pic"/></a></td>
	                    </tr>
                      <tr>
                        <td>仪器分类</td>
                        <td><!-- 选择一个下拉表 -->
                            <select name="class">
                              <option value="volvo">质谱仪器</option>
                              <option value="saab">色谱仪器</option>
                              <option value="fiat">光谱仪器</option>
                              <option value="audi">生化分离分析仪器</option>
                              <option value="audi">显微镜及图像仪</option>
                              <option value="audi">品质分析仪器</option>
                              <option value="audi">其他</option>
                            </select>
                        </td>
                      </tr>
	                    <tr>
	                        <td>仪器编号：</td>
	                        <td><input type="text" name = "eid" value = "<?php echo ($vo["eid"]); ?>"></td>
	                    </tr>
	                    <tr>
	                        <td>仪器中文名称：</td>
	                        <td><input type="text" name = "ecname" value = "<?php echo ($vo["ecname"]); ?>"></td>
	                    </tr>
	                    <tr>
	                        <td>仪器英文名称：</td>
	                        <td><input type="text" name = "eename" value = "<?php echo ($vo["eename"]); ?>"></td>
	                    </tr>
	                    <tr>
	                        <td>仪器型号：</td>
	                        <td><input type="text" name = "etype" value = "<?php echo ($vo["etype"]); ?>"></td>
	                    </tr>
	                    <tr>
	                        <td>仪器生产厂家中文名称：</td>
	                        <td><input type="text" name = "ecmanufactor" value = "<?php echo ($vo["ecmanufactor"]); ?>"></td>
	                    </tr>
	                    <tr>
	                        <td>仪器生产厂家英文名称：</td>
	                        <td><input type="text" name = "eemanufactor" value = "<?php echo ($vo["eemanufactor"]); ?>"></td>
	                    </tr>
	                    <tr>
	                        <td>仪器出厂年月：</td>
	                        <td><input type="text" name = "eoutdate" value = "<?php echo ($vo["eoutdate"]); ?>"></td>
	                    </tr>
	                    <tr>
	                        <td>仪器出厂编号：</td>
	                        <td><input type="text" name = "eoutid" value = "<?php echo ($vo["eoutid"]); ?>"></td>
	                    </tr>
	                    <tr>
	                        <td>仪器购买时间：</td>
	                        <td><input type="text" name = "ebuydate" value = "<?php echo ($vo["ebuydate"]); ?>"></td>
	                    </tr>
	                    <tr>
	                        <td>仪器价格：</td>
	                        <td><input type="text" name = "eprice" value = "<?php echo ($vo["eprice"]); ?>"></td>
	                    </tr>
	                    <tr>
	                        <td>仪器放置地点：</td>
	                        <td><input type="text" name = "elocation" value = "<?php echo ($vo["elocation"]); ?>"></td>
	                    </tr>
                      <tr>
                        <td>仪器简介</td>
                        <td><input type="text" name = "introduction" value = "<?php echo ($vo["introduction"]); ?>"></td>
                      </tr>
	                    <tr>
	                        <td><button type = "submit">提交</button></td>
	                        <td><button type = "reset">重置</button></td>
	                    </tr>

	                </div>
            	</form>
            </div>
        </table>
</body>
</html>