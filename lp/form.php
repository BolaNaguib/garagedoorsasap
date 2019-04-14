<?php
    require_once('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer();

    $name   = strip_tags($_POST['name']);
    $phone  = strip_tags($_POST['phone']);		
    $time   = strip_tags($_POST['time']);

    $subject    = "ASAP Garage Door Service - Callback Request";

    $recipient  = 'Garagedoorasapservice@gmail.com';
    $cc         = 'ericclimens@gmail.com';

    $email_content = "<h1><b>Callback Form Submission</b></h1><br/>";
    $email_content .= "Name: $name <br/>";
    $email_content .= "Phone: $phone <br/>";
    $email_content .= "Preferred Callback Time: $time <br/>";

    $mail->SetFrom($email, $name);

    $mail->AddAddress($recipient, "ASAP Garage Door Service");
    $mail->AddCC($cc, "ASAP Garage Door Service");

    $mail->Subject = $subject;
    $mail->MsgHTML($email_content);

    $sendnow = $mail->Send();

    if ($sendnow) {

        header('Location: thankyou.html');
        
        die();
    }  else {
        
        echo '<script language="javascript">alert("Failed, please submit form again or call us directly at (407) 535-6633.")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
     
    }


?>