<?php

/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/4/10
 * Time: 10:18
 */
class commomIndex
{
    protected $smarty;
    protected $session;
    function __construct()
    {
        $this->smarty = new  Smarty();
        $this->smarty->setCompileDir('compile');
        $this->smarty->setTemplateDir('template/index');
        $this->session = new session();
    }
}