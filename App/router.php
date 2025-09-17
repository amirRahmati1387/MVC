<?php

$key = $_SERVER["REQUEST_URI"];

class router{
    public $uri;
    public $uriArray;
    public function __construct($uri){
        $this -> uri = $uri;
    }
    public function uriArray(){
        return $this -> uriArray = implode("/",$this -> uri);
    }
}