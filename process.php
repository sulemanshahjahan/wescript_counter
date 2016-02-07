<?php





$email = $_POST['email'];





$to = 'suleman.shahjahan@gmail.com';

$subject = 'Contact Wescript';

$body = "Email: $email";





if(mail($to,$subject,$body)){

	header("Location: thank-you.html");

}



?>