<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function checkLogin(){
		$username=I('username');
		$password=I('password');
		$users=M('clientUser');
		$passwordCncode=md5($password);
		$user=$users->where('user_name="'.$username.'" and user_pwd="'.$passwordCncode.'"')->find();
		if($user){
			if(isset($_SESSION['username'])&&$_SESSION['username']==$username){
				$this->success('用户已登陆', U('Index/index'),1);
			}else{
				$_SESSION['username']=$username;
				$this->success('登陆成功', U('Personal/index'),1);
			}
			
		}else{
			$this->error('登陆失败，密码错误',U('Index/login'),1);		}
	}

	}