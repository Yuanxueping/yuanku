<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
use Think\Upload;


class SlideController extends AuthController {
    public function slide_manage(){
        
        $slide_m = M('slide');
        $page_count = 5;	//每页数据的条数
		$page_num = I('page_num') > 0 ? I('page_num') : 1;	//获取ID值，没有则默认为1
		$slide_total_num = $slide_m -> count();	//获取数据的总数
		$start_index = ($page_num - 1) * $page_count;	//从第几条数据查起
		$total_num = ceil($slide_total_num/$page_count);	//总共有多少页
		for($i = 1; $i <= $total_num; $i++) {
			if($page_num == $i) {
				$active = 'active';
			}else {
				$active = '';
			}
			$page_html.="<a href=".U('Slide/slide_manage','page_num='.$i)." class='btn btn-default ".$active."'>".$i."</a>";
		}

        $slide_list = $slide_m  -> alias('n')
								-> field('n.id as nid,name,img,date')
								-> limit($start_index,$page_count)
								-> order('n.id desc')
								-> select();
								
        $this -> assign('slide_list',$slide_list);
		$this -> assign('page_html', $page_html);

    	$this->display();
    }

   
    //添加新的轮播图图片
    public function slide_add($value='')
    {
        if(IS_POST){
            $slide = M('slide');
			$_POST['date'] = time();
			
			$upload = new Upload();
			$upload -> maxSize = 10240000;
			$upload -> exts = array('jpg','gif','jpeg','png');
			$upload -> autoSub = FALSE;
			$upload -> rootPath = './Public/img/lunbo/';
			$info = $upload -> upload();
			if(!$info) {
				$this -> error($upload->getError());
			} else {
				$_POST['img'] = 'img/lunbo/'.$info['img']['savename'];
			}
			
			if($slide -> create()) {
				if($slide -> add()) {
					$this -> success('添加成功',U('Slide/slide_manage'));
				} else {
					$this -> error('添加失败',U('Slide/slide_manage'));
				}
			} else {
				$this -> error($slide -> getError());
			}
        }else{
           

            $this->display();
        }
    }
    
    //删除一张轮播图图片
    public function slide_delete($value='')
    {
       $slide_m=M('slide');
       if ($slide_m->delete(I('id'))) {
		   $this->success('删除成功',U('Slide/slide_manage'));		
		}else{
			$this->success('删除失败',U('Slide/slide_manage'));
		}
    }
    
    // //编辑轮播图
    // public function slide_edit($value='')
    // {
    //     if(IS_POST){

    //     }else{
    //         $slide = M('slide');

    //         $slide_info = $slide -> where('id='.I('id'))->select();

    //         $this->assign('slide_info',$slide_info);

    //         $this -> display();
    //     }
    // }
}

?>