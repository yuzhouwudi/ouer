<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-20 11:30:01
  from 'D:\wamp\www\aa\company\template\index\chanpinxiangqing.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad9b319c47641_76098627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ddfc4de36f95785696d20db02b09922fe7f34ee' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\index\\chanpinxiangqing.html',
      1 => 1524216600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5ad9b319c47641_76098627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
chanpinxiangqing.css">
<div class="crumbs">
    <a class="home" style="display: flex"href="index.php?">
        <p>HOME</p>
        <p>首页</p>
        <div class="underline"></div>
    </a>
    <div class="ico_x"><i class="iconfont icon1">&#xe8f0;</i></div>
    <div class="erji">
        <p>PRODUCT</p>
        <p>产品</p>
        <div class="underline"></div>
    </div>
    <div class="ico_x"><i class="iconfont icon1">&#xe8f0;</i></div>
    <div class="erji">
        <p><?php echo $_smarty_tpl->tpl_vars['frr']->value['name'];?>
</p>
    </div>

</div>
    <div class="max">
        <div class="topleft">
            <div class="line"></div>
            <div class="font">
            <p class="fontleft">PRODUCT</p>
            <p class="fontright">APPRECIATION</p>
            </div>
            <div class="english">Love is not rent,wedding is the witness of love and inheritance</div>
            <div class="productoppr">产 / 品 / 欣 / 赏</div>
            <div class="opprbottom">C H A N P I N</div>
        </div>
        <div class="wedding">
            <div class="wedtop"><?php echo $_smarty_tpl->tpl_vars['frr']->value['ename'];?>
</div>
            <div class="wedmid"> <?php echo $_smarty_tpl->tpl_vars['frr']->value['name'];?>
</div>
            <div class="wedbot"><?php echo $_smarty_tpl->tpl_vars['frr']->value['des'];?>
</div>

        </div>
        <div class="wedbottom">
            <div class="wedleft">
                <img src="<?php echo $_smarty_tpl->tpl_vars['imgfor']->value[0];?>
" alt="图片" >  </div>
            <div class="wedright">
                <img src="<?php echo $_smarty_tpl->tpl_vars['imgfor']->value[1];?>
" alt="图片" >
            </div>
        </div>
        <div class="design">
            <div class="box"></div>
            <div class="lange">设计师说</div>
            <div class="elange">DESINGER</div>
        </div>
        <div class="des">
            <div class="desboder">
            <div class="desimg" >
                <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['img'];?>
" alt="">
            </div>
            </div>

            <div class="desspack">
                <p class="jiedu"> <?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['title'];?>
</p>
                <div class="spack">
                    <?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['content'];?>

                </div>
            </div>
        </div>
        <div class="design">
            <div class="box"></div>
            <div class="lange">作品信息</div>
            <div class="elange">DESINGER</div>
        </div>
  <div class="zuopin">
      <div class="zuopinimg">
          <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value[0];?>
" alt="">
      </div>
      <div class="zuopinmid">
          <div class="midtop" style="padding-top: 15px">
              <?php echo $_smarty_tpl->tpl_vars['brr']->value[0]['content'];?>


          </div>
          <div class="midbot">
              <img src="<?php echo IMG_PATH;?>
aaa.png" alt="">
          </div>
      </div>
      <div class="zuopinright">
          <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value[1];?>
" alt="" style="display: block;margin-top: 19px;">
      </div>
    </div>
        <div class="design">
            <div class="box"></div>
            <div class="lange">设计亮点</div>
            <div class="elange">DESINGER</div>
        </div>
        <div class="light">
            <div class="lightone">
                 <div class="onetop"> <?php echo $_smarty_tpl->tpl_vars['crr']->value[0]['nub'];?>
/<span>  <?php echo $_smarty_tpl->tpl_vars['crr']->value[0]['des'];?>
</span></div>
                <div class="leftimg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgone']->value[0];?>
" alt="" >
                </div>
                <div class="rightimg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgone']->value[1];?>
" alt="" >
                </div>
                <div class="wenzi">
                <?php echo $_smarty_tpl->tpl_vars['crr']->value[0]['content'];?>

                </div>

            </div>
            <div class="lightone two">
                <div class="onetop "> <?php echo $_smarty_tpl->tpl_vars['crr']->value[1]['nub'];?>
/<span>  <?php echo $_smarty_tpl->tpl_vars['crr']->value[1]['des'];?>
</span></div>
                <div class="leftimg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgtwo']->value[0];?>
" alt="" >
                </div>
                <div class="rightimg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgtwo']->value[1];?>
" alt="" >
                </div>
                <div class="wenzi">
                    <?php echo $_smarty_tpl->tpl_vars['crr']->value[1]['content'];?>

                </div>

            </div>

            <div class="lightone three">
                <div class="onetop">  <?php echo $_smarty_tpl->tpl_vars['crr']->value[2]['nub'];?>
/<span id="span">  <?php echo $_smarty_tpl->tpl_vars['crr']->value[2]['des'];?>
</span></div>

                <div class="rightimg" id="threeleft">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgthree']->value[1];?>
" alt="" >

                </div>
                               <div class="leftimg" id="threeright">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imgthree']->value[0];?>
" alt="" >
                </div>

                <div class="wenzi" id="wenzi">
                    <?php echo $_smarty_tpl->tpl_vars['crr']->value[2]['content'];?>

                </div>
            </div>


        </div>

        <div class="design">
            <div class="box"></div>
            <div class="lange">原版工艺</div>
            <div class="elange">DESINGER</div>
        </div>
<div style="width: 100%; height: 800px; display: flex;flex-wrap: wrap">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['drr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
     <div class="gongyi">
        <div class="gongyiimg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="图片呀">
        </div>
        <div class="zhuti"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
        <p class="zhuwen"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
    </div>

   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
        <div class="design">
            <div class="box"></div>
            <div class="lange">物品实拍</div>
            <div class="elange">DESINGER</div>
        </div>
        <div class="IMG imgs">
            <img src="<?php echo $_smarty_tpl->tpl_vars['imgerr']->value[1];?>
" alt="">
        </div>
        <div class="IMG">
            <img src="<?php echo $_smarty_tpl->tpl_vars['imgerr']->value[0];?>
" alt="">
        </div>


<div class="page">
    <a class="pa_left" style="display: block" href="index.php?a=picdatail&id=<?php echo $_smarty_tpl->tpl_vars['grr']->value['id'];?>
">
        <h1>上一篇：</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['grr']->value['name'];?>
</p>
    </a>
    <a class="pa_right" style="display: block"href="index.php?a=picdatail&id=<?php echo $_smarty_tpl->tpl_vars['hrr']->value['id'];?>
">
        <h1>下一篇：</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['hrr']->value['name'];?>
</p>
    </a>
</div>

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
                <textarea class="liuyan" name="" id="<?php echo $_smarty_tpl->tpl_vars['frr']->value['id'];?>
" cols="30" rows="10" placeholder="请输入你想说的话..."></textarea>
                <button class="anniu">评论</button>
            </div>


        </section>
        <!--留言结束-->

    </div>


<?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
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
            url:"index.php?a=addmess",
            data:{
                mess:$('.liuyanbox textarea').val(),
                id:$('.liuyanbox textarea').attr('id'),
                img:$('#input').val()
            },
            success:function (arr) {
//                console.log(arr);
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
