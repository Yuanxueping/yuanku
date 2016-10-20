<?php
namespace Admin\Controller;
use Common\Controller\AuthController;


class NewsController extends AuthController {
    public function index(){
    	$news_m = M('News');
		
		$news_list = $news_m -> alias('n') -> field('n.id as nid,title,name,sort,content,img,date') -> join('author') -> where('author_id=author.id') -> select();
		
		$this -> assign('news_list', $news_list);
		
    	$this->display();
    }

    public function add()
    {
    	$this->display();
    }
}