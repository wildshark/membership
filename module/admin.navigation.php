<?php
$path = "template/admin/";
$regions = region::fetch($conn);

//echo $_SESSION['token'];
//exit;

if(!isset($_SESSION['role'])){
    header("location: ?err=no-session");
}else{
    if((!isset($_SESSION['token']))||($_SESSION['token'] === 0)){
        header("location: ?err=no-session-token");
    }else{
         $page = $_REQUEST['_admin'];

        switch($page){

            case"dashboard";
                $hipop = region::highest_population($conn);
                if($hipop == false){
                    $hipop ="Null";
                }
                $lopop = region::lowest_population($conn);
                if($lopop == false){
                    $lopop ="Null";
                }
                $region = region::total($conn);
                if($region == false){
                    $region ="0";
                }
                $total = membership::total($conn);
                if($total == false){
                    $total = "0";
                };
                $data = region::fetch_total($conn);
                require($path."dashboard.php");
            break;

            case"membership";
                $data = membership::fetch($conn);
                require($path."membership.php");
            break;

            case"new.member";
                $r['full_name'] = "";
                $r["bmb_number"] = "";
                $r["gender"] = "";
                $r["dob"] = "";
                $r["region_id"] = "";
                $r["region_title"] = "";
                $r["constituency"] = "";
                $r["branch"] = "";
                $r["mobile1"] = "";
                $r["mobile2"] = "";
                $r["level_education"] = "";
                $r["new_voter_id"] = "";
                $r["old_voter_id"] = "";
                $r["job_appointment"] = "";
                $r["memberrship_card"] = "";
                $r["card_number"] = "";
                $r["support_bmb"] = "";
                $r["occupation"] = "";
                $r["strategies"] = "";
                $btn = "membership-add";
                include($path."form.php");
            break;

            case"update.member";
                $res =  membership::view($conn,$_GET['id']);
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
                require($path."form.php");
            break;

            case"new.region";
                require($path."form.php");
            break;

            case"regions";
                $data = region::fetch_total($conn);
                require($path."regions.php");
            break;

        } 
    }
}


?>