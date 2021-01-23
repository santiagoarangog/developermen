<?php
function sendEmail($mailTo,$subject,$body){
  /**
  * This example shows settings to use when sending via Google's Gmail servers.
  */
  //SMTP needs accurate times, and the PHP time zone MUST be set
  //This should be done in your php.ini, but this is how to do it if you don't have access to that
  //date_default_timezone_set('Etc/UTC');
  require_once 'PHPMailer/PHPMailerAutoload.php';
  //Create a new PHPMailer instance
  $mail = new PHPMailer;
  //Tell PHPMailer to use SMTP
  $mail->isSMTP();
  //Enable SMTP debugging
  // 0 = off (for production use)
  // 1 = client messages
  // 2 = client and server messages
  $mail->SMTPDebug = 2;
  //Ask for HTML-friendly debug output
  $mail->Debugoutput = 'html';
  /*------------------------------------------------------------------------GMAIL---------------------------------------------------------------*/
  // $mail->Host = 'smtp.gmail.com';
  // // use
  // // $mail->Host = gethostbyname('smtp.hostinger.com');
  // // if your network does not support SMTP over IPv6
  // //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  // $mail->Port = 587;
  // //Set the encryption system to use - ssl (deprecated) or tls
  // $mail->SMTPSecure = 'tsl';
  // //Whether to use SMTP authentication
  // $mail->SMTPAuth = true;
  // //Username to use for SMTP authentication - use full email address for gmail
  // $mail->Username = "contactanosdevelopermen@gmail.com";
  // //Password to use for SMTP authentication
  // $mail->Password = "5371473santiago";
  // //Set who the message is to be sent from
  // $mail->setFrom('contactanosdevelopermen@gmail.com', 'Support Developer Men');


  /*------------------------------------------------------------------------HOSTINGER---------------------------------------------------------------*/
  //Set the hostname of the mail server
  $mail->Host = 'smtp.hostinger.com';
  // use
  // $mail->Host = gethostbyname('smtp.gmail.com');
  // if your network does not support SMTP over IPv6
  //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  $mail->Port = 587;
  //Set the encryption system to use - ssl (deprecated) or tls
  $mail->SMTPSecure = 'tsl';
  //Whether to use SMTP authentication
  $mail->SMTPAuth = true;
  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username = "no-reply@developermen.com";
  //Password to use for SMTP authentication
  $mail->Password = "96052318863";
  //Set who the message is to be sent from
  $mail->setFrom('no-reply@developermen.com', 'Contactanos Developer Men');
  // Set an alternative reply-to address
  // $mail->addReplyTo($userMailTo,$userTo);
  // Set who the message is to be sent to
  // $mail->addAddress($userMailTo, $userTo);
  // Set the subject line

  /*En caso se requiera correos con copia, se hace esta funcion, y se manda un array desde donde se llama la funcion. */
  // foreach($cc as $email => $name)
  // {
  //    $mail->AddCC($email, $name);
  // }
  foreach ($mailTo as $key => $value){
    foreach($value as $email => $name)  {
      $mail->addAddress($email, $name);
    }
  }


  //Is the mail wrote in HTML?
  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->Subject = $subject;
  //Read an HTML message body from an external file, convert referenced images to embedded,
  //convert HTML into a basic plain-text alternative body
  //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
  //Replace the plain text body with one created manually
  //$mail->AltBody = 'This is a plain-text message body';
  //body
  $mail->Body    = $body;

  //Attach an image file
  //$mail->addAttachment('../assets/images/add.png');
  //send the message, check for errors
  if (!$mail->send()) {
    echo "Error de mailer: " . $mail->ErrorInfo;
    return false;
  } else {
    // echo "Mensaje enviado!";
    return true;
  }

}
