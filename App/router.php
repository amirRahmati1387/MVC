<?php

class router{
    public static function router($obj,$method,$fileName,$id){
        if(!isset($id)){
            $obj -> $method($fileName);
        }
        if(isset($id)){
            $obj -> $method($fileName,$id);
        }
    }
}