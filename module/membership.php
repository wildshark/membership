<?php

class membership{

    
    public static function add($conn,$r){

        $sql ="INSERT INTO `tbl_person_data`(`full_name`, `bmb_number`, `gender`, `dob`, `region_id`, `constituency`, `branch`, `mobile1`, `mobile2`, `level_education`, `new_voter_id`, `old_voter_id`, `job_appointment`, `memberrship_card`, `card_number`, `support_bmb`, `occupation`, `strategies`) VALUES (?,?, ?, ?,?, ?, ?, ?, ?, ?,?,?, ?, ?,?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);
        $stmt->bindParam(5,$r[4]);
        $stmt->bindParam(6,$r[5]);
        $stmt->bindParam(7,$r[6]);
        $stmt->bindParam(8,$r[7]);
        $stmt->bindParam(9,$r[8]);
        $stmt->bindParam(10,$r[9]);
        $stmt->bindParam(11,$r[10]);
        $stmt->bindParam(12,$r[11]);
        $stmt->bindParam(13,$r[12]);
        $stmt->bindParam(14,$r[13]);
        $stmt->bindParam(15,$r[14]);
        $stmt->bindParam(16,$r[15]);
        $stmt->bindParam(17,$r[16]);
        $stmt->bindParam(18,$r[17]);

        return $stmt->execute();

    }

    public static function update($conn,$r){

        $sql ="UPDATE `tbl_person_data` SET `full_name` = ?, `bmb_number` = ?, `gender` = ?, `dob` = ?, `region_id` = ?, `constituency` = ?, `branch` = ?, `mobile1` = ?, `mobile2` = ?, `level_education` = ?, `new_voter_id` = ?, `old_voter_id` = ?, `job_appointment` = ?, `memberrship_card` = ?, `card_number` =?, `support_bmb` = ?, `occupation` = ?, `strategies` = ? WHERE `person_id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);
        $stmt->bindParam(5,$r[4]);
        $stmt->bindParam(6,$r[5]);
        $stmt->bindParam(7,$r[6]);
        $stmt->bindParam(8,$r[7]);
        $stmt->bindParam(9,$r[8]);
        $stmt->bindParam(10,$r[9]);
        $stmt->bindParam(11,$r[10]);
        $stmt->bindParam(12,$r[11]);
        $stmt->bindParam(13,$r[12]);
        $stmt->bindParam(14,$r[13]);
        $stmt->bindParam(15,$r[14]);
        $stmt->bindParam(16,$r[15]);
        $stmt->bindParam(17,$r[16]);
        $stmt->bindParam(18,$r[17]);
        $stmt->bindParam(19,$r[18]);

        return $stmt->execute();
    }

    public static function fetch($conn){

        $sql ="SELECT tbl_person_data.*, tbl_region.region_title FROM tbl_person_data INNER JOIN tbl_region ON tbl_person_data.region_id = tbl_region.region_id ORDER BY tbl_person_data.person_id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function view($conn,$id){

        $sql ="SELECT tbl_person_data.*, tbl_region.region_title FROM tbl_person_data INNER JOIN tbl_region ON tbl_person_data.region_id = tbl_region.region_id WHERE tbl_person_data.person_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$id);

        $stmt->execute();

        return $stmt->fetch();
    }

    public static function fetch_member_id($conn,$id){

        $sql ="SELECT tbl_person_data.*, tbl_region.region_title FROM tbl_person_data INNER JOIN tbl_region ON tbl_person_data.region_id = tbl_region.region_id WHERE tbl_person_data.member_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$id);

        $stmt->execute();

        return $stmt->fetch();


    }

    public static function total($conn){

        $sql ="SELECT count(tbl_person_data.person_id) as total FROM tbl_person_data";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row['total'];
    }
    
    public static function delete(){

        $sql ="DELETE FROM `membership`.`tbl_person_data` WHERE `person_id` =?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);

        return $stmt->execute();

    }

    public static function status(){

    }

    
}

?>