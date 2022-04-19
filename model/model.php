<?php

function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=dbo_lollapalooza;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function contacte($nom, $prenom, $mail, $message)
{
    //insertion bdd
    $db = dbConnect();
    $insert = $db->prepare("CALL contact(:nom,:prenom,:mail,:message);");
    $insert->bindParam(':nom', $nom);
    $insert->bindParam(':prenom', $prenom);
    $insert->bindParam(':mail', $mail);
    $insert->bindParam(':message', $message);
    $insert->execute();

    //Envoi du mail

    $from = "erwan.launay77@gmail.com";
    $to = "chamontin.lucas@gmail.com";
    $subject = "Contact portfolio";

    $headers = 'From: <' . $from . '>' . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $variables = array();

    $variables['nom'] = $nom;
    $variables['prenom'] = $prenom;
    $variables['mail'] = $mail;
    $variables['message'] = html_entity_decode($message);

    $template = file_get_contents("view/templateMail.php");

    foreach ($variables as $key => $value) {
        $template = str_replace('{{ ' . $key . ' }}', $value, $template);
    }

    mail($to, $subject, $template, $headers);
}
