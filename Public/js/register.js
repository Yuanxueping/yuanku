/*
	袁雪萍
	登录/注册
 */

'use strict';

$(function(){
	var $register = $("#register");
	var $username = $("#username");
	var $wran = $("#warn");
	var $close = $(".close");
	
	$register.click(function(){
		if ($username.val().length === 0) {
			$wran.css("display","block");
			return false;
		}
	});
	
	$close.click(function(){
		$wran.css("display","none");
	})
})
