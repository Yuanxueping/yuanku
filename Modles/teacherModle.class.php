<?php
class TeacherModle extends Model{

	public function get_teacher_list()
	{
		// 查询所有老师的信息
		
		$select_sql="select id,teacher_name from teacher";
		$result=$this->Query($select_sql);
		
		$teacher_a=array();
		// 循环获取到了
		while ($row = $this->Fetch($result)) {
			$teacher_a[]=$row;
		}
		return $teacher_a;
	}
}

?>