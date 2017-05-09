<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Personal Website'; 
    $to = 'pcharagondla@berkeley.edu'; 
    $subject = 'Hello';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
    	if (mail ($to, $subject, $body, $from)) { 
        	echo '<p>Thank you! Your message has been sent! I\'ll get in touch with you soon! </p>';
    	} else { 
        	echo '<p>Something went wrong, please go back and try again!</p>'; 
    	}
	} else {
    	echo '<p>You need to fill in all required fields!</p>';
	}
?>