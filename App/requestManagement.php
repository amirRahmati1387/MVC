<?php

class requestManagement{
    public static function requestManagement($request){
        $routWhidListRouter = routList::routList();
        $controlwithrouter = new controlIdWithRouter;
        foreach($routWhidListRouter as $key => $value){
            $key2 = explode("/",$key);
            if($key2[1] == $request){
                return [$key => [$value[0],$value[1]]];
            }
        }
    }
}
// $controlwithrouter -> controllerWither([$key => [$value[0],$value[1]]]);