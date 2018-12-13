<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>traitement formulaire de contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="refresh" content="0; URL=index.html">
</head>

<?php
    $destinataire = 'monge.noellej@gmail.com';
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = $_POST['email'];
     
    $objet = $_POST['subject'];
     
    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'To: '.$nom."\n"; // Mail de reponse
    $headers .= 'From: "Message provenant du site skillx.fr"<'.$expediteur.'>'."\n"; // Expediteur
     
    $message =  '<div style="width: 100%; font-weight: bold"> Bonjour Olivier<br>Voici un message provenant de votre site skillx.fr'.$_POST['name'].'!<br><br>
                    Nom: '.$_POST['nom'].'<br>
						  Prenom: '.$_POST['prenom'].'<br>
						  Tel: '.$_POST['tel'].'<br>
						  E-mail: '.$_POST['email'].'<br>
						  Sujet: '.$_POST['subject'].'<br><br>
						  Message:<br> '.$_POST['message'].'</div>
                          piece-jointe:'.$_POST['pj'];
                          
     
    if(mail($destinataire, $objet, $message, $headers))
    {
        echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
    }
    else // Non envoyé
    {
        echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
    }
    header('Location: contact.html');
?>