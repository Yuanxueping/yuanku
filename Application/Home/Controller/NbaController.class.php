<?php
namespace Home\Controller;
use Think\Controller;


class NbaController extends Controller {
    
    public function index(){ 


       $cache_a= S('site_name');

       if (empty($cache_a)) {
         $system_info=M('System_conf')->find();
         $cache_a=S('site_name',$system_info);
       }
        
       $this->assign('title','篮球 - '.$cache_a['site_name']);
       $this->display();
    }

    
}