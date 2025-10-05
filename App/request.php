<?php

class request{
    public static function requestCapture(){
        $requestKey = explode("/",include("getRequest.php"));
        return requestManagement::requestManagement($requestKey);
    }
}