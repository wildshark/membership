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

    public static function fetch_total($conn){

        $sql ="SELECT tbl_region.*, count(tbl_person_data.person_id) as total FROM tbl_region INNER JOIN tbl_person_data ON tbl_region.region_id = tbl_person_data.region_id GROUP BY tbl_region.region_id";    
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function total($conn){

        $sql ="SELECT count(tbl_region.region_id) as total FROM tbl_region";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row['total'];
    }

    public static function view($conn,$r){

        $sql ="SELECT * FROM `tbl_region` LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetch();
    }

    public static function highest_population($conn){

        $sql ="SELECT tbl_region.*, count(tbl_person_data.person_id) AS total FROM tbl_region INNER JOIN tbl_person_data ON tbl_region.region_id = tbl_person_data.region_id GROUP BY tbl_region.region_id ORDER BY total DESC LIMIT 0, 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row['region_title'];
    }

    public static function lowest_population($conn){

        $sql ="SELECT tbl_region.*, count(tbl_person_data.person_id) AS total FROM tbl_region INNER JOIN tbl_person_data ON tbl_region.region_id = tbl_person_data.region_id GROUP BY tbl_region.region_id ORDER BY total LIMIT 0, 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row['region_title'];
    }

    public static function delete(){

        
    }

    public static function status(){

    }

}


?>