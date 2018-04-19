<?php
/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/4/2
 * Time: 16:39
 */
class index extends commomIndex {
    function init(){
        $this->Appreciate();
        $this->Personal();
        $this->Official();
        $this->smarty->display('index.html');
    }

    function Appreciate(){
        $db=new db();
        $db->table="oppr";
        $row=$db->selAll();
        $imgarr=explode('--',$row['0']['img']);
        $imgar=explode('--',$row['1']['img']);
        $imga=explode('--',$row['2']['img']);
        $img1=explode('--',$row['3']['img']);
        $this->smarty->assign("row",$row);
        $this->smarty->assign("imgarr",$imgarr);
        $this->smarty->assign("imgar",$imgar);
        $this->smarty->assign("imga",$imga);
        $this->smarty->assign("img1",$img1);
    }
    function Personal(){
        $db=new db();
        $db->table="zhuyeimg";
        $row1=$db->selOne('*','pid=0');
        $imgq=explode('--',$row1['img']);
        $this->smarty->assign("row1",$row1);
        $this->smarty->assign("imgq",$imgq);
    }
    function Official(){
        $db=new db();
        $db->table="active";
        $row2=$db->selAll('*','1 limit 0,6');
        $this->smarty->assign("row2",$row2);
    }



    function product(){
        $db=new db();
        $db->table='lookpro';
        $arr=$db->selAll();
        $this->smarty->assign('arr',$arr);

        $db->table='product';
        $brr=$db->selAll();
        foreach ($brr as &$item){
            $imgarr=explode('--',$item['img']);
            $img=$imgarr[0];
            $item['thumb']=$img;
        }
        $this->smarty->assign('brr',$brr);
        $this->smarty->display('product.html');
    }
    function active(){
        $this->smarty->display('list.html');
    }
    function danye(){
        $this->smarty->display('danye.html');
    }
    function productdetail(){
        $this->smarty->display('chanpinxiangqing.html');
    }
    function listdetail(){

    }


}