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

	<nav class="navbar navbar-default top-nav navbar-fixed-top" >
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

		


<!-- <!DOCTYPE HTML>
<html>
	<head>
		<title>联系我们页面</title> -->
		<!-- <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/contact_us.css"/> -->
		<link rel="stylesheet" href="/yuanku/Public/css/home/contact_us.css">
	<!-- </head>
	<body> -->

		<div class="contact_us">
			<!-- <div class="map_contact">
				<a href="#" class="a_style">View Larger Map</a>
			</div> -->
			<div class="container-fluid">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-7 col-sm-7 col-xs-10 col-xs-offset-1 contact_left">
							<!-- <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p> -->
							<p>随时与我们在线的代表交流，任何时候你请上我们的网站或使用我们的在线聊天系统低于即时消息程序。</p>
							<!-- <p>Please be patient while waiting for response. (24/7 Support!) <strong>Phone General Inquiries: 1-888-123-4567-8900</strong></p> -->
							<p>请耐心等待响应。 (24/7 支持！) <strong>电话查询: 1-888-123-4567-8900</strong></p>
							<form role="form">
								<div class="form-group">
								    <!-- <label for="name">Your Name</label> -->
								    <label for="name">姓名</label>
								    <input type="text" class="form-control" id="name">
								</div>
								<div class="form-group">
								    <!-- <label for="email">Your email address</label> -->
								    <label for="email">邮箱</label>
								    <input type="email" class="form-control" id="email">
								</div>
								<div class="form-group">
								    <!-- <label for="subject">Subject</label> -->
								    <label for="subject">主题</label>
								    <input type="text" class="form-control" id="subject">
								</div>
								<div class="form-group">
								    <!-- <label for="message">Message</label> -->
								    <label for="message">内容描述</label>
								    <textarea class="form-control" id="message" rows="15"></textarea>
								</div>
								<div class="submit_btn">
									<!-- <input type="submit" class="btn" value="SEND MESSAGE">
									<input type="submit" class="btn" value="PREVIEW"> -->
									<input type="submit" class="btn" value="发送信息">
									<input type="submit" class="btn" value="预览">
								</div>
							</form>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-10 col-xs-offset-1 contact_right">
							<address>
								<h4>地址一</h4>
								<ul>
									<li>
										<strong>公司名称</strong><br>
										2901 马尔路，Glassgow，西雅图，华盛顿州 98122 1090<br>
										电话: +1 1234-567-89000<br>
										传真: +1 0123-4567-8900<br>
										邮箱: <a href="mailto:#" class="a_style">mail@companyname.com</a><br>
										网址: <a href="#" class="a_style">www.yoursitename.com</a>
									</li>
								</ul>
							</address>
							<address>
								<h4>地址二</h4>
								<ul>
									<li>
										<strong>公司名称</strong><br>
										2901 马尔路，Glassgow，西雅图，华盛顿州 98122 1090<br>
										电话: +1 1234-567-89000<br>
										传真: +1 0123-4567-8900<br>
										邮箱: <a href="mailto:#" class="a_style">mail@companyname.com</a><br>
										网址: <a href="#" class="a_style">www.yoursitename.com</a>
									</li>
								</ul>
							</address>
							
							<!-- <address>
								<h4>Address Two</h4>
								<ul>
									<li>
										<strong>Company Name</strong><br>
										2901 Marmora Road, Glassgow, Seattle, WA 98122-1090<br>
										Telephone: +1 1234-567-89000<br>
										FAX: +1 0123-4567-8900<br>
										E-mail: <a href="mailto:#" class="a_style">mail@companyname.com</a><br>
										Website: <a href="#" class="a_style">www.yoursitename.com</a>
									</li>
								</ul>
							</address> -->
						</div>

					</div>
				</div>
			</div>
		</div>
	<!-- </body>
</html> -->
		


<div class="clearfix"></div>
<nav class="foot-nav" id="back">
			<div class="container-fluid" >
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