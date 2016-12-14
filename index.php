<?php
	//1¡¢¶¨ÒåÓ¦ÓÃÃû³Æ£ºHome

	define('APP_NAME', 'Application');
	define('APP_PATH', './Application/');
	define('APP_DEBUG',true);
	require "./ThinkPHP/ThinkPHP.php";
	// 绑定访问Admin模块
	define('BIND_MODULE','Home');
	// 绑定访问Index控制器
	define('BIND_CONTROLLER','Index');
	// 绑定访问test操作
	define('BIND_ACTION','main');
?>