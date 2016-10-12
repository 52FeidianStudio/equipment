<?php
return array(
	//ÐÞ¸Ä×ó¶¨½ç·û
	'TMPL_L_DELIM' => '<{',
	//ÐÞ¸ÄÓÒ¶¨½ç·û
	'TMPL_R_DELIM' => '}>',
	'DB_TYPE' => 'mysql',//ÉèÖÃÊý¾Ý¿âÀàÐÍ
	'DB_HOST' => 'localhost',//ÉèÖÃÖ÷»úÃû
	'DB_NAME' => 'zky',//ÉèÖÃÊý¾Ý¿âÃû
	'DB_USER' => 'root',//ÉèÖÃÓÃ»§Ãû
	'DB_PWD' => '',//ÉèÖÃÃÜÂë
	'DB_PORT' =>'3306', //ÉèÖÃ¶Ë¿ÚºÅ
	'DB_PREFIX' => 'tp_',//ÉèÖÃ±íÇ°×º*/
	//'DB_DSN' => 'mysql://root:@localhost:3306/zky',//Èç¹ûÁ½ÖÖ·½Ê½Í¬Ê±´æÔÚ£¬ÔòÒÔDSNÎªÓÅÏÈ
	'SHOW_PAGE_TRACE' => true,
	'TMPL_PARSE_STRING'  => array(
     '__PUBLIC__' => __ROOT__.'/Uploads',),
);
?>