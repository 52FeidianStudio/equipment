<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改信息</title>
</head>
<body>
	<form action="/zky/admin.php/Admin/Equipment/do_update" method = "post">
	
		<!-- 用户不可见文本输入域,用来保存仪器的id号码，便于进行修改--> 
		<input type="text" name = "id" value = "<?php echo ($vo["id"]); ?>" hidden>


		仪器编号：<input type="text" name = "eid" value = "<?php echo ($vo["eid"]); ?>"> <br><br>
		仪器中文名称：<input type="text" name = "ecname" value = "<?php echo ($vo["ecname"]); ?>"><br><br>
		仪器英文名称：<input type="text" name = "eename" value = "<?php echo ($vo["eename"]); ?>"><br><br>
		仪器型号：<input type="text" name = "etype" value = "<?php echo ($vo["etype"]); ?>"><br><br>
		仪器生产厂家中文名称：<input type="text" name = "ecmanufactor" value = "<?php echo ($vo["ecmanufactor"]); ?>"><br><br>
		仪器生产厂家英文名称：<input type="text" name = "eemanufactor" value = "<?php echo ($vo["eemanufactor"]); ?>"><br><br>
		仪器出厂年月：<input type="text" name = "eoutdate" value = "<?php echo ($vo["eoutdate"]); ?>"><br><br>
		仪器出厂编号：<input type="text" name = "eoutid" value = "<?php echo ($vo["eoutid"]); ?>"><br><br>
		仪器购买时间：<input type="text" name = "ebuydate" value = "<?php echo ($vo["ebuydate"]); ?>"><br><br>
		仪器价格：<input type="text" name = "eprice" value = "<?php echo ($vo["eprice"]); ?>"><br><br>
		仪器放置地点：<input type="text" name = "elocation" value = "<?php echo ($vo["elocation"]); ?>"><br><br>
		
		<input type="submit" value = "提交">

	</form>
</body>
</html>