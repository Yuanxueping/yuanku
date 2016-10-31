<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh">
	<title><?php echo ($title); ?></title>

	<meta charset="UTF-8">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="/clone/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/clone/yuanku/Public/css/home/headAndFoot.css">
	 <script src="/clone/yuanku/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/clone/yuanku/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>
	  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
      <![endif]-->



		

		


<!-- 联系我们页面的样式 -->
<link rel="stylesheet" href="/clone/yuanku/Public/css/home/contact_us.css">

<!-- copy的两个关于我们页面底部的样式 -->
<link rel="stylesheet" type="text/css" href="/clone/yuanku/Public/css/home/about.css"/>
<!-- <link rel="stylesheet" href="/clone/yuanku/Public/css/home/site.min.css">  -->

<!-- copy的 登陆页面 头部-->
<link rel="stylesheet" type="text/css" href="/clone/yuanku/Public/css/home/register.css"/>
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
		      	<img class="logo" src="/clone/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="<?php echo U('Index/index');?>">首页</a></li>
				        
				        <li><a href="<?php echo U('Index/news');?>">推荐</a></li> 
				        <li><a href="<?php echo U('Nba/index');?>">篮球</a></li>
				        <!-- <li><a href="/clone/yuanku/index.php/Home/Index/news">足球</a></li> -->
				        
				        <li><a href="<?php echo U('Index/contact_us');?>">联系我们</a></li>

				        <li><a href="<?php echo U('Index/about_us');?>">关于我们</a></li>  
				        <li>
				        <a href="
				        	<?php if(isset($_SESSION['username'])) {echo '/clone/yuanku/index.php/Home/Personal/index';} else{ echo '/clone/yuanku/index.php/Home/Index/login'; } ?>
				        ">
				        <?php  if(isset($_SESSION['username'])){ echo $_SESSION['username']; }else{ echo '登陆'; } ?>
				        </a>
				        </li>
				        <li>
				        	<a href="
				        		<?php if(isset($_SESSION['username'])) {echo '/clone/yuanku/index.php/Home/Personal/logout';} else{ echo '/clone/yuanku/index.php/Home/Index/register'; } ?>
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
				<h1>联系我们</h1>
			</div>
			<div class="col-lg-offset-4 col-lg-2 col-md-12">
              	<a href="index.html" style="opacity:0.6;font-weight:normal;">首页 <i>/</i> </a> 
			</div>
    </div>
</div>

<!-- 联系我们的主体页面 -->
<div class="contact_us">
	<!-- <div class="row contact_head"> -->
		<!-- <div class="col-md-9 col-sm-9 col-xs-12"> -->
			<!-- <h1>联系我们</h1>
			<div class="col-md-offset-9 col-sm-3 col-xs-12">
              	<a href="">首页 <i>/</i> </a> 
			</div> -->
		<!-- </div> -->
	<!-- </div> -->
		
	<!-- <div class="map_contact">
		<a href="#" class="a_style">View Larger Map</a>
	</div> -->
	<div class="container-fluid">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-xs-10 col-xs-offset-1 contact_left">
					<!-- <p>随时与我们在线的代表交流，任何时候你请上我们的网站或使用我们的在线聊天系统低于即时消息程序。</p>
					<p>请耐心等待响应。 (24/7 支持！) <strong>电话查询: 1-888-123-4567-8900</strong></p> -->
					<p>任何对我们产品、服务的疑问、不满、意见及建议欢迎随时与我们联系。感谢您的信任和支持！</p>
					<p>请耐心等待响应。 (支持24小时/7天服务！) <strong>电话查询: 1-888-123-4567-8900</strong></p>
					<form role="form" action="<?php echo U('Index/contact_us');?>" method="POST">
						
						<div class="form-group">
						    <label for="fb_name">姓名</label>
						    <div class="message">
					        	<div id="warn" class="alert alert-warning alert-dismissable" style="display: none;"> 
					        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					        		<strong>警告！&nbsp;&nbsp;</strong>用户姓名不能为空！
					        	</div>
					        	<div id="checkBlank" class="alert alert-warning alert-dismissable" style="display: none;"> 
					        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					        		<strong>警告！&nbsp;&nbsp;</strong>用户姓名不能含有空格字符！
					        	</div>
					        </div>
						    <input type="text" class="form-control" name="fb_name" id="fb_name">
						</div>

						<div class="form-group">
						    <label for="fb_email">邮箱</label>
						    <div class="message">
					        	<div id="warn1" class="alert alert-warning alert-dismissable" style="display: none;"> 
					        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					        		<strong>警告！&nbsp;&nbsp;</strong>邮箱不能为空！
					        	</div>
					        	<div id="checkEmail" class="alert alert-warning alert-dismissable" style="display: none;"> 
					        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					        		<strong>警告！&nbsp;&nbsp;</strong>请输入正确格式的邮箱地址！
					        	</div>
					        </div>
						    <input type="email" class="form-control" name="fb_email" id="fb_email">
						</div>

						<div class="form-group">
						    <label for="fb_theme">主题</label>
				        	<div id="warn2" class="alert alert-warning alert-dismissable" style="display: none;"> 
				        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				        		<strong>警告！&nbsp;&nbsp;</strong>主题不能为空！
				        	</div>
						    <input type="text" class="form-control" name="fb_theme" id="fb_theme">
						</div>

						
						<div class="form-group">
						    <label for="fb_msg">内容描述</label>
						    <div id="warn3" class="alert alert-warning alert-dismissable" style="display: none;"> 
				        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				        		<strong>警告！&nbsp;&nbsp;</strong>内容描述不能为空！
				        	</div>
						    <textarea class="form-control" name="fb_msg" rows="15" id="fb_msg"></textarea>
						</div>
						<div class="submit_btn">
							<input type="submit" class="btn" id="submit" value="发送信息">
							<!-- <input type="submit" class="btn" value="预览"> -->
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
				</div>
			</div>
		</div>
	</div>
</div>

<script src="/clone/yuanku/Public/js/contact_us.js" type="text/javascript" charset="utf-8"></script>	


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
								<li><a href="/clone/yuanku/index.php/Home/Index/about_us"><h4>最新动态</h4></a></li><br/>
								<li><a href="#"><span class="size"><img src="/clone/yuanku/Public/img/highstand homepage/site-img225.jpg "/></span><span>灯塔</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/clone/yuanku/Public/img/highstand homepage/site-img224.jpg"/></span><span>上海</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/clone/yuanku/Public/img/highstand homepage/site-img225.jpg"/></span><span>新闻</span></a></li><br/>
					
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><a href="/clone/yuanku/index.php/Home/Index/about_us"><h4>关于我们</h4></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;&nbsp;<span>技术中心</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>&nbsp;&nbsp;<span>产品特色</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;<span>结算流程</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;&nbsp;<span>服务宗旨</span></a></li>
						   </ul>
						</div>
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><a href="/clone/yuanku/index.php/Home/Index/contact_us"><h4>联系我们</h4></a></li></br>
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
		        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		        <button type="button" class="btn btn-primary">搜索</button>
		      </div>
		    </div>
		  </div>
</div>
<!-- </div> -->
	</body>
</html>