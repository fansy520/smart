<?php
/* Smarty version 3.1.29, created on 2016-03-21 15:24:53
  from "E:\php_jiuye\20160321_smarty\myshop\Application\View\Home\Default\test2.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56efa1c5e9ea56_27572499',
  'file_dependency' => 
  array (
    'a674edc47971a84c699d28902fdbdfd88a7f000a' => 
    array (
      0 => 'E:\\php_jiuye\\20160321_smarty\\myshop\\Application\\View\\Home\\Default\\test2.html',
      1 => 1458545091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56efa1c5e9ea56_27572499 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_3004756efa1c5e92ed7_96388385',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_708456efa1c5e96d54_87820625',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_2469356efa1c5e9abd3_21408700',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'header'}  file:test2.html */
function block_3004756efa1c5e92ed7_96388385($_smarty_tpl, $_blockParentStack) {
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta content="text/html" charset="utf-8">
    <title>test</title>
</head>
<body>
<h1>这里是页面的头部</h1>
<hr>
<?php
}
/* {/block 'header'} */
/* {block 'content'}  file:test2.html */
function block_708456efa1c5e96d54_87820625($_smarty_tpl, $_blockParentStack) {
?>

这里显示的是一篇文章的内容:
<?php
}
/* {/block 'content'} */
/* {block 'footer'}  file:test2.html */
function block_2469356efa1c5e9abd3_21408700($_smarty_tpl, $_blockParentStack) {
?>

<hr>
<h2>这里是文件footer</h2>
</body>
</html>
<?php
}
/* {/block 'footer'} */
}
