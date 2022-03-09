<?php

$regleNom = "/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]+$/";
$regleEmail = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";
$regleMessage = "/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ ',;()-]+$/";

if((isset($_POST['nom']))&&(preg_match($regleNom, $_POST['nom']))){
    $nom = $_POST['nom'];
}

if((isset($_POST['mail']))&&(preg_match($regleEmail, $_POST['mail']))){
    $email = $_POST['mail'];
}
if((isset($_POST['message']))&&(preg_match($regleMessage, $_POST['message']))){
    $message = $_POST['message'];
}
if(($nom)&&($email)&&($message)){
    $res = array('validation' => "Nous avons bien reçu votre demande. Nous vous répondrons sous 24h.");
    echo json_encode($res);
    mail("s.zemouri@codeur.online", "Bonjour, $nom", $message, "From: $email");
}


?>
