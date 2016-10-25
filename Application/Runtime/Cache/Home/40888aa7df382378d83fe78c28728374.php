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



		

		



		<link rel="stylesheet" href="/yuanku/Public/css/admin/animate.css"> 
		<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/home/about.css"/>
		<script type="text/javascript" src="/yuanku/Public/js/about_us.js"></script>
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
		
	
		<div class="container-fluid" style="padding:0px;">
			<!-- <div class="row">
			
				<div class="col-lg-1">
					logo
				</div>
				<div class="col-lg-1">
					
				</div>
				<div class="col-lg-1">
					
				</div>
				<div class="col-lg-1">
					HOME
				</div>
				<div class="col-lg-1">
					PAGES
				</div>
				<div class="col-lg-1">
					FEATYRES
				</div>
				<div class="col-lg-1">
					PORTFOLO
				</div>
				<div class="col-lg-1">
					SHORTCODES
				</div>
				<div class="col-lg-1">
					BLOG
				</div>
				<div class="col-lg-1">
					CONTACT
				</div>
				<div class="col-lg-1">
					<button type="button" class="btn btn-default btn-block">BUY NOW</button>
				</div>
				<div class="col-lg-1">
					<div class="glyphicon glyphicon-search">
							
					</div>
				</div>
			
			</div> -->
		
			<div class="row ">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="banner" style="background-image: url(/yuanku/Public/img/01.jpg);">
						<div class="container">
							<div class="title">
								<h1>关于我们</h1>
							</div>						
							<h3>欢迎各位来参观指导工作</h3>						
							<h5>如果您对我们的产品感兴趣或者有任何的疑问，您可以直接给我们留言或直接与我们联络</h5>
						</div>
					</div>	
				</div>
			</div>
			<div class="container">
				<div class="row company">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	            		<h3>公司简介</h3>
	            		<p>我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。</p>
	          		</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	            		<h3>您的愿景</h3>
	            		<p>我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。.</p>
	          		</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	            		<h3>我们的任务</h3>
	            		<p>我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。</p>
	          		</div>          		
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 theme" >
						<img src="/yuanku/Public/img/highstand homepage/2016-10-02_160830.png"/>
						<div class="theme_title">营销主题</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 theme" >
						<img src="/yuanku/Public/img/highstand homepage/2016-10-02_160830.png"/>
						<div class="theme_title">营销主题</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 theme" >
						<img src="/yuanku/Public/img/highstand homepage/2016-10-02_160830.png"/>
						<div class="theme_title">营销主题</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 theme last" >
						<img src="/yuanku/Public/img/highstand homepage/2016-10-02_160830.png"/>
						<div class="theme_title">营销主题</div>
					</div>					
				</div>
			</div>
			<div class="height_90">
				
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 left_img">
					<img src="/yuanku/Public/img/highstand homepage/2016-09-27_214450.png"/>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 green_center">
					<h2>欢迎来到我们公司</h2>
					<p>我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境</p>
					<ul>
				        <li>公司</li>
				        <li>投资组合</li>
				        <li>机构</li>
				        <li>公司摄影</li>
				        <li>房地产</li>
				        <li>公司施工</li>
				        <li>公司餐厅</li>
				        <li>政治</li>
				    </ul>
					<ul>
				        <li>教育</li>
				        <li>公司音乐</li>
				        <li>公司网站</li>
				        <li>公司福利</li>
				        <li>公司医疗</li>
				        <li>公司旅游</li>
				        <li>公司规则</li>
				        <li>公司地址</li>
				      </ul>				
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 right_black">
					<h3>我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，让我们开始一个新的<strong>计划!</strong></h3>
					<a href="#"><button type="button" class="btn btn-success btn-block">开始计划</button></a>
				</div>
			</div>
			<div class="height_90">
				
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 say_title">
					<h3 class="">我们的客户说 </h3>
				</div>
			</div>
			
			<div class="lunbo">
				
			
				<div class="row our_people">
					<div class="col-lg-1">
						
					</div>
					<div class="col-lg-2 people_detail">
	                  	<div class="left">
	    					<img src="/yuanku/Public/img/highstand homepage/people-img10.jpg" alt="" class="client_img">
	    					<h5 class="nocaps">郑主管<br> <span>网易有限公司</span></h5>
						</div>
	                  
					</div>
					<div class="col-lg-8 people_say">
	                            我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。                                                       
	                      
					</div>
					<div class="col-lg-1">
						
					</div>
				</div>
				<div class="row our_people">
					<div class="col-lg-1">
						
					</div>
					<div class="col-lg-2 people_detail">
	                  	<div class="left">
	    					<img src="/yuanku/Public/img/highstand homepage/people-img13.jpg" alt="" class="client_img">
	    					<h5 class="nocaps">陈经理<br> <span>阿里巴巴有限公司</span></h5>
						</div>
	                  
					</div>
					<div class="col-lg-8 people_say">
	                                                                          
	                            我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。                                                       
	                      
					</div>
					<div class="col-lg-1">
						
					</div>
				</div>
				<div class="row our_people">
					<div class="col-lg-1">
						
					</div>
					<div class="col-lg-2 people_detail">
	                  	<div class="left">
	    					<img src="/yuanku/Public/img/highstand homepage/people-img11.jpg" alt="" class="client_img">
	    					<h5 class="nocaps">李副总<br> <span>腾讯有限公司</span></h5>
						</div>
	                  
					</div>
					<div class="col-lg-8 people_say">
	                                                                          
	                            我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。                                                     
	                      
					</div>
					<div class="col-lg-1">
						
					</div>
				</div>
		
			</div>
<<<<<<< HEAD

			<div class="row dian_all">
				<div class="col-lg-12 bannav">

=======
			<!-- <div class="row dian_all">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
>>>>>>> e9736dc9f80d24628124148f37f2551d5436232f
					<span class="dian"></span>
					<span class="dian"></span>
					<span class="dian"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 say_title2">
					<h3 >我们的合作伙伴</h3>
				</div>
<<<<<<< HEAD
			</div> 
=======
			</div> -->
>>>>>>> e9736dc9f80d24628124148f37f2551d5436232f
			
			<!-- <div class="row container ">
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 partner_logo">
					<img src="/yuanku/Public/img/highstand homepage/clogo1_0.png"/>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 partner_logo">
					<img src="/yuanku/Public/img/highstand homepage/clogo2.png"/>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 partner_logo">
					<img src="/yuanku/Public/img/highstand homepage/clogo3_1.png"/>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6  partner_logo">
					<img src="/yuanku/Public/img/highstand homepage/clogo2_0.png"/>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 partner_logo">
					<img src="/yuanku/Public/img/highstand homepage/clogo3_2.png"/>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 partner_logo">
					<img src="/yuanku/Public/img/highstand homepage/clogo5_1.png"/>
				</div>
			</div> -->
		
			<!-- <div class="row">
				<div class="col-lg-12">
					<div class="footer">
                        <div class="container">
                          <div class="clearfix">                      
                            <dl class="footer-nav">
                              <dt class="nav-title">Useful Links</dt>
                              <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span>Home Page Variations</a></dd>
                              <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span> Awsome Slidershows</a></dd>
                              <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span> Features and Typography</a></dd>
                              <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span> Different &amp; Unique Pages</a></dd>
                              <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span> Single and Portfolios</a></dd>
                              <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span>  Recent Blogs or News</a></dd>
                              <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span>  Layered PSD Files</a></dd>
                            </dl>
                            <dl class="footer-nav blog_post">
                              <dt class="nav-title">Blog Posts</dt>
                              <dd class="nav-item"><img src="/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/><a href="#">image Many desktop packages</a></dd>
                              <dd class="nav-item"><img src="/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/><a href="#">Many desktop packages</a></dd>
                              <dd class="nav-item"><img src="/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/><a href="#">Formula 1 Crashes | Shocking</a></dd>
                            </dl>
                            <dl class="footer-nav">
                              <dt class="nav-title">About Us</dt>
                              <dd class="nav-item"><a href="#">We are If you are going passage lorempsum is you need to be sure thereas anything hidden the middle there Lorem Ipsum generators an passages Internet tend to repeat predefined for this as their default model text, and a search for will uncover many web sites versions haved over the years.</a></dd>
                       
                            </dl>
                            <dl class="footer-nav">
                              <dt class="nav-title">Address Info</dt>
                              <dd class="nav-item"><a href="#"><span class="glyphicon glyphicon-map-marker"></span>2901 Marmora Road, Glassgow,Seattle, WA 98122-1090</a></dd>
                              <dd class="nav-item"><a href="#"><span class=" glyphicon glyphicon-earphone"></span>1 -234 -456 -7890</a></dd>
                              <dd class="nav-item"><a href="#"><span class=" glyphicon glyphicon-print"></span>1 -234 -456 -7890</a></dd>
                              <dd class="nav-item"><a href="#"><span class="fa fa-envelope"></span>info@yourdomain.com</a></dd>
                            </dl>
                          </div>
                          
                        </div>
                    </div>
				</div>
			</div> -->
		
		
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