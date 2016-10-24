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
		
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,sort_name,content,img,date')
							 -> join('author ON author_id=author.id')
							 -> join('news_sort ON sort_id=news_sort.id')
							 -> order($or)
							 -> select();
		
		
		$this -> assign('news_list', $news_list);
		
		echo $news_m->getLastSql();
//exit();

//echo $val;

    	$this->display(); 
   

   }
   
   
  
}