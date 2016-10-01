<?php

/**
* 学生控制器
*/
class Student  extends Controller
{
	// 信息列表
	public function info_list()
	{
		$student_m=$this->LoadModel('StudentModle');

		// $info_a=$student_m->get_student_info();

		$student_list=$student_m->get_student_list();

		$this->assign('class_info_a',$student_list);
		$this->display('student_list.html');
	}
	// 编辑学生信息
	public function info_edit($value='')
	{
	 	
		$student_m=$this->LoadModel('StudentModle');
		$teacher_m=$this->LoadModel('TeacherModle');

		$class_info=array();
		$teacher_a=array();

		$id=intval($_GET['id']);
		if ($id>0) {
			$class_info=$student_m->get_signal_info($id);
			$teacher_a=$teacher_m->get_teacher_list(); 
		}
		$this->assign('class_info',$class_info);
		$this->assign('teacher_a',$teacher_a);

		$this->display("student_edit.html");
	 } 
	 // 提交修改的信息
	 public function info_update()
	 {
		$student_m=$this->LoadModel('StudentModle');
	 	  
	 	$student_m->update_info($_POST['id'],$_POST);
		header('location:/mvc/index.php?c=student&a=info_list');
	 }
	 // 添加信息
	 public function info_add()
	 {
		$teacher_m=$this->LoadModel('TeacherModle');

		$teacher_a=$teacher_m->get_teacher_list(); 
		$this->assign('teacher_a',$teacher_a);

		$this->display("student_add.html");

	 }
	 // 添加提交的信息
	 public function info_insert()
	 {
		$student_m=$this->LoadModel('StudentModle');
	 	$student_m->insert_info($_POST);
	 	 

		header('location:/mvc/index.php?c=student&a=info_list');
	 }

	 public function info_delete()
	 {
	  	$id=intval($_GET['id']);

		if($id>0){
			$student_m=$this->LoadModel('StudentModle');
		 	$student_m->delete_info($id);

		header('location:/mvc/index.php?c=student&a=info_list');
		 	
		}
	 }
}

?>