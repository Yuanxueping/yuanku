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



		

		




<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/news_list.css"/>
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
<div class="container-fluid clearfix toubei">
	<div class="container clearfix">
		<h1 class="clearfix" style="color: white;">博客帖子</h1>
		<div class="clearfix">
			<a href="index.html" class="clearfix">主页&nbsp;<i>&#47;</i></a>
		</div>
	</div>
</div>

<div class="products">
			
			<div class="main selected">
				<div class="container">
					<img src="/yuanku/Public/img/news_img/site-img225 (1).jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="<?php echo U('Index/news_detail');?>" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/site-img224.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-05.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="<?php echo U('Index/news_detail','id=3');?>" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-06.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-02.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-01.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
							
				<!--<div class="paging wrapper">		
					<div class="container fenye tab">
						<button type="button" class="btn btn-default check tab-item active">1</button>
						<button type="button" class="btn btn-default tab-item">2</button>
						<button type="button" class="btn btn-default tab-item">3</button>
						<button type="button" class="btn btn-default tab-item">next&gt;</button>
						<button type="button" class="btn btn-default tab-item">last&laquo;</button>
					</div>	
				</div>-->
			</div>
			
			<div class="main">
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-09.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-08.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-01.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-02.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-06.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-05.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
							
				<!--<div class="paging wrapper">		
					<div class="container fenye tab">
						<button type="button" class="btn btn-default check tab-item active">1</button>
						<button type="button" class="btn btn-default tab-item">2</button>
						<button type="button" class="btn btn-default tab-item">3</button>
						<button type="button" class="btn btn-default tab-item">next&gt;</button>
						<button type="button" class="btn btn-default tab-item">last&laquo;</button>
					</div>	
				</div>-->
			</div>
			
			
			<div class="main">
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-05.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-05.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				<div class="container">
					<img src="/yuanku/Public/img/news_img/blog-img-03.jpg" class="news_img"/>
					<div class="wenzhang">
						<p>
							<a href="" class="biaoti">许多桌面包</a>
						</p>
						<p>
							<a href="" class="time">5 JULY 2016</a>
							<i>by:</i>
							<span> admin</span>
							<i>in:</i> 
							<a href="" class="name">TRAVEL</a> 
							<i>note:</i> 
							<a href="" class="comments">0 COMMENTS</a>
						</p>
						<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters,
							as opposed to using 'Content here, content here', making it look like readable English.
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
							and a search for 'lorem ipsum' will uncover many web sites still in their infancy over the years
							<a href="" class="more"> read more...</a>
						</p>
					</div>			
				</div>
				
				
							
				<!--<div class="paging wrapper">		
					<div class="container fenye tab">
						<button type="button" class="btn btn-default check tab-item active">1</button>
						<button type="button" class="btn btn-default tab-item">2</button>
						<button type="button" class="btn btn-default tab-item">3</button>
						<button type="button" class="btn btn-default tab-item">next&gt;</button>
						<button type="button" class="btn btn-default tab-item">last&laquo;</button>
					</div>	
				</div>-->
			</div>
			<div class="paging wrapper">		
				<div class="container fenye tab">
					<button type="button" class="btn tab-item active">1</button>
					<button type="button" class="btn tab-item">2</button>
					<button type="button" class="btn tab-item">3</button>
					<!--<button type="button" class="btn btn-default tab-item">next&gt;</button>-->
					<!--<button type="button" class="btn btn-default tab-item">last&laquo;</button>-->
				</div>	
			</div>
			
		</div>
		<script src="/yuanku/Public/js/news_list.js" type="text/javascript" charset="utf-8"></script>



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