/*
	袁雪萍
	登录/注册
 */

'use strict';

$(function(){
	var $login = $("#login");
	var $username = $("#username");
	var $password = $("#password");
	var $wran = $("#warn");
	var $close = $(".close");
	
	$login.click(function(){
		if ($username.val().length === 0) {
			$wran.css("display","block");
			return false;
			$warn.css("display","none");
		} else{
			if ($password.val().length === 0) {
				$wran.css("display","block");
				return false;
			}
		}
	});
	
	$close.click(function(){
		$wran.css("display","none");
		return false;
	})
})
