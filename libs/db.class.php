<?php

/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/3/30
 * Time: 9:27
 */
class db
{
//    需求是简单的操作数据库

    private $host='localhost';
    private $username='root';
    private $passwd='';
    private $dbname='company';
    private $port='3306';

//    private $host='sqld.duapp.com';
//    private $username='63e9d7eb63cb4caaa9bfe5358213dadc';
//    private $passwd='b0e1fc35d7514201a321a9b3a72295b4';
//    private $dbname='MIOdVddTMMhQwVqRrzdd';
//    private $port='4050';

    public $db;
    public $table;

    function __construct()
    {
        $this->db=new mysqli($this->host,$this->username,$this->passwd,$this->dbname,$this->port);
        $this->db->query('set names utf8');
    }

    function selOne($field='*',$if=null){
        if($if){
            $sql="select ".$field." from ".$this->table." where ".$if;
        }else{
            $sql="select ".$field." from ".$this->table;
        }
        $result=$this->db->query($sql);
        return $result->fetch_assoc();
    }

    function selAll($field='*',$if=null){
        if($if){
            $sql="select ".$field." from ".$this->table." where ".$if;
        }else{
            $sql="select ".$field." from ".$this->table;
        }
        $result=$this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function del($if){
        $sql="delete from ".$this->table." where ".$if;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function ins($field,$value){
        $sql="insert into ".$this->table." (".$field.") values "."(".$value.")";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function upd($field,$if){
        $sql="update ".$this->table." set ".$field." where ".$if;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function close(){
        $this->db->close();
    }


}
//header('content-type:text/html;charset=utf8');
//$db=new db();
//$db->table='mess';
//var_dump($db->selAll());
//var_dump($db->selOne('*','id=5'));
//var_dump($db->ins('name,content',"'aa','1234567'"));
//var_dump($db->del('id=14'));
//var_dump($db->upd("name='lisi'",'id=13'));


