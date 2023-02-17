<?php

require __DIR__.'/PHPMailer/src/Exception.php';
require __DIR__.'/PHPMailer/src/PHPMailer.php';
require __DIR__.'/PHPMailer/src/SMTP.php';

# use "use" after include or require

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


if(isset($_POST["send"])){

    
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth= true;
    $mail->Username='abdelmalikfofana33@gmail.com';
    $mail->Password = 'bxtciwiyycspbkqs';
    $mail->SMTPSecure ='ssl';
    $mail->Port = 465;
    $mail->isHTML = true;

    $mail->setFrom('abdelmalikfofana33@gmail.com');

    $mail->addAddress("abdel-malik_fofana@hotmail.com");
    $mail->addAddress("malikilinux@gmail.com");
    
    $mail->isHTML(true);
    $message = $_POST["nom"]."<br>".$_POST["prenom"]."<br>".$_POST["date"]."<br>".$_POST["mail"]."<br>".$_POST["numero"]."<br>".$_POST["pays"]."<br>".$_POST["ville"]."<br>".$_POST["nationalite"]."<br>".$_POST["origine"]."<br>".$_POST["status"]."<br>".$_POST["converti"]."<br>".$_POST["enfant"]."<br>".$_POST["taille"]."<br>".$_POST["poids"]."<br>".$_POST["physique"]."<br>".$_POST["prie"]."<br>".$_POST["physiquedes"]."<br>".$_POST["islam"]."<br>".$_POST["personnelle"]."<br>".$_POST["travail"]."<br>".$_POST["habille"]."<br> bois pas d'alcool : ".$_POST["alcool"]."<br>".$_POST["hobies"]."<br>".$_POST["critere"]."<br>".$_POST["autre"];

    $mail->Subject ="ELITE ZAWAJ";
    $mail->Body = $message;

    $mail->send();

    echo "
    <script> alert('Inscription envoyé');
    document.location.href = 'fin.php';
    </script> 
    "; 



}
?>