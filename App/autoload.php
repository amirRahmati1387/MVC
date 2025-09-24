<?php

class autoload{
    public function autoload($className){
        if(in_array($className,["product","category","user","footer","model","mainDB"])){
            $addres = "model/".$className.".php";
        }
        if(in_array($className,["productController","categoryController","userController","footerController"])){
            $addres = "controller/".$className."php";
        }
        if(in_array($className,["router","loadFile","routList","controlRouter","facade"])){
            $addres = "app/".$className.".php";
        }else{
            $addres = "view/".$className.".php";
        }
        include($addres);
    }
}
$autoload = new autoload;
spl_autoload_register([$autoload,"autoload"]);


