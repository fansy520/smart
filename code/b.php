<?php
$name = '小母';
$student = array('张三','李四');
//$student = array();
$zhangsan = array('name'=>'张三','age'=>'20');
$teacher = new stdClass();
$teacher->name = '老张';
$teacher->sex = '男';
class user{
    function getname()
    {
        return 'name';
    }
}
$user = new user;
//1 引入smarty类文件
require './libs/Smarty.class.php';
//2 实例化smarty对象
$smarty = new Smarty();
//{$name}
$smarty->left_delimiter = '{';
$smarty->right_delimiter = '}';
//3 传值
$smarty->assign('name',$name);
$smarty->assign('student',$student);
$smarty->assign('zhangsan',$zhangsan);
$smarty->assign('teacher',$teacher);
$smarty->assign('user',$user);
//4 调用模板文件显示
$smarty->display('./b.html');



//require 'b.html';