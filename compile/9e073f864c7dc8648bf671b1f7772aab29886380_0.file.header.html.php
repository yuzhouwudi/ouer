<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-18 11:04:35
  from 'D:\wamp\www\aa\company\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad70a234e7761_30056324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e073f864c7dc8648bf671b1f7772aab29886380' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\index\\header.html',
      1 => 1524042274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad70a234e7761_30056324 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>

    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.3.1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
animate.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.animate1.0.3.min.js"><?php echo '</script'; ?>
>
    <link rel="shortcut icon" href="<?php echo WEB_PATH;?>
assets/i/logo.ico">

</head>
<style>

    .top{
        width:100%;
        height:550px;
        background: #000;
        overflow: hidden;

    }
    .neikuan{
        width:1000px;
        height:450px;
        /*height: 500px;*/
        padding-top: 30px;
        /*padding-top: 30px;*/
        margin: 0 auto;
    }
    .banner{
        width:750px;
        height:100%;
        float: left;
        overflow: hidden;
    }
    .lanmo{
        width: 200px;
        height:100%;
        float: left;
    }
    .lanmo li{
        width:100%;
        height: 55px;
        margin-bottom: 10px;
    }
    .lanmo li:first-child{
        margin-top: 5px;
    }
    .lanmo li span{
        display: block;
        width:100px;
        height:40px;
        margin: 0 auto;
    }
    .lanmo li p{
        width:100%;
        height:50%;
        font-size: 16px;
        line-height: 50px;
        text-align: center;
        color: #c5e3e0;
    }
    .lanmo li p:nth-child(2){
        font-size: 12px;
        line-height: 40px;
    }

    /*头部结束*/

</style>
<!--头部开始-->
<body>
<div class="top">
    <div class="neikuan">
        <div class="banner">
            <img src="<?php echo IMG_PATH;?>
/banner.png" alt="">
        </div>
        <ul class="lanmo">
            <li><a href="">
                <span><img src="<?php echo IMG_PATH;?>
/lanmo.png" alt=""></span>
            </a>
            </li>
            <li> <a href=""><p>首页</p><p>HOME</p></a></li>
            <li> <a href=""><p>产品</p><p>DRODUCT</p></a></li>
            <li><a href=""><p>品牌</p><p>BRAND</p></a></li>
            <li><a href=""><p>活动</p><p>ACTIVITY</p></a></li>
            <li><a href=""><p>资讯</p><p>INFORMATION</p></a></li>

        </ul>
    </div>
</div>
<!--头部结束-->
<?php }
}
