<?php
class dbConfig{
    private $host="localhost";
    private $name="root";
    private $pass="";
    private $db="ql_nhansu2";
    private $charset = "utf8";
    protected $conn = null;
    public function __construct()
    {
        
        try{
            $dsn = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
            $this -> conn = new PDO($dsn,$this->name,$this->pass);

        }catch(PDOException $e){
                echo $e->getMessage();

        }
    }



}

?>