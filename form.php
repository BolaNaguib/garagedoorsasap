<?php
    require_once('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer();

    $name   = strip_tags($_POST['name']);
    $phone  = strip_tags($_POST['phone']);		
    $time   = strip_tags($_POST['time']);
    $city   = strip_tags($_POST['city']);

    $subject    = "Garage Door Asap Service";

    $recipient  = 'garagedoorasapservice@gmail.com';
    $cc         = 'ericclimens@gmail.com ';

    $email_content = "<h1><b>Callback Form Submission</b> / $city </h1><br/>";
    $email_content .= "Name: $name <br/>";
    $email_content .= "Phone: $phone <br/>";
    $email_content .= "Preferred Callback Time: $time <br/>";
    $email_content .= "City: $city<br/>";
    $email_content .= " <br/>";

    $mail->SetFrom($email, $name);

    $mail->AddAddress($recipient, "Garage Door ASAP Service ");
    $mail->AddCC($cc, "Garage Door ASAP Service ");

    $mail->Subject = $subject;
    $mail->MsgHTML($email_content);

    $sendnow = $mail->Send();

    if ($sendnow) {

        header('Location: thankyou.php');
        
        die();
    }  else {
        
        echo '<script language="javascript">alert("Failed, please submit form again ")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
     
    }


?>