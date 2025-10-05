<?php

class autoload{
    public function autoload($className){
        if(in_array($className,["mainDB","model","user"])){
            $addres = "model/".$className.".php";
        }
        if(in_array($className,["userController"])){
            $addres = "controller/".$className.".php";
        }
        if(in_array($className,["router","loadFile","routList","facade","requestManagement","getRequest","request","adjustRequestSendRouter","requestManagementId"])){
            $addres = "app/".$className.".php";
        }
        if(!$addres){
            $addres = "view/".$className.".php";
        }
        include($addres);
    }
}
$autoload = new autoload;
spl_autoload_register([$autoload,"autoload"]);