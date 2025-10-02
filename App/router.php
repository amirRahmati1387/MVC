<?php

class router{
    public function router($obj,$method,$fileName,$id){
        if(!isset($id)){
            $obj -> $method($fileName);
        }
        if(isset($id)){
            $obj -> $method($fileName,$id);
        }
    }
}