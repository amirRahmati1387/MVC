<?php


class userController{
    public function show($fileName){
        $ROW = user::select() -> get();
        $include = loadFile::loadFile($fileName);
        include($include);
    }
}