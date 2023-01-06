<?php

if($_POST){
    // echo 'true';
    require '../functions.php';
    $username = $_POST['usrname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['conf_pass'];
    include '../db.php';

$sql = "SELECT username FROM login WHERE username='$username'";
$query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) != 0){
    echo 'username is not available';
    }   else{
    $sql1 = "SELECT email FROM login WHERE email='$email'";
    $query1 = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query1) != 0){
        echo 'email is already registered';
    }   else{
        // password confirm verification
        if($password == $confirm_password){
            $hash_p = password_hash($password, PASSWORD_DEFAULT); // converting password into hash pass to store in database
            // saving user creditionals in database
            // calling signup function
            if(Signup($username, $email, $hash_p)){
                header('location: /verification.php');
            }   else{
                header('location: /verification.php'); // redirecting if smthing unexpected happen in signup function
            }
        }   else{
            header('location: /signup/?err=passneq');
        }
        // !password confirm verification
    }
  }
}   else{
    echo 'access forbidden';
}
