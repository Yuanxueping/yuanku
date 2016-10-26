<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;

// use Common\Controller\AuthController;


class ClientController extends Controller {
	//用户列表
    public function client_list(){
    	$client_m = M('Client_user');

    	$page_count = 5;	//每页的数据数
    	$page_num = I('page_num') > 0 ? I('page_num') : 1; //获取ID值，没有则默认为1
    	$client_total_num = $client_m -> count();	//获取数据总数
    	$start_index = ($page_num - 1) * $page_count;//从第几条数据查起
    	$total_num = ceil($client_total_num/$page_count);//总共多少页

    	for ($i = 1; $i <=$total_num ; $i++) { 
    		if ($page_num == $i) {
    			$active = 'active';
    		}else{
    			$active = '';
    		} 
    		$page_html.="<a href=".U('Client/client_list','page_num='.$i)." class='btn btn-default ".$active."'>".$i."</a>";
    	}



    	$client_list = $client_m ->limit($start_index,$page_count)-> select();
		$this -> assign('client_list',$client_list);
		$this -> assign('page_html', $page_html);

    	$this->display();
    }

    //修改用户
    public function client_edit(){
    	$client_m=M('Client_user');

    	if (IS_POST) {
    		
    		$upload=new Upload();
    		$upload->maxSize=10240000;
    		$upload->exts=array('jpg','gif','jpeg','png');
    		$upload->savePath='./';
    		$info=$upload->upload();
    		if (!$info) {
    			$this->error($upload->getError());
    		}else{
    			$_POST['head_photo']='/Uploads/'.$info['head_photo']['savepath'].$info['head_photo']['savename'];
    		}

    		// 做验证、自动完成
    		if ($client_m->create()) {
    			if ($client_m->save()) {
    				
    				$this->success('修改成功！',U('Client/client_list'));
    			}else{
    				$this->success('修改失败或无更新！',U('Client/client_list'));
    			}
    		
    		}else{
    			//验证失败
    			$this->error($client_m->getError());
    		}


    	}else{
    		$client_info=$client_m->where('id='.I('id'))->find();

    		$this->assign('client_info',$client_info);

    		$this->display();
    	}

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