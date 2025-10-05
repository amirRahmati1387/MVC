<?php


class adjustRequestSendRouter{
    public function adjustRequestSendRouter($datas){
        foreach($datas as $key => $value){
            $routKey = explode("/",$key);
            router::router(new $value[0],$value[1],$routKey[1],$value[2]);
        }
    }
}