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



		

		


<!-- 这里写自己页面的样式 -->
<!--HOME css-->
<script src="/yuanku/Public/js/headerchange.js"></script>
<link rel="stylesheet" href="/yuanku/Public/css/home/home.css" />
<!--0-->
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
<!--轮播-->
<div class="kong"></div>
<div class="bs-example" data-example-id="carousel-with-captions">
	    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
	      <ol class="carousel-indicators">
	        <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
	        <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
	        <li data-target="#carousel-example-captions" data-slide-to="2" class="active"></li>
	      </ol>
	      <div class="carousel-inner" role="listbox">
	        <div class="item">
	        	<img src="/yuanku/Public/img/lunbo/01.jpg"/>			          
	        </div>
	        <div class="item">
	        	<img src="/yuanku/Public/img/lunbo/02.jpg"/>
	          
	        </div>
	        <div class="item active">
	        	<img src="/yuanku/Public/img/lunbo/03.jpg"/>
	          
	        </div>
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


<!--第三部分-->

<div class="views-element-container feature_section3">

	<div class="section_title1_1">
		<h2 class="caps white">Portfolio Works </h2>
		<div class="linebg"></div>
		<p class="fontdefaulf">There are variations available majoritaey suffered alteration words which look believable <br /> dolor sit amet consectetuer adipiscing elit suspendisse justdo.</p>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<a href="#" class="cbp-caption cbp-lightbox" data-title="Color  by M.A Anderson">
					<div class="cbp-caption-defaultWrap">
						<img src="/yuanku/Public/img/highstand homepage/project1_1.jpg" class="img-responsive" alt="pro" typeof="Image" />
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
								<img src="/yuanku/Public/img/highstand homepage/04-big.jpg" class="img-responsive" alt="" typeof="Image" />
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
								<img src="/yuanku/Public/img/highstand homepage/08-big.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
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
								<img src="/yuanku/Public/img/highstand homepage/07-big.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
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
								<img src="/yuanku/Public/img/highstand homepage/05-big.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
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
						<img src="/yuanku/Public/img/highstand homepage/161689529.jpg" class="img-responsive" alt="Portfolio" typeof="Image" />
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
						<img src="/yuanku/Public/img/highstand homepage/14368986.jpg" class="img-responsive" alt="" typeof="Image" />
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
						<img src="/yuanku/Public/img/highstand homepage/FkTybqcX-Yo.jpg" class="img-responsive" alt="" typeof="Image" />
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
						<img src="/yuanku/Public/img/highstand homepage/dKrVegVI0Us.jpg" class="img-responsive" alt="" typeof="Image" />
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

		<h2>How It Works</h2>
		<div class="linebg_2"></div>
		<p>When an unknown printer took a galley and it to make a type specimen</p>

		<div class="root">

			<div class="one_fifth"><i class="glyphicon glyphicon-book"></i>
				<h5 class="nocaps">Product Backlog</h5></div>

			<div class="one_fifth"><i class="glyphicon glyphicon-thumbs-up"></i>
				<h5 class="nocaps">Sprint Backlog</h5></div>

			<div class="one_fifth"><i class="glyphicon glyphicon-user"></i>
				<h5 class="nocaps">User Stories</h5></div>

			<div class="one_fifth"><i class="glyphicon glyphicon-picture"></i>
				<h5 class="nocaps">Demo</h5></div>

			<div class="one_fifth last" style="margin-right: 0;"><i class="glyphicon glyphicon-heart"></i>
				<h5 class="nocaps">Deliverables</h5></div>

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
			<h3 class="white caps">a complete Website <br/><b> Power pack <br/> Package</b><br/> Templates</h3>
		</div>
		<!-- end item -->

		<div class="one_third_less">
			<div class="box">
				<h5 class="caps">Consturaction <br/>Template</h5>
				<div class="bgline"></div>
				<p>Many desktop publishi packages and web page editors in use the Ipsum as their model as many web sites.</p>
				<a href="#" class="button two">Read More &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
		<!-- end item -->

		<div class="one_third_less last">
			<div class="box">
				<h5 class="caps">Restaurant <br/>Template</h5>
				<div class="bgline"></div>
				<p>Many desktop publishi packages and web page editors in use the Ipsum as their model as many web sites.</p>
				<a href="#" class="button two">Read More &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
		<!-- end item -->

		<div class="clearfix margin_bottom2"></div>

		<div class="one_third_less">
			<div class="box">
				<h5 class="caps">Hosting <br/>Template</h5>
				<div class="bgline"></div>
				<p>Many desktop publishi packages and web page editors in use the Ipsum as their model as many web sites.</p>
				<a href="#" class="button two">Read More &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
		<!-- end item -->

		<div class="one_third_less">
			<div class="box">
				<h5 class="caps">Education  <br/>Template</h5>
				<div class="bgline"></div>
				<p>Many desktop publishi packages and web page editors in use the Ipsum as their model as many web sites.</p>
				<a href="#" class="button two">Read More &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
		<!-- end item -->

		<div class="one_third_less last">
			<div class="box">
				<h5 class="caps">Medical <br/>Template</h5>
				<div class="bgline"></div>
				<p>Many desktop publishi packages and web page editors in use the Ipsum as their model as many web sites.</p>
				<a href="#" class="button two">Read More &nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
		<!-- end item -->

	</div>

</div>

<!--第六部分-->
<div class="views-element-container feature_section6">

	<div class="container">
		<h2>Meet our team</h2>
		<div class="linebg_2"></div>
		<p>There are variations available majoritaey suffered alteration words which look believable <br /> dolor sit amet consectetuer adipiscing elit suspendisse justdo.</p>
		<div id="example" class="owl-carousel">
			<div id="wiper">
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img6.jpg?itok=V9ZP4PYd" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img13.jpg?itok=6z8gQRlE" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img11.jpg?itok=nOPiPZvM" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img1.jpg?itok=e3G3NuHa" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img36.jpg?itok=7wK8RVbo" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img10.jpg?itok=Ok_n3rrr" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img7.jpg?itok=kTjklOP7" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img31.jpg?itok=onrLxT__" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img34.jpg?itok=NWEyjx_t" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img29_0.jpg?itok=tMhYS7Hw" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img9.jpg?itok=LtbGjdeX" class="rimg" alt="" />
								<div class="content">Nica Heriberty<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img28.jpg?itok=CmRSo73C" class="rimg" alt="" />
								<div class="content">Alan Joaquin<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<!--复制一份-->
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img6.jpg?itok=V9ZP4PYd" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img13.jpg?itok=6z8gQRlE" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img11.jpg?itok=nOPiPZvM" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img1.jpg?itok=e3G3NuHa" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img36.jpg?itok=7wK8RVbo" class="rimg" alt="" />
								<div class="content">ALAN FRENKELY<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img10.jpg?itok=Ok_n3rrr" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img7.jpg?itok=kTjklOP7" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img31.jpg?itok=onrLxT__" class="rimg" alt="" />
								<div class="content">Mark Anderson<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img34.jpg?itok=NWEyjx_t" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img29_0.jpg?itok=tMhYS7Hw" class="rimg" alt="" />
								<div class="content">JOHN CASALENA<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img9.jpg?itok=LtbGjdeX" class="rimg" alt="" />
								<div class="content">Nica Heriberty<br /> <b>- Developer-</b></div>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="boximg">
							<a href="http://google.com"><img src="/yuanku/Public/img/highstand homepage/people-img28.jpg?itok=CmRSo73C" class="rimg" alt="" />
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
			<h3>Improve Your Business</h3>
			<p>Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed making it look </p>
		</div>

		<div class="one_third">
			<i class="glyphicon glyphicon-globe"></i>
			<h3>Clean Code Easy to Use</h3>
			<p>Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed making it look </p>
		</div>

		<div class="one_third last">
			<i class="glyphicon glyphicon-picture"></i>
			<h3>30 Pre Designed Layouts</h3>
			<p>Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed making it look </p>
		</div>

		<div class="clearfix margin_bottom4"></div>

		<div class="one_third">
			<i class="glyphicon glyphicon-plane"></i>
			<h3>Business Thinking</h3>
			<p>Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed making it look </p>
		</div>

		<div class="one_third">
			<i class="glyphicon glyphicon-film"></i>
			<h3>Exclusive Slideshows</h3>
			<p>Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed making it look </p>
		</div>

		<div class="one_third last">
			<i class="glyphicon glyphicon-align-justify"></i>
			<h3>Layerd PSD Files</h3>
			<p>Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed making it look </p>
		</div>

		<div class="clearfix margin_bottom4"></div>

		<div class="one_third">
			<i class="glyphicon glyphicon-certificate"></i>
			<h3>Well Structured Pages</h3>
			<p>Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed making it look </p>
		</div>

		<div class="one_third">
			<i class="glyphicon glyphicon-tasks"></i>
			<h3>Cross Browsere Check</h3>
			<p>Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed making it look </p>
		</div>

		<div class="one_third last">
			<i class="glyphicon glyphicon-expand"></i>
			<h3>Mobile Friendly Theme</h3>
			<p>Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed making it look </p>
		</div>

	</div>

</div>
<!--第八部分-->
<div class="feature_section8 js-add-bg">

	<div class="data_bg" data-bg="/themes/highsta/images/bg-image01.jpg"></div>
	<div class="container">
		<div class="left">
			<h1 class="caps"><strong>Join The HighStand</strong> <br/>Get Lots of Awesome Templates on TF!</h1>
		</div>
		<div class="right">
			<h4 class="caps white">Cross Browser Compatibul Enhancements</h4>
			<p class="white">There are variations available majoritaey suffered alteration words which look even was popularised in the with the release etraset sheets.</p>
			<ul>
				<li><i class="glyphicon glyphicon-ok"></i>Development dolor sit amet, consectetur adipiscing elit</li>
				<li><i class="glyphicon glyphicon-ok"></i>Phasellus massa nisl, feugiat ac bibendum et, dictum id ipsum</li>
				<li><i class="glyphicon glyphicon-ok"></i>Making this the first true randomised words on the Internet</li>
			</ul>
		</div>

	</div>
	<!-- end right section -->
	<div class="clearfix margin_bottom8"></div>
	<div class="nupie">
		<div class="container">
			<div class="piechart5"><canvas data-percent="90" id="loader01" width="126" height="146"></canvas> <br /> UI/UX Design </div>
			<div class="piechart5"><canvas data-percent="99" id="loader02" width="126" height="146"></canvas> <br /> Development </div>
			<div class="piechart5"><canvas data-percent="95" id="loader03" width="126" height="146"></canvas> <br /> Javascript </div>
			<div class="piechart5"><canvas data-percent="80" id="loader04" width="126" height="146"></canvas> <br /> Wordpress </div>
			<div class="piechart5"><canvas data-percent="65" id="loader05" width="126" height="146"></canvas> <br /> Graphic Design </div>
		</div>
	</div>

</div>

<!--第九部分-->
<div class="views-element-container feature_section9">

	<div class="container">
		<h2>Latest Blogs/News</h2>
		<div class="linebg"></div>
		<p>There are variations available majoritaey suffered alteration words which look believable <br /> dolor sit amet consectetuer adipiscing elit suspendisse justdo.</p>
		<div class="blogs-news">

			<div class="one_third_less">
				<a href="/many-desktop-packages-0">
					<div class="box01">
						<img src="/yuanku/Public/img/highstand homepage/site-img225.jpg?itok=oGIxJj2U" width="374" height="200" alt="image" typeof="Image" />

						<div class="content">
							<h4>Many desktop packages</h4>
							<b>July 5, 2016</b>
						</div>
					</div>
				</a>
			</div>
			<div class="one_third_less choose-blog">
				<a href="/many-desktop-packages">
					<div class="box01">
						<img src="/yuanku/Public/img/highstand homepage/site-img224.jpg?itok=418pSrnX" width="374" height="200" alt="image" typeof="Image" />

						<div class="content">
							<h4>Many desktop packages</h4>
							<b>July 5, 2016</b>
						</div>
					</div>
				</a>
			</div>
			<div class="one_third_less last">
				<a href="/node/15">
					<div class="box01">
						<img src="/yuanku/Public/img/highstand homepage/2h1BK2H2Quk.jpg?itok=Z0ts4wwD" alt="" typeof="Image" />
						<div class="content">
							<h4>Formula 1 Crashes | Shocking</h4>
							<b>May 12, 2016</b>
						</div>
					</div>
				</a>
			</div>
			<div class="clearfix margin_bottom2"></div>
			<div class="two_third_less">
				<a href="/letraset-sheets-containing-lorem">
					<div class="box01">
						<img src="/yuanku/Public/img/highstand homepage/works-img31-thumb.jpg?itok=xln0boD0" width="374" height="200" alt="Blog" typeof="Image" />

						<div class="content">
							<h4>Letraset sheets containing lorem</h4>
							<b>May 12, 2016</b>
						</div>
					</div>
				</a>
			</div>
			<div class="one_third_less">
				<a href="/node/13">
					<div class="box01">
						<img src="/yuanku/Public/img/highstand homepage/eafjQDr22kU.jpg?itok=ZAauvndp" alt="" typeof="Image" />
						<div class="content">
							<h4>This is Formula One</h4>
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

		<h1 class="less6">New professional Templates Join you enjoy it. <em>Suspe ndisse id justo id nisi suscipit porttitor Pellen tesque aliquet leo id vestibulum eleifendmagna sem iaculis risus quis volutpat to.</em></h1>

		<a href="#">View All Demos</a>
		<a href="#">Purchase Now!</a>

	</div>

</div>
<!--第十一部分-->
<div class="views-element-container feature_section11">

	<div class="container">
		<div id="tabs">
			<ul>
				<li class="tabulous_active">
					<a href="tabs1" onclick="return false;" title=""><i>  <img src="/yuanku/Public/img/highstand homepage/icon_01.png?itok=th8vSvQ_" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>Graphic &amp; Web Design</h5>
						<p>Scrambled it make specimen book has stuns only five centuries.</p>
					</a>
				</li>
				<li>
					<a href="tabs2" onclick="return false;" title=""><i>  <img src="/yuanku/Public/img/highstand homepage/icon-02.png?itok=3EKbRHkG" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>Website Development</h5>
						<p>Scrambled it make specimen book has stuns only five centuries.</p>
					</a>
				</li>
				<li>
					<a href="tabs3" onclick="return false;" title=""><i>  <img src="/yuanku/Public/img/highstand homepage/icon_03.png?itok=b1KoT5hg" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>Custom Services</h5>
						<p>Scrambled it make specimen book has stuns only five centuries.</p>
					</a>
				</li>
				<li>
					<a href="tabs4" onclick="return false;" title=""><i>  <img src="/yuanku/Public/img/highstand homepage/icon_04.png?itok=zCPnN_1O" width="50" height="50" alt="icon" typeof="Image" />


 </i>
						<h5>RESPONSIVE</h5>
						<p>Scrambled it make specimen book has stuns only five centuries.</p>
					</a>
				</li>

			</ul>
			<div id="tabs_container" class="transition">
				<div id="tabs1" title=""> <img src="/yuanku/Public/img/highstand homepage/site-image01.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>Graphic &amp; Web Design</h3>
					<p>Lorem Ipsum is simply dummy text the printing typesetting Has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley type and scrambled it to make type specimen book. Ithas survived not only five centuries, but also the leap into the electronic typesetting, remaining essentially unchanged. making this the first true randomised words which generator on the Internet ipsum as. </p>
				</div>
				<div id="tabs2" title=""> <img src="/yuanku/Public/img/highstand homepage/site-image02.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>Website Development</h3>
					<p>Lorem Ipsum is simply dummy text the printing typesetting Has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley type and scrambled it to make type specimen book. Ithas survived not only five centuries, but also the leap into the electronic typesetting, remaining essentially unchanged. making this the first true randomised words which generator on the Internet Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. </p>
				</div>
				<div id="tabs3" title=""> <img src="/yuanku/Public/img/highstand homepage/site-image03.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>Custom Services</h3>
					<p>Lorem Ipsum is simply dummy text the printing typesetting Has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley type and scrambled it to make type specimen book. Ithas survived not only five centuries, but also the leap into the electronic typesetting, remaining essentially unchanged. making this the first true randomised words which generator on the Internet ipsum as. </p>
				</div>
				<div id="tabs4" title=""> <img src="/yuanku/Public/img/highstand homepage/site-image04.jpg" width="585" height="200" alt="content" typeof="Image" />

					<h3>RESPONSIVE</h3>
					<p>Lorem Ipsum is simply dummy text the printing typesetting Has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley type and scrambled it to make type specimen book. Ithas survived not only five centuries, but also the leap into the electronic typesetting, remaining essentially unchanged. making this the first true randomised words which generator on the Internet Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. </p>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="/yuanku/Public/js/home.js" type="text/javascript" charset="utf-8"></script>



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