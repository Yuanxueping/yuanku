<?php
/* Smarty version 3.1.30, created on 2016-10-01 11:06:04
  from "C:\wamp\www\mvc\views\student_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ef281cc4f670_55206715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e26ae3cc487eb17930836c3a0852f73120bd18b' => 
    array (
      0 => 'C:\\wamp\\www\\mvc\\views\\student_list.html',
      1 => 1475287609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ef281cc4f670_55206715 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
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
	<li><a href="/mvc/index.php?c=student&a=info_list">学生信息管理</a></li>
	<li><a href="/mvc/index.php?c=teacher&a=info_list">老师信息管理</a></li>
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
	<!-- <?php
$__section_class_info_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i'] : false;
$__section_class_info_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['class_info_a']->value) ? count($_loop) : max(0, (int) $_loop));
$_smarty_tpl->tpl_vars['__smarty_section_class_info_i'] = new Smarty_Variable(array('total' => $__section_class_info_i_0_loop));
if ($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['total'] != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['iteration'] <= $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['total']; $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['first'] = ($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['iteration'] == 1);
$_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['total']);
?> -->
	<!--  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['first'] : null)) {?> -->
	<tr style="font-weight:bold;color:red;">
	<!-- <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['last'] : null)) {?> -->
	<tr style="font-weight:bold;">
	<!-- <?php } else { ?> -->
	<tr>
	<!-- <?php }?> -->
		<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['iteration'] : null);?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['class_info_a']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index'] : null)]['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['class_info_a']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index'] : null)]['name'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['class_info_a']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index'] : null)]['teacher_name'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['class_info_a']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index'] : null)]['grade'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['class_info_a']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index'] : null)]['address'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['class_info_a']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index'] : null)]['mobile'];?>
 </td>
		<td><a href="/mvc/index.php?c=student&a=info_edit&id=<?php echo $_smarty_tpl->tpl_vars['class_info_a']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index'] : null)]['id'];?>
">修改</a> | <a href="/mvc/index.php?c=student&a=info_delete&id=<?php echo $_smarty_tpl->tpl_vars['class_info_a']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_class_info_i']->value['index'] : null)]['id'];?>
">删除</a></td>
		
	</tr>


	<!-- <?php
}
}
if ($__section_class_info_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_class_info_i'] = $__section_class_info_i_0_saved;
}
?>	  -->
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
