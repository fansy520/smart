<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/10 0010
 * Time: 下午 3:22
 */
class Controller
{
    //存放分配给页面上的变量值
    private $data = array();
    private $smarty;
    public function __construct()
    {
        $this->smarty = new SmartyTool();

        $this->smarty->setTemplateDir(CURRENT_VIEW_PATH.CONTROLLER_NAME.DS);
        $this->smarty->setCompileDir(APP_PATH.'view_c');

    }

    //魔术方法 __call 为了避免当调用的方法不存在时产生错误，可以使用 __call() 方法来避免。
    //该方法在调用的方法不存在时会自动调用，程序仍会继续执行下去。
    function __call($functionname,$arg)
    {
        if($functionname == 'assign' || $functionname == 'display'){
            call_user_func_array(array($this->smarty,$functionname),$arg);//调用方法
            //$this->smarty->$functionname($arg);
        }else{
            echo $functionname.'方法不存在';

        }

    }

    /*protected function assign($name,$value=null)
    {
        $this->smarty->assign($name,$value);
    }
    protected function display($filename)
    {
        $this->smarty->display($filename);
    }*/

    /*protected function assign($name,$value){
        $this->data[$name] = $value;
    }

    protected function display($template){
        //将$this->data中的数据 取出来作为当前函数的局部变量, 让视图页面直接使用
        extract($this->data); //会将数组中的键作为局部变量的名字, 将数组中的值作为局部变量的值
        require CURRENT_VIEW_PATH.CONTROLLER_NAME.'/'.$template;
        exit; //展示视图页面,后面的代码就没有必要执行
    }*/
    /**
     * 用来跳转
     * @param $url  跳转的地址
     * @param $msg  跳转时提示信息
     * @param $times 等待时间
     */
    protected static function redirect($url,$msg='',$times=0){
        if(!headers_sent()){  //没有发送响应内容给浏览器
            if($times==0){
                //表示立即跳转
                header('Location: '.$url);
            }else{
                //等待跳转
                //>>a.提示信息
                echo "<h1>".$msg."</h1>";
                //>>b.准备跳转
                header("Refresh: $times;url=$url");
            }
        }else{
            if($times==0){     //立即跳转
                echo <<<JS
                    <script type='text/javascript'>
                         location.href='$url'
                    </script>
JS;
            }else{            //等待跳转
                echo <<<JS
                    <script type='text/javascript'>
                        var time = $times;
                         window.setInterval(function(){
                            time--;
                            if(time==0){
                                location.href='$url';
                            }
                            document.getElementById('timer').innerHTML = time;
                         },1000)
                    </script>
                    <h1>$msg</h1>
                    <h2><span id='timer'>$times</span>之后跳转!</h2>
JS;
            }
        }


        exit;  //因为已经跳转到其他地方,当前程序不需要再继续执行.
    }
}