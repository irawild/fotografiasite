<?php	
	if(empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['email']))
	{
		return false;
	}
	
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$email = $_POST['email'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Site.";
	$email_body = "You have received a new message. \n\n".
				  ": $ \n: $ \n: $ \n: $ \n: $ \n: $ \nEmail: $email \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>