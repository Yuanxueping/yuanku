<?php
namespace Admin\Controller;
use Think\Controller;

class SystemController extends Controller{

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

	public function manager_user()
	{
		$this->display();
		
	}
}

?>