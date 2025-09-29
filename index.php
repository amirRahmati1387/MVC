<?php

include("app/autoload.php");

$rotKey = router::router();

$routArray = controlRouter::controlRouter($rotKey[2]);


$callControllerMethod = new callControllerMethod;
$callControllerMethod -> callMethod(new $routArray[0],$routArray[1],$rotKey[2]);



/*

$request = "localhost/MVC/user/4/7/listUser/56";

$route = "/user/{id}/{postid}/listUser/{x}";


$requestKey = explode("/",$request);

$routeKey = explode("/",$route);


for($i = 0 ; $i < count($routeKey) ; $i++){
    if(str_contains($routeKey[$i],"{")){
        $m = ltrim($routeKey[$i],"{");
        $q[] = rtrim($m,"}");
        $hamed[] = $requestKey[$i + 1];
    }
}

for($j = 0 ; $j < count($q) ; $j++){
    $mamad[] = [$q[$j] => $hamed[$j]];
}

// foreach($q as $mamad){
//     foreach($x1 as $ali){
//         [$mamad =>[$ali]];
//     }
// }
var_dump($mamad);
*/