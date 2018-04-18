<?php
/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/4/2
 * Time: 16:36
 */

header('content-type:text/html;charset=utf8');

//网络根目录
define('WEB_PATH','http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['REQUEST_URI'],'0',strrpos
    ($_SERVER['REQUEST_URI'],'/')).'/');
//本地根目录
define('ROOT_PATH',__DIR__.'/');

//libs根目录
define('LIBS_PATH',ROOT_PATH.'libs/');
//css根目录
define('CSS_PATH',WEB_PATH.'assets/css/');
//kindeditor根目录
define('KIND_PATH',WEB_PATH.'assets/kindeditor/');
//js根目录
define('JS_PATH',WEB_PATH.'assets/js/');
//img根目录
define('IMG_PATH',WEB_PATH.'assets/img/');
//字体根目录
define('FONT_PATH',WEB_PATH.'assets/fonts/');



include_once LIBS_PATH.'commomIndex.class.php';
include_once LIBS_PATH.'page.class.php';
include_once LIBS_PATH.'upload.class.php';
include_once LIBS_PATH .'adminPar.class.php';
include_once LIBS_PATH .'db.class.php';
include_once LIBS_PATH .'session.class.php';
include_once LIBS_PATH . 'code.class.php';
include_once LIBS_PATH.'Smarty.class.php';
include_once LIBS_PATH . 'router.class.php';

$route=new router();
$route->out();
