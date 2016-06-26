<?php
class DefaultController extends Controller
{

    function test1Action()
    {
        $zhangsan = array('name'=>'张三','age'=>20);
        $this->assign($zhangsan);
//        $this->assign('name',$zhangsan['name']);
//        $this->assign('age',$zhangsan['age']);
        $this->display('test1.html');
    }

    function test2Action()
    {
//        $name = 'zhangsan';
        $zhangsan = array('name'=>'张三','age'=>20);
        $this->assign($zhangsan);
//        $this->assign('name',$zhangsan['name']);
//        $this->assign('age',$zhangsan['age']);
        $this->display('test2.html');
//        $this->abc();
    }
    function test3Action()
    {
        $zhangsan = array('name'=>'张三','age'=>20);
        $this->assign($zhangsan);
//        $this->assign('name',$zhangsan['name']);
//        $this->assign('age',$zhangsan['age']);
        $this->display('test3.html');
    }


}