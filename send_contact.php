<?php

// Contact subject
$state ="$state";

// Details
$bundle="$bundle";
$phone="$phone";

// Mail of sender
$mail_from="$email";

// From
$header="from: $full_name <$mail_from>";


// Enter your email address
$to ='nwabuikeanthony@gmail.com';

$send_contact=mail($to,$state,$bundle,$phone,$header);


// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact){
echo "We've recived your contact information";
}
else {
echo "ERROR";
}
?>