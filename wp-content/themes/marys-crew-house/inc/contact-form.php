<?php

add_action('wp_ajax_contact_form','processContactForm');
add_action('wp_ajax_nopriv_contact_form','processContactForm');

function processContactForm()
{
	// Check for empty fields
	if(empty($_POST['name'])      ||
	   empty($_POST['email'])     ||
	   empty($_POST['phone'])     ||
	   //empty($_POST['message'])   ||
	   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	   {
	   echo "No arguments Provided!";
	   //return false;
	   $return = false;
	   }
	   
	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
	$phone = strip_tags(htmlspecialchars($_POST['phone']));
	$arrival = strip_tags(htmlspecialchars($_POST['arrival']));
	$departure = strip_tags(htmlspecialchars($_POST['departure']));
	$prefHouse = strip_tags(htmlspecialchars($_POST['prefHouse']));
	$message = strip_tags(htmlspecialchars($_POST['message']));
	   
	// Create the email and send the message
	$to = 'maryscrewhouse@yahoo.com'; // Add your email address inbetween the '' replacing yourname@maryscrewhouse.com - This is where the form will send a message to.
	$email_subject = "Website Contact Form:  $name";
	$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nArrival:\n$arrival\n\nDeparture:\n$departure\n\nPref House:\n$prefHouse\n\nMessage:\n$message";
	$headers = "From: noreply@maryscrewhouse.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@maryscrewhouse.com.
	$headers .= "Reply-To: $email_address";
	$mail_result = wp_mail($to,$email_subject,$email_body,$headers);
	
	//return true;
	$return = true;
	
	echo $mail_result;
	//echo $return;
	die();

}

?>