<?php
/**
 * 学生模型类
 * 
 */
class StudentModle extends Model{

	// 获取用户的单个信息
	public function get_student_info()
	{
		$result=$this->Query('select class.id,class.name,class.mobile,class.teacher_id,class.grade,class.address,teacher.teacher_name from class join teacher on class.teacher_id=teacher.id order by  grade desc,class.id');
		return $this->Fetch($result);

	}

	// 获取学生信息列表
	public function get_student_list()
	{
		$query="select class.id,class.name,class.mobile,class.teacher_id,class.grade,class.address,teacher.teacher_name from class join teacher on class.teacher_id=teacher.id order by  grade desc,class.id";
		$result=$this->Query($query);

		 $class_info_a=array();
		// 第五步、查询所有的信息
		if (!empty($result)) {
			 while ($class_a=$this->Fetch($result)) {
				 $class_info_a[]=$class_a;
			}
		}
		return $class_info_a;
	}

	public function get_signal_info($student_id)
	{
		 $sel_sql="select * from class where id=".$_GET['id'];
		$class_info=$this->Fetch($this->Query($sel_sql));

		return $class_info;
		
	}
	// 修改信息
	public function update_info($student_id,$info_a)
	{
		$this->Query('update class set name="'.$info_a['name'].'",grade="'.$info_a['grade'].'",address="'.$info_a['address'].'",mobile="'.$info_a['mobile'].'",teacher_id='.$info_a['teacher_id'].' where id='.$student_id) or die('update failed');
	}
	/**
	 * 添加学生信息
	 * @param  Array $insert_a 表单传过来的数组
	 * @return string           执行的结果
	 */
	public function insert_info($insert_a)
	{
		$in_sql='insert into class (name,grade,address,mobile,teacher_id) values("'.$insert_a['name'].'","'.$insert_a['grade'].'","'.$insert_a['address'].'","'.$insert_a['mobile'].'",'.$insert_a['teacher_id'].')';
		$this->Query($in_sql);
	}
	/**
	 * 删除信息
	 * @param int $value [学生ID]
	 */
	public function delete_info($id)
	{
		$del_sql="delete from class where id =".$id;
			// echo $del_sql;
		mysql_query($del_sql);
	}
}


?>