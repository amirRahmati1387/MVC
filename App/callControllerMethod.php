<?php

class callControllerMethod{
    public function callMethod($obj,$method,$fileName){
        $obj -> $method($fileName);
    }
}