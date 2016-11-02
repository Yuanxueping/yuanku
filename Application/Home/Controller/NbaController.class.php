<?php
namespace Home\Controller;
use Think\Controller;


class NbaController extends Controller {
    
  public function index(){ 


    $cache_a= S('site_name');
        
    $news=M('news');
    $page_cout=30;
    $page_num=I('page_num')>0?I('page_num'):1;	
    $start_index=($page_num-1)*$page_cout;
    $news_list=$news->alias('n')
                     -> field('n.id as id,title,name,sort_name,content,img,date')
					 -> join('author ON author_id=author.id')
					 -> join('news_sort ON sort_ename=news_sort.e_name')
					 ->	where("sort_name='nba'")				
					 -> order('id desc')
					 -> limit($start_index,$page_cout)
					 -> select();
					 
		  $news_line=$news->alias('n')
		 -> field('n.id as id,title,name,sort_name,content,img,date')
		 -> join('author ON author_id=author.id')
		 -> join('news_sort ON sort_ename=news_sort.e_name')
		 ->	where("sort_name='cba'")				
		 -> order('id desc')
		 -> limit($start_index,$page_cout)
		 -> select();
//		 print_r($news_line);
		  $news_live=$news->alias('n')
		 -> field('n.id as id,title,name,sort_name,content,img,date')
		 -> join('author ON author_id=author.id')
		 -> join('news_sort ON sort_ename=news_sort.e_name')
		 ->	where("sort_name='ucba'")				
		 -> order('id desc')
		 -> limit($start_index,$page_cout)
		 -> select();
		 
		  $news_lion=$news->alias('n')
		 -> field('n.id as id,title,name,sort_name,content,img,date')
		 -> join('author ON author_id=author.id')
		 -> join('news_sort ON sort_ename=news_sort.e_name')
		 ->	where("sort_name='lunbo'")				
		 -> order('id desc')
		 -> limit($start_index,$page_cout)
		 -> select();

		$pattern="/&lt;[img|IMG].*?src=[&quot;|&lsquo;](.*?(?:[\.gif|\.jpg]))[&quot;|&lsquo;].*?[\/]?&gt;/";
		$replacement = '';
		
		foreach($news_list as &$value) {
			$value['content'] = preg_replace($pattern, $replacement, $value['content']);
		}
		foreach($news_line as &$value) {
			$value['content'] = preg_replace($pattern, $replacement, $value['content']);
		}
		foreach($news_live as &$value) {
			$value['content'] = preg_replace($pattern, $replacement, $value['content']);
		}
		foreach($news_lion as &$value) {
			$value['content'] = preg_replace($pattern, $replacement, $value['content']);
		}
		unset($value);
		
		$this->assign('news_list',$news_list);
	    $this->assign('news_line',$news_line);
	    $this->assign('news_live',$news_live);
	    $this->assign('news_lion',$news_live);
		
//		select count(*) from News
		$news_total_num=$news->count();
//		总页数
		$total_num=ceil($news_total_num/$page_cout);
		$cur_page_style;
		for($i=1;$i<=$total_num;$i++){
			if($page_num==$i){
				$cur_page_style="style='background-color: #000000;color: #FFFFFF'";

			}

			$page_html.="<a ".$cur_page_style." class='btn' href=".U('Index/news',array('page_num'=>$i)).">$i</a>&nbsp;&nbsp;&nbsp;";
			$cur_page_style='';
			 
		}

    if (empty($cache_a)) {
      $system_info=M('System_conf')->find();
      $cache_a=S('site_name',$system_info);
     }
     
//   $this->assign('page_html',$page_html);
    $this->assign('title','篮球 - '.$cache_a['site_name']);
    $this->display();
 }
  
}