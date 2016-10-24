<?php
namespace Admin\Model;

use Think\Model;

class AdminUserModel extends Model{

	protected $_validate=array(
			array('user_name','','管理员用户名已存在！','3','unique'),
			array('user_pwd','require','密码不能为空'),
			// array('grade','number','学生成绩只能是数字'),
			array('user_pwd','6,18','密码不能少于6位，且不能多于18位',3,'length'),
		);


	// protected $_auto =array(
	// 		array('user_name',1),
	// 		array('create_time',time())
	// 	);
	

}

?>