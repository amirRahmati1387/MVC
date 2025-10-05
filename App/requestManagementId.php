<?php

class requestManagementId{
    public static function requestManagementId($datas , $request){
        foreach($datas as $key => $value){
            $roter = explode("/",$key);
            for($i = 0 ; $i < count($roter) ; $i++){
                if(str_contains($roter[$i],"{")){
                    $id = $request[$i + 1];
                }
                if(!str_contains($roter[$i],"{")){
                    $id = null;
                }
            }
        }
        return [$key => [$value[0],$value[1],$id]];
    }
}