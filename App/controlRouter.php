<?php

class controlRouter{
    public static function controlRouter($request){
        $routWhidListRouter = routList::routList();
        foreach($routWhidListRouter as $key => $value){
            if($key == $request){
                return ["$value[0]","$value[1]"];
            }
        }
    }
}