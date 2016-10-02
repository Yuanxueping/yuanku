<?php
namespace Admin\Controller;
use Think\Controller;



class IndexController extends Controller {
    public function index(){
        $m_student=M('Student');
        // $m_student=new Student();

        // $where_a=array("grade"=>99);
        // $student_list=$m_student->find(3);

     // echo   $m_student->getLastSql();

     //    if (is_array($options) && (count($options) > 0) && is_array($pk)) {

     //    $student_info=$m_student->find($where_a);
     // echo   $m_student->getLastSql();

    	// print_r($student_info);

        $student_list=$m_student->join('teacher ON student.teacher_id = teacher.id')->limit(10)->getField('student.id,name,teacher_name,grade,address,mobile');


        // $student_list=$m_student->join('teacher ON student.teacher_id = teacher.id')->limit(10)->select();

        // echo   $m_student->getLastSql();
        // exit();
        // exit();
        $this->assign('student_list',$student_list);
    	$this->display();
    }

    public function student_add($value='')
    {
    	$this->display();
    	
    }
    public function student_edit($value='')
    {
        $id=intval($_GET['id']);

        $stu_info=M('Student')->find($id);

        $this->assign('stu_info',$stu_info);
        $this->display();
        
    }
   public function update_info($value='')
    {
        $id=intval($_POST['id']);
        if ($id>0) {
           M('Student')->save($_POST,array('where'=>'id='.$id));
           $this->success('修改成功','Index/index');
        }else{
            $this->error('修改错误');
        }
         
        
    }
    public function student_del($value='')
    {
        $this->display();
        
    }

    public function insert($value='')
    {
    	$student=D('Student');
    	if ($student->create()) {
    		 $result=$student->add();
    		 if ($result) {
    		 	$this->success('数据添加成功！');
    		 }else{
    		 	$this->error('数据添加失败！');
    		 }
    	}else{
		 	$this->error($student->getError());
    	}
    	 
    }
}