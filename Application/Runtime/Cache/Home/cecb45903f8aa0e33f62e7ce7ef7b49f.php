<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
>>>>>>> 6039ff477dafbc775df0d1c8c5f6ea4f9c81ae73
	  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
      <![endif]-->



		

		




<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="/lidong/yuanku/Public/css/home/news_list.css"/>
=======
<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/news_list.css"/>
>>>>>>> 6039ff477dafbc775df0d1c8c5f6ea4f9c81ae73
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
<<<<<<< HEAD
		      	<img class="logo" src="/lidong/yuanku/Public/img/logoko2.png" />
=======
		      	<img class="logo" src="/yuanku/Public/img/logoko2.png" />
>>>>>>> 6039ff477dafbc775df0d1c8c5f6ea4f9c81ae73
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
<<<<<<< HEAD
				        <li><a href="/lidong/yuanku/index.php/Home/Index/index">首页</a></li>
				        
				        <li><a href="/lidong/yuanku/index.php/Home/Index/news">推荐</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/news">视频</a></li>
				        <li><a href="<?php echo U('Nba/index');?>">篮球</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/news">足球</a></li>
				        <li>
				        <a href="
				        	<?php if(isset($_SESSION['username'])) {echo '/lidong/yuanku/index.php/Home/Personal/index';} else{ echo '/lidong/yuanku/index.php/Home/Index/login'; } ?>
=======
				        <li><a href="/yuanku/index.php/Home/Index/index">首页</a></li>
				        
				        <li><a href="/yuanku/index.php/Home/Index/news">推荐</a></li>
				        <li><a href="/yuanku/index.php/Home/Index/news">视频</a></li>
				        <li><a href="<?php echo U('Nba/index');?>">篮球</a></li>
				        <li><a href="/yuanku/index.php/Home/Index/news">足球</a></li>
				        <li>
				        <a href="
				        	<?php if(isset($_SESSION['username'])) {echo '/yuanku/index.php/Home/Personal/index';} else{ echo '/yuanku/index.php/Home/Index/login'; } ?>
>>>>>>> 6039ff477dafbc775df0d1c8c5f6ea4f9c81ae73
				        ">
				        <?php  if(isset($_SESSION['username'])){ echo $_SESSION['username']; }else{ echo '登陆'; } ?>
				        </a>
				        </li>
				        <li>
				        	<a href="
<<<<<<< HEAD
				        		<?php if(isset($_SESSION['username'])) {echo '/lidong/yuanku/index.php/Home/Personal/logout';} else{ echo '/lidong/yuanku/index.php/Home/Index/register'; } ?>
=======
				        		<?php if(isset($_SESSION['username'])) {echo '/yuanku/index.php/Home/Personal/logout';} else{ echo '/yuanku/index.php/Home/Index/register'; } ?>
>>>>>>> 6039ff477dafbc775df0d1c8c5f6ea4f9c81ae73
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
<div class="container-fluid clearfix toubei">
	<div class="container clearfix">
		<h1 class="clearfix" style="color: white;">博客文章</h1>
		<div class="clearfix">
			<a href="index.html" class="clearfix">主页&nbsp;<i>&#47;</i></a>
		</div>
	</div>
</div>

<div class="products">		
	<div class="">
		<!--增加-->
		<?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news_i): $mod = ($i % 2 );++$i;?><div class="container">					
<<<<<<< HEAD
				<img src="/lidong/yuanku/Public/<?php echo ($news_i["img"]); ?>" class="news_img"/>
=======
				<img src="/yuanku/Public/<?php echo ($news_i["img"]); ?>" class="news_img"/>
>>>>>>> 6039ff477dafbc775df0d1c8c5f6ea4f9c81ae73
				<div class="wenzhang">
					<p>						
						<a href="<?php echo U('Index/news_detail',array(id=>$news_i[id]));?>" class="biaoti"><?php echo ($news_i["title"]); ?></a>
					</p>
					<p>
						<a href="" class="time"><?php echo (date('Y年m月d日',$news_i['date'])); ?></a>
						<i>by:</i>
						<span> admin</span>
						<i>in:</i> 
						<a href="" class="name">TRAVEL</a> 
						<i>note:</i> 
						<a href="" class="comments">0 COMMENTS</a>
					</p>
					<p><?php echo htmlspecialchars_decode($news_i['content']) ?>
						<a href="" class="more"> read more...</a>
					</p>
				</div>					
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>					
	<div class="paging wrapper">		
		<div class="container fenye tab">
			<?php echo ($page_html); ?>
		</div>	
	</div>			
</div>
<<<<<<< HEAD
		<script src="/lidong/yuanku/Public/js/news_list.js" type="text/javascript" charset="utf-8"></script>
=======
		<script src="/yuanku/Public/js/news_list.js" type="text/javascript" charset="utf-8"></script>
>>>>>>> 6039ff477dafbc775df0d1c8c5f6ea4f9c81ae73



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
<<<<<<< HEAD
								<li><a href="#"><span class="size"><img src="/lidong/yuanku/Public/img/highstand homepage/site-img225.jpg "/></span><span>灯塔</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/lidong/yuanku/Public/img/highstand homepage/site-img224.jpg"/></span><span>上海</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/lidong/yuanku/Public/img/highstand homepage/site-img225.jpg"/></span><span>新闻</span></a></li><br/>
=======
								<li><a href="#"><span class="size"><img src="/yuanku/Public/img/highstand homepage/site-img225.jpg "/></span><span>灯塔</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/yuanku/Public/img/highstand homepage/site-img224.jpg"/></span><span>上海</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/yuanku/Public/img/highstand homepage/site-img225.jpg"/></span><span>新闻</span></a></li><br/>
>>>>>>> 6039ff477dafbc775df0d1c8c5f6ea4f9c81ae73
					
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