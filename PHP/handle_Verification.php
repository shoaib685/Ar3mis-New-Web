<?php
session_start();
if($_POST){
    include 'db.php';
    $otp = $_POST['otp'];
    $email = $_SESSION['email'];
    $acctual_otp = $_SESSION['OTP'];
    if($acctual_otp == $otp){
        $sql = "UPDATE login SET status='verified' WHERE email = '$email'";
        if(mysqli_query($conn, $sql)){
            header('location: /');
        }   else{
            die("Couldn't mark user as verified");
        }
    }   header('location: /verification.php?err=wrongotp');
}

?>