<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-17 03:03:55
  from 'D:\wamp\www\aa\company\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad547fb278790_62393487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '044eab97ec3aa99da1ed5650293bb3bdaf7989d3' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\admin\\login.html',
      1 => 1522743649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad547fb278790_62393487 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>my blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
amazeui.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
app.css">
</head>
<style>
    #doc-ipt-pwd-1{
        border-radius: 0;
    }
    .am-form-group{
        position: relative;
    }
    #code{
        position: absolute;
        bottom: 0;
        right: 0;
        width: 30%;
        height: 100%;
        border-radius: 6px;
    }
    .welcome{
        font-size: 18px;
        font-weight: 600;
    }
</style>
<body data-type="login">

<div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                Pizza <span>House</span> <i class="am-icon-skyatlas"></i>

            </div>
        </div>

        <div class="login-font">
            <i class="welcome">welcome to our restaurant</i>
        </div>
        <div class="am-u-sm-10 login-am-center">
            <form class="am-form" action="index.php?m=admin&a=checkpass" method="post">
                <fieldset>
                    <div class="am-form-group">
                        <input type="text" class="" name="zhanghao" id="doc-ipt-email-1" placeholder="输入账号吧">
                    </div>
                    <div class="am-form-group">
                        <input type="password" class="" name="pass" id="doc-ipt-pwd-1" placeholder="输入密码吧">
                    </div>
                    <div class="am-form-group">
                        <input type="text" class="" name="code" id="check" placeholder="请输入验证码">
                        <img src="index.php?m=admin&a=code" id="code" alt="" onclick="this.src='index.php?m=admin&a=code&'+Math.random()">
                    </div>
                    <p>
                        <button type="submit" class="am-btn am-btn-default">登录</button>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</div>

</body>

</html><?php }
}
