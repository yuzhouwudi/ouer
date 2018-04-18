<?php
/* Smarty version 3.1.32-dev-45, created on 2018-04-17 11:52:38
  from 'D:\wamp\www\aa\company\template\admin\addlookpro.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-45',
  'unifunc' => 'content_5ad5c3e642ba40_47341676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9769cdc2caaf4662c9727ce2893e4c4c7fa7c6a7' => 
    array (
      0 => 'D:\\wamp\\www\\aa\\company\\template\\admin\\addlookpro.html',
      1 => 1523958748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad5c3e642ba40_47341676 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>content</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
amazeui.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
app.css">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        list-style: none;
        box-sizing: border-box;
    }
    #upload>input:after{
        content: '+';
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top:0;
        background: #fff;
        font-size: 60px;
        border: 1px dotted #ccc;
        text-align: center;
        line-height: 60px;
        color: #ccc;
    }
</style>
<body>
<div class="tpl-content-scope">
    <div class="note note-info">
        <h3>产品欣赏添加
            <span class="close" data-close="note"></span>
        </h3>
    </div>
</div>

<div class="tpl-content-scope">

    <div class="tpl-portlet-components">

        <div class="tpl-block " style="padding-top: 30px">

            <div class="tpl-block">

                <div class="am-g">
                    <div class="tpl-form-body tpl-form-line">
                        <form class="am-form tpl-form-line-form" method="post" action="index.php?m=admin&f=menu&a=insertlookpro"  enctype="multipart/form-data">


                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">名字 <span class="tpl-form-line-small-title">Title</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" name='name' class="tpl-form-input" id="user-name" placeholder="请输入标题文字">
                                    <small>请填写名字</small>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">英文名字 <span class="tpl-form-line-small-title">Title</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" name='ename' class="tpl-form-input"  placeholder="请输入标题文字">
                                    <small>请填写英文名字</small>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">系列 <span class="tpl-form-line-small-title">Title</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" name='xilie' class="tpl-form-input"  placeholder="请输入系列文字">
                                    <small>请填写系列</small>
                                </div>
                            </div>


                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">描述 <span class="tpl-form-line-small-title">desc</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" name='des' placeholder="输入描述">
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">英文描述 <span class="tpl-form-line-small-title">desc</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" name='edes' placeholder="输入英文描述">
                                </div>
                            </div>



                            <div class="am-form-group">
                                <label   class="am-u-sm-3 am-form-label">添加图片 / Img</label>
                                <div class="am-u-sm-9">
                                    <div id="upload" style="height: auto;">
                                        <input type="file" multiple style="width: 80px;height: 80px;font-size: 0;
    display: block;position: relative;outline: none">
                                        <ul class="imgul" style="height: auto;overflow: hidden;margin-top: 20px"></ul>
                                    </div>
                                </div>
                            </div>


                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">
                                    <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>


</div>


</body>
</html>

<?php echo '<script'; ?>
>


    //    封面图
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
                    inp.name='img[]';
                    inp.value=ajax.responseText;
                    input.parentNode.appendChild(inp);
                };
                ajax.open('post',"index.php?m=admin&f=menu&a=upload");
                ajax.send(formdata)

            };

        }
    }
<?php echo '</script'; ?>
>




<?php }
}
