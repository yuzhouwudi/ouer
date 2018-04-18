<?php
/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/3/29
 * Time: 17:20
 */
class code{
    private $width=120;
    private $height=40;
    private $letter='jdhsfkv2875942jk';
    private $path;
    private $img;
    private $str;

    function __construct($path)
    {
        $this->img=imagecreatetruecolor($this->width,$this->height);
        $this->path=$path;
    }

    function getcolor($type='l'){
        if($type=='b'){
            $red=mt_rand(10,120);
            $green=mt_rand(10,120);
            $blue=mt_rand(10,120);
        }else if($type=='l'){
            $red=mt_rand(120,240);
            $green=mt_rand(120,240);
            $blue=mt_rand(120,240);
        }
        return imagecolorallocate($this->img,$red,$green,$blue);
    }
    function fillbg(){
        imagefill($this->img,0,0,$this->getcolor());
    }

    function paintd(){
        for($i=0;$i<20;$i++){
            imagesetpixel($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getcolor());
        }
    }

    function paintl(){
        for($i=0;$i<5;$i++){
            imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getcolor());
        }
    }

    function paintwords(){
        for($i=0;$i<4;$i++){
            $word=substr($this->letter,mt_rand(0,strlen($this->letter)-1),1);
            $word=mt_rand(0,1)?$word:mb_strtoupper($word);
            imagettftext($this->img,mt_rand(18,22),mt_rand(-10,10),mt_rand($i*$this->width/4,$i*$this->width/4+15),mt_rand($this->height/2+5,$this->height-5),$this->getcolor('b'),$this->path,$word);
            $this->str.=$word;
        }
        $_SESSION['code']=$this->str;
    }

    function output(){
        header('content-type:image/png');
        $this->fillbg();
        $this->paintd();
        $this->paintl();
        $this->paintwords();
        imagepng($this->img);
        imagedestroy($this->img);

    }

}


//$obj=new code("font1398/Idealist Sans Light.ttf");
//$obj->output();