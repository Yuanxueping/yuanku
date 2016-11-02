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
	 <link rel="stylesheet" href="/lidong/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/lidong/yuanku/Public/css/home/headAndFoot.css">
	 <script src="/lidong/yuanku/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/lidong/yuanku/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>
	  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
      <![endif]-->



		

		



		<link rel="stylesheet" type="text/css" href="/lidong/yuanku/Public/css/home/register.css"/>
 
  </head>
<body>
<!-- <div class="container-fluid"> -->
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
		      <a class="navbar-brand" href="<?php echo U('Index/index');?>">
		      	<img class="logo" src="/lidong/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="<?php echo U('Index/index');?>">首页</a></li>
				        
				        <li><a href="<?php echo U('Index/news');?>">推荐</a></li> 
				        <li><a href="<?php echo U('Nba/index');?>">篮球</a></li>
				        <!-- <li><a href="/lidong/yuanku/index.php/Home/Index/news">足球</a></li> -->
				        
				        <li><a href="<?php echo U('Index/contact_us');?>">联系我们</a></li>

				        <li><a href="<?php echo U('Index/about_us');?>">关于我们</a></li>  
				        <li>
				        <a href="
				        	<?php if(isset($_SESSION['username'])) {echo '/lidong/yuanku/index.php/Home/Personal/index';} else{ echo '/lidong/yuanku/index.php/Home/Index/login'; } ?>
				        ">
				        <?php  if(isset($_SESSION['username'])){ echo $_SESSION['username']; }else{ echo '登陆'; } ?>
				        </a>
				        </li>
				        <li>
				        	<a href="
				        		<?php if(isset($_SESSION['username'])) {echo '/lidong/yuanku/index.php/Home/Personal/logout';} else{ echo '/lidong/yuanku/index.php/Home/Index/register'; } ?>
				        	">
				        		<?php if(isset($_SESSION['username'])) {echo '退出';} else{ echo '注册'; } ?>
				        	</a>
				        </li>
 
				        <li>
				        	<a  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="cursor: pointer;">
				        		<span class="glyphicon glyphicon-search" style="color: white;" ></span>
				        	</a>
				        </li>
				      </ul>		          			        				        	
	            </div>
		  </div>
	</nav>

		<div class="container">
			<div class="row login_header clearcss">
				
					<div class="col-lg-6 col-md-12">
						<h1>注册用户</h1>

					</div>
					<div class="col-lg-offset-4 col-lg-2 col-md-12">
		              	<a href="index.html" style="opacity:0.6;font-weight:normal;">首页 <i>/</i> </a> 
					</div>
		    </div>
		    
		</div>
		<div class="container  box">
			<div class="col-lg-offset-3 col-lg-6 col-md-12">

				<form class="form-signin" role="form" action="/lidong/yuanku/index.php/Home/Register/regNewMember" method="POST" enctype="application/x-www-form-urlencoded">
			        <div class="form-header">
			        	<h2>用户注册</h2>
			        </div>
			        <div class="message">
			        	<div id="warn" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>请输入2-6个字符的用户名！
			        	</div>
			        	<div id="warn1" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>密码内容不能低于6位！
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
			        	<p class="form-signin-heading">用户名</p>

			          <div class="input-group">
			          	<!-- <input type="text" class="form-control" name="username" id="username" autocomplete="off> -->
			            <input type="text" class="form-control" name="username" id="username" autocomplete="off" placeholder="请输入用户名或邮箱">
			            <div id="div2" style="display:inline;color:red;"></div>
			          </div>

			        </div>
			
			        <div class="form-group">
			        	<p class="form-signin-heading">密码</p>
			          <div class="input-group">
			            <!-- <input type="text" class="form-control" name="password" id="password" autocomplete="off"> -->
			            <input type="password" class="form-control" name="password" id="password" autocomplete="off" placeholder="请输入6-18位的密码，建议含中英文">
			          </div>
			        </div>
					<div class="Btn">
			        <button class="btn btn-lg btn-primary btn-block" id="register" type="submit">注册
			        </button>
			        <p style="margin-top:5px;">已经注册?&nbsp;<a href="login.html">登录</a></p>
					</div>
			     </form>
			</div>
    </div>
    

<div class="clearfix"></div>
<nav class="foot-nav" id="back">
			<div class="container-fluid" >
				<div class="container">
					<div class="row" >
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul>
								<li><a href=""><h4>友情链接</h4></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>百度一下</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>淘宝商城</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>腾讯首页</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>网易新闻</span></a></li>							
							</ul>						
						</div>					
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><a href="/lidong/yuanku/index.php/Home/Index/about_us"><h4>最新动态</h4></a></li><br/>
								 <?php echo get_new_list(); ?>
								
								<!--<li><a href="#"><span class="size"><img src="/lidong/yuanku/Public/img/highstand homepage/site-img224.jpg"/></span><span>上海</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/lidong/yuanku/Public/img/highstand homepage/site-img225.jpg"/></span><span>新闻</span></a></li><br/>-->
					            
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><a href="/lidong/yuanku/index.php/Home/Index/about_us"><h4>关于我们</h4></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;&nbsp;<span>技术中心</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>&nbsp;&nbsp;<span>产品特色</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;<span>结算流程</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;&nbsp;<span>服务宗旨</span></a></li>
						   </ul>
						</div>
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><a href="/lidong/yuanku/index.php/Home/Index/contact_us"><h4>联系我们</h4></a></li></br>
								<li><a href="#"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp;&nbsp;<span>511186470@qq.com</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp;&nbsp;<span>0201-6666666</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-map-marker"aria-hidden="true"></span>&nbsp;&nbsp;<span>美国洛杉矶</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>&nbsp;&nbsp;<span>邮政编码：88888</span></a></li>							
						    </ul>
						</div>				
					</div>	
				</div>
			</div>
			<div class="foot-text">
				<p>Copyright © 2016 lidong.com. All rights reserved. Terms of Use | Privacy Policy</p>
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
		        <form action="<?php echo U("Index/lookfor");?>" method="post">
		          <div class="form-group">
		            <label for="recipient-name" class="control-label">请输入你要搜索的内容</label>
		            <input type="text" class="form-control" id="recipient-name" name="search">
		          </div>
		          <!--<div class="form-group">
		            <label for="message-text" class="control-label">Message:</label>
		            <textarea class="form-control" id="message-text"></textarea>
		          </div>-->
		           <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			        <button type="submit" class="btn btn-primary">搜索</button>
		          </div>
		        </form>
		      </div>
		     
		    </div>
		  </div>
		 
</div>
<!-- </div> -->
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
			var $warn1 = $("#warn1");
			
			$register.click(function(){
				if ($username.val().length < 2|| $username.val().length > 6) {
					$wran.css("display","block");
					return false;
				}
				if ($('#password').val().length<6) {
					$warn1.css("display","block");
					return false;
				}
			});
		    
			
			$close.click(function(){
				$wran.css("display","none");
				$checkBlank.css("display","none");
				$checkLogin.css("display","none");
				$warn1.css("display","none");
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
		<script src="/lidong/yuanku/Public/js/register.js" type="text/javascript" charset="utf-8"></script>