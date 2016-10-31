<?php if (!defined('THINK_PATH')) exit();?><!-- /*
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
	  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
      <![endif]-->



		

		



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
		      <a class="navbar-brand" href="<?php echo U('Index/index');?>">
		      	<img class="logo" src="/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="<?php echo U('Index/index');?>">首页</a></li>
				        
				        <li><a href="<?php echo U('Index/news');?>">推荐</a></li> 
				        <li><a href="<?php echo U('Nba/index');?>">篮球</a></li>
				        <!-- <li><a href="/yuanku/index.php/Home/Personal/news">足球</a></li> -->
				        
				        <li><a href="<?php echo U('Index/contact_us');?>">联系我们</a></li>

				        <li><a href="<?php echo U('Index/about_us');?>">关于我们</a></li>  
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
 
				        <li>
				        	<a  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="cursor: pointer;">
				        		<span class="glyphicon glyphicon-search" style="color: white;" ></span>
				        	</a>
				        </li>
				      </ul>		          			        				        	
	            </div>
		  </div>
	</nav>		

		<div class="container-fluid" style="margin-top:60px;">
    	<!--documents-->
	        <div class="row row-offcanvas row-offcanvas-left">
	          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
	          	<ul class="list-group panel" >
	                <div class="user-aside span3">
					    <div class="people">
							  <div class="basic-info">
							    <a class="avatar" href="<?php echo U('Personal/index');?>">
							      <img src="/yuanku/<?php echo ($head_photo); ?>"/ alt="5">
							    </a>
							    <h3><a href=""><?php echo (session('username')); ?></a></h3>
							    <ul class="clearfix" >
									
									<li id="sayhello">1</li>
									<br>
									<li><a href="/yuanku/index.php/Home/Personal/edit_message">修改个人信息</a>&nbsp;<img src="/yuanku/Public/img/personal/矩形-18-拷贝.png"/>
									</li>
								</ul>
							   
							  </div>
							  <br>
							  <div class="user-stats">
								  <ul class="clearfix" >
								    <li>
								      <p> 绑定邮箱：<?php echo ($email_address); ?></p>
								    </li>
								    <li>
								    <i class="glyphicon glyphicon-list-alt"></i>
										<a href="news.html">看新闻</a>
								    </li>
								    <br>
								    <li>
								    <i class="glyphicon glyphicon-pencil"></i>
								      <a href="<?php echo U('Personal/write_article');?>"><span>写文章</span></a>
								    </li>
								    <!-- <li>
								      <a><b>0</b><span>字数</span></a>
								    </li> -->
								    <br>
								    <li>
								    <i class="glyphicon glyphicon-heart"></i>
								      <a><span>收获喜欢</span></a>
								    </li>
								  </ul>
							</div>
						</div>
					</div>
	            </ul>
	          </div>
	          <!-- 右边 -->
	          <div class="col-xs-12 col-sm-9 content">
	            <div class="panel panel-default">
	              <div class="panel-heading">
	                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> 个人中心</h3>
	              </div>
	              <div class="panel-body">
		               <div class="personal-bottom" style="margin-top:5px;margin-bottom:10%">
									<div class="row">
										<div class="col-md-6 col-sm-12 col-xs-12">
											<div class="product">
												<table border="0px" cellspacing="0px" cellpadding="0px">
													<tr>
														<td rowspan="2"><img src="/yuanku/Public/img/personal/椭圆-3.png"/></td>
														<td>&nbsp;订阅的文章：&nbsp;<span>0</span></td>
													</tr>
													<tr>
														<td>&nbsp;<a href="<?php echo U('Index/news_take');?>">查看已订阅的文章</a>&nbsp;<img src="/yuanku/Public/img/personal/矩形-10-拷贝.png"/></td>												
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
														<td>&nbsp;我发布的文章：&nbsp;<span><?php echo ($num); ?></span></td>
													</tr>
													<tr>
														<td>&nbsp;<a href="<?php echo U('Personal/published_article');?>">查看我发布的文章</a>&nbsp;<img src="/yuanku/Public/img/personal/矩形-10-拷贝.png"/></td>												
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
							<ul>
								<li><h4 >友情连接</h4></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>百度一下</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>淘宝商城</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>腾讯首页</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>网易新闻</span></a></li>							
							</ul>						
						</div>					
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><h4 >最新动态</h4></li><br/>
								<li><a href="#"><span class="size"><img src="/yuanku/Public/img/highstand homepage/site-img225.jpg "/></span><span>灯塔</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/yuanku/Public/img/highstand homepage/site-img224.jpg"/></span><span>上海</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/yuanku/Public/img/highstand homepage/site-img225.jpg"/></span><span>新闻</span></a></li><br/>
					
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><h4>关于我们</h4></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;&nbsp;<span>技术中心</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>&nbsp;&nbsp;<span>产品特色</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;<span>结算流程</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;&nbsp;<span>服务宗旨</span></a></li>
						   </ul>
						</div>
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><h4>联系我们</h4></li></br>
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