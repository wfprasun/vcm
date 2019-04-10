<?php
      $firstname = $_POST['fname']. "\r\n";
      $lastname = $_POST['lname']. "\r\n";
      $email = $_POST['email_question']. "\r\n";
      $company = $_POST['company_name']. "\r\n";
      $phone = $_POST['phone2']. "\r\n";
      $job = $_POST['job_title']. "\r\n";
      $question = $_POST['question']. "\r\n";

      $details = "First Name :".$firstname."Last Name:".$lastname."Email :".$email."Company :".$company."Phone :".$phone."Job :".$job."Question :".$question;
        
     $to = "walker@virtualconstructionmanagers.com";

      $subject = "A new user from question button";
      $txt = "A new user wants to contact \r\n".$details;
      $headers = "From: walker@virtualconstructionmanagers.com" . "\r\n";
      mail($to,$subject,$txt,$headers);

      
     $to1 = "robert@virtualconstructionmanagers.com";

      $subject1 = "A new user from question button";
      $txt1 = "A new user wants to contact \r\n".$details;
      $headers1 = "From: walker@virtualconstructionmanagers.com" . "\r\n";

      if(mail($to1,$subject1,$txt1,$headers1))
      {
          echo json_encode(array('result'=>1));
      }
      
?>