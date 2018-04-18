<?php

/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/4/4
 * Time: 9:50
 */
class adminPar
{
    protected $smarty;
    protected $session;
    function __construct()
    {
        $this->smarty=new  Smarty();
        $this->smarty->setCompileDir('compile');
        $this->smarty->setTemplateDir('template');
        $this->session=new session();
    }

    function jump($mess,$href){
        $this->smarty->assign('mess',$mess);
        $this->smarty->assign('href',$href);
        $this->smarty->display('admin/mess.html');
    }
}