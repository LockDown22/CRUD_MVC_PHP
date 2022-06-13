<?php

use LDAP\Result;

require_once"model/config.php";

class crud extends dbConfig{
    public function __construct()
    {
        parent::__construct();
    }
    public function getData($sql){
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute();
        $result = $stmt-> fetchAll();
        return  $result;
    }
    public function action($sql){
        $this->conn->exec($sql);
    }
}





?>