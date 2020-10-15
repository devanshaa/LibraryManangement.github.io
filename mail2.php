<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
@$email=$_REQUEST['email'];
$query=mysqli_query($con,"select * from register_admin where email='$email' ");
$row=mysqli_fetch_array($query);

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "avnishmaurya182@gmail.com";
  $mail->Password = "priyanshi#258";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "avnishmaurya182@gmail.com";
  $mail->FromName = "Avanish";
  
  $mail->addAddress($row["email"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "Password recovery mail";

  $mail->Body = "<i><b>This is your password:</b></i>".$row["password"];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   echo "Message has been sent successfully";
  }
  ?>