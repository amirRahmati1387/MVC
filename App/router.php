<?php

class router{
    public static function router(){
        return $request = explode("/",self::getRequest());
    }
    public static function getRequest(){
        return $_SERVER["REQUEST_URI"];
    }
}