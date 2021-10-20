<?php
$path = "template/admin/";
$regions = region::fetch($conn);
cmbo_region($regions);
exit;
if(!isset($_SESSION['role'])){
    echo"session no";
}else{

    $page = $_REQUEST['_admin'];

    switch($page){

        case"dashboard";
            
            require($path."dashboard.php");
        break;

        case"membership";
            $res =  membership::fetch($conn);
            require($path."membership.php");
        break;

        case"new.member";
            $r['full_name'] ="";
            $r["bmb_number"]="";
            $r["gender"]="";
            $r["dob"]="";
            $r["region_id"]="";
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
            require($path."form.php");
        break;

        case"update.member";
            $r['full_name'] ="";
            $r["bmb_number"]="";
            $r["gender"]="";
            $r["dob"]="";
            $r["region_id"]="";
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
            $res =  membership::fetch($conn,$_GET['id']);
            require($path."form.php");
        break;

        case"new.region";
            require($path."form.php");
        break;

        case"regions";
            require($path."regions.php");
        break;

    }
}


?>