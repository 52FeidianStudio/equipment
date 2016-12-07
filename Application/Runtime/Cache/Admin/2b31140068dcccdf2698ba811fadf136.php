<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/zky/Uploads/Css/public.css" />
    <script type="text/javascript" src="/zky/Uploads/Js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
        function f1(){
            $.post("/zky/index.php/Admin/About/do_update", {
                position:$("#position").val(),
                name:$("#name").val()，
                responsibility:$("#responsibility").val()，
                responsible:$("#responsible").val()
            },function(text){
                if(text=="pass"){
                    window.location.href="/zky/index.php/Admin/About/about";
                }else{
                    $("#suggest").html(text);
                }
            });
        }
        function f2(){
            $.post("/zky/index.php/Admin/About/do_update1", {
                adress:$("#adress").val(),
                addressname:$("#addressname").val()，
                people:$("#people").val()，
                peoplename:$("#peoplename").val()，
                post:$("#post").val(),
                postname:$("postname").val()
            },function(text){
                if(text=="pass"){
                    window.location.href="/zky/index.php/Admin/About/about";
                }else{
                    $("#suggest").html(text);
                }
            });
        }
    </script>
</head>
<body>
    <!-- 从Home/main页面中复制而来 -->
    <!-- 这里是信息添加弹出窗口1 -->
        <div id="LoginBox">
            <div class="row1">
                添加<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="l_closeBtn">×</a>
            </div>
            <form>
                <span id="suggest"> &nbsp;</span>
                <div class="row">
                    管理选择：                        
                        <span >
                            <input class="inputBox" type="text" id="position" placeholder="平台主任" />
                        </span>
                </div>
                <div class="row">
                    姓名：
                    <span >
                        <input class="inputBox" type="text" id="name" placeholder="姓名" />
                    </span>
                </div>
                <div class="row">
                    信息：
                    <span >
                        <input class="inputBox" type="text" id="responsibility" placeholder="职责" />
                    </span>
                </div>
                <div class="row">
                    信息描述：
                    <span >
                        <input class="inputBox" type="text" id="responsible" placeholder="" />
                    </span>
                </div>
                <div class="row">
                        <a href="#" id="l_loginbtn" onclick="f1();">添加</a>
                </div>
            </form>
        </div>
        <!-- 这里是信息添加弹出窗口2 -->
        <div id="LoginBox">
            <div class="row1">
                添加<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="l_closeBtn">×</a>
            </div>
            <form>
                <span id="suggest"> &nbsp;</span>
                <div class="row">
                    信息1：                   
                        <span >
                            <input class="inputBox" type="text" id="adress" placeholder="联系地址" />
                        </span>
                        <span >
                            <input class="inputBox" type="text" id="addressname" placeholder="华中农业大学主楼东附楼二楼" />
                        </span>
                </div>
                <div class="row">
                    信息2：
                    <span >
                        <input class="inputBox" type="text" id="people" placeholder="姓名" />
                    </span>
                    <span >
                        <input class="inputBox" type="text" id="peoplename" placeholder="×××" />
                    </span>
                </div>
                <div class="row">
                    信息３：
                    <span >
                        <input class="inputBox" type="text" id="post" placeholder="邮政编码" />
                    </span>
                    <span >
                        <input class="inputBox" type="text" id="postid" placeholder="430070" />
                    </span>
                </div>
                <div class="row">

                <div class="row">
                        <a href="#" id="l_loginbtn" onclick="f2();">添加</a>
                </div>
            </form>
        </div>
        <!-- 复制结束 -->
     <table>
        <caption>当前登录管理员</caption>
         <tr></tr>
        <tr></tr>
        <div class='panel'>
            <div id='p_body'>
                <tr>
                    <td><?php echo (session('name')); ?> &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo (session('username')); ?> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                </tr>
            </div>
        </div>
    </table>
    <table>
        <ul id='show'>
            <h2>　植科院公共平台目前的组织管理结构如下</h2>
            <!-- 从Home/main页面中复制而来 -->
            <span><a href="#" id='login'>添加</a></span>
            <!-- 复制结束 -->
            <?php if(is_array($data0)): $i = 0; $__LIST__ = $data0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/zky/Uploads/pic/na.png" alt="" />　<span class="na"><?php echo ($vo["position"]); ?>  <?php echo ($vo["name"]); ?></span></li>
                <li><img src="/zky/Uploads/pic/job.png" alt="" />　<span class="inf"><?php echo ($vo["responsibility"]); ?>    <?php echo ($vo["responsible"]); ?></span></li>
                <li><span><a href="#" id='login'>修改</a></span></li>
                <br /><br /><br /><br /><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </table>
    <table>
        <h2>其他信息修改</h2>
        <ul id='show'>
            <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class='add'><img src="/zky/Uploads/pic/address.png" alt="" />　<?php echo ($vo["adress"]); ?>:<?php echo ($vo["addressname"]); ?></li>
                <li class='add'><img src="/zky/Uploads/pic/person.png" alt="" />　<?php echo ($vo["people"]); ?>：<?php echo ($vo["peoplename"]); ?></li>
                <li class='add'><img src="/zky/Uploads/pic/zip_code.png" alt="" />　<?php echo ($vo["post"]); ?>：<?php echo ($vo["postid"]); ?></li>
                <li><span><a href="#" id='login'>修改</a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </table>
</body>
</html>