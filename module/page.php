<?php

switch($_REQUEST['page']){

    case"register";
        $regions = region::fetch($conn);
        require("template/register.php");
    break;

    case"user-login";
        session_destroy();
        require("template/user/login.php");
    break;

    case"admin-login";

    break;

}

?>