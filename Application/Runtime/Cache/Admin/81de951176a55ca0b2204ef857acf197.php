<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title><?php echo ($title); ?>  后台管理</title>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="msapplication-tap-highlight" content="no">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#3f51b5">
	<!-- Windows Phone -->
  	<meta name="msapplication-navbutton-color" content="#3f51b5">
  	<!-- iOS Safari -->
  	<meta name="apple-mobile-web-app-capable" content="yes">
  	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
 
 	<link rel="stylesheet" href="/yuanku/Public/css/admin/material-design-iconic-font.css">
  	<link rel="stylesheet" href="/yuanku/Public/css/admin/animate.css">
  	<link rel="stylesheet" href="/yuanku/Public/css/admin/metisMenu.css">
  	<link rel="stylesheet" href="/yuanku/Public/css/admin/jquery_002.css">
  	<link rel="stylesheet" href="/yuanku/Public/css/admin/waves.css">
  	<link rel="stylesheet" href="/yuanku/Public/css/admin/toastr.css">
	<link rel="stylesheet" href="/yuanku/Public/css/admin/jquery.css">
	<link rel="stylesheet" href="/yuanku/Public/css/admin/style.css">
  	<link rel="stylesheet" href="/yuanku/Public/css/admin/bootstrap.css">
  	<link rel="stylesheet" href="/yuanku/Public/css/admin/common.css">

	<script src="/yuanku/Public/js/jquery.js"></script>

  	<!--<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />-->
  	
    <!--[if lt IE 9]>
      	<script src="bower_components/html5shiv/dist/html5shiv.min,js"></script>
      	<script src="bower_components/respondJs/dest/respond.min.js"></script>
    <![endif]-->
	<script src="/yuanku/Public/js/jquery_008.js"></script></head>

<body class="fixed-all boxed-layout fixed-sidebar mCustomScrollbar _mCS_4 mCS-autoHide" style="overflow: visible;">
 	<div id="mCSB_4" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_4_container" class="mCSB_container" style="position: relative; top: -164px; left: 0px;" dir="ltr">
  	<!--Preloader-->
		<div id="preloader" style="height: 631px; display: none;">
    		<div class="refresh-preloader">
    			<div class="preloader">
    				<i>.</i><i>.</i><i>.</i>
    			</div>
    		</div>
		</div>
		<div class="wrapper">
   			<nav class="navbar navbar-indigo">
 				<div class="navbar-header container brand-orange">
   					<a href="#" class="menu-toggle"><i class="zmdi zmdi-menu"></i></a>
   						<a href="/yuanku/admin" class="logo">力动网</a>
   						<a href="http://91.234.35.26/pacificonis-admin/v1.0.1/land/l3/index.html" class="icon-logo"></a>
 				</div>
  				<div class="navbar-container clearfix">
    				<div class="pull-left">
    					<a href="#" class="page-title text-uppercase">管理后台</a>
    				</div>
    				<div class="pull-right">
      					<div class="pull-left search-container">
        					<form class="searchbox">
          						<input placeholder="Search" name="search" class="searchbox-input" type="search">
          						<input class="searchbox-submit" value="" type="submit">
          						<span class="searchbox-icon"><span class="zmdi zmdi-search search-icon"></span></span>
        					</form>
      					</div>

      					<ul class="nav pull-right right-menu">
        					<li class="more-options dropdown">
          						<a class="dropdown-toggle" data-toggle="dropdown">
            						<i class="zmdi zmdi-account-circle"></i>
          						</a>

          						<div class="more-opt-container dropdown-menu">
            						<a href="#"><i class="zmdi zmdi-account-o"></i>Account<span class="badge badge-warning">3</span></a>
            						<a href="#"><i class="zmdi zmdi-storage"></i>Storage <span class="badge badge-danger">2</span></a>
            						<a href="#"><i class="zmdi zmdi-calendar-note"></i>Calendar <span class="badge badge-success">2</span></a>
            						<a href="#"><i class="zmdi zmdi-chart-donut"></i>Analytics <span class="badge badge-success">7</span></a>
            						<a href="#"><i class="zmdi zmdi-balance"></i>Balance <span class="badge badge-info">5</span></a>
            						<a href="<?php echo U('login/logout');?>"><i class="zmdi zmdi-run"></i>退出</a>
          						</div>
        					</li>
        					<li class="notification dropdown">
          						<a class="dropdown-toggle">
            						<i class="zmdi zmdi-notifications"></i>
            						<span class="badge badge-primary">8</span>
          						</a>

          						<div class="dropdown-menu">
            						<h4 class="text-center info-color m-0">You have 19 new notifications</h4>
        							<div class="notification-container mCustomScrollbar _mCS_6 mCS-autoHide" style="position: relative; overflow: visible;">
        								<div id="mCSB_6" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: 110px;" tabindex="0">
        									<div id="mCSB_6_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
          										<a href="#"><i class="zmdi zmdi-email warning-color m-r-5"></i> You have 16 messages <span class="pull-right">4 minutes ago</span></a>
         										<a href="#"><i class="zmdi zmdi-twitter info-color m-r-5"></i> 3 new followers <span class="pull-right">12 minutes ago</span></a>
          										<a href="#"><i class="zmdi zmdi-dropbox info-color m-r-5"></i> 7 changed files <span class="pull-right">18 minutes ago</span></a>
          										<a href="#"><i class="zmdi zmdi-instagram warning-color m-r-5"></i> 26 new followers <span class="pull-right">22 minutes ago</span></a>
          										<a href="#"><i class="zmdi zmdi-twitter info-color m-r-5"></i> 8 new followers <span class="pull-right">23 minutes ago</span></a>
        									</div>
        								</div>
        								<div id="mCSB_6_scrollbar_vertical" class="mCSB_scrollTools mCSB_6_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: block;">
        									<div class="mCSB_draggerContainer">
        										<div id="mCSB_6_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 46px; max-height: 76px;" oncontextmenu="return false;">
        											<div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
        										</div>
        										<div class="mCSB_draggerRail"></div>
        									</div>
        								</div>
        							</div>
            						<a href="#" class="text-uppercase clear-all">Clear all notifications</a>
            						<div class="check-ok">
              							<i class="zmdi zmdi-check"></i>
            						</div>
          						</div>
        					</li>
        					<li class="">
          						<a class="sidepanel-toggle" href="#">
            						<i class="zmdi zmdi-more-vert"></i>
          						</a>
        					</li>
      					</ul>
    				</div>
  				</div>
			</nav>
			<aside class="sidebar mCustomScrollbar _mCS_5 mCS-autoHide" style="overflow: visible;">
				<div id="mCSB_5" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0">
					<div id="mCSB_5_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
						<ul class="nav metismenu">
							<li class="profile-sidebar-container">
								<div class="profile-sidebar text-center">
									<div class="profile-userpic">
										<img src="/yuanku/Uploads<?php echo ($user_info["head_photo"]); ?>" class="img-responsive img-circle center-block mCS_img_loaded" alt="user">
										<span class="online"></span>
									</div>
									<div class="profile-usertitle">
										<div class="name">
											<?php echo ($user_info["user_name"]); ?>
										</div>
										<div class="city">
											<i class="zmdi zmdi-pin"></i>San Francisco, CA
										</div>
									</div>
									<div class="profile-activity clearfix">
										<div class="pull-left">
	
										</div>
										<div class="pull-right">
	
										</div>
									</div>
								</div>
							</li>
							<?php $controller_name= CONTROLLER_NAME ?>

							<li <?php if($controller_name == 'System'): ?>class="active"<?php endif; ?> >
								<a href="#" aria-expanded="false"><i class="zmdi zmdi-view-dashboard"></i>系统设置<span class="zmdi arrow"></span></a>
								<ul class="nav nav-inside collapse <?php if( $controller_name == 'System' ): ?>in<?php endif; ?>" aria-expanded="false">
									<li class="inside-title">系统设置</li>
									<!-- <li><a href="<?php echo U('system/index');?>">网站设置</a></li> -->
									<li>
										<a href="<?php echo U('system/manager_user');?>">管理员设置</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-view-compact"></i>首页管理<span class="zmdi arrow"></span></a>
								<ul class="nav nav-inside collapse" aria-expanded="false">
									<li class="inside-title">首页管理</li>
									<li>
										<a href="<?php echo U('index/slide_manage');?>">幻灯片管理</a>
									</li>
									<li>
										<a href="/land/l1/index_r.html">首页新闻管理</a>
									</li>
								</ul>
							</li>
							<li <?php if($controller_name == 'Client'): ?>class="active"<?php endif; ?> >
								<a href="#"><i class="zmdi zmdi-google-pages"></i>用户管理<span class="zmdi arrow"></span></a>
								<ul class="nav nav-inside collapse <?php if( $controller_name == 'Client' ): ?>in<?php endif; ?>" aria-expanded="false">
									<li class="inside-title">用户列表</li>
									<li>
										<a href="<?php echo U('client/client_list');?>">用户列表</a>
									</li>
									<li>
										<a href="<?php echo U('client/feedback');?>">咨询列表</a>
									</li>
								</ul>
							</li>
			
							<li <?php if($controller_name == 'News'): ?>class="active"<?php endif; ?>>
								<a href="#"><i class="zmdi zmdi-flower"></i>内容管理<span class="zmdi arrow"></span></a>
								<ul class="nav nav-inside collapse <?php if( $controller_name == 'News' ): ?>in<?php endif; ?>" aria-expanded="false">
									<li class="inside-title">内容管理</li>
									<li>
										<a href="<?php echo U('news/index');?>">内容列表</a>
									</li>
									<li>
										<a href="<?php echo U('news/sort');?>">内容分类</a>
									</li>
									<li>
										<a href="<?php echo U('news/news_add');?>">添加内容</a>
									</li>
									<li>
										<a href="<?php echo U('news/author_list');?>">作者管理</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div id="mCSB_5_scrollbar_vertical" class="mCSB_scrollTools mCSB_5_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: block;">
					<div class="mCSB_draggerContainer">
						<div id="mCSB_5_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 299px; max-height: 527px; top: 0px;" oncontextmenu="return false;">
							<div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
						</div>
						<div class="mCSB_draggerRail"></div>
					</div>
				</div>
			</aside>

			<!-- 右上角弹出层 -->
			<div class="side-panel">
				<ul class="nav nav-tabs nav-justified m-0">
					<li class="active">
						<a href="#tab-side-1" data-toggle="tab" aria-expanded="true"><i class="zmdi zmdi-comment-text"></i></a>
					</li>
					<li class="">
						<a href="#tab-side-2" data-toggle="tab" aria-expanded="false"><i class="zmdi zmdi-settings"></i></a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar active in" id="tab-side-1" style="position: relative; overflow: visible;">
						<div id="mCSB_2" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0">
							<div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
								<div class="side-title">Activities</div>
								<div class="p-15">
									<ul class="timeline">
										<li>
											<div class="timeline-icon primary-bg"><i class="zmdi zmdi-plus"></i></div>
											<div class="timeline-body">
												<div class="timeline-header">
													<span class="author">Jana Pena is now Follwing you</span>
													<span class="date">2 min ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-icon success-bg"><i class="zmdi zmdi-favorite"></i></div>
											<div class="timeline-body">
												<div class="timeline-header">
													<span class="author">Helen likes your photo</span>
													<span class="date">23 min ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-icon warning-bg"><i class="zmdi zmdi-email"></i></div>
											<div class="timeline-body">
												<div class="timeline-header">
													<span class="author">Colin send email</span>
													<span class="date">34 min ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-icon success-bg"><i class="zmdi zmdi-coffee"></i></div>
											<div class="timeline-body">
												<div class="timeline-header">
													<span class="author">Starbucks invites you</span>
													<span class="date">44 min ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-icon info-bg"><i class="zmdi zmdi-videocam"></i></div>
											<div class="timeline-body">
												<div class="timeline-header">
													<span class="author">Peter added new video</span>
													<span class="date">56 min ago</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
			
								<div class="side-title">Contacts</div>
								<div class="p-15">
									<ul class="media-list side-contacts">
										<li class="media notification-message">
											<div class="media-left">
												<img class="img-circle avatar mCS_img_loaded" src="img/contacts/3.png" alt="user">
											</div>
											<div class="media-body">
												<span>Katerina Dankovich</span><br>
												<span class="contact-status text-success">Online</span>
											</div>
										</li>
										<li class="media notification-message">
											<div class="media-left">
												<img class="img-circle avatar mCS_img_loaded" src="img/contacts/4.png" alt="user">
											</div>
											<div class="media-body">
												<span>Helen Doe</span><br>
												<span class="contact-status text-warning">Away</span>
											</div>
										</li>
										<li class="media notification-message">
											<div class="media-left">
												<img class="img-circle avatar mCS_img_loaded" src="img/contacts/2.png" alt="user">
											</div>
											<div class="media-body">
												<span>Phil Simons</span><br>
												<span class="contact-status text-success">Online</span>
											</div>
										</li>
										<li class="media notification-message">
											<div class="media-left">
												<img class="img-circle avatar mCS_img_loaded" src="img/contacts/1.png" alt="user">
											</div>
											<div class="media-body">
												<span>Peter Johnson</span><br>
												<span class="contact-status text-muted">Offline</span>
											</div>
										</li>
										<li class="media notification-message">
											<div class="media-left">
												<img class="img-circle avatar mCS_img_loaded" src="img/contacts/5.png" alt="user">
											</div>
											<div class="media-body">
												<span>Kate Owl</span><br>
												<span class="contact-status text-danger">Busy</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: none;">
							<div class="mCSB_draggerContainer">
								<div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 0px; top: 0px;" oncontextmenu="return false;">
									<div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
								</div>
								<div class="mCSB_draggerRail"></div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade mCustomScrollbar _mCS_3 mCS-autoHide mCS_no_scrollbar" id="tab-side-2" style="position: relative; overflow: visible;">
						<div id="mCSB_3" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: 588px;" tabindex="0">
							<div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
								<table class="table table-settings">
									<tbody>
										<tr>
											<td>
												<h5>Alerts</h5>
												<p>Sets alerts to get notified when changes occur to get new alerming items</p>
											</td>
											<td>
												<div class="checkbox checkbox-primary">
													<label><input type="checkbox">
			                          <i></i></label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h5>Notifications</h5>
												<p>You will receive notification email for any notifications if you set notification</p>
											</td>
											<td>
												<div class="checkbox checkbox-primary">
													<label><input checked="" type="checkbox">
			                        <i></i></label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h5>Messages</h5>
												<p>You will receive notification on email after setting messages notifications</p>
											</td>
											<td>
												<div class="checkbox checkbox-primary">
													<label><input type="checkbox"><i></i></label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h5>Warnings</h5>
												<p>You will get warnning only some specific setttings or alert system</p>
											</td>
											<td>
												<div class="checkbox checkbox-primary">
													<label><input checked="" type="checkbox"><i></i></label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h5>Sidebar</h5>
												<p>You can hide/show use with sidebar collapsw settings</p>
											</td>
											<td>
												<div class="checkbox checkbox-primary">
													<label><input checked="" type="checkbox"><i></i></label>
												</div>
											</td>
										</tr>
			
									</tbody>
								</table>
							</div>
						</div>
						<div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: none;">
							<div class="mCSB_draggerContainer">
								<div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px; height: 0px;" oncontextmenu="return false;">
									<div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
								</div>
								<div class="mCSB_draggerRail"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="content-box">
							<div class="content">

<link rel="stylesheet" type="text/css" href="/yuanku/Public/css/admin/news_add.css"/>

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">修改内容</div>
	</div>
	<div class="panel-body">
		<form role="form" class="form-horizontal" method="post" action="<?php echo U('News/news_edit');?>" enctype="multipart/form-data">
			<div class="form-group hidden">
	          	<label for="id" class="col-md-2 control-label">ID</label>
	          	<div class="col-md-10">
	            	<input type="text" required="" placeholder="ID" id="id" class="form-control" name="id" value="<?php echo ($news_info[0]['id']); ?>">
	          	</div>
	        </div>
	        <div class="form-group">
	          	<label for="title" class="col-md-2 control-label">标题</label>
	          	<div class="col-md-10">
	            	<input type="text" required="" placeholder="新闻标题" id="title" class="form-control" name="title" value="<?php echo ($news_info[0]['title']); ?>">
	          	</div>
	        </div>
	        <div class="form-group">
	          	<label for="author" class="col-md-2 control-label">作者</label>
	          	<div class="col-md-10">
	            	<select name="author_id" class="form-control" required="" id="author">
	            		<option selected="selected" class="d-none">请选择作者</option>
	            		<?php if(is_array($author_list)): $i = 0; $__LIST__ = $author_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" <?php if($vo['id'] == $news_info[0]['author_id']): ?>selected="selected"<?php endif; ?> ><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	            	</select>
	          	</div>
	        </div>
	        <div class="form-group">
	          	<label for="news_sort" class="col-md-2 control-label">分类</label>
	          	<div class="col-md-10">
	            	<select name="sort_ename" class="form-control" required="" id="news_sort">
	            		<option selected="selected" class="d-none">请选择分类</option>
	            		<?php if(is_array($sort_list)): $i = 0; $__LIST__ = $sort_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['e_name']); ?>" <?php if($vo['e_name'] == $news_info[0]['sort_ename']): ?>selected="selected"<?php endif; ?> ><?php echo ($vo['sort_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	            	</select>
	          	</div>
	        </div>
	        <div class="form-group">
	          	<label class="col-md-2 control-label" for="content">内容</label>
	          	<div class="col-md-10">
	            	<script id="container" name="content" type="text/plain"><?php echo (html_entity_decode($news_info[0]['content'])); ?></script>
	          	</div>
	        </div>
	        <div class="form-group">
	          	<label class="col-md-2 control-label">图片</label>
	          	<div class="col-md-10">
	            	<input class="dropify form-control"  name="img" type="file" id="img" data-default-file="/yuanku/Public/<?php echo ($news_info[0]['img']); ?>">
	          	</div>
	        </div>
	        <div class="form-group">
	          	<div class="col-md-offset-2 col-md-10">
	            	<button  class="btn btn-info" type="submit">修改</button>
	          	</div>
	        </div>
	    </form>
	</div>
</div>

<!-- 配置文件 -->
<script type="text/javascript" src="/yuanku/Public/lib/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/yuanku/Public/lib/ueditor/ueditor.all.min.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
<link rel="stylesheet" href="/yuanku/Public/css/admin/dropify.min.css">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<script src="/yuanku/Public/js/bootstrap.js"></script>
<script src="/yuanku/Public/js/metisMenu.js"></script>
<script src="/yuanku/Public/js/jquery_006.js"></script>
<script src="/yuanku/Public/js/waves.js"></script>
<script src="/yuanku/Public/js/toastr.js"></script>

<script src="/yuanku/Public/js/jquery_004.js"></script>
<script src="/yuanku/Public/js/dataTables.js"></script>
<script src="/yuanku/Public/js/moment.js"></script>

<script src="/yuanku/Public/js/Chart.js"></script>
<script src="/yuanku/Public/js/jquery_005.js"></script>
<script src="/yuanku/Public/js/jquery_007.js"></script>
<script src="/yuanku/Public/js/jquery_003.js"></script>
<script src="/yuanku/Public/js/jquery_002.js"></script>

<script>
	$(function() {
		/* Make some random data for the Chart*/

		var d1 = [];
		for(var i = 0; i <= 10; i += 1) {
			d1.push([i, parseInt(Math.random() * 100)]);
		}

		var d2 = [];
		for(var i = 0; i <= 10; i += 1) {
			d2.push([i, parseInt(Math.random() * 100)]);
		}

		var d3 = [];
		for(var i = 0; i <= 10; i += 1) {
			d3.push([i, parseInt(Math.random() * 100)]);
		}

		var d4 = [];
		for(var i = 0; i <= 50; i += 1) {
			d4.push([i, parseInt(Math.random() * 100)]);
		}

		/* Chart Options */

		var options = {
			series: {
				shadowSize: 0,
				label: "Qty",
				lines: {
					show: true,
					lineWidth: 2
				},
				points: {
					show: true
				}
			},
			grid: {
				margin: 10,
				show: false,
				hoverable: true,
				clickable: true
			},
			yaxis: {
				max: 100,
				min: 0
			},
			legend: {
				show: false
			},
			tooltip: {
				show: true,
				cssClass: "flot-tooltip",
				defaultTheme: false,
				content: '%y.2',
				shifts: {
					x: 1,
					y: -45
				}
			}
		};

		var options2 = {
			series: {
				shadowSize: 5,
				label: "Qty",
				lines: {
					show: true,
					lineWidth: 2
				}
			},
			grid: {
				margin: 10,
				show: false,
				hoverable: true,
				clickable: false
			},
			legend: {
				show: false
			},
			tooltip: {
				show: true,
				cssClass: "flot-tooltip",
				defaultTheme: false,
				content: '%y.2',
				shifts: {
					x: 1,
					y: -45
				}
			}
		};

		/* Let's create the chart */
		if($("#line-chart-2")[0]) {
			$.plot($("#line-chart-2"), [{
				data: d2,
				color: '#fff'
			}], options);
		}

		if($("#line-chart-3")[0]) {
			$.plot($("#line-chart-3"), [{
				data: d3,
				color: '#fff'
			}], options);
		}

		if($("#line-chart-4")[0]) {
			$.plot($("#line-chart-4"), [{
				data: d4,
				color: '#fff'
			}], options2);
		}

	});
</script>

<script>
	$(function() {
		$('.easychart').easyPieChart({
			barColor: "#F44336",
			trackColor: '#cccccc',
			size: 115,
			lineWidth: 15,
			scaleLength: 0
		});
	});
</script>

<script>
	$('#table2').DataTable({
		"dom": '<"toolbar tool2">rtip',
		info: false,
		paging: false,
		responsive: true,
	});

	$("div.tool2").css("padding", "7px 20px").html('<h5 class="content-title">Exchange rates</h5>');

	//Todo
	$(document).on('mouseover', '.list-group .checkbox', function() {
		$('.list-group input:checkbox').each(function() {
			$(this).on("change", function() {
				if($(this).is(":checked")) {
					$(this).closest(".list-group-item").addClass("checked-todo").removeClass("list-item");
				} else {
					$(this).closest(".list-group-item").removeClass("checked-todo");
				}
			});
		});
	});

	$(document).on('click', '.trash', function(e) {
		var clearedCompItem = $(this).closest(".list-group-item").remove();
		e.preventDefault();
	});

	//Social widget
	$('.socials span').on('click', function() {
		$(this).toggleClass("half-opacity");
	});
</script>

<script src="/yuanku/Public/js/common.js"></script>
<script src="/yuanku/Public/js/demo-switch.js">
</script>
<script>
	if($(window).width() >= 1200) {
		$("body").addClass("boxed-layout");
	} else {
		$("body").removeClass("boxed-layout");
	}

	$(window).resize(function() {
		if($(window).width() >= 1200) {
			$("body").addClass("boxed-layout");
		} else {
			$("body").removeClass("boxed-layout");
		}
	});
</script>
<script>
	if($(window).width() >= 1200) {
		$("body").addClass("fixed-sidebar");
	} else {
		$("body").removeClass("fixed-sidebar");
	}

	$(window).resize(function() {
		if($(window).width() >= 1200) {
			$("body").addClass("fixed-sidebar");
		} else {
			$("body").removeClass("fixed-sidebar");
		}
	});
</script>

			<div class="flot-tooltip" style="position: absolute; left: 880px; top: 523px; display: none;"></div>
		</div>
	</div>
	<!--<div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical body-scroll" style="display: block;">
		<div class="mCSB_draggerContainer">
			<div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 184px; max-height: 527px; top: 48px;" oncontextmenu="return false;">
				<div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
			</div>
			<div class="mCSB_draggerRail"></div>
		</div>
	</div>-->
</body>

</html>
<script src="/yuanku/Public/js/dropify.min.js"></script>
<script src="/yuanku/Public/js/admin/news_add.js"></script>