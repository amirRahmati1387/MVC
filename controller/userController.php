<?php


class userController{
    public function show($fileName){
        $ROW = user::select() -> get();
        $include = loadFile::loadFile($fileName);
        include($include);
    }
    public function find($fileName , $id){
        $ROW = user::find($id);
        $include = loadFile::loadFile($fileName);
        include($include);
    }
    public function delete($fileName , $id){
        user::delete($id);
        $include = loadFile::loadFile($fileName);
        include($include);
    }
    public function edite($fileName){
        $include = loadFile::loadFile($fileName);
        include($include);
        user::update($_POST);
    }
}