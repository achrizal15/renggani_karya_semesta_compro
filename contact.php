<?php
  /*Below add your email*/
$to = 'add_user_email_here' . "\r\n";
$subject = 'Contact Form';


$name = $_POST['complete_name'];
$email = $_POST['email_address']; 
$messagee = $_POST['message']; 
$phone = $_POST['phone'];

$headers  = "From: $name <$email\n";
$headers .= "Cc: testsite <$email>\n"; 
$headers .= "X-Sender: testsite <$email>\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1\n"; // Urgent message!
$headers .= "Return-Path: $email\n"; // Return path for errors
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
 
  $message = "************************************************** \r\n" .
  	         "Contact Message from Foodio - A Resturant Website!  \r\n" .
             "************************************************** \r\n" .	
    
  	        "Name: " . $name . "\r\n" .
  	        "E-mail: " . $email . "\r\n" .
            "Phone: " . $phone . "\r\n" .
            "Message: " . $messagee . "\r\n";
         



	$mail = mail($to, $subject, $message, $headers); 

  /*Now we are sending email to customer */
   if ($mail){
    /*Below add admin name and email*/
      $admin_name = 'add_admin_name'; 
      $admin_email = 'add_user_email_here';
      $admin_subject = 'Foodio Response';
      
      $headers  = "From: $name <$email\n";
      $headers .= "Cc: testsite <$email>\n"; 
      $headers .= "X-Sender: testsite <$email>\n";
      $headers .= 'X-Mailer: PHP/' . phpversion();
      $headers .= "X-Priority: 1\n"; // Urgent message!
      $headers .= "Return-Path: $email\n"; // Return path for errors
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

          $message = "************************************************** \r\n" .
             "Message from Foodio - A Resturant Website!  \r\n" .
             "************************************************** \r\n" .  
            "We just recieved yor message. Thanks for contacting us. \r\n";


      $mail2 = mail($email, $admin_subject, $message, $headers); 
   }

 ?>