<?php
/* Smarty version 3.1.30, created on 2016-10-01 09:51:28
  from "C:\wamp\www\mvc\views\teacher_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ef16a0610802_54258657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '200cda0aa5ccc86b65c39e41bc856f0cf98a981b' => 
    array (
      0 => 'C:\\wamp\\www\\mvc\\views\\teacher_list.html',
      1 => 1475286685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ef16a0610802_54258657 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="zh">
<title>老师信息列表</title>

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
	<li><a href="/mvc/index.php?c=student&a=info_list">学生信息管理</a></li>
	<li><a href="/mvc/index.php?c=teacher&a=info_list">老师信息管理</a></li>
</ul>
 <table cellspacing="0" cellpadding="5"  style="width:980px">
 	<tr>
 		<th>编号</th>
 		<th>学籍号</th>
 		<th>学生姓名</th>
 		<th>老师姓名</th>
 		<th>学生成绩</th>
 		<th>地址</th>
 		<th>手机号码</th>
 		<th>操作</th>
 	</tr>
 
	<tr>
		<td colspan="8">
			<b>统计：总人数：<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['total'] : null);?>
</b>
		</td>
	</tr>
</table>

<a href="/mvc/index.php?c=student&a=info_add">添加</a>
</body>
</html><?php }
}
