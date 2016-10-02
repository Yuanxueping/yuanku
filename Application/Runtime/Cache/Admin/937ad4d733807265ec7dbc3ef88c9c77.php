<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
<head lang="zh">
	<title>1</title>

	<meta charset="UTF-8">

	 
	 <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/thinkphp_3.2.3_full/yuanku/Public/css/common.css">
	 <script src="/thinkphp_3.2.3_full/yuanku/Public/js/jquery.1.11.1.min.js">	</script>


</head>
<body> 

<form action="/thinkphp_3.2.3_full/yuanku/index.php/Admin/Index/update_info" method="post">
	学生姓名：<input type="text" name="name" value="<?php echo ($stu_info['name']); ?>"><br>
	学生成绩：<input type="text" name="grade" value="<?php echo ($stu_info['grade']); ?>"><br>
	手机号码：<input type="text" name="mobile" value="<?php echo ($stu_info['mobile']); ?>"><br>
	<input type="hidden"  name="id" value="<?php echo ($stu_info['id']); ?>">
	<input type="submit" class="btn btn-success">
</form>
 

 


</body>
</html>