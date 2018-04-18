<?php
/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/3/30
 * Time: 11:23
 */
class session{
    function __construct()
    {
        session_start();
    }

    function set($key,$value){
        $_SESSION[$key]=$value;
    }

    function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return null;
        }
    }

    function del($key){
        unset($_SESSION[$key]);
    }

}

//$session=new session();
////$session->set('ab','123');
////echo $session->get('ab');
////$session->del('ab');
//echo $session->get('ab');




