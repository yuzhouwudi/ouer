<?php
/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/4/2
 * Time: 16:39
 */
class index extends adminPar
{
    function init(){
        $this->smarty->display('admin/login.html');
    }
    function code(){
        $code=new code('assets/fonts/font1398/Idealist Sans Light.ttf');
        $code->output();
    }
    function checkpass(){
        $code=$_POST['code'];
        $c=strtoupper($this->session->get('code'));
        if($c!=strtoupper($code)){
            $this->jump('验证码不正确','index.php?m=admin');
            exit;
        }else{
            $zhanghao=$_POST['zhanghao'];
            $pass=$_POST['pass'];
            $db=new db();
            $db->table='user';
            $arr=$db->selOne('*',"zhanghao='$zhanghao'");
            if($arr){
                if($arr['pass']==md5($pass)){
                    $this->session->set('user',$zhanghao);
                    $this->jump('登录成功','index.php?m=admin&a=main');
                }else{
                    $this->jump('密码错误','index.php?m=admin');
                }
            }else{
                $this->jump('账号不存在','index.php?m=admin');
            }
            $db->close();
        }
    }

    function main(){
        if(!$this->session->get('user')){
            $this->jump('请先登录','index.php?m=admin');
            exit;
        }
        $this->smarty->assign('zhanghao',$this->session->get('user'));
        $this->smarty->display('admin/main.html');
    }
    function out(){
        $this->session->del('user');
        $this->smarty->display('admin/login.html');
    }




}