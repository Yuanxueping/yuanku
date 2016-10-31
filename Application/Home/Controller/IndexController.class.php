<?php
namespace Home\Controller;
use Think\Controller;


class IndexController extends Controller {
    
    public function index(){ 

       $slide = M('Slide');
       $news = M('News');

       $firstnews_list=$news->where('news_position="first"')->select();
       $secondnews_list=$news->where('news_position="second"')->limit(5)->order('id desc')->select();
       $thirdnews_list=$news->where('news_position="third"')->select();
       
       $slide_list=$slide->select();

       $cache_a= S('site_name');

       if (empty($cache_a)) {
         $system_info=M('System_conf')->find();
         $cache_a=S('site_name',$system_info);
       }
       
      //  print_r($secondnews_list);

       $this->assign('firstnews_list',$firstnews_list);
       $this->assign('secondnews_list',$secondnews_list);
       $this->assign('thirdnews_list',$thirdnews_list);
       
       $this->assign('slide_list',$slide_list);
       
       $this->assign('title','首页 - '.$cache_a['site_name']);
       
       $this->display();
    }

    // public function slide(){
       
    // }

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
		
               
		$news_detail = $news -> alias('n') -> field('n.id as id,title,name,sort_name,img,date') -> join('author') -> join('news_sort') -> where('n.id='.$id.' AND author.id=author_id AND sort_ename=news_sort.e_name') -> select();
		
		$this -> assign('news_detail',$news_detail);
    	
       $cache_a= S('site_name');
       $this->assign('title','新闻详情 - '.$cache_a['site_name']);

    	// do it
       $this->display();
    	
    }
    //删除订阅的文章
    public function take_del($value='')
      {
          $news_take = M('NewsTake');
          $news = M('News');

          $id=intval($_GET['id']);
          if ($id>0) {
              $news_take ->delete($id);
              $this->success('删除成功！',__MODULE__.'/Index/news_take');
          }else{
              $this->error('删除失败！');

          }
          
      }
      //添加订阅的文章，在新闻详情页点击按钮
    public function take_add($value='')
      {
          $news_take = M('NewsTake');
          $news = M('News');

          $id = I('id');

          if ($id>0) {
              // $data['take']='1';
              // $news->where('id='.$id)->save($data);
              $date['news_id']=$id;
              $date['uid']=$_SESSION['user']['id'];
               // $new_add =  $news->where('id='.$id)->select();
               // print_r($new_add);
               $news_take->add($date);
               $this->success('订阅成功！',__MODULE__.'/Index/news');
               // echo $news_take->getLastSql();exit();         
          }else{
              $this->error('订阅失败！');
          }
          
      }  
      //查看订阅的文章    
    public function news_take()
      {
         $cache_a= S('site_name');
         $news = M('News');
         $news_take  = M('NewsTake');
         $id=$_SESSION['user']['id'];

         $user_new_take = $news -> join('news_take')-> where('news_take.uid='.$id.' AND news_take.news_id=news.id') -> select();
         $page_cout=3;
         $user_total_num=count($user_new_take);
         
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page       = new \Think\Page($user_total_num,$page_cout);
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出

        
        $news_take=$news -> join('news_take')-> where('news_take.uid='.$id.' AND news_take.news_id=news.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this -> assign('news_take',$news_take);

         $this->assign('title','查看订阅的文章 - '.$cache_a['site_name']);
        // do it
         $this->display();
        
      }   

}