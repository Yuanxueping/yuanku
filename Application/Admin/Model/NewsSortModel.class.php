<?php
namespace Admin\Model;

use Think\Model;

class NewsSortModel extends Model{

	protected $_validate=array(
			array('sort_name','','分类名已存在！','3','unique'),
			array('sort_ename','','sort已存在！','3','unique'),
			array('sort_ename','require','不能为空'),
			array('e_name','require','不能为空'),
		);


	// protected $_auto =array(
	// 		array('user_name',1),
	// 		array('create_time',time())
	// 	);
	

}

?>