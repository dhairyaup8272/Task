<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username='dhairyaup8272@gmail.com';
    $mail->Password = 'yipyiclrhnqczypy';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('dhairyaup8272@gmail.com');
    
    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Name = $_POST["name"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo 
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'login.php';
    </script> 
    ";



    


}


?>