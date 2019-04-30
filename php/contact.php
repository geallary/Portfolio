<?php

// Envoi du message sur ma boite mail

    $email = $_POST['email'];
    $nom = $_POST['name'];

    
    $sujet="Formulaire de contact";
    $mailDestinataire="contact@geoffreyallary.fr";

	$from = "From: ".$name."<".$email."> \nMime-Version:\n"; 
	$from .= " 1.0\nContent-Type: text/html; charset=UTF-8\n";
	$header= $Sujet;
	
	$msg_subject = "
            Formulaire de contact:
            
            Nom :   ".$name."
            Email :   ".$email."
			Objet :   ".$msg_subject."
            
            ----------- Commentaires -----------
            ".Stripslashes($_POST['message'])."
            ---------------------------------------";
            
	mail($mailDestinataire, $sujet, $msg_subject, $from);

?>