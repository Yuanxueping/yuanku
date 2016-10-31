<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\AuthController;
use Think\Upload;



class NewsController extends AuthController {
	
    public function index(){
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
			$page_html.="<a href=".U('News/index','page_num='.$i)." class='btn btn-default ".$active."'>".$i."</a>";
		}
		
		//获取表的数据
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,sort_name,img,date')
							 -> join('author ON author_id=author.id')
							 -> join('news_sort ON sort_ename=news_sort.e_name')
							 -> order('date desc')
							 -> limit($start_index,$page_count)
							 -> order('n.id desc')
							 -> select();
							 
		
		
		$this -> assign('news_list', $news_list);
		$this -> assign('page_html', $page_html);
		
    	$this->display();
    }

    public function news_add()
    {
    	if(IS_POST) {
    		$news = D('news');
			$_POST['date'] = time();
			
			$upload = new Upload();
			$upload -> maxSize = 10240000;
			$upload -> exts = array('jpg','gif','jpeg','png');
			$upload -> autoSub = FALSE;
			$upload -> rootPath = './Public/img/news_img/';
			$info = $upload -> upload();
			if(!$info) {
				$this -> error($upload->getError());
			} else {
				$_POST['img'] = 'img/news_img/'.$info['img']['savename'];
			}
			
			if($news -> create()) {
				if($news -> add()) {
					$this -> success('添加成功',U('News/index'));
				} else {
					$this -> error('添加失败',U('News/news_add'));
				}
			} else {
				$this -> error($news -> getError());
			}
    	} else {
    		$author = D('author');
			$news_sort = D('news_sort');
			
			$author_list = $author -> field('id,name') -> select();
			$news_sort = $news_sort -> select();
			
			$this -> assign('author_list',$author_list);
			$this -> assign('news_sort',$news_sort);
			
    		$this->display();
    	}
    }

	public function news_edit() {
		$news = D('news');
		
		if(IS_POST) {
			if($_FILES['img']['error']!=4){
				$upload = new Upload();
				$upload -> maxSize = 10240000;
				$upload -> exts = array('jpg','gif','jpeg','png');
				$upload -> autoSub = FALSE;
				$upload -> rootPath = './Public/img/news_img/';
				$info = $upload -> upload();
				
				if(!$info) {
					$this -> error($upload->getError());
				} else {
					$_POST['img'] = 'img/news_img/'.$info['img']['savename'];
				}
			}
			
			if($news->create()) {
				if($news->save()) {
					$this -> success('修改成功',U('News/index'));
				} else {
					$this -> error('修改失败或无更新',U('News/news_edit',array('id'=>$_POST['id'])));
				}
			} else {
				$this -> error($news->getError());
			}
		} else {
			$author = D('author');
			$news_sort = D('news_sort');
			
			$news_info = $news -> where('id='.I('id')) -> select();
			$author_list = $author -> select();
			$sort_list = $news_sort -> select();
			
			$this -> assign('news_info',$news_info);
			$this -> assign('author_list',$author_list);
			$this -> assign('sort_list',$sort_list);
			
			$this -> display();
		}
	}
  
    public function newsort(){
    	$news_m = M('News');
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
			$page_html.="<a href=".U('News/newsort','page_num='.$i)." class='btn btn-default ".$active."'>".$i."</a>";
		}
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,sort_name,content,img,date')
							 -> join('author ON author_id=author.id')
							 -> join('news_sort ON sort_ename=news_sort.e_name')
							 -> limit($start_index,$page_count)
							 -> order('sort_name')
							 -> select();
		$this -> assign('news_list', $news_list);
		$this -> assign('page_html', $page_html);
//		echo $news_m->getLastSql();
    	$this->display(); 
   }
    public function newsort_j(){
    	$val=I("value");
   	    $news_m = M('News');
   	   
   	    if($val==0){
   	    	$or='sort_name';
   	    }
   	    else if($val==1){
   	    	$or='author.id';
   	    }
   	    else if($val==2){
   	    	$or='date';
   	    }
   	    else{
   	    	$or='sort_name';
   	    }
   	    $page_count = 5;	//每页数据的条数
		$page_num = I('page_num') > 0 ? I('page_num') : 1;	//获取ID值，没有则默认为1
		$news_total_num = $news_m -> count();	//获取数据的总数
		$start_index = ($page_num - 1) * $page_count;	//从第几条数据查起
		$total_num = ceil($news_total_num/$page_count);	//总共有多少页
		
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,sort_name,content,img,date')
							 -> join('author ON author_id=author.id')
							 -> join('news_sort ON sort_ename=news_sort.e_name')
							 -> limit($start_index,$page_count)
							 -> order($or)
							 -> select();
		$this -> assign('news_list', $news_list);
    	$this->display(); 
   }
   public function news_del(){
   	    $new_m=D('News'); 
		if ($new_m->delete(I('id'))) {
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
   }
   public function sort(){
   	   $news_m = M('News_sort');
		
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
			$page_html.="<a href=".U('News/sort','page_num='.$i)." class='btn btn-default ".$active."'>".$i."</a>";
		}
		
		//获取表的数据
		$news_list = $news_m -> limit($start_index,$page_count)
		                     -> order('id desc')
							 -> select();
							 
		$this -> assign('news_list', $news_list);
		$this -> assign('page_html', $page_html);
		
    	$this->display();
   	    
   }
   public function sort_add(){
 	if(IS_POST) {
    		$news = D('NewsSort');
    		$data['sort_name']=$_POST['sort_name'];
    		$data['e_name']=$_POST['e_name'];
			if($news ->create()) {
				if($news -> add($data)) {
					$this -> success('添加成功',U('News/sort'));
				} else {
					$this -> error('添加失败');
				}
			} else {
				$this -> error($news -> getError());
			}
    	} else {
    		$this->display();
    	}

 }
  public function sort_edit(){
  	$news = D('NewsSort');
 	if(IS_POST) {
//  		$data['sort_name']=$_POST['sort_name'];
//  		$data['e_name']=$_POST['e_name'];
			if($news ->create()) {
				if($news ->save()) {
					$this -> success('修改成功',U('News/sort'));
				} else {
					
					$this -> error('修改失败');
				}
			} else {
				$this -> error($news -> getError());
			}
    	} else {
    		
    		$new_info=$news->where('id='.I('id'))->find();
//          echo $news->getLastSql();
//          exit();
    		$this->assign('new_info',$new_info);
    		$this->display();
    	}

 }
 public function sort_del(){
   	    $new_m=D('News_sort'); 
		if ($new_m->delete(I('id'))) {
            $this->redirect('News/sort');
//			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
   }
// 分类详情
 public function sort_detail(){
   	    $news=D('news');
   	    $page_count = 3;	//每页数据的条数
		$page_num = I('page_num') > 0 ? I('page_num') : 1;	//获取ID值，没有则默认为1
		$news_total_num = $news ->where('sort_ename="'.I('e_name').'"')-> count();	//获取数据的总数
//		echo $news->getLastSql();exit;
		$start_index = ($page_num - 1) * $page_count;	//从第几条数据查起
		$total_num = ceil($news_total_num/$page_count);	//总共有多少页
		for($i = 1; $i <= $total_num; $i++) {
			if($page_num == $i) {
				$active = 'active';
			}else {
				$active = '';
			}
			$page_html.="<a href=".U('News/sort_detail',array('e_name'=>I('e_name'),'page_num'=>$i) )." class='btn btn-default ".$active."'>".$i."</a>";
		}
   	    $detail=$news->alias('n')
					 -> field('n.id as nid,title,name,sort_name,content,img,date')
					 -> where('sort_ename="'.I('e_name').'"')
					 -> limit($start_index,$page_count)
					 -> join('author ON author_id=author.id')
					 -> join('news_sort ON sort_ename=news_sort.e_name')
					 -> select();
		
//		print_r($detail);	
		 
   	    $this->assign('detail',$detail);
   	    $this -> assign('page_html', $page_html);
   	    $this->display();
   	
   }
//ajax修改
// public function ajax_set_sort(){
//		$new_m=D('NewsSort');
//		// 做验证、自动完成
//	    $changeval=I("changeval");
//	    $id=I("id");
////	    $_POST['sort_name']=$changeval;
//	    $data['sort_name']=$changeval;
//	    $data['id']=$id;
//		if($new_m->create()){
//			
//			if ($new_m->save($data)) {
//				
//				$this->ajaxReturn(array('stauts'=>1,'msg'=>'更新成功'));
//			}else{
//				$this->ajaxReturn(array('stauts'=>-1,'msg'=>'更新失败'));
//			}
//		}else{
//			// 验证失败
//			$this->ajaxReturn(array('stauts'=>0,'msg'=>$new_m->getError()));
//			
//		}
// }


   //作者列表
	public function author_list(){
		$news_m = M('Author');
		
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
			$page_html.="<a href=".U('News/author_list','page_num='.$i)." class='btn btn-default ".

$active."'>".$i."</a>";
		}
		
		//获取表的数据
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,name,introduction')
							 -> limit($start_index,$page_count)
							 -> select();
							 
		
		
		$this -> assign('news_list', $news_list);
		$this -> assign('page_html', $page_html);		
    	$this->display();
	}
//作者列表end

	public function author_add(){
		if(IS_POST){
              if(M('author')->add(I('post.' ))){
                    $this->success('添加成功', 'author_list','3');
                }else{
                    $this->error('添加失败');
                }
        	}
		$this->display();
	}

	public function author_update($nid){
		
		if(IS_POST){
	            $author=M('author');
				// $id=$author[id];
	            $data=$author->create();
	            // $data['author_create_time']=time();
	            if($author->save($data))
	            {
	                $this->success('修改成功', U('author_list'), 3);
	            }else{
	                $this->error('修改失败');
	            }
	            exit;
        	}
			// $category=M('category')->select();
			$data=M('author')->find($nid);
			// $this->assign('category',$category);
			$this->assign('data',$data);
			$this->display();
	}

	public function author_del($nid){
		if(M('author')->delete($nid))
			$this->success('成功',U('author_list'),3);
		else
			$this->error('失败',U('author_list'),3);
		// $this->display();
	}
   
  

}