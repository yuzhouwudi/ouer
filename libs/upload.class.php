<?php
/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/3/30
 * Time: 14:57
 */
class upload{
    private $path='assets/upload';
    private $file;
    function __construct($file)
    {
        date_default_timezone_set('Asia/Shanghai');
        $this->file=$file;
    }

    function onload(){
        if(!is_dir($this->path)){          //判断是否是一个文件夹/目录
            mkdir($this->path);           //创建一个文件夹/目录
        }
        $path=$this->path.'/'.date('Y-m-d');
        if(!is_dir($path)){          //判断是否是一个文件夹/目录
            mkdir($path);           //创建一个文件夹/目录
        }
        $name=microtime(true).$this->file['name'];       //设置时区后，用时间戳连接name，防止图片名重复
        if(is_uploaded_file($this->file['tmp_name'])){               //判断是否有临时路径
            $result=move_uploaded_file($this->file['tmp_name'],$path.'/'.$name);     //设置新的路径
            if($result){
                echo  '/aa/company/'.$path.'/'.$name;
            }
        }
    }
}

//$up=new upload($_FILES['img']);
//$up->onload();