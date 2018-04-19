<?php

/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/4/4
 * Time: 10:05
 */
class menu extends adminPar
{
    function __construct()
    {
        parent::__construct();
    }


//密码修改
    function changepass(){
        $this->smarty->assign('zhanghao',$this->session->get('user'));
        $this->smarty->display('admin/changepass.html');
    }
    function putpass(){
        $zhanghao=$_POST['zhanghao'];
        $oldpass=$_POST['oldpass'];
        $newpass=md5($_POST['newpass']);
        $db=new db();
        $db->table='user';
        $arr=$db->selOne('*',"zhanghao='$zhanghao'");
        if($arr['pass']==md5($oldpass)){
            $row=$db->upd("pass='$newpass'","zhanghao='$zhanghao'");
            if($row==1){
                $this->jump('修改成功','index.php?m=admin');
                $this->session->del('user');
            }else{
                $this->jump('修改失败','index.php?m=admin&f=menu&a=changepass');
            }
        }else{
            $this->jump('旧密码错误','index.php?m=admin&f=menu&a=changepass');
        }

        $db->close();
    }
//鉴赏管理
    function oppr(){
        $db=new db();
        $db->table='oppr';
        $arr=$db->selAll();
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/oppr.html');
        $db->close();
    }

    function deloppr()
    {
        $id = $_GET['id'];
        $db = new db();
        $db->table = 'oppr';
        $row = $db->del("id=$id");
        if ($row == 1) {
            $this->jump('删除成功', 'index.php?m=admin&f=menu&a=oppr');
        } else {
            $this->jump('删除失败', 'index.php?m=admin&f=menu&a=oppr');
        }

        $db->close();
    }




    function addoppr(){
        $this->smarty->display('admin/addoppr.html');
    }

    function upload(){
        $up=new upload($_FILES['file']);
        $up->onload();
    }

    function insertoppr(){
        $name=$_POST['name'];
        $ename=$_POST['ename'];
        $content=$_POST['con'];
        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);     //       implode 将字符串以-连接
        }
        $db=new db();
        $db->table='oppr';
        if($img){
            $row=$db->ins("name,ename,img,content","'$name','$ename','$img','$content'");
        }else{
            $row=$db->ins("name,ename,content","'$name','$ename','$content'");
        }

        if($row==1){
            $this->jump('添加成功', 'index.php?m=admin&f=menu&a=oppr');
        }else{
            $this->jump('添加失败', 'index.php?m=admin&f=menu&a=addoppr');
        }
        $db->close();
    }

    function editoppr(){
        $id=$_GET['id'];
        $db=new db();
        $db->table='oppr';
        $arr=$db->selOne('*',"id='$id'");
        $imgarr=explode('--',$arr['img']);
        $imgstr='';
        if($imgarr){
            for($i=0;$i<count($imgarr);$i++){
                $imgstr.="
                <img src='$imgarr[$i]' style='width: 100px;height: 100px;' alt=''>
            
            ";
            }
        }
        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('imgstr',$imgstr);
        $this->smarty->display('admin/editoppr.html');
        $db->close();
    }

    function updoppr(){
        $id=$_POST['id'];
        $con=$_POST['con'];
        $name=$_POST['name'];
        $ename=$_POST['ename'];
        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);
        }
        $db=new db();
        $db->table='oppr';
        if($img){
            $row=$db->upd("name='$name',ename='$ename',img='$img',content='$con'","id='$id'");
        }else{
            $row=$db->upd("name='$name',ename='$ename',content='$con'","id='$id'");
        }

        if($row==1){
            $this->jump('修改成功', 'index.php?m=admin&f=menu&a=oppr');
        }else{
            $this->jump('修改失败', 'index.php?m=admin&f=menu&a=oppr');
        }
        $db->close();
    }

//主页图片
    function zhuyeimg(){
        $db=new db();
        $db->table='zhuyeimg';
        $arr=$db->selAll();
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/zhuyeimg.html');
        $db->close();
    }


    function indimg(){
        $this->smarty->display('admin/indeximg.html');
    }

    function inertindimg(){
        $img="";
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);     //       implode 将字符串以-连接
        }
        $db=new db();
        $db->table='zhuyeimg';
        $pid=$_POST['pid'];
        if($img){
            $row=$db->ins("img,pid","'$img','$pid'");
        }else{
            $row=$db->ins("pid","'$pid'");
        }


        if($row==1){
            $this->jump('添加成功', 'index.php?m=admin&f=menu&a=zhuyeimg');
        }else{
            $this->jump('添加失败', 'index.php?m=admin&f=menu&a=zhuyeimg');
        }
        $db->close();
    }

    function editindimg(){
        $id=$_GET['id'];
        $db=new db();
        $db->table='zhuyeimg';
        $arr=$db->selOne('*',"id='$id'");
        $this->smarty->assign('arr',$arr);

        $imgarr=explode('--',$arr['img']);
        $imgstr='';
        if($imgarr){
            for($i=0;$i<count($imgarr);$i++){
                $imgstr.="
                <img src='$imgarr[$i]' style='width: 100px;height: 100px;' alt=''>
            
            ";
            }
        }
        $this->smarty->assign('imgstr',$imgstr);
        $this->smarty->display('admin/editindimg.html');
    }


    function updindimg(){
        $id=$_POST['id'];
        $img="";
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);     //       implode 将字符串以-连接
        }
        $db=new db();
        $db->table='zhuyeimg';
        $pid=$_POST['pid'];
        if($img){
            $row=$db->upd("img='$img',pid='$pid'","id=$id");
        }else{
            $row=$db->upd("pid='$pid'","id=$id");
        }


        if($row==1){
            $this->jump('修改成功', 'index.php?m=admin&f=menu&a=zhuyeimg');
        }else{
            $this->jump('修改失败', 'index.php?m=admin&f=menu&a=zhuyeimg');
        }
        $db->close();
    }

//活动管理

    function active(){
        $db=new db();
        $db->table='active';

        $row=$db->selOne('count(*) as total');

        $p=new page((int)$row['total'],10);
        $p->pagestr();
        $arr=$db->selAll('*',' 1 '.$p->limit);

        $this->smarty->assign('str',$p->str);
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/active.html');
        $db->close();

    }

    function delactive(){
        $id = $_GET['id'];
        $db = new db();
        $db->table = 'active';
        $row = $db->del("id=$id");
        if ($row == 1) {
            $this->jump('删除成功', 'index.php?m=admin&f=menu&a=active');
        } else {
            $this->jump('删除失败', 'index.php?m=admin&f=menu&a=active');
        }

        $db->close();
    }

    function addactive(){

        $this->smarty->display('admin/addactive.html');

    }

    function insertactive(){
        $time=$_POST['times'];
        $title=$_POST['title'];
        $des=$_POST['des'];
        $con=$_POST['con'];

        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);     //       implode 将字符串以-连接
        }

        $db=new db();
        $db->table='active';
        if($img){
            $row=$db->ins("title,des,content,time,img","'$title','$des','$con','$time','$img'");
        }else{
            $row=$db->ins("title,des,content,time","'$title','$des','$con','$time'");
        }

        if($row==1){
            $this->jump('添加成功', 'index.php?m=admin&f=menu&a=active');
        }else{
            $this->jump('添加失败', 'index.php?m=admin&f=menu&a=addactive');
        }
        $db->close();
    }

    function editactive(){
        $id=$_GET['id'];
        $db=new db();
        $db->table='active';
        $arr=$db->selOne('*',"id='$id'");

        $imgarr=explode('--',$arr['img']);
        $imgstr='';
        if($imgarr){
            for($i=0;$i<count($imgarr);$i++){
                $imgstr.="
                <img src='$imgarr[$i]' style='width: 100px;height: 100px;' alt=''>
            
            ";
            }
        }



        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('imgstr',$imgstr);
        $this->smarty->display('admin/editactive.html');
        $db->close();
    }

    function updactive(){
        $id=$_POST['id'];
        $time=$_POST['times'];
        $title=$_POST['title'];
        $des=$_POST['des'];
        $con=$_POST['con'];


        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);
        }

        $db=new db();
        $db->table='active';
        if($img){
            $row=$db->upd("title='$title',des='$des',content='$con',time='$time',img='$img'","id='$id'");
        }else{
            $row=$db->upd("title='$title',des='$des',content='$con',time='$time'","id='$id'");
        }


        if($row==1){
            $this->jump('修改成功', 'index.php?m=admin&f=menu&a=active');
        }else{
            $this->jump('修改失败', 'index.php?m=admin&f=menu&a=active');
        }
        $db->close();
    }


//活动内容管理

    function activedeatil(){
        $db=new db();
        $db->table='activedeatil';

        $row=$db->selOne('count(*) as total');
        $p=new page((int)$row['total'],10);
        $p->pagestr();
        $arr=$db->selAll('*',' 1 '.$p->limit);

        $this->smarty->assign('str',$p->str);
        $this->smarty->assign('arr',$arr);

        $this->smarty->display('admin/activedeatil.html');
        $db->close();

    }

    function delactivedeatil(){
        $id = $_GET['id'];
        $db = new db();
        $db->table = 'activedeatil';
        $row = $db->del("id=$id");
        if ($row == 1) {
            $this->jump('删除成功', 'index.php?m=admin&f=menu&a=activedeatil');
        } else {
            $this->jump('删除失败', 'index.php?m=admin&f=menu&a=activedeatil');
        }

        $db->close();
    }

    function addactivedeatil(){
        $db=new db();

        $db->table='active';
        $arr=$db->selAll();
        $this->smarty->assign('arr',$arr);

        $this->smarty->display('admin/addactivedeatil.html');
        $db->close();
    }

    function insertactivedeatil(){
        $pid=$_POST['pid'];
        if($pid==0){
            $this->jump('添加失败请先选择所属活动', 'index.php?m=admin&f=menu&a=addactivedeatil');
            return;
        }
        $title=$_POST['title'];
        $etitle=$_POST['etitle'];
        $con=$_POST['con'];

        $db=new db();
        $db->table='activedeatil';

        $row=$db->ins("title,etitle,content,pid","'$title','$etitle','$con','$pid'");


        if($row==1){
            $this->jump('添加成功', 'index.php?m=admin&f=menu&a=activedeatil');
        }else{
            $this->jump('添加失败', 'index.php?m=admin&f=menu&a=addactivedeatil');
        }
        $db->close();
    }

    function editactivedeatil(){
        $id=$_GET['id'];
        $db=new db();
        $db->table='activedeatil';
        $arr=$db->selOne('*',"id='$id'");

        $db->table='active';
        $brr=$db->selAll();
        $strp='';
        foreach ($brr as $item){
            if($item['id']==$arr['pid']){
                $strp.="
             <option value='{$item['id']}' selected>{$item['title']}</option>
        ";
            }else{
                $strp.="
             <option value='{$item['id']}'>{$item['title']}</option>
        ";
            }
        }
        $this->smarty->assign('strp',$strp);
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/editactivedeatil.html');
        $db->close();
    }

    function updactivedeatil(){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $etitle=$_POST['etitle'];
        $con=$_POST['con'];
        $pid=$_POST['pid'];

        $db=new db();
        $db->table='activedeatil';
        $row=$db->upd("title='$title',etitle='$etitle',content='$con',pid='$pid'","id='$id'");

        if($row==1){
            $this->jump('修改成功', 'index.php?m=admin&f=menu&a=activedeatil');
        }else{
            $this->jump('修改失败', 'index.php?m=admin&f=menu&a=activedeatil');
        }
        $db->close();
    }


//活动评论管理

    function messp(){
        $db=new db();
        $db->table='messp';

        $row=$db->selOne('count(*) as total');

        $p=new page((int)$row['total'],10);
        $p->pagestr();
        $arr=$db->selAll('*',' 1 '.$p->limit);

        $this->smarty->assign('str',$p->str);
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/messp.html');
        $db->close();

    }

    function delmessp(){
        $id = $_GET['id'];
        $db = new db();
        $db->table = 'messp';
        $row = $db->del("id=$id");
        if ($row == 1) {
            $this->jump('删除成功', 'index.php?m=admin&f=menu&a=messp');
        } else {
            $this->jump('删除失败', 'index.php?m=admin&f=menu&a=messp');
        }

        $db->close();
    }


//产品欣赏
    function lookpro(){
        $db=new db();
        $db->table='lookpro';
        $arr=$db->selAll();
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/lookpro.html');
        $db->close();

    }

    function dellookpro(){
        $id = $_GET['id'];
        $db = new db();
        $db->table = 'lookpro';
        $row = $db->del("id=$id");
        if ($row == 1) {
            $this->jump('删除成功', 'index.php?m=admin&f=menu&a=lookpro');
        } else {
            $this->jump('删除失败', 'index.php?m=admin&f=menu&a=lookpro');
        }

        $db->close();
    }

    function addlookpro(){

        $this->smarty->display('admin/addlookpro.html');

    }

    function insertlookpro(){
        $name=$_POST['name'];
        $ename=$_POST['ename'];
        $xilie=$_POST['xilie'];
        $des=$_POST['des'];
        $edes=$_POST['edes'];


        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);     //       implode 将字符串以-连接
        }

        $db=new db();
        $db->table='lookpro';
        if($img){
            $row=$db->ins("name,ename,xilie,des,edes,img","'$name','$ename','$xilie','$des','$edes','$img'");
        }else{
            $row=$db->ins("name,ename,xilie,des,edes","'$name','$ename','$xilie','$des','$edes'");
        }

        if($row==1){
            $this->jump('添加成功', 'index.php?m=admin&f=menu&a=lookpro');
        }else{
            $this->jump('添加失败', 'index.php?m=admin&f=menu&a=lookpro');
        }
        $db->close();
    }

    function editlookpro(){
        $id=$_GET['id'];
        $db=new db();
        $db->table='lookpro';
        $arr=$db->selOne('*',"id='$id'");

        $imgarr=explode('--',$arr['img']);
        $imgstr='';
        if($imgarr){
            for($i=0;$i<count($imgarr);$i++){
                $imgstr.="
                <img src='$imgarr[$i]' style='width: 100px;height: 100px;' alt=''>
            
            ";
            }
        }



        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('imgstr',$imgstr);
        $this->smarty->display('admin/editlookpro.html');
        $db->close();
    }

    function updlookpro(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $ename=$_POST['ename'];
        $xilie=$_POST['xilie'];
        $des=$_POST['des'];
        $edes=$_POST['edes'];


        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);
        }

        $db=new db();
        $db->table='lookpro';
        if($img){
            $row=$db->upd("name='$name',ename='$ename',xilie='$xilie',des='$des',edes='$edes',img='$img'","id='$id'");
        }else{
            $row=$db->upd("name='$name',ename='$ename',xilie='$xilie',des='$des',edes='$edes'","id='$id'");
        }


        if($row==1){
            $this->jump('修改成功', 'index.php?m=admin&f=menu&a=lookpro');
        }else{
            $this->jump('修改失败', 'index.php?m=admin&f=menu&a=lookpro');
        }
        $db->close();
    }

//产品管理
    function product(){
        $db=new db();
        $db->table='product';

        $row=$db->selOne('count(*) as total');

        $p=new page((int)$row['total'],10);
        $p->pagestr();
        $arr=$db->selAll('*',' 1 '.$p->limit);

        $this->smarty->assign('str',$p->str);
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/product.html');
        $db->close();

    }

    function delproduct(){
        $id = $_GET['id'];
        $db = new db();
        $db->table = 'product';
        $row = $db->del("id=$id");
        if ($row == 1) {
            $this->jump('删除成功', 'index.php?m=admin&f=menu&a=product');
        } else {
            $this->jump('删除失败', 'index.php?m=admin&f=menu&a=product');
        }

        $db->close();
    }

    function addproduct(){

        $this->smarty->display('admin/addproduct.html');

    }

    function insertproduct(){
        $name=$_POST['name'];
        $ename=$_POST['ename'];
        $des=$_POST['des'];
        $con=$_POST['con'];

        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);     //       implode 将字符串以-连接
        }

        $db=new db();
        $db->table='product';
        if($img){
            $row=$db->ins("name,ename,des,cont,img","'$name','$ename','$des','$con','$img'");
        }else{
            $row=$db->ins("name,ename,des,cont","'$name','$ename','$des','$con'");
        }

        if($row==1){
            $this->jump('添加成功', 'index.php?m=admin&f=menu&a=product');
        }else{
            $this->jump('添加失败', 'index.php?m=admin&f=menu&a=addproduct');
        }
        $db->close();
    }

    function editproduct(){
        $id=$_GET['id'];
        $db=new db();
        $db->table='product';
        $arr=$db->selOne('*',"id='$id'");

        $imgarr=explode('--',$arr['img']);
        $imgstr='';
        if($imgarr){
            for($i=0;$i<count($imgarr);$i++){
                $imgstr.="
                <img src='$imgarr[$i]' style='width: 100px;height: 100px;' alt=''>
            
            ";
            }
        }



        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('imgstr',$imgstr);
        $this->smarty->display('admin/editproduct.html');
        $db->close();
    }

    function updproduct(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $ename=$_POST['ename'];
        $des=$_POST['des'];
        $con=$_POST['con'];


        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);
        }

        $db=new db();
        $db->table='product';
        if($img){
            $row=$db->upd("name='$name',ename='$ename',des='$des',cont='$con',img='$img'","id='$id'");
        }else{
            $row=$db->upd("name='$name',ename='$ename',des='$des',cont='$con'","id='$id'");
        }


        if($row==1){
            $this->jump('修改成功', 'index.php?m=admin&f=menu&a=product');
        }else{
            $this->jump('修改失败', 'index.php?m=admin&f=menu&a=product');
        }
        $db->close();
    }















//模块管理
    function module(){
        $db=new db();
        $db->table='module';
        $arr=$db->selAll();
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/module.html');
        $db->close();
    }
    function delmodule(){
        $id = $_GET['id'];
        $db = new db();
        $db->table = 'module';
        $row = $db->del("id=$id");
        if ($row == 1) {
            $this->jump('删除成功', 'index.php?m=admin&f=menu&a=module');
        } else {
            $this->jump('删除失败', 'index.php?m=admin&f=menu&a=module');
        }

        $db->close();
    }

    function addmodule(){
        $db=new db();
        $db->table='module';
        $this->smarty->display('admin/addmodule.html');
        $db->close();
    }

    function insertmodule(){
        $name=$_POST['name'];
        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);     //       implode 将字符串以-连接
        }
        $db=new db();
        $db->table='module';
        if($img){
            $row=$db->ins("name,reimg","'$name','$img'");
        }else{
            $row=$db->ins("name","'$name'");
        }

        if($row==1){
            $this->jump('添加成功', 'index.php?m=admin&f=menu&a=module');
        }else{
            $this->jump('添加失败', 'index.php?m=admin&f=menu&a=addmodule');
        }
        $db->close();
    }

    function editmodule(){
        $id=$_GET['id'];
        $db=new db();
        $db->table='module';
        $arr=$db->selOne('*',"id='$id'");
        $imgarr=explode('--',$arr['reimg']);
        $imgstr='';
        if($imgarr){
            for($i=0;$i<count($imgarr);$i++){
                $imgstr.="
                    <img src='$imgarr[$i]' style='width: 100px;height: 100px;' alt=''>
                 ";
            }
        }
        $this->smarty->assign('imgstr',$imgstr);
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/editmodule.html');
        $db->close();
    }

    function updmodule(){
        $id=$_POST['id'];
        $name=$_POST['name'];

        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);
        }
        $db=new db();
        $db->table='module';
        if($img){
            $row=$db->upd("name='$name',reimg='$img'","id='$id'");
        }else{
            $row=$db->upd("name='$name'","id='$id'");
        }

        if($row==1){
            $this->jump('修改成功', 'index.php?m=admin&f=menu&a=module');
        }else{
            $this->jump('修改失败', 'index.php?m=admin&f=menu&a=module');
        }
        $db->close();
    }

//产品详情


    function str1($db,&$str,$currentcid=null,$id=0,$n=0){
        $arr=$db->selAll('*',"cid='$id'");
        $pad=str_repeat('-',$n);
        foreach ($arr as $item){
            if($item['id']==$currentcid){
                $str.="
             <option value='{$item['id']}' selected>{$pad}{$item['name']}</option>
        ";
            }else{
                $str.="
             <option value='{$item['id']}'>{$pad}{$item['name']}</option>
        ";
            }
            $this->str1($db,$str,$currentcid,$item['id'],$n+2);

        }
    }


    function content(){
        $db=new db();
        $db->table='content';

        $row=$db->selOne('count(*) as total');

        $p=new page((int)$row['total'],10);
        $p->pagestr();
        $arr=$db->selAll('*',' 1 '.$p->limit);

        $this->smarty->assign('str',$p->str);
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/content.html');
        $db->close();

    }

    function delcont(){
        $id = $_GET['id'];
        $db = new db();
        $db->table = 'content';
        $row = $db->del("id=$id");
        if ($row == 1) {
            $this->jump('删除成功', 'index.php?m=admin&f=menu&a=content');
        } else {
            $this->jump('删除失败', 'index.php?m=admin&f=menu&a=content');
        }

        $db->close();
    }

    function addcont(){
        $db=new db();
        $db->table='product';
        $brr=$db->selAll();
        $this->smarty->assign('brr',$brr);

        $db->table='module';
        $arr=$db->selAll();
        $this->smarty->assign('arr',$arr);

        $this->smarty->display('admin/addcontent.html');
        $db->close();
    }

    function insertcont(){
        $cid=$_POST['cid'];
        if($cid==0){
            $this->jump('添加失败请先选择所属产品', 'index.php?m=admin&f=menu&a=addcont');
            return;
        }
        $pid=$_POST['pid'];
        if($pid==0){
            $this->jump('添加失败请先选择产品模块', 'index.php?m=admin&f=menu&a=addcont');
            return;
        }
        $title=$_POST['title'];
        $des=$_POST['des'];
        $nub=$_POST['nub'];
        $con=$_POST['con'];

        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);     //       implode 将字符串以-连接
        }

        $db=new db();
        $db->table='content';
        if($img){
            $row=$db->ins("title,nub,des,content,cid,pid,img","'$title','$nub','$des','$con','$cid','$pid','$img'");
        }else{
            $row=$db->ins("title,nub,des,content,cid,pid","'$title','$nub','$des','$con','$cid','$pid'");
        }

        if($row==1){
            $this->jump('添加成功', 'index.php?m=admin&f=menu&a=content');
        }else{
            $this->jump('添加失败', 'index.php?m=admin&f=menu&a=addcont');
        }
        $db->close();
    }

    function editcont(){
        $id=$_GET['id'];
        $db=new db();
        $db->table='content';
        $arr=$db->selOne('*',"id='$id'");

        $imgarr=explode('--',$arr['thumb']);
        $imgstr='';
        if($imgarr){
            for($i=0;$i<count($imgarr);$i++){
                $imgstr.="
                <img src='$imgarr[$i]' style='width: 100px;height: 100px;' alt=''>
            
            ";
            }
        }

        $db->table='type';
        $str='';
        $this->str1($db,$str,$arr['cid']);
        $this->smarty->assign('str',$str);

        $db->table='recom';
        $brr=$db->selAll();
        $strp='';
        foreach ($brr as $item){
            if($item['id']==$arr['pid']){
                $strp.="
             <option value='{$item['id']}' selected>{$item['name']}</option>
        ";
            }else{
                $strp.="
             <option value='{$item['id']}'>{$item['name']}</option>
        ";
            }
        }
        $this->smarty->assign('strp',$strp);
        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('imgstr',$imgstr);
        $this->smarty->display('admin/editcont.html');
        $db->close();
    }

    function updcont(){
        $id=$_POST['id'];
        $cid=$_POST['cid'];
        $title=$_POST['title'];
        $descr=$_POST['descr'];
        $con=$_POST['con'];
        $pid=$_POST['pid'];

        $img='';
        if(isset($_POST['img'])){
            $img=implode('--',$_POST['img']);
        }

        $db=new db();
        $db->table='content';
        if($img){
            $row=$db->upd("title='$title',descr='$descr',con='$con',cid='$cid',pid='$pid',thumb='$img'","id='$id'");
        }else{
            $row=$db->upd("title='$title',descr='$descr',con='$con',cid='$cid',pid='$pid'","id='$id'");
        }


        if($row==1){
            $this->jump('修改成功', 'index.php?m=admin&f=menu&a=content');
        }else{
            $this->jump('修改失败', 'index.php?m=admin&f=menu&a=content');
        }
        $db->close();
    }



}


