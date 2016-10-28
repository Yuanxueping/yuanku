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
	  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
      <![endif]-->



		

		


<!-- 这里写自己页面的样式 -->
<!--HOME css-->
<<<<<<< HEAD

<link rel="stylesheet" href="/lidong/yuanku/Public/css/home/sport_nba.css" />
=======
<script src="/yuanku/Public/js/headerchange.js"></script>
<link rel="stylesheet" href="/yuanku/Public/css/home/sport_nba.css" />
>>>>>>> 6039ff477dafbc775df0d1c8c5f6ea4f9c81ae73
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
		      	<img class="logo" src="/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="/yuanku/index.php/Home/Index/index">首页</a></li>
				        
				        <li><a href="/yuanku/index.php/Home/Nba/news">推荐</a></li>
				        <li><a href="/yuanku/index.php/Home/Nba/news">视频</a></li>
				        <li><a href="<?php echo U('Nba/index');?>">篮球</a></li>
				        <li><a href="/yuanku/index.php/Home/Nba/news">足球</a></li>
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
            <div class="slide-wrap">
                <ol id="headFocusCont" bosszone="SY_JDT" style="width: 17360px; margin-left: -3720px;">
                    <li class="col-2">
                        <div area_id="indexfoucsg_229" area_type="pic-text" area_num="1" area_img="1张图:1240X400;2张图:615X400;3张图:410X400" source="http://www.qq.com/source1?site=" mode="manual" class="page-wrap">
                            <a target="_blank" href="http://kbs.sports.qq.com/kbsweb/game.htm?mid=100000:1468640" title="正视频直播篮网vs绿军 书豪托马斯抢全明星" class="pic">
                                <div>
                                    <img src="baseket_ball_files/0.jpg" alt="正视频直播篮网vs绿军 书豪托马斯抢全明星"></div>
                                <p>正视频直播篮网vs绿军 书豪托马斯抢全明星</p>
                            </a>
                            <a target="_blank" href="http://sports.qq.com/a/20161026/015765.htm" title="10:00视频直播火箭vs湖人 哈登欲带队迎开门红" class="pic">
                                <div>
                                    <img src="baseket_ball_files/0_009.jpg" alt="10:00视频直播火箭vs湖人 哈登欲带队迎开门红"></div>
                                <p>10:00视频直播火箭vs湖人 哈登欲带队迎开门红</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-2">
                        <div area_id="indexfoucse_229" area_type="pic-text" area_num="1" area_img="1张图:1240X400;2张图:615X400;3张图:410X400" source="http://www.qq.com/source1?site=" mode="manual" class="page-wrap">
                            <a target="_blank" href="http://www.anta.cn/anta-11641101-8.html" title="汤普森Ⅱ代战靴登场！" class="pic">
                                <div>
                                    <img src="baseket_ball_files/0_014.jpg" alt="汤普森Ⅱ代战靴登场！"></div>
                                <p>汤普森Ⅱ代战靴登场！</p>
                            </a>
                            <a target="_blank" href="http://www.qiaodan.com/" title="哈德森：跨越新生 只为不凡" class="pic">
                                <div>
                                    <img src="baseket_ball_files/0_033.jpg" alt="哈德森：跨越新生 只为不凡"></div>
                                <p>哈德森：跨越新生 只为不凡</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-2">
                        <div area_id="indexfoucsg_229" area_type="pic-text" area_num="1" area_img="1张图:1240X400;2张图:615X400;3张图:410X400" source="http://www.qq.com/source1?site=" mode="manual" class="page-wrap">
                            <a target="_blank" href="http://kbs.sports.qq.com/kbsweb/game.htm?mid=100000:1468640" title="正视频直播篮网vs绿军 书豪托马斯抢全明星" class="pic">
                                <div>
                                    <img src="baseket_ball_files/0.jpg" alt="正视频直播篮网vs绿军 书豪托马斯抢全明星"></div>
                                <p>正视频直播篮网vs绿军 书豪托马斯抢全明星</p>
                            </a>
                            <a target="_blank" href="http://sports.qq.com/a/20161026/015765.htm" title="10:00视频直播火箭vs湖人 哈登欲带队迎开门红" class="pic">
                                <div>
                                    <img src="baseket_ball_files/0_009.jpg" alt="10:00视频直播火箭vs湖人 哈登欲带队迎开门红"></div>
                                <p>10:00视频直播火箭vs湖人 哈登欲带队迎开门红</p>
                            </a>
                        </div>
                    </li>
                   
                </ol>
                <a href="javascript:;" target="_self" class="control-prev" id="headFocusBtnL" bosszone="SY_JDTswitch1"></a>
                <a href="javascript:;" target="_self" class="control-next" id="headFocusBtnR" bosszone="SY_JDTswitch1"></a>
            </div>
            <div class="paging" bosszone="SY_JDTswitch2">
                <ol id="headFocusTab">
                    <li class="current"></li>
                    <li class=""></li>
                    <li ></li>
                     
                </ol>
            </div>
        </div>
    </div>

   
    <!-- 热门视频 -->
    <div class="js-lazy-area ele-video"  style="height:418px;" data-lazy-loadead="yes">

        <!-- 热门视频 -->
        <div class="area area-hotv">
            <div class="layout">
                <div class="block-title">
                    <h2 class="title">热门视频</h2>
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
                    <div class="sponsor">
                        <a href="http://sports.qq.com/nbavideo/nbacity/" target="_blank">
                            <img src="baseket_ball_files/124465100.jpg" width="400" height="50"></a>
                        <!--[if !IE]>
                        |xGv00|975b8a4b7d3cb1cb8a28d9bbfe45cad2
                        <![endif]--> </div>
                    <!--tpl-->
                    <div area_id="hotvideoa_225" area_type="pic-text" area_num="1" area_img="400x225" source="http://www.qq.com/source1?site=" mode="manual" class="col-left cf">
                        <div class="pic-item pic-item-large">
                            <a target="_blank" href="http://v.qq.com/x/page/n0022ian3n2.html" title="逆天三分绝杀魔术！詹姆斯09年季后赛50大进球">
                                <img src="baseket_ball_files/0_035.jpg" alt="逆天三分绝杀魔术！詹姆斯09年季后赛50大进球">
                                <p>
                                    <span>逆天三分绝杀魔术！詹姆斯09年季后赛50大进球</span>
                                </p>
                                <div class="is-video-big"></div>
                            </a>
                        </div>
                    </div>
                    <!--[if !IE]>
                    |xGv00|4bd96bcc043536ab813de2c8f4f54f6c
                    <![endif]-->
                    <!--tpl-->
                    <div area_id="hotvideoa_226" area_type="pic-text" area_num="6" area_img="240x135" source="http://www.qq.com/source1?site=" mode="manual" class="col-right cf">
                        <div class="pic-item">
                            <a target="_blank" href="http://v.qq.com/x/page/s0022rvjlmv.html" title="易建联NBA征程全景纪录片">
                                <img src="baseket_ball_files/0_017.jpg" alt="易建联NBA征程全景纪录片">
                                <p>
                                    <span>易建联NBA征程全景纪录片</span>
                                </p>
                                <div class="is-video"></div>
                            </a>
                        </div>
                        <div class="pic-item">
                            <a target="_blank" href="http://v.qq.com/x/page/r00226f784i.html" title="库里新赛季唯美宣传片 下季志在冲顶">
                                <img src="baseket_ball_files/0_030.jpg" alt="库里新赛季唯美宣传片 下季志在冲顶">
                                <p>
                                    <span>库里新赛季唯美宣传片 下季志在冲顶</span>
                                </p>
                                <div class="is-video"></div>
                            </a>
                        </div>
                        <div class="pic-item">
                            <a target="_blank" href="http://v.qq.com/x/page/l0022254f60.html" title="巴特勒16赛季凶悍防守 血帽詹姆斯">
                                <img src="baseket_ball_files/0_011.jpg" alt="巴特勒16赛季凶悍防守 血帽詹姆斯">
                                <p>
                                    <span>巴特勒16赛季凶悍防守 血帽詹姆斯</span>
                                </p>
                                <div class="is-video"></div>
                            </a>
                        </div>
                        <div class="pic-item">
                            <a target="_blank" href="http://v.qq.com/x/page/g0022xrtccs.html" title="湖人当家后卫拉塞尔的成长蜕变之路">
                                <img src="baseket_ball_files/0_012.jpg" alt="湖人当家后卫拉塞尔的成长蜕变之路">
                                <p>
                                    <span>湖人当家后卫拉塞尔的成长蜕变之路</span>
                                </p>
                                <div class="is-video"></div>
                            </a>
                        </div>
                        <div class="pic-item">
                            <a target="_blank" href="http://v.qq.com/x/page/f0022e3apnt.html" title="姚明09赛季集锦 无视拉拽神奇投篮">
                                <img src="baseket_ball_files/0_022.jpg" alt="姚明09赛季集锦 无视拉拽神奇投篮">
                                <p>
                                    <span>姚明09赛季集锦 无视拉拽神奇投篮</span>
                                </p>
                                <div class="is-video"></div>
                            </a>
                        </div>
                        <div class="pic-item">
                            <a target="_blank" href="http://v.qq.com/x/page/d0022c2vtkh.html" title="韦少季前赛个人精彩表现合集">
                                <img src="baseket_ball_files/0_006.jpg" alt="韦少季前赛个人精彩表现合集">
                                <p>
                                    <span>韦少季前赛个人精彩表现合集</span>
                                </p>
                                <div class="is-video"></div>
                            </a>
                        </div>
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
                                    <img onerror="this.onerror=null; this.src=bestPlayerReplaceImg.big;" src="/yuanku/Public/img/126115995.png" alt="220x350"></div>
                            </a>
                            <a class="player-2" href="http://nba.stats.qq.com/player/jump.htm?id=anthony_davis">
                                <div class="rank">2</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/126116230.png" alt="132x132"></div>
                                <div class="name">
                                    <p>安东尼-戴维斯</p>
                                    <span>前锋-中锋 /  鹈鹕</span>
                                </div>
                                <div class="score">20</div>
                            </a>
                            <a class="player-3" href="http://nba.stats.qq.com/player/jump.htm?id=myles_turner">
                                <div class="rank">3</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/126116230.png" alt="132x132"></div>
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
                                    <img onerror="this.onerror=null; this.src=bestPlayerReplaceImg.big;" src="/yuanku/Public/img/126115995.png" alt="220x350"></div>
                            </a>
                            <a class="player-2" href="http://nba.stats.qq.com/player/jump.htm?id=hassan_whiteside">
                                <div class="rank">2</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/126116230.png" alt="132x132"></div>
                                <div class="name">
                                    <p>哈桑-怀特塞德</p>
                                    <span>中锋 /  热火</span>
                                </div>
                                <div class="score">11</div>
                            </a>
                            <a class="player-3" href="http://nba.stats.qq.com/player/jump.htm?id=nikola_vucevic">
                                <div class="rank">3</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/126116230.png" alt="132x132"></div>
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
                                    <div class="tag">助攻王</div>
                                    <div class="score">7</div>
                                    <i class="underline"></i>
                                    <div class="name">以赛亚-托马斯</div>
                                    <div class="desc">后卫 /  凯尔特人</div>
                                </div>
                                <div class="photo">
                                    <img onerror="this.onerror=null; this.src=bestPlayerReplaceImg.big;" src="/yuanku/Public/img/126115995.png" alt="220x350"></div>
                            </a>
                            <a class="player-2" href="http://nba.stats.qq.com/player/jump.htm?id=monta_ellis">
                                <div class="rank">2</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/126116230.png" alt="132x132"></div>
                                <div class="name">
                                    <p>蒙塔-埃利斯</p>
                                    <span>后卫 /  步行者</span>
                                </div>
                                <div class="score">5</div>
                            </a>
                            <a class="player-3" href="http://nba.stats.qq.com/player/jump.htm?id=avery_bradley">
                                <div class="rank">3</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/126116230.png" alt="132x132"></div>
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
                                    <img onerror="this.onerror=null; this.src=bestPlayerReplaceImg.big;" src="/yuanku/Public/img/126115995.png" alt="220x350"></div>
                            </a>
                            <a class="player-2" href="http://nba.stats.qq.com/player/jump.htm?id=hassan_whiteside">
                                <div class="rank">2</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/126116230.png" alt="132x132"></div>
                                <div class="name">
                                    <p>哈桑-怀特塞德</p>
                                    <span>中锋 /  热火</span>
                                </div>
                                <div class="score">4</div>
                            </a>
                            <a class="player-3" href="http://nba.stats.qq.com/player/jump.htm?id=myles_turner">
                                <div class="rank">3</div>
                                <div class="photo">
                                    <img  src="/yuanku/Public/img/126116230.png" alt="132x132"></div>
                                <div class="name">
                                    <p>迈勒斯-特纳</p>
                                    <span>前锋-中锋 /  步行者</span>
                                </div>
                                <div class="score">3</div>
                            </a>
                        </li>
                    </ul>
                    <ul class="cf" style="display: none;" data-loaded="false">
                        <!--
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
                    -->
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
                        <a class="hdpic-item hdpic-item-1" href="http://sports.qq.com/a/20160927/005629.htm">
                            <div class="imgage">
                                <img src="baseket_ball_files/138792428.png" alt="NBA现役十大扣篮王"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>NBA现役十大扣篮王</p>
                            </div>
                        </a>
                        <!-- 位置2 / 405x200-->
                        <a class="hdpic-item hdpic-item-2" href="http://sports.qq.com/a/20160927/004148.htm">
                            <div class="imgage">
                                <img src="baseket_ball_files/138792725.png" alt="库里杜少终同框"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>库里杜少终同框</p>
                            </div>
                        </a>
                        <!-- 位置3 / 200x200-->
                        <a class="hdpic-item hdpic-item-3" href="http://sports.qq.com/nba/sports.qq.com/a/20160927/005248.htm">
                            <div class="imgage">
                                <img src="baseket_ball_files/138792890.png" alt="这些组合未夺冠实在可惜"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>这些组合未夺冠实在可惜</p>
                            </div>
                        </a>
                        <!-- 位置4 / 200x200-->
                        <a class="hdpic-item hdpic-item-4" href="http://sports.qq.com/a/20160927/005209.htm">
                            <div class="imgage">
                                <img src="baseket_ball_files/138792982.png" alt="23vs24成泡影"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>23vs24成泡影</p>
                            </div>
                        </a>
                        <!-- 位置5 / 200x405-->
                        <a class="hdpic-item hdpic-item-5" href="http://sports.qq.com/a/20161022/004445.htm">
                            <div class="imgage">
                                <img src="baseket_ball_files/139431754.png" alt="周杰伦与偶像AI同框"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>周杰伦与偶像AI同框</p>
                            </div>

                        </a>
                        <!-- 位置6 / 200x200-->
                        <a class="hdpic-item hdpic-item-6" href="http://sports.qq.com/nba/sports.qq.com/a/20160927/003211.htm">
                            <div class="imgage">
                                <img src="baseket_ball_files/138793463.png" alt="阿联上演“死亡之瞪”"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>阿联上演“死亡之瞪”</p>
                            </div>
                        </a>
                        <!-- 位置7 / 200x200-->
                        <a class="hdpic-item hdpic-item-7" href="http://sports.qq.com/a/20160717/004572.htm#p=1">
                            <div class="imgage">
                                <img src="baseket_ball_files/136538823.png" alt="不思悔改的奥多姆"></div>
                            <div class="mask">
                                <div class="tag"></div>
                                <i class="go">&gt;</i>
                                <p>不思悔改的奥多姆</p>
                            </div>
                        </a>
                        <!--[if !IE]>
                        |xGv00|6df37f4163b83bf7406cc37efeb1adde
                        <![endif]--> </div>
                    <div class="page" style="display: none;">
                        <!-- 位置1 / 420x405-->
                        <a class="hdpic-item hdpic-item-1" href="http://sports.qq.com/a/20160624/008201.htm#p=1">
                            <div class="imgage">
                                <img src="baseket_ball_files/135829617.jpg" alt="选秀前16级新秀大合照"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>选秀前16级新秀大合照</p>
                            </div>
                        </a>
                        <!-- 位置2 / 405x200-->
                        <a class="hdpic-item hdpic-item-2" href="http://sports.qq.com/a/20160624/006882.htm#p=1">
                            <div class="imgage">
                                <img src="baseket_ball_files/135829741.jpg" alt="骑士夺首冠"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>骑士夺首冠</p>
                            </div>
                        </a>
                        <!-- 位置3 / 200x200-->
                        <a class="hdpic-item hdpic-item-3" href="http://redbullbasketball2016.act.qq.com/">
                            <div class="imgage">
                                <img src="baseket_ball_files/135221881.jpg" alt="红牛城市传奇篮球赛"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>红牛城市传奇篮球赛</p>
                            </div>
                        </a>
                        <!-- 位置4 / 200x200-->
                        <a class="hdpic-item hdpic-item-4" href="http://sports.qq.com/a/20160623/017488.htm#p=1">
                            <div class="imgage">
                                <img src="baseket_ball_files/135830208.jpg" alt="被交易MVP"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>被交易MVP</p>
                            </div>
                        </a>
                        <!-- 位置5 / 200x405-->
                        <a class="hdpic-item hdpic-item-5" href="http://sports.qq.com/a/20160623/020932.htm#p=1">
                            <div class="imgage">
                                <img src="baseket_ball_files/135830562.jpg" alt="状元热门领衔新秀定妆照 "></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>状元热门领衔新秀定妆照</p>
                            </div>

                        </a>
                        <!-- 位置6 / 200x200-->
                        <a class="hdpic-item hdpic-item-6" href="http://sports.qq.com/a/20160623/009293.htm#p=1">
                            <div class="imgage">
                                <img src="baseket_ball_files/135830765.jpg" alt="詹皇骑士携奖杯胜利游行 "></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>詹皇骑士携奖杯胜利游行</p>
                            </div>
                        </a>
                        <!-- 位置7 / 200x200-->
                        <a class="hdpic-item hdpic-item-7" href="http://sports.qq.com/a/20160623/008714.htm#p=1">
                            <div class="imgage">
                                <img src="baseket_ball_files/135830935.jpg" alt="NBA情侣分手合集"></div>
                            <div class="mask">
                                <div class="tag">组图</div>
                                <i class="go">&gt;</i>
                                <p>NBA情侣分手合集</p>
                            </div>
                        </a>
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
     
    <a href="javascript:;" target="_self" class="gotop" title="回到顶部"></a>
    <a href="javascript:;" target="_self" data-ref="ele-video" class="video"> <em>视频</em>
    </a>
     
    <a href="javascript:;" target="_self" data-ref="ele-star" class="star">
        <em>球星</em>
    </a>
    <a href="javascript:;" target="_self" data-ref="ele-team" class="team">
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