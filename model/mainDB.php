<?php


class mainDB{
    public $serverName = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbName = "mvc";
    public $connection;
    public function __construct(){
        $this -> connection = new mysqli($this -> serverName,$this -> user,$this -> pass,$this -> dbName);
    }
}