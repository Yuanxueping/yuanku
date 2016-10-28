<?php
namespace Home\Controller;
use Think\Controller;


class IndexController extends Controller {
    
    public function index(){ 


       $cache_a= S('site_name');

       if (empty($cache_a)) {
         $system_info=M('System_conf')->find();
         $cache_a=S('site_name',$system_info);
       }
        
       $this->assign('title','首页 - '.$cache_a['site_name']);
       $this->display();
    }

    public function about_us()
    {

       $cache_a= S('site_name');
       $this->assign('title','关于我们 - '.$cache_a['site_name']);

    	// do it
       $this->display();
    	
    }

 	  public function contact_us()
    {
      // 保存反馈信息到数据库
      if (IS_POST) {
        $fb_m=M('ClientFeedback');
        //自动填充创建时间
        $_POST['fb_time']=date('Y-m-d H:i:s');
        // 做验证、自动完成数据填充
        if ($fb_m->create()) {
          //添加反馈信息
          if ($fb_id=$fb_m->add()) {
            $this->success('信息已反馈',U('Index/contact_us'));
          } else {
            $this->error('信息反馈失败',U('Index/contact_us'));
          }
        }else {
          // 验证失败
          $this->error($fb_m->getError());
        }
      } else{
        $cache_a= S('site_name');

       $this->assign('title','联系我们 - '.$cache_a['site_name']);
      // do it
       $this->display();
      }
       
    	
    }
    public function news()
    {
//新增加
		$news = M('News');
		
		$page_cout=10;
		
		$page_num=I('page_num')>0?I('page_num'):1;
		
		
		$start_index=($page_num-1)*$page_cout;
//		$start_index=0;
		
		$news_list=$news -> alias('n')
						 -> field('n.id as id,title,name,sort_name,content,img,date')
						 -> join('author ON author_id=author.id')
						 -> join('news_sort ON sort_ename=news_sort.e_name')
						 -> order('id desc')
						 -> limit($start_index,$page_cout)
						 -> select();
		
		$this->assign('news_list',$news_list);
		
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
		$this->assign('page_html',$page_html);

    //新增加
       $cache_a= S('site_name');
       $this->assign('title','新闻列表 - '.$cache_a['site_name']);
    	// do it 
     
       $this->display();
    	
    }
    public function login()
    {
       $cache_a= S('site_name');
       $this->assign('title','登录 - '.$cache_a['site_name']);
    	// do it
       $this->display();
    	
    }
    public function register()
    {
       $cache_a= S('site_name');
       $this->assign('title','注册 - '.$cache_a['site_name']);

    	// do it
       $this->display();
    	
    }
    
	public function news_detail()
    {
    	$id = I('id');
		
    	$news = M('News');
		
		$news_detail = $news -> join('author') -> join('news_sort') -> where('news.id='.$id.' AND author.id=author_id AND sort_ename=news_sort.e_name') -> select();
		
		$this -> assign('news_detail',$news_detail);
    	
       $cache_a= S('site_name');
       $this->assign('title','新闻详情 - '.$cache_a['site_name']);

    	// do it
       $this->display();
    	
    }


}