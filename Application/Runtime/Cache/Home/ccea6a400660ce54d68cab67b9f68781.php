<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh">
	<title><?php echo ($title); ?></title>

	<meta charset="UTF-8">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/yuanku/Public/css/home/headAndFoot.css">
	 <script src="/yuanku/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/yuanku/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>

	<!--  <link rel="stylesheet" href="css/headAndFoot.css" />
	 <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
		
	<!--  <script type="text/javascript" src="js/jquery-1.9.1.min.js" ></script> 
	 <script type="text/javascript" src="js/bootstrap.min.js" ></script>-->

	<!--HOME css-->
	<link rel="stylesheet" href="/yuanku/Public/css/home/home.css" />
	
</head>
<body>

	<nav class="navbar navbar-default top-nav" >
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header"> 
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <!--<a class="navbar-brand" href="#">
		      	<img class="logo" src="img/logo.png" />
		      </a>-->
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="/yuanku/index.php/Home/Index">首页</a></li>
				        <li><a href="/yuanku/index.php/Home/Index/login">登录</a></li>
				        <li><a href="/yuanku/index.php/Home/Index/register">注册</a></li>
				        <li><a href="/yuanku/index.php/Home/Index/news">新闻</a></li>
				        <li><a href="/yuanku/index.php/Home/Index/contact_us">联系我们</a></li>
				        <li><a href="/yuanku/index.php/Home/Index/about_us">关于我们</a></li>
				        <li>
				        	<a  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="cursor: pointer;">
				        		<span class="glyphicon glyphicon-search" style="color: white;" ></span>
				        	</a>
				        </li>
				      </ul>		          			        				        	
	        </div>
		  </div>
		</nav>

		<div style="height:300px"></div>


		<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/register.css"/>
		<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/transform.css"/>
		
		<script src="/yuanku/Public/js//register.js" type="text/javascript" charset="utf-8"></script>

		<div class="container">
			<div class="row login_header clearcss">
				
					<div class="col-lg-6 col-md-12">
						<h1>登录</h1>
					</div>
					<div class="col-lg-offset-4 col-lg-2 col-md-12">
		              	<a href="">首页 <i>/</i> </a> 
					</div>
		    </div>
		    
		</div>
		<div class="container  box">
			<div class="col-lg-offset-3 col-lg-6 col-md-12">
				<form class="form-signin" role="form" action="/login" method="POST" enctype="application/x-www-form-urlencoded">
			        <div class="form-header">
			        	<h4>账号登录</h4>
			        	<p>不记得账号或密码?&nbsp;<a href="">注册</a></p>
			        	<p><a href="">忘记密码？</a></p>
			        </div>
			        <div class="message">
			        	<div id="warn" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>内容不能为空！
			        	</div>
			        </div>
			        <div class="form-group">
			        	<p class="form-signin-heading"><img src="/yuanku/Public/img/login/user.png"/>&nbsp;用户名/邮箱</p>
			          <div class="input-group">
			            <input type="text" class="form-control" name="username" id="username"  autocomplete="off">
			          </div>
			          <p style="margin-top: 10px;">输入用户名或邮箱</p>
			          <p class="form-signin-heading"><img src="/yuanku/Public/img/login/pwd.png"/>&nbsp;密码</p>
			          <div class="input-group">
			            <input type="text" class="form-control" name="username" id="username"  autocomplete="off">
			          </div>
			          <p style="margin-top: 10px;">输入与用户名相匹配的密码</p>
			        </div>
					<div class="Btn">
						<!--<p>Password reset instructions will be send to your registered email address</p>-->
			        <button class="btn btn-lg btn-primary btn-block" id="register" type="submit">登录</button>
					</div>
			     </form>
			</div>
    </div>




<nav class="foot-nav" style="background-color: #727272;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-lg-12">
						<ul class="clearfix">
							<li><h4>友情连接</h4></li><br/>
							<li><a href="#">1</a></li><br/>
							<li><a href="#">2</a></li><br/>
							<li><a href="#">3</a></li><br/>
							<li><a href="#">4</a></li>							
						</ul>						
					</div>					
					<div class="col-lg-3 col-md-6 col-lg-12">
						<ul >
							<li><h4>最新动态</h4></li><br/>
							<li><a href="#">1</a></li><br/>
							<li><a href="#">2</a></li><br/>
							<li><a href="#">3</a></li><br/>
							<li><a href="#">4</a></li>							
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-lg-12">
						<ul >
							<li><h4>关于我们</h4></li><br/>
							<li><a href="#">1</a></li><br/>
							<li><a href="#">2</a></li><br/>
							<li><a href="#">3</a></li><br/>
							<li><a href="#">4</a></li>
					   </ul>
					</div>
					<div class="col-lg-3 col-md-6 col-lg-12">
						<ul >
							<li><h4>邮箱地址</h4></li></br>
							<li><a href="#">1</a></li><br/>
							<li><a href="#">2</a></li><br/>
							<li><a href="#">3</a></li><br/>
							<li><a href="#">4</a></li>							
					    </ul>
					</div>				
				</div>	
			</div>
			<div class="foot-text" style="background-color:#727272;">
				<p class="text-center">Copyright? 2003-2016 </p>
			</div>
		</nav>
<!--摸态框-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="exampleModalLabel">搜索</h4>
		      </div>
		      <div class="modal-body">
		        <form>
		          <div class="form-group">
		            <label for="recipient-name" class="control-label">请输入你要搜索的内容</label>
		            <input type="text" class="form-control" id="recipient-name">
		          </div>
		          <!--<div class="form-group">
		            <label for="message-text" class="control-label">Message:</label>
		            <textarea class="form-control" id="message-text"></textarea>
		          </div>-->
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Search</button>
		      </div>
		    </div>
		  </div>
</div>
	</body>
</html>