<?php
/* Smarty version 3.1.30, created on 2016-10-01 11:07:56
  from "C:\wamp\www\mvc\views\student_edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ef288c055a62_77203180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1e88f48aa769eb8bd58144455c01a1c2811fdff' => 
    array (
      0 => 'C:\\wamp\\www\\mvc\\views\\student_edit.html',
      1 => 1475287617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ef288c055a62_77203180 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="zh">
<title>修改学生信息</title>
    <meta charset="UTF-8">
 
	 <style>
	td{
		text-align: center;
	}

	 </style>
</head>
<body>

<form action="/mvc/index.php?c=student&a=info_update" style="margin:80px" method="post">
	<table cellpadding="10">
		<tr>
			<td>姓名</td>
			<td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['class_info']->value['name'];?>
"></td>
		</tr>
		<tr>
			<td>学生成绩</td>
			<td><input type="number" name="grade" value="<?php echo $_smarty_tpl->tpl_vars['class_info']->value['grade'];?>
"></td>
		</tr>
		<tr>
			<td>地址</td>
			<td><input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['class_info']->value['address'];?>
"></td>
		</tr>
		<tr>
			<td>手机号码</td>
			<td><input type="mobile" name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['class_info']->value['mobile'];?>
"></td>
		</tr>
		<tr>
			<td>所属老师</td>
			<td>
				<select name="teacher_id" id="">
					<option value="" >请选择</option>
					 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teacher_a']->value, 'teacher_i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['teacher_i']->value) {
?>
						<option <?php if ($_smarty_tpl->tpl_vars['teacher_i']->value['id'] == $_smarty_tpl->tpl_vars['class_info']->value['teacher_id']) {?> selected<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['teacher_i']->value['id'];?>
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
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['class_info']->value['id'];?>
">
				<input type="submit" value="修改学生信息">
			</td>
		</tr>
	</table>
</form>
 
</body>
</html><?php }
}
