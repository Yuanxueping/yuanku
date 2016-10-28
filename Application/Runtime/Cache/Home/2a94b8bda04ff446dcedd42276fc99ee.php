<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh">
	<title><?php echo ($title); ?></title>

	<meta charset="UTF-8">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/home/headAndFoot.css">
	 <script src="/thinkphp_3.2.3_full/yuanku/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/thinkphp_3.2.3_full/yuanku/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>
	  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
      <![endif]-->



		

		


<!-- 这里写自己页面的样式 -->
<!--HOME css-->
<script src="/thinkphp_3.2.3_full/yuanku/Public/js/headerchange.js"></script>
<link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/home/home.css" />
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
		      <a class="navbar-brand" href="#">
		      	<img class="logo" src="/thinkphp_3.2.3_full/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="/thinkphp_3.2.3_full/yuanku/index.php/Home/Index/index">首页</a></li>
				        
				        <li><a href="/thinkphp_3.2.3_full/yuanku/index.php/Home/Index/news">推荐</a></li>
				        <li><a href="/thinkphp_3.2.3_full/yuanku/index.php/Home/Index/news">视频</a></li>
				        <li><a href="<?php echo U('Nba/index');?>">篮球</a></li>
				        <li><a href="/thinkphp_3.2.3_full/yuanku/index.php/Home/Index/news">足球</a></li>
				        <li>
				        <a href="
				        	<?php if(isset($_SESSION['username'])) {echo '/thinkphp_3.2.3_full/yuanku/index.php/Home/Personal/index';} else{ echo '/thinkphp_3.2.3_full/yuanku/index.php/Home/Index/login'; } ?>
				        ">
				        <?php  if(isset($_SESSION['username'])){ echo $_SESSION['username']; }else{ echo '登陆'; } ?>
				        </a>
				        </li>
				        <li>
				        	<a href="
				        		<?php if(isset($_SESSION['username'])) {echo '/thinkphp_3.2.3_full/yuanku/index.php/Home/Personal/logout';} else{ echo '/thinkphp_3.2.3_full/yuanku/index.php/Home/Index/register'; } ?>
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
		<div class="carousel-inner" role="listbox">
	      <ol class="carousel-indicators">
			  <?php if(is_array($slide_list)): $k = 0; $__LIST__ = $slide_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$slide_id): $mod = ($k % 2 );++$k; if($k == 1): ?><li data-target="#carousel-example-captions" data-slide-to="<?php echo ($k-1); ?>" class="active"></li>
					 <div class="item active">
				<?php else: ?>
						<li data-target="#carousel-example-captions" data-slide-to="<?php echo ($k-1); ?>" class=""></li>
						<div class="item"><?php endif; ?>
				 	<img src="/thinkphp_3.2.3_full/yuanku/Public/<?php echo ($slide_id["img"]); ?>"/>
					 </div><?php endforeach; endif; else: echo "" ;endif; ?>
	        
	      </ol>
		 </div> 
		<!--		  
			<div class="carousel-inner" role="listbox">
				<?php if(is_array($slide_list)): $k = 0; $__LIST__ = $slide_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$slide_id): $mod = ($k % 2 );++$k; if($k == 1): ?><div class="item active">
					<?php else: ?>
							<div class="item"><?php endif; ?>
						<img src="/thinkphp_3.2.3_full/yuanku/Public/<?php echo ($slide_id["img"]); ?>"/>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>-->
			
	      
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
					<b>为了您的商务</b> <br>
					<em>创建属于你的最具功能性和独特特征的项目</em>
				</h2>
			</div>
			<div class="section_2_words col-lg-7 col-md-7 col-sm-7 col-xs-12">
				<p>在看它的布局时，会被一个页面的可读内容分散注意力。英语.许多桌面出版软件包和网页编辑器现在使用乱数假文作为默认的示范文本，并为
					乱数假文搜索会发现很多网站尚在襁褓中的版本已经发展了多年的目的。这是一个相当长的字段，之所以出现在这里是因为这段字段的主要作
					用为填充网站所用，并且这段文字并不会阻碍您的阅读，您可以放心浏览我们网站后续的所有内容</p>
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
		<h5>网站设计</h5>
		<p>对于乱数假文地球发现很多网站还有最近与桌面出版像婴儿的年软件版本。这是一段毫无意义的文字内容，你可以无视它并向后浏览你所想要浏览的内容。</p>
	</div>
	<div class="box col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<span class="glyphicon glyphicon-signal"></span>
		<h5>网站开发</h5>
		<p>对于乱数假文地球发现很多网站还有最近与桌面出版像婴儿的年软件版本。这是一段毫无意义的文字内容，你可以无视它并向后浏览你所想要浏览的内容。</p>
	</div>
	<div class="box col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<span class="glyphicon glyphicon-link"></span>
		<h5>在线营销</h5>
		<p>对于乱数假文地球发现很多网站还有最近与桌面出版像婴儿的年软件版本。这是一段毫无意义的文字内容，你可以无视它并向后浏览你所想要浏览的内容。</p>
	</div>
	<div class="box col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<span class="glyphicon glyphicon-heart"></span>
		<h5>良好支持</h5>
		<p>对于乱数假文地球发现很多网站还有最近与桌面出版像婴儿的年软件版本。这是一段毫无意义的文字内容，你可以无视它并向后浏览你所想要浏览的内容。</p>
	</div>
</div>

<!--第三部分-->

<div class="views-element-container feature_section3">

	<div class="section_title1_1">
		<h2 class="caps white">组合作品 </h2>
		<div class="linebg"></div>
		<p class="fontdefaulf">没人喜欢"疼痛"本身的， <br /> 谁会去找它，遇上它，喜欢它，很简单...因为它就是"痛楚</p>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<a href="#" class="cbp-caption cbp-lightbox" data-title="Color  by M.A Anderson">
					<div class="cbp-caption-defaultWrap">
						<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/project1_1.jpg" class="img-responsive" alt="pro" typeof="Image" />
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
								<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/04-big.jpg" class="img-responsive" alt="" typeof="Image" />
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
								<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/08-big.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
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
								<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/07-big.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
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
								<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/05-big.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
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
						<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/161689529.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
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
						<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/14368986.jpg" class="img-responsive" alt="" typeof="Image" />
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
						<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/FkTybqcX-Yo.jpg" class="img-responsive" alt="" typeof="Image" />
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
						<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/dKrVegVI0Us.jpg" class="img-responsive" alt="" typeof="Image" />
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

		<h2>如何工作的</h2>
		<div class="linebg_2"></div>
		<p>当一个未知的打印机带一个厨房和它做的标本</p>

		<div class="root">

			<div class="one_fifth"><i class="glyphicon glyphicon-book"></i>
				<h5 class="nocaps">产品订单</h5></div>

			<div class="one_fifth"><i class="glyphicon glyphicon-thumbs-up"></i>
				<h5 class="nocaps">冲刺订单</h5></div>

			<div class="one_fifth"><i class="glyphicon glyphicon-user"></i>
				<h5 class="nocaps">用户故事</h5></div>

			<div class="one_fifth"><i class="glyphicon glyphicon-picture"></i>
				<h5 class="nocaps">演示</h5></div>

			<div class="one_fifth last" style="margin-right: 0;"><i class="glyphicon glyphicon-heart"></i>
				<h5 class="nocaps">交付成果</h5></div>

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
			<h3 class="white caps">一个完整的网站 <br/><b> 有能力 <br/>可包装<br/>一组建议</b><br/> 许多可用的模板</h3>
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
		<h2>前来与我们的团队洽谈</h2>
		<div class="linebg_2"></div>
		<p>没人喜欢"疼痛"本身的， <br /> 谁会去找它，遇上它，喜欢它，很简单...因为它就是"痛楚</p>
		<div id="example" class="owl-carousel">
			<div id="wiper">
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img6.jpg?itok=V9ZP4PYd" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img13.jpg?itok=6z8gQRlE" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img11.jpg?itok=nOPiPZvM" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img1.jpg?itok=e3G3NuHa" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img36.jpg?itok=7wK8RVbo" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img10.jpg?itok=Ok_n3rrr" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img7.jpg?itok=kTjklOP7" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img31.jpg?itok=onrLxT__" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img34.jpg?itok=NWEyjx_t" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img29_0.jpg?itok=tMhYS7Hw" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img9.jpg?itok=LtbGjdeX" class="rimg" alt="" />
								<div class="content">Nica Heriberty<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img28.jpg?itok=CmRSo73C" class="rimg" alt="" />
								<div class="content">Alan Joaquin<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<!--复制一份-->
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img6.jpg?itok=V9ZP4PYd" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img13.jpg?itok=6z8gQRlE" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img11.jpg?itok=nOPiPZvM" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img1.jpg?itok=e3G3NuHa" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img36.jpg?itok=7wK8RVbo" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img10.jpg?itok=Ok_n3rrr" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img7.jpg?itok=kTjklOP7" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img31.jpg?itok=onrLxT__" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img34.jpg?itok=NWEyjx_t" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img29_0.jpg?itok=tMhYS7Hw" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img9.jpg?itok=LtbGjdeX" class="rimg" alt="" />
								<div class="content">Nica Heriberty<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img28.jpg?itok=CmRSo73C" class="rimg" alt="" />
								<div class="content">Alan Joaquin<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>

<!--第七部分-->
<div class="feature_section7">

	<div class="container">

		<div class="one_third">
			<i class="glyphicon glyphicon-phone"></i>
			<h3>改善 你的 企业</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third">
			<i class="glyphicon glyphicon-globe"></i>
			<h3>清洁代码易于使用</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third last">
			<i class="glyphicon glyphicon-picture"></i>
			<h3>30预设计布局</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="clearfix margin_bottom4"></div>

		<div class="one_third">
			<i class="glyphicon glyphicon-plane"></i>
			<h3>商业思维</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third">
			<i class="glyphicon glyphicon-film"></i>
			<h3>独家的幻灯片</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third last">
			<i class="glyphicon glyphicon-align-justify"></i>
			<h3>分层的PSD文件</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="clearfix margin_bottom4"></div>

		<div class="one_third">
			<i class="glyphicon glyphicon-certificate"></i>
			<h3>结构良好的页面</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third">
			<i class="glyphicon glyphicon-tasks"></i>
			<h3>交叉浏览检查</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

		<div class="one_third last">
			<i class="glyphicon glyphicon-expand"></i>
			<h3>移动友好的主题</h3>
			<p>乱数假文是具有更多或更少的正常分布的字母，而不是使它看起来将文段有限制地扩充至你想要的长度。 </p>
		</div>

	</div>

</div>
<!--第八部分-->
<div class="feature_section8 js-add-bg">

	<div class="data_bg" data-bg="/themes/highsta/images/bg-image01.jpg"></div>
	<div class="container">
		<div class="left">
			<h1 class="caps"><strong>欢迎加入力动企业</strong> <br/>你将可以在这里可以获取大量非常优秀的模板 ！</h1>
		</div>
		<div class="right">
			<h4 class="caps white">在我们的网站，你将可以看到跨浏览器兼容将大大增强</h4>
			<p class="white">有变化，可以改变的话，大多数遭受看起来更是曾经在与释放提取表。这段文字没有实际意义，你可以无视并继续浏览。</p>
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
		<p>有变化可用多数遭受蚀变的话，看起来可信 <br /> 没有人喜欢“疼痛”本身的</p>
		<div class="blogs-news">

			<div class="one_third_less">
				<a href="/many-desktop-packages-0">
					<div class="box01">
						<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/site-img225.jpg?itok=oGIxJj2U" width="374" height="200" alt="image" typeof="Image" />

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
						<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/site-img224.jpg?itok=418pSrnX" width="374" height="200" alt="image" typeof="Image" />

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
						<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/2h1BK2H2Quk.jpg?itok=Z0ts4wwD" alt="" typeof="Image" />
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
						<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/works-img31-thumb.jpg?itok=xln0boD0" width="374" height="200" alt="Blog" typeof="Image" />

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
						<img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/eafjQDr22kU.jpg?itok=ZAauvndp" alt="" typeof="Image" />
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

		<h1 class="less6">新的专业模板已经加入了你喜欢它的功能。 <em>这是一段毫无意义的文段描述，没有任何的翻译器能成功翻译，所以我们决定随便手打一些字段代替该段内容</em></h1>

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
					<a href="tabs1" onclick="return false;" title=""><i>  <img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/icon_01.png?itok=th8vSvQ_" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>图形 &amp; 设计</h5>
						<p>如您所见，我们致力于优秀的填充网站给您一个舒适的浏览体验，请继续浏览</p>
					</a>
				</li>
				<li>
					<a href="tabs2" onclick="return false;" title=""><i>  <img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/icon-02.png?itok=3EKbRHkG" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>网站开发</h5>
						<p>如您所见，我们致力于优秀的填充网站给您一个舒适的浏览体验，请继续浏览</p>
					</a>
				</li>
				<li>
					<a href="tabs3" onclick="return false;" title=""><i>  <img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/icon_03.png?itok=b1KoT5hg" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>定制服务</h5>
						<p>如您所见，我们致力于优秀的填充网站给您一个舒适的浏览体验，请继续浏览</p>
					</a>
				</li>
				<li>
					<a href="tabs4" onclick="return false;" title=""><i>  <img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/icon_04.png?itok=zCPnN_1O" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>响应式服务</h5>
						<p>如您所见，我们致力于优秀的填充网站给您一个舒适的浏览体验，请继续浏览.</p>
					</a>
				</li>

			</ul>
			<div id="tabs_container" class="transition ">
				<div id="tabs1" title=""> <img class="hsta" src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/site-image01.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>图形 &amp; 设计</h3>
					<p>乱数假文只是虚拟的文字印刷排版一直是行业和# 039；标准虚拟文本自从16世纪，当一个未知的打印机把厨房型和炒做字体样本。它不仅幸存下来的五个世纪，而且进入电子排版，其余基本保持不变。这第一个真正的随机词发生器在互联网乱数假文作为。 </p>
				</div>
				<div id="tabs2" title=""> <img class="hsta" src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/site-image02.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>网站开发</h3>
					<p>乱数假文只是虚拟的文字印刷排版一直是行业和# 039；标准虚拟文本自从16世纪，当一个未知的打印机把厨房型和炒做字体样本。它不仅幸存下来的五个世纪，而且进入电子排版，其余基本保持不变。这第一个真正的随机词发生器在互联网乱数假文作为默认的示范文本，并寻找与# 039；乱数假文和# 039；会发现很多网站仍处于起步阶段。不同的版本已经发展了多年，有时是偶然的，有时是故意的 </p>
				</div>
				<div id="tabs3" title=""> <img class="hsta" src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/site-image03.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>定制服务</h3>
					<p>乱数假文只是虚拟的文字印刷排版一直是行业和# 039；标准虚拟文本自从16世纪，当一个未知的打印机把厨房型和炒做字体样本。它不仅幸存下来的五个世纪，而且进入电子排版，其余基本保持不变。这第一个真正的随机词发生器在互联网乱数假文作为。</p>
				</div>
				<div id="tabs4" title=""> <img class="hsta" src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/site-image04.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>响应式设计</h3>
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
						<h2 class="text-uppercase">最佳包装</h2>
						<div class="linebg_3"></div>
						<p>有些看起来可靠的文案已经变得不那么可靠了，比如下面这一句英文！ <br>dolor sit amet consectetuer adipiscing elit suspendisse justdo.</p>

						<div class="one_fourth_less">
							<h3>标准版</h3>
							<h1>$4.95 <br> <em>/月</em></h1>

							<ul>
								<li><i class="glyphicon glyphicon-ok"></i> 50 GB 存储空间 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 1 个免费域名 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 100 个邮箱 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 24/7 支持 </li>
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
								<li><i class="glyphicon glyphicon-ok"></i> 50 GB 存储空间 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 1 个免费域名 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 100 个邮箱 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 24/7 支持 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 资金退还保证 </li>
							</ul>
							</ul>
							<div class="clearfix margin_bottom2"></div>
							<a href="#" class="button four">选择该计划</a>
						</div>
						<!-- end section  -->

						<div class="one_fourth_less">
							<h3>高级版</h3>
							<h1>$45 <br> <em>/月</em></h1>

							<ul>
								<li><i class="glyphicon glyphicon-ok"></i> 50 GB 存储空间 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 1 个免费域名 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 100 个邮箱 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 24/7 支持 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 资金退还保证 </li>
							</ul>
							</ul>
							<div class="clearfix margin_bottom2"></div>
							<a href="#" class="button four">选择该计划</a>
						</div>
						<!-- end section  -->

						<div class="one_fourth_less last">
							<h3>极致版</h3>
							<h1>$100 <br> <em>/月</em></h1>

							<ul>
								<li><i class="glyphicon glyphicon-ok"></i> 50 GB 存储空间 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 1 个免费域名 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 100 个邮箱 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 24/7 支持 </li>
								<li><i class="glyphicon glyphicon-ok"></i> 资金退还保证 </li>
							</ul>
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
													<div class="climg"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img19_0.jpg" width="100" height="100" alt="says" typeof="Image"></div>
													<p class="bigtfont">"测试用的段落，并通过这里的词的引用古典文学通行证发现那里不可思议的源看起来合理生成的特征词。"</p>
													<br>
													<strong>- Michle Siminson</strong> <em>- google.com</em>
												</div>
											</div>
											<div class "box-none" id="d3"></div>
										</div>

										<div class="owl-item">
											<div class="item">
												<div class="climg"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img19_0.jpg" width="100" height="100" alt="says" typeof="Image"></div>
												<p class="bigtfont">"测试用的段落，并通过这里的词的引用古典文学通行证发现那里不可思议的源看起来合理生成的特征词。"</p>
												<br>
												<strong>- Michle Siminson</strong> <em>- google.com</em>
											</div>
										</div>

										<div class="owl-item">
											<div class="item">
												<div class="climg"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img19_1.jpg" width="100" height="100" alt="says" typeof="Image"></div>
												<p class="bigtfont">"测试用的段落，并通过这里的词的引用古典文学通行证发现那里不可思议的源看起来合理生成的特征词。"</p>
												<br>
												<strong>- Michle Siminson</strong> <em>- google.com</em>
											</div>
										</div>

										<div class="owl-item">
											<div class="item">
												<div class="climg"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/people-img19.jpg" width="100" height="100" alt="says" typeof="Image"></div>
												<p class="bigtfont">" 测试用的段落，并通过这里的词的引用古典文学通行证发现那里不可思议的源看起来合理生成的特征词。 "</p>
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
							<li> <img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/clogo2.png" width="150" height="50" alt="image" typeof="Image"></li>
							<li> <img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/clogo5_1.png" width="150" height="50" alt="image" typeof="Image"></li>
							<li> <img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/clogo1_0.png" width="150" height="50" alt="image" typeof="Image"></li>
							<li> <img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/clogo2.png" width="150" height="50" alt="image" typeof="Image"></li>
							<li> <img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/clogo3_1.png" width="150" height="50" alt="image" typeof="Image"></li>
							<li> <img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/clogo3_1.png" width="150" height="50" alt="image" typeof="Image"></li>
						</ul>
					</div>

				</div>
<script src="/thinkphp_3.2.3_full/yuanku/Public/js/home.js" type="text/javascript" charset="utf-8"></script>




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
								<li><a href="#"><span class="size"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/site-img225.jpg "/></span><span>灯塔</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/site-img224.jpg"/></span><span>上海</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/thinkphp_3.2.3_full/yuanku/Public/img/highstand homepage/site-img225.jpg"/></span><span>新闻</span></a></li><br/>
					
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