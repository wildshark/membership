<?php

class region{

    public static function add(){

    }

    public static function update(){

    }

    public static function fetch($conn){

        $sql ="SELECT * FROM `tbl_region` LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function view($conn,$r){

        $sql ="SELECT * FROM `tbl_region` LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetch();
    }

    public static function delete(){

        
    }

    public static function status(){

    }

}


?>