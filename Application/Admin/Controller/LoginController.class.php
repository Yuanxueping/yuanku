<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;

class LoginController extends Controller {
	public function index() {
		if (IS_POST) {

			$user_m=D('AdminUser');
			$user_info=$user_m->where('user_name="'.I('user_name').'" and user_pwd="'.I('user_pwd').'"')->find();

			$verfiy = new Verify();
			if (!$verfiy->check(I('verify'))) {
				$this->error('验证码错误！');
			}
			if ($user_info['id']<=0) {
					$this->error('用户名或密码错误！');
			}else{
				$login = array();
				$gourp_a=M('ThinkAuthGroupAccess')->where('uid='.$user_info['id'])->find();
				
				if ($gourp_a['group_id']==1) {
					$login['group_id'] = $gourp_a['group_id'];
					$login['uid'] = $user_info['id'];
					$login['user'] = 'admin';
				}
				else{
					$this->error('该用户无操作权限！');

				}
				 
			}
			
			if (count($login)) {
				session('auth', $login);
				$this->success('登录成功！', U('Index/index'));
			}
		} else {
			
			$this->display();
		}
	}
	public function get_verify($value='')
	{
		 $verfiy = new Verify();
		 
		$verfiy->entry();
	}
	public function logout() {
		session('[destroy]');
		$this->success('退出成功！', U('Login/index'));
	}
}