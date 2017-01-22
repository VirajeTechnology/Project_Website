<?php
  
   
   $name = $_POST['name'];
   $email = $_POST['email'];
   $tech = $_POST['tech'];
   $subject = 'Feedback Form';
   $message = $_POST['message'];
   $to = 'carehealth213@gmail.com';

   mail($to, $subject, $message,"From: ".$email."\n"."Name: ".$name."\n"."Technology :".$tech);
   header('location:contact.html')
?>