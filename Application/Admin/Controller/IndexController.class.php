<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
use Think\Upload;


class IndexController extends AuthController {
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

    public function news_manage(){
        $news_m = M('News');
		
		$page_count = 10;	//每页数据的条数
		$page_num = I('page_num') > 0 ? I('page_num') : 1;	//获取ID值，没有则默认为1
		$news_total_num = $news_m -> count();	//获取数据的总数
		$start_index = ($page_num - 1) * $page_count;	//从第几条数据查起
		$total_num = ceil($news_total_num/$page_count);	//总共有多少页
		for($i = 1; $i <= $total_num; $i++) {
			if($page_num == $i) {
				$active = 'active';
			}else {
				$active = '';
			}
			$page_html.="<a href=".U('Index/news_manage','page_num='.$i)." class='btn btn-default ".$active."'>".$i."</a>";
		}
		
		//获取表的数据
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,news_position')
							 -> join('author ON author_id=author.id')
							 -> limit($start_index,$page_count)
							 -> order('n.id desc')
							 -> select();
							 
		
		
		$this -> assign('news_list', $news_list);
		$this -> assign('page_html', $page_html);
		
    	$this->display();
    }

    public function position_edit(){
        // $news_m = M('News');

        if(IS_POST){
	            $news_m=M('News');
				
	            $data=$news_m->create();
	           
	            if($news_m->save($data))
	            {
	                $this->success('修改成功', U('Index/news_manage'), 3);
	            }else{
	                $this->error('修改失败');
	            }
	            exit;
        	}
        
        // $data=M('News')->find($nid);

        // $this->assign('data',$data);
        // $this -> display();

    }
    
}