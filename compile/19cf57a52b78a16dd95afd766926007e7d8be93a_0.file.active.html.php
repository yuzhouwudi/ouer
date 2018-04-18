<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-17 10:46:50
  from 'D:\wamp\www\aa\company\template\admin\active.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad5b47ab5b592_07667423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19cf57a52b78a16dd95afd766926007e7d8be93a' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\admin\\active.html',
      1 => 1523954809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad5b47ab5b592_07667423 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>my blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
amazeui.min.css"/>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
app.css">
</head>
<style>
    .pagenub{
        font-size: 14px;
    }
    .am-pagination .am-active span
    {
        border-radius: 3px;
        padding: 8px 15px;
    }
</style>
<body>
<div class="tpl-content-scope">
    <div class="note note-info">
        <h3>内容管理
            <span class="close" data-close="note"></span>
        </h3>
    </div>
</div>

<div class="tpl-content-scope">

    <div class="tpl-portlet-components">

        <div class="tpl-block " style="padding-top: 30px">

            <div class="tpl-block">
                <div class="am-g">
                    <div class="am-u-sm-12 am-u-md-6">
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">

                                <button type="button" class="am-btn am-btn-default am-btn-success">
                                    <a href="index.php?m=admin&f=menu&a=addactive">
                                        <span class="am-icon-plus"></span> 新增
                                    </a>
                                </button>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="am-g">
                    <div class="am-u-sm-12">

                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th class="table-title">标题</th>
                                <th class="table-title">描述</th>
                                <th class="table-title">时间</th>
                                <th class="table-title">点击量</th>
                                <th class="table-set">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['des'];?>
</td>
                                <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</td>

                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">

                                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                                                <a href="index.php?m=admin&f=menu&a=editactive&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                                    <span class="am-icon-pencil-square-o"></span> 编辑
                                                </a>
                                            </button>

                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                <a href="index.php?m=admin&f=menu&a=delactive&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                                    <span class="am-icon-trash-o"></span> 删除
                                                </a>
                                            </button>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </tbody>
                        </table>

                        <div class="am-cf">
                            <div class="am-fr">
                                <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                            </div>
                        </div>

                        <hr>


                    </div>

                </div>
            </div>
        </div>

    </div>


</div>


</body>
</html>
<?php }
}
