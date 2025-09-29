<?php

class router{
    public static function router(){
        return $request = explode("/",include("getRequest.php"));
    }
}