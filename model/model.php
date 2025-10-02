<?php

class model extends facade{
    protected $base;
    protected $type;
    protected $where;

    protected function select($filds = null){
        if($filds == null){
            $filds = ['*'];
        }
        $this -> type = "select";
        $this -> base = "SELECT ".implode(",",$filds);
        return $this;
    }

    protected function find($id){
        return $this -> select() -> where(["id",$id[0],"="]) -> get();
    }

    protected function delete($id){
        $this -> type = "delete";
        $this -> base = "DELETE ";
        $this -> where(["id",$id[0],"="]) -> get();
    }

    protected function create($post){
        $this -> type = "create";
        $filds = "(";
        $value = "(";
        $count = 0;
        foreach($date[0] as $key => $vale_fild){
            $count++;
            $filds .= $key;
            $value .= "'".$vale_fild."'";
            if($count < count($post[0])){
                $filds .= ",";
                $value .= ",";
            }
        }
        $filds .= ")";
        $value .= ")";
        $this -> base = "INSERT "." INTO ".$this -> tableName.$filds."VALUES".$value;
        $this -> get();
    }

    protected function update($post){
        $this -> type = "update";
        $this -> base = "UPDATE ".$this -> tableName." SET ";
        $count = count($post[0]);
        foreach($post[0] as $key => $value){
            $this -> base .= $key." = '".$value."'";
            if($count == 1){
                break;
            }
            $count--;
            $this -> base .=",";
        }
        $this -> where(["id",$post[0]['id'],"="]) -> get();
    }

    protected function where($filds){
        $this -> where []= "$filds[0] $filds[2] $filds[1]";
        return $this;
    }

    protected function from(){
        $this -> base .= " FROM " . $this -> tableName;
        return $this;
    }

    protected function fetchassoc($table){
        for($i = 0 ; $i < $table -> num_rows ; $i++){
            $array []= $table -> fetch_assoc();
        }
        return $array;
    }

    protected function getSql(){
        $crud = $this -> base;
        if(isset($this -> where)){
            $crud .= " WHERE ".implode("AND",$this -> where);
        }
        $this -> where = null;
        return $crud;
    }

    protected function get(){
        if(in_array($this -> type,["select","delete","create","update"])){
            if($this -> type == "create" || $this -> type == "update"){
                $base = $this -> getSql();
                $this -> connection -> query($base);
                return;
            }
            $base = $this -> from() -> getSql();
            if($this -> type == "delete"){
                $this -> connection -> query($base);
                return;
            }
            $table = $this -> connection -> query($base);
            return $this -> fetchassoc($table);
        }
    }
}