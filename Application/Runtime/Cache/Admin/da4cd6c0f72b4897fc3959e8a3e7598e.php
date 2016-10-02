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

<br>
	<ul>
		<li>
			<a class="btn btn-success" href="/mvc/index.php?c=student&a=info_list">学生信息管理</a>
		</li>
		<li>
			<a href="/mvc/index.php?c=teacher&a=info_list">老师信息管理</a>
		</li>
	</ul>
	<table cellspacing="10" cellpadding="5"  style="width:980px" class="td_pd5">
		<tr>
			<th>编号</th>
			<th>学籍号</th>
			<th>姓名</th>
			<th>老师姓名</th>
			<th>学生成绩</th>
			<th>地址</th>
			<th>手机号码</th>
			<th>操作</th>
		</tr>

		<?php if(is_array($student_list)): $num = 0; $__LIST__ = $student_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($num % 2 );++$num;?><tr>
				<td><?php echo ($num); ?></td>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["name"]); ?></td>
				<td><?php echo ($vo["teacher_name"]); ?></td>
				<td><?php echo ($vo["grade"]); ?></td>
				<td><?php echo ($vo["address"]); ?></td>
				<td><?php echo ($vo["mobile"]); ?></td>
				<td>
					<a href="/thinkphp_3.2.3_full/yuanku/index.php/Admin/Index/student_edit/id/<?php echo ($vo["id"]); ?>" class="btn">编辑</a>
					<a href="/thinkphp_3.2.3_full/yuanku/index.php/Admin/Index/student_del/id/<?php echo ($vo["id"]); ?>" class="btn btn-warning">删除</a>
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>

	</tr>
	<td colspan="8"> <b>统计：总人数：<?php echo ($smarty["section"]["class_info_i"]["total"]); ?></b>
	</td>
</tr>
</table>

 


</body>
</html>