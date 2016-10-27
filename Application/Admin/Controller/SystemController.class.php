<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
use Common\Controller\AuthController;

class SystemController extends AuthController{

	public function index()
	{
		$this->display();
	}

	public function save()
	{
		$system=M('System_conf');
		if($system->create()){
			if ($system->add()) {
				$this->success('更新成功');
				
			}else{
				$this->error('修改失败！');

			}
		}else{
			$this->error($system->getError());
		}
	}
	// 管理员列表
	public function manager_user()
	{
		$user_m=M('Admin_user');

		$user_list=$user_m->select();

		$this->assign('user_list',$user_list);



		$this->display();
		
	}
	public function ajax_set_pwd()
	{
		$id=I('id');
		$change_val=I('change_val');
		$user_m=D('AdminUser');

		$_POST['id']=$id;
		$_POST['user_pwd']=$change_val;
		// 做验证、自动完成
		if($user_m->create()){

			if ($user_m->save()) {
				$this->ajaxReturn(array('stauts'=>1,'msg'=>'更新成功'));
				
			}else{
				$this->ajaxReturn(array('stauts'=>-1,'msg'=>'更新失败'));
			}
			
			
		}else{
			// 验证失败
			$this->ajaxReturn(array('stauts'=>0,'msg'=>$user_m->getError()));
			
		}

	}
	// 添加管理员
	public function user_add()
	{
		if (IS_POST) {
			$user_m=D('AdminUser');
			$_POST['create_time']=time();
			
			$upload=new Upload();
			$upload->maxSize=10240000;
			$upload->exts=array('jpg','gif','jpeg','png');
			$upload->savePath='./';
			$info=$upload->upload();
			if (!$info) {
				$this->error($upload->getError());
			}else{
			  // ./2016-10-14/58003ad34b822.jpg
				$_POST['head_photo']=$info['head_photo']['savepath'].$info['head_photo']['savename'];
			} 
				 
			// 做验证、自动完成
			if($user_m->create()){

				// 添加用户
				if ($uid=$user_m->add()) {
					// 指定用户为哪个管理组：超级管理员、用户管理员
					$auth_group=D('ThinkAuthGroupAccess');
					$auth_data=array('group_id'=>1,'uid'=>$uid);
					$auth_group->add($auth_data);



					$this->success('添加成功',U('System/manager_user'));
				}else{
					$this->success('添加失败',U('System/manager_user'));
				}
				
				
			}else{
				// 验证失败
				$this->error($user_m->getError());
			}
		}else{
			$this->display();
		} 


		
	}

	// 修改管理员
	public function user_edit()
	{
		$user_m=D('AdminUser');

		if (IS_POST) {

			$upload=new Upload();
			$upload->maxSize=10240000;
			$upload->exts=array('jpg','gif','jpeg','png');
			$upload->savePath='./';
			$info=$upload->upload();
			if (!$info) {
				$this->error($upload->getError());
			}else{
			  // ./2016-10-14/58003ad34b822.jpg
				$_POST['head_photo']=$info['head_photo']['savepath'].$info['head_photo']['savename'];
			} 

			// 做验证、自动完成
			if($user_m->create()){

				if ($user_m->save()) {

					$this->success('修改成功',U('System/manager_user'));
				}else{
					$this->success('修改失败或无更新',U('System/manager_user'));
				}				
			}else{
				// 验证失败
				$this->error($user_m->getError());
			}

		}else{
			$user_info=$user_m->where('id='.I('id'))->find();

			$this->assign('user_info',$user_info);
			$this->display();

		} 
		
	}

	// 删除管理员
	public function user_del()
	{
		$user_m=D('AdminUser'); 
		if ($user_m->delete(I('id'))) {

			$this->success('删除成功',U('System/manager_user'));
		}else{
			$this->success('删除失败',U('System/manager_user'));
		}								
	}
}

?>