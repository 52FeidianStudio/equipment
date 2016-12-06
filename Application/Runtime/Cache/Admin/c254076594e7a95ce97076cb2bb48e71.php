<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/index_link.css" />
</head>
<body>

    <div class="title">
        <font color="#777777"><strong>管理员：</strong><?php echo (session('username')); ?></font>
    </div>
        <!-- 初始化内容 -->
        <script id='container' name='content' type="text/plain" style="height:500px;width:1300px"><?php echo ($data); ?></script>
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
                    var param = {
                        content: html
                    };
                    $.ajax({
                        url: '/zky/index.php/Admin/Index/do_show',
                        type: 'POST',
                        dataType: 'json',
                        data: param,
                        success: function(data){
                            console.log(data);
                            window.location.href="/zky/index.php/Admin/Index/admin";
                        },
                        error: function(xhr){
                            console.log(xhr);
                        }
                    });
                    
                });
            });
        </script>
</body>
</html>