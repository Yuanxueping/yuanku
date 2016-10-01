<?php
/* Smarty version 3.1.30, created on 2016-10-01 15:33:21
  from "C:\wamp\www\mvc\views\student_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ef66c1ddd647_66951589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fed5a4d130e60c96a468f67934819d9b424e7112' => 
    array (
      0 => 'C:\\wamp\\www\\mvc\\views\\student_add.html',
      1 => 1475287616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ef66c1ddd647_66951589 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="zh">
<title>添加学生信息</title>

    <meta charset="UTF-8">
 
	 <style>
	td{
		text-align: center;
	}

	 </style>
</head>
<body>
 
<form action="/mvc/index.php?c=student&a=info_insert" style="margin:80px" method="post">
	<table cellpadding="10">
		<tr>
			<td>姓名</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>学生成绩</td>
			<td><input type="number" name="grade"></td>
		</tr>
		<tr>
			<td>地址</td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td>手机号码</td>
			<td><input type="mobile" name="mobile"></td>
		</tr>
		<tr>
			<td>所属老师</td>
			<td>
				<select name="teacher_id" id="">
					<option value="">请选择</option>
					 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teacher_a']->value, 'teacher_i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['teacher_i']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['teacher_i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['teacher_i']->value['teacher_name'];?>
</option>
					 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="添加学生信息">
			</td>
		</tr>
	</table>
</form>
 
</body>
</html><?php }
}
