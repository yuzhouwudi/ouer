<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-22 11:58:08
  from 'D:\wamp\www\aa\company\template\index\essay-details.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5adc5cb0ec3c88_57706087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a9e6be22f7877ccfb76b70786d06972829e676' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\index\\essay-details.html',
      1 => 1524391083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5adc5cb0ec3c88_57706087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(function () {

        let nav=$('.lanmo > li >a')
        nav.removeClass("active").eq(3).addClass("active");

        let banpic=$('.banner > img')
        banpic.removeClass("active").eq(3).addClass("active");
    })
<?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
essay-details.css">
<!--面包屑开始-->
    <div class="crumbs">
        <a class="home" style="display: block" href="index.php?">
            <p>HOME</p >
            <p>首页</p >
            <div class="underline"></div>
        </a>
        <div class="ico_x"><i class="iconfont icon1">&#xe8f0;</i></div>
        <a class="erji" style="display: block" href="index.php?a=active">
            <p>ACTIVITY活动</p >
            <p>产品</p >
            <div class="underline"></div>
        </a>
        <div class="ico_x"><i class="iconfont icon1">&#xe8f0;</i></div>
        <div class="erji">
            <p><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</p >
        </div>
    </div>
<!--面包屑结束-->
<!--热门活动开始-->
    <div class="main">
<section class="activity">
    <div class="act_top">
        <div class="logo">
            <img src="<?php echo IMG_PATH;?>
popular.png" alt="">
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
            </div>
         </div>
    </div>
    <div class="line"></div>
    <div class="wenzi">
        <div class="wenzi_title">
            <h1><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</h1>
            <h2>MIN MIN SAU PROCESS</h2>
        </div>

        <h3><?php echo $_smarty_tpl->tpl_vars['arr']->value['des'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['arr']->value['time'];?>
</p>
    </div>
    <div class="introduce">
        <div class="intro_title">
            <span class="h1"><?php echo $_smarty_tpl->tpl_vars['row']->value[0]['title'];?>
  /</span>
            <span class="h2"><?php echo $_smarty_tpl->tpl_vars['row']->value[0]['etitle'];?>
 </span>
        </div>

        <p class="zi1">
            <?php echo $_smarty_tpl->tpl_vars['row']->value[0]['content'];?>

        </p>
    </div>
    <div class="introduce">
        <div class="intro_title">
            <span class="h1"><?php echo $_smarty_tpl->tpl_vars['row']->value[1]['title'];?>
  /</span>
            <span class="h2">&nbsp;<?php echo $_smarty_tpl->tpl_vars['row']->value[1]['etitle'];?>
</span>
        </div>

        <p class="zi1"><?php echo $_smarty_tpl->tpl_vars['row']->value[1]['content'];?>
</p>
    </div>
    <div class="red">
        <img src="<?php echo IMG_PATH;?>
active.png" alt="">
    </div>
    <div class="introduce">
        <div class="intro_title">
            <span class="h1"><?php echo $_smarty_tpl->tpl_vars['row']->value[2]['title'];?>
  /</span>
            <span class="h2">&nbsp;<?php echo $_smarty_tpl->tpl_vars['row']->value[2]['etitle'];?>
</span>
        </div>

        <p class="zi1"><?php echo $_smarty_tpl->tpl_vars['row']->value[2]['content'];?>
</p>
    </div>
    <div class="introduce">
        <div class="intro_title">
            <span class="h1"><?php echo $_smarty_tpl->tpl_vars['row']->value[3]['title'];?>
 </span>
            <span class="h2"><?php echo $_smarty_tpl->tpl_vars['row']->value[3]['etitle'];?>
</span>
        </div>

        <p class="zi1"><?php echo $_smarty_tpl->tpl_vars['row']->value[3]['content'];?>
</p>
    </div>
    <div class="yinwen">
        <p id="p1"> <?php echo $_smarty_tpl->tpl_vars['row']->value[4]['content'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['row']->value[5]['content'];?>
</p>
    </div>


    <div class="page">
        <a class="pa_left" href="index.php?a=actdetail&id=<?php echo $_smarty_tpl->tpl_vars['crr']->value['id'];?>
">
            <h1>上一篇：</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['crr']->value['title'];?>
</p>
        </a>
        <a class="pa_right" href="index.php?a=actdetail&id=<?php echo $_smarty_tpl->tpl_vars['drr']->value['id'];?>
">
            <h1>下一篇：</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['drr']->value['title'];?>
</p>
        </a>
    </div>
</section>
<!--热门活动结束-->
<!--评论开始-->

        <section class="comment">
            <div class="design">
                <div class="box"></div>
                <div class="lange">产品评论</div>
                <div class="elange">DESINGER</div>
            </div>

            <div id="messbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mess']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <div class="com_box">
                <div class="com_tu">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="">
                </div>
                <div class="com_word">
                    <i class="iconfont icon3">&#xe628;</i>
                    <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h1>
                    <span><?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</span>
                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>

        </section>
        <!--评论结束-->
        <!--留言开始-->
        <section class="message">
            <div class="design">
                <div class="box"></div>
                <div class="lange">产品留言</div>
                <div class="elange">DESINGER</div>
            </div>

            <div id="upload">
                <input type="file" name="img" multiple>
                <ul class="imgul" style="margin-left: -50%;margin-top: 10px">
                </ul>
            </div>
            <!--<input type="file">-->
            <div class="liuyanbox" >
                <textarea class="liuyan" name="" id="<?php echo $_smarty_tpl->tpl_vars['pi']->value;?>
" cols="30" rows="10" placeholder="请输入你想说的话..."></textarea>
                <button class="anniu">评论</button>
            </div>


        </section>
<!--留言结束-->
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    let input=document.querySelector('#upload > input[type=file]');
    let size=1024*1024*2;
    let type=['image/png','image/jpeg','image/gif'];
    let imgul=document.querySelector('.imgul')
    input.onchange=function () {
        imgul.innerHTML=''
        let arr=this.files;
        for(let i=0;i<arr.length;i++){
            if(arr[i].size>size ){
                alert('图片大小不正确');
                return;
            }else if(!type.includes(arr[i].type)){
                alert('图片格式不正确');
                return;
            }
        }

        for(let i=0;i<arr.length;i++){
            let fileread=new FileReader();
            fileread.readAsDataURL(arr[i]);
            fileread.onload=function (e) {
                let li=document.createElement('li');
                let div=document.createElement('div');
                div.style.cssText="width:0%;height:2px;border-radius:2px;" +
                    "background:#ccc;position:absolute;left:0;bottom:0;"
                li.style.cssText="width:100px;height:100px;border:1px solid #ccc;" +
                    "float:left;margin-right:5px;position:relative;" +
                    "background-image:url("+this.result+");background-size:cover"
                li.appendChild(div)
                imgul.appendChild(li)

                let formdata=new FormData();
                formdata.append('file',arr[i]);

                let ajax=new XMLHttpRequest();
                ajax.upload.onprogress=function (e) {
                    let width=e.loaded/e.total*100
                    div.style.width=width+'%';
                };
                ajax.onload=function () {
                    let inp=document.createElement('input');
                    inp.type='hidden';
                    inp.name='img';
                    inp.id='input'
                    inp.value=ajax.responseText;
                    input.parentNode.appendChild(inp);
                };
                ajax.open('post',"index.php?m=admin&f=menu&a=upload");
                ajax.send(formdata)
            };
        }
    }



    $('.anniu').click(function () {
        $.ajax({
            url:"index.php?a=addmesstwo",
            data:{
                mess:$('.liuyanbox textarea').val(),
                id:$('.liuyanbox textarea').attr('id'),
                img:$('#input').val()
            },
            success:function (arr) {

                if(arr == 0){
                    alert('发布失败')
                }else{
                    let json=JSON.parse(arr);
                    $("<div class='com_box'>").html( `

              <div class="com_tu">
                <img src="${ json.img}" alt="">
               </div>
               <div class="com_word">
                <i class="iconfont icon3">&#xe628;</i>
                <h1>${ json.name}</h1>
                <span>${ json.time}</span>
                <p>${ json.content}</p>
            </div>
                    `
                    ).prependTo('#messbox')
                }
                $('.liuyanbox textarea').val('')
            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
