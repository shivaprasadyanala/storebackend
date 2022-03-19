<?php



if (!empty($_POST)) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];
       $toEmail = 'shivaprasadyanala@gmail.com';
       $emailSubject = 'New Customer Request ...!';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

       $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:, {$message }", "Subject:,{$subject}"];                          
       $body = join(PHP_EOL, $bodyParagraphs);
       mail($toEmail, $emailSubject, $body, $headers);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
          
           echo" Your Request Has Been Submitted... ";
        } 
        else {
          echo"Oops try again ...! ";
        }    
}
?>