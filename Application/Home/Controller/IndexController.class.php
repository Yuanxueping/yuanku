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
       $cache_a= S('site_name');

       $this->assign('title','联系我们 - '.$cache_a['site_name']);
    	// do it
       $this->display();
    	
    }
    public function news()
    {
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
    
}