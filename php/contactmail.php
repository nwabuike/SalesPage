<?php
if($_POST)
{
require('constant.php');
    
    $user_name      = filter_var($_POST["full_name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$user_phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
	$user_state     = filter_var($_POST["state"], FILTER_SANITIZE_EMAIL);
	$user_bundle     = filter_var($_POST["bundle"], FILTER_SANITIZE_STRING);
	// $user_Jbundle     = filter_var($_POST["Jamb_bundle"], FILTER_SANITIZE_STRING);
    // $content   = filter_var($_POST["comments"], FILTER_SANITIZE_STRING);
    
    if(empty($user_name)) {
		$empty[] = "<b>Name</b>";		
	}
	if(empty($user_email)) {
		$empty[] = "<b>Email</b>";
	}
	if(empty($user_phone)) {
		$empty[] = "<b>Phone Number</b>";
	}	
	if(empty($user_state)) {
		$empty[] = "<b>State</b>";
	}
	if(empty($user_bundle)) {
		$empty[] = "<b>Bundle</b>";
	}
	
	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
        die($output);
	}
	
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> is an invalid Email, please correct it.'));
		die($output);
	}
	
	//reCAPTCHA validation
	if (isset($_POST['g-recaptcha-response'])) {
		
		require('../recaptcha/src/autoload.php');		
		
		$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY, new \ReCaptcha\RequestMethod\SocketPost());

		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

		  if (!$resp->isSuccess()) {
				$output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> Validation Required!'));
				die($output);				
		  }	
	}
	
	$toEmail = "nwabuikeanthony@gmail.com";
	$mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
	$mailBody = "User Name: " . $user_name . "\n";
	$mailBody .= "User Email: " . $user_email . "\n";
	$mailBody .= "Phone: " . $user_phone . "\n";
	$mailBody .= "State: " . $user_state . "\n";
	$mailBody .= "Bundle: " . $user_bundle . "\n";

	if (mail($toEmail, "Book Order", $mailBody, $mailHeaders)) {
	    $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the message. We will get back to you shortly.'));
	    die($output);
	} else {
	    $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact'.SENDER_EMAIL));
	    die($output);
	}
}
?>