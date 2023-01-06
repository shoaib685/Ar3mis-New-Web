<?php

if($_POST){
    require '../functions.php';
    $email = $_POST['email'];
    $password = $_POST['pass'];
    include '../db.php';


    $sql = "SELECT * FROM `login` WHERE email = '$email'";
	$query = mysqli_query($conn, $sql);
    if($query){
	while($seq = mysqli_fetch_assoc($query)){
		$acctual_pass = $seq['password'];
		$username = $seq['username'];
		$status = $seq['status'];
        $pass_v = password_verify($password, $acctual_pass);
		if($pass_v == true){
            session_start();
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
            $_SESSION['status'] = $status;
			$_SESSION['loggedin'] = 'true';
			if($status == 'not_v'){
				header('location: ../verification.php');
			}	else{
				header('location: /');
			}
		}	else{
			header('location: /login/?err=emailorpass_incorrect');
		}
	}   die('location: /login/?err=emailorpass_incorrect');
}



    
}   else{
    echo 'access forbidden';
}

?>