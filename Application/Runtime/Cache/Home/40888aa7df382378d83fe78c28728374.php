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



		

		



		<link rel="stylesheet" href="/lidong/yuanku/Public/css/admin/animate.css"> 
		<link rel="stylesheet" type="text/css" href="/lidong/yuanku/Public/css/home/about.css"/>
		<script type="text/javascript" src="/lidong/yuanku/Public/js/about_us.js"></script>
		<script type="text/javascript" src="/lidong/yuanku/Public/js/wow.min.js"></script>

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
		
	
		<div class="container-fluid" style="padding:0px;">
		
			<div class="row ">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="banner" style="background-image: url(/lidong/yuanku/Public/img/01.jpg);">
						<div class="container">
							<div class="title">
								<h1 class="wow rollIn" data-wow-duration="1s" data-wow-delay="0.2s">关于我们</h1>
							</div>						
							<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">欢迎各位来参观指导工作</h3>						
							<h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">如果您对我们的产品感兴趣或者有任何的疑问，您可以直接给我们留言或直接与我们联络</h5>
						</div>
					</div>	
				</div>
			</div>
			<div class="container">
				<div class="row company">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	            		<h3>公司简介</h3>
	            		<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。</p>
	          		</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	            		<h3>您的愿景</h3>
	            		<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。.</p>
	          		</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	            		<h3>我们的任务</h3>
	            		<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。</p>
	          		</div>          		
				</div>
			</div>

			<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 theme wow swing"  data-wow-duration="2s" data-wow-delay="0.5s">
						<img src="/lidong/yuanku/Public/img/highstand homepage/2016-10-02_160830.png"/>
						<div class="theme_title">营销主题</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 theme wow swing" data-wow-duration="2s" data-wow-delay="0.5s">
						<img src="/lidong/yuanku/Public/img/highstand homepage/2016-10-02_160830.png"/>
						<div class="theme_title">营销主题</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 theme wow swing" data-wow-duration="2s" data-wow-delay="0.5s">
						<img src="/lidong/yuanku/Public/img/highstand homepage/2016-10-02_160830.png"/>
						<div class="theme_title">营销主题</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 theme last wow swing" data-wow-duration="2s" data-wow-delay="0.5s">

						<img src="/lidong/yuanku/Public/img/highstand homepage/2016-10-02_160830.png"/>
						<div class="theme_title">营销主题</div>
					</div>					
				</div>

			<div class="height_90">
				
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 left_img wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
					<img src="/lidong/yuanku/Public/img/highstand homepage/2016-09-27_214450.png"/>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 green_center">
					<h2 class="wow flipInX" data-wow-duration="2s" data-wow-delay="0.5s">欢迎来到我们公司</h2>
					<p class="wow flipInX" data-wow-duration="2s" data-wow-delay="0.5s">我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境</p>
					<ul>
				        <li >公司</li>
				        <li >投资组合</li>
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
					<a href="#" ><button type="button" class="btn btn-success btn-block wow shake" data-wow-duration="2s" data-wow-delay="1s">开始计划</button></a>
				</div>
			</div>
			<div class="height_90">
				
			</div>
			<div class="row" >
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 say_title wow flipInX" data-wow-duration="2s" data-wow-delay="0s">
					<h3 class="">我们的客户说 </h3>
				</div>
			</div>
			
			<div class="lunbo">
				
			
				<div class="row our_people">

					<div class="col-lg-1 col-md-0 col-sm-0 col-xs-0">
						
					</div>
					<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 people_detail">

	                  	<div class="left">
	    					<img src="/lidong/yuanku/Public/img/highstand homepage/people-img10.jpg" alt="" class="client_img">
	    					<h5 class="nocaps">郑主管<br> <span>网易有限公司</span></h5>
						</div>
	                  
					</div>

					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 people_say">
	                            我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。                                                       
	                      
					</div>

					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0">
						
					</div>
				</div>
				<div class="row our_people">

					<div class="col-lg-1 col-md-0 col-sm-0 col-xs-0">
						
					</div>
					<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 people_detail">

	                  	<div class="left">
	    					<img src="/lidong/yuanku/Public/img/highstand homepage/people-img13.jpg" alt="" class="client_img">
	    					<h5 class="nocaps">陈经理<br> <span>阿里巴巴有限公司</span></h5>
						</div>
	                  
					</div>

					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 people_say">
	                                                                          
	                            我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。                                                       	                   
					</div>

					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0">
						
					</div>
				</div>
				<div class="row our_people">

					<div class="col-lg-1 col-md-0 col-sm-0 col-xs-0">
						
					</div>
					<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 people_detail">

	                  	<div class="left">
	    					<img src="/lidong/yuanku/Public/img/highstand homepage/people-img11.jpg" alt="" class="client_img">
	    					<h5 class="nocaps">李副总<br> <span>腾讯有限公司</span></h5>
						</div>
	                  
					</div>

					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 people_say">
	                                                                          
	                            我们尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的办公环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，我们始终坚持用户至上 用心服务于客户，坚持用自己的服务去打动客户。                                                      
					</div>

					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0">
						
					</div>
				</div>
		
			</div>

			<div class="row dian_all">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bannav">
					<span class="dian"></span>
					<span class="dian"></span>
					<span class="dian"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 say_title2 wow flipInX" data-wow-duration="2s" data-wow-delay="0.5s">
					<h3 >我们的合作伙伴</h3>
				</div>

			</div> 

			
			<div class="row container ">

				<div class="col-lg-2 col-md-2 col-sm-4  partner_logo wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
					<img src="/lidong/yuanku/Public/img/highstand homepage/clogo1_0.png"/>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4  partner_logo wow slideInUp" data-wow-duration="2s" data-wow-delay="0.2s">
					<img src="/lidong/yuanku/Public/img/highstand homepage/clogo2.png"/>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4  partner_logo wow slideInDown" data-wow-duration="2s" data-wow-delay="0.1s">
					<img src="/lidong/yuanku/Public/img/highstand homepage/clogo3_1.png"/>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4  partner_logo wow slideInDown" data-wow-duration="2s" data-wow-delay="0.1s">
					<img src="/lidong/yuanku/Public/img/highstand homepage/clogo2_0.png"/>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 partner_logo wow slideInUp" data-wow-duration="2s" data-wow-delay="0.2s">
					<img src="/lidong/yuanku/Public/img/highstand homepage/clogo3_2.png"/>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4  partner_logo wow slideInRight" data-wow-duration="2s" data-wow-delay="0.5s">
					<img src="/lidong/yuanku/Public/img/highstand homepage/clogo5_1.png"/>
				</div>

			</div>

		
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
                              <dd class="nav-item"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/><a href="#">image Many desktop packages</a></dd>
                              <dd class="nav-item"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/><a href="#">Many desktop packages</a></dd>
                              <dd class="nav-item"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/><a href="#">Formula 1 Crashes | Shocking</a></dd>
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
		
<script >
	new WOW().init();
</script>


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
								 <?php echo get_new_list(); ?>
								
								<!--<li><a href="#"><span class="size"><img src="/lidong/yuanku/Public/img/highstand homepage/site-img224.jpg"/></span><span>上海</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/lidong/yuanku/Public/img/highstand homepage/site-img225.jpg"/></span><span>新闻</span></a></li><br/>-->
					            
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