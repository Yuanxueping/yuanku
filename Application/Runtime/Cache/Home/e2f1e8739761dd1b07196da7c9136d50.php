<?php if (!defined('THINK_PATH')) exit();?><!-- /*
	*yxp
	*注册页面
 */ -->
<!DOCTYPE html>
<html>
<head lang="zh">
	<title><?php echo ($title); ?></title>

	<meta charset="UTF-8">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
	 <link rel="stylesheet" href="/lidong/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/lidong/yuanku/Public/css/home/headAndFoot.css">
	 <script src="/lidong/yuanku/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/lidong/yuanku/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>
=======
	 <link rel="stylesheet" href="/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/yuanku/Public/css/home/headAndFoot.css">
	 <script src="/yuanku/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/yuanku/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>
>>>>>>> a8bd4ad9d7aa3f4fdbe89d306d3f5cdb046bf92d
	 

	<!--  <link rel="stylesheet" href="css/headAndFoot.css" />
	 <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
		
	<!--  <script type="text/javascript" src="js/jquery-1.9.1.min.js" ></script> 
	 <script type="text/javascript" src="js/bootstrap.min.js" ></script>-->



		

		



<<<<<<< HEAD
		<link rel="stylesheet" type="text/css" href="/lidong/yuanku/Public/css/home/register.css"/>
 
  </head>
<body>
<!-- <div class="container-fluid"> -->
=======
		<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/register.css"/>
 
  </head>
<body>
>>>>>>> a8bd4ad9d7aa3f4fdbe89d306d3f5cdb046bf92d
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
<<<<<<< HEAD
		      	<img class="logo" src="/lidong/yuanku/Public/img/logoko2.png" />
=======
		      	<img class="logo" src="/yuanku/Public/img/logoko2.png" />
>>>>>>> a8bd4ad9d7aa3f4fdbe89d306d3f5cdb046bf92d
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
<<<<<<< HEAD
				        <li><a href="/lidong/yuanku/index.php/Home/Index">首页</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/login">登录</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/register">注册</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/news">新闻</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/contact_us">联系我们</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/about_us">关于我们</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/personal">个人中心</a></li>
=======
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
				        
>>>>>>> a8bd4ad9d7aa3f4fdbe89d306d3f5cdb046bf92d
				        <li>
				        	<a  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="cursor: pointer;">
				        		<span class="glyphicon glyphicon-search" style="color: white;" ></span>
				        	</a>
				        </li>
				      </ul>		          			        				        	
<<<<<<< HEAD
	            </div>
		  </div>
	</nav>
=======
	        </div>
		  </div>
		</nav>
>>>>>>> a8bd4ad9d7aa3f4fdbe89d306d3f5cdb046bf92d

		<div class="container">
			<div class="row login_header clearcss">
				
					<div class="col-lg-6 col-md-12">
<<<<<<< HEAD
						<h1>注册</h1>
=======
						<h1>注册用户</h1>

>>>>>>> a8bd4ad9d7aa3f4fdbe89d306d3f5cdb046bf92d
					</div>
					<div class="col-lg-offset-4 col-lg-2 col-md-12">
		              	<a href="index.html" style="opacity:0.6;font-weight:normal;">首页 <i>/</i> </a> 
					</div>
		    </div>
		    
		</div>
		<div class="container  box">
			<div class="col-lg-offset-3 col-lg-6 col-md-12">
<<<<<<< HEAD
 
				<form class="form-signin" role="form" action="/login" onsubmit="return check()" method="POST" enctype="application/x-www-form-urlencoded">
			        <div class="form-header">
			        	<h4>注册</h4>
			        	<p style="margin:0px;">不记得账号或密码?&nbsp;<a href="register.html">注册</a></p>
			        	<p style="margin-top:5px;">已经注册?&nbsp;<a href="login.html">登录</a></p>
			        </div>
			        <!-- <div class="message">
			        	<div id="warn" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>内容不能为空！
			        	</div>
			        </div> -->
			        <!-- 用户名 -->
			        <div class="form-group">
			        	<p class="form-signin-heading">用户名</p>
			          <div class="input-group">
			            <input type="text" class="form-control" name="username" id="username" autocomplete="off" >
			            <div id="div1" style="display:inline;color:red;"></div>
			          </div>
			        </div>
			        <!-- 密码 -->
			        <div class="form-group">
			        	<p class="form-signin-heading">输入密码</p>
			          <div class="input-group">
			            <input type="password" class="form-control" name="password" id="password" autocomplete="off" >
			            <div id="div2" style="display:inline;color:red;"></div>
			          </div>
			        </div>
			        <!-- 确认密码 -->
			        <div class="form-group">
			        	<p class="form-signin-heading">请再次输入密码</p>
			          <div class="input-group">
			            <input type="password" class="form-control" name="ensure_pwd" id="ensure_pwd" autocomplete="off" >
			            <div id="div3" style="display:inline;color:red;"></div>
			           </div>
			        </div>
			         <!-- 邮箱地址 -->
			        <div class="form-group">
			        	<p class="form-signin-heading">请输入您的邮箱地址</p>
			          <div class="input-group">
			            <input type="text" class="form-control" name="email_address" id="email_address" autocomplete="off" >
			            <div id="div4" style="display:inline;color:red;"></div>
			           </div>
			        </div>
			       	<div class="Btn">
						<p>密码重置说明将会发送到你被注册的邮箱地址</p>
			        <button class="btn btn-lg btn-primary btn-block" id="register" type="submit">提交</button>
			       	</div>
			     </form>
			</div>
    </div>
	
		<script src="/lidong/yuanku/Public/js/register.js" type="text/javascript" charset="utf-8"></script>

=======

				<form class="form-signin" role="form" action="/yuanku/index.php/Home/Register/regNewMember" method="POST" enctype="application/x-www-form-urlencoded">
			        <div class="form-header">
			        	<h4>注用户册</h4>
			        	<p style="margin:0px;">不记得账号或密码?&nbsp;<a href="register.html">注册</a></p>

			        	<p style="margin-top:5px;">已经注册?&nbsp;<a href="login.html">登录</a></p>
			        </div>
			        <div class="message">
			        	<div id="warn" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>用户名和密码内容不能低于6位！
			        	</div>
			        	<div id="checkBlank" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>用户名和密码内容不能含有空格字符！
			        	</div>
			        	<div id="checkLogin" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>用户已存在，请使用新的用户名进行注册！或者<a href="./login">直接登陆</a>
			        	</div>
			        </div>
			        <!-- 密码 -->
			        <div class="form-group">

			        	<p class="form-signin-heading">注册用户名或邮箱地址</p>

			        	<p class="form-signin-heading">输入用户名</p>

			          <div class="input-group">
			            <input type="text" class="form-control" name="username" id="username" autocomplete="off" >
			            <div id="div2" style="display:inline;color:red;"></div>
			          </div>

			        </div>
			
			        <div class="form-group">
			        	<p class="form-signin-heading">密码</p>
			          <div class="input-group">
			            <input type="text" class="form-control" name="password" id="password" autocomplete="off">
			          </div>
			        </div>
					<div class="Btn">
			        <button class="btn btn-lg btn-primary btn-block" id="register" type="submit">注册</button>
					</div>
			     </form>
			</div>
    </div>
    
>>>>>>> a8bd4ad9d7aa3f4fdbe89d306d3f5cdb046bf92d

<div class="clearfix"></div>
<nav class="foot-nav" id="back">
			<div class="container-fluid" >
<<<<<<< HEAD
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
							<li><a href="#"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/>捕鱼</a></li><br/>
							<li><a href="#"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/>钓鱼</a></li><br/>
							<li><a href="#"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/>抓鱼</a></li><br/>
												
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
=======
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
>>>>>>> a8bd4ad9d7aa3f4fdbe89d306d3f5cdb046bf92d
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
<<<<<<< HEAD
<!-- </div> -->
	</body>
</html>
=======
	</body>
</html>
	<script>
		$(function(){
			var $register = $("#register");
			var $username = $("#username");
			var $wran = $("#warn");
			var $mail = $("#mail");
			var $close = $(".close");
			var $checkLogin=$('#checkLogin');
			var $checkBlank=$('#checkBlank');
			
			$register.click(function(){
				if ($username.val().length < 6||$('#password').val().length<6) {
					$wran.css("display","block");
					return false;
				}
			});
		    
			
			$close.click(function(){
				$wran.css("display","none");
				$checkBlank.css("display","none");
				$checkLogin.css("display","none");
				return false;
			});


			$username.change(function(){
			/*非空见擦*/
			if ($username.val().length > 0) {
					$wran.css("display","none");
				}	
			/* 字符串空格检查*/
			var str=$username.val();
			var Bnum=0;
			for(var i=0;i<str.length;i++){
				if(str.charCodeAt(i)==32){
					Bnum++;
				}
			}
			if(Bnum>0){
				$('#checkBlank').css('display','block');
			}else{
				$('#checkBlank').css('display','none');
			}

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
					   $checkLogin.css('display','block');
					}else{
						 $checkLogin.css('display','none');
					}
				}
			});
			});

			$('#password').change(function(){
				/*非空见擦*/
				if ($('#password').val().length > 0) {
					$wran.css("display","none");
				}	
				/*检查空格*/
				var str=$('#password').val();
				var Bnum=0;
				for(var i=0;i<str.length;i++){
					if(str.charCodeAt(i)==32){
					Bnum++;
					}
				}
				if(Bnum>0){
				$('#checkBlank').css('display','block');
				}else{
				$('#checkBlank').css('display','none');
				}	
			});

		})
		</script>			
		<script src="/yuanku/Public/js/register.js" type="text/javascript" charset="utf-8"></script>
>>>>>>> a8bd4ad9d7aa3f4fdbe89d306d3f5cdb046bf92d
