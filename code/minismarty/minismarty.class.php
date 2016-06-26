<?php
defined('DS') or define('DS',DIRECTORY_SEPARATOR);
class minismarty{

    private $templatedir;//模板文件路径
    private $compiledir;//编译文件路径
    //保存传值的数组
    private $data=array();
    //传值
    function assign($name,$value)
    {
        $this->data[$name]=$value;
    }
    //调用模板文件
    function display($filename)
    {
    //1 将模板文件编译成php和html代码混合文件
       $compile_file_name = $this->compile($filename);
    //2 取出data里面的数据
        extract($this->data);
    //3 加载编译后的模板文件
        require $compile_file_name;

    }
    //编译
    function compile($filename)
    {
        $compile_filename = $this->compiledir.$filename.'.php';//编译后的文件名
        $template_filename = $this->templatedir.$filename;
        //改进性能:如果模板文件没有被修改(编译文件存在),不需要重新编译,直接返回编译文件

        if(file_exists($compile_filename) && (filemtime($template_filename) <= filemtime($compile_filename))){//a 不需要重新编译
            //is_file 和 file_exists 判定文件是否存在
            //filemtime 获取文件的最后修改时间
            return $compile_filename;

        }//b 需要重新编译



        //编译的过程就是替换

        $content = file_get_contents($template_filename);//file_get_contents 函数就是获取文件的内容
/*        $content = str_replace('{','<?php echo ',$content);
        $content = str_replace('}','?> ',$content);*/
        /*替换:将{替换为<?php echo  ,将}替换为 ?>*/
        $compile_content = str_replace(array('{','}'),array('<?php echo ','?>'),$content);
       // {$name}  =======>   echo $name

        file_put_contents($compile_filename,$compile_content);//将$compile_content保存到文件$compile_filename
        return $compile_filename;
    }

    //setTemplateDir 设置模板目录
    function setTemplateDir($dir)
    {
        $this->templatedir = '.'.DS.$dir.DS;
    }
    //setCompileDir  设置编译目录
    function setCompileDir($dir)
    {
        $this->compiledir = '.'.DS.$dir.DS;
    }
}