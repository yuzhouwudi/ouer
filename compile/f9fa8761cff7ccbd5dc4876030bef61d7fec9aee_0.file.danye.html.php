<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-22 11:45:57
  from 'D:\wamp\www\aa\company\template\index\danye.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5adc59d545ed35_85472895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9fa8761cff7ccbd5dc4876030bef61d7fec9aee' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\index\\danye.html',
      1 => 1524390356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5adc59d545ed35_85472895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
danye.css">

<?php echo '<script'; ?>
>
    $(function () {

        let nav=$('.lanmo > li >a')
        nav.removeClass("active").eq(2).addClass("active");

        let banpic=$('.banner > img')
        banpic.removeClass("active").eq(2).addClass("active");
    })
<?php echo '</script'; ?>
>


<div class="crumbs">
    <a class="home" style="display: block" href="index.php?">
        <p>HOME</p>
        <p>首页</p>
        <div class="underline"></div>
    </a>
    <div class="ico_x"><i class="iconfont icon1">&#xe8f0;</i></div>
    <div class="erji">
        <p>BRAND</p>
        <p>品牌</p>
        <div class="underline"></div></div>
</div>



<div class="big_box">
<!--面包屑开始-->

<!--面包屑结束-->
<!--中间大图-->
<section class="pic">
    <img src="<?php echo IMG_PATH;?>
middle.png" alt="">
</section>
<!--中间大图结束-->
<!--品牌故事开始-->
<section class="box">
    <div class="story">
        <div class="s_left">
            <h1>Brand Story</h1>
            <p>蔡美月</p>
        </div>
        <div class="s_right">
            <p>/</p>
            <div class="h2">&nbsp;品牌故事</div>
        </div>
    </div>
    <div class="word">
        <div class="h5">创立中国自己的婚纱品牌，让中国婚纱站在世界的舞台！</div>
        <!--<h5>创立中国自己的婚纱品牌，让中国婚纱站在世界的舞台！</h5>-->
        <p class="zi">Create China's own wedding brand</p>
        <p class="content1">蔡美月 源自品牌创始人蔡美月女士的名字，是有近30年历史的设计师品牌</p>
        <p class="content">爱情不是承租，婚纱是爱情的见证与承传，让每一位新娘都拥有一件属于自己的婚纱礼服</p>
        <p class="content">这对于来自台湾的服装设计师蔡美月来讲，是极其真切的愿望和多少年一直秉持的工作目标</p>
        <p class="content">2017年开始，蔡美月引入柔性生产及智能物流的理念和新技术</p>
        <p class="content">为消费者提供根据个人身材尺寸进行单件生产的“个人尺寸定制”业务，整合产业内资源</p>
        <p class="content">打造从款式设计、款式挑选试衣、量身、到尺寸定制的全供应链服务系统，推动实现为大众消费者提供定制的服务</p>
    </div>
</section>
<!--品牌故事结束-->
<!--蔡美月介绍开始-->
<section class="box">
    <div class="story">
        <div class="s_left">
            <h1>Brand Story</h1>
            <p>蔡美月</p>
        </div>
        <div class="s_right">
            <p>/</p>
            <div class="h2">&nbsp;蔡美月介绍</div>
            <!--<h2>&nbsp;蔡美月介绍</h2>-->
        </div>
    </div>
    <div class="word">
        <div class="h5">品牌创始人兼首席设计师</div>
        <p class="zi">Brand founder and chief designer</p>
        <p class="content1">她是中国婚纱品牌第一人</p>
        <p class="content">第一位创造属于中国人的婚纱品牌</p>
        <p class="content">第一位带领中国人的婚纱品牌走向国际</p>
        <p class="content">第一位改革了中国婚纱承租时代</p>
        <p class="content">她坚持不抄袭，不仿制，她坚持要让中国新娘拥有一件属于自己的婚纱</p>
    </div>
</section>
<!--蔡美月介绍结束-->
<!--英文开始-->
<section class="english">
        <p>The core value of the CME brand lies in its consumer perception of its professional image
            and its attractiveness to consumers as a unique service that can be customized to suit the
            size of your own</p>
        <p>Cai Mei month "wedding chief designer Miss Cai Mei month, is to learn costume design origin,
            twenty years ago in Taiwan, with professional design skills and keen business minds scratch,
            walked from an unknown designer to professional wedding production and operation.</p>
        <p>After decades of unremitting efforts, "Cai Mei-month" to create a wedding industry as a well-known brands.</p>
</section>
<!--英文结束-->
<!--图片开始-->
<section class="picture">
    <div class="tu1">
        <img src="<?php echo IMG_PATH;?>
tu1.png" alt="">
        <div class="zhezhao"></div>
    </div>
    <div class="tu2">
        <img src="<?php echo IMG_PATH;?>
ren.png" alt="">
        <div class="zhezhao"></div>
    </div>
    <div class="tu3">
        <img src="<?php echo IMG_PATH;?>
tu3.png" alt="">
        <div class="zhezhao"></div>
    </div>
</section>
<!--图片结束-->
<!--高级定制服务开始-->
<section class="box">
    <div class="story">
        <div class="s_left">
            <h1>Brand Story</h1>
            <p>蔡美月</p>
        </div>
        <div class="s_right">
            <p>/</p>
            <div class="h2">&nbsp;高级定制服务</div>
            <!--<h2>&nbsp;高级定制服务</h2>-->
        </div>
    </div>
    <div class="word">
        <div class="h5">我的Size，拥有自己的定制婚纱！</div>
        <!--<h5>我的Size，拥有自己的定制婚纱！</h5>-->
        <p class="zi">My Size , has its own custom wedding!</p>
        <p class="content2">一生一次婚礼上什么都想完美，缺少合理价格使新娘无法在婚礼上拥有最关键的道具“婚纱”
            的主要原因，今天拥有属于自己婚纱而不是租用的梦想实现了。在中国有近30年的“蔡美月”婚纱礼服品牌，向消费者提供
            个性化的“用出租的价格来定制”，与租用价格相同，越来越多新娘可以披上高端量身定制的嫁衣，见证了她们一生中最美的时刻</p>
    </div>
    <div class="port">
        <div class="tupian">
            <img src="<?php echo IMG_PATH;?>
gaoji1.png" alt="">
        </div>
        <div class="jieshao">
            <p>面料是口碑，来自世界各地面料商的高级面料。而什么面料能够最大程度上让某一个设计看起来更完美，包括在照片中会呈现出什么样的效果这种细节，
                经验丰富的设计师也都替你提前想好了。</p>
        </div>
    </div>
    <div class="port">
        <div class="jieshao1">
            <p>虽然是“穿得起”的定制，但我们也是带着高级定制精神来制作完成的。需要手工完成的部分同样会有技艺精湛的工匠师来手工制作。</p>
        </div>
        <div class="tupian1">
            <img src="<?php echo IMG_PATH;?>
gaoji2.png" alt="">
        </div>
    </div>
    <div class="port">
        <div class="tupian">
            <img src="<?php echo IMG_PATH;?>
gaoji3.png" alt="">
        </div>
        <div class="jieshao">
            <p>高质量的面料本身就是舒适度的保证，用真丝面料做内衬，用不同的纱代替裙撑，连裙子的重量都替你操心好了。</p>
        </div>
    </div>
</section>
<!--高级定制服务结束-->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
