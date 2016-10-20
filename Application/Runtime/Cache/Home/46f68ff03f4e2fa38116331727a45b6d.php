<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>equipment</title>
</head>
<body>
	<!-- 实验仪器模块
	功能：展示所有的实验仪器和添加实验仪器，以及对实验仪器参数的修改，删除
	 -->
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/zky/Public<?php echo ($vo["imagicaddress"]); ?>" target = "_blank"><img src="/zky/Public<?php echo ($vo["imagicaddress"]); ?>" class = "pic"/> <br><br></a>
		仪器编号：<?php echo ($vo["id"]); ?> <br><br>
		仪器中文名称：<?php echo ($vo["ename"]); ?><br><br>
		仪器英文名称：<?php echo ($vo["eename"]); ?><br><br>
		仪器型号：<?php echo ($vo["etype"]); ?><br><br>
		仪器生产厂家中文名称：<?php echo ($vo["ecmanufactor"]); ?><br><br>
		仪器生产厂家英文名称：<?php echo ($vo["eemanufactor"]); ?><br><br>
		仪器出厂年月：<?php echo ($vo["eoutdate"]); ?><br><br>
		仪器出厂编号：<?php echo ($vo["eoutid"]); ?><br><br>
		仪器购买时间：<?php echo ($vo["ebuydate"]); ?><br><br>
		仪器价格：<?php echo ($vo["eprice"]); ?><br><br>
		仪器放置地点：<?php echo ($vo["elocation"]); ?><br><br>
		<hr><?php endforeach; endif; else: echo "" ;endif; ?>
	

</body>
</html>