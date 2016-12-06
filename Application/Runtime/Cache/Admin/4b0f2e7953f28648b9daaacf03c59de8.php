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
                            <tr>
                                <td><span>写通知</span></td>
                            </tr>
                        
                                <span>通知名称：</span>
                                <input type="text" name="title" id = "titlename" value="" width="200px" />
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
                                            var param = {
                                                title: $("#titlename").val(),
                                                content: html
                                            };
                                            $.ajax({
                                                url: '/zky/index.php/Admin/Inform/do_show',
                                                type: 'POST',
                                                dataType: 'json',
                                                data: param,
                                                success: function(data){
                                                    console.log(data);
                                                    window.location.href="/zky/index.php/Admin/Inform/news";
                                                },
                                                error: function(xhr){
                                                    console.log(xhr);
                                                }
                                            });
                                            
                                        });
                                    });
                                </script>

                        <!-- 
                                <div id="buttom" ><button type="submit"value="提交" />提交</button></div>
                             -->
                        </div>
                    </div>
                </div>
                </table>
            </div>
        </div>
    </body>
</html>