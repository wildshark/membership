<?php
if(!isset($_SESSION['role'])){

}else{

    $page = $_REQUEST['_client'];

    switch($page){

        case"dashboard";

            $data = membership::fetch_member_id($conn,$_GET['member']);
            var_export($data);
            exit;

        break;
    }
}


?>