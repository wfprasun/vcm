<?php

      $firstname = $_POST['first_name']. "\r\n";
      $lastname = $_POST['last_name']. "\r\n";
      $email = $_POST['email']. "\r\n";
      $company = $_POST['company']. "\r\n";
      $phone = $_POST['phone']. "\r\n";
      $job = $_POST['job']. "\r\n";

      $details = "First Name :".$firstname."Last Name:".$lastname."Email :".$email."Company :".$company."Phone :".$phone."Job :".$job;

      $to = "walker@virtualconstructionmanagers.com";
      $subject = "New user request";
      $txt = "A new user wants to contact \r\n".$details;
      $headers = "From: walker@virtualconstructionmanagers.com" . "\r\n";

      mail($to,$subject,$txt,$headers);

      
      $to1 = "robert@virtualconstructionmanagers.com";
      $subject1 = "New user request";
      $txt1 = "A new user wants to contact \r\n".$details;
      $headers1 = "From: walker@virtualconstructionmanagers.com" . "\r\n";

      mail($to1,$subject1,$txt1,$headers1);
?>