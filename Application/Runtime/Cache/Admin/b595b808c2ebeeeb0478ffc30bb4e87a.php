<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh">
	<title>学生信息列表</title>

	<meta charset="UTF-8">

	<style>
	td{
		text-align: center;
	}
ul li
{
	display: inline-block;
 }
	 </style>
</head>
<body>
	<ul>
		<li>
			<a href="/mvc/index.php?c=student&a=info_list">学生信息管理</a>
		</li>
		<li>
			<a href="/mvc/index.php?c=teacher&a=info_list">老师信息管理</a>
		</li>
	</ul>
	<table cellspacing="0" cellpadding="5"  style="width:980px">
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
				<td></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>

	</tr>
	<td colspan="8"> <b>统计：总人数：<?php echo ($smarty["section"]["class_info_i"]["total"]); ?></b>
	</td>
</tr>
</table>

</body>
</html>