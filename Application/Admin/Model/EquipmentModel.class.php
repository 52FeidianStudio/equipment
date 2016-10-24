<?php 
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class EquipmentModel extends RelationModel{
		//将两个表进行关联
		protected $_link = array(
       		'Equipment' => array(
			    'mapping_type'  => self::HAS_MANY,//定义从属的关系
			    'class_name'    => 'Equipmentmanage',
			    'foreign_key'   => 'equipmentid',//关联的外键名称
			    'mapping_name'  => 'management',//映射的名称，用于查询数据
			),
        );
	}
 ?>