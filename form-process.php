<?php

	$errorMSG = "";

	// NAME
	if (empty($_POST["name"])) {
		$errorMSG = "Name is required. ";
	} else {
		$name = $_POST["name"];
	}

	// EMAIL
	if (empty($_POST["email"])) {
		$errorMSG .= "Email is required. ";
	} else {
		$email = $_POST["email"];
	}

	// MESSAGE
	if (empty($_POST["subject"])) {
		$errorMSG .= "Subject is required. ";
	} else {
		$subject = $_POST["subject"];
	}
	
	// MESSAGE
	if (empty($_POST["message"])) {
		$errorMSG .= "Message is required. ";
	} else {
		$message = $_POST["message"];
	}


	$EmailTo = "info@yourdomain.com"; // Replace with your email.

	// prepare email body text
	$Body = "";
	$Body .= "Name: ";
	$Body .= $name;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $email;
	$Body .= "\n";
	$Body .= "Message: ";
	$Body .= $message;
	$Body .= "\n";

	// send email
	$success = @mail($EmailTo, $subject, $Body, "From:".$email);

	// redirect to success page
	if ($success && $errorMSG == ""){
	   echo "success";
	}else{
		if($errorMSG == ""){
			echo "Something went wrong :(";
		} else {
			echo $errorMSG;
		}
	}

?>