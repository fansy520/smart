<?php
class adminController extends controller
{



    function index()
    {
        $name = '小母';
//1 引入smarty类文件

//3 传值
        $this->smarty->assign('name', $name);
//4 调用模板文件显示
        $this->smarty->display('index.html');
    }

    function edit()
    {
        $name = '小';
//1 引入smarty类文件

//3 传值
        $this->smarty->assign('name', $name);
//4 调用模板文件显示
        $this->smarty->display('index.html');
    }
}