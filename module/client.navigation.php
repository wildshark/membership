<?php
if(!isset($_SESSION['role'])){

}else{
    $regions = region::fetch($conn);
    $page = $_REQUEST['_client'];

    switch($page){

        case"dashboard";

            $data = membership::fetch_member_id($conn,$_GET['member']);            
            require("template/user/dashboard.php");
        break;
    }
}


?>