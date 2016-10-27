<?php
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller {
	public function registerController(){
		parent::__constuct();
	}
	public function index(){
		
	}
	public function userExistCheck(){
		/*接受注册页面的ajax传过来的用户名进行检查*/
		$username=I('username');
		$sql="`user_name`='".$username."'";
		$users=M('clientUser')->where($sql)->find();
		if($users){
			 echo json_encode('ok'); 		
		}else{
   		 	 echo json_encode('error'); 
 		}
	}


	public function regNewMember(){
	
		$person['user_name']=I('username');
		//密码加密
		// $person['user_pwd']=md5(I('password'));
		
		// 密码无加密
		$person['user_pwd']=I('password');
		$person['create_time']=date("Y-m-d H:i:s",time());
		
		// dump($person);
        $users=M('clientUser');
			if($users->add($person)){
				$this->success('注册成功，请登陆',U('Index/login'),3);
			}else{
				if($users->add($person)){
				$this->success('注册失败，请注册',U('Index/register'),3);
				}
			}
		}
}