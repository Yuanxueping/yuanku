<?php
namespace Admin\Controller;
use Think\Upload;
use Common\Controller\AuthController;



class NewsController extends AuthController {
	
    public function index(){
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
			$page_html.="<a href=".U('News/index','page_num='.$i)." class='btn btn-default ".$active."'>".$i."</a>";
		}
		
		//获取表的数据
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,sort_name,content,img,date')
							 -> join('author ON author_id=author.id')
							 -> join('news_sort ON sort_id=news_sort.id')
							 -> order('date desc')
							 -> limit($start_index,$page_count)
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
							 -> join('news_sort ON sort_id=news_sort.id')
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
							 -> join('news_sort ON sort_id=news_sort.id')
							 -> limit($start_index,$page_count)
							 -> order($or)
							 -> select();
		
		
		$this -> assign('news_list', $news_list);
		
    	$this->display(); 
   

   }
   
  
}