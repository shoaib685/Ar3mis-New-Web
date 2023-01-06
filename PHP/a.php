<?php

$hash = password_hash('ayush', PASSWORD_DEFAULT);
// echo $hash;
$a = password_verify('ayush', '$2y$10$pfo.0pmGRCWKnE4FLprQqeFTdn/yPV1jN0pSCqpVYo7yHJfoqBSne');
if($a == true){
    echo 'a';
}   else{echo 'b';}

require 'functions.php';


session_start();
$usr = $_SESSION['email'];

include 'db.php';
// $sql = "SELECT ";
$sql = "SELECT * FROM login WHERE email = '$usr'";
$query = mysqli_query($conn, $sql);
echo 'q1';
while($rows = mysqli_fetch_assoc($query)){
    $status = $rows['status'];
    echo 'q2';
    if ($status == 'verified'){
        echo 'verified';
    }   else{    
        echo 'not verified';
    }
}



?>