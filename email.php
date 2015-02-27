<?php
require_once('PHPMailer-master/class.phpmailer.php');
require 'PHPMailer-master/PHPMailerAutoload.php';
// git@heroku.com:prod-raadr.git
$email = trim($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: http://staging-raadr.herokuapp.com/?m=invalid');
}else{
// multiple recipients
  
$body = '
<html>
<head>
  <title>Notify me</title>
</head>
<body>
  <table>
    <tr>
      <th>email</th>
    </tr>
    <tr>
      <td>'.$email.'</td>
    </tr>
  </table>
</body>
</html>
';
 

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username and Password to use for SMTP authentication - use full email address for gmail
$mail->Username = "hr.initcoders@gmail.com";
$mail->Password = "!@#4567890";

$mail->setFrom('no-reply@raadr.com','Raadr');

$mail->addAddress('scott@cmdrhc.com');
$mail->Subject = 'Raadr - notify me';
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->msgHTML($body);


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}


header('Location: http://staging-raadr.herokuapp.com/?m=success');
}
?>