<?php

include("app/autoload.php");

$rotKey = request::request();

$routArray = requestManagement::requestManagement($rotKey[2]);

// $controlIdOfRequest = new controlIdOfRequest;

// $id = $controlIdOfRequest -> controlIdOfRequest($routArray,$rotKey);

$mamad = new controlIdOfRequest;

$router = new router;

foreach($routArray as $key => $value){
    $router -> router(new $value[0],$value[1],$rotKey[2],$id);
}
//controlIdOfRequest