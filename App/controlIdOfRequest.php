<?php

class controlIdOfRequest{
    public function controlIdOfRequest($datas,$rout){
        foreach($datas as $key => $value){
            $roter = explode("/",$key);
            for($i = 0 ; $i < count($roter) ; $i++){
                if(str_contains($roter[$i],"{")){
                    $id = $rout[$i + 1];
                }
                if(!str_contains($roter[$i],"{")){
                    $id = null;
                }
            }
        }
        return $id;
    }
}

// $request = "localhost/MVC/user/listUser/";

// $route = "/user/listUser/";


// $requestKey = explode("/",$request);

// $routeKey = explode("/",$route);


// for($i = 0 ; $i < count($routeKey) ; $i++){
//     if(str_contains($routeKey[$i],"{")){
//         $m = ltrim($routeKey[$i],"{");
//         $q[] = rtrim($m,"}");
//         $hamed[] = $requestKey[$i + 1];
//     }
//     if(!str_contains($routeKey[$i],"{")){
//         echo"❌";
//     }
// }
// for($j = 0 ; $j < count($q) ; $j++){
//     $mamad[] = [$q[$j] => $hamed[$j]];
// }


// foreach($q as $mamad){
//     foreach($x1 as $ali){
//         [$mamad =>[$ali]];
//     }
// }
// var_dump($hamed);