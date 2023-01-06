<?php

$srvr = 'localhost';
$usr = 'root';
$pass = '';
$db = 'ar3mis';

if($conn = mysqli_connect($srvr, $usr, $pass, $db)){
    return true;
}   else{
    mysqli_connect_error();
}
?>