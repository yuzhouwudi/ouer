<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-20 11:19:41
  from 'D:\wamp\www\aa\company\template\index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad9b0ad609cf7_81401768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1988152ae5edc57cacd8df7dc30d6626bbea9352' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\index\\index.html',
      1 => 1524215936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad9b0ad609cf7_81401768 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.3.1.js"><?php echo '</script'; ?>
>
</head>
<body>
<!--头部开始-->
    <div class="top">
        <div class="neikuan">
            <div class="banner">
                <a href="index.php?a=picdatail&id=6" class="active">
                    <img src="<?php echo IMG_PATH;?>
banner.png" alt="">
                </a>
                <a href="index.php?a=picdatail&id=3">
                    <img src="<?php echo IMG_PATH;?>
baba1.jpg" alt="">
                </a>
                <a href="index.php?a=picdatail&id=4">
                    <img src="<?php echo IMG_PATH;?>
baba2.jpg" alt="">
                </a>
                <a href="index.php?a=picdatail&id=2">
                    <img src="<?php echo IMG_PATH;?>
timg (3).jpg" alt="">
                </a>
                <a href="index.php?a=productdetail">
                    <img src="<?php echo IMG_PATH;?>
pic-xiangqing4.png" alt="">
                </a>
            </div>
            <ul class="circle" style="">
              <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="lanmo">
                <li>
                    <span><img src="<?php echo IMG_PATH;?>
lanmo.png" alt=""></span>

                </li>
               <li class="active"> <a href="index.php"><p>首页</p><p>HOME</p></a></li>
               <li> <a href="index.php?a=product"><p>产品</p><p>DRODUCT</p></a></li>
                <li><a href="index.php?a=danye"><p>品牌</p><p>BRAND</p></a></li>
                <li><a href="index.php?a=active"><p>活动</p><p>ACTIVITY</p></a></li>
                <li><a href=""><p>资讯</p><p>INFORMATION</p></a></li>
            </ul>
        </div>
    </div>
<!--头部结束-->
<div class="main">

<!--内容开始-->
<div class="content">
    <!--产品欣赏开始-->
    <div class="changping">
        <div class="changping-top">
            <p> - 产品欣赏 - </p>
            <p>Product appreciation</p>
        </div>
        <div class="jiayi">
            <div class="jiayi-life">
                <div class="gang"></div>
                <div class="jiayiwenzi">
                    <div class="h1" ><?php echo $_smarty_tpl->tpl_vars['row']->value['0']['name'];?>
</div>
                    <span><?php echo $_smarty_tpl->tpl_vars['row']->value['0']['ename'];?>
</span>
                        <p><?php echo $_smarty_tpl->tpl_vars['row']->value['0']['content'];?>
</p>
                    <a href="index.php?a=picdatail&id=1" class="more">
                        MORE
                    </a>
                </div>
            </div>
            <div class="jiayi-right">
                <ul>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['imgarr']->value[0];?>
" alt="">
                    </li>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['imgarr']->value[1];?>
" alt="">
                    </li>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['imgarr']->value[2];?>
" alt="">
                    </li>
                </ul>
            </div>
        </div>
        <div class="jiayi2">
            <div class="jiayi-right1">
            <ul>
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgar']->value[0];?>
" alt="">
                </li>
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgar']->value[1];?>
" alt="">
                </li>
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgar']->value[2];?>
" alt="">
                </li>
            </ul>
        </div>
            <div class="jiayi-life1">
                <div class="gang"></div>
                <div class="jiayiwenzi1">
                    <div class="h1" ><?php echo $_smarty_tpl->tpl_vars['row']->value['1']['name'];?>
</div>
                    <span><?php echo $_smarty_tpl->tpl_vars['row']->value['1']['ename'];?>
</span>
                    <p><?php echo $_smarty_tpl->tpl_vars['row']->value['1']['content'];?>
</p>
                    <a href="index.php?a=picdatail&id=2" class="more1">
                        MORE
                    </a>
                </div>
            </div>
        </div>
        <div class="jiayi">
            <div class="jiayi-life">
                <div class="gang"></div>
                <div class="jiayiwenzi">
                    <div class="h1" ><?php echo $_smarty_tpl->tpl_vars['row']->value['2']['name'];?>
</div>
                    <span><?php echo $_smarty_tpl->tpl_vars['row']->value['2']['ename'];?>
</span>
                    <p><?php echo $_smarty_tpl->tpl_vars['row']->value['2']['content'];?>
</p>
                    <a href="index.php?a=picdatail&id=5" class="more">
                        MORE
                    </a>
                </div>
            </div>
            <div class="jiayi-right">
                <ul>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['imga']->value[0];?>
" alt="">
                    </li>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['imga']->value[1];?>
" alt="">
                    </li>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['imga']->value[2];?>
" alt="">
                    </li>
                </ul>
            </div>
        </div>
        <div class="jiayi2">
            <div class="jiayi-right1">
                <ul>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['img1']->value[0];?>
" alt="">
                    </li>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['img1']->value[1];?>
" alt="">
                    </li>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['img1']->value[2];?>
" alt="">
                    </li>
                </ul>
            </div>
            <div class="jiayi-life1">
                <div class="gang1"></div>
                <div class="jiayiwenzi1">
                    <div class="h1" ><?php echo $_smarty_tpl->tpl_vars['row']->value['3']['name'];?>
</div>
                    <span><?php echo $_smarty_tpl->tpl_vars['row']->value['3']['ename'];?>
</span>
                    <p><?php echo $_smarty_tpl->tpl_vars['row']->value['3']['content'];?>
</p>
                    <a href="index.php?a=picdatail&id=6" class="more1">
                        MORE
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--产品欣赏结束-->
    <!--品牌故事开始-->
    <div class="pingpai">
        <div class="changping-top">
            <p> - 品牌故事 - </p>
            <p>Brand  story</p>
        </div>
        <div class="pingpai-content">
            <div class="pingpai-img">
                <img src="<?php echo IMG_PATH;?>
pingpai1.png" alt="">
            </div>
            <div class="pingpai-wenzi">
                <div class="pingpai-nei">
                    <div class="h1" >蔡美月</div>
                    <p>蔡美月国际婚纱品牌创始人兼首席设计师的他是中国婚纱品牌第一人，第一位创造处于中国人的品牌，第一位带领中国人的婚纱走向国际，第一位改革了中国婚纱承租时代，坚持不抄袭、不仿制坚持让中国新娘有一件属于自己的婚纱是她一直来秉承的工作目标.</p>
                    <span>Love is not rent
Wedding is the witness and heritage of love
Let every woman have her own wedding dress</span>
                    <h5>品牌创始人</h5>
                    <h5>中国十佳设计师</h5>
                </div>
            </div>
            <div class="pingpai-right">
                <img src="<?php echo $_smarty_tpl->tpl_vars['imgq']->value[4];?>
" alt="">
            </div>
            <div class="pingpai-botoom-img">
                <ul>
                    <li><img src="<?php echo $_smarty_tpl->tpl_vars['imgq']->value[0];?>
" alt=""></li>
                    <li><img src="<?php echo $_smarty_tpl->tpl_vars['imgq']->value[1];?>
" alt=""></li>
                    <li><img src="<?php echo $_smarty_tpl->tpl_vars['imgq']->value[2];?>
" alt=""></li>
                    <li><img src="<?php echo $_smarty_tpl->tpl_vars['imgq']->value[3];?>
" alt=""></li>
                </ul>
            </div>
        </div>
        <a class="pingpai-bottom pinpaide" href="index.php?a=danye" style="display: block">MORE</a>
    </div>
    <!--品牌故事结束-->
    <!--官方活动开始-->
    <div class="guanfang">
        <div class="changping-top">
            <p> - 官方活动 - </p>
            <p>official activity</p>
        </div>
        <div class="guanfang-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row2']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

            <div class="guanfang-nei">
                <a href="index.php?a=actdetail&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <div class="guanfang-img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
                    <div class="hot_zhe">
                        <i class="iconfont iconzhe">&#xe606;</i>
                    </div>
                </div>
                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
                <div class="guanfang-shijian"><?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</div>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
                </a>
            </div>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <a class="pingpai-bottom" style="display: block" href="index.php?a=active">MORE</a>
        </div>
    </div>
    <!--官方活动结束-->
    <!--新闻资讯开始-->
    <div class="xinwen">
        <div class="changping-top">
            <p> - 产品欣赏 - </p>
            <p>Product appreciation</p>
        </div>
        <div class="xinwen-content">
            <div class="xinwen-img">
                <img src="<?php echo IMG_PATH;?>
xinwen.png" alt="">
            </div>
            <div class="xinwen-ziti">
                <span>蔡美月国际婚纱——婚纱传承宣传片</span>
                <div class="xinwen-shijian">2018.02.01</div>
                <p>一件嫁衣，它承载着责任和传承，它是娘家的最后一件服饰，也是夫家的第一件新衣。蔡美月将中国的字词文化：“锦上添花，镶金戴玉，牵手一生，早生贵子，百年好合”..</p>
                <span>Cai Mei-month internationa</span>
            </div>
        </div>
        <div class="qiye">
            <div class="qiye_title">企业新闻</div>
            <div class="qiye_descr">一件婚纱，一份责任和传承</div>
            <div class="item">2018-02-01</div>
        </div>
        <div class="qiye">
            <div class="qiye_title">企业新闻</div>
            <div class="qiye_descr">一件婚纱，一份责任和传承</div>
            <div class="item">2018-02-01</div>
        </div>

        <div class="qiye-bottom">MORE</div>
    </div>
    <!--新闻资讯结束-->
</div>
</div>
<!--内容结束-->
<!--底部开始-->
<div class="bottom">
    <div class="bottom-neikuan">
        <div class="wedd">
            <img src="<?php echo IMG_PATH;?>
indebot_03.png" alt="">
        </div>
        <div class="bottom-zhong">
            <img src="<?php echo IMG_PATH;?>
bottom2.png" alt="">
        </div>
    </div>
    <div class="bottom-wenzi">
        <div class="kuan">
            <ul>
                <li class="diyi">
                    <div class="zhongxin">
                        <h1>帮助中心</h1>
                        <h2>MEIYUE BRAND</h2>
                    </div>
                    <p>企业服务优势</p>
                    <p>企业服务优势</p>
                    <p>企业服务优势</p>
                </li>
                <li>
                    <div class="zhongxin">
                        <h1>帮助中心</h1>
                        <h2>MEIYUE BRAND</h2>
                    </div>
                    <p>企业服务优势</p>
                    <p>企业服务优势</p>
                    <p>企业服务优势</p>
                </li>
                <li>
                    <div class="zhongxin">
                        <h1>帮助中心</h1>
                        <h2>MEIYUE BRAND</h2>
                    </div>
                    <p>企业服务优势</p>
                    <p>企业服务优势</p>
                    <p>企业服务优势</p>
                </li>
                <li>
                    <div class="zhongxin">
                        <h1>帮助中心</h1>
                        <h2>MEIYUE BRAND</h2>
                    </div>
                    <p>企业服务优势</p>
                    <p>企业服务优势</p>
                    <p>企业服务优势</p>
                </li>
                <li class="zhongxin1">
                    <h1>通过以下方式联系我们</h1>
                    <h2>PAY ATTENTION TO US IN THE FOLLOWIHG WAYS</h2>
                    <div class="img">
                        <div class="img-img img1">
                            <img src="<?php echo IMG_PATH;?>
re.png" alt="">
                        </div>
                        <div class="img-img">
                            <img src="<?php echo IMG_PATH;?>
re.png" alt="">
                        </div>
                        <div class="img-img">
                            <img src="<?php echo IMG_PATH;?>
re.png" alt="">
                        </div>
                    </div>
                </li>
            </ul>
            <div class="yingye">
                <div class="yingye-nei">
                    <p>COPYRGHT 2006-2018 ZCOOL 站酷</p>
                    <p>广播电视节目制作经营许可证（京）字第06990号</p>
                    <p>网络文化经营许可证 京网文[2016]6173-844号</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--底部结束-->

</body>
</html>
<?php echo '<script'; ?>
>
    let a=$('.banner>a')
    let cir=$('.circle>li')
    let n=0;
    function aa() {

         if(n>=a.length){
             n=0;
         }
         a.removeClass('active').eq(n).addClass('active');
         cir.removeClass('active').eq(n).addClass('active');
        n++;
}
        let t=setInterval(aa,3000);
        a.mouseenter(function () {
            clearInterval(t)
        })
        a.mouseleave(function () {
            t=setInterval(aa,3000)
        })
      cir.click(function () {
            let b=$(this).index();
            console.log(b)
            cir.removeClass('active').eq(b).addClass('active')
            a.removeClass('active').eq(b).addClass('active')
            n=b;
      })



<?php echo '</script'; ?>
><?php }
}
