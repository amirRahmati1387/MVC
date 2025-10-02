<?php

class routList{
    public static function routList(){
        return [
            "/listUser" => ["userController","show"],
            "/singleUser/{id}" => ["userController","find"],
            "/deleteUser/{id}" => ["userController","delete"],
            "/editeUser/{id}" => ["userController","find"],
            "/getUpdateUser" => ["userController","edite"]
        ];
    }
}