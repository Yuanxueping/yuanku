<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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



		

		


<!-- 这里写自己页面的样式 -->
<!--HOME css-->
<script src="/lidong/yuanku/Public/js/headerchange.js"></script>
<link rel="stylesheet" href="/lidong/yuanku/Public/css/home/home.css" />
<!--0-->
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
<!--轮播-->

<div class="kong"></div>
<div class="bs-example" data-example-id="carousel-with-captions">
	    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
		<!--<div class="carousel-inner" role="listbox">-->
	      <ol class="carousel-indicators">
			  <?php if(is_array($slide_list)): $k = 0; $__LIST__ = $slide_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$slide_id): $mod = ($k % 2 );++$k; if($k == 1): ?><li data-target="#carousel-example-captions" data-slide-to="<?php echo ($k-1); ?>" class="active"></li>
					 <!--<div class="item active">-->
				<?php else: ?>
						<li data-target="#carousel-example-captions" data-slide-to="<?php echo ($k-1); ?>" class=""></li>
						<!--<div class="item">--><?php endif; ?>
				 	<!--<img src="/lidong/yuanku/Public/<?php echo ($slide_id["img"]); ?>"/>
					 </div>--><?php endforeach; endif; else: echo "" ;endif; ?>
	        
	      </ol>

				  
			<div class="carousel-inner" role="listbox">
				<?php if(is_array($slide_list)): $k = 0; $__LIST__ = $slide_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$slide_id): $mod = ($k % 2 );++$k; if($k == 1): ?><div class="item active">
					<?php else: ?>
							<div class="item"><?php endif; ?>
						<img src="/lidong/yuanku/Public/<?php echo ($slide_id["img"]); ?>"/>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			
	      

	      <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left " aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div>
</div>

<!--第一部分-->
<div class="business">
	<div class="container">
		<div class="section_2_top ">
			<div class="section_2_welcome col-lg-5 col col-md-5 col-sm-5 col-xs-12">
				<h2>
					欢迎来到力动 <br>
					<b>运动使您健康</b> <br>
					<em>为您量身定制专业的运动健身项目</em>
				</h2>
			</div>
			<div class="section_2_words col-lg-7 col-md-7 col-sm-7 col-xs-12">
				<p>力动是一个主打体育与健康的网站，网站致力于体育运动来改善人们的身体素质和精神状态，通过体育运动这样世人都能享受与进行的活动，使人民群众健康，实现社会和谐、国家富强。同时，网站还能够给您带来最新鲜精彩的体育资讯。</p>
				<a href="#" class="button-one">
					一次神奇的旅途 &nbsp;
					<span class="glyphicon glyphicon-arrow-right"></span>
				</a>
			</div>
		</div>
	</div>
</div>


<!--第二部分-->
<div class="section_2_bottom">
	<div class="box col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<span class="glyphicon glyphicon-pencil"></span>
		<h5>写下您的要求</h5>
		<p>对于您有什么需要的要求或者什么建议，请在这里写出，我们将会根据您的要求和状态为您提供专业的服务。</p>
	</div>
	<div class="box col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<span class="glyphicon glyphicon-signal"></span>
		<h5>健康测试</h5>
		<p>对于您的身体和平时的生活习惯做出相应的测试，以真实了解您的测试结果给出专业的建议</p>
	</div>
	<div class="box col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<span class="glyphicon glyphicon-link"></span>
		<h5>专家对接</h5>
		<p>专家研究分析，并和您取得实时的沟通交流，及时监控您的和健康状态。</p>
	</div>
	<div class="box col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<span class="glyphicon glyphicon-heart"></span>
		<h5>健康跟踪</h5>
		<p>密切关注您的方案实施进度，并且对方案不合适的地方进行严密改良，这全都是为了你的健康。</p>
	</div>
</div>

<!--第三部分-->

<div class="views-element-container feature_section3">

	<div class="section_title1_1">
		<h2 class="caps white">我们所改变的生活 </h2>
		<div class="linebg"></div>
		<p class="fontdefaulf">没人喜欢"疼痛"本身的， <br /> 谁会去找它，遇上它，喜欢它，很简单...那就让运动来代替它吧。</p>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<a href="#" class="cbp-caption cbp-lightbox" data-title="Color  by M.A Anderson">
					<div class="cbp-caption-defaultWrap">
						<img src="/lidong/yuanku/Public/img/highstand homepage/project1_1.jpg" class="img-responsive" alt="pro" typeof="Image" />
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignLeft">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">Color</div>
								<div class="cbp-l-caption-desc">by M.A Anderson</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="#" class="cbp-caption cbp-lightbox" data-title="Fledglings  by M.A Anderson">
							<div class="cbp-caption-defaultWrap">
								<img src="/lidong/yuanku/Public/img/highstand homepage/04-big.jpg" class="img-responsive" alt="" typeof="Image" />
							</div>
							<div class="cbp-caption-activeWrap">
								<div class="cbp-l-caption-alignLeft">
									<div class="cbp-l-caption-body">
										<div class="cbp-l-caption-title">Fledglings</div>
										<div class="cbp-l-caption-desc">by M.A Anderson</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="#" class="cbp-caption cbp-lightbox" data-title="Packages  by M.A Anderson">
							<div class="cbp-caption-defaultWrap">
								<img src="/lidong/yuanku/Public/img/highstand homepage/08-big.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
							</div>
							<div class="cbp-caption-activeWrap">
								<div class="cbp-l-caption-alignLeft">
									<div class="cbp-l-caption-body">
										<div class="cbp-l-caption-title">Packages</div>
										<div class="cbp-l-caption-desc">by M.A Anderson</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="#" class="cbp-caption cbp-lightbox" data-title="LG dLite  by M.A Anderson">
							<div class="cbp-caption-defaultWrap">
								<img src="/lidong/yuanku/Public/img/highstand homepage/07-big.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
							</div>
							<div class="cbp-caption-activeWrap">
								<div class="cbp-l-caption-alignLeft">
									<div class="cbp-l-caption-body">
										<div class="cbp-l-caption-title">LG dLite</div>
										<div class="cbp-l-caption-desc">by M.A Anderson</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="#" class="cbp-caption cbp-lightbox" data-title="LG dLite  by M.A Anderson">
							<div class="cbp-caption-defaultWrap">
								<img src="/lidong/yuanku/Public/img/highstand homepage/05-big.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
							</div>
							<div class="cbp-caption-activeWrap">
								<div class="cbp-l-caption-alignLeft">
									<div class="cbp-l-caption-body">
										<div class="cbp-l-caption-title">LG dLite</div>
										<div class="cbp-l-caption-desc">by M.A Anderson</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>
			<!--col-md-6-->
		</div>

		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="#" class="cbp-caption cbp-lightbox" data-title="LG dLite  by M.A Anderson">
					<div class="cbp-caption-defaultWrap">
						<img src="/lidong/yuanku/Public/img/highstand homepage/161689529.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignLeft">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">LG dLite</div>
								<div class="cbp-l-caption-desc">by M.A Anderson</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="#" class="cbp-caption cbp-lightbox" data-title="LG dLite  by M.A Anderson">
					<div class="cbp-caption-defaultWrap">
						<img src="/lidong/yuanku/Public/img/highstand homepage/14368986.jpg" class="img-responsive" alt="" typeof="Image" />
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignLeft">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">LG dLite</div>
								<div class="cbp-l-caption-desc">by M.A Anderson</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="#" class="cbp-caption cbp-lightbox" data-title="Civil War - Trailer 1  by M.A Anderson">
					<div class="cbp-caption-defaultWrap">
						<img src="/lidong/yuanku/Public/img/highstand homepage/FkTybqcX-Yo.jpg" class="img-responsive" alt="" typeof="Image" />
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignLeft">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">Civil War - Trailer 1</div>
								<div class="cbp-l-caption-desc">by M.A Anderson</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="#" class="cbp-caption cbp-lightbox" data-title="Civil War - Trailer 2  by M.A Anderson">
					<div class="cbp-caption-defaultWrap">
						<img src="/lidong/yuanku/Public/img/highstand homepage/dKrVegVI0Us.jpg" class="img-responsive" alt="" typeof="Image" />
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignLeft">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">Civil War - Trailer 2</div>
								<div class="cbp-l-caption-desc">by M.A Anderson</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<!--第四部分-->
<div class="feature_section4">

	<div class="container">

		<h2>力动怎么“动”？</h2>
		<div class="linebg_2"></div>
		<p>未知的和不深刻的都需要被解释，现在就解释，力动这样用</p>

		<div class="root">

			<div class="one_fifth"><i class="glyphicon glyphicon-book"></i>
				<h5 class="nocaps">客户资料录入</h5></div>

			<div class="one_fifth"><i class="glyphicon glyphicon-thumbs-up"></i>
				<h5 class="nocaps">制定并达成订单</h5></div>

			<div class="one_fifth"><i class="glyphicon glyphicon-user"></i>
				<h5 class="nocaps">团队制定方案</h5></div>

			<div class="one_fifth"><i class="glyphicon glyphicon-picture"></i>
				<h5 class="nocaps">演示教学</h5></div>

			<div class="one_fifth last" style="margin-right: 0;"><i class="glyphicon glyphicon-heart"></i>
				<h5 class="nocaps">健康成果</h5></div>

		</div>
		<!-- end root -->

	</div>

</div>

<!--第五部分-->
<div class="feature_section5">

	<div class="leftbox">
		<div class="img js-add-bg">
			<div class="data_bg" data-bg="/themes/highsta/images/site-image05.png"></div>
		</div>
	</div>

	<div class="rightbox">

		<div class="one_third_less">
			<h3 class="white caps">一个专业的网站 <br/><b> 有团队 <br/>有模式<br/>有成果</b><br/> 还有些大新闻</h3>
		</div>
		<!-- end item -->

		<div class="one_third_less">
			<div class="box">
				<h5 class="caps">这是一长串英文单词 <br/>这是简短描述</h5>
				<div class="bgline"></div>
				<p>此处是一段非常长的文段，然而该文段在网页浏览过程中没有任何实际意义，你可以无视该文段继续浏览你所需要浏览的内容。</p>
				<a href="#" class="button two">阅读 更多 &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
		<!-- end item -->

		<div class="one_third_less last">
			<div class="box">
				<h5 class="caps">这是一长串英文单词 <br/>这是简短描述</h5>
				<div class="bgline"></div>
				<p>此处是一段非常长的文段，然而该文段在网页浏览过程中没有任何实际意义，你可以无视该文段继续浏览你所需要浏览的内容。</p>
				<a href="#" class="button two">阅读 更多 &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
		<!-- end item -->

		<div class="clearfix margin_bottom2"></div>

		<div class="one_third_less">
			<div class="box">
				<h5 class="caps">这是一长串英文单词 <br/>这是简短描述</h5>
				<div class="bgline"></div>
				<p>此处是一段非常长的文段，然而该文段在网页浏览过程中没有任何实际意义，你可以无视该文段继续浏览你所需要浏览的内容。</p>
				<a href="#" class="button two">阅读 更多 &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
		<!-- end item -->

		<div class="one_third_less">
			<div class="box">
				<h5 class="caps">这是一长串英文单词 <br/>这是简短描述</h5>
				<div class="bgline"></div>
				<p>此处是一段非常长的文段，然而该文段在网页浏览过程中没有任何实际意义，你可以无视该文段继续浏览你所需要浏览的内容。</p>
				<a href="#" class="button two">阅读 更多 &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
		<!-- end item -->

		<div class="one_third_less last">
			<div class="box">
				<h5 class="caps">这是一长串英文单词 <br/>这是简短描述</h5>
				<div class="bgline"></div>
				<p>此处是一段非常长的文段，然而该文段在网页浏览过程中没有任何实际意义，你可以无视该文段继续浏览你所需要浏览的内容。</p>
				<a href="#" class="button two">阅读 更多 &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
		<!-- end item -->

	</div>

</div>

<!--第六部分-->
<div class="views-element-container feature_section6">

	<div class="container">
		<h2>欢迎来加入我们</h2>
		<div class="linebg_2"></div>
		<p>无论以什么样的形式 <br /> 欢迎与我们为伍，为人类健康而奋斗！</p>
		<!--<div id="example" class="owl-carousel">-->
			<!--<div id="wiper">
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img6.jpg?itok=V9ZP4PYd" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img13.jpg?itok=6z8gQRlE" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img11.jpg?itok=nOPiPZvM" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img1.jpg?itok=e3G3NuHa" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img36.jpg?itok=7wK8RVbo" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img10.jpg?itok=Ok_n3rrr" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img7.jpg?itok=kTjklOP7" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img31.jpg?itok=onrLxT__" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img34.jpg?itok=NWEyjx_t" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img29_0.jpg?itok=tMhYS7Hw" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img9.jpg?itok=LtbGjdeX" class="rimg" alt="" />
								<div class="content">Nica Heriberty<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img28.jpg?itok=CmRSo73C" class="rimg" alt="" />
								<div class="content">Alan Joaquin<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<!--复制一份-->
				<!--<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img6.jpg?itok=V9ZP4PYd" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img13.jpg?itok=6z8gQRlE" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img11.jpg?itok=nOPiPZvM" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img1.jpg?itok=e3G3NuHa" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img36.jpg?itok=7wK8RVbo" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img10.jpg?itok=Ok_n3rrr" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img7.jpg?itok=kTjklOP7" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img31.jpg?itok=onrLxT__" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img34.jpg?itok=NWEyjx_t" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img29_0.jpg?itok=tMhYS7Hw" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img9.jpg?itok=LtbGjdeX" class="rimg" alt="" />
								<div class="content">Nica Heriberty<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img28.jpg?itok=CmRSo73C" class="rimg" alt="" />
								<div class="content">Alan Joaquin<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
			</div>-->

		<!--</div>-->
	</div>

</div>

<!--第七部分-->
<div class="feature_section7">

	<div class="container">

		<div class="one_third">
			<i class="glyphicon glyphicon-phone"></i>
			<h3>电话来访</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third">
			<i class="glyphicon glyphicon-globe"></i>
			<h3>全球加盟</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third last">
			<i class="glyphicon glyphicon-picture"></i>
			<h3>素材提供</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="clearfix margin_bottom4"></div>

		<div class="one_third">
			<i class="glyphicon glyphicon-plane"></i>
			<h3>上门服务</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third">
			<i class="glyphicon glyphicon-film"></i>
			<h3>视屏教学</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third last">
			<i class="glyphicon glyphicon-align-justify"></i>
			<h3>人群分类</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="clearfix margin_bottom4"></div>

		<div class="one_third">
			<i class="glyphicon glyphicon-certificate"></i>
			<h3>全方位策略</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third">
			<i class="glyphicon glyphicon-tasks"></i>
			<h3>数据处理</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third last">
			<i class="glyphicon glyphicon-expand"></i>
			<h3>视频直播</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

	</div>

</div>
<!--第八部分-->
<div class="feature_section8 js-add-bg">

	<div class="data_bg" data-bg="/themes/highsta/images/bg-image01.jpg"></div>
	<div class="container">
		<div class="left">
			<h1 class="caps"><strong>欢迎加入力动企业</strong> <br/>你将可以在这里可以获取大量健康信息和运动建议</h1>
		</div>
		<div class="right">
			<h4 class="caps white">在我们的网站，你将可以看到你想看到的、想了解的、最新鲜的、最有用的体育与健康资讯。</h4>
			<p class="white">如果对您有帮助，那就是我们莫大的荣幸</p>
			<ul>
				<li><i class="glyphicon glyphicon-ok"></i>这是一段没有任何实际意义的文段，无视它也不影响您的浏览</li>
				<li><i class="glyphicon glyphicon-ok"></i>这是一段没有任何实际意义的文段，无视它也不影响您的浏览</li>
				<li><i class="glyphicon glyphicon-ok"></i>这是一段没有任何实际意义的文段，无视它也不影响您的浏览</li>
			</ul>
		</div>

	</div>
	<!-- end right section -->
	<div class="clearfix margin_bottom8"></div>
	<div class="nupie">
		<div class="container">
			<!-- <div class="piechart5"><canvas data-percent="90" id="loader01" width="126" height="146"></canvas> <br /> UI/UX Design </div>
			<div class="piechart5"><canvas data-percent="99" id="loader02" width="126" height="146"></canvas> <br /> Development </div>
			<div class="piechart5"><canvas data-percent="95" id="loader03" width="126" height="146"></canvas> <br /> Javascript </div>
			<div class="piechart5"><canvas data-percent="80" id="loader04" width="126" height="146"></canvas> <br /> Wordpress </div>
			<div class="piechart5"><canvas data-percent="65" id="loader05" width="126" height="146"></canvas> <br /> Graphic Design </div> -->
		</div>
	</div>

</div>

<!--第九部分-->
<div class="views-element-container feature_section9">

	<div class="container">
		<h2>发生在近期的博客/新闻</h2>
		<div class="linebg"></div>
		<p>世间的事，原本如此 <br /> 没有人喜欢“疼痛”本身</p>
		<div class="blogs-news">

			<div class="one_third_less">
				<a href="/many-desktop-packages-0">
					<div class="box01">
						<img src="/lidong/yuanku/Public/img/highstand homepage/site-img225.jpg?itok=oGIxJj2U" width="374" height="200" alt="image" typeof="Image" />

						<div class="content">
							<h4>许多桌面软件包</h4>
							<b>July 5, 2016</b>
						</div>
					</div>
				</a>
			</div>
			<div class="one_third_less choose-blog">
				<a href="/many-desktop-packages">
					<div class="box01">
						<img src="/lidong/yuanku/Public/img/highstand homepage/site-img224.jpg?itok=418pSrnX" width="374" height="200" alt="image" typeof="Image" />

						<div class="content">
							<h4>许多桌面软件包</h4>
							<b>July 5, 2016</b>
						</div>
					</div>
				</a>
			</div>
			<div class="one_third_less last">
				<a href="/node/15">
					<div class="box01">
						<img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk.jpg?itok=Z0ts4wwD" alt="" typeof="Image" />
						<div class="content">
							<h4>方程式1 崩溃 | 震惊</h4>
							<b>May 12, 2016</b>
						</div>
					</div>
				</a>
			</div>
			<div class="clearfix margin_bottom2"></div>
			<div class="two_third_less">
				<a href="/letraset-sheets-containing-lorem">
					<div class="box01">
						<img src="/lidong/yuanku/Public/img/highstand homepage/works-img31-thumb.jpg?itok=xln0boD0" width="374" height="200" alt="Blog" typeof="Image" />

						<div class="content">
							<h4>激光印字传输系统</h4>
							<b>May 12, 2016</b>
						</div>
					</div>
				</a>
			</div>
			<div class="one_third_less">
				<a href="/node/13">
					<div class="box01">
						<img src="/lidong/yuanku/Public/img/highstand homepage/eafjQDr22kU.jpg?itok=ZAauvndp" alt="" typeof="Image" />
						<div class="content">
							<h4>这是一级方程式</h4>
							<b>May 12, 2016</b>
						</div>
					</div>
				</a>
			</div>

		</div>
	</div>

</div>
<!--第十部分-->
<div class="js-add-bg feature_section10">

	<div class="data_bg" data-bg="/themes/highsta/images/bg-image02.jpg"></div>
	<div class="container">

		<h1 class="less6">新的专业方案已经加入了你喜欢它的项目。 <em>这将会使您在运动中倍觉愉快！</em></h1>

		<a class="check_it" href="#">查看演示</a>
		<a class="purchase" href="#">现在购买!</a>

	</div>

</div>
<!--第十一部分-->
<div class="views-element-container feature_section11">

	<div class="container">
		<div id="tabs" class=" ">
			<ul>
				<li class="tabulous_active">
					<a href="tabs1" onclick="return false;" title=""><i>  <img src="/lidong/yuanku/Public/img/highstand homepage/icon_01.png?itok=th8vSvQ_" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>研究成果</h5>
						<p>如您所见，我们致力于优秀的成果，在此基础上再建立起方案</p>
					</a>
				</li>
				<li>
					<a href="tabs2" onclick="return false;" title=""><i>  <img src="/lidong/yuanku/Public/img/highstand homepage/icon-02.png?itok=3EKbRHkG" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>方案制定</h5>
						<p>优秀的方案是成功的第一步，我们会为了成功做好每一步</p>
					</a>
				</li>
				<li>
					<a href="tabs3" onclick="return false;" title=""><i>  <img src="/lidong/yuanku/Public/img/highstand homepage/icon_03.png?itok=b1KoT5hg" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>定制服务</h5>
						<p>为您解决您的困扰，为您提供更方便的服务。</p>
					</a>
				</li>
				<li>
					<a href="tabs4" onclick="return false;" title=""><i>  <img src="/lidong/yuanku/Public/img/highstand homepage/icon_04.png?itok=zCPnN_1O" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>数据监测</h5>
						<p>根据手机或者随身智能设备监测用户健康信息，使用大数据分析。</p>
					</a>
				</li>

			</ul>
			<div id="tabs_container" class="transition ">
				<div id="tabs1" title=""> <img class="hsta" src="/lidong/yuanku/Public/img/highstand homepage/site-image01.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>研究成果</h3>
					<p>乱数假文只是虚拟的文字印刷排版一直是行业和# 039；标准虚拟文本自从16世纪，当一个未知的打印机把厨房型和炒做字体样本。它不仅幸存下来的五个世纪，而且进入电子排版，其余基本保持不变。这第一个真正的随机词发生器在互联网乱数假文作为。 </p>
				</div>
				<div id="tabs2" title=""> <img class="hsta" src="/lidong/yuanku/Public/img/highstand homepage/site-image02.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>方案制定</h3>
					<p>乱数假文只是虚拟的文字印刷排版一直是行业和# 039；标准虚拟文本自从16世纪，当一个未知的打印机把厨房型和炒做字体样本。它不仅幸存下来的五个世纪，而且进入电子排版，其余基本保持不变。这第一个真正的随机词发生器在互联网乱数假文作为默认的示范文本，并寻找与# 039；乱数假文和# 039；会发现很多网站仍处于起步阶段。不同的版本已经发展了多年，有时是偶然的，有时是故意的 </p>
				</div>
				<div id="tabs3" title=""> <img class="hsta" src="/lidong/yuanku/Public/img/highstand homepage/site-image03.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>定制服务</h3>
					<p>乱数假文只是虚拟的文字印刷排版一直是行业和# 039；标准虚拟文本自从16世纪，当一个未知的打印机把厨房型和炒做字体样本。它不仅幸存下来的五个世纪，而且进入电子排版，其余基本保持不变。这第一个真正的随机词发生器在互联网乱数假文作为。</p>
				</div>
				<div id="tabs4" title=""> <img class="hsta" src="/lidong/yuanku/Public/img/highstand homepage/site-image04.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>数据监测</h3>
					<p>乱数假文只是虚拟的文字印刷排版一直是行业和# 039；标准虚拟文本自从16世纪，当一个未知的打印机把厨房型和炒做字体样本。它不仅幸存下来的五个世纪，而且进入电子排版，其余基本保持不变。这第一个真正的随机词发生器在互联网乱数假文作为默认的示范文本，并寻找与# 039；乱数假文和# 039；会发现很多网站仍处于起步阶段。不同的版本已经发展了多年，有时是偶然的，有时是故意的</p>
				</div>
			</div>
		</div>
	</div>

</div>

		<!--
        	第十二节
        -->
				<div class="js-add-bg feature_section12 col-lg-12 col-sm-12 col-xs-12" style="background-image: url(../../img/highstand homepage/bg-image03.jpg) ;">
					<div class="container ">
						<h2 class="text-uppercase">模式定制</h2>
						<div class="linebg_3"></div>
						<p>不同的模式可享受不同的待遇 <br>尽情享受健康生活吧！</p>

						<div class="one_fourth_less">
							<h3>标准版</h3>
							<h1>$4.95 <br> <em>/月</em></h1>

							<ul>
								<li><i class="glyphicon glyphicon-ok"></i> 专业教程 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 专业器材提供 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 在线指导 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 运动友介绍 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 资金退还保证 </li>
							</ul>

							<div class="clearfix margin_bottom2"></div>
							<a href="#" class="button four">选择该计划</a>
						</div>
						<!-- end section  -->

						<div class="one_fourth_less">
							<h3>专业版</h3>
							<h1>$9.95 <br> <em>/月</em></h1>

							<ul>
								<li><i class="glyphicon glyphicon-ok"></i> 专业教程 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 专业器材提供 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 在线指导 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 运动友介绍 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 资金退还保证 </li>
							</ul>
							<div class="clearfix margin_bottom2"></div>
							<a href="#" class="button four">选择该计划</a>
						</div>
						<!-- end section  -->

						<div class="one_fourth_less">
							<h3>高级版</h3>
							<h1>$45 <br> <em>/月</em></h1>

							<ul>
								<li><i class="glyphicon glyphicon-ok"></i> 专业教程 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 专业器材提供 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 在线指导 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 运动友介绍 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 资金退还保证 </li>
							</ul>
							<div class="clearfix margin_bottom2"></div>
							<a href="#" class="button four">选择该计划</a>
						</div>
						<!-- end section  -->

						<div class="one_fourth_less last">
							<h3>极致版</h3>
							<h1>$100 <br> <em>/月</em></h1>

							<ul>
								<li><i class="glyphicon glyphicon-ok"></i> 专业教程 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 专业器材提供 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 在线指导 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 运动友介绍 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 资金退还保证 </li>
							</ul>
							<div class="clearfix margin_bottom2"></div>
							<a href="#" class="button four">选择该计划</a>
						</div>
						<!-- end section  -->
					</div>
				</div>
				<!--
        	第十三节
        -->
				<div class="views-element-container feature_section13 col-lg-12 col-sm-12 col-xs-12">
					<div class="container">
						<h2 class="text-uppercase">人们怎么看</h2>
						<div class="linebg_3"></div><br><br>
						<div class="less6">
							<div id="owl-demo2" class="owl-carousel owl-theme">
								<div class="owl-wrapper-outer autoHeight">
									<div class="owl-wrapper">
										<div class="rongqi">
											<div class "box-none" id="d1"></div>
											<div class "box-block" id="d2">
												<div class="item">
													<div class="climg"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img19_0.jpg" width="100" height="100" alt="says" typeof="Image"></div>
													<p class="bigtfont">"力动网简直棒呆了！我才在这边定制了两个月的方案，他们就免费赠送了我一瓶怡宝，说渴了可以喝，真是太贴心了！"</p>
													<br>
													<strong>- Michle Siminson</strong> <em>- google.com</em>
												</div>
											</div>
											<div class "box-none" id="d3"></div>
										</div>

										<div class="owl-item">
											<div class="item">
												<div class="climg"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img19_0.jpg" width="100" height="100" alt="says" typeof="Image"></div>
												<p class="bigtfont">"力动网简直棒呆了！我才在这边定制了两个月的方案，他们就免费赠送了我一瓶怡宝，说渴了可以喝，真是太贴心了！"</p>
													<br>
												<strong>- Michle Siminson</strong> <em>- google.com</em>
											</div>
										</div>

										<div class="owl-item">
											<div class="item">
												<div class="climg"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img19_1.jpg" width="100" height="100" alt="says" typeof="Image"></div>
												<p class="bigtfont">"力动网简直棒呆了！我才在这边定制了两个月的方案，他们就免费赠送了我一瓶怡宝，说渴了可以喝，真是太贴心了！"</p>
													<br>
												<strong>- Michle Siminson</strong> <em>- google.com</em>
											</div>
										</div>

										<div class="owl-item">
											<div class="item">
												<div class="climg"><img src="/lidong/yuanku/Public/img/highstand homepage/people-img19.jpg" width="100" height="100" alt="says" typeof="Image"></div>
												<p class="bigtfont">"力动网简直棒呆了！我才在这边定制了两个月的方案，他们就免费赠送了我一瓶怡宝，说渴了可以喝，真是太贴心了！"</p>
													<br>
												<strong>- Michle Siminson</strong> <em>- google.com</em>
											</div>
										</div>
									</div>
								</div>

								<div class="owl-controls clickable">
									<div class="owl-pagination">
										<div class="owl-page"><span class=""></span></div>
										<div class="owl-page active"><span class=""></span></div>
										<div class="owl-page"><span class=""></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--
    	作者：923413786@qq.com
    	时间：2016-10-25
    	描述：第十四节
    -->
				<div class="views-element-container feature_section14 col-lg-12 col-sm-12 col-xs-12">
					<div class="container">
						<h4 class="caps light text-uppercase">合作伙伴</h4>
						<div class="clearfix margin_bottom3"></div>
						<ul class="class-one1">
							<li> <img src="/lidong/yuanku/Public/img/highstand homepage/clogo2.png" width="150" height="50" alt="image" typeof="Image"></li>
							<li> <img src="/lidong/yuanku/Public/img/highstand homepage/clogo5_1.png" width="150" height="50" alt="image" typeof="Image"></li>
							<li> <img src="/lidong/yuanku/Public/img/highstand homepage/clogo1_0.png" width="150" height="50" alt="image" typeof="Image"></li>
							<li> <img src="/lidong/yuanku/Public/img/highstand homepage/clogo2.png" width="150" height="50" alt="image" typeof="Image"></li>
							<li> <img src="/lidong/yuanku/Public/img/highstand homepage/clogo3_1.png" width="150" height="50" alt="image" typeof="Image"></li>
							<li> <img src="/lidong/yuanku/Public/img/highstand homepage/clogo3_1.png" width="150" height="50" alt="image" typeof="Image"></li>
						</ul>
					</div>

				</div>
<script src="/lidong/yuanku/Public/js/home.js" type="text/javascript" charset="utf-8"></script>




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
								<li><a href="#"><span class="size"><img src="/lidong/yuanku/Public/img/highstand homepage/site-img225.jpg "/></span><span>灯塔</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/lidong/yuanku/Public/img/highstand homepage/site-img224.jpg"/></span><span>上海</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/lidong/yuanku/Public/img/highstand homepage/site-img225.jpg"/></span><span>新闻</span></a></li><br/>
					
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