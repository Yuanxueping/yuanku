<?php
namespace Admin\Controller;
use Think\Controller;



class IndexController extends Controller {
    public function index(){
        // 导入第三方类库
        // 生成签名
        // vendor('weixin.JSSDK');
        // $jssdk            =   new \JSSDK("APPID", "SECRET");

        // $signPackage = $jssdk->GetSignPackage();
         
        // $this->assign('signPackage',$signPackage);
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
           $this->success('修改成功！',__MODULE__.'/Index/index');
        }else{
            $this->error('修改失败！');
        }
         
        
    }
    public function student_del($value='')
    {
        $id=intval($_GET['id']);
        if ($id>0) {
            M('Student')->delete($id);
           $this->success('删除成功！',__MODULE__.'/Index/index');
        }else{
            $this->error('删除失败！');

        }
        
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