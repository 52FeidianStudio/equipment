<?php 
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class MessageModel extends RelationModel{
		protected $_link = array(
       		'User' => array(
			    'mapping_type'  => self::BELONGS_TO,//定义从属的关系
			    'class_name'    => 'User',
			    'foreign_key'   => 'userid',//关联的外键名称
			    'mapping_name'  => 'user',//映射的名称，用于查询数据
			    //'mapping_fields' => 'username',//关联要查询的字段
			),
        );
	}
 ?>