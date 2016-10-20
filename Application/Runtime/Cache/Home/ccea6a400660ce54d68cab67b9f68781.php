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



		

		


		<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/register.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/transform.css"/> -->
		

		<script src="/yuanku/Public/js//register.js" type="text/javascript" charset="utf-8"></script>
  </head>
<body>
	<nav class="navbar navbar-default top-nav navbar-fixed-top gaise">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header"> 
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">
		      	<img class="logo" src="/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="/yuanku/index.php/Home/Index/Index">首页</a></li>
				        <li>
				        <a href="
				        	<?php if(isset($_SESSION['username'])) {echo '/yuanku/index.php/Home/Personal/index';} else{ echo '/yuanku/index.php/Home/Index/login'; } ?>
				        ">
				        <?php  if(isset($_SESSION['username'])){ echo $_SESSION['username']; }else{ echo '登陆'; } ?>
				        </a>
				        </li>
				        <li>
				        	<a href="
				        		<?php if(isset($_SESSION['username'])) {echo '/yuanku/index.php/Home/Personal/logout';} else{ echo '/yuanku/index.php/Home/Index/register'; } ?>
				        	">
				        		<?php if(isset($_SESSION['username'])) {echo '退出';} else{ echo '注册'; } ?>
				        	</a>
				        </li>
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

		<!-- <script src="/yuanku/Public/js/login.js" type="text/javascript" charset="utf-8"></script> -->

		<div class="container">
			<div class="row login_header clearcss">
				
					<div class="col-lg-6 col-md-12">
						<h1>登录</h1>
					</div>
					<div class="col-lg-offset-4 col-lg-2 col-md-12">
		              	<a href="index.html" style="opacity:0.6;font-weight:normal;">首页 <i>/</i> </a> 
					</div>
		    </div>
		    
		</div>
		<div class="container  box">
			<div class="col-lg-offset-3 col-lg-6 col-md-12">
				<form class="form-signin" role="form" action="/yuanku/index.php/Home/Login/checkLogin" method="POST" enctype="application/x-www-form-urlencoded">
			        <div class="form-header">
			        	<h4>账号登录</h4>
			        	<p style="margin:0px;">不记得账号或密码?&nbsp;<a href="register.html">注册</a></p>
			        	<p style="margin-top:5px;"><a href="register.html">忘记密码？</a></p>
			        </div>
			        <div class="message">
			        	<div id="warn" class="alert alert-warning alert-dismissable warn" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>用户名不能为空！
			        	</div>
			        	<div id="notassign" class="alert alert-warning alert-dismissable warn" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>该用户未注册，请重新输入
			        	</div>
			        </div>
			        <div class="form-group">
			        	<p class="form-signin-heading"><img src="/yuanku/Public/img/login/user.png"/>&nbsp;用户名/邮箱</p>
			          <div class="input-group">
			            <input type="text" class="form-control" name="username" id="username"  autocomplete="off">
			          </div>
			          <p style="margin-top: 10px;">输入用户名或邮箱</p>
			          
			        </div>
			        <div class="message">
			        	<div id="warn" class="warn_p alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close close_p" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>密码不能为空！
			        	</div>
			        </div>
			        <div class="form-group" style="margin-top:0px;">
						<p class="form-signin-heading" style="margin-top:0px;"><img src="/yuanku/Public/img/login/pwd.png"/>&nbsp;密码</p>
			          <div class="input-group">
			            <input type="text" class="form-control" name="password" id="password"  autocomplete="off">
			          </div>
			          <p style="margin-top: 10px;">输入与用户名相匹配的密码</p>
			        </div>
					<div class="Btn">
						<!--<p>Password reset instructions will be send to your registered email address</p>-->
			        <button class="btn btn-lg btn-primary btn-block" id="login" type="submit">登录</button>
					</div>
			     </form>
			</div>
    </div>
	<script>
		$(function(){
			var $login = $("#login");
			var $username = $("#username");
			var $password = $("#password");
			var $wran = $("#warn");
			var $close = $(".close");
			var $warn_p = $(".warn_p");
			var $close_p = $(".close_p");
			var $notassign=$('#notassign');
			$login.click(function(){
				if ($username.val().length === 0) {
					$wran.css("display","block");
					return false;
					$warn.css("display","none");
				} else{
					if ($password.val().length === 0) {
						$warn_p.css("display","block");
						return false;
					}
				}
			});
			$username.change(function(){
				/*ajax 查询用户知否已经注册*/
				var data='username='+$username.val();
				console.log(data);
				var path=window.location.pathname;
				var urlSlice=path.split('Home');
				url=urlSlice[0]+'Home/Register/userExistCheck';
				$.ajax({
					type:"GET",
					url:url,
					data:data,
					dataType:"json",
					success:function(data){
						console.log(data);
						data=data.toString();
						if(data!="error"){
						   $notassign.css('display','none');
						}else{
							 $notassign.css('display','block');
						}
					}
				});
			});
			$close.click(function(){
				$(".warn").css("display","none");
				return false;
			});
			$close_p.click(function(){
				$warn_p.css("display","none");
				return false;
			});
		})
	</script>


<div class="clearfix"></div>
<nav class="foot-nav" id="back">
			<div class="container-fluid" >
				<div class="container">
					<div class="row" >
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
								<li><a href="#"><img src="/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/>捕鱼</a></li><br/>
								<li><a href="#"><img src="/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/>钓鱼</a></li><br/>
								<li><a href="#"><img src="/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/>抓鱼</a></li><br/>
													
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
			</div>
			<div class="foot-text">
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