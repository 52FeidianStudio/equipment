<?php 
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class AnswerModel extends RelationModel{
		//将两个表进行关联
		protected $_link = array(
       		'Message' => array(
			    'mapping_type'  => self::BELONGS_TO,//定义从属的关系
			    'class_name'    => 'Message',
			    'foreign_key'   => 'messageid',//关联的外键名称
			    'mapping_name'  => 'message',//映射的名称，用于查询数据
			),
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