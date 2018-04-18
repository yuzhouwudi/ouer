<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-17 15:14:02
  from 'D:\wamp\www\aa\company\template\admin\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad5f31a86a431_65411473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74b9746c5dd7ada3e09df7e403987ca42e62ee05' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\admin\\main.html',
      1 => 1523970841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad5f31a86a431_65411473 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <link rel="icon" type="image/png" href="<?php echo WEB_PATH;?>
assets/i/favicon.png">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
amazeui.min.css"/>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
app.css">
</head>
<style>
    .my-iframe {
        /*background: #f5f8fd;*/
        width: 100%;
        min-height: 500px;
        height: auto;
    }
    /*.tpl-content-wrapper*/
    #exits{
        color: #C0CDDC;
        margin:0 20px;
    }
    .am-hide-sm-only:hover #exits{
        color:#666;
    }
</style>
<body data-type="index">


<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="<?php echo IMG_PATH;?>
logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{ target: '#topbar-collapse' }"><span class="am-sr-only">导航切换</span> <span
            class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">


            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <div class="am-dropdown-toggle tpl-header-list-link" >
                    <span class="tpl-header-list-user-nick"><?php echo $_smarty_tpl->tpl_vars['zhanghao']->value;?>
</span>
                    <span class="tpl-header-list-user-nick">欢迎登录</span>
                </div>
            </li>
            <li class="am-hide-sm-only" >
                <a href="index.php?m=admin&a=out" id="exits"><span class="am-icon-power-off" ></span> 退出</a></li>

        </ul>
    </div>
</header>


<div class="tpl-page-container tpl-page-header-fixed">

    <!--导航开始-->
    <div class="tpl-left-nav tpl-left-nav-hover">
        <div class="tpl-left-nav-title">
            My Blog 导航
        </div>
        <div class="tpl-left-nav-list">
            <ul class="tpl-left-nav-menu">
                <li class="tpl-left-nav-item">
                    <a href="index.php?m=admin&f=menu&a=changepass" target="myframe" class="nav-link ">
                        <i class="am-icon-bar-chart"></i>
                        <span>修改密码</span>
                    </a>
                </li>


                <li class="tpl-left-nav-item">
                    <a href="index.php?m=admin&f=menu&a=oppr" target="myframe" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-wpforms"></i>
                        <span>产品鉴赏</span>
                    </a>

                </li>

                <li class="tpl-left-nav-item">
                    <a href="index.php?m=admin&f=menu&a=editindimg" target="myframe" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-bar-chart"></i>
                        <span>主页图片</span>
                    </a>
                </li>


                <li class="tpl-left-nav-item">
                    <a href="index.php?m=admin&f=menu&a=active" target="myframe" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-table"></i>
                        <span>活动管理</span>
                    </a>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="index.php?m=admin&f=menu&a=activedeatil" target="myframe" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-table"></i>
                        <span>活动详情管理</span>
                    </a>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="index.php?m=admin&f=menu&a=messp" target="myframe" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-comment-o"></i>
                        <span>评论管理</span>
                    </a>
                </li>


                <li class="tpl-left-nav-item">
                    <a href="index.php?m=admin&f=menu&a=lookpro" target="myframe" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-wpforms"></i>
                        <span>产品欣赏</span>
                    </a>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="index.php?m=admin&f=menu&a=product" target="myframe" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-wpforms"></i>
                        <span>产品管理</span>
                    </a>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="index.php?m=admin&f=menu&a=module" target="myframe" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-wpforms"></i>
                        <span>产品模块</span>
                    </a>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="index.php?m=admin&f=menu&a=content" target="myframe" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-wpforms"></i>
                        <span>产品详情</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>

    <!--导航结束-->

    <div class="tpl-content-wrapper" style="padding-top: 0;">
        <iframe src="" class="my-iframe" name="myframe" frameborder="no" width="100%"  height="100%"></iframe>
    </div>

</div>



</body>

</html>
<?php echo '<script'; ?>
>
    let nav=document.querySelectorAll('.nav-link')
    nav.forEach(function (val) {
        val.onclick=function () {
            nav.forEach(function (al) {
                al.classList.remove('active')
            })
            this.classList.add('active')
        }
    })
<?php echo '</script'; ?>
><?php }
}
