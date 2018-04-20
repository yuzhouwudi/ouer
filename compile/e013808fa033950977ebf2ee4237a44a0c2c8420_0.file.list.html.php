<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-20 11:06:10
  from 'D:\wamp\www\aa\company\template\index\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad9ad8260cf97_49832780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e013808fa033950977ebf2ee4237a44a0c2c8420' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\index\\list.html',
      1 => 1524215167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5ad9ad8260cf97_49832780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
list.css">


<div class="crumbs">
    <a class="home"  style="display: block" href="index.php?">
        <p>HOME</p >
        <p>首页</p >
        <div class="underline"></div>
    </a>
    <div class="ico_x"><i class="iconfont icon1">&#xe8f0;</i></div>
    <div class="erji">
        <p>Active</p >
        <p>活动</p >
        <div class="underline"></div></div>
</div>
<!--面包屑结束-->


<div class="big_box">

<!--热门活动开始-->
<section class="activity">
    <div class="act_top">
        <div class="logo">
            <img src="<?php echo IMG_PATH;?>
/1.png" alt="">
        </div>
        <p>Love is not a tradition, wedding is love</p>
        <div class="story">
            <div class="s_left">
                <h1>Popular Activity</h1>
                <p>蔡美月</p>
            </div>
            <div class="s_right">
                <p>/</p>
                <div class="h2">&nbsp;热门活动</div>
                <!--<h2>&nbsp;热门活动</h2>-->
            </div>
        </div>
    </div>
    <div class="remen">
        <div class="biaoshi">
            <img src="<?php echo IMG_PATH;?>
/remen.png" alt="">
        </div>
        <div class="remen-img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['img'];?>
" alt="">
        </div>
        <a class="remen-content" style="display: block" href="index.php?a=actdetail&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
">
            <div class="h1"><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['title'];?>
</div>
            <h2>FASHION WEEK</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['des'];?>
</p>
            <span><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['count'];?>
人浏览</span>
            <span><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['time'];?>
</span>
        </a>
    </div>
    <div class="remen aa">
        <div class="biaoshi">
            <img src="<?php echo IMG_PATH;?>
/remen2.png" alt="">
        </div>
        <div class="remen-img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value[1]['img'];?>
" alt="">
        </div>
        <a class="remen-content bb" style="display: block" href="index.php?a=actdetail&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value[1]['id'];?>
">
            <div class="h1"><?php echo $_smarty_tpl->tpl_vars['arr']->value[1]['title'];?>
</div>
            <h2>FASHION WEEK</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['arr']->value[1]['des'];?>
</p>
            <span><?php echo $_smarty_tpl->tpl_vars['arr']->value[1]['count'];?>
人浏览</span>
            <span><?php echo $_smarty_tpl->tpl_vars['arr']->value[1]['time'];?>
</span>
        </a>
    </div>
    <div class="remen">
        <div class="biaoshi">
            <img src="<?php echo IMG_PATH;?>
/remen3.png" alt="">
        </div>
        <div class="remen-img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value[2]['img'];?>
" alt="">
        </div>
        <a class="remen-content" style="display: block" href="index.php?a=actdetail&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value[2]['id'];?>
">
            <div class="h1"><?php echo $_smarty_tpl->tpl_vars['arr']->value[2]['title'];?>
</div>
            <h2>FASHION WEEK</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['arr']->value[2]['des'];?>
</p>
            <span><?php echo $_smarty_tpl->tpl_vars['arr']->value[2]['count'];?>
人浏览</span>
            <span><?php echo $_smarty_tpl->tpl_vars['arr']->value[2]['time'];?>
</span>
        </a>
    </div>

    <!--分页-->

    <!--中间图-->
    <div class="middle">
        <img src="<?php echo IMG_PATH;?>
/zhong.png" alt="">
    </div>

    <div class="act_top gao">
        <div class="logo">
            <img src="<?php echo IMG_PATH;?>
/1.png" alt="">
        </div>
        <p>Love is not a tradition, wedding is love</p>
        <div class="story">
            <div class="s_left">
                <h1>Popular Activity</h1>
                <p>蔡美月</p>
            </div>
            <div class="s_right">
                <p>/</p>
                <div class="h2">&nbsp;全部活动</div>
            </div>
        </div>
    </div>

    <div class="renwu">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <a class="whole" style="display: block" href="index.php?a=actdetail&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <div class="whole-img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
            </div>
            <div class="whole-ziti">
                <span>Fashion WORKS</span>
                <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h1>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['des'];?>
</p>
                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
人浏览</span>
                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</span>
            </div>
        </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="paging">
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </div>
    </div>
</section>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
