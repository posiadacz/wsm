<?php

class Wsm_Db{
    
    private static $instance;
    
    private $host = 'sql.wsmochota.home.pl';
    private $user = 'wsmochota';
    private $password = 'WSMochota1234';
    private $connection;
    
    private function __contruct(){}
    
    public static function getInstance(){
        if(empty(Wsm_Db::$instance)){
            Wsm_Db::$instance = new Wsm_Db();
            Wsm_Db::$instance->connect();
        }
        return Wsm_Db::$instance;
    }
    
    public function connect(){
        $this->connection = mysql_connect($this->host, $this->user, $this->password);
        mysql_select_db("wsmochota", $this->connection);
        mysql_set_charset("utf8", $this->connection);
        $err = mysql_error($this->connection);
        if(!empty($err)){
            throw new Exception("Db connection error");
        }
    }
    
    public function disconnect(){
        mysql_close($this->connection);
    }
    
    public function query($query){
        $result = mysql_query($query, $this->connection);
        $list = array();
        while($row = mysql_fetch_assoc($result)){
            $newRow = array();
            foreach($row as $k => $v){
                $newRow[$k] = html_entity_decode($v);
            }
            array_push($list, $newRow);
        }
        return $list;
    }
    
    public function update($query){
        mysql_query($query, $this->connection);
        $error = mysql_error($this->connection);
        if(!empty($error)){
            throw new Exception($error);
        }
    }
    
    
    
}

