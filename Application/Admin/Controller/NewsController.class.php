<?php
namespace Admin\Controller;
use Common\Controller\AuthController;


class NewsController extends AuthController {
    public function index(){
    	$this->display();
    }

    public function add()
    {
    	$this->display();
    }
   
}