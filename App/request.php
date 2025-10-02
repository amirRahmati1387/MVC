<?php

class request{
    public static function request(){
        return explode("/",include("getRequest.php"));
    }
}