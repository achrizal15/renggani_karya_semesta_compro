<?php
 /*Below add your email*/
$to = 'add_user_email_here' . "\r\n";
$subject = 'Table Reservation Request';


$name = $_POST['complete_name'];
$email = $_POST['email_address']; 
$day = $_POST['day']; 
$no_of_guest = $_POST['no_of_guest'];
$time = $_POST['time'];


$headers = "Reply-To: $name <$email>\r\n"; 
$headers .= "Return-Path: The Sender <$email>\r\n"; 
$headers .= "From: $email" ."\r\n" .
$headers .= "Table Reservation Request\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

  $message = "************************************************** \r\n" .
  	         "Table Reservation Request from Foodio!  \r\n" .
             "************************************************** \r\n" .	
    
  	        "Name: " . $name . "\r\n" .
  	        "E-mail: " . $email . "\r\n" .
            "No. Of Guest: " . $no_of_guest . "\r\n" .
            "Date: " . $day . "\r\n" .
            "Time: " . $time . "\r\n";
         



	$mail = mail($to, $subject, $message, $headers); 

   if ($mail){
    /*Below add admin name and email*/
      $admin_name = 'add_admin_name';
      $admin_email = 'add_user_email_here';
      $admin_subject = 'Foodio Response';
      $admin_message = 'We jsut got a table reservation request from you. We will send you confirmation email and table number shortly. Thanks.';
      $admin_headers = "Reply-To: $admin_name <$admin_email>\r\n"; 
      $admin_headers .= "Return-Path: The Sender <$admin_email>\r\n"; 
      $admin_headers .= "Thank You\r\n";
      $admin_headers .= "MIME-Version: 1.0\r\n";
      $admin_headers .= "Content-type: text/html; charset=utf-8\r\n";
      $admin_headers .= "X-Priority: 3\r\n";
      $admin_headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
      $mail2 = mail($email, $admin_subject, $admin_message, $admin_headers); 
   }

 ?>