<?php
if(!isset($_REQUEST["_submit"])){
    $url['action'] =="missing-request";
}else{
    $submit = explode("-",$_REQUEST["_submit"]);
    $_module = $submit[0];
    $_action = $submit[1];

    switch($_module){

        case"user";
            if($_action === "login"){
                $q[] = $_REQUEST['username'];
                $q[] = $_REQUEST['username'];
                $response = usern::login($conn,$q);
                if($response === false){
                    $url["_user"] = "login";    
               }else{
                   if(!isset($_SESSION['username'])){
                       $_SESSION = $response;
                   }
                    $token = md5($response['username'].$response['role']);
                    $_SESSION['token'] = $token;
                    if($response['role'] === "admin"){
                        $url['_admin'] = "dashboard";
                        $url['token'] = $_SESSION['token'];
                    }else{
                        $url['_client'] = "dashboard";
                        $url['token'] = $_SESSION['token'];
                    } 
               }
            }elseif($_action === "register"){

            }elseif($_action === "recovery"){

            }
        break;

        case"membership";
            if($_action ==="add"){
                $r[]=$_REQUEST['full_name'];
                $r[]=$_REQUEST["bmb_number"];
                $r[]=$_REQUEST["gender"];
                $r[]=$_REQUEST["dob"];
                $r[]=$_REQUEST["region"];
                $r[]=$_REQUEST["constituency"];
                $r[]=$_REQUEST["branch"];
                $r[]=$_REQUEST["mobile1"];
                $r[]=$_REQUEST["mobile2"];
                $r[]=$_REQUEST["level_education"];
                $r[]=$_REQUEST["new_voter_id"];
                $r[]=$_REQUEST["old_voter_id"];
                $r[]=$_REQUEST["job_appointment"];
                $r[]=$_REQUEST["memberrship_card"];
                $r[]=$_REQUEST["card_number"];
                $r[]=$_REQUEST["support_bmb"];
                $r[]=$_REQUEST["occupation"];
                $r[]=$_REQUEST["strategies"];
                $response = membership::add($conn,$r);
            }elseif($_action ==="update"){
                $r[]=$_REQUEST['full_name'];
                $r[]=$_REQUEST["bmb_number"];
                $r[]=$_REQUEST["gender"];
                $r[]=$_REQUEST["dob"];
                $r[]=$_REQUEST["region"];
                $r[]=$_REQUEST["constituency"];
                $r[]=$_REQUEST["branch"];
                $r[]=$_REQUEST["mobile1"];
                $r[]=$_REQUEST["mobile2"];
                $r[]=$_REQUEST["level_education"];
                $r[]=$_REQUEST["new_voter_id"];
                $r[]=$_REQUEST["old_voter_id"];
                $r[]=$_REQUEST["job_appointment"];
                $r[]=$_REQUEST["memberrship_card"];
                $r[]=$_REQUEST["card_number"];
                $r[]=$_REQUEST["support_bmb"];
                $r[]=$_REQUEST["occupation"];
                $r[]=$_REQUEST["strategies"];
                $r[]=$_SESSION['membership_id'];
                $response = membership::add($conn,$r);
            }elseif($_action ==="delete"){

            }
            if($response == false){
                $url['_admin'] = "dashboard";
                $url['token'] = $_SESSION['token'];
                $url['e'] = 100;
            }else{
                $url['_admin'] = "dashboard";
                $url['token'] = $_SESSION['token'];
                $url['e'] = 200;
            } 
        break;

        case"region";
            if($_action ==="add"){

            }elseif($_action ==="update"){

            }elseif($_action ==="delete"){

            }
        break;
    }
}




?>