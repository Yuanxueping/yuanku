<?php
namespace Admin\Model;

use Think\Model;

class StudentModel extends Model{

	protected $_validate=array(
			array('name','require','学生姓名不能为空'),
			array('grade','number','学生成绩只能是数字'),
			array('mobile','11','手机号码不正确',3,'length'),
		);


	protected $_auto =array(
			array('grade','60'),
		);

}

?>