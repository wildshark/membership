<?php
if(!isset($_SESSION['role'])){

}else{
    $regions = region::fetch($conn);
    $page = $_REQUEST['_client'];

    switch($page){

        case"dashboard";
            $id =$_GET['member'];
            $_SESSION['member'] =$id;
            $res = membership::fetch_member_id($conn,$id);
            if($res === false){
                $r['full_name'] ="";
                $r["bmb_number"]="";
                $r["gender"]="";
                $r["dob"]="";
                $r["region_id"]="";
                $r["region_title"]="";
                $r["constituency"]="";
                $r["branch"]="";
                $r["mobile1"]="";
                $r["mobile2"]="";
                $r["level_education"]="";
                $r["new_voter_id"]="";
                $r["old_voter_id"]="";
                $r["job_appointment"]="";
                $r["memberrship_card"]="";
                $r["card_number"]="";
                $r["support_bmb"]="";
                $r["occupation"]="";
                $r["strategies"]="";
            }else{
                $r = $res;
                $_SESSION['membership_id'] = $r['person_id'];
                $btn = "membership-update";
            }            
            require("template/user/dashboard.php");
        break;
    }
}


?>