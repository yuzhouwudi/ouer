<?php

/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/4/9
 * Time: 11:16
 */
header('content-type:text/html;charset=utf8');

class page
{
    private $total;
    private $pagenum;
    private $current;
    private $totalpage;
    public $str='';
    public $limit='';

    function __construct($total,$pagenum)
    {
        $this->total=$total;
        $this->pagenum=$pagenum;
        $this->totalpage=ceil($total/$pagenum);
    }

    function pagestr(){
        $this->current=isset($_GET['page'])? $_GET['page']:0;
        $url=isset($_GET['page'])? explode('page=',$_SERVER['REQUEST_URI'])[0].'page='
            : $_SERVER['REQUEST_URI'].'&page=';

        $last=$this->totalpage-1;
        $prev=$this->current-1 < 0? 0:$this->current-1;
        $next=$this->current+1 > $last? $last:$this->current+1;

        $start=$this->current-2 < 0?0:$this->current-2;
        $end=$this->current+2 > $last? $last:$this->current+2;


        $this->str.="<ul class='am-pagination tpl-pagination'>";

        $this->str.="<li class='pagenub'><span>共{$this->totalpage}页</span></li>";
        $this->str.="<li class='pagenub'><a href='{$url}0'>首页</a></li>";
        $this->str.="<li><a href='{$url}{$prev}'>«</a></li>";

        for($i=$start;$i<=$end;$i++){
            $n=$i+1;
            if($i==$this->current){
                $this->str.="<li class=\"am-active\"><span>{$n}</span></li>";
            }else{
                $this->str.="<li><a href='{$url}{$i}'>{$n}</a></li>";
            }
        }

        $this->str.="<li><a href='{$url}{$next}'>»</a></li>";
        $this->str.="<li class='pagenub'><a href='{$url}{$last}'>尾页</a></li>";
        $this->str.="</ul>";

        $d=$this->current*$this->pagenum;
        $this->limit="limit {$d},{$this->pagenum}";
    }

}

