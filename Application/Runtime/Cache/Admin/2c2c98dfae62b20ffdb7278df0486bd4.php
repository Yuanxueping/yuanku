<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
<head lang="zh">
	<title><?php echo ($title); ?> - 后台管理</title>

	<meta charset="UTF-8">

	 
	 <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/admin/common.css">
	 <script src="/thinkphp_3.2.3_full/yuanku/Public/js/jquery.1.11.1.min.js">	</script>


</head>
<body>

<ul>
	<li><a href="">系统设置</a></li>
</ul> 
 
 
<ul>
	<li></li>
</ul> 

	<form action="/thinkphp_3.2.3_full/yuanku/index.php/Admin/System/save" method="post">
		项目名称：<input type="text" name="site_name" value="">
		<br>

		<input type="submit" class="btn" value="提交">
	</form>

 


</body>
</html>