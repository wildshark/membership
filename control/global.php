<?php

//session
$_SESSION['auth'] = true;
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60); //session for 30min

//token
if(!isset($_GET['token'])){
    $token = false;
}else{
    $token = $_GET['token'];
}


//global arrays

?>