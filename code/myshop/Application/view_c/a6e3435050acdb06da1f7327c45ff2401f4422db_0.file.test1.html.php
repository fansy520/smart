<?php
/* Smarty version 3.1.29, created on 2016-03-21 15:29:23
  from "E:\php_jiuye\20160321_smarty\myshop\Application\View\Home\Default\test1.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56efa2d39c61e1_61864292',
  'file_dependency' => 
  array (
    'a6e3435050acdb06da1f7327c45ff2401f4422db' => 
    array (
      0 => 'E:\\php_jiuye\\20160321_smarty\\myshop\\Application\\View\\Home\\Default\\test1.html',
      1 => 1458545357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:test2.html' => 1,
  ),
),false)) {
function content_56efa2d39c61e1_61864292 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\php_jiuye\\20160321_smarty\\myshop\\Framework\\Tools\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_217156efa2d39b2966_60598152',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_1807256efa2d39ba668_69740859',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:test2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:test1.html */
function block_217156efa2d39b2966_60598152($_smarty_tpl, $_blockParentStack) {
?>

姓名:<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

年龄:<?php echo $_smarty_tpl->tpl_vars['age']->value;?>
<h3>这是h3</h3>
<?php
}
/* {/block 'content'} */
/* {block 'footer'}  file:test1.html */
function block_1807256efa2d39ba668_69740859($_smarty_tpl, $_blockParentStack) {
?>

<hr>
<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>

<h2>这里是test1的 footer</h2>
</body>
</html>
<?php
}
/* {/block 'footer'} */
}
