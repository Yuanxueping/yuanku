<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;

class PersonalController extends Controller {
	public function index(){
		$this->showLogo();
		if(isset($_SESSION['username'])){
			$this->display('Index/personal');	
		}else{
			$this->error('用户未登陆，请重新登陆',U('Index/login'),3);
		}
				
	}

	public function logout(){
		unset($_SESSION['username']);
		$this->success('退出成功，请重新登陆',U('Index/login'),3);
	}


	public function showLogo(){
		$Model = new \Think\Model() ;
		$result=$Model->query("SELECT * FROM client_user WHERE user_name ='".$_SESSION['username']."'");
		if($result[0]['head_photo']){
			$this->assign('head_photo',$result[0]['head_photo']);
		}else{
			$this->assign('head_photo',"Public/head_logo/default_head_logo.jpg");
			
		}
	}

	public function edit_message(){
		$this->display('Index/edit_user_info');
	}

	public function update(){
		$data['user_name']=I('user_name');
		dump(I('user_name'));
		$data['email_address']=I('email_address');
		$data['user_pwd']=md5(I('user_pwd'));
		$obj=M('clientUser')->where("`user_name`='".I('user_name')."'");
		$info=$this->upload();
		//更新logo字段
		$data['head_photo']='/Uploads/'.$info['head_photo']['savepath'].$info['head_photo']['savename'];
		
		$result=$obj->save($data);
		if($result){
			$this->success('数据更新成功');
		}else{
			$this->error('更新失败');
		}
		
	}

	public function upload(){
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
	    $upload->savePath  =     'head_logo/'; // 设置附件上传（子）目录
	    // 上传文件 
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
	       return $info;
	    }
	}

	public function news(){
		header("location:".U('Index/news'));
	}
	public function contact_us(){
		header("location:".U('Index/contact_us'));
	}
	public function about_us(){
		header("location:".U('Index/about_us'));
	}
}