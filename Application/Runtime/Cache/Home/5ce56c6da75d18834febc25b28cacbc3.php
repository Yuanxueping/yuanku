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



		

		



<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/news_detail.css"/>
<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/iconfont.css"/>

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
		<div class="container-fluid page-title">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<h1><?php echo ($news_detail[0]['title']); ?></h1>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<h2><a href="<?php echo U('Index/index');?>">Home</a><i>/</i><?php echo ($news_detail[0]['title']); ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container contain">
			<div class="row">
				<div class="col-sm-9">
					<div class="jumbotron">
				  		<img src="/yuanku/Public/<?php echo ($news_detail[0]['img']); ?>" class="img-responsive"/>
				  		<h3><a href=""><?php echo ($news_detail[0]['title']); ?></a></h3>
				  		<p class="p1">
				  			<a href=""><?php echo (date('Y年m月d日',$news_detail[0]['date'])); ?></a>
				  			<span>by:<span><?php echo ($news_detail[0]['name']); ?></span>in:<span><?php echo ($news_detail[0]['sort_name']); ?></span>note:<span>0 COMMENTS</span></span>
				  		</p>
				  		<p class="p2"><?php echo htmlspecialchars_decode($news_detail[0]['content']) ?></p>
				  		<p class="p3"><a href="">read more...</a></p>
					</div>
					<div class="line1"></div>
					<div class="sharepost">
						<h5>Share this Post</h5>
						<ul>
							<li><a href=""><i class="iconfont icon-facebookf"></i></a></li>
							<li><a href=""><i class="iconfont icon-birdxiaoniao"></i></a></li>
							<li><a href=""><i class="iconfont icon-google"></i></a></li>
							<li><a href=""><i class="iconfont icon-delicious"></i></a></li>
							<li><a href=""><i class="iconfont icon-digg"></i></a></li>
							<li><a href=""><i class="iconfont icon-reddit"></i></a></li>
							<li><a href=""><i class="iconfont icon-linkin"></i></a></li>
							<li><a href=""><i class="iconfont icon-pinterest"></i></a></li>
						</ul>
					</div>
					<div class="about_author">
						<h5>About the Author</h5>
						<div>
							<p><?php echo ($news_detail[0]['name']); ?></p>
							<p><?php echo ($news_detail[0]['introduction']); ?></p>
						</div>
					</div>
					<div class="line2"></div>
					<div class="comments">
						<h5>Comments</h5>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="more_about">
						<h4 class="title">More About</h4>
						<ul>
							<li><a href="">&gt; Our History</a></li>
							<li><a href="">&gt; Professional Research</a></li>
							<li><a href="">&gt; Our Development</a></li>
							<li><a href="">&gt; Partnership With Us</a></li>
							<li><a href="">&gt; Company Carreer</a></li>
							<li><a href="">&gt; New Technology</a></li>
							<li><a href="">&gt; Client Testimonials</a></li>
						</ul>
					</div>
					<div class="recent_posts">
						<h4 class="title">Recent Posts</h4>
						<ul>
							<li>
								<a class="pull-left" href=""><img src="/yuanku/Public/img/news_img/site-img225 (1).jpg"/></a>
								<a href="">Many desktop packages</a>
								<span>July 5, 2016</span>
							</li>
							<li>
								<a class="pull-left" href=""><img src="/yuanku/Public/img/news_img/site-img224.jpg"/></a>
								<a href="">Many desktop packages</a>
								<span>July 5, 2016</span>
							</li>
							<li>
								<a class="pull-left" href=""><img src="/yuanku/Public/img/highstand homepage/2h1BK2H2Quk.jpg"/></a>
								<a href="">Many desktop packages</a>
								<span>July 5, 2016</span>
							</li>
						</ul>
					</div>
					<div class="happy_say">
						<h4 class="title">Happy Client Say's</h4>
						<img class="pull-left" src="/yuanku/Public/img/highstand homepage/people-img19_0.jpg"/>
						<strong>- Michle Siminson</strong>
						<p>Lorem Ipsum passage, and going through the cites of the word here classical literature passage discovere there undou btable source looks reasonable the generated charac eristic words.</p>
					</div>
					<div class="advertisements">
						<h4 class="title">Site Advertisements</h4>
						<ul>
							<li><a href=""><img src="/yuanku/Public/img/news_img/sample-ad-banner.jpg"/></a></li>
							<li><a href=""><img src="/yuanku/Public/img/news_img/sample-ad-banner.jpg"/></a></li>
						</ul>
						<ul>
							<li><a href=""><img src="/yuanku/Public/img/news_img/sample-ad-banner.jpg"/></a></li>
							<li><a href=""><img src="/yuanku/Public/img/news_img/sample-ad-banner.jpg"/></a></li>
						</ul>
					</div>
					<div class="text_widget">
						<h4 class="title">Text Widget</h4>
						<p>Going to use a passage of lorem lpsum you need to be sure there anything embarrassin hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend the repeat predefined chunks as thenecessary making this the first true generator.</p>
					</div>
				</div>
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