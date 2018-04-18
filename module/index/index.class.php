<?php
/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/4/2
 * Time: 16:39
 */
class index extends commomIndex {
    function init(){
        $this->smarty->display('index.html');
    }

    function product(){
        $this->smarty->display('product.html');
    }



}