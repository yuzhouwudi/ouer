<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-17 03:06:02
  from 'D:\wamp\www\aa\company\template\admin\mess.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad5487a288042_09824241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ce2095bfb2580f4321ed32c18ab7e37e9a1344a' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\admin\\mess.html',
      1 => 1522742607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad5487a288042_09824241 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mess</title>
</head>
<style>
    .box{
        width: 500px;
        height:300px;
        position: fixed;
        top:0;
        left: 0;
        bottom:0;
        right:0;
        margin:auto;
        background: #f0f0f0;
    }
    .top{
        width: 100%;;
        height: 80px;
        background: skyblue;
        text-align: center;
        font-size: 24px;
        line-height: 80px;
    }
    .bottom{
        width: 100%;;
        height: 220px;
        text-align: center;
    }
    h2{
        margin-top: 60px;
        font-size: 20px;
    }
    span{
        color: red;
    }
</style>
<body>
    <div class="box">
        <div class="top">提示信息</div>
        <div class="bottom">
            <h2><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</h2>
            <p>
                <span>3</span>秒后自动跳转，点击 <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
">立即跳转</a>
            </p>
        </div>
    </div>
</body>
</html>
<?php echo '<script'; ?>
>
    let span=document.querySelector('span')
    let time=3
    let a=document.querySelector('a')
    let index=a.href.lastIndexOf('/')
    let str=a.href.slice(index);
    setInterval(function () {
        time--
        span.innerHTML=time
        if(time == 0){
            if(str=='/index.php?m=admin'){
                top.location.href=a.href;
            }else{
                location.href=a.href
            }
        }
    },1000)

    a.onclick=function (e) {
        e.preventDefault()
        if(str=='/index.php?m=admin'){
            top.location.href=a.href;
        }else{
            location.href=a.href
        }
    }


<?php echo '</script'; ?>
><?php }
}
