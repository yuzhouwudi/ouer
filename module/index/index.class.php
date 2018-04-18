<?php
/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/4/2
 * Time: 16:39
 */
class index extends commomIndex {
    function init(){
        $this->getcat();

        $db=new db();
        $db->table='recom';
        $arr=$db->selAll();

        foreach ($arr as &$item){     //            传地址&
            $db=new db();
            $db->table='content';
            $child=$db->selAll('*',"pid={$item['id']}");
            $item['child']=$child;
        }


        $this->smarty->assign('brr',$arr);

        $db->table='category';
        $arr=$db->selAll('*',"cid=0");
        $this->smarty->assign('arr',$arr);

        $this->smarty->display('index.html');
    }

    function showMore(){
        $this->getcat();
        $id=$_GET['sid'];
        $db=new db();
        $db->table='content';
        $srr=$db->selOne('*',"id=$id");
        $this->smarty->assign('srr',$srr);

        $db->table='recom';
        $arr=$db->selOne('*',"id={$srr['pid']}");
        $this->smarty->assign('crr',$arr);



        $this->smarty->display('showMore.html');
    }

    function recomlist(){
        $id=$_GET['bid'];

        $this->getcat();
        $db=new db();
        $db->table='recom';
        $arr=$db->selOne('*',"id=$id");

        $db->table='content';
        $child=$db->selAll('*',"pid=$id");
        $arr['child']=$child;

        $db->table='content';
        $srr=$db->selOne('*',"id=$id");
        $this->smarty->assign('srr',$srr);

        $this->smarty->assign('brr',$arr);
        $this->smarty->display('recomlist.html');


}
    function getcat(){
        $id=isset($_GET['id'])?$_GET['id']:0;
        $db=new db();
        $db->table='category';
        $arr=$db->selAll('*','cid=0');



        $this->smarty->assign('id',$id);
        $this->smarty->assign('arr',$arr);
        $db->close();
    }
//面包屑
    function getCrumbs($id){
        $db=new db();
        $db->table='category';
        $row=$db->selOne('*',"id='$id'");
        $str="</ul>";
        $str="<li><span class='fh'>{$row['name']}</span></li>".$str;
//如果有二级栏目会循环展示
        while($row['cid']!=0){
            $cid=$row['cid'];
            $row=$db->selOne('*',"id='$cid'");
            $str="<li><a href=index.php?a={$row['ename']}&id={$row['id']} class='home'>{$row['name']}</a><span> &gt; </span></li>".$str;
        }

        $str="<li><a href='index.php' class='home'>Home</a><span> &gt; </span></li>".$str;
        $str="<ul class='fanhui-main'>".$str;
        return $str;
    }

    function list_about(){
        $this->getcat();
        $id=$_GET['id'];

        $db=new db();
        $db->table='team';
        $trr=$db->selAll();
        $this->smarty->assign('trr',$trr);
        $this->smarty->assign('str',$this->getCrumbs($id));
        $this->smarty->display('about.html');
    }

    function list_catalog(){
        $id=$_GET['id'];
        $this->smarty->assign('str',$this->getCrumbs($id));

        $db=new db();
        $db->table='type';
        $prr=$db->selAll();
        foreach ($prr as &$item){
            $db->table='content';
            $row=$db->selOne('count(*) as total',"cid={$item['id']}");
            $item['counts']=$row;
        }
        $this->smarty->assign('prr',$prr);
        $this->smarty->assign('fid',$id);
        $this->getcat();
        $this->smarty->display('catalog.html');
    }



   function listtem(){
       $id=$_GET['tid'];

       $this->getcat();
       $db=new db();
       $db->table='type';
       $arr=$db->selOne('*',"id=$id");

       $db->table='content';
       $child=$db->selAll('*',"cid=$id");
       $arr['child']=$child;

       $db->table='content';
       $srr=$db->selOne('*',"id=$id");
       $this->smarty->assign('srr',$srr);

       $id=$_GET['id'];
       $this->smarty->assign('id',$id);

       $this->smarty->assign('brr',$arr);
       $this->smarty->display('listtem.html');
   }









    function list_blog(){
        $id=$_GET['id'];
        $this->smarty->assign('str',$this->getCrumbs($id));
        $this->getcat();
        $this->smarty->display('blog.html');
    }

    function list_contact(){
        $id=$_GET['id'];
        $this->smarty->assign('id',$id);
        $this->smarty->assign('str',$this->getCrumbs($id));
        $this->getcat();
        $this->smarty->display('contact.html');
    }

    function contac(){
        $id=$_GET['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $message=$_POST['message'];

        $db=new db();
        $db->table='messa';
        $row=$db->ins('name,email,phone,message',"'$name','$email','$phone','$message'");
        if($row==1){
            echo "<script language='JavaScript'>alert('添加成功',location.href=\"index.php?a=list_contact&id=$id\")</script>";
        }else{

            echo "<script language='JavaScript'>alert('添加失败',location.href=\"index.php?a=list_contact&id=$id\")</script>";
        }
    }




}