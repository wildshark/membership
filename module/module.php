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
                    $url["_user"] = "lgoin";    
               }else{
                   if(!isset($_SESSION['username'])){
                       $_SESSION = $response;
                   }
                    $token = md5($response['username'].$response['role']);
                    $_SESSION['token'] = $token;
                    if($response['role'] === "admin"){
                        $url['_admin'] = "dashboard";
                        $url['token'] = $token;
                    }else{
                        $url['_client'] = "dashboard";
                        $url['token'] = $token;
                    } 
               }
            }elseif($_action === "register"){

            }elseif($_action === "recovery"){

            }
        break;

        case"membership";
            if($_action ==="add"){

            }elseif($_action ==="update"){

            }elseif($_action ==="delete"){

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