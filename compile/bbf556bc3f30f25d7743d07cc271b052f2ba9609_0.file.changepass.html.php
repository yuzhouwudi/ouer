<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-17 03:46:28
  from 'D:\wamp\www\aa\company\template\admin\changepass.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad551f412acd3_73251065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbf556bc3f30f25d7743d07cc271b052f2ba9609' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\admin\\changepass.html',
      1 => 1522820957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad551f412acd3_73251065 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
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

<body>
<div class="tpl-content-scope">
    <div class="note note-info">
        <h3>密码修改
            <span class="close" data-close="note"></span>
        </h3>
    </div>
</div>

<div class="tpl-content-scope">

    <div class="tpl-portlet-components">

        <div class="tpl-block " style="padding-top: 30px">

            <div class="am-g tpl-amazeui-form">

                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" method="post" action="index.php?m=admin&f=menu&a=putpass">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-name" name="zhanghao" placeholder="账号 / Name" value="<?php echo $_smarty_tpl->tpl_vars['zhanghao']->value;?>
" readonly>
                                <small> </small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-email"  class="am-u-sm-3 am-form-label">旧密码 / Oldpass</label>
                            <div class="am-u-sm-9">
                                <input type="text" name="oldpass" id="user-email" placeholder="旧密码 / Oldpass">
                                <small>输入旧密码</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">新密码 / Newpass</label>
                            <div class="am-u-sm-9">
                                <input type="text" name="newpass" id="user-phone" placeholder="新密码 / Newpass">
                                <small>输入新密码</small>
                            </div>
                        </div>


                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>




</div>


</body>
</html>
<?php }
}
