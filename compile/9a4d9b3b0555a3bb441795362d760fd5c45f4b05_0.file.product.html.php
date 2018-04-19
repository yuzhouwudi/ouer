<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-19 12:05:29
  from 'D:\wamp\www\aa\company\template\index\product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad869e92af6d4_30477305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a4d9b3b0555a3bb441795362d760fd5c45f4b05' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\index\\product.html',
      1 => 1524132328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5ad869e92af6d4_30477305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
product.css">


    <div class="crumbs">
        <div class="home">
            <p>HOME</p>
            <p>首页</p>
            <div class="underline"></div>
        </div>
        <div class="ico_x"><i class="iconfont icon1">&#xe8f0;</i></div>
        <div class="erji">
            <p>Product</p>
            <p>产品</p>
            <div class="underline"></div></div>
    </div>

<div class="main">
    <section class="appr">
        <div class="appr_header">
            <div class="line"></div>
            <div class="name">
                <div class="etitle">Product Appreciation</div>
                <div class="des">Love is not rent, wedding is the witness of love and inheritances！</div>
            </div>
            <div class="title">产/品/欣/赏</div>
            <div class="ee">CHANPIN</div>
        </div>
        <div class="appr_bottom">

            <div class="appr_bot">
                <div class="pic">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['img'];?>
" alt="">
                </div>
                <div class="explain">
                    <div class="etitle"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['ename'];?>
</div>
                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['xilie'];?>
</div>
                    <div class="des"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['des'];?>
</div>
                    <div class="edes"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['edes'];?>
</div>
                </div>
            </div>

            <div class="appr_bot appr_bot2">
                <div class="explain mask">
                    <div class="etitle"><?php echo $_smarty_tpl->tpl_vars['arr']->value['1']['ename'];?>
</div>
                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['arr']->value['1']['xilie'];?>
</div>
                    <div class="des"><?php echo $_smarty_tpl->tpl_vars['arr']->value['1']['des'];?>
</div>
                    <div class="edes"><?php echo $_smarty_tpl->tpl_vars['arr']->value['1']['edes'];?>
</div>
                </div>
                <div class="pic">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['1']['img'];?>
" alt="">
                </div>
            </div>
            <div class="appr_bot appr_bot3">
                <div class="pic">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['2']['img'];?>
" alt="">
                </div>
                <div class="explain">
                    <div class="etitle"><?php echo $_smarty_tpl->tpl_vars['arr']->value['2']['ename'];?>
</div>
                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['arr']->value['2']['xilie'];?>
</div>
                    <div class="des"><?php echo $_smarty_tpl->tpl_vars['arr']->value['2']['des'];?>
</div>
                    <div class="edes"><?php echo $_smarty_tpl->tpl_vars['arr']->value['2']['edes'];?>
</div>
                </div>
            </div>
            <div class="appr_bot appr_bot4">
                <div class="explain">
                    <div class="etitle"><?php echo $_smarty_tpl->tpl_vars['arr']->value['3']['ename'];?>
</div>
                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['arr']->value['3']['xilie'];?>
</div>
                    <div class="des"><?php echo $_smarty_tpl->tpl_vars['arr']->value['3']['des'];?>
</div>
                    <div class="edes"><?php echo $_smarty_tpl->tpl_vars['arr']->value['3']['edes'];?>
</div>
                </div>
                <div class="pic">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['3']['img'];?>
" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="hot">
        <div class="hot_header">
            <div class="title">热/门/产/品</div>
            <div class="hot_line">
                <div class="line"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="line"></div>
            </div>
            <div class="etitle">CHANPIN</div>
        </div>

        <ul class="hot_bottom">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li class="hot_list">
                <a href="index.php?a=productdetail&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  style="display: block">
                <div class="hot_pic">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="">
                    <div class="hot_zhe">
                        <i class="iconfont iconzhe">&#xe606;</i>
                    </div>
                </div>
                <div class="hot_text">
                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
                    <p class="des"><?php echo $_smarty_tpl->tpl_vars['item']->value['cont'];?>
</p>
                </div>
                </a>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </section>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
