<?php
namespace Common\Controller;
use Think\Controller;
use Think\Auth;

class AuthController extends Controller {
	protected function _initialize() {
		$sess_auth = session('auth');
		if (!$sess_auth) {
			$this->error('非法访问！正在跳转到登录页！', U('Login/index'));
		}
		//如果是超级管理员的话，就不用验证权限了，给予所有权限
		

		$user_m=M('Admin_user');
		$user_info=$user_m->where('id='.$sess_auth['uid'])->find();
		$this->assign('user_info',$user_info);
			return true;

		if ($sess_auth['group_id'] == 1) {
			return true;
		}
		// //下面代码进行权限判断
		// $auth = new Auth();
		// if (!$auth->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, $sess_auth['uid'])) {
		// 	$this->error('没有权限！', U('Login/index'));
		// }
	}
}