<?php
namespace Admin\Controller;
use Common\Controller\AuthController;



class IndexController extends AuthController {
    public function index(){
        // 导入第三方类库
        // 生成签名
        // vendor('weixin.JSSDK');
        // $jssdk            =   new \JSSDK("APPID", "SECRET");

        // $signPackage = $jssdk->GetSignPackage();
         
        // $this->assign('signPackage',$signPackage);

        $index_m = M('silde');
       $page_count = 5;	//每页数据的条数
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
			$page_html.="<a href=".U('News/index','page_num='.$i)." class='btn btn-default ".$active."'>".$i."</a>";
		}

        $client_list = $client_m ->limit($start_index,$page_count)-> select();
        $this -> assign('slide_list',$slide_list);
		$this -> assign('page_html', $page_html);

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
    
    //添加新的轮播图图片
    // public function slide_add($value='')
    // {
    //     if(IS_POST){
    //         $news = D('news');
	// 		$_POST['date'] = time();
			
	// 		$upload = new Upload();
	// 		$upload -> maxSize = 10240000;
	// 		$upload -> exts = array('jpg','gif','jpeg','png');
	// 		$upload -> autoSub = FALSE;
	// 		$upload -> rootPath = './Public/img/news_img/';
	// 		$info = $upload -> upload();
	// 		if(!$info) {
	// 			$this -> error($upload->getError());
	// 		} else {
	// 			$_POST['img'] = 'img/news_img/'.$info['img']['savename'];
	// 		}
			
	// 		if($news -> create()) {
	// 			if($news -> add()) {
	// 				$this -> success('添加成功',U('News/index'));
	// 			} else {
	// 				$this -> error('添加失败',U('News/news_add'));
	// 			}
	// 		} else {
	// 			$this -> error($news -> getError());
	// 		}
    //     }else{

    //     }
    // }
    
    // //删除一张轮播图图片
    // public functiion slide_delete($value='')
    // {
    //     $id=intival($_GET['id']);
    // }
    
    // //编辑轮播图
    // public function slide_eidt($value='')
    // {

    // }
}