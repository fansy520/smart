<?php
class controller{
    protected $smarty;
    function __construct()
    {
        require './../libs/Smarty.class.php';
//2 实例化smarty对象
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir('view');
        $this->smarty->setCompileDir('view_c');
    }
}