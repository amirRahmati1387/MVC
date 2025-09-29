<?php

class loadFile{
    public static function loadFile($className){
        // if(in_array($className,["user"])){
        //     $addres = "model/".$className.".php";
        // }
        // if(in_array($className,["productController","categoryController","userController","footerController"])){
        //     $addres = "controller/".$className."php";
        // }
        // if(in_array($className,["loadFile","router","facade","factory","facade","routList","routManagement"])){
        //     $addres = "app/".$className.".php";
        // }
        if($className){
            $addres = "view/".$className.".php";
        }
        // if(!file_exists($addres)){
        //     $addres = "view/404.php";
        // }
        return($addres);
    }
}