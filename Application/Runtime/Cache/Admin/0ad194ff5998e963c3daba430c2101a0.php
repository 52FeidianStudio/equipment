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
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
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
    <a href="/zky/index.php/Admin/Message/studenttdetail"><?php echo (session('username')); ?></a> <br><br>
                    添加详细信息
                    <input type="text" name = "equipmentid" value = "<?php echo ($data); ?>" id = "equipmentid" hidden />
                    概　述：<input type="text" name="title" id = "titlename" value="" width="200px" />
                <!-- 初始化内容 -->
                <script id='container' name='content' type="text/plain" style="height:500px;width:1300px">通告的内容</script>
              
                    <button id="getContent">获取内容</button>
                    <button id="saveContent">保存</button>
                
                
                <script src="/zky/Public/Js/jquery-3.1.1.min.js"></script>
                <!--配置文件-->
                <script type="text/javascript" src="/zky/Uploads/Ueditor/ueditor.config.js"></script>
                <!--编译器源码文件-->
                <script type="text/javascript" src="/zky/Uploads/Ueditor/ueditor.all.js"></script>
                <!--实例化编译器-->
                <script type="text/javascript">
                    $(function(){
                        var ue = UE.getEditor('container');
                        $('#getContent').click(function(){
                            var html = ue.getContent();
                            alert(html);
                        });

                        $('#saveContent').click(function(){
                            var html = ue.getContent();
                            var link = $("#equipmentid").val();
                            var resulturl = '/zky/index.php/Admin/Equipment/do_addmanagement/id/'+ link;
                            alert(resulturl);
                            var param = {
                                title: $("#titlename").val(),
                                content: html
                            };
                            $.ajax({
                                url: resulturl,
                                type: 'POST',
                                dataType: 'json',
                                data: param,
                                success: function(data){
                                    console.log(data);
                                    window.location.href="/zky/index.php/Admin/Equipment/equipment";
                                },
                                error: function(xhr){
                                    console.log(xhr);
                                }
                            });
                        });
                    });
                </script>

            </div>
        </div>
</body>
</html>