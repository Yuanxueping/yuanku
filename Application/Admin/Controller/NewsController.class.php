<?php
namespace Admin\Controller;
use Common\Controller\AuthController;


class NewsController extends AuthController {
    public function index(){
    	$news_m = M('News');
		
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,sort_name,content,img,date')
							 -> join('author ON author_id=author.id')
							 -> join('news_sort ON sort_id=news_sort.id')
							 -> select();
		
		$this -> assign('news_list', $news_list);
		
    	$this->display();
    }

    public function add()
    {
    	$this->display();
    }
   public function newsort(){
     	$this->display(); 

   }
}