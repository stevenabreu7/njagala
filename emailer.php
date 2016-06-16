<html>
<body>
<?php
  echo "works";
  // mail('stevenabreu7@gmail.com', 'first automatic email!', 'some message, i dont really care about');
  include("phpmailer/class.phpmailer.php");

  $mail = new PHPMailer();
  $mail->From = "test@test.de";
  $mail->FromName = "Test Email";
  $mail->Subject = "Subject";
  $mail->Body = "html body here: <p>this is cool</p> <h2>don't you think</h2>";
  $mail->AltBody = "plain text here: this is cool don't you think";
  $mail->AddAddress("stevenabreu7@gmail.com");
  $mail->AddCC("steven.abreu@arconsis.com");
  $mail->AddBCC("steven.abreu@kit.enactus.de");
  $mail->AddReplyTo("info@njagala.com");

  if ($mail->Send()) {
    echo 'sent';
  }

?>
</body>
</html>
