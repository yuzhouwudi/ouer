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

    function danye(){
        $this->smarty->display('danye.html');
    }

    function active(){
        $db=new db();
        $db->table='active';
        $arr=$db->selAll( '*',"1 order by count desc limit 0,3 ");
        $row=$db->selOne("count(*) as total ",'1');
        $p = new page((int)$row['total'], 4);
        $p->pagestr();
        $brr=$db->selAll('*',"1  $p->limit");
        $db->close();
        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('brr',$brr);
        $this->smarty->assign('str', $p->str);
        $this->smarty->display('list.html');
    }
    function actdetail(){
        $id=$_GET['id'];
        $db=new db();
        if($id){
            $db->table='active';
            $db->upd("count=count+1","id=$id");
        }
        $db->table='activedeatil';
        $row=$db->selAll('*',"pid=$id");
        $pi=(int)$row[0]['pid'];

        $db->table='active';
        $arr=$db->selOne('*',"id=$id");

        $count=$db->selOne('count(*) as total','1');
        $a=(int)$count['total'];
        if($id==1){
            $pid=$a;
        }else{
            $pid=$id-1;
        }
        if($id==$a){
            $lid=1;
        }else{
            $lid=$id+1;
        }
        $crr=$db->selOne('*',"id=$pid");
        $drr=$db->selOne('*',"id=$lid");

        $db->table='messp';
        $pid=1;
        $mess=$db->selAll('*',"cid=$id and pid='$pid' order by id desc limit 0,3 ");




        $this->smarty->assign('pi',$pi);
        $this->smarty->assign('mess',$mess);
        $this->smarty->assign('crr',$crr);
        $this->smarty->assign('drr',$drr);
        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('row',$row);

        $this->smarty->display('essay-details.html');
    }
    function picdatail(){
        $id=$_GET['id'];
//        $id=1;
        $db=new db();
        $db->table='content';
        $arr=$db->selAll('*',"cid=$id and pid=1");//设计师说
        $brr=$db->selAll('*',"cid=$id and pid=2");//图片中间字
        $img=explode('--',"{$brr[0]['img']}");
        $crr=$db->selAll('*',"cid=$id and pid=3");//one two three
        $drr=$db->selAll('*',"cid=$id and pid=4");//四个的下面
        $err=$db->selAll('*',"cid=$id and pid=5");//下面俩大图
        $imgerr=explode('--',"{$err[0]['img']}");
        $imgone=explode('--',"{$crr[0]['img']}");
        $imgtwo=explode('--',"{$crr[1]['img']}");
        $imgthree=explode('--',"{$crr[2]['img']}");
        $db->table='product';
        $frr=$db->selOne('*',"id=$id");

        $imgfor=explode('--',"{$frr['img']}");
        $this->smarty->assign('imgfor',$imgfor);

        $count=$db->selOne('count(*) as total','1');
        $a=(int)$count['total'];
        if($id==1){
            $pid=$a;
        }else{
            $pid=$id-1;
        }
        if($id==$a){
            $lid=1;
        }else{
            $lid=$id+1;
        }
        $grr=$db->selOne('*',"id=$pid");
        $hrr=$db->selOne('*',"id=$lid");


        $db->table='messp';
        $mess=$db->selAll('*',"cid={$frr['id']} and pid=0 order by id desc limit 0,3 ");


        $this->smarty->assign('mess',$mess);
        $this->smarty->assign('imgone',$imgone);
        $this->smarty->assign('imgtwo',$imgtwo);
        $this->smarty->assign('imgthree',$imgthree);
        $this->smarty->assign('img',$img);
        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('brr',$brr);
        $this->smarty->assign('crr',$crr);
        $this->smarty->assign('drr',$drr);
        $this->smarty->assign('imgerr',$imgerr);
        $this->smarty->assign('grr',$grr);//上一级
        $this->smarty->assign('hrr',$hrr);//下一集
        $this->smarty->assign('frr',$frr);//当前上一级
        $this->smarty->display('chanpinxiangqing.html');
    }
    function addmess(){
        $img='';
        if(isset($_GET['img'])){
            $img=$_GET['img'];
        }
        $id=$_GET['id'];
        $mess=$_GET['mess'];
        $pid=0;
        date_default_timezone_set('Asia/Shanghai');
        $time=time();
        $time=substr($time,'-3','3');
        $name="游客".$time;
        $db=new mysqli('localhost','root','','company');
        $db->query('set names utf8');
        if($img){
            $sql="insert into messp(name,cid,content,pid,img) values('$name','$id','$mess','$pid','$img')";
        }else{
            $sql="insert into messp(name,cid,content,pid) values('$name','$id','$mess','$pid')";
        }
        $row=$db->query($sql);
        if($row==1){
            $newid=$db->insert_id;
            $arr=$db->query("select * from messp where id='$newid'")->fetch_assoc();

            echo json_encode($arr);
        }

    }
    function addmesstwo(){
        $img='';
        if(isset($_GET['img'])){
            $img=$_GET['img'];
        }
        $id=$_GET['id'];
        $mess=$_GET['mess'];
        $pid=1;
        date_default_timezone_set('Asia/Shanghai');
        $time=time();
        $time=substr($time,'-3','3');
        $name="游客".$time;
        $db=new mysqli('localhost','root','','company');
        $db->query('set names utf8');
        if($img){
            $sql="insert into messp(name,cid,content,pid,img) values('$name','$id','$mess','$pid','$img')";
        }else{
            $sql="insert into messp(name,cid,content,pid) values('$name','$id','$mess','$pid')";
        }
        $row=$db->query($sql);
        if($row==1){
            $newid=$db->insert_id;
            $arr=$db->query("select * from messp where id='$newid'")->fetch_assoc();
            echo json_encode($arr);
        }
    }




}