<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head lang="zh">
	<title><?php echo ($title); ?></title>
	<meta charset="UTF-8">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/yuanku/Public/css/home/headAndFoot.css">
	 <script src="/yuanku/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/yuanku/Public/js/change.js" type="text/javascript" charset="utf-8"></script>
	 <script src="/yuanku/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>
	  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
      <![endif]-->



		

		


<!-- 这里写自己页面的样式 -->
<!--HOME css-->
 
<script src="/yuanku/Public/js/headerchange.js"></script>
<script src="/yuanku/Public/js/change.js" type="text/javascript" charset="utf-8"></script>
 
<link rel="stylesheet" href="/yuanku/Public/css/home/sport_nba.css" />

<!--<link rel="stylesheet" type="text/css" href="/yuanku/Public/home/foucsbox.css"/>-->

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
		      	<img class="logo" src="/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="<?php echo U('Index/index');?>">首页</a></li>
				        
				        <li><a href="<?php echo U('Index/news');?>">推荐</a></li> 
				        <li><a href="<?php echo U('Nba/index');?>">篮球</a></li>
				        <!-- <li><a href="/yuanku/index.php/Home/Nba/news">足球</a></li> -->
				        
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
<br><br><br>
<!--轮播-->
 <!-- 焦点图 -->
    <div class="area area-focus">        
        <div class="layout">             
            <div class="slide-wrap" style="height:430px;">
                <ol id="headFocusCont" bosszone="SY_JDT" style="width:1736px;>
                    <div class="bs-example" data-example-id="carousel-with-captions">
	                    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel" style="height:400px;position: relative;">
						    <ol class="carousel-indicators" style="left: 600px; width:60px;height:auto;text-align: center;">
						        <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
						        <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
						        <li data-target="#carousel-example-captions" data-slide-to="2" class="active"></li>
						    </ol>
	                <div class="carousel-inner" role="listbox">
	                <div class="item">
	                	<?php if(is_array($news_lion)): $kk = 0; $__LIST__ = $news_lion;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news_s): $mod = ($kk % 2 );++$kk;?><li class="col-2">
                            <div area_id="indexfoucsg_229" area_type="pic-text" area_num="1" area_img="1张图:1240X400;2张图:615X400;3张图:410X400" source="http://www.qq.com/source1?site=" mode="manual" class="page-wrap">
	                            <a target="_blank" href="http://kbs.sports.qq.com/kbsweb/game.htm?mid=100000:1468640" title="正视频直播篮网vs绿军 书豪托马斯抢全明星" class="pic">
	                                <div>
	                                    <img src="/yuanku/Public/img/basketball/139622220.jpg" alt="正视频直播篮网vs绿军 书豪托马斯抢全明星" style="width: 100%;height: auto;"></div>
	                                   
	                                <p>正视频直播篮网vs绿军 书豪托马斯抢全明星</p>
	                            </a>
	                            <a target="_blank" href="http://sports.qq.com/a/20161026/015765.htm" title="10:00视频直播火箭vs湖人 哈登欲带队迎开门红" class="pic">
	                                <div>
	                                    <img src="/yuanku/Public/img/basketball/139628559.jpg" alt="10:00视频直播火箭vs湖人 哈登欲带队迎开门红" style="width: 100%;height: auto;"></div>              
	                                <p>10:00视频直播火箭vs湖人 哈登欲带队迎开门红</p>
	                            </a>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
	                </div>
			        <div class="item">
			        	<li class="col-2">
		                    <div area_id="indexfoucsg_229" area_type="pic-text" area_num="1" area_img="1张图:1240X400;2张图:615X400;3张图:410X400" source="http://www.qq.com/source1?site=" mode="manual" class="page-wrap">
	                            <a target="_blank" href="http://china.nba.com/" title="正视频直播篮网vs绿军 书豪托马斯抢全明星" class="pic">
	                                <div>
	                                    <img src="/yuanku/Public/img/basketball/139666522.jpg" alt="正视频直播篮网vs绿军 书豪托马斯抢全明星" style="width: 100%;height: auto;"></div>
	                                   
	                                <p>奇才99-老鹰114 比尔战斧暴扣难救主霍华德两双</p>
	                            </a>
	                            <a target="_blank" href="http://sports.qq.com/a/20161026/015765.htm" title="10:00视频直播火箭vs湖人 哈登欲带队迎开门红" class="pic">
	                                <div>
	                                    <img src="/yuanku/Public/img/basketball/139628559.jpg" alt="10:00视频直播火箭vs湖人 哈登欲带队迎开门红" style="width: 100%;height: auto;"></div>              
	                                <p>10:00视频直播火箭vs湖人 哈登欲带队迎开门红</p>
	                            </a>
		                    </div>
		                </li>	
			        </div>
	                <div class="item active">
	        	        <li class="col-2">
	                        <div area_id="indexfoucsg_229" area_type="pic-text" area_num="1" area_img="1张图:1240X400;2张图:615X400;3张图:410X400" source="http://www.qq.com/source1?site=" mode="manual" class="page-wrap">
	                            <a target="_blank" href="http://china.nba.com/" title="正视频直播篮网vs绿军 书豪托马斯抢全明星" class="pic">
	                                <div>
	                                    <img src="/yuanku/Public/img/basketball/139663566.jpg" alt="正视频直播篮网vs绿军 书豪托马斯抢全明星" style="width: 100%;height: auto;"></div>
	                                   
	                                <p>格里芬集锦，暴虐篮筐狂砍27分13板！</p>
	                            </a>
	                            <a target="_blank" href="http://china.nba.com/" title="10:00视频直播火箭vs湖人 哈登欲带队迎开门红" class="pic">
	                                <div>
	                                    <img src="/yuanku/Public/img/basketball/139663273.jpg" alt="10:00视频直播火箭vs湖人 哈登欲带队迎开门红" style="width: 100%;height: auto;"></div>              
	                                <p>伦纳德：死亡缠绕，再现反击暴扣一条龙！</p>
	                            </a>
	                        </div>
                        </li>		
	                </div>
	                </div>
					    <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev" style="position: absolute;left: -50px;">
					        <span class="glyphicon glyphicon-chevron-left " aria-hidden="true"></span>
					        <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next" style="position: absolute;right: 450px;">
					        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					        <span class="sr-only">Next</span>
					    </a>
	                </div>
                    </div>
                </ol>
            </div>
        </div>
    </div>

  
    <!-- 热门视频 -->
    <div class="js-lazy-area ele-video" id="video1"  style="height:418px;" data-lazy-loadead="yes">

        <!-- 热门视频 -->
       
        <div class="area area-hotv">
            <div class="layout">
                <div class="block-title">
                    <h2 class="title">NBA</h2>
                    <div class="title-sub" bosszone="SY_Vlink">
                        <div class="more" bosszone="SY_Vmore">
                            <a class="arrow" href="http://sports.qq.com/nbavideo/query/">更多视频</a>
                        </div>
                        <a href="http://sports.qq.com/kbsweb/#nba">直播大厅</a>
                        &nbsp;&nbsp;/&nbsp;&nbsp;
                        <a href="http://sports.qq.com/nbavideo/">视频首页</a>
                    </div>
                </div>
                
                <div class="block-body cf" bosszone="SY_Vlist">               
                    <?php if(is_array($news_list)): $kk = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news_i): $mod = ($kk % 2 );++$kk;?><!--tpl--> 
                <?php if($kk==1): ?><div area_id="hotvideoa_225" area_type="pic-text" area_num="1" area_img="400x250" source="http://www.qq.com/source1?site=" mode="manual" class="col-left cf">
                        <div class="pic-item pic-item-large" style="height: 300px;">
                            <a target="_blank" href="<?php echo U('Index/news_detail',array(id=>$news_i[id]));?>" title="<?php echo ($news_i['title']); ?>">
                                <img src="/yuanku/Public/<?php echo ($news_i["img"]); ?>" alt="<?php echo ($news_i['title']); ?>">
                                <p>
                                    <span><?php echo ($news_i['title']); ?></span>
                                </p>
                                <div class="is-video-big"></div>
                            </a>
                        </div>
                    </div>
                    <div area_id="hotvideoa_226" area_type="pic-text" area_num="6" area_img="240x135" source="http://www.qq.com/source1?site=" mode="manual" class="col-right cf">                           
                <?php else: ?>  
                <div class="pic-item">
                    <a target="_blank" href="<?php echo U('Index/news_detail',array(id=>$news_i[id]));?>" title="<?php echo ($news_i['title']); ?>">
                        <!--<img src="/yuanku/Public/<?php echo ($news_i["img"]); ?>" alt="易建联NBA征程全景纪录片">-->
                        <img src="/yuanku/Public/<?php echo ($news_i["img"]); ?>" alt="<?php echo ($news_i['title']); ?>">
                        <p>
                            <!--<span><?php echo ($news_i["title"]); ?></span>-->
                            <span><?php echo ($news_i['title']); ?></span>
                        </p>
                        <div class="is-video"></div>
                    </a>
                </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                
                </div>
                </div>
          
            </div>
        </div>
      
     </div>

   
    <!-- 最佳球员 -->
    <div class="js-lazy-area ele-star"   style="height:500px;" data-lazy-loadead="yes">

        <!-- 最佳球员 -->
        <div class="area area-best">
            <div class="layout">
                <div class="block-title">
                    <h2 class="title">最佳球员</h2>
                    <div class="title-sub">
                        <ul class="title-tab cf" id="bestPlayerTab" bosszone="SY_SDslt">
                            <li class="current">今日最佳</li>
                            <li>本赛季</li>
                        </ul>
                    </div>
                </div>
                <div class="block-body" id="bestPlayerCont" bosszone="SY_SDclk">
                    <ul class="cf" data-loaded="true" style="display: block;">
                    	
                        <li>       
                        	
                            <a class="player-1" href="http://nba.stats.qq.com/player/jump.htm?id=jonas_valanciunas">
                                <div class="info">
                                    <div class="tag">得分王</div>
                                    <div class="score">21</div> <i class="underline"></i>
                                    <div class="name">乔纳斯-瓦兰西尤纳斯</div>
                                    <div class="desc">中锋 /  猛龙</div>
                                </div>
                                <div class="photo">
                                    <img onerror="this.onerror=null; this.src=bestPlayerReplaceImg.big;" src="/yuanku/Public/img/basketball/202685.png" alt="220x350" style="height: 160px;"></div>
                            </a>
                         
                            <a class="player-2" href="http://nba.stats.qq.com/player/jump.htm?id=anthony_davis">
                                <div class="rank">2</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/basketball/203076.png" alt="132x132"></div>
                                <div class="name">
                                    <p>安东尼-戴维斯</p>
                                    <span>前锋-中锋 /  鹈鹕</span>
                                </div>
                                <div class="score">20</div>
                            </a>
                            <a class="player-3" href="http://nba.stats.qq.com/player/jump.htm?id=myles_turner">
                                <div class="rank">3</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/basketball/1626167.png" alt="132x132"></div>
                                <div class="name">
                                    <p>迈勒斯-特纳</p>
                                    <span>前锋-中锋 /  步行者</span>
                                </div>
                                <div class="score">20</div>
                            </a>
                            
                        </li>
                     
                        <li>
                            <a class="player-1" href="http://nba.stats.qq.com/player/jump.htm?id=myles_turner">
                                <div class="info">
                                    <div class="tag">篮板王</div>
                                    <div class="score">13</div> <i class="underline"></i>
                                    <div class="name">迈勒斯-特纳</div>
                                    <div class="desc">前锋-中锋 /  步行者</div>
                                </div>
                                <div class="photo">
                                    <img onerror="this.onerror=null; this.src=bestPlayerReplaceImg.big;" src="/yuanku/Public/img/basketball/1626167.png" alt="220x350" style="height: 160px;"></div>
                            </a>
                            <a class="player-2" href="http://nba.stats.qq.com/player/jump.htm?id=hassan_whiteside">
                                <div class="rank">2</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/basketball/202355.png" alt="132x132"></div>
                                <div class="name">
                                    <p>哈桑-怀特塞德</p>
                                    <span>中锋 /  热火</span>
                                </div>
                                <div class="score">11</div>
                            </a>
                            <a class="player-3" href="http://nba.stats.qq.com/player/jump.htm?id=nikola_vucevic">
                                <div class="rank">3</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/basketball/202696.png" alt="132x132"></div>
                                <div class="name">
                                    <p>尼克拉-武切维奇</p>
                                    <span>中锋 /  魔术</span>
                                </div>
                                <div class="score">11</div>
                            </a>
                        </li>
                        <li>
                            <a class="player-1" href="http://nba.stats.qq.com/player/jump.htm?id=isaiah_thomas">
                                <div class="info">
                                    <div class="tag">助攻王</div>--
                                    <div class="score">7</div>
                                    <i class="underline"></i>
                                    <div class="name">以赛亚-托马斯</div>
                                    <div class="desc">后卫 /  凯尔特人</div>
                                </div>
                                <div class="photo">
                                    <img onerror="this.onerror=null; this.src=bestPlayerReplaceImg.big;" src="/yuanku/Public/img/basketball/202738.png" alt="220x350" style="height: 160px;"></div>
                            </a>
                            <a class="player-2" href="http://nba.stats.qq.com/player/jump.htm?id=monta_ellis">
                                <div class="rank">2</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/basketball/101145.png" alt="132x132"></div>
                                <div class="name">
                                    <p>蒙塔-埃利斯</p>
                                    <span>后卫 /  步行者</span>
                                </div>
                                <div class="score">5</div>
                            </a>
                            <a class="player-3" href="http://nba.stats.qq.com/player/jump.htm?id=avery_bradley">
                                <div class="rank">3</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/basketball/202340.png" alt="132x132"></div>
                                <div class="name">
                                    <p>埃弗里-布拉德利</p>
                                    <span>后卫 /  凯尔特人</span>
                                </div>
                                <div class="score">4</div>
                            </a>
                        </li>
                        <li>
                            <a class="player-1" href="http://nba.stats.qq.com/player/jump.htm?id=al_horford">
                                <div class="info">
                                    <div class="tag">盖帽王</div>
                                    <div class="score">4</div>
                                    <i class="underline"></i>
                                    <div class="name">艾尔-霍福德</div>
                                    <div class="desc">中锋-前锋 /  凯尔特人</div>
                                </div>
                                <div class="photo">
                                    <img onerror="this.onerror=null; this.src=bestPlayerReplaceImg.big;" src="/yuanku/Public/img/basketball/201143.png" alt="220x350" style="height: 160px;"></div>
                            </a>
                            <a class="player-2" href="http://nba.stats.qq.com/player/jump.htm?id=hassan_whiteside">
                                <div class="rank">2</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/basketball/202355.png" alt="132x132"></div>
                                <div class="name">
                                    <p>哈桑-怀特塞德</p>
                                    <span>中锋 /  热火</span>
                                </div>
                                <div class="score">4</div>
                            </a>
                            <a class="player-3" href="http://nba.stats.qq.com/player/jump.htm?id=myles_turner">
                                <div class="rank">3</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/basketball/1626167.png" alt="132x132"></div>
                                <div class="name">
                                    <p>迈勒斯-特纳</p>
                                    <span>前锋-中锋 /  步行者</span>
                                </div>
                                <div class="score">3</div>
                            </a>
                        </li>
                    </ul>
                    <ul class="cf" data-loaded="false">
                    
                <li>
                        <div class="player-1">
                            <div class="info">
                                <div class="tag">得分王</div>
                                <div class="score">29.3</div>
                                <i class="underline"></i>
                                <div class="name">斯蒂芬-库里</div>
                                <div class="desc">后卫 / 金州 勇士</div>
                            </div>
                            <div class="photo">
                                <img src="http://img1.gtimg.com/sports/pics/hv1/206/181/1878/122163311.jpg" alt="160x235"></div>
                        </div>
                        <div class="player-2">
                            <div class="rank">2</div>
                            <div class="photo">
                                <img src="http://img1.gtimg.com/sports/pics/hv1/68/182/1878/122163428.png" alt="50x50"></div>
                            <div class="name">
                                <p>哈里森-巴恩斯</p>
                                <span>前锋 / 勇士</span>
                            </div>
                            <div class="score">24.3</div>
                        </div>
                        <div class="player-3">
                            <div class="rank">3</div>
                            <div class="photo">
                                <img src="http://img1.gtimg.com/sports/pics/hv1/68/182/1878/122163428.png" alt="50x50"></div>
                            <div class="name">
                                <p>哈里森-巴恩斯</p>
                                <span>前锋 / 勇士</span>
                            </div>
                            <div class="score">24.3</div>
                        </div>
                        <a class="more" href="#">
                         			   更多
                            <span>&gt;&gt;</span>
                        </a>
                    </li>
        
                </ul>
            </div>
        </div>      
    </div>    
</div>

    <div class="js-lazy-area ele-team"   style="height:540px;" data-lazy-loadead="yes">

    <!-- 高清图片 -->
    <div class="area area-photos">
        <div class="layout">
            <div class="block-title">
                <h2 class="title">高清图片</h2>
                <div class="title-sub">
                    <div class="more" bosszone="SY_Photomore">
                        <a class="arrow" href="http://sports.qq.com/nba/photo/">更多图集</a>
                    </div>
                </div>
            </div>
            <div class="block-body cf">
                <div class="control cf">
                    <a href="javascript:%20void(0);" class="next" id="highFocusBtnL" bosszone="SY_Photoswitch">&gt;</a>
                    <a href="javascript:%20void(0);" class="prev" id="highFocusBtnR" bosszone="SY_Photoswitch">&lt;</a>
                </div>
                <div class="photos-wrap" id="highFocusCont" bosszone="SY_Photoclk">
                    <div class="page" style="display: block;">
                       <!-- 位置1 / 420x405-->
                      <?php if(is_array($news_line)): $kk = 0; $__LIST__ = $news_line;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news_e): $mod = ($kk % 2 );++$kk; if($kk==1): ?><a class="hdpic-item hdpic-item-1" href="<?php echo U('Index/news_detail',array(id=>$news_e[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_e["img"]); ?>" alt="<?php echo ($news_e['title']); ?>" style="width: 100%;height: auto;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_e['title']); ?></p>
                            </div>
                        </a>
                        <!-- 位置2 / 405x200-->
                       <?php elseif($kk==2): ?>
                        <a class="hdpic-item hdpic-item-2" href="<?php echo U('Index/news_detail',array(id=>$news_e[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_e["img"]); ?>" alt="<?php echo ($news_e['title']); ?>" style="width: 100%;height: auto;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_e['title']); ?></p>
                            </div>
                        </a>
                        <!-- 位置3 / 200x200-->
                        <?php elseif($kk==3): ?>
                        <a class="hdpic-item hdpic-item-3" href="<?php echo U('Index/news_detail',array(id=>$news_e[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_e["img"]); ?>" alt="<?php echo ($news_e['title']); ?>" style="width: 100%;height: auto;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_e['title']); ?></p>
                            </div>
                        </a>
                        <!-- 位置4 / 200x200-->
                        <?php elseif($kk==4): ?>
                        <a class="hdpic-item hdpic-item-4" href="<?php echo U('Index/news_detail',array(id=>$news_e[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_e["img"]); ?>" alt="<?php echo ($news_e['title']); ?>" style="width: 100%;height: auto;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_e['title']); ?></p>
                            </div>
                        </a>
                        <!-- 位置5 / 200x405-->
                       <?php elseif($kk==5): ?>
                        <a class="hdpic-item hdpic-item-5" href="<?php echo U('Index/news_detail',array(id=>$news_e[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_e["img"]); ?>" alt="<?php echo ($news_e['title']); ?>" style="width: 100%;height: auto;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_e['title']); ?></p>
                            </div>

                        </a>
                        <!-- 位置6 / 200x200-->
                        <?php elseif($kk==6): ?>
                        <a class="hdpic-item hdpic-item-6" href="<?php echo U('Index/news_detail',array(id=>$news_e[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_e["img"]); ?>" alt="<?php echo ($news_e['title']); ?>”" style="width:100%;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_e['title']); ?></p>
                            </div>
                        </a>
                        <!-- 位置7 / 200x200-->
                       <?php else: ?>
                        <a class="hdpic-item hdpic-item-7" href="<?php echo U('Index/news_detail',array(id=>$news_e[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_e["img"]); ?>" alt="<?php echo ($news_e['title']); ?>" style="width: 100%;"></div>
                            <div class="mask">
                                <div class="tag"></div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_e['title']); ?></p>
                            </div>
                        </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        <!--[if !IE]>
                        |xGv00|6df37f4163b83bf7406cc37efeb1adde
                        <![endif]--> </div>
                      
                    <div class="page" style="display: none;">
                        <!-- 位置1 / 420x405-->
                     <?php if(is_array($news_live)): $kk = 0; $__LIST__ = $news_live;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news_f): $mod = ($kk % 2 );++$kk; if($kk==1): ?><a class="hdpic-item hdpic-item-1" href="<?php echo U('Index/news_detail',array(id=>$news_f[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_f["img"]); ?>" alt="<?php echo ($news_f['title']); ?>" style="width: 100%;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_f['title']); ?></p>
                            </div>
                        </a>
                        <!-- 位置2 / 405x200-->
                        <?php elseif($kk==2): ?>
                        <a class="hdpic-item hdpic-item-2" href="<?php echo U('Index/news_detail',array(id=>$news_f[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_f["img"]); ?>" alt="<?php echo ($news_f['title']); ?>" style="width: 100%;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_f['title']); ?></p>
                            </div>
                        </a>
                        <!-- 位置3 / 200x200-->
                        <?php elseif($kk==3): ?>
                        <a class="hdpic-item hdpic-item-3" href="<?php echo U('Index/news_detail',array(id=>$news_f[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_f["img"]); ?>" alt="<?php echo ($news_f['title']); ?>" style="width: 100%;height: auto;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_f['title']); ?></p>
                            </div>
                        </a>
                        <!-- 位置4 / 200x200-->
                        <?php elseif($kk==4): ?>
                        <a class="hdpic-item hdpic-item-4" href="<?php echo U('Index/news_detail',array(id=>$news_f[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_f["img"]); ?>" alt="<?php echo ($news_f['title']); ?>" style="width: 100%;height: 190px;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_f['title']); ?></p>
                            </div>
                        </a>
                        <!-- 位置5 / 200x405-->
                        <?php elseif($kk==5): ?>
                        <a class="hdpic-item hdpic-item-5" href="<?php echo U('Index/news_detail',array(id=>$news_f[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_f["img"]); ?>" alt="<?php echo ($news_f['title']); ?> " style="width: 100%;height: auto;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_f['title']); ?></p>
                            </div>

                        </a>
                        <!-- 位置6 / 200x200-->
                        <?php elseif($kk==6): ?>
                        <a class="hdpic-item hdpic-item-6" href="<?php echo U('Index/news_detail',array(id=>$news_f[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_f["img"]); ?>" alt="<?php echo ($news_f['title']); ?> " style="width: 100%;height: auto;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_f['title']); ?></p>
                            </div>
                        </a>
                        <!-- 位置7 / 200x200-->
                        <?php else: ?>
                        <a class="hdpic-item hdpic-item-7" href="<?php echo U('Index/news_detail',array(id=>$news_f[id]));?>">
                            <div class="imgage">
                                <img src="/yuanku/Public/<?php echo ($news_f["img"]); ?>" alt="<?php echo ($news_f['title']); ?>" style="width: 100%;height: 200px;"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p><?php echo ($news_f['title']); ?></p>
                            </div>
                        </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        <!--[if !IE]>
                        |xGv00|12bcbdcd0a17f4550a5480fde08fb0e7
                        <![endif]--> </div>
                </div>
            </div>
        </div>
    </div>
 
</div>
 
<!-- 占位 -->
<div style="height:40px;"></div>
 

<!-- 电梯 -->
<div class="elevator" bosszone="SY_Elevator">
     
    <a href="javascript:onTop();" id=top  target="_self" class="gotop" title="回到顶部"></a>
    <a href="http://china.nba.com/videos/" target="_self" data-ref="ele-video" class="video" id="tv"><em>视频</em>
    </a>
     
    <a href="http://china.nba.com/playerindex/;" target="_self" data-ref="ele-star" class="star">
        <em>球星</em>
    </a>
    <a href="http://china.nba.com/teamindex/;" target="_self" data-ref="ele-team" class="team">
        <em>球队</em>
    </a>
    
</a>
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
								<li><a href="/yuanku/index.php/Home/Nba/about_us"><h4>最新动态</h4></a></li><br/>
								 <?php echo get_new_list(); ?>
								
								<!--<li><a href="#"><span class="size"><img src="/yuanku/Public/img/highstand homepage/site-img224.jpg"/></span><span>上海</span></a></li><br/>
								<li><a href="#"><span class="size"><img src="/yuanku/Public/img/highstand homepage/site-img225.jpg"/></span><span>新闻</span></a></li><br/>-->
					            
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><a href="/yuanku/index.php/Home/Nba/about_us"><h4>关于我们</h4></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;&nbsp;<span>技术中心</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>&nbsp;&nbsp;<span>产品特色</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;<span>结算流程</span></a></li><br/>
								<li><a href="#"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;&nbsp;<span>服务宗旨</span></a></li>
						   </ul>
						</div>
						<div class="col-lg-3 col-md-6 col-lg-12">
							<ul >
								<li><a href="/yuanku/index.php/Home/Nba/contact_us"><h4>联系我们</h4></a></li></br>
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
		        <form action="<?php echo U("Index/lookfor");?>" method="post">
		          <div class="form-group">
		            <label for="recipient-name" class="control-label">请输入你要搜索的内容</label>
		            <input type="text" class="form-control" id="recipient-name" name="search">
		          </div>
		          <!--<div class="form-group">
		            <label for="message-text" class="control-label">Message:</label>
		            <textarea class="form-control" id="message-text"></textarea>
		          </div>-->
		           <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			        <button type="submit" class="btn btn-primary">搜索</button>
		          </div>
		        </form>
		      </div>
		     
		    </div>
		  </div>
		 
</div>
<!-- </div> -->
	</body>

</html>