<?php
class DB extends PDO{
    public function __construct($dsn,$username=NULL, $password=NULL,$options=[]){
        $defauld_options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $options = array_replace($defauld_options,$options);
        parent::__construct($dsn,$username,$password,$options);
    }
    public function run($sql,$args=NULL){
        if($args){
            return $this->query($sql);
        }
        $stmt = $this->prepare($sql);
        $stmt->execute($args);
        $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }


}
?>