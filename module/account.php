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


    public static function add(){

        $sql ="INSERT INTO `membership`.`tbl_user_acct`(`member_id`, `username`, `password`, `role`) VALUES (1, '1', '1', '1')";
    }

    public static function update(){

        $sql ="UPDATE `membership`.`tbl_user_acct` SET `password` = '111' WHERE `user_id` = 1";

    }



}


?>