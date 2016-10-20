<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title><?php echo ($title); ?>  后台管理</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  
    

  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#3f51b5">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#3f51b5">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
 
  <link rel="stylesheet" href="/yuanku/Public/css/admin/bootstrap.css">
  <link rel="stylesheet" href="/yuanku/Public/css/admin/material-design-iconic-font.css">
  <link rel="stylesheet" href="/yuanku/Public/css/admin/animate.css">
  <link rel="stylesheet" href="/yuanku/Public/css/admin/metisMenu.css">
  <link rel="stylesheet" href="/yuanku/Public/css/admin/jquery_002.css">
  <link rel="stylesheet" href="/yuanku/Public/css/admin/waves.css">
  <link rel="stylesheet" href="/yuanku/Public/css/admin/toastr.css">



  <link rel="stylesheet" href="/yuanku/Public/css/admin/jquery.css">

  <link rel="stylesheet" href="/yuanku/Public/css/admin/style.css">
  <link rel="stylesheet" href="/yuanku/Public/css/admin/common.css">
  <script src="/yuanku/Public/js/jquery.js"></script>

  

<body   class="user-page" style="overflow: visible;">
 
 
  <div class="wrapper warning-bg">
      <div class="table-wrapper text-center">
        <div class="table-row">
          <div class="table-cell">
            <div class="login">

                  <h4 class="text-center">力动管理后台登录</h4>
                  <form method="post" action="<?php echo U('Login/index');?>">
                    <div class="form-group">
                      <input type="text" class="form-control" id="login" name="user_name">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="user_pwd">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="请输入验证码" id="password" name="verify"> 
                      <img src="<?php echo U('Login/get_verify');?>" alt="" onclick="$(this).attr('src','<?php echo U('Login/get_verify');?>?'+Math.random())">
                    </div>
                  <!--   <div class="form-group text-left">
                      <div class="checkbox checkbox-primary">
                        <label><input type="checkbox">
                          <i></i></label>
                          <span class="white f-s-16 m-l-5">Remember me</span>
                      </div>
                    </div> -->

                    <button type="submit" class="btn btn-block btn-lg btn-primary">登录</button>

                  </form>

            </div>
          </div>
        </div>
      </div>

  </div>
  <style>
.flot-tooltip{display: none !important;}
  </style>

  </body>
</html>