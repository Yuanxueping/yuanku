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
 
  <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/admin/bootstrap.css"> 
  <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/admin/animate.css">
  <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/admin/metisMenu.css">
  <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/admin/jquery_002.css">
  <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/admin/waves.css">
  <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/admin/toastr.css">



  <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/admin/jquery.css">

  <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/admin/style.css">
  <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/admin/common.css">
  <script src="/thinkphp_3.2.3_full/yuanku/Public/js/jquery.js"></script>
  <!-- 第一步引用 -->
  <script src="/thinkphp_3.2.3_full/yuanku/Public/js/angular.min.js"></script>

  



<body   class="user-page" style="overflow: visible;">
 
 
  <div class="wrapper warning-bg">
      <div class="table-wrapper text-center">
        <div class="table-row">
          <div class="table-cell">
            <div class="login">

                  <h4 class="text-center">力动管理后台登录</h4>
<!-- action="<?php echo U('Login/index');?>" -->
                  <form ng-submit="get_val();" name="myForm" ng-app="myApp" ng-controller="validateCtrl" method="post"  novalidate>
                    <div class="form-group">
                      <input type="text" class="form-control" id="login" name="user_name" required ng-model='data_user.user_name'>
                      <span>
                        {{user_name}}
                      </span>
                      <span style="color:red" ng-show="myForm.user_name.$dirty">
                        <span ng-show="myForm.user_name.$error.required">用户名是必须的。</span>
                      </span>
                        <!-- <span ng-show="myForm.user_name.$error.email">用户名的邮箱格式错误！</span> -->
                       
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="user_pwd" required ng-model="data_user.user_pwd">
                      <!--  && myForm.user_pwd.$invalid -->
                      <span style="color:red" ng-show="myForm.user_pwd.$dirty && myForm.user_pwd.$invalid">
                        <span ng-show="myForm.user_pwd.$error.required">密码不能为空！</span>
                        </span>
                    </div>

                    <div class="form-group">
                      <input type="text" ng-model="data_user.verify" class="form-control" placeholder="请输入验证码" required  name="verify"> 
                      <span style="color:red" ng-show="myForm.verify.$dirty && myForm.verify.$invalid">

                        <span ng-show="myForm.verify.$error.required">验证码不能为空！</span>
                        </span>
                      
                      <img src="<?php echo U('Login/get_verify');?>" alt="" onclick="$(this).attr('src','<?php echo U('Login/get_verify');?>?'+Math.random())">
                    </div>
                  <!--   <div class="form-group text-left">
                      <div class="checkbox checkbox-primary">
                        <label><input type="checkbox">
                          <i></i></label>
                          <span class="white f-s-16 m-l-5">Remember me</span>
                      </div>
                    </div> -->
                    
                    <button type="submit" ng-disabled=" myForm.user_name.$invalid || myForm.verify.$invalid || myForm.user_pwd.$invalid" class="btn btn-block btn-lg btn-primary">登录</button>
                    <div> {{ message }}</div>
<!-- <span ng-bind="hl_bd()"></span> -->
                  </form>

            </div>
          </div>
        </div>
      </div>

  </div>

  <style>
.flot-tooltip{display: none !important;}
  </style>
<script>
  var app = angular.module('myApp', []);
  app.controller('validateCtrl',function  ($scope,$http) {
     // $scope.user_name='adminster';
     // $scope.hl_bd=function  () {
     //   return $scope.data_user.user_name;
     // }
     $scope.get_val = function  () {
          $http({
                  method  : 'POST',
                  url     : '<?php echo U("Login/ajax_login");?>',
                  data    : $.param($scope.data_user),  // pass in data as strings
                  headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
              })
                  .success(function(data) {
           
                      if (data.stauts==1) {
                          location.href='<?php echo U("index/index");?>';
                      } else {
                          console.log(data.message);
                          // if successful, bind success message to message
                          $scope.message = data.message;
                      }
                  });
     }
      
  })
 
</script>
  </body>
</html>