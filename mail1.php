<?php


 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
$message = $_POST['message'];
 mail('shivaprasadyanala@gmail.com',$subject,$message,'From:'.$email);
?>

<!-- <?php
  require_once './mailer/mailer/class.phpmailer.php'; 
  // creates object
  $mail = new PHPMailer(true); 
  
  if(isset($_POST['send']))
  {
    
   $email      = strip_tags($_POST['email']);
   
   $subject    = strip_tags($_POST['subject']);
   $text_message    = "Hello"; 
   
   $message  = strip_tags($_POST['message']);
   
   
 try
   {
    $mail->IsSMTP(); 
    $mail->isHTML(true);
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "ssl";                 
    $mail->Host       = "smtp.gmail.com";      
    $mail->Port        = '465';             
    $mail->AddAddress($email);
    
    $mail->Username   ="shivaprasadyanala@gmail.com";  
    $mail->Password   ="Clashofclans";            
    $mail->SetFrom('shivaprasadyanala@gmail.com','shiva1');
    $mail->AddReplyTo("shivaprasadysp99@gmail.com","shiva2");
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
     echo "hi";
    if($mail->Send())
    {
     
     $msg = "Hi, Your mail successfully sent to".$email." ";
     
    }
   }
   catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
   }
  } 
  
?> -->