'use strict';

// $(function(){
	var $register = $("#register");
	var $username = $("#username");
	var $password = $("#password");
	var $ensure_pwd = $("#ensure_pwd")
	var $email_address = $("#email_address");
	var $div1 = $("#div1");
	var $div2 = $("#div2");
	var $div3 = $("#div3");
	var $div4 = $("#div4");

	// $(".form-signin").submit(function(){
	// 	check();
	// });
	function checkname(){
		$div1.html("");
		if ($username.val().length === 0) {
			$div1.html("用户名不能为空！");
			$username.focus();
			return false;
		}
		if ($username.val().length < 2 || $username.val().length > 10 ) {
			$div1.html("请输入2-10个字符");
			$username.select();
			return false;
		}
		return true;
	}

	function checkpassword(){
		$div2.html("");
		if ($password.val().length === 0) {
			$div2.html("密码不能为空！");
			$password.focus();
			return false;
		}
		if ($password.val().length < 4 || $password.val().length > 12) {
			$div2.html("密码长度4-12位！");
			$password.select();
			return false;
		}
		return true;
	}

	function checkensure_pwd(){
		$div3.html("");
		if ($ensure_pwd.val().length === 0) {
			$div3.html("密码不能为空！");
			$ensure_pwd.focus();
			return false;
		}
		if ($password.val() != $ensure_pwd.val()) {
			$div3.html("确认密码和输入密码长度不一致!");
			$ensure_pwd.select();
			return false;
		}
		return true;
	}

	 function checkemail(){
        $div4.html("");
        var sw = $email_address.val().indexOf("@", 0);
        var sw1 = $email_address.val().indexOf(".", 0);
        var tt = sw1 - sw;
        if ($email_address.val().length == 0) {
           $div4.html("电子邮件不能位空!");
            $email_address.focus();
            return false;
        }
        if ($email_address.val().indexOf("@", 0) == -1) {
        	$div4.html("电子邮件格式不正确，必须包含@符号！");
           
            $email_address.select();
            return false;
        }
        if ($email_address.val().indexOf(".", 0) == -1) {
            $div4.html("电子邮件格式不正确，必须包含.符号！");
            $email_address.select();
            return false;
        }
        if (tt == 1) {
            $div4.html("邮件格式不对。@和.不可以挨着！");
            $email_address.select();
            return false;
        }
        if (sw > sw1) {
            $div.html("电子邮件格式不正确，@符号必须在.之前");
            $email_address.select();
            return false;
        }
        else {
            return true;
        }
        
        return true;
    }

// });
 function check(){
 	   	if (checkname() && checkpassword() && checkensure_pwd() && checkemail()) {
	        return true;
        }
        else {
            return false;
        }
    }