<?php
namespace Admin\Controller;
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
							 -> limit($start_index,$page_count)
							 -> select();
							 
		
		
		$this -> assign('news_list', $news_list);
		$this -> assign('page_html', $page_html);
		
    	$this->display();
    }

    public function add()
    {
    	$this->display();
    }
  
    public function newsort(){
   	    $news_m = M('News');
		
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,sort_name,content,img,date')
							 -> join('author ON author_id=author.id')
							 -> join('news_sort ON sort_id=news_sort.id')
							 -> order('sort_name')
							 -> select();
		
		
		$this -> assign('news_list', $news_list);
//		echo $news_m->getLastSql();
//		exit();
		
    	$this->display(); 

   }
    public function sortbytime(){
   	    $news_m = M('News');
		
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,sort_name,content,img,date')
							 -> join('author ON author_id=author.id')
							 -> join('news_sort ON sort_id=news_sort.id')
							 -> order('date')
							 -> select();
		
		
		$this -> assign('news_list', $news_list);
//		echo $news_m->getLastSql();
//		exit();
		
    	$this->display(); 

   }
    public function sortbyauthor(){
   	    $news_m = M('News');
		
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,sort_name,content,img,date')
							 -> join('author ON author_id=author.id')
							 -> join('news_sort ON sort_id=news_sort.id')
							 -> order('author.id')
							 -> select();
		
		
		$this -> assign('news_list', $news_list);
//		echo $news_m->getLastSql();
//		exit();
		
    	$this->display(); 

   }
}