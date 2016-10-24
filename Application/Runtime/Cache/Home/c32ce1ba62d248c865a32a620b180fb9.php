<?php if (!defined('THINK_PATH')) exit();?>

<!-- <!DOCTYPE html>
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



		

		

 -->
<!-- 个人中心页面 -->
<!--   </head>
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
		      <a class="navbar-brand" href="#">
		      	<img class="logo" src="/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="/yuanku/index.php/Home/Index/index">首页</a></li>
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
				        <li><a href="/yuanku/index.php/Home/Personal/news">新闻</a></li>
				        <li><a href="/yuanku/index.php/Home/Personal/contact_us">联系我们</a></li>
				        <li><a href="/yuanku/index.php/Home/Personal/about_us">关于我们</a></li>
				       				        
				        <li>
				        	<a  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="cursor: pointer;">
				        		<span class="glyphicon glyphicon-search" style="color: white;" ></span>
				        	</a>
				        </li>
				      </ul>		          			        				        	
	            </div>
		  </div>
	</nav> -->
<!-- /*
	*yxp
	*个人中心页面
 */ -->
<!DOCTYPE html>
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



		

		



		<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/personal.css"/>
		<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/site.min.css">
		
	    <script src="/yuanku/Public/js/site.min.js" type="text/javascript" charset="utf-8"></script>                                  
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
		      <a class="navbar-brand" href="#">
		      	<img class="logo" src="/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="/yuanku/index.php/Home/Index/index">首页</a></li>
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
				        <li><a href="/yuanku/index.php/Home/Personal/news">新闻</a></li>
				        <li><a href="/yuanku/index.php/Home/Personal/contact_us">联系我们</a></li>
				        <li><a href="/yuanku/index.php/Home/Personal/about_us">关于我们</a></li>
				       				        
				        <li>
				        	<a  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="cursor: pointer;">
				        		<span class="glyphicon glyphicon-search" style="color: white;" ></span>
				        	</a>
				        </li>
				      </ul>		          			        				        	
	            </div>
		  </div>
	</nav>		

		<div class="container-fluid" style="margin-top:55px;">
    	<!--documents-->
	        <div class="row row-offcanvas row-offcanvas-left">
	          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
	            <ul class="list-group panel">
	                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>侧边栏</b></li>
	                <li class="list-group-item"><a href="index.html"><i class="glyphicon glyphicon-home"></i>主页 </a></li>

	                <li class="list-group-item"><a href="login.html"><i class="glyphicon glyphicon-certificate"></i><?php echo (session('username')); ?> </a></li>

	                <li class="list-group-item"><a href="login.html"><i class="glyphicon glyphicon-certificate"></i>登录 </a></li>

	                <li class="list-group-item"><a href="register.html"><i class="glyphicon glyphicon-th-list"></i>注册 </a></li>
	                <li class="list-group-item"><a href="news.html"><i class="glyphicon glyphicon-list-alt"></i>新闻</a></li>
	                <li class="list-group-item"><a href="contact_us.html"><i class="glyphicon glyphicon-envelope"></i>联系我们</a></li>
	                <li class="list-group-item"><a href="about_us.html"><i class="glyphicon glyphicon-heart"></i>关于我们</a></li>
	                
	                
	              </ul>
	          </div>
	          <div class="col-xs-12 col-sm-9 content">
	            <div class="panel panel-default">
	              <div class="panel-heading">
	                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> 个人中心</h3>
	              </div>
	              <div class="panel-body">
		               <div class="personal-right">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="kitty">

										<img width="140px" height="140px" src="/yuanku/<?php echo ($head_photo); ?>"/>
										<ul class="clearfix">
											<li><b><a href=""><?php echo (session('username')); ?></a></b></li>
											<li id="sayhello">1</li>
											<li><a href="/yuanku/index.php/Home/Personal/edit_message">修改个人信息</a>&nbsp;<img src="/yuanku/Public/img/personal/矩形-18-拷贝.png"/></li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="message">
											<ul>
												<!-- <li>账户安全较高：较高</li> -->
												<li>绑定手机：</li>
												<li>绑定邮箱<?php echo ($email_address); ?></li>
											</ul>
										</div>
								</div>
							</div>	
					  </div>
					   <div class="personal-bottom" style="margin-top:5px">
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="product">
												<table border="0px" cellspacing="0px" cellpadding="0px">
													<tr>
														<td rowspan="2"><img src="/yuanku/Public/img/personal/椭圆-3.png"/></td>
														<td>&nbsp;订阅的文章：&nbsp;<span>0</span></td>
													</tr>
													<tr>
														<td>&nbsp;<a href="">查看已订阅的文章</a>&nbsp;<img src="/yuanku/Public/img/personal/矩形-10-拷贝.png"/></td>												
													</tr>
												</table>
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="product">
												<table border="0px" cellspacing="0px" cellpadding="0px">
													<tr>
														<td rowspan="2"><img src="/yuanku/Public/img/personal/椭圆-4-拷贝.png"/></td>
														<td>&nbsp;我的浏览足迹：&nbsp;<span>0</span></td>
													</tr>
													<tr>
														<td>&nbsp;<a href="">查看浏览足迹</a>&nbsp;<img src="/yuanku/Public/img/personal/矩形-10-拷贝.png"/></td>												
													</tr>
												</table>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="product">
												<table border="0px" cellspacing="0px" cellpadding="0px">
													<tr>
														<td rowspan="2"><img src="/yuanku/Public/img/personal/矩形-20-拷贝-3.png"/></td>
														<td>&nbsp;我发布的文章&nbsp;<span>0</span></td>
													</tr>
													<tr>
														<td>&nbsp;<a href="">查看我发布的文章</a>&nbsp;<img src="/yuanku/Public/img/personal/矩形-10-拷贝.png"/></td>												
													</tr>
												</table>
											</div>
										</div>
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="product">
												<table border="0px" cellspacing="0px" cellpadding="0px">
													<tr>
														<td rowspan="2"><img src="/yuanku/Public/img/personal/矩形-20-拷贝.png"/></td>
														<td>&nbsp;喜欢的文章：&nbsp;<span>0</span></td>
													</tr>
													<tr>
														<td>&nbsp;<a href="">查看喜欢的文章</a>&nbsp;<img src="/yuanku/Public/img/personal/矩形-10-拷贝.png"/></td>												
													</tr>
												</table>
											</div>
										</div>
									</div>
					   </div>

	              </div><!-- panel body -->
	            </div>
	        </div><!-- content -->
	      </div>
	    </div>






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
<!-- </div> -->
	</body>
</html>
<script type="text/javascript">
    function sayhello(){
    	var content=$('#sayhello');
    	var time=new Date();
    	var clock=time.getHours();
    	if(clock>6&&clock<=12){
    		content.html('上午好');
    	}else if(clock>12&&clock<=18){
    		content.html('下午好');
    	}else if(clock>18&&clock<=24){
    		content.html('晚上好');
    	}else{
    		console.log(clock);
    		content.html('凌晨好');
    	}
      }

      sayhello();
</script>