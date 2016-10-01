<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh">
<title>创建学生信息列表</title>
    <meta charset="UTF-8">
 
	 <style>
	td{text-align: center;}

	 </style>
</head>
<body>
 
<form action="/thinkphp_3.2.3_full/index.php/Admin/Index/insert" method="post">
	学生姓名：<input type="text" name="name">
	学生成绩：<input type="text" name="grade">
	手机号码：<input type="text" name="mobile">
	<input type="submit">
</form>
 
</body>
</html>