<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;

// use Common\Controller\AuthController;


class ClientController extends Controller {
	//用户列表
    public function client_list(){
    	$client_m = M('Client_user');

    	$client_list = $client_m -> select();
		$this -> assign('client_list',$client_list);

    	$this->display();
    }

    //修改用户
    public function client_edit(){
    }

    //删除用户
    public function client_del(){
    	$client_m=M('Client_user');
    	if ($client_m ->delete(I('id'))) {
    		
    		$this->success('删除成功！',U('Client/client_list'));
    	}else{
    		$this->success('删除失败！',U('Client/client_list'));
    	}
    }
   
}

?>