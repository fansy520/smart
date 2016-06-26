<?php

$name = '小母';
$age = 20;
// 1 引入minismarty类文件
require 'minismarty.class.php';
//2 实例化minismarty对象
$minismarty = new minismarty();
//设置模板目录
$minismarty->setTemplateDir('view');
$minismarty->setCompileDir('view_c');
//设置编译目录

//3 传值
$minismarty->assign('name',$name);
$minismarty->assign('age',$age);
//4 调用模板文件
$minismarty->display('b.html');