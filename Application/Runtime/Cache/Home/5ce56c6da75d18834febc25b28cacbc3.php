<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh">
	<title><?php echo ($title); ?></title>

	<meta charset="UTF-8">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="/clone/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/clone/yuanku/Public/css/home/headAndFoot.css">
	 <script src="/clone/yuanku/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/clone/yuanku/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>
	  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
      <![endif]-->



		

		



<link rel="stylesheet" type="text/css" href="/clone/yuanku/Public/css/home/news_detail.css"/>
<link rel="stylesheet" type="text/css" href="/clone/yuanku/Public/css/home/iconfont.css"/>

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
		      	<img class="logo" src="/clone/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="<?php echo U('Index/index');?>">首页</a></li>
				        
				        <li><a href="<?php echo U('Index/news');?>">推荐</a></li> 
				        <li><a href="<?php echo U('Nba/index');?>">篮球</a></li>
				        <!-- <li><a href="/clone/yuanku/index.php/Home/Index/news">足球</a></li> -->
				        
				        <li><a href="<?php echo U('Index/contact_us');?>">联系我们</a></li>

				        <li><a href="<?php echo U('Index/about_us');?>">关于我们</a></li>  
				        <li>
				        <a href="
				        	<?php if(isset($_SESSION['username'])) {echo '/clone/yuanku/index.php/Home/Personal/index';} else{ echo '/clone/yuanku/index.php/Home/Index/login'; } ?>
				        ">
				        <?php  if(isset($_SESSION['username'])){ echo $_SESSION['username']; }else{ echo '登陆'; } ?>
				        </a>
				        </li>
				        <li>
				        	<a href="
				        		<?php if(isset($_SESSION['username'])) {echo '/clone/yuanku/index.php/Home/Personal/logout';} else{ echo '/clone/yuanku/index.php/Home/Index/register'; } ?>
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
		<div class="container-fluid page-title">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<h1><?php echo ($news_detail[0]['title']); ?></h1>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<h2><a href="<?php echo U('Index/index');?>">首页</a><i>/</i><?php echo ($news_detail[0]['title']); ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container contain">
			<div class="row">
				<div class="col-sm-9">
					<div class="jumbotron">
				  		<img src="/clone/yuanku/Public/<?php echo ($news_detail[0]['img']); ?>" class="img-responsive"/>
				  		<h3><a href=""><?php echo ($news_detail[0]['title']); ?></a></h3>
				  		<p class="p1">
				  			<a href=""><?php echo (date('Y年m月d日',$news_detail[0]['date'])); ?></a>
				  			<span>作者:<span><?php echo ($news_detail[0]['name']); ?></span>分类:<span><?php echo ($news_detail[0]['sort_name']); ?></span>评论:<span>0 COMMENTS</span></span>
				  		</p>
 
				  		<div class="p2"><?php echo htmlspecialchars_decode($news_detail[0]['content']) ?></div>
						<button type="submit"  class="btn btn-block btn-lg btn-success" style="margin-top:10px; width:25%;" onclick="location.href='<?php echo U('Index/take_add',array(id=>$news_detail[0]['id']));?>'">点击订阅</button>
 
					</div>
					<div class="line1"></div>
					<div class="sharepost">
						<h5>分享文章</h5>
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
						<h5>关于作者</h5>
						<div>
							<p><?php echo ($news_detail[0]['name']); ?></p>
							<p><?php echo ($news_detail[0]['introduction']); ?></p>
						</div>
					</div>
					<div class="line2"></div>
					<div class="comments">
						<h5>评论</h5>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="more_about">
						<h4 class="title">更多</h4>
						<ul>
							<li><a href="">&gt; 我们的历史</a></li>
							<li><a href="">&gt; 专业研究</a></li>
							<li><a href="">&gt; 我们的发展</a></li>
							<li><a href="">&gt; 合作伙伴</a></li>
							<li><a href="">&gt; 公司事业</a></li>
							<li><a href="">&gt; 新技术</a></li>
							<li><a href="">&gt; 客户推荐</a></li>
						</ul>
					</div>
					<div class="recent_posts">
						<h4 class="title">近期文章</h4>
						<ul>
							<?php if(is_array($news_recent)): $i = 0; $__LIST__ = $news_recent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<a class="pull-left" href="<?php echo U('Index/news_detail',array(id=>$vo['id']));?>"><img src="/clone/yuanku/Public/<?php echo ($vo['img']); ?>"/></a>
									<a href="<?php echo U('Index/news_detail',array(id=>$vo['id']));?>"><?php echo ($vo['title']); ?></a>
									<span><?php echo (date('Y年m月d日',$vo['date'])); ?></span>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<div class="happy_say">
						<h4 class="title">客户的话</h4>
						<img class="pull-left" src="/clone/yuanku/Public/img/highstand homepage/people-img19_0.jpg"/>
						<strong>- Michle Siminson</strong>
						<p>Lorem Ipsum passage, and going through the cites of the word here classical literature passage discovere there undou btable source looks reasonable the generated charac eristic words.</p>
					</div>
					<div class="advertisements">
						<h4 class="title">客户</h4>
						<ul>
							<li><a href=""><img src="/clone/yuanku/Public/img/news_img/sample-ad-banner.jpg"/></a></li>
							<li><a href=""><img src="/clone/yuanku/Public/img/news_img/sample-ad-banner.jpg"/></a></li>
						</ul>
						<ul>
							<li><a href=""><img src="/clone/yuanku/Public/img/news_img/sample-ad-banner.jpg"/></a></li>
							<li><a href=""><img src="/clone/yuanku/Public/img/news_img/sample-ad-banner.jpg"/></a></li>
						</ul>
					</div>
					<div class="text_widget">
						<h4 class="title">文本工具</h4>
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
								<li><a href=""><h4>友情链接</h4></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>百度一下</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>淘宝商城</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>腾讯首页</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span>网易新闻</span></a></li>							
							</ul>						
						</div>					
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><a href="/clone/yuanku/index.php/Home/Index/about_us"><h4>最新动态</h4></a></li><br/>
								<li><a href="#"><span class="size"><img src="/clone/yuanku/Public/img/highstand homepage/site-img225.jpg "/></span><span>灯塔</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/clone/yuanku/Public/img/highstand homepage/site-img224.jpg"/></span><span>上海</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/clone/yuanku/Public/img/highstand homepage/site-img225.jpg"/></span><span>新闻</span></a></li><br/>
					
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><a href="/clone/yuanku/index.php/Home/Index/about_us"><h4>关于我们</h4></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;&nbsp;<span>技术中心</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>&nbsp;&nbsp;<span>产品特色</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;<span>结算流程</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;&nbsp;<span>服务宗旨</span></a></li>
						   </ul>
						</div>
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><a href="/clone/yuanku/index.php/Home/Index/contact_us"><h4>联系我们</h4></a></li></br>
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