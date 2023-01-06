<?php

	$headers = "From: Ballu_rawat <subtoftgaming@gmail.com> \r\n";

	$to = "ballugamerofficial@gmail.com";
	$subject = "sending emails with php";
	
	$message = "Sending emails using php\n\n";
	$message .= "Even send custom multi line emails? Tell me more!";

	if ( mail($to, $subject, $message, $headers) )
		echo 'Success!';
	else
		echo 'UNSUCCESSFUL...';

?>