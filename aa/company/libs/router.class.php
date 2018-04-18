<?php

/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/4/3
 * Time: 9:04
 */
class router{
    private $m;
    private $f;
    private $a;
    function __construct()
    {
        $this->m=isset($_GET['m'])?$_GET['m']:'index';
        $this->f=isset($_GET['f'])?$_GET['f']:'index';
        $this->a=isset($_GET['a'])?$_GET['a']:'init';
    }
    function out(){
        $path="./module/".$this->m;
        if(is_dir($path)){
            $path.="/".$this->f.".class.php";
            if(is_file($path)){
                include_once $path;
                if(class_exists($this->f)){
                    $class=$this->f;
                    $obj=new $class();
                    if(method_exists($obj,$this->a)){
                        $fun=$this->a;
                        $obj->$fun();
                    }else{
                        echo $this->a.'方法不存在';
                    }
                }else{
                    echo $this->f.'类不存在';
                }
            }else{
                echo $this->f.'文件不存在';
            }
        }else{
            echo $this->m.'模块不存在';
        }
    }
}