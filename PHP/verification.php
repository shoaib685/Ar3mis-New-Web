<?php
include 'db.php';
require 'functions.php';
session_start();
$username = $_SESSION['username'];
$email = $_SESSION['email'];


$sql1 = "SELECT * FROM `login` where email = '$email'";
$query1 = mysqli_query($conn, $sql1);
while($res = mysqli_fetch_assoc($query1)){
    $status = $res['status'];
    // die($status);
    if($status !='verified'){
        
        // checking if user is already verified or not
        
        $sql = "SELECT status FROM login where username = '$username'";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) != 'verified'){
            $rand_otp = rand(10000, 99999);
            $_SESSION['OTP'] = $rand_otp;
        
            // bla-bla-bla
            // allow for demo mode testing of emails
            define("DEMO", false); // setting to TRUE will stop the email from sending.
        
            // set the location of the template file to be loaded
            $template_file = "./templete.php";
        
            // set the email 'from' information
            $email_from = "NoReply <itsmeayushop007@gmail.com>";
        
            // create a list of the variables to be swapped in the html template
            $swap_var = array(
                "{SITE_ADDR}" => "http://localhost/",
                "{EMAIL_LOGO}" => "https://cdn.discordapp.com/attachments/953882400369303573/1060139141892952075/downloadar3-modified.png",
                "{EMAIL_TITLE}" => "Verification code",
                "{CUSTOM_URL}" => "http://TFAROTGaming.ga/",
                "{CUSTOM_IMG}" => "https://cdn.discordapp.com/attachments/953882400369303573/1060139141892952075/downloadar3-modified.png",
                "{TO_NAME}" => $username,
                "{VERI_CODE}" => $rand_otp,
                "{TO_EMAIL}" => $_SESSION['email']
            );
        
            // create the email headers to being the email
            $email_headers = "From: ".$email_from."\r\nReply-To: ".$email_from."\r\n";
            $email_headers .= "MIME-Version: 1.0\r\n";
            $email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
            // load the email to and subject from the $swap_var
            $email_to = $swap_var['{TO_EMAIL}'];
            $email_subject = $swap_var['{EMAIL_TITLE}']; // you can add time() to get unique subjects for testing: time();
        
            // load in the template file for processing (after we make sure it exists)
            if (file_exists($template_file))
                $email_message = file_get_contents($template_file);
            else
                die ("Unable to locate your template file");
        
            // search and replace for predefined variables, like SITE_ADDR, {NAME}, {lOGO}, {CUSTOM_URL} etc
            foreach (array_keys($swap_var) as $key){
                if (strlen($key) > 2 && trim($swap_var[$key]) != '')
                    $email_message = str_replace($key, $swap_var[$key], $email_message);
            }
        
            // display the email template back to the user for final approval
            // echo $email_message;
        
            // check if the email script is in demo mode, if it is then dont actually send an email
            if (DEMO)
                die("<hr /><center>This is a demo of the HTML email to be sent. No email was sent. </center>");
        
            // send the email out to the user	
            // if (mail($email_to, $email_subject, $email_message, $email_headers))
            // 	echo '<hr /><center>Success! Your email has been sent to '. $email_to .'</center>';
            // else
            // 	echo '<hr /><center> UNSUCCESSFUL... Your email was <b>NOT</b> sent. </center>';
        
        
            if(mail($email_to, $email_subject, $email_message, $email_headers)){
                include './verification_form.php';
            }   else{
                die("Couldn\'n send the OTP to verify your email");
            }
        }   else{
            echo $email;
            echo $username;
        }

    }   else{
        header('location: /');        
    }
}

?>