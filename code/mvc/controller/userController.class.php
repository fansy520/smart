<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/21 0021
 * Time: 上午 10:44
 */
class userController extends controller{


    function index()
    {
        $name = '小母';
//1 引入smarty类文件

//3 传值
        $this->smarty->assign('name',$name);
//4 调用模板文件显示
        $this->smarty->display('index.html');
    }
    function edit()
    {
        $name = '小';
//1 引入smarty类文件

//3 传值
        $this->smarty->assign('name',$name);
//4 调用模板文件显示
        $this->smarty->display('index.html');
    }
}