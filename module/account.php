<?php

class usern{

    public static function login($conn,$r){

        $sql ="SELECT * FROM `tbl_user_acct` WHERE `username`=? AND `password`=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->execute();

        return $stmt->fetch();

    }


    public static function add($conn,$r){

        $sql ="INSERT INTO `tbl_user_acct`(`member_id`, `full_name`, `username`, `password`, `role`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);
        $stmt->bindParam(5,$r[4]);

        return $stmt->execute();
    }

    public static function add_member_id($conn,$r){

        $sql="INSERT INTO `tbl_person_data`(`mem_id`, `full_name`) VALUES (?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);

        return $stmt->execute();
    }

    public static function update(){

        $sql ="UPDATE `membership`.`tbl_user_acct` SET `password` = '111' WHERE `user_id` = 1";

    }



}


?>