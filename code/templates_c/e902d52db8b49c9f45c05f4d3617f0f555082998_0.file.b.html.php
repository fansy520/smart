<?php
/* Smarty version 3.1.29, created on 2016-03-21 11:49:26
  from "E:\php_jiuye\20160321_smarty\b.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ef6f4690b4a7_15867985',
  'file_dependency' => 
  array (
    'e902d52db8b49c9f45c05f4d3617f0f555082998' => 
    array (
      0 => 'E:\\php_jiuye\\20160321_smarty\\b.html',
      1 => 1458532145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ef6f4690b4a7_15867985 ($_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta content="text/html" charset="utf-8">
    <title></title>
</head>
<body>
姓名:<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<hr>
student:<?php echo $_smarty_tpl->tpl_vars['student']->value[0];
echo $_smarty_tpl->tpl_vars['student']->value[1];?>
<br>
zhangsan:<?php echo $_smarty_tpl->tpl_vars['zhangsan']->value['name'];
echo $_smarty_tpl->tpl_vars['zhangsan']->value['age'];?>
<br>
teacher:<?php echo $_smarty_tpl->tpl_vars['teacher']->value->name;
echo $_smarty_tpl->tpl_vars['teacher']->value->sex;?>
<br>
user:<?php echo $_smarty_tpl->tpl_vars['user']->value->getname();?>

<hr>
smarty.get:id  <?php echo $_GET['id'];?>

<hr>
打印当前日期和时间<?php echo date('Y-m-d H:i:s',time());?>

<hr>
if else:
<?php if ($_smarty_tpl->tpl_vars['zhangsan']->value['age'] > 20) {?>
张三大于20岁
<?php } elseif ($_smarty_tpl->tpl_vars['zhangsan']->value['age'] == 20) {?>
张三等于20
<?php } else { ?>
张三小于20
<?php }?>
<hr>
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 3;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;
echo $_smarty_tpl->tpl_vars['i']->value;?>

<?php }} else { ?>
不能循环
<?php }
?>

<hr>
<?php
$_from = $_smarty_tpl->tpl_vars['student']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
echo $_smarty_tpl->tpl_vars['v']->value;?>

<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
没有数据
<?php
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
if ($__foreach_v_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_0_saved_key;
}
?>
</body>
</html><?php }
}
