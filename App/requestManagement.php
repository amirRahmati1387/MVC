<?php


class requestManagement{
    public static function requestManagement($request){
        $routWhidListRouter = routList::routList();
        foreach($routWhidListRouter as $key => $value){
            $key2 = explode("/",$key);
            if($key2[1] == $request[2]){
                // return [$key => [$value[0],$value[1]]];
                return requestManagementId::requestManagementId([$key => [$value[0],$value[1]]] , $request);
            }
        }
    }
}