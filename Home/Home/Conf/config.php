<?php
return array(
	//修改左定界符
	'TMPL_L_DELIM' => '<{',
	//修改右定界符
	'TMPL_R_DELIM' => '}>',
	'DB_TYPE' => 'mysql',//设置数据库类型
	'DB_HOST' => 'localhost',//设置主机名
	'DB_NAME' => 'zky',//设置数据库名
	'DB_USER' => 'root',//设置用户名
	'DB_PWD' => '',//设置密码
	'DB_PORT' =>'3306', //设置端口号
	'DB_PREFIX' => 'tp_',//设置表前缀*/
	//'DB_DSN' => 'mysql://root:@localhost:3306/zky',//如果两种方式同时存在，则以DSN为优先
	'SHOW_PAGE_TRACE' => true,
);
?>